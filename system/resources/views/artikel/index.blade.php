@extends('admintemplate.base')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
                       <div class="card">
                    <div class="card-header">
                        Filter
                    </div>
                    <div class="card-body">
                        <form action="{{ url('admin/artikel/filter') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                            <div class="form-group">
                                <label for="" class="control-label"> Judul </label>
                                <input type="text" name="judul" class="form-control" value="{{ $judul ?? "" }}">
                            </div>
                            </div>   
                            <div class="col-md-4">                               
                            <div class="form-group">                              
                                    <label for="" class="control-label">Tanggal</label>
                                    <input type="text" name="created_at" class="form-control" value="{{ $created_at ?? "" }}">
                            </div>
                            </div>                            
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="" class="control-label"> Tag </label>
                                    <input type="text" name="tag" class="form-control" value="{{ $tag ?? "" }}">
                                </div>
                             </div>
                        </div>
                         <button class="btn btn-dark float-right"><i class="fa fa-search"> Cari </i></button>
                        </form>
                    </div>
            <div class="card">
                <div class="card-header">
                    Data Artikel
                    <a href="{{ url('admin/artikel/create') }}" class="btn btn-dark float-right"><i class="fa fa-plus" > Tambah Data </i></a>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>                        
                                <th>No</th>
                                <th>Aksi</th>                                
                                <th>Tanggal</th>
                                <th>Judul</th>
                                <th>Konten</th>
                                <th>Tag</th>    
                                <th>Komentar</th>                       
                        </thead>
                        <tbody>
                            @foreach($list_artikel as $artikel)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>                                    
                                        <div class="btn-group">
                                            <a href="{{ url('admin/artikel', $artikel->id) }}" class="btn btn-dark"><i class="fa fa-info"></i></a>
                                            <a href="{{ url('admin/artikel', $artikel->id) }}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>  
                                             @include('admintemplate.utils.delete', ['url' => url('admin/artikel', $artikel->id)])                             
                                        </div>
                                </td>
                                <td>{{ $artikel->created_at }}</td>
                                <td>{{ $artikel->judul }}</td>
                                <td>{{ $artikel->konten }}</td>
                                <td>{{ $artikel->tag  }}</td>                                
                                <td>{{ $artikel->komentar_count }}</td>
                                
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