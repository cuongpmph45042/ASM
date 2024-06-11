@extends('layouts.master')

@section('title')
    Thêm bài viết
@endsection

@section('content')
    @if (!empty($_SESSION['errors']))
        <div class="alert alert-danger">
            <ul>
                @foreach ($_SESSION['errors'] as $error)
                    <li> {{ $error }} </li>
                @endforeach
            </ul>
        </div>
        @php
            unset($_SESSION['errors']);
        @endphp
    @endif
    <form action="{{ url('admin/posts/store') }}" method="post" enctype="multipart/form-data">
        <div class="row bg-white">
            <div class="col-md-6">
                <div class="mb-3 mt-3">
                    <label for="id_categories" class="form-label"><b>Danh mục:</b></label>

                    <select class="form-select" name="id_categories" id="id_categories">
                        @foreach ($categoryList as $id => $name)
                            <option value="{{ $id }}"> {{ $name }} </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3 mt-3">
                    <label for="image" class="form-label"><b>Ảnh:</b></label>

                    <input type="file" class="form-control" name="image" id="image">
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="mb-3 mt-3">
                    <label for="title" class="form-label"><b>Tiêu đề:</b></label>

                    <input type="text" class="form-control" name="title" id="name" placeholder="Tiêu đề bài viết">
                </div>

                <div class="mb-3 mt-3">
                    <label for="contents" class="form-label"><b>Nội dung</b></label>

                    <textarea class="form-control" name="contents" id="contents" cols="30" rows="5" placeholder="Nội dung bài viết"></textarea>
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary rounded-pill mt-2">Thêm</button>
    </form>
@endsection
