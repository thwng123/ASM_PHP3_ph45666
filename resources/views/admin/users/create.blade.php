@extends('admin.layouts.master')

@section('content')
    {{-- <a href="{{route('admin.books.create')}}" class="btn btn-primary mb-3">Thêm mới</a> --}}

    <form action="{{ route('admin.users.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="">Name</label>
            <input type="text" name="name" id="" class="form-control">
            @error('name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="">Avatar</label>
            <input type="file" name="avatar" id="" class="form-control">
            @error('avatar')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="">Address</label>
            <input type="text" name="address" id="" class="form-control">
            @error('address')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="">Phone</label>
            <input type="text" name="phone" id="" class="form-control">
            @error('phone')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="">Email</label>
            <input type="email" name="email" id="" class="form-control">
            @error('price')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="">Password</label>
            <input type="password" name="password" id="" class="form-control">
            @error('price')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
       

        <button type="submit" class="btn btn-info">SAVE</button>
    </form>
@endsection
