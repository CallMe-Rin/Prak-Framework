<?php

namespace App\Http\Controllers;

use App\Models\MahasiswaPost;
use Illuminate\Http\Request;

class MahasiswaPostController extends Controller
{
    public function index(){

        $data = MahasiswaPost::all();
        return view('datamahasiswa', compact('data'));
    }

    public function tambahmahasiswa(){
        return view('tambahdata');
    }

    public function insertdata(Request $request){
       // dd($request->all());
        MahasiswaPost::create($request->all());
        return redirect()->route('mahasiswa')->with('success','Data Berhasil Di Tambahkan');
    }

    public function tampilkandata($id){

        $data = MahasiswaPost::find($id);
        //dd($data);
        return View('tampildata', compact('data'));
    }

    public function updatedata(Request $request, $id){
        $data = MahasiswaPost::find($id);
        $data->update($request->all());
        return redirect()->route('mahasiswa')->with('success','Data Berhasil Di Update');
    }

    public function delete(Request $request, $id){
        $data = MahasiswaPost::find($id);
        $data->delete();
        return redirect()->route('mahasiswa')->with('success','Data Berhasil Di Hapus');
    }
}
