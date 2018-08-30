@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <div style="text-align:center;text-transform: uppercase;">{{$data}}</div>
                </div>
                <div style="height:10px"></div>
                <div class="row">
                    <div class="col-md-5">
                        <div>
                            <img style="width:300px;display : block;margin : auto;" src={{ asset('images/buku.jpg') }}>
                      
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h1 style="text-align:left;float:left;">Title : </h1> 
                        <h1 style=";">&nbsp;&nbsp; Judul Buku</h1> 
                        <hr style="clear:both;"/>
                        <h2 style="text-align:left;float:left;">Category : </h2> 
                        <h2 style=";">&nbsp;&nbsp; Horror</h2> 
                        <hr style="clear:both;"/>
                        <h2 style="text-align:left;float:left;">Publisher : </h2> 
                        <h2 style=";">&nbsp;&nbsp; PT Kompus</h2> 
                        <hr style="clear:both;"/>
                        <h2 style="text-align:left;float:left;">Pages : </h2> 
                        <h2 style=";">&nbsp;&nbsp; 160 </h2> 
                        <hr style="clear:both;"/>
                        <div class="col-md-6">
                            <button class="block btn btn-success" style="width:100%">Tambah</button>
                    </div>
                    </div>        
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
