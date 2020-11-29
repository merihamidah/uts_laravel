<?php

namespace App\Http\Controllers;
use App\Models\Artikel;
use App\Models\Komentar;
use Faker;
class ClientController extends Controller{
    function index(){
        $data['list_artikel'] = Artikel::all();
        return view('client.index', $data);
    } 
    function show(Artikel $artikel){
        $data['list_komentar'] = Komentar::all();
        $data['artikel'] = $artikel;
        return view('client.show', $data);
    }
    function storeKomentar(){ 
        $komentar = new Komentar;
        $komentar->nama = request('nama');
        $komentar->isi_komentar = request('isi_komentar');
        $komentar->save();
        
        return redirect('user/client');
    }
    function filterNama(){
        $judul = request('judul');
        $data['list_artikel'] = Artikel::where('judul','like', "%$judul%")->get();
        $data['judul'] = $judul;
       
        return view('client.index', $data);
    }
    
    function filterTanggal(){
        $created_at = request('created_at');
        $data['list_artikel'] = Artikel::whereDate('created_at', "$created_at")->get();
        $data['created_at'] = $created_at;

        return view('client.index', $data);
    }
    function filterTag(){
        $tag = request('tag');
        $data['list_artikel'] = Artikel::where('tag','like', "%$tag%")->get();
        $data['tag'] = $tag;

        return view('client.index', $data);
    }
}