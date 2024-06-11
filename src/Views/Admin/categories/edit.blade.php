@extends('layouts.master')

@section('title')
    Sửa danh mục
@endsection

@section('content')
    @if (!empty($_SESSION['errors']))
        <div class="alert alert-danger">
            <ul>
                @foreach ($_SESSION['errors'] as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @php
            unset($_SESSION['errors']);
        @endphp
    @endif

    @if (isset($_SESSION['status']) && $_SESSION['status'])
        <div class="alert alert-success">{{ $_SESSION['msg'] }}</div>

        @php
            unset($_SESSION['status']);
            unset($_SESSION['msg']);
        @endphp
    @endif

    <form action="{{ url("admin/categories/update/{$category['id']}") }}" enctype="multipart/form-data" method="POST">
        <div class="row bg-white">
            <div class="col-md-6">
                <div class="mb-3 mt-3">
                    <label for="id" class="form-label">ID:</label>
                    <input disabled type="number" class="form-control" id="id" value="{{ $category['id'] }}" name="id">
                </div>
            </div>

            <div class="col-md-6">
                <div class="mb-3 mt-3">
                    <label for="name" class="form-label">Name:</label>
                    <input type="text" class="form-control" id="name" value="{{ $category['name'] }}" name="name">
                </div>
            </div>
        </div>

        <button type="submit" class="btn-sm rounded-pill btn-primary mt-5">Sửa</button>
    </form>
@endsection
