@extends('admin.layouts.master')

@section('content')
    <a href="{{ route('admin.vouchers.create') }}" class="btn btn-primary mb-3">Thêm mới</a>
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
                <th>Code</th>
                <th>Description</th>
                <th>Quantity</th>
                <th>Discount Amount</th>
                <th>Status</th>
                <th>Start at</th>
                <th>Expire at</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($vouchers as $voucher)
                <tr>
                    <td>{{ $voucher->id }}</td>
                    <td>{{ $voucher->name }}</td>
                    <td>{{ $voucher->code }}</td>
                    <td>{{ $voucher->description }}</td>
                    <td>{{ $voucher->max_uses }}</td>
                    <td>
                        @if ($voucher->type === 'fixed')
                            {{ $voucher->discount }}$
                        @else
                            {{ $voucher->discount }}%
                        @endif
                    </td>
                    <td>
                        @if ($voucher->status === 1)
                            <span class="badge bg-primary">Yes</span>
                        @else
                        <span class="badge bg-danger">No</span>
                        @endif
                    </td>
                    <td>{{ $voucher->starts_at }}</td>
                    <td>{{ $voucher->expires_at }}</td>


                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $vouchers->links() }}
@endsection
