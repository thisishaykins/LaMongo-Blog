@extends('blogs.layout')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Blogs</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('blog.create') }}"> Create New Blog</a>
            </div>
        </div>
    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Title</th>
            <th>Contents</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($blogs as $book)
        <tr>
            <td>{{ ++$i }}</td>
            <td><a href="{{ route('blog.show',$book->slug) }}" target="_blank">{{ $book->title }}</a></td>
            <td>{{ $book->content }}</td>
            <td><img src="{{ $book->image }}" width="200" alt=""></td>
            <td>
                <form action="{{ route('blog.destroy',$book->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('blog.show',$book->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('blog.edit',$book->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>


@endsection