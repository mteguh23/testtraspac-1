<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;
    protected $table = 'pegawai';
    protected $primaryKey = 'pegawai_id';
    protected $fillable = ['pegawai_id', 'profile_id', 'unit_id', 'jabatan_id', 'eselon_id', 'golongan_id'];
}
