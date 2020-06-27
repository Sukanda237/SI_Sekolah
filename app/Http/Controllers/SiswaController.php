<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class SiswaController extends Controller
{
    // menampilkan semua data pada tabel siswa
    function index(){
        $siswa = Siswa::all();

        // return Response::json($siswa,200);
        return $siswa;
        
    }

   public function tambahsiswa(){

        return view('admin/tambah_siswa');
    }

    function detail($id){
        $siswa = Siswa::find($id);

        if (is_null($siswa)) {

            return "Data tidak ada";
        
        }else {
        
            return $siswa;
    
        } 

    }

    // menyimpan data menggunakan eloquent
    function create(request $request){
    $siswa = new Siswa;
    $siswa->nama = $request->nama;
    $siswa->alamat = $request->alamat;
    $siswa->save();

    return "Data Berhasil Masuk";
    }

    // update data menggunkan eloquent
    function update(requst $request, $id){
    $nama = $request->nama;
    $alamat = $request->alamat;

    $siswa = Siswa::find($id);
    $siswa = $request->nama;
    $siswa = $request->alamat;
    $siswa->save();

    return "Data berhasil di ubah";
    }

    // hapus data dengan menggunakan eluquent
    function delete($id){
        $siswa = Siswa::find($id);
        $siswa->delete();

        return "Data siswa telah terhapus";
    }

    
}
