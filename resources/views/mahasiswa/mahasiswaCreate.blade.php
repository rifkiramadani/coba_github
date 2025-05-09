@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-body">
            <center><h1>Masukkan Data Mahasiswa</h1></center>
            <form action="/mahasiswa" method="post">
                @csrf
                <div class="mb-3">
                    <label for="name">Nama</label>
                    <input class="form-control" type="text" name="name" id="name">
                </div>
                <div class="mb-3">
                    <label for="npm">NPM</label>
                    <input class="form-control" type="text" name="npm" id="npm">
                </div>
                <div class="mb-3">
                    <label for="alamat">Alamat </label>
                    <input class="form-control" type="text" name="alamat" id="alamat">
                </div>
                <div class="mb-3">
                    <label for="fakultas_id">Fakultas</label>
                    <select class="form-control" name="fakultas_id" id="fakultas_id">
                        @foreach ($fakultas as $f)
                            <option value="{{$f->id}}">{{$f->name}}</option>
                        @endforeach
                    </select>
                </div>
                <button class="btn btn-primary" type="submit">+TAMBAH DATA</button>
            </form>
        </div>
    </div>
@endsection