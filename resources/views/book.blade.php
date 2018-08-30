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
                @foreach($books as $book)
                    <div class="col-md-3">
                        <div>
                            <a href="{{route('onebook',['id'=>$book])}}"><img style="width:200px" src={{ asset('images/buku.jpg') }}></a>
                            <h5><b>{{$book->title}}</b></h5>
                            <h6><b>Categori {{$book->category_id}}</b></h6>
                            <h6>{{$book->publisher_id}}<h6>
                            <span><button class="btn btn-success">tambah</button><a href="{{route('onebook',['id'=>$book])}}"><button class="btn btn-primary">detail</button></a></span>
                        </div>
                    </div>                
                @endforeach
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
