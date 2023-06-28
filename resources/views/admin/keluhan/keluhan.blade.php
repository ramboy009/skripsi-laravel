@extends('layouts.main')
@section('contents')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><b>Keluhan</b></h1>
        <a href="{{ route('keluhan.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fa-regular fa-pen-to-square text-white-50"></i>  Edit Gejala</a>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><b>Form Tambahan Keluhan</b></h6>
        </div>
        <div class="card-body">
            <form action="" method="POST">
                <div class="form-group row">
                    @csrf
                    <div class="col-lg-11">
                        <input type="text" class="form-control form-control-user" id="keluhan"
                            placeholder="Masukan keluhan disini ....">
                    </div>
                    <div class="col-lg-1">
                        <button type="submit" class="btn btn-primary btn-user btn-block">
                            Kirim
                        </button>
                    </div>
                </div>
            </form>

            {{-- table --}}
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th class="text-primary"><b>Keluhan pengguna</b></th>
                </tr>
            </thead>
            <tfoot>
                <tbody>
                    <tr>
                        <td>Tiger Nixon</td>
                    </tr>
                    <tr>
                        <td>Tiger Nixon</td>
                    </tr>
                    <tr>
                        <td>Tiger Nixon</td>
                    </tr>
                    <tr>
                        <td>Tiger Nixon</td>
                    </tr>
            </tfoot>
        </div>
            </div>
        </table>
            {{-- end of table --}}
        </div>
    </div>
@endsection
