@extends('posts.layout')

@section('conten')

<div class="row mt-5">
    <div class="col-md-12">
        <h2>Edit</h2>
        <a href="{{route('posts.index')}}" class="btn btn-primary my-3">กลับ</a>
    </div>
</div>

@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoopp !</strong>
    ระบบ ERRORS <br><br>
    <ul>
        @foreach ($errors->all() as $error)
            <li>
                {{$error}}
            </li>
        @endforeach
    </ul>
</div>

@endif

<form action="{{route('posts.update', $post->id)}}" method="post">
@csrf
@method('PUT')

<div class="row">
    <div class="col md-12 my-3">
        <div class="form-group">
            <strong>Title:</strong>
            <input type="text" name="title" value="{{$post->title}}" class="form-control" placeholder="Enter Title">
        </div>
    <div class="col md-12">
        <div class="form-group">
            <strong>Description:</strong>
            <textarea class="form-control" style="height:150px" name="description" placeholder="Enter Text" >{{$post->description}}</textarea>
        </div>
    </div>
    <div class="col-md-12">
        <button class="btn btn-success my-3" type="submit">UPDATE</button>
    </div>
</div>
</div>
</form>
@endsection
