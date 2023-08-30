@extends('layout.master')

@section('content')
<div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Data Jurusan</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
                <div class="col-12 p-3">
                    <button class="btn btn-success d-block ms-auto"><a class="text-white" href="{{ route('create-jurusan') }}">Tambah data jurusan</a></button>
                </div>
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7">Nama Jurusan</th>
                      <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach ($jurusan as $item)
                    <tr>
                        <td class="align-middle text-center">
                            <p class="text-xs font-weight-bold mb-0">{{ $item->nama }}</p>
                        </td>
                      <td class="align-middle text-center">
                        <a href="/jurusan-edit/{{ $item->id }}" class="font-weight-bold text-sm" data-toggle="tooltip" data-original-title="Edit user" style="color: rgb(255, 242, 0)">
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
