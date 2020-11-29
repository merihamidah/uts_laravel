<?php

namespace App\Http\Controllers;
use App\Models\Artikel;
use Faker;
class ArtikelController extends Controller{
    function index(){
        $user = request()->user();
        $data['list_artikel'] = $user->artikel = Artikel::withCount('komentar')->get();
        return view('artikel.index', $data); 
    } 
    function create(){
        return view('artikel.create');
    }
    function store(){
        $artikel = new Artikel;
        $artikel->id_user = request()->user()->id;
        $artikel->judul = request('judul');
        $artikel->konten = request('konten');
        $artikel->tag = request('tag');
        $artikel->save();

        return redirect('admin/artikel')->with('success', 'Data Berhasil Ditambahkan');
    }
    function show(Artikel $artikel){
        $data['artikel'] = $artikel;
        return view('artikel.show', $data);
    }
    function edit(Artikel $artikel){
        $data['artikel'] = $artikel;
        return view('artikel.edit', $data);
    }
    function update(Artikel $artikel){
        $artikel->judul = request('judul');
        $artikel->konten = request('konten');
        $artikel->tag = request('tag');
        $artikel->save();

        return redirect('admin/artikel')->with('success', 'Data Berhasil Diedit');;
    }
    function destroy(Artikel $artikel){
        $artikel->delete();
        return redirect('admin/artikel')->with('danger', 'Data Berhasil Dihapus');;

    }
    function filter(){
        $judul = request('judul');
        $created_at = request('created_at');
        $tag = request('tag');
        $data['list_artikel'] = Artikel::where('judul','like', "%$judul%")->whereDate('created_at', "$created_at")->where('tag','like', "%$tag%")->get();
        $data['judul'] = $judul;
        $data['created_at'] = $created_at;
        $data['tag'] = $tag;

        return view('artikel.index', $data);
    }
}