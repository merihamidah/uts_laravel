@extends('admintemplate.base')
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
                     <p >
                       {!! nl2br($artikel->konten) !!}
                     </p>
               
                </div>
            </div>
        </div>
    </div>
</div>
@endsection