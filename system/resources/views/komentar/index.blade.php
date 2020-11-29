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
                        <form action="{{ url('admin/komentar/filter') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                            <div class="form-group">
                                <label for="" class="control-label"> Tanggal </label>
                                <input type="text" name="created_at" class="form-control" value="{{ $created_at ?? "" }}">
                            </div>
                            </div>   
                        </div>
                         <button class="btn btn-dark float-right"><i class="fa fa-search"> Cari </i></button>
                        </form>
                    </div>

            <div class="card">
                <div class="card-header">
                    Data Komentar
                    <a href="{{ url('admin/komentar/create') }}" class="btn btn-dark float-right"><i class="fa fa-plus" > Tambah Data </i></a>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>                        
                                <th>No</th>
                                <th>Aksi</th>                                
                                <th>Tanggal </th>
                                <th>Nama</th>
                                <th>Isi Komentar</th>
                                                 
                        </thead>
                        <tbody>
                            @foreach($list_komentar as $komentar)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>                                    
                                        <div class="btn-group">
                                            <a href="{{ url('admin/komentar', $komentar->id) }}" class="btn btn-dark"><i class="fa fa-info"></i></a>
                                            <a href="{{ url('admin/komentar', $komentar->id) }}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>  
                                             @include('admintemplate.utils.delete', ['url' => url('admin/komentar', $komentar->id)])                             
                                        </div>
                                </td>
                                <td>{{ $komentar->created_at }}</td>
                                <td>{{ $komentar->nama }}</td>
                                <td>{{ $komentar->isi_komentar }}</td>
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