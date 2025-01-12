<aside class="col-lg-4 @@sidebar">
    <!-- Search -->
    <div class="widget">
        <h4 class="widget-title"><span>Search</span></h4>
        <form action="#!" class="widget-search">
            <input class="mb-3" id="search-query" name="s" type="search" placeholder="Type &amp; Hit Enter...">
            <i class="ti-search"></i>
            <button type="submit" class="btn btn-primary btn-block">Search</button>
        </form>
    </div>

    <!-- categories -->
    <div class="widget widget-categories">
        <h4 class="widget-title"><span>Danh mục</span></h4>
        <ul class="list-unstyled widget-list">
            @foreach ($categories as $category)
                <li>
                    <a href="#" class="d-flex">{{ $category['name'] }} <small class="ml-auto"></small></a>
                </li>
            @endforeach
        </ul>
    </div><!-- tags -->
    <div class="widget">
        <h4 class="widget-title"><span>Tags</span></h4>
        <ul class="list-inline widget-list-inline widget-card">
            <li class="list-inline-item"><a href="tags.html">City</a></li>
            <li class="list-inline-item"><a href="tags.html">Color</a></li>
            <li class="list-inline-item"><a href="tags.html">Creative</a></li>
            <li class="list-inline-item"><a href="tags.html">Decorate</a></li>
            <li class="list-inline-item"><a href="tags.html">Demo</a></li>
            <li class="list-inline-item"><a href="tags.html">Elements</a></li>
            <li class="list-inline-item"><a href="tags.html">Fish</a></li>
            <li class="list-inline-item"><a href="tags.html">Food</a></li>
            <li class="list-inline-item"><a href="tags.html">Nice</a></li>
            <li class="list-inline-item"><a href="tags.html">Recipe</a></li>
            <li class="list-inline-item"><a href="tags.html">Season</a></li>
            <li class="list-inline-item"><a href="tags.html">Taste</a></li>
            <li class="list-inline-item"><a href="tags.html">Tasty</a></li>
            <li class="list-inline-item"><a href="tags.html">Vlog</a></li>
            <li class="list-inline-item"><a href="tags.html">Wow</a></li>
        </ul>
    </div><!-- recent post -->
    <div class="widget">
        <h4 class="widget-title">Recent Post</h4>

        <!-- post-item -->
        <article class="widget-card">
            <div class="d-flex">
                <img class="card-img-sm" src="{{ asset('assets/client/images/post/post-10.jpg') }}">
                <div class="ml-3">
                    <h5><a class="post-title" href="post/elements/">Elements That You Can Use In This
                            Template.</a></h5>
                    <ul class="card-meta list-inline mb-0">
                        <li class="list-inline-item mb-0">
                            <i class="ti-calendar"></i>15 jan, 2020
                        </li>
                    </ul>
                </div>
            </div>
        </article>

        <article class="widget-card">
            <div class="d-flex">
                <img class="card-img-sm" src="{{ asset('assets/client/images/post/post-3.jpg') }}">
                <div class="ml-3">
                    <h5><a class="post-title" href="post-details.html">Advice From a Twenty
                            Something</a></h5>
                    <ul class="card-meta list-inline mb-0">
                        <li class="list-inline-item mb-0">
                            <i class="ti-calendar"></i>14 jan, 2020
                        </li>
                    </ul>
                </div>
            </div>
        </article>

        <article class="widget-card">
            <div class="d-flex">
                <img class="card-img-sm" src="{{ asset('assets/client/images/post/post-7.jpg') }}">
                <div class="ml-3">
                    <h5><a class="post-title" href="post-details.html">Advice From a Twenty
                            Something</a></h5>
                    <ul class="card-meta list-inline mb-0">
                        <li class="list-inline-item mb-0">
                            <i class="ti-calendar"></i>14 jan, 2020
                        </li>
                    </ul>
                </div>
            </div>
        </article>
    </div>

    <!-- Social -->
    <div class="widget">
        <h4 class="widget-title"><span>Social Links</span></h4>
        <ul class="list-inline widget-social">
            <li class="list-inline-item"><a href="#"><i class="ti-facebook"></i></a></li>
            <li class="list-inline-item"><a href="#"><i class="ti-twitter-alt"></i></a></li>
            <li class="list-inline-item"><a href="#"><i class="ti-linkedin"></i></a></li>
            <li class="list-inline-item"><a href="#"><i class="ti-github"></i></a></li>
            <li class="list-inline-item"><a href="#"><i class="ti-youtube"></i></a></li>
        </ul>
    </div>
</aside>
