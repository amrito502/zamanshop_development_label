@extends('admin.master')

@section('admin')
<div class="container mt-5">
    <h1>Seller Requests</h1>
    @include('partials.message')
    <table class="table">
        <thead>
            <tr>
                <th>User</th>
                <th>Message</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($requests as $request)
            <tr>
                <td>{{ $request->user->name }}</td>
                <td>{{ Str::words($request->message, 10, '...') }}</td>
                {{-- <td>{{ $request->message }}</td> --}}
                <td>{{ $request->status }}</td>
                <td>
                    <button type="submit" class="btn btn-info">View</button>
                    <form action="{{ route('admin.seller.requests.approve', $request->id) }}" method="POST" class="d-inline">
                        @csrf
                        <button type="submit" class="btn btn-success">Approve</button>
                    </form>
                    <form action="{{ route('admin.seller.requests.reject', $request->id) }}" method="POST" class="d-inline">
                        @csrf
                        <button type="submit" class="btn btn-danger">Reject</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection