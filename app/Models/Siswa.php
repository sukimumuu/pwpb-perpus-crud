<?php

namespace App\Models;

use App\Models\Jurusan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Siswa extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function jurusans(){  
        return $this->belongsTo(Jurusan::class,'jurusan', 'id');
    }

}
