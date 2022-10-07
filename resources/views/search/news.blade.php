@extends('news.master')

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
                            <h1>News</h1>
                        </div>
                    </div>
                </div>	
            </div>
        </div>
    </section>
    <!--BREADCRUMBS END-->
    
        <!--CONTENT BEGIN-->
    
        <div class="content">
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
        <div class="sidebar-search-wrap">
            <h6>Search</h6>
            <form action="{{route('findnews')}}" method="get">
                <div class="wrap">
                    <input type="text" name="findnews" required  value="{{request()->input('findnews')}}">
                    <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                </div>
            </form>
        </div>
        <div class="sidebar-calendar">
            <h6>News Calendar</h6>
            <div class="widget widget_calendar">
                <div id="month-picker" class="calendar_wrap">
                    <table id="wp-calendar">
                        <caption>September 2017</caption>
                        <thead>
                            <tr>
                                <th scope="col" title="Monday">M</th>
                                <th scope="col" title="Tuesday">T</th>
                                <th scope="col" title="Wednesday">W</th>
                                <th scope="col" title="Thursday">T</th>
                                <th scope="col" title="Friday">F</th>
                                <th scope="col" title="Saturday">S</th>
                                <th scope="col" title="Sunday">S</th>
                            </tr>
                        </thead>
    
    
    
                        <tbody>
                            <tr>
                                <td colspan="2" class="pad"> </td>
                                <td>1</td>
                                <td>2</td>
                                <td>3</td>
                                <td>4</td>
                                <td>5</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>7</td>
                                <td>8</td>
                                <td>
                                    <a href="#calendar" aria-label="Posts published on February 9, 2017">9</a>
                                </td>
                                <td>
                                    <a href="#calendar" aria-label="Posts published on February 10, 2017">10</a>
                                </td>
                                <td>11</td>
                                <td>12</td>
                            </tr>
                            <tr>
                                <td>13</td>
                                <td>14</td>
                                <td>15</td>
                                <td>16</td>
                                <td>17</td>
                                <td>18</td>
                                <td>19</td>
                            </tr>
                            <tr>
                                <td>20</td>
                                <td>21</td>
                                <td>22</td>
                                <td>23</td>
                                <td>24</td>
                                <td>25</td>
                                <td>26</td>
                            </tr>
                            <tr>
                                <td>27</td>
                                <td>28</td>
                                <td class="pad" colspan="5"> </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="3" id="prev" class="pad">August</td>
                                <td class="pad"> </td>
                                <td colspan="3" id="next" class="pad">October</td>
                            </tr>
                        </tfoot>
                    </table>
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
        <h6>{{ $news->count() }} RESULTS For '{{ request()->input('findnews') }}'</h6>
        @foreach($news as $newsall)
       
        <div class="item img-top" >
            <div class="img-wrap">
                <div class="bage"><a href="news-single.html">highlight</a></div>
                <div class="mt-2">
                </div>
                <a href="{{route('news-show', ['id' => $newsall -> id])}}"><img src="{{asset('image/news/'.$newsall->image)}}"></a>
            </div>
            <div class="info">
                <a href="{{route('news-show', ['id' => $newsall -> id])}}" class="name">{{$newsall -> judul}}</a>	
                <div class="wrap">
                    <a>25 Sep 2016</a> by <a href="news-single.html">Mason Carrington</a>
                </div>
                <div class="clear"></div>

            </div>
        </div>
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