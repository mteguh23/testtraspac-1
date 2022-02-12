<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $table = 'profile';
    protected $primaryKey = 'profile_id';
    protected $fillable = ['profile_id', 'nip', 'npwp', 'nama', 'tempat_lahir', 'alamat', 'tanggal_lahir', 'jk', 'agama', 'no_hp'];
}
