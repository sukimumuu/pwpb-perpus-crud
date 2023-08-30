@extends('layout.master')

@section('content')
<div class="container bg-light rounded">
    <p class="fw-bold pt-3 pb-2">Edit data Siswa</p>
    <form class="row g-3" action="/siswa-store" method="post" enctype="multipart/form-data">
        @csrf
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">NIS</label>
            <input type="text" class="form-control" id="inputPassword4" name="nis">
        </div>
        <div class="col-md-6">
            <label for="jurusan" class="form-label" style="font-size: 16px">Jurusan</label><br>
            <select name="jurusan" id="jurusan" class="form-control">
                    <option value="">Pilih Jurusan</option>
                @foreach ($jurusan as $item)
                    <option value="{{ $item->id }}">{{ $item->nama }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-12">
            <label for="inputPassword4" class="form-label">Nama</label>
            <input type="text" class="form-control" id="inputPassword4" name="nama">
        </div>
        <div class="col-6">
            <label for="inputAddress" class="form-label">Kelas</label>
            <select name="kelas" id="kelas" class="form-control">
                <option value="">Pilih</option>
                <option value="X">X</option>
                <option value="XI">XI</option>
                <option value="XII">XII</option>
            </select>
        </div>
        <div class="col-md-6">
            <label for="foto" class="form-label">Foto</label>
            <input type="file" class="form-control" id="foto" name="foto">
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-success ms-auto d-block">Kirim</button>
        </div>
    </form>
</div>
@endsection