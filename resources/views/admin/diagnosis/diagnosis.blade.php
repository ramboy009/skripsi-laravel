@extends('layouts.main')
@section('contents')
    <!-- Page Heading -->
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><b>Kelola Diagnosis</b></h1>
        <a href="{{ route('diagnosis.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus fa-sm text-white-50"></i> Tambah Gejala</a>
    </div>
    <p class="mb-4">Silahkan memilih gejala sesuai dengan kondisi anda, anda dapat memilih kepastian kondisi gejala
         dari "pasti tidak" sampai "pasti ya", jika sudah tekan tombol proses di bawah untuk melihat hasil.</a>.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tabel Gejala Hepatitis</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Gejala</th>
                            <th>Gejala</th>
                            <th>Pilih Kondisi</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>G001</td>
                            <td>Demam</td>
                            <td>Pilih jika sesuai</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>G002</td>
                            <td>Mual</td>
                            <td>Pilih jika sesuai</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>G003</td>
                            <td>Mudah lelah</td>
                            <td>Pilih jika sesuai</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>G004</td>
                            <td>Menguning</td>
                            <td>Pilih jika sesuai</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@push('script')
<script src="{{ asset('sbadmin') }}/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ asset('sbadmin') }}/vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable();
        });
    </script>
@endpush
