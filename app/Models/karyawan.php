<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class karyawan extends Model
{
    use HasFactory;
    protected $fillable = [
    'nama',
    'jabatan',
     'bagian',
     'gol',
     'agama',
     'tgl_lahir',
     'tgl_masuk',
     'tgl_pensiun',
     'pendidikan',
     'no_ktp', 'nama_istri', 'jml_anak','cuti_tahunan', 'cuti_panjang', 'pelatihan', 'penghargaan', 'foto_ktp', 'foto_kk', 'foto_ijazah', 'foto_akte'];
    protected $table = 'karyawans';
}
