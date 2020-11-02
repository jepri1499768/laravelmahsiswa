<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Matakuliah;

class MatakuliahController extends Controller
{
    public function index(){
        return view('matakuliah',[
            "matakuliah" =>\App\Models\Matakuliah::all() //ambil semua data,dan menampilkan data ke table setelah diinput
        ]);
    }
    //
    public function simpan(Request $request){           //menyimpan data ke database
        //dd($request->all());
        \App\Models\Matakuliah::create([
            "kodemk" => $request -> kodemk,
            "namamk" => $request -> namamk,
            "dosen" => $request -> dosen,
            "ruang" => $request -> ruang
        ]);
        return redirect()->route('matakuliah.index');
    }
    public function hapus($id){
       Matakuliah::destroy($id);
       return redirect()->route('matakuliah.index');
    }
    public function tampil($id){
        $matakuliah = Matakuliah::find($id);
        //
        return view('matakuliah',[
            "matakuliah" => Matakuliah::all(),
            "data" => $matakuliah]);
    }
    public function update(Request $request,$id){
        $matakuliah = Matakuliah::find($id);
        $matakuliah->kodemk = $request->kodemk;
        $matakuliah->namamk = $request->namamk;
        $matakuliah->dosen = $request->dosen;
        $matakuliah->ruang = $request->ruang;
        $matakuliah->save();
        //Kuhusus Rubah Data 
        return redirect()->route('matakuliah.index');
    }
}
