<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Haruncpi\LaravelUserActivity\Traits\Loggable;
use Illuminate\Http\Request;

class AlternatifNilai extends Model
{
    use HasFactory, Loggable;

    protected $fillable = [
        'alternatif_id',
        'kriteria_id',
        'nilai',
    ];

    protected $primaryKey = 'id';
    protected $table = 'alternatif_nilai';
    const tableName = 'alternatif_nilai';

    public function alternatif()
    {
        return $this->belongsTo(Alternatif::class, 'alternatif_id', 'id');
    }

    public function kriteria()
    {
        return $this->belongsTo(Kriteria::class, 'kriteria_id', 'id');
    }

    public static function datatable(Request $request)
    {
        $kriterias = Kriteria::orderBy('kode')->get();
        $alternatifs = Alternatif::with(['nilais'])->orderBy('nama')->get();

        // sort nilai berdasarkan kriteria
        $results = [];
        foreach ($alternatifs as $alternatif) {
            $new_nilais = [];
            foreach ($kriterias as $kriteria) {
                $get_nilai = null;
                foreach ($alternatif->nilais as $nilai) {
                    if ($nilai->kriteria_id == $kriteria->id) $get_nilai = $nilai;
                }
                $new_nilais[] = $get_nilai;
            }

            unset($alternatif->nilais);
            $alternatif['nilais'] = $new_nilais;
            $results[] = $alternatif;
        }

        return [
            'header' => $kriterias,
            'body' => $results
        ];
    }

    public static function getEdit(Alternatif $alternatif)
    {
        $kriterias = Kriteria::with(['alternatif_nilais' => fn ($query) => $query->where('alternatif_id', $alternatif->id)])->orderBy('kode')->get();
        $alternatif->kriterias = $kriterias;
        return $alternatif;
    }
}
