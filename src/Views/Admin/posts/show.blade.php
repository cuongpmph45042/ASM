@extends('layouts.master')

@section('title')
    Xem chi tiết: {{ $post['title'] }}
@endsection

@section('content')
    <table class="table table-light table-striped">
        <thead>
            <tr>
                <th>Trường</th>
                <th>Giá trị</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($post as $key => $value)
                <tr>
                    <td> {{ $key }} </td>
                    <td>  {!! $value !!} </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection