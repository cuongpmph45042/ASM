@extends('layouts.master')

@section('title')
    Bài viết
@endsection

@section('content')
    <a href="{{ url('admin/posts/create') }}" class="btn rounded-pill mb-2 btn-primary">Thêm mới</a>

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
                <th>Title</th>
                <th>IMG</th>
                <th>Category</th>
                <th>Created At</th>
                <th>Update At</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post['id'] }}</td>
                    <td>{{ $post['title'] }}</td>
                    <td><img src="{{ asset("{$post['image']}") }}" width="100px" alt=""></td>
                    <td>{{ $post['c_name'] }}</td>
                    <td>{{ $post['created_at'] }}</td>
                    <td>{{ $post['update_at'] }}</td>
                    <td>
                        <a href="{{ url("admin/posts/show/{$post['id']}") }}" class="btn-sm btn-primary rounded-pill">Xem</a>
                        <a href="{{ url("admin/posts/edit/{$post['id']}") }}" class="btn-sm btn-success rounded-pill">Sửa</a>
                        <a href="{{url("admin/posts/delete/{$post['id']}")}}" onclick="return confirm('Chắc chắn xóa chứ!')" class="btn-sm btn-danger rounded-pill">Xóa</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
