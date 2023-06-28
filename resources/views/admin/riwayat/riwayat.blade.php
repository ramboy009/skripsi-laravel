@extends('layouts.main')
@section('contents')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><b>Riwayat</b></h1>
</div>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"><b>Tabel Riwayat</b></h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Tanggal</th>
                        <th>Jenis Hepatitis</th>
                        <th>Akurasi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Tiger</td>
                        <td>16 juli 2023</td>
                        <td>Hepatitis C</td>
                        <td>95%</td>
                        <td>Detail</td>
                    </tr>
                    <tr>
                        <td>Garrett</td>
                        <td>28 juli 2023</td>
                        <td>Hepatitis B</td>
                        <td>93%</td>
                        <td>Detail</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

@endsection