@extends('admintemplate.base')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">            
            <h1>Welcome</h1>
                <h3>
                    @if(Auth::check())
                            {{ request()->user()->nama }}
                            @else
                            Silahkan Login Kembali
                    @endif
                </h3>
        </div>
    </div>
</div>
@endsection