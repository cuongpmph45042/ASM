@extends('layouts.master')

@section('title')
    Thêm mới người dùng
@endsection

@section('content')
    @if (!empty($_SESSION['errors']))
        <div class="alert alert-warning">
            <ul>
                @foreach ($_SESSION['errors'] as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>

            @php
                unset($_SESSION['errors']);
            @endphp
        </div>
    @endif
    <form action="{{ url('admin/users/store') }}" method="post" enctype="multipart/form-data">
        <div class="row bg-white">
            <div class="col-md-6">
                <div class="mb-3 mt-3">
                    <label for="" class="form-label">Họ tên:</label>

                    <input type="text" class="form-control" name="name" placeholder="Nhập họ tên">
                </div>
                <div class="mb-3 mt-3">
                    <label for="" class="form-label">Mật khẩu:</label>

                    <input type="password" class="form-control" name="password" placeholder="Nhập mật khẩu">
                </div>
                <div class="mb-3 mt-3">
                    <label for="" class="form-label">Nhập lại mật khẩu:</label>

                    <input type="password" class="form-control" name="confirm_password" placeholder="Nhập mật khẩu">
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3 mt-3">
                    <label for="" class="form-label">Email:</label>

                    <input type="email" class="form-control" name="email" placeholder="Nhập email">
                </div>
                <div class="mb-3 mt-3">
                    <label for="" class="form-label">Avatar</label>

                    <input type="file" name="avatar" class="form-control">
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary rounded-pill mt-2">Thêm</button>
    </form>
@endsection
