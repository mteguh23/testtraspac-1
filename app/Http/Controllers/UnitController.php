<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Profile;
use App\Models\Pegawai;
use App\Models\Unit;

class UnitController extends Controller
{
    function index(){
        $data['unit'] = DB::table('unit')->get();
        return view('unit', $data);
    }
    function detail($id){
        $data['pegawai'] = DB::table('pegawai')
            ->join('profile', 'profile.profile_id', 'pegawai.profile_id')
            ->join('unit', 'unit.unit_id', 'pegawai.unit_id')
            ->join('jabatan', 'jabatan.jabatan_id', 'pegawai.jabatan_id')
            ->join('eselon', 'eselon.eselon_id', 'pegawai.eselon_id')
            ->join('golongan', 'golongan.golongan_id', 'pegawai.golongan_id')
            ->where('pegawai.unit_id', $id)
            ->get();
        return view('unit_detail', $data);
    }
}
