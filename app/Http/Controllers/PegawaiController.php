<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Profile;
use App\Models\Pegawai;
use App\Models\Unit;
use App\Models\Jabatan;
use App\Models\Eselon;
use App\Models\Golongan;

class PegawaiController extends Controller
{
    function index(){
        $data['pegawai'] = DB::table('pegawai')
            ->join('profile', 'profile.profile_id', 'pegawai.profile_id')
            ->join('unit', 'unit.unit_id', 'pegawai.unit_id')
            ->join('jabatan', 'jabatan.jabatan_id', 'pegawai.jabatan_id')
            ->join('eselon', 'eselon.eselon_id', 'pegawai.eselon_id')
            ->join('golongan', 'golongan.golongan_id', 'pegawai.golongan_id')
            ->get();
        return view('pegawai', $data);
    }
    function detail($id){
        $data['pegawai'] = DB::table('pegawai')
            ->join('profile', 'profile.profile_id', 'pegawai.profile_id')
            ->join('unit', 'unit.unit_id', 'pegawai.unit_id')
            ->join('jabatan', 'jabatan.jabatan_id', 'pegawai.jabatan_id')
            ->join('eselon', 'eselon.eselon_id', 'pegawai.eselon_id')
            ->join('golongan', 'golongan.golongan_id', 'pegawai.golongan_id')
            ->where('pegawai_id', $id)
            ->get();
        return view('pegawai_detail', $data);
    }
    function create(){
        $data['unit'] = Unit::all();
        $data['jabatan'] = Jabatan::all();
        $data['eselon'] = Eselon::all();
        $data['golongan'] = Golongan::all();
        return view('pegawai_create', $data);
    }
    function edit($id){
        $data['pegawai'] = DB::table('pegawai')
            ->join('profile', 'profile.profile_id', 'pegawai.profile_id')
            ->join('unit', 'unit.unit_id', 'pegawai.unit_id')
            ->join('jabatan', 'jabatan.jabatan_id', 'pegawai.jabatan_id')
            ->join('eselon', 'eselon.eselon_id', 'pegawai.eselon_id')
            ->join('golongan', 'golongan.golongan_id', 'pegawai.golongan_id')
            ->where('pegawai_id', $id)
            ->get();
        $data['unit'] = Unit::all();
        $data['jabatan'] = Jabatan::all();
        $data['eselon'] = Eselon::all();
        $data['golongan'] = Golongan::all();
        return view('pegawai_edit', $data);
    }
    function store(Request $request){
        // profile
        $profile = new Profile;

        $profile->nip = $request->nip;
        $profile->npwp = $request->npwp;
        $profile->nama = $request->nama;
        $profile->tempat_lahir = $request->tempat_lahir;
        $profile->alamat = $request->alamat;
        $profile->tgl_lahir = $request->tgl_lahir;
        $profile->jk = $request->jk;
        $profile->agama = $request->agama;
        $profile->no_hp = $request->no_hp;

        $profile->save();
        $profile_id = $profile->profile_id;

        // pegawai
        $pegawai = new Pegawai;

        $pegawai->profile_id = $profile_id;
        $pegawai->unit_id = $request->unit;
        $pegawai->jabatan_id = $request->jabatan;
        $pegawai->eselon_id = $request->eselon;
        $pegawai->golongan_id = $request->golongan;

        $pegawai->save();

        return redirect('/');
    }
    function update(Request $request, $id){
        $profile = Profile::find($id);

        $profile->nip = $request->nip;
        $profile->npwp = $request->npwp;
        $profile->nama = $request->nama;
        $profile->tempat_lahir = $request->tempat_lahir;
        $profile->alamat = $request->alamat;
        $profile->tgl_lahir = $request->tgl_lahir;
        $profile->jk = $request->jk;
        $profile->agama = $request->agama;
        $profile->no_hp = $request->no_hp;

        $profile->save();
        $profile_id = $profile->profile_id;

        $profile->save();
        return redirect()->back();
    }
    function delete($id){
        $pegawai = Pegawai::find($id);
        $pegawai->delete();
        return redirect('/');
    }
}
