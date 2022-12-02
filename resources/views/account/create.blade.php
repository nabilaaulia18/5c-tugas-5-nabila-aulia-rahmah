@extends('layout.master')
@section('title', 'Create Account')
@section('content')


    <div class="container">
        <div class="row justify-content-center my-3">
            <div class="col-12">
            <form action="/mahasiswaInsert" method="post" enctype="multipart/form-data">
                <div class="card">
                <div class="form-floating mb-3">
                    <input type="number" class="form-control" id="nama" name="nama" placeholder="Masukkan NPM">
                        <label for="nama">Nama</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="no_telp" name="no_telp" placeholder="Masukkan Nama">
                        <label for="no_telp">No_Telp</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="email" name="email" placeholder="Masukkan Alamat">
                        <label for="email">Email</label>
                @csrf
            </form>
           
                </div>
            </div>
        </div>
    </div>

@endsection
