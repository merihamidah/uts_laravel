@extends('admintemplate.base')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">
                    Tambah Data Komentar
                  </div>
                <div class="card-body">
                    <form action="{{ url('admin/komentar') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="" class="control-label">Nama</label>
                        <input type="text" class="form-control" name="nama">
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label">Isi Komentar</label>
                         <textarea name="isi_komentar" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <button class="btn-btn-primary float-right"><i class="fa fa-save"> Simpan </i></button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection