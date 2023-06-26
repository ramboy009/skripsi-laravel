@extends('layouts.guest')
@section('body')
    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image">
                        {{-- <img src="{{ asset('img') }}/doctor-hand.jpg" alt=""> --}}
                    </div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Daftar Akun</h1>
                            </div>
                            <form class="user">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="namalengkap"
                                        placeholder="Nama Lengkap">
                                </div>
                                <div class="form-group">
                                    {{-- <label for="">Tanggal Lahir</label> --}}
                                    <input type="text" class="form-control form-control-user" id="tanggallahir"
                                        placeholder="Tanggal Lahir" onfocus="(this.type='date')" onfocusout="(this.type='text')">
                                </div>
                                <div class="form-group row pl-4">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input class="form-check-input" type="radio" name="gender" id="laki2">
                                        <label class="form-check-label" for="laki2">
                                          Laki-laki
                                        </label>
                                      </div>
                                      <div class="col-sm-6\">
                                        <input class="form-check-input" type="radio" name="gender" id="perempuan" checked>
                                        <label class="form-check-label" for="perempuan">
                                          Perempuan
                                        </label>
                                      </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="alamat"
                                        placeholder="Alamat">
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control form-control-user" id="notelfon"
                                        placeholder="No Telfon">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="username"
                                        placeholder="Username">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user"
                                            id="password" placeholder="Password">
                                    </div>
                                </div>
                                <a href="login.html" class="btn btn-primary btn-user btn-block">
                                    Daftar
                                </a>
                                {{-- <hr>
                                <a href="index.html" class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i> Register with Google
                                </a>
                                <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                    <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                                </a> --}}
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="/login">Sudah punya akun? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
