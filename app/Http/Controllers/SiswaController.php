<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\Jurusan;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function create(){
        $jurusan = Jurusan::all();
        return view('siswa.create', compact('jurusan'), [
            "title" => "Tambah Data Siswa"
        ]);
    }
    public function store(Request $req){

        $siswa = Siswa::create($req->all());

        if($req->hasFile('foto')){
         $req->file('foto')->move('fotosiswa/', $req->file('foto')->getClientOriginalName());
         $siswa->foto = $req->file('foto')->getClientOriginalName();
         $siswa->save();
        }
        
        return redirect()->route('siswa');
    }
    public function edit($id){
        $siswa = Siswa::find($id);
        $jurusan = Jurusan::all();

        return view('siswa.edit', compact('siswa', 'jurusan'), [
            "title" => "Edit Data Siswa"
        ]);
    }
    public function update(Request $req, $id){
        $siswa = Siswa::find($id);
        $jurusan = Jurusan::all();
        $siswa->update($req->all());
        if($req->hasFile('foto')){
         $req->file('foto')->move('fotosiswa/', $req->file('foto')->getClientOriginalName());
         $siswa->foto = $req->file('foto')->getClientOriginalName();
         $siswa->save();
        }
        return redirect()->route('siswa');
    }
     public function delete($id){
            $siswa = Siswa::find($id);
            $siswa->delete();
            return redirect()->route('siswa');
        }
}
