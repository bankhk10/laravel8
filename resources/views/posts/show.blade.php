@extends('posts.layout')

@section('conten')

<div class="row mt-5">
    <div class="col mt-12">
        <h2>Add</h2>
        <a href="{{route('posts.index')}}" class="btn btn-primary my-3">กลับ</a>
    </div>
</div>

    <div class="row">
        <div class="card">
            {{$post->title}}
        </div>
    </div>
    <div class="row">
        <div class="card">
            {{$post->description}}
        </div>
    </div>
@endsection
