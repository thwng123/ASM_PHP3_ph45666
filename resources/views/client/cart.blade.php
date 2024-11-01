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
                        @php
                            $total = 0;
                        @endphp
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
                            @php
                                $total += $cartItem->price * $cartItem->quantity;
                            @endphp
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>
                                @isset($cartItem)
                                    <input type="submit" value="Update Cart">
                                @endisset
                                {{-- <input type="submit" value="Update Cart"> --}}
                            </th>
                            <th></th>
                            <th></th>
                            <th></th>

                            <th>

                                @isset($cartItem)
                                    <div class="cart_total" style="border: 1px solid gray ;padding:20px; background:#f3f2ec">
                                        <h3>Cart Total</h3>
                                        {{-- <div class="subtotal" style="justify-items: center">
                                        <p>Subtotal <span class="d-flex justify-content-end">$ {{ $total }}</span></p>
                                    </div> --}}
                                        <p>Subtotal <span class="float-end">$ {{ $total }}</span></p>
                                        <p>Total <span class="float-end">$ {{ $total }}</span></p>

                                        <a href="{{ route('client.checkout') }}" style="border: 1px solid; padding:10px"
                                            class="d-flex justify-content-center">Proceed to checkout</a>
                                    </div>
                                @endisset

                            </th>

                        </tr>
                    </tfoot>
                </table>
            </form>

        </div>
    </div>
@endsection
