@extends('layouts.master')

@section('title')
    Home
@endsection

@section('content')
    <!-- start of banner -->
    @include('layouts.patials.banner')
    <!-- end of banner --> 
    
    <section class="section-sm">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <h2 class="h5 section-title">Recent Post</h2>

                    @foreach ($posts as $post)
                        <article class="card mb-4">
                            <div class="row card-body">
                                <div class="col-md-4 mb-4 mb-md-0">
                                    <div class="post-slider slider-sm">
                                        <img src="{{ $post['image'] }}" class="card-img" alt="post-thumb"
                                            style="height:150px; object-fit: cover;">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h3 class="h4 mb-3">
                                        <a class="post-title"
                                            href="{{ url("post/{$post['id']}") }}">{{ $post['title'] }}</a>
                                    </h3>
                                    <ul class="card-meta list-inline">
                                        <li class="list-inline-item">
                                            <a href="author-single.html" class="card-meta-author">
                                                <img src="{{ asset('assets/client/images/john-doe.jpg') }}" alt="John Doe">
                                                <span>John Doe</span>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="ti-timer"></i>3 Min To Read
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="ti-calendar"></i>15 jan, 2020
                                        </li>
                                        <li class="list-inline-item">
                                            <ul class="card-meta-tag list-inline">
                                                <li class="list-inline-item"><a href="tags.html">{{$post['c_name']}}</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <p>Heading example Here is example of hedings. You can use this heading by following
                                        markdownify rules.</p>
                                    <a href="{{ url("post/{$post['id']}") }}" class="btn btn-outline-primary">Read More</a>
                                </div>
                            </div>
                        </article>
                    @endforeach

                    <article class="card mb-4">
                        <div class="row card-body">
                            <div class="col-12">
                                <h3 class="h4 mb-3"><a class="post-title" href="post-details.html">Cheerful Loving
                                        Couple Bakers Drinking Coffee</a></h3>
                                <ul class="card-meta list-inline">
                                    <li class="list-inline-item">
                                        <a href="author-single.html" class="card-meta-author">
                                            <img src="{{ asset('assets/client/images/kate-stone.jpg') }}" alt="Kate Stone">
                                            <span>Kate Stone</span>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <i class="ti-timer"></i>2 Min To Read
                                    </li>
                                    <li class="list-inline-item">
                                        <i class="ti-calendar"></i>14 jan, 2020
                                    </li>
                                    <li class="list-inline-item">
                                        <ul class="card-meta-tag list-inline">
                                            <li class="list-inline-item"><a href="tags.html">Wow</a></li>
                                            <li class="list-inline-item"><a href="tags.html">Tasty</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <p>It’s no secret that the digital industry is booming. From exciting startups to global
                                    brands, companies are reaching out to digital agencies, responding to the new
                                    possibilities available.</p>
                                <a href="post-details.html" class="btn btn-outline-primary">Read More</a>
                            </div>
                        </div>
                    </article>

                    <ul class="pagination justify-content-center">
                        <li class="page-item page-item active ">
                            <a href="#!" class="page-link">1</a>
                        </li>
                        <li class="page-item">
                            <a href="#!" class="page-link">2</a>
                        </li>
                        <li class="page-item">
                            <a href="#!" class="page-link">&raquo;</a>
                        </li>
                    </ul>
                </div>
                @include('aside')
            </div>
        </div>
    </section>
@endsection
