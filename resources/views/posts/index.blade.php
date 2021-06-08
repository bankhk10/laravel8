@extends('posts.layout')

@section('conten')
    <div class="row mt-5">
        <div class="col-md-12">
            <h2>รายการ</h2>
            <a href="{{ route('posts.create') }}" class="btn btn-success my-3">เพิ่มข้อมูล</a>
        </div>
    </div>

    @if ($messages = Session::get('success'))
        <div class="alet alert-success">
            {{ $messages}}
        </div>

    @endif

    <table class="table table-bordered">
        <tr>
            <th>No.</th>
            <th>Title</th>
            <th>Description</th>
            <th width="280px">Action</th>
        </tr>

        @foreach ($data as $key => $value)
            <tr>
                <td>{{++$i}}</td>
                <td>{{$value->title}}</td>
                <td>{{Str::limit($value->description, 100 )}}</td>
                <td>
                    <form action="{{ route('posts.destroy', $value->id) }}" method="post">
                        <a href="{{ route('posts.show', $value->id)}}" class="btn btn-primary">Show</a>
                        <a href="{{ route('posts.edit', $value->id)}}" class="btn btn-info">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">DELETE</button>
                    </form>
                </td>
            </tr>
        @endforeach

    </table>

    {!! $data->links() !!}

@endsection
