@extends('layouts.admin.sbadmin.master')

@section('content')
    <div class="card card-info card-outline">
        <div class="card-body">
            <h3 class="my-1">
                Perhitungan dengan metode simple additive weighting (SAW)
            </h3>
        </div>
    </div>

    @php
        $index = 0;
        $datas = $hitung[$index++];
    @endphp
    <div class="card card-primary card-outline mt-4">
        <div class="card-header">
            <div class="d-flex justify-content-between w-100">
                <h6 class="card-title">1. Tabel alternatif</h6>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <td class="font-weight-bold">Kriteria</td>
                    @foreach ($datas['header'] as $k)
                        <td>
                            {{ $k['nama'] }}
                        </td>
                    @endforeach
                </tr>
                <tr>
                    <td class="font-weight-bold">Bobot</td>
                    @foreach ($datas['header'] as $k)
                        <td title="{{ $k['bobot'] }} / 100%" data-toggle="tooltip">
                            {{ $k['bobot'] / 100 }}
                        </td>
                    @endforeach
                </tr>
            </table>
        </div>
    </div>

    <div class="card card-primary card-outline mt-4">
        <div class="card-header">
            <div class="d-flex justify-content-between w-100">
                <h6 class="card-title">1. Tabel alternatif</h6>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-striped table-hover w-100 datatable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        @foreach ($datas['header'] as $header)
                            <th title="{{ $header['bobot'] }}" data-toggle="tooltip">
                                {{ $header['nama'] }} ({{ $header['kode'] }})
                            </th>
                        @endforeach
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datas['body'] as $k => $body)
                        <tr>
                            <td>{{ $k + 1 }}</td>
                            <td>{{ $body['nama'] }}</td>
                            @foreach ($body['nilais'] as $nilai)
                                @if ($nilai != null)
                                    <td>
                                        {{ $nilai['nilai'] }}
                                    </td>
                                @else
                                    <td title="Data Tidak Valid" data-toggle="tooltip"></td>
                                @endif
                            @endforeach
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th></th>
                        <th>MAX</th>
                        @foreach ($datas['maxs'] as $max)
                            <th>
                                {{ $max }}
                            </th>
                        @endforeach
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>

    @php $datas = $hitung[$index++]; @endphp
    <div class="card card-primary card-outline mt-4">
        <div class="card-header">
            <div class="d-flex justify-content-between w-100">
                <h6 class="card-title">2. Dibagi nilai tertinggi</h6>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-striped table-hover w-100 datatable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        @foreach ($datas['header'] as $header)
                            <th title="{{ $header['bobot'] }}" data-toggle="tooltip">
                                {{ $header['nama'] }} ({{ $header['kode'] }})
                            </th>
                        @endforeach
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datas['body'] as $k => $body)
                        <tr>
                            <td>{{ $k + 1 }}</td>
                            <td>{{ $body['nama'] }}</td>
                            @foreach ($body['nilais'] as $nilai)
                                @if ($nilai != null)
                                    <td title="{{ $nilai['nilai_str'] }}" data-toggle="tooltip">
                                        {{ $nilai['nilai'] }}
                                    </td>
                                @else
                                    <td title="Data Tidak Valid" data-toggle="tooltip"></td>
                                @endif
                            @endforeach
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    @php $datas = $hitung[$index++]; @endphp
    <div class="card card-primary card-outline mt-4">
        <div class="card-header">
            <div class="d-flex justify-content-between w-100">
                <h6 class="card-title">3. Dikali Bobot Kriteria</h6>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-striped table-hover w-100 datatable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        @foreach ($datas['header'] as $header)
                            <th title="{{ $header['bobot'] }} / 100" data-toggle="tooltip">
                                {{ $header['nama'] }} ({{ $header['kode'] }})
                            </th>
                        @endforeach
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datas['body'] as $k => $body)
                        <tr>
                            <td>{{ $k + 1 }}</td>
                            <td>{{ $body['nama'] }}</td>
                            @foreach ($body['nilais'] as $nilai)
                                @if ($nilai != null)
                                    <td title="{{ $nilai['nilai_str'] }}" data-toggle="tooltip">
                                        {{ $nilai['nilai'] }}
                                    </td>
                                @else
                                    <td title="Data Tidak Valid" data-toggle="tooltip"></td>
                                @endif
                            @endforeach
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    @php $datas = $hitung[$index++]; @endphp
    <div class="card card-primary card-outline mt-4">
        <div class="card-header">
            <h6 class="card-title">4. Dijumlahkan untuk mendapatkan hasil</h6>
            <small>Nilai dari setiap alternatif di jumlahkan kemudian hasilnya di buat ranking</small>
        </div>
        <div class="card-body">
            <table class="table table-striped table-hover w-100 datatable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        @foreach ($datas['header'] as $header)
                            <th title="{{ $header['bobot'] }} / 100" data-toggle="tooltip">
                                {{ $header['nama'] }} ({{ $header['kode'] }})
                            </th>
                        @endforeach
                        <th>Total</th>
                        <th>Peringkat</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datas['body'] as $k => $body)
                        <tr>
                            <td>{{ $k + 1 }}</td>
                            <td>{{ $body['nama'] }}</td>
                            @foreach ($body['nilais'] as $nilai)
                                @if ($nilai != null)
                                    <td title="{{ $nilai['nilai_str'] }}" data-toggle="tooltip">
                                        {{ $nilai['nilai'] }}
                                    </td>
                                @else
                                    <td title="Data Tidak Valid" data-toggle="tooltip"></td>
                                @endif
                            @endforeach
                            <td title="{{ $body['total_str'] }}" data-toggle="tooltip">
                                {{ $body['total'] }}
                            </td>
                            <td>{{ $body['rank'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('stylesheet')
    <link rel="stylesheet"
        href="{{ asset_admin('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css', name: 'adminlte3') }}" />
    <link rel="stylesheet"
        href="{{ asset_admin('plugins/datatables-responsive/css/responsive.bootstrap4.min.css', name: 'adminlte3') }}" />
@endsection

@section('javascript')
    <script src="{{ asset_admin('plugins/datatables/jquery.dataTables.min.js', name: 'adminlte3') }}"></script>
    <script src="{{ asset_admin('plugins/datatables/jquery.dataTables.min.js', name: 'adminlte3') }}"></script>
    <script src="{{ asset_admin('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js', name: 'adminlte3') }}"></script>
    <script src="{{ asset_admin('plugins/datatables-responsive/js/dataTables.responsive.min.js', name: 'adminlte3') }}">
    </script>
    <script src="{{ asset_admin('plugins/datatables-responsive/js/responsive.bootstrap4.min.js', name: 'adminlte3') }}">
    </script>
    <script src="{{ asset_admin('plugins/loading/loadingoverlay.min.js', name: 'sash') }}"></script>
    @php
        $resource = resource_loader(blade_path: $view);
    @endphp
    <script>
        $(document).ready(() => {
            $('.datatable').each((i, e) => {
                const table_html = $(e);
                const new_table = $(e).DataTable({
                    scrollX: true,
                    language: {
                        url: datatable_indonesia_language_url
                    },
                    columnDefs: [{
                        orderable: false,
                        targets: [0]
                    }],
                });

                new_table.on('draw.dt', function() {
                    tooltip_refresh();
                    var PageInfo = table_html.DataTable().page.info();
                    new_table.column(0, {
                        page: 'current'
                    }).nodes().each(function(cell, i) {
                        cell.innerHTML = i + 1 + PageInfo.start;
                    });
                });
            });
        })
    </script>
@endsection
