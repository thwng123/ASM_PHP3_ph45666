@extends('client.layouts.master')

@section('content')
    <div class="container">
        <div class="section-title" style="text-align:center;padding:10px">
            <h5>My Order History</h5>
        </div>

        <div class="table-responsive" style="text-align:center;">
            <table class="" align="center">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Total Bill</th>
                        <th scope="col">Name</th>
                        <th scope="col">Address</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Status</th>
                        <th scope="col">Order Date</th>
                        <th scope="col">View Books</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- @php
                        $i = 0;
                    @endphp --}}
                    @foreach ($orders as $item)
                        {{-- @php
                            $i++;
                        @endphp --}}
                        <tr class="">
                            <td>{{ $item->id }}</td>
                            <td>${{ $item->total_bill }}</td>
                            <td>{{ $item->user_name }}</td>
                            <td>{{ $item->user_address }}</td>
                            <td>{{ $item->user_phone }}</td>
                            <td>{{ $item->status }}</td>
                            <td>{{ $item->created_at }}</td>
                            <td>
                                <!-- Modal trigger button -->
                                <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal"
                                    data-bs-target="#modalId{{ $item->id }}"
                                    style="font-size: 14px;width:100px;height:50px">
                                    Details
                                </button>

                                <!-- Modal Body -->
                                <div class="modal fade" id="modalId{{ $item->id }}" tabindex="-1" data-bs-backdrop="static"
                                    data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg"
                                        role="document">
                                        <div class="modal-content" style="width: 800px;"> <!-- Tăng kích thước modal -->
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="modalTitleId">
                                                    All Books
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <table style="width: 100%;">
                                                    <!-- Đảm bảo bảng chiếm toàn bộ chiều rộng modal -->
                                                    <thead>
                                                        <tr>
                                                            <th>Book</th>
                                                            <th>Quantity</th>
                                                            <th>Price</th>
                                                            <th>Sub Total</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($books as $book)
                                                            @if ($item->id == $book->order_id)
                                                                <tr>
                                                                    <td style="width: 250px;">
                                                                        <!-- Điều chỉnh độ rộng của cột -->
                                                                        <img src="{{ Storage::url($book->thumbnail) }}"
                                                                            width="50px" alt="" srcset="">
                                                                        {{ $book->title }}
                                                                    </td>

                                                                    <td>{{ $book->quantity }}</td>
                                                                    <td>{{ $book->price }}</td>
                                                                    <td>{{ $book->price * $book->quantity }}</td>
                                                                </tr>
                                                            @endif
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                    Close
                                                </button>
                                                {{-- <button type="button" class="btn btn-primary">Save</button> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>


                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
@endsection
