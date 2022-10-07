@extends('category.master')

@section('content')
@section('title', 'E-sport | News')
  

<!--BREADCRUMBS BEGIN-->
    <section class="image-header">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="info">
                        <div class="wrap">
                            <ul class="breadcrumbs">
                                <li><a href="index.html">E-sport</a>/</li>
                                <li>News</li>
                            </ul>
                            <h1>Championship</h1>
                        </div>
                    </div>
                </div>	
            </div>
        </div>
    </section>
    <!--BREADCRUMBS END-->
    
        <!--CONTENT BEGIN-->
    
        <div class="content" style="margin-bottom: 40px;">
            <div class="container">
                <div class="row row-offcanvas row-offcanvas-left">
    
                    <!--SIDEBAR BEGIN-->
    <section class="sidebar col-xs-6 col-md-3 sidebar-offcanvas" id="sidebar">
        <div class="sidebar-menu-wrap">
            <h6>Categories</h6>
            <ul class="categories-list">
                <li>
                    <a href="{{ route('all') }}"><span class="count">{{DB::table('tbl_news')->count()}}</span>All</a>
                </li>
                <li>
                    <a href="{{url('/category/highlight')}}"><span class="count">{{DB::table('tbl_news')->where('category_id', 5)->count()}}</span>Highlight</a>
                </li>
                {{-- <li>
                    <a href="#"><span class="count">22</span>Competitions & Reviews</a>
                    <ul>
                        <li><a href="#"><span class="count">12</span>News</a></li>
                        <li><a href="#"><span class="count">10</span>Competitions & Reviews</a></li>
                        <li><a href="#"><span class="count">9</span>Interviews</a></li>
                        <li><a href="#"><span class="count">8</span>Highlights</a></li>
                        <li><a href="#"><span class="count">7</span>Other</a></li>	
                    </ul>
                </li> --}}
                <li>
                    <a href="{{url('/category/championship')}}"><span class="count">{{DB::table('tbl_news')->where('category_id', 6)->count()}}</span>Championship</a>
                </li>
                <li>
                    <a href="{{url('/category/hotnews')}}"><span class="count">{{DB::table('tbl_news')->where('category_id', 7)->count()}}</span>Hot News</a>
                </li>
                <li>
                    <a href="{{url('/category/advertisement')}}"><span class="count">{{DB::table('tbl_news')->where('category_id', 8)->count()}}</span>Advertisement</a>
                </li>
            </ul>
        </div>
        {{-- <div class="sidebar-search-wrap">
            <h6>Search</h6>
            <form action="/search" method="get">
                <div class="wrap">
                    <input type="text" name="search-news" required>
                    <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                </div>
            </form>
        </div> --}}
        <div class="sidebar-calendar">
            <div class="widget widget_calendar">
                <div class="calendar">
                    <div class="">
                        <h6 class="month-picker text-center" id="month-picker">Feb</h6>
                    </div>
                    <div class="calendar-body">
                        <div class="calendar-week-day">
                            <div>S</div>
                            <div>M</div>
                            <div>T</div>
                            <div>W</div>
                            <div>T</div>
                            <div>F</div>
                            <div>S</div>
                        </div>
                        <div class="calendar-days"></div>
                    </div>
                    {{-- <div class="calendar-footer">
                        <div class="toggle">
                            <span>Dark Mode</span>
                            <div class="dark-mode-switch">
                                <div class="dark-mode-switch-ident"></div>
                            </div>
                        </div>
                    </div> --}}
                    <div class="month-list"></div>
                    <div class="year-picker" style="margin-top: 25px;">
                        <span class="year-change" id="prev-year">
                            <pre style="color: white !important;
                            background-color: rgb(180, 67, 53) !important;
                            border: none !important;"><</pre>
                        </span>
                        <span id="year">2021</span>
                        <span class="year-change" id="next-year">
                            <pre style="color: white !important;
                            background-color: rgb(180, 67, 53) !important;
                            border: none !important;">></pre>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="sidebar-tags-wrap">
            <h6>Tags</h6>
            <div class="tags">
                <a href="#">Team</a>
                <a href="#">Sport</a>
                <a href="#">Soccer</a>
                <a href="#">Football</a>
                <a href="#">Player</a>
            </div>
        </div>
    </section>	
    <!--SIEDBAR END-->
                    <!--NEWS LIST BEGIN-->


    
    <div class="news-list col-xs-12 col-md-9">
        {{-- <p class="hidden-md hidden-lg">
            <button type="button" class="btn sidebar-btn" data-toggle="offcanvas" title="Toggle sidebar">sidebar</button>
        </p> --}}

        @foreach($news as $newsall)
        @if ($newsall->category->name == 'Championship')
            <div class="item img-top" >
                <div class="img-wrap">
                    <div class="bage"><a href="news-single.html">{{ $newsall->category->name }}</a></div>
                    <div class="mt-2">
                    </div>
                    <a href="{{route('news-show', ['id' => $newsall -> id])}}"><img src="{{asset('image/news/'.$newsall->image)}}"></a>
                </div>
                <div class="info">
                    <a href="{{route('news-show', ['id' => $newsall -> id])}}" class="name">{{$newsall -> judul}}</a>	
                    <div class="wrap">
                        <a>{{ $newsall->date }}</a> by <a href="news-single.html">{{ $newsall->author }}</a>
                    </div>
                    <div class="clear"></div>

                </div>
            </div>
        @endif
        @endforeach
        
<!--        
        <div class="item img-top">
            <div class="img-wrap">
                <div class="bage"><a href="news-single.html">highlight</a></div>
                <a href="news-single.html"><img src="images/news/news-2.jpg" alt="post image"></a>
            </div>
            <div class="info">
                <a href="news-single.html" class="name">RRQ MIKA DOMINASI KLASEMEN REGULAR SEASON WSL DENGAN 100% MATCH RATE</a>	
                <div class="wrap">
                    <a href="news-single.html">25 Sep 2016</a> by <a href="news-single.html">Mason Carrington</a>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <div class="item img-top">
            <div class="img-wrap">
                <div class="bage"><a href="news-single.html">highlight</a></div>
                <a href="news-single.html"><img src="images/news/news-3.jpg" alt="post image"></a>
            </div>
            <div class="info">
                <a href="news-single.html" class="name">RRQ MIKA DOMINASI KLASEMEN REGULAR SEASON WSL DENGAN 100% MATCH RATE</a>	
                <div class="wrap">
                    <a href="news-single.html">25 Sep 2016</a> by <a href="news-single.html">Mason Carrington</a>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <div class="item img-top">
            <div class="img-wrap">
                <div class="bage"><a href="news-single.html">highlight</a></div>
                <a href="news-single.html"><img src="images/news/news-4.jpg" alt="post image"></a>
            </div>
            <div class="info">
                <a href="news-single.html" class="name">RRQ MIKA DOMINASI KLASEMEN REGULAR SEASON WSL DENGAN 100% MATCH RATE</a>	
                <div class="wrap">
                    <a href="news-single.html">25 Sep 2016</a> by <a href="news-single.html">Mason Carrington</a>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        </div> -->
        {{-- {{ $news->links('news.paginator') }} --}}
    </div>
    <!--NEWS LIST END-->
    
                </div>
            </div>
        </div>
<!--CONTENT END-->
@endsection