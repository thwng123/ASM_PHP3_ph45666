@extends('admin.layouts.master')

@section('content')
    <a href="{{route('admin.categories.create')}}" class="btn btn-primary mb-3">Thêm mới</a>
    @session('message')
            <div class="alert alert-info">
                {{ session('message') }}
            </div>
        @endsession
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
               
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $category)
                
        
            <tr>
                <td>{{$category->id}}</td>
                <td>{{$category->name}}</td>
                
                <td>
                    {{-- <a class="btn btn-info mb-3"  href="{{ route('admin.books.show', $book) }}">Show</a> --}}
                    <a class="btn btn-danger mb-3"  href="{{  route('admin.categories.edit', $category ) }}">Edit</a>
        
            
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{-- {{$data->links()}} --}}
@endsection