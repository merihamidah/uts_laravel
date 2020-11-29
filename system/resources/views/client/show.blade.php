@extends('clienttemplate.base2')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">
                    Detail Data Artikel
                  </div>
                <div class="card-body">
                   <h3>{{ $artikel->judul }}</h3>
                    <hr>      
                    <p > 
                        Tanggal Terbit: {{ $artikel->created_at }} |
                        Penulis : {{ $artikel->penulis->username }}
                     </p>                     
                     <hr>                   
                     <p >
                       {!! nl2br($artikel->konten) !!}
                     </p>
                     <hr>
                </div>
            </div>
        </div>
    </div>
  <div class="row">
      <div class="col-md-12">
          <div class="card">
              <div class="card-header">
                 <h4> Semua Komentar</h4>
              </div>
              <div class="card-body">
                  @foreach ($list_komentar as $komentar)                  
                <i class="fa fa-user"> 
                    {{ $komentar->nama }} </i> |
                     {{ $komentar->created_at}}
                     <div class="card" style="margin-top: 10px;">
                       <div class="card-body">
                         {{ $komentar->isi_komentar }}
                         
                       
                        </div>
                     </div>

                  @endforeach
                  <hr>
                  <h4>Komentar</h4>
                                
                <form action="{{ url('user/client', $artikel->id) }}"  method="POST" >
                    @csrf
                        <div class="form-group">
                            <label for="" class="control-label">Nama</label>
                            <input type="text" class="form-control" name="nama">
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label">Komentar</label>
                            <textarea name="isi_komentar" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary "> Send </button>
                    </div>
                </form>

                  
              </div>
          </div>
      </div>
    </div>
</div> 

@endsection