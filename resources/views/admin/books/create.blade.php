@extends('admin.layouts.master')

@section('content')
    {{-- <a href="{{route('admin.books.create')}}" class="btn btn-primary mb-3">Thêm mới</a> --}}

    <form action="{{ route('admin.books.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="">Title</label>
            <input type="text" name="title" id="" class="form-control">
            @error('title')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="">Thumbnail</label>
            <input type="file" name="thumbnail" id="" class="form-control">
            @error('thumbnail')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="">Content</label>
            <textarea name="content" cols="30" rows="10" class="form-control"></textarea>
            @error('content')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="">Author</label>
            <input type="text" name="author" id="" class="form-control">
            @error('author')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="">Price</label>
            <input type="text" name="price" id="" class="form-control">
            @error('price')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="">Category Name</label>
            <select name="category_id" id="" class="form-select">
                @foreach ($categories as $cate)
                    <option value="{{ $cate->id }}">{{ $cate->name }}</option>
                @endforeach
            </select>

        </div>

        <button type="submit" class="btn btn-info">SAVE</button>
    </form>
@endsection
