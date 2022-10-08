<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Jenis_gaji;
use App\Jabatan;
use App\Karyawan;
use App\Penggajian;


class BerandaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      

        $get_jumlah_karyawan_jenkel = DB::table('karyawan')
                 ->select('jenkel', DB::raw('count(*) as total'))
                 ->groupBy('jenkel')
                 ->get();
        
        $jumlah_karyawan_jenkel = [];
        foreach ($get_jumlah_karyawan_jenkel as $key => $value) {
            $jumlah_karyawan_jenkel[] = $value->total;
        }
        // $var_nama = "Anisa Febriyanti";
        // return view('HalamanDepan.beranda',compact('var_nama'));
        $jumlah_jenis_gaji = Jenis_gaji::all()->count();
        $jumlah_jabatan = Jabatan::all()->count();
        $jumlah_karyawan = Karyawan::all()->count();
        $jumlah_penggajian = Penggajian::all()->count();
       
        return view('HalamanDepan.beranda')
        ->with('jumlah_jenis_gaji',$jumlah_jenis_gaji)
        ->with('jumlah_jabatan',$jumlah_jabatan)
        ->with('jumlah_karyawan',$jumlah_karyawan)
        ->with('jumlah_karyawan_jenkel',$jumlah_karyawan_jenkel)
        ->with('jumlah_penggajian',$jumlah_penggajian);
    }

    public function halamansatu()
    {
        return view('Halaman.halaman-satu');
    }

    public function halamandua()
    {
        return view('Halaman.halaman-dua');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
