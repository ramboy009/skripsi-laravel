@extends('layouts.main')
@section('contents')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><b>Tambah Diagnosis</b></h1>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Tambah Gejala</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('diagnosis.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for=""><b>Kriteria</b>    </label>
                            <input type="text" name="kriteria" class="form-control" 
                                placeholder="Masukan kode gejala">ko
                        </div>
                        <div class="form-group">
                            <label for=""><b>Kode Gejala</b>    </label>
                            <input type="text" name="kode_gejala" class="form-control" 
                                placeholder="Masukan kode gejala"
                                onkeyup="this.value = this.value.toUpperCase()">
                        </div>
                        <div class="form-group">
                            <label for=""><b>Nama Gejala</b></label>
                            <input type="text" name="nama" class="form-control"
                                placeholder="Masukan gejala baru">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <label for="" class="mb-0"><b>Bobot Penilaian Gejala</b></label>
                        <div class="form-group row d-flex">
                            <div class="col-lg-2 text-center">
                                <label for="" class="mb-0">A</label>
                                <input type="text" name="hep_a" class="form-control input-number text-center">
                            </div>
                            <div class="col-lg-2 text-center">
                                <label for="" class="mb-0">B</label>
                                <input type="text" name="hep_b" class="form-control input-number text-center">
                            </div>
                            <div class="col-lg-2 text-center">
                                <label for="" class="mb-0">C</label>
                                <input type="text" name="hep_c" class="form-control input-number text-center">
                            </div>
                            <div class="col-lg-2 text-center">
                                <label for="" class="mb-0">D</label>
                                <input type="text" name="hep_d" class="form-control input-number text-center">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-sm-flex align-items-center justify-content-end">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('script')
    <script src="{{ asset('sbadmin') }}/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ asset('sbadmin') }}/vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable();

            var inputNumber = $(".input-number");
            inputNumber.val(0)
            inputNumber.on('keypress', function() {
                var value = $(this).val();
                if (isNaN(value) || value < 0 || value > 1) {
                    $(this).val('');
                    $(this).focus();
                }
            })
        });
    </script>
@endpush
