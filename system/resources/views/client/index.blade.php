@extends('clienttemplate.base')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3 mt-5">
            <div class="card">
                        <div class="card-header">
                            Filter
                        </div>
                        <div class="card-body">
                            <form action="{{ url('user/client/filterNama') }}" method="POST">
                            @csrf
                            <div class="row">
                            <div class="col">
                            <div class="form-group">
                                <label for="" class="control-label"> Judul </label>
                                <input type="text" name="judul" class="form-control" value="{{ $judul ?? "" }}">
                            </div>
                            </div>   
                            </div>           
                            <button class="btn btn-dark float-right"><i class="fa fa-search"> Cari </i></button>
                            </form><br><br><hr>
                            <form action="{{ url('user/client/filterTanggal') }}" method="POST">
                            @csrf                           
                            <div class="row">
                            <div class="col">                               
                            <div class="form-group">                              
                                    <label for="" class="control-label">Tanggal</label>
                                    <input type="text" name="created_at" class="form-control" value="{{ $created_at ?? "" }}">
                            </div>
                            </div>   
                            </div>       
                            <button class="btn btn-dark float-right"><i class="fa fa-search"> Cari </i></button>
                            </form><br><br><hr>    
                            <form action="{{ url('user/client/filterTag') }}" method="POST">
                            @csrf
                            <div class="row"> 
                                <div class="col">
                                <div class="form-group">
                                    <label for="" class="control-label"> Tag </label>
                                    <input type="text" name="tag" class="form-control" value="{{ $tag ?? "" }}">
                                </div>
                             </div>
                            </div>                  
                            <button class="btn btn-dark float-right"><i class="fa fa-search"> Cari </i></button>
                            </form>
                        </div>
                    </div>
                </div>
        <div class="col-md-9 mt-5">
            <div class="card">
                <div class="card-header text-center">
                   New Artikel
                  </div>
                <div class="card-body">
                    <table class="table">
                        <thead class="text-center">                        
                                <th>No</th>
                                <th>Judul</th>                      
                        </thead>
                        <tbody>
                            @foreach($list_artikel as $artikel)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td><a href="{{ url('user/client', $artikel->id) }}"> {{ $artikel->judul }} </a></td>
                                
                            </tr>
                            @endforeach
                           
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

           
       

@endsection