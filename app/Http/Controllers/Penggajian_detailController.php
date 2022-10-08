<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Penggajian_detail;
use App\Jenis_gaji;
use App\Penggajian;
// use App\Karyawan;


class Penggajian_detailController extends Controller
{
    public function index($id)
    {
        $penggajian = Penggajian::all();
        $jenis_gaji = Jenis_gaji::all();
    	$penggajian_detail = Penggajian_detail::where('id_penggajian',$id)->get();
    	return view('penggajian_detail.index',compact('penggajian','jenis_gaji','penggajian_detail','id'));
    }

    public function cetakPegawai($id_penggajian)
    {
        $penggajian = Penggajian::all();
        // $karyawan = Karyawan::all();
        $jenis_gaji = Jenis_gaji::all();
    	$penggajian_detail = Penggajian_detail::where('id_penggajian',$id_penggajian)->get();
    	return view('penggajian_detail.cetak',compact('penggajian_detail', 'penggajian','jenis_gaji'));
        
    }

    // public function tambah()
    // {
    //     return view('penggajian_detail.tambah');
    // }

    public function store(Request $request)
    {
        $this->validate($request,[
            'id_penggajian' => 'required',
            'id_jenis_gaji' => 'required',
            // 'nip' => 'required',
            'nominal' => 'required'
        ]);

        Penggajian_detail::create([
            'id_penggajian'=> $request->id_penggajian,
            'id_jenis_gaji'=> $request->id_jenis_gaji,
            // 'nip' => $request->nip,
            'nominal'=> $request->nominal
        ]);

        return redirect('/penggajian_detail/penggajian'.$request->id_penggajian);
    }

    public function detail($id)
    {
        $penggajian = Penggajian::all();
        $jenis_gaji = Jenis_gaji::all();
        $penggajian_detail = Penggajian_detail::where('id_detail',$id)->first();
        return view('penggajian_detail.detail',compact('penggajian','jenis_gaji','penggajian_detail'));
    }

    public function edit($id)
    {
        $penggajian = Penggajian::all();
        $jenis_gaji = Jenis_gaji::all();
        $penggajian_detail = Penggajian_detail::where('id_detail',$id)->first();
        return view('penggajian_detail.edit',compact('penggajian','jenis_gaji','penggajian_detail'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'id_penggajian' => 'required',
            'id_jenis_gaji' => 'required',
            'nominal' => 'required'
        ]);

        Penggajian_detail::where('id_detail',$id)->update([
            'id_penggajian'=> $request->id_penggajian,
            'id_jenis_gaji'=> $request->id_jenis_gaji,
            'nominal'=> $request->nominal
        ]);

        return redirect('/penggajian_detail');
    }

    public function delete($id, $id_penggajian)
    {
        penggajian_detail::where('id_detail',$id)->delete();
        return redirect('/penggajian_detail/penggajian/'.$id_penggajian);
    }

}