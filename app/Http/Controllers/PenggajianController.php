<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Penggajian;
use App\Karyawan;
use App\Jabatan_detail;
use App\Penggajian_detail;


class PenggajianController extends Controller
{
    public function index()
    {
        $karyawan = Karyawan::all();
    	$penggajian = Penggajian::all();
    	return view('penggajian.index',compact('karyawan','penggajian'));
    }

    public function tambah($id = '')
    {
        // echo $id;exit;
        $jabatan_detail = [];
        $karyawan = \App\Karyawan::all();
        $karyawan_detail = '';
        $total = 0;
        if ($id){
            $karyawan_detail = Karyawan::where('nip',$id)->first();
            $jabatan_detail = Jabatan_detail::where('id_jabatan',$karyawan_detail->id_jabatan)->get();
            foreach ($jabatan_detail as $key => $value) {
                $total += $value->nominal;
            }

            // dd($total);
        }
        // $jumlah_hadir = 23;

        // $penggajian = \App\Penggajian::all();
        //echo "<pre>"; print_r($karyawan);exit;   
        return view('penggajian.tambah',compact('karyawan','karyawan_detail','total','jabatan_detail'));
    }

    public function store(Request $request)
    {
          
        $message = ([
            'required' =>  "Data Tidak Boleh Kosong!",
            'unique' => "ID Sudah Terdata"
        ]);

        $this->validate($request,[
           
            'nip' => 'required|unique:penggajian,nip',
            'jumlah_hadir' => 'required|numeric',
            'jumlah_izin' => 'required|numeric',
            'jumlah_sakit' => 'required|numeric',
            'jumlah_alfa' => 'required|numeric',
             'bonus' => 'nullable',
             'keterangan_bonus' => 'nullable',
             'pengurangan' => 'nullable',
             'keterangan_pengurangan' => 'nullable',
             'total' => 'required'
        ], $message);
       
        $insert = Penggajian::create([
          
            'nip' => $request->nip,
            'bulan_penggajian' => date ("m", time()),
            'tahun_penggajian' => date ("Y", time()),
            'jumlah_hadir' => $request->jumlah_hadir,
            'jumlah_izin' => $request->jumlah_izin,
            'jumlah_sakit' => $request->jumlah_sakit,
            'jumlah_alfa' => $request->jumlah_alfa,
            'bonus' => $request->bonus,
            'keterangan_bonus' => $request->keterangan_bonus,
            'pengurangan' => $request->pengurangan,
            'keterangan_pengurangan' => $request->keterangan_pengurangan,
            'total' =>  $request->total
            // $request->all()
        ]);

        $karyawan_detail = Karyawan::where('nip', $request->nip)->first();
        $jabatan_detail = Jabatan_detail::where('id_jabatan',$karyawan_detail->id_jabatan)->get();

        foreach ($jabatan_detail as $key => $value) {
            Penggajian_detail::create([
                'id_penggajian'=> $insert->id,
                'id_jenis_gaji'=> $value->id_jenis_gaji,
                'nominal'=> $value->nominal
            ]);
        }

        return redirect('/penggajian')->with('Data ditambah','Data berhasil ditambah!');
    }

    public function detail($id)
    {
        $karyawan = Karyawan::all();
        $penggajian = Penggajian::where('id_penggajian',$id)->first();
        return view('penggajian.detail',compact('penggajian','karyawan'));
    }

    public function edit($id)
    {
        $karyawan = Karyawan::all();
        $penggajian = Penggajian::where('id_penggajian',$id)->first();
        return view('penggajian.edit',compact('penggajian','karyawan','total'));

        // $karyawan = \App\Karyawan::all();
        // $karyawan_detail = '';
        // $total = 0;
        // if ($id){
        //     $karyawan_detail = Karyawan::where('nip',$id)->first();
        //     $jabatan_detail = Jabatan_detail::where('id_jabatan',$karyawan_detail->id_jabatan)->get();
        //     foreach ($jabatan_detail as $key => $value) {
        //         $total += $value->nominal;
        //     }

           
        //     dd($total);
        // }
        // return view('penggajian.edit',compact('karyawan','karyawan_detail','total'));
    }

    public function update(Request $request, $id)
    {
        // $this->validate($request,[
        //      'id_penggajian' => 'required',
        //     'nip' => 'required',
        //     'bulan_penggajian' => 'required',
        //     'tahun_penggajian' => 'required',
        //     'jumlah_hadir' => 'required|numeric',
        //     'jumlah_izin' => 'required|numeric',
        //     'jumlah_sakit' => 'required|numeric',
        //     'jumlah_alfa' => 'required|numeric',
        //      'bonus' => 'request',
        //      'keterangan_bonus' => 'required',
        //      'pengurangan' =>'pengurangan',
        //      'keterangan_pengurangan' => 'required',
        //     'total' => 'required'
        // ]);

         Penggajian::where('id_penggajian',$id)->update([
            'nip' => $request->nip,
            'bulan_penggajian' => $request->bulan_penggajian,
            'tahun_penggajian' => $request->tahun_penggajian,
            'jumlah_hadir' => $request->jumlah_hadir,
            'jumlah_izin' => $request->jumlah_izin,
            'jumlah_sakit' => $request->jumlah_sakit,
            'jumlah_alfa' => $request->jumlah_alfa,
            'bonus' => $request->bonus,
            'keterangan_bonus' => $request->keterangan_bonus,
            'pengurangan' => $request->pengurangan,
            'keterangan_pengurangan' => $request->keterangan_pengurangan,
            'total' => $request->total
            // $request->all()
        ]);

        // $karyawan_detail = Karyawan::where('nip', $request->nip)->first();
        // $jabatan_detail = Jabatan_detail::where('id_jabatan',$karyawan_detail->id_jabatan)->get();

        // foreach ($jabatan_detail as $key => $value) {
        //     Penggajian_detail::create([
        //         'id_penggajian'=> $insert->id,
        //         'id_jenis_gaji'=> $value->id_jenis_gaji,
        //         'nominal'=> $value->nominal
        //     ]);
        // }

        return redirect('/penggajian')->with('Data diedit','Data berhasil diedit!');
    }

    public function delete($id)
    {
        penggajian::where('id_penggajian',$id)->delete();
        return redirect('/penggajian')->with('Data terhapus','Data berhasil dihapus!');
    }
}