<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eselon extends Model
{
    use HasFactory;
    protected $table = 'eselon';
    protected $primaryKey = 'eselon_id';
    protected $fillable = ['eselon_id', 'nm_eselon', 'dsc_eselon'];
}
