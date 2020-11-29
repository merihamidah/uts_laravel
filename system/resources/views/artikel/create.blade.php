@extends('admintemplate.base')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">
                    Tambah Data Artikel
                  </div>
                <div class="card-body">
                    <form action="{{ url('admin/artikel') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="" class="control-label">Judul</label>
                        <input type="text" class="form-control" name="judul">
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label">Konten</label>
                         <textarea name="konten" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label">Tag</label>
                        <input type="text" class="form-control" name="tag">
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