@extends('admin.layouts.master')

@section('content')
    {{-- <a href="{{route('admin.books.create')}}" class="btn btn-primary mb-3">Thêm mới</a> --}}

    <form action="{{ route('admin.users.update', $user) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="">Name</label>
            <input type="text" name="name" id="" class="form-control" value="{{ $user->name }}">
            @error('name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="">Avatar</label><br>
            <img src="{{Storage::url($user->avatar)}}" alt="" srcset="">
            <input type="file" name="avatar" id="" class="form-control">
            @error('avatar')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="">Address</label>
            <input type="text" name="address" id="" class="form-control" value="{{ $user->address }}">
            @error('address')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="">Phone</label>
            <input type="text" name="phone" id="" class="form-control" value="{{ $user->phone }}">
            @error('phone')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="">Email</label>
            <input type="email" name="email" id="" class="form-control" value="{{ $user->email }}">
            @error('price')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="">Role</label>
            <input type="text" name="role" id="" class="form-control" value="{{ $user->role }}">
            @error('price')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="">Password</label>
            <input type="password" name="password" id="" class="form-control" value="{{ $user->password }}">
            @error('price')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>


        <button type="submit" class="btn btn-info">SAVE</button>
    </form>
@endsection
