@extends('layout.master')

@section('content')
<div class="container bg-light rounded">
    <p class="fw-bold pt-3 pb-2">Edit data siswa</p>
    <form class="row g-3" action="/siswa-update/{{ $siswa->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="col-md-6">
            <label class="form-label">NIS</label>
            <input type="text" class="form-control" value="{{ $siswa->nis }}" name="nis">
        </div>
        <div class="col-md-6">
            <label for="inputState" class="form-label">Jurusan</label>
            <select name="jurusan" id="jurusan" class="form-control">
                @foreach ($jurusan as $item)
                    <option value="{{ $item->id }}">{{ $item->nama }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-12">
            <label class="form-label">Nama</label>
            <input type="text" class="form-control" value="{{ $siswa->nama }}" name="nama">
        </div>
        <div class="col-6">
            <label for="inputAddress" class="form-label">Kelas</label>
            <select id="inputState" class="form-select" name="kelas">
                <option selected>{{ $siswa->kelas }}    </option>
                <option value="X">X</option>
                <option value="XI">XI</option>
                <option value="XII">XII</option>
            </select>
        </div>
        <div class="col-md-6">
            <label for="inputCity" class="form-label">Foto</label>
            <input type="file" class="form-control" id="inputCity" name="foto">
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary ms-auto d-block">Edit</button>
        </div>
    </form>
</div>
@endsection