@extends('layouts.master')

@section('title')
    Danh mục
@endsection

@section('content')
    <a href="{{ url('admin/categories/create') }}" class="btn rounded-pill mb-2 btn-primary">Thêm mới</a>

    @if (isset($_SESSION['status']) && $_SESSION['status'])
        <div class="alert alert-success">
            {{ $_SESSION['msg'] }}
        </div>

        @php
            unset($_SESSION['status']);
            unset($_SESSION['msg']);
        @endphp
    @endif

    <table class="table table-striped">
        <thead class="table-light">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody class="table-light">
            @foreach ($categories as $category)
                <tr>
                    <th scope="row">{{ $category['id'] }}</th>
                    <td>{{ $category['name'] }}</td>
                    <td>
                        <a href="{{ url("admin/categories/edit/{$category['id']}") }}" class="btn-sm btn-success rounded-pill">Sửa</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
