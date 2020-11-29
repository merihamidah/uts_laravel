@extends('admintemplate.base')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                      Edit Data Komentar
                    </div>
                    <div class="card-body">
                        <form action="{{ url('admin/komentar', $komentar->id) }}" method="post">
                            @csrf   
                            @method("PUT")
                            <div class="form-group">
                              <label for="" class=" control-label">Nama</label>
                              <input type="text" class="form-control" name="nama"   value="{{ $komentar->nama }}"  >
                            </div>
                            <div class="form-group">
                              <label for="" class=" control-label">Isi Komentar</label>
                              <textarea name="isi_komentar" class="form-control">{{ $komentar->isi_komentar }}" </textarea>
                            </div>
                           <button class="btn btn-dark float-right"> <i class="fa fa-save"> Simpan </i> </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection