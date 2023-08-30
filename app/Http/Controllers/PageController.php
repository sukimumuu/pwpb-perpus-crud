<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\Jurusan;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('layout.master' ,[
            "title" => "Dashboard Absensi"
        ]);
    }
    public function siswa(){
        $siswa = Siswa::with('jurusans')->get();
        $jurusan = Jurusan::all();
        return view('siswa.index', compact('siswa', 'jurusan'),[
            "title" => "Data Siswa"
        ]);
    }
    public function jurusan(){
        $jurusan = Jurusan::all();
        return view('jurusan.index', compact('jurusan'), [
            "title" => "Data Jurusan"
        ]);
    }
}
