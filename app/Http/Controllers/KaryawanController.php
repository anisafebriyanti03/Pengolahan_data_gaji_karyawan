<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Karyawan;
use App\Jabatan;

class KaryawanController extends Controller
{
    public function index()
    {

            $jabatan= Jabatan::all();
            // $karyawan = Karyawan::orderBy('nip', 'desc')->simplePaginate(5);
            $karyawan = Karyawan::all();
        
            return view('karyawan.index',compact('karyawan','jabatan'));
        
    }

    public function tambah()
    {
        $jabatan= Jabatan::all();
        //echo "<pre>"; print_r($jabatan);exit;
        return view('karyawan.tambah',compact('jabatan'));
    }

    public function store(Request $request)
    {
        $message = [
            'required' => 'Data tidak boleh kosong!',
        ];

        $this->validate($request,[
            'nip' => 'required|integer|unique:karyawan,nip',
            'id_jabatan' => 'required',
            'nik' => 'required|string|unique:karyawan,nik',
            'nama' => 'required',
            'tmpt_lahir' => 'required',
            'tgl_lahir' => 'required',
            'alamat' => 'required',
            'jenkel' => 'required',
            'no_tlpn' => 'required',
            'email' => 'required',
            'tgl_masuk' => 'required',
            // 'tgl_resign' => 'nullable|after:tgl_masuk'
        ], $message);

        Karyawan::create([
            'nip' => $request->nip,
            'id_jabatan' => $request->id_jabatan,
            'nik' => $request->nik,
            'nama' => $request->nama,
            'tmpt_lahir' => $request->tmpt_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'alamat' => $request->alamat,
            'jenkel' => $request->jenkel,
            'no_tlpn' => $request->no_tlpn,
            'email' => $request->email,
            'tgl_masuk' => $request->tgl_masuk,
            // 'tgl_resign' => $request->tgl_resign
            // $request->all()
        ]);
        return redirect('/karyawan')->with('Data ditambah','Data berhasil ditambah!');
    }

    public function detail($id)
    {
        $jabatan= Jabatan::all();
        $karyawan = Karyawan::where('nip',$id)->first();
        return view('karyawan.detail',compact('karyawan','jabatan'));
    }

    public function edit($id)
    {
        $jabatan = Jabatan::all();
        $karyawan = Karyawan::where('nip',$id)->first();
        return view('karyawan.edit',compact('karyawan','jabatan'));
    }

    public function update(Request $request, $id)
    {
        // dd($request->all());
        $message = ([
            'required' => "Data Tidak Boleh Kosong!",
        ]);

        $this->validate($request,[
            'nip' => 'disable',
            'id_jabatan' => 'required',
            'nik' => 'required',
            'nama' => 'required',
            'tmpt_lahir' => 'required',
            'tgl_lahir' => 'required',
            'alamat' => 'required',
            'jenkel' => 'required',
            'no_tlpn' => 'required',
            'email' => 'required|email',
            'tgl_masuk' => 'required',
            // 'tgl_resign' => 'nullable|after:tgl_masuk'
        ], $message);
    
        Karyawan::where('nip',$id)->update([
            'nip' => $request->nip,
            'id_jabatan' => $request->id_jabatan,
            'nik' => $request->nik,
            'nama' => $request->nama,
            'tmpt_lahir' => $request->tmpt_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'alamat' => $request->alamat,
            'jenkel' => $request->jenkel,
            'no_tlpn' => $request->no_tlpn,
            'email' => $request->email,
            'tgl_masuk' => $request->tgl_masuk,
            // 'tgl_resign' => $request->tgl_resign
        ]);

        return redirect('/karyawan')->with('Data diedit','Data berhasil diedit!');
    }

    public function delete($id)
    {
        Karyawan::where('nip',$id)->delete();
        return redirect('/karyawan')->with('Data terhapus','Data berhasil dihapus!');
    }
}
