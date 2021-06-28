<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KamarController extends Controller
{
  public function index()
  {
    $kamar = DB::table('kamar')->get();
    return view('index',['kamar' => $kamar]);
    
  }

  public function tambah()
  {
   
    return view('tambah');
    
  }

  // method untuk insert data ke table kamar
  public function store(Request $request)
  {
    // insert data ke table kamar
    DB::table('kamar')->insert([
      'kamar_jenis' => $request->kamar_jenis,
      'kamar_deskripsi' => $request->kamar_deskripsi,
      'kamar_harga' => $request->kamar_harga,
      'kamar_jumlah' => $request->kamar_jumlah
    ]);
    // alihkan halaman ke halaman kamar
    return redirect('/kamar');

  }

  public function edit($id)
  {
  // mengambil data kamar berdasarkan id yang dipilih
    $kamar = DB::table('kamar')->where('kamar_id',$id)->get();
  // passing data kamar yang didapat ke view edit.blade.php
    return view('edit',['kamar' => $kamar]);
    
  }

  // update data kamar
  public function update(Request $request)
  {
  // update data kamar
    DB::table('kamar')->where('kamar_id',$request->id)->update([
     'kamar_id' => $request->kamar_id,
     'kamar_jenis' => $request->kamar_jenis,
     'kamar_deskripsi' => $request->kamar_deskripsi,
     'kamar_harga' => $request->kamar_harga,
     'kamar_jumlah' => $request->kamar_jumlah
   ]);
  // alihkan halaman ke halaman kamar
    return redirect('/kamar');
  }

  // method untuk hapus data kamar
  public function hapus($id)
  {
  // menghapus data kamar berdasarkan id yang dipilih
    DB::table('kamar')->where('kamar_id',$id)->delete();
    
  // alihkan halaman ke halaman kamar
    return redirect('/kamar');
  }
}
