@extends('admin.layouts.master')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th>Customer</th>
                {{-- <th>Email</th>
                <th>Customer Status</th> --}}
                <th>Bill</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Order Status</th>
                <th>Order Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $item)
                <tr>
                    <td>{{ $item->user->name }}</td>

                    <td>
                        ${{ $item->total_bill }}
                    </td>

                    <td>{{ $item->user->phone }}</td>
                    <td>{{ $item->user->address }}</td>
                    <td>{{ $item->status }}</td>
                    <td>{{ $item->created_at }}</td>

                    <td>

                        @if ($item->status == 'Đang chờ xử lý')
                            <a class="btn btn-success mb-3"
                                href="{{ URL::to('changeOrderStatus/Chấp nhận/' . $item->id) }}">Accept</a>
                            <a class="btn btn-danger mb-3"
                                href="{{ URL::to('changeOrderStatus/Từ chối/' . $item->id) }}">Reject</a>
                        @elseif($item->status == 'Chấp nhận')
                            <a class="btn btn-success mb-3"
                                href="{{ URL::to('changeOrderStatus/Đã hoàn thành đơn/' . $item->id) }}">Complated</a>
                        @elseif($item->status == 'Đã hoàn thành đơn')
                            Đã hoàn thành đơn
                        @else
                            <a class="btn btn-success mb-3"
                                href="{{ URL::to('changeOrderStatus/Chấp nhận/' . $item->id) }}">Accepted</a>
                        @endif

                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $orders->links() }}
@endsection
