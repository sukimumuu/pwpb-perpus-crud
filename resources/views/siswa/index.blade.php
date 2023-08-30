@extends('layout.master')

@section('content')
<div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Data siswa</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
                <div class="col-12 p-3">
                    <button class="btn btn-success d-block ms-auto"><a class="text-white" href="{{ route('create-siswa') }}">Tambah data siswa</a></button>
                </div>
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7">NIS</th>
                      <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7 ps-2">Nama</th>
                      <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7">Kelas</th>
                      <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7">Jurusan</th>
                      <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($siswa as $item)
                    <tr>
                        <td class="align-middle text-center">
                            <p class="text-xs font-weight-bold mb-0">{{ $item->nis }}</p>
                        </td>
                        <td>
                          <div class="d-flex px-2 py-1">
                            <div>
                              <img src="{{ asset('fotosiswa/'.$item->foto) }}" class="avatar avatar-sm me-3" alt="user1">
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                              <h6 class="mb-0 text-sm">{{ $item->nama }}</h6>
                            </div>
                          </div>
                        </td>
                      <td class="align-middle text-center text-sm">
                        <span class="text-secondary font-weight-bold">
                            {{ $item->kelas }}
                        </span>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="text-secondary font-weight-bold">{{ ($item->jurusan !== null) ? $item->jurusans->nama : '-' }}</span>
                      </td>
                      <td class="align-middle text-center">
                        <a href="/siswa-edit/{{ $item->id }}" class="font-weight-bold text-sm" data-toggle="tooltip" data-original-title="Edit user" style="color: rgb(255, 242, 0)">
                          <i class="fas fa-edit"></i>
                        </a>
                        <a href="#" class="text-danger font-weight-bold text-sm delete" data-id="{{ $item->id }}" data-toggle="tooltip" data-original-title="Edit user">
                          <i class="fas fa-trash"></i>
                        </a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection