@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <div style="text-align:center">LIST BUKUKU</div>
                </div>
                <div style="height:10px"></div>
                <div class="row">
                @for($i=0;$i<12;$i++)
                    <div class="col-md-3">
                        <div>
                            <img style="width:200px" src={{ asset('images/buku.jpg') }}>
                            <h5><b>Judul Bukunya</b></h5>
                            <h6><b>Categori I</b></h6>
                            <h6>PT Kompus<h6>
                            <span><button class="btn btn-success">baca</button><button class="btn btn-danger">hapus</button></span>
                        </div>
                    </div>                
                @endfor
                </div>
                <div class="card-body">
                    <div style="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
