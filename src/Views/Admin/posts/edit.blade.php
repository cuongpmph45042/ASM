@extends('layouts.master')

@section('title')
    Sửa bài viết
@endsection

@section('content')
    @if (!empty($_SESSION['errors']))
        <div class="alert alert-warning">
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

    <form action="{{ url("admin/posts/update/{$post['id']}") }}" method="post" enctype="multipart/form-data">
        <div class="row bg-white">
            <div class="col-md-6">
                <div class="mb-3 mt-3">
                    <label for="id_categories" class="form-label"><b>Danh mục:</b></label>

                    <select class="form-select" name="id_categories" id="id_categories">
                        @foreach ($categoryList as $id => $name)
                            <option value="{{ $id }}" @if ($id == $post['id_categories']) selected @endif>
                                {{ $name }} </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3 mt-3">
                    <label for="image" class="form-label"><b>Ảnh:</b></label>

                    <input type="file" class="form-control" name="image" id="image">
                    <img src="{{ asset($post['image']) }}" width="100px" class="mt-2" alt="">

                </div>
            </div>

            <div class="col-md-6">
                <div class="mb-3 mt-3">
                    <label for="title" class="form-label"><b>Tiêu đề:</b></label>

                    <input type="text" class="form-control" name="title" id="name" placeholder="Tiêu đề bài viết"
                        value="{{ $post['title'] }}">
                </div>

                <div class="mb-3 mt-3">
                    <label for="contents" class="form-label"><b>Nội dung</b></label>

                    <textarea class="form-control" name="contents" id="contents" cols="30" rows="5"
                        placeholder="Nội dung bài viết">{{ $post['contents'] }}</textarea>
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary rounded-pill mt-2">Sửa</button>
    </form>
@endsection
