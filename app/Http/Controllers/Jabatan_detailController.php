<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jabatan_detail;
use App\Jabatan;
use App\Jenis_gaji;

class Jabatan_detailController extends Controller
{
    public function index($id)
    {
        $jabatan = Jabatan::all();
        $jenis_gaji = Jenis_gaji::all();
    	$jabatan_detail = Jabatan_detail::where('id_jabatan',$id)->get();
    	return view('jabatan_detail.index',compact('jabatan','jenis_gaji','jabatan_detail', 'id')); 
    }

    // public function tambah()
    // {
    //     // get all jabatan
    //     $jabatan = Jabatan::all();
    //     // get all jenis gaji
    //     $jenis_gaji = Jenis_gaji::all();
    // 	return view('jabatan_detail.tambah', compact('jabatan', 'jenis_gaji'));
    // }

    public function store(Request $request)
    {
        $this->validate($request,[
            'id_jabatan' => 'required',
            'id_jenis_gaji' => 'required',
            'nominal' => 'required'

        ]);

        Jabatan_detail::create([
            'id_jabatan' => $request->id_jabatan,
            'id_jenis_gaji' => $request->id_jenis_gaji,
            'nominal' => $request->nominal
            // $request->all()
        ]);

        return redirect('/jabatan_detail/jabatan/'.$request->id_jabatan)->with('Data ditambah','Data berhasil ditambah!');
    }

    public function detail($id)
    {
        $jabatan_detail = Jabatan_detail::where('id',$id)->first();
        return view('jabatan_detail.detail',compact('jabatan_detail'));
    }

    public function edit($id)
    {
        $jabatan = Jabatan::all();
        $jabatan_detail = Jabatan_detail::where('id',$id)->first();
        return view('jabatan_detail.edit',compact('jabatan','jabatan_detail'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'id_jabatan' => 'id_jabatan',
            'id_jenis_gaji' => 'required',
            'nominal' => 'required'
        ]);

        Jabatan_detail::where('id',$id)->update([
            'id_jabatan' => $request->id_jabatan,
            'id_jenis_gaji' => $request->id_jenis_gaji,
            'nominal' => $request->nominal
        ]);

        return redirect('/jabatan_detail');
    }

    public function delete($id, $id_jabatan)
    {

        Jabatan_detail::where('id',$id)->delete();
        return redirect('/jabatan_detail/jabatan/'.$id_jabatan)->with('Data terhapus','Data berhasil dihapus!');
    }
}
