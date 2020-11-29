<?php 

namespace App\Http\Controllers;
use App\Models\Komentar;

class KomentarController extends Controller {
    function index(){
        $data['list_komentar'] = Komentar::all();
       // $data['list_komentar'] = Komentar::withCount('produk')->get();
       return view('komentar.index', $data);
    }
    function create(){
       return view('komentar.create');
    }
    
    function store(){ 
        $komentar = new Komentar;
        $komentar->nama = request('nama');
        $komentar->isi_komentar = request('isi_komentar');
        $komentar->save();
        
        return redirect('admin/komentar')->with('success','Data Berhasil Ditambahkan');
    }
    function show(Komentar $komentar){
         $data['komentar'] = $komentar; 
        return view('komentar.show',$data);
    }
    function edit(Komentar $komentar){
         $data['komentar'] = $komentar;
        return view('komentar.edit',$data);
    }
    function update(Komentar $komentar){      
        $komentar->nama = request('nama');
        $komentar->isi_komentar = request('isi_komentar');
        $komentar->save();
        
        return redirect('admin/komentar')->with('success','Data Berhasil Diedit');
    }
    function destroy(Komentar $komentar){
        $komentar->delete();
         return redirect('admin/komentar')->with('danger', 'Data berhasil dihapus');
    }
     function filter(){
            $created_at = request('created_at');
            $data['list_komentar'] = Komentar::whereDate('created_at', "$created_at")->get();
            $data['created_at'] = $created_at;

        return view('komentar.index', $data);
    }
}

