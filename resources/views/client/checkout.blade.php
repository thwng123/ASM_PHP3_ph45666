@extends('client.layouts.master')

@section('content')
    <div class="container">
        <form action="{{route('client.checkoutItem')}}" method="post"  style="display:flex; max-width:1100px; justify-content: space-between;" >
            @csrf
            @php

            $total = 0;

        @endphp
            <div class="left" style="width:46%">
                <h3>Billing Details</h3>
                <div class="col-lg-12 mb-20">
                    <label>Họ tên <span>*</span></label>
                    <input type="text" name="user_name" value="" required class="form-control">     
                </div>
                <div class="col-12 mb-20">
                    <label>Địa chỉ<span>*</span></label>
                    <input type="text" name="user_address" value="" required class="form-control">     
                </div>
                <div class="col-12 mb-20">
                    <label>Email<span>*</span></label>
                    <input type="text" name="user_email" value="" required class="form-control">     
                </div>
                <div class="col-12 mb-20">
                    <label>Số điện thoại<span>*</span></label>
                    <input type="tel" name="user_phone" value="" required class="form-control">     
                </div>
               
            </div>
            <div class="right" style="width:35%">
                <tbody>
                 
                    @foreach ($data as $key => $cartItem)
                        
                        @php
                            $total += $cartItem->price * $cartItem->quantity;
                        @endphp
                    @endforeach
                </tbody>
                <h3>Cart Total</h3>
           
                <p>Subtotal <span class="float-end">$ {{ $total }}</span></p>
                <p>Total <span class="float-end">$ {{ $total }}</span></p>
    
                <input type="hidden" name="total_bill" value="{{$total}}">
                <input type="submit" name="checkout" value="Thanh toán">
                <input type="submit" name="redirect" value="Thanh toán VNPAY">
            </div>
        </form>
        {{-- <input type="submit" name="redirect" value="Thanh toán VNPAY"> --}}
    </div>
@endsection
