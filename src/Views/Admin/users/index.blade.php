@extends('layouts.master')

@section('title')
    Người dùng
@endsection

@section('content')
    <a href="{{ url('admin/users/create') }}" class="btn btn-primary mb-2">Thêm</a>
    @if (isset($_SESSION['status']) && $_SESSION['status'])
        <div class="alert alert-success">
            {{ $_SESSION['msg'] }}
        </div>

        @php
            unset($_SESSION['status']);
            unset($_SESSION['msg']);
        @endphp
    @endif
    <table class="table table-striped table-light">
        <thead>
            <tr>
                <th>ID</th>
                <th>Avatar</th>
                <th>Name</th>
                <th>Email</th>
                <th>Type</th>
                <th>Created At</th>
                <th>Update At</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user['id'] }}</td>
                    <td>{{ $user['avatar'] }}</td>
                    <td>{{ $user['name'] }}</td>
                    <td>{{ $user['email'] }}</td>
                    <td>{{ $user['type'] }}</td>
                    <td>{{ $user['created_at'] }}</td>
                    <td>{{ $user['update_at'] }}</td>
                    <td>
                        @if ($user['type'] == 'admin')
                            <a onclick="return confirm('Xác nhận hạ quyền xuống member!')" href="{{ url("admin/users/type/member/{$user['id']}") }}" class="btn-sm btn-primary">Hạ quyền</a>
                        @else
                            <a onclick="return confirm('Xác nhận cấp quyền lên admin!')" href="{{ url("admin/users/type/admin/{$user['id']}") }}" class="btn-sm btn-success">Cấp quyền</a>
                        @endif
                        <a onclick="return confirm('Xác nhận xóa!')" href="{{ url("admin/users/delete/{$user['id']}") }}" class="btn-sm btn-danger">Xóa</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
