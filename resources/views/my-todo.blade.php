@extends('already-login')

@section('title')
| My Todo    
@endsection

@section('content')
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <ul class="list-group" style="margin-top: 100px">
                    <li class="list-group-item active text-center"><h1>My Todo</h1></li>
                    @foreach ($data as $item)
                    <li class="list-group-item">{{$item->name}}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection