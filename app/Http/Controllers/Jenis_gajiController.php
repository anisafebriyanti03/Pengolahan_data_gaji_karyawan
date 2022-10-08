<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jenis_gaji;

class Jenis_gajiController extends Controller
{
    public function index()
    {
    	$jenis_gaji = Jenis_gaji::all();
    	return view('jenis_gaji.index',compact('jenis_gaji'));
    }

    public function tambah()
    {
        return view('jenis_gaji.tambah');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'nama' => 'required|string|unique:jenis_gaji,nama'
        ]);

        Jenis_gaji::create([
            'nama' => $request->nama
        ]);

        return redirect('/jenis_gaji')->with('Data ditambah','Data berhasil ditambah!');
    }

    public function detail($id)
    {
        $jenis_gaji = Jenis_gaji::where('id_jenis_gaji',$id)->first();
        return view('jenis_gaji.detail',compact('jenis_gaji'));
    }

    public function edit($id)
    {
        $jenis_gaji = Jenis_gaji::where('id_jenis_gaji',$id)->first();
        return view('jenis_gaji.edit',compact('jenis_gaji'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'nama' => 'required|string|unique:jenis_gaji,nama'
        ]);

        Jenis_gaji::where('id_jenis_gaji',$id)->update([
            'nama' => $request->nama
        ]);

        return redirect('/jenis_gaji')->with('Data diedit','Data berhasil diedit!');
    }

    public function delete($id)
    {
        Jenis_gaji::where('id_jenis_gaji',$id)->delete();
        return redirect('/jenis_gaji')->with('Data terhapus','Data berhasil dihapus!');
    }

}
