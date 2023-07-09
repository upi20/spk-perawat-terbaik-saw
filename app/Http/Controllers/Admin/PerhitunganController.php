<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AlternatifNilai;
use Illuminate\Http\Request;

class PerhitunganController extends Controller
{
    public function index(Request $request)
    {
        $hitung = $this->hitung($request);
        $page_attr = adminBreadcumb(h_prefix());
        $view = path_view('pages.admin.perhitungan');
        $data = compact('page_attr', 'view', 'hitung');
        $data['compact'] = $data;

        return view($view, $data);
    }

    public function hitung($request)
    {
        $index = 0;

        // 1 tabel alternatif //===================================================================
        $datatable = AlternatifNilai::datatable($request);
        $datatable = json_encode($datatable);
        $datatable = json_decode($datatable, true);

        // 1.1. Mengambil nilai max dari tiap2 tahapan
        // data max
        $maxs = [];
        foreach ($datatable['header'] as $i => $h) $maxs[$i] = 0;

        foreach ($datatable['body'] as $b) {
            foreach ($b['nilais'] as $i => $n) {
                $nilai = $n == null ? 0 : $n['nilai'];
                $maxs[$i] = $maxs[$i] > $nilai ? $maxs[$i] : $nilai;
            }
        }

        $datatable['maxs'] = $maxs;
        $hitung[$index++] = $datatable;


        // 2. Dibagi nilai tertinggi //============================================================
        $nilai_tertinggi_body = [];
        foreach ($hitung[$index - 1]['body'] as $body) {
            $nilais = [];
            foreach ($body['nilais'] as $i => $n) {
                if ($n == null) {
                    $nilais[] = null;
                } else {
                    $max = $hitung[$index - 1]['maxs'][$i];
                    $nilai = $n['nilai'];
                    $n['nilai'] = $max == 0 ? 0 : ($nilai / $max);
                    $n['nilai_str'] = "{$nilai}/{$max}";
                    $nilais[] = $n;
                }
            }

            $body['nilais'] = $nilais;
            $nilai_tertinggi_body[] = $body;
        }

        $datatable['body'] = $nilai_tertinggi_body;
        $hitung[$index++] = $datatable;

        // 3. Dikali bobot kriteria //==============================================================
        $bobot_tahapan = [];
        foreach ($hitung[$index - 1]['body'] as $body) {
            $nilais = [];
            $total = 0;
            $total_str = "";
            foreach ($body['nilais'] as $i => $n) {
                if ($n == null) {
                    $nilais[] = null;
                } else {
                    $bobot = $hitung[$index - 1]['header'][$i]['bobot'] / 100;
                    $nilai = $n['nilai'];
                    $n['nilai'] = $nilai * $bobot;
                    $n['nilai_str'] = "{$nilai}*{$bobot}";
                    $nilais[] = $n;

                    $nilai = $n['nilai'];
                    $total += $nilai;
                    $total_str .= (($total_str == '' ? '' : ' + ') . $nilai);
                }
            }

            $body['total'] = $total;
            $body['total_str'] = $total_str;
            $body['nilais'] = $nilais;
            $bobot_tahapan[] = $body;
        }

        $datatable['body'] = $bobot_tahapan;
        $hitung[$index++] = $datatable;

        // 4. sortir by rank
        $collects = collect($datatable['body'])->sortByDesc('total')->values()->all();
        $sorts = [];
        foreach ($collects as $k => $v) {
            $v['rank'] = $k + 1;
            $sorts[] = $v;
        }
        $datatable['body'] = $sorts;

        $hitung[$index++] = $datatable;
        return $hitung;
    }
}
