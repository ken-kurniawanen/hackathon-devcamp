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
                            <img style="width:200px" src={{ asset('images/buku.jpg') }}>
                            <h5><b>{{$book->title}}</b></h5>
                            <h6><b>Categori {{$book->category_id}}</b></h6>
                            <h6>{{$book->publisher_id}}<h6>
                            <span><a href="{{route('view',['id'=>$book->id])}}"><button class="btn btn-success">baca</button><a><button class="btn btn-danger">hapus</button></span>
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
