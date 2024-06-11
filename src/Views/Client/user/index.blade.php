@extends('layouts.master')\

@section('title')
    Đăng nhập
@endsection

@section('content')
    <section class="section-sm d-flex justify-content-center align-items-center">
        <div class="container">
            @if (!empty($_SESSION['error']))
                <div class="alert alert-warning">
                    {{ $_SESSION['error'] }}
                </div>

                @php
                    unset($_SESSION['error']);
                @endphp
            @endif
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <form action="{{ url('auth/handle-login') }}" method="post">
                        <div>
                            <label for="" class="form-label">Email: </label>
                            <input type="email" name="email" class="form-control">
                        </div>
                        <div class="mt-3">
                            <label for="" class="form-label">Mật khẩu: </label>
                            <input type="password" name="password" class="form-control">
                        </div>
                        <button class="btn-sm mt-3 btn-success" type="submit">Đăng nhập</button>
                    </form>
                </div>
            </div>  
        </div>
    </section>
@endsection
