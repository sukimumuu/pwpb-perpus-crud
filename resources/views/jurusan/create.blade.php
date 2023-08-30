@extends('layout.master')

@section('content')
<div class="container bg-light rounded">
    <p class="fw-bold pt-3 pb-2">Tambah data jurusan</p>
    <form class="row g-3" action="/jurusan-store" method="post">
        @csrf
        <div class="col-md-12">
            <label for="inputPassword4" class="form-label">Nama Jurusan</label>
            <input type="text" class="form-control" name="nama">
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-success ms-auto d-block">Kirim</button>
        </div>
    </form>
</div>
@endsection