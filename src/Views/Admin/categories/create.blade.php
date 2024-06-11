@extends('layouts.master')

@section('title')
    Thêm mới danh mục
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

    <form action="{{ url('admin/categories/store') }}" enctype="multipart/form-data" method="POST">
        <div class="row bg-white">
            <div class="col-md-6">
                <div class="mb-3 mt-3">
                    <label for="id" class="form-label">ID:</label>
                    <input disabled type="number" class="form-control" id="id" placeholder="Automatic" name="id">
                </div>
            </div>

            <div class="col-md-6">
                <div class="mb-3 mt-3">
                    <label for="name" class="form-label">Name:</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
                </div>
            </div>
        </div>

        <button type="submit" class="btn-sm rounded-pill btn-primary mt-5">Thêm</button>
    </form>
@endsection
