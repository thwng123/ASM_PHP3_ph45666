@extends('client.layouts.master')
@section('content')
    <div class="container">
        <div class="">
            @if (session()->has('msg'))
                <div class="alert alert-success">
                    {{ session()->get('msg') }}
                </div>
            @endif
            <form action="{{ route('client.updateCart') }}" method="post">
                @csrf
                {{-- @method('PUT') --}}
                <table class="w-100">
                    <thead align="center">
                        <tr>
                            <th scope="col">Title</th>
                            <th scope="col">Thumbnail</th>
                            <th scope="col">Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $key => $cartItem)
                            <tr align="center">
                                <td>{{ $cartItem->title }}</td>

                                <td>
                                    <img src="{{ Storage::url($cartItem->thumbnail) }}" alt="" width="100px">
                                </td>
                                <td>${{ $cartItem->price }}</td>
                                <td>
                                    <input type="number" name='cart[{{ $key }}][qty]' min="1"
                                        max="{{ $cartItem->bQuantity }}" value="{{ $cartItem->quantity }}">

                                    <input type="hidden" name='cart[{{ $key }}][id]' value="{{ $cartItem->id }}">
                                    {{-- <input type="hidden" name="id[]" value="{{ $cartItem->id }}"> --}}
                                </td>
                                <td>${{ $cartItem->price * $cartItem->quantity }}</td>
                                <td>
                                    <a href="{{ route('client.deleteCart', $cartItem->id) }}">X</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>
                                {{-- <input type="hidden" name="id" value="{{ $cartItem->id }}"> --}}
                                <input type="submit" value="Update Cart">
                            </th>
                            {{-- <th><input type="submit" value="Update Cart"></th> --}}
                        </tr>
                    </tfoot>
                </table>
            </form>

        </div>
    </div>
@endsection
