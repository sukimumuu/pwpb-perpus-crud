<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    public function create(){
        return view('jurusan.create', [
            "title" => "Tambah data jurusan"
        ]);
    }
    public function store(Request $req){
        $jurusan = Jurusan::create($req->all());
        return redirect()->route('jurusan');
    }
    public function edit($id){
        $jurusan = Jurusan::find($id);
        return view('jurusan.edit', compact('jurusan'), [
            "title" => "Edit nama jurusan"
        ]);
    }
    public function update(Request $req, $id){
        $jurusan = Jurusan::find($id);
        $jurusan->update($req->all());
        return redirect()->route('jurusan');
    }
    public function destroy($id){
        $jurusan = Jurusan::find($id);
        $jurusan->destroy($id);
        return redirect()->route('jurusan');

    }
}
