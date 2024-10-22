@extends('admin.layouts.master')

@section('content')
    <a href="{{route('admin.books.create')}}" class="btn btn-primary mb-3">Thêm mới</a>
    @session('message')
            <div class="alert alert-info">
                {{ session('message') }}
            </div>
        @endsession
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Content</th>
                <th>Thumbnail</th>
                <th>Author</th>
                <th>Price</th>
                <th>Category Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $book)
                
        
            <tr>
                <td>{{$book->id}}</td>
                <td>{{$book->title}}</td>
                <td>{{$book->content}}</td>
                <td>
                    @if ($book->thumbnail)
                        <img src="{{Storage::url($book->thumbnail)}}" alt="" width="150px">
                    @endif
                </td>
                <td>{{$book->author}}</td>
                <td>{{$book->price}}</td>
                <td>{{$book->category->name}}</td>
                <td>
                    {{-- <a class="btn btn-info mb-3"  href="{{ route('admin.books.show', $book) }}">Show</a> --}}
                    <a class="btn btn-danger mb-3"  href="{{  route('admin.books.edit', $book ) }}">Edit</a>
        
                    <form action="{{  route('admin.books.destroy', $book ) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-warning" onclick="return confirm('are you sure?')">Delete</button>
                    </form>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{$data->links()}}
@endsection