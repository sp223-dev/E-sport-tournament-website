
 @extends('layouts.master-news')

@section('content')
@section('title', 'E-sport | News')

<!--BREADCRUMBS BEGIN-->

<!--BREADCRUMBS END-->

    <!--CONTENT BEGIN-->

    <div class="content" style="background-color: #161616;">
        <div class="container">
            <div class="row row-offcanvas row-offcanvas-left">

                <!--SIEDBAR BEGIN-->

                <section class="sidebar col-xs-6 col-sm-6 col-md-3 sidebar-offcanvas" id="sidebar">
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
                    {{-- <div class="recent-news">
                        <h6>recent news</h6>
                        <div class="item">
                            <div class="date"><a href="news-single.html">25 Sep 2016</a> in <a href="news-single.html">highlights</a></div>
                            <a href="news-single.html" class="name">King of Kings, ajang bergengsi bagi gamer amatir berprestasi </a>
                        </div>
                        <div class="item">
                            <div class="date"><a href="news-single.html">25 Sep 2016</a> in <a href="news-single.html">highlights</a></div>
                            <a href="news-single.html" class="name">Timnas MLBB Indonesia Raih Medali Perak di SEA Games 2021 </a>
                        </div>
                        <div class="item">
                            <div class="date"><a href="news-single.html">25 Sep 2016</a> in <a href="news-single.html">highlights</a></div>
                            <a href="news-single.html" class="name">Road to PMPL ID Spring 2022 </a>
                        </div>
                    </div> --}}
                    <div class="sidebar-tags-wrap">
                        <h6>Tags</h6>
                        <div class="tags">
                            <a>Team</a>
                            <a>E-sport</a>
                            <a>E-sport Pro Season 6</a>
                            <a>Player</a>
                        </div>
                    </div>
                </section>	

                <!--SIEDBAR END-->

                <!--NEWS SINGLE BEGIN-->
                
                <section class="news-single col-xs-12 col-sm-12 col-md-9">
                    {{-- <p class="hidden-md hidden-lg">
                        <button type="button" class="btn sidebar-btn" data-toggle="offcanvas" title="Toggle sidebar">sidebar</button>
                    </p> --}}
       
                    <div class="item">
                        <div class="top-info">
                            <div class="date"><a href="#">{{ $news->date }}</a> by <a href="#">{{ $news->author }}</a></div>
                            <div class="comment-quantity">{{ $news->category->name }}</div>
                        </div>
                        <blockquote>
                            <p>{{$news->judul}}</p>
                            <p class="name">{{ $news->author }}</p>
                        </blockquote>
                        <div class="img-wrap">
                            <div class="bage highlight">{{ $news->category->name }}</div>
                            <img src="{{asset('image/news/'.$news->image)}}">
                        </div>
                        <div class="post-text">
   
                          <p>{{$news->deskripsi}}<p>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="tags">
                                        <a>News</a>
                                        <a>E-sport</a>
                                        <a>E-sport Pro News</a>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <ul class="share-bar">
                                        <li class="facebook"><a href="https://id-id.facebook.com/"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                                        <li class="twitter"><a href="https://twitter.com/i/flow/signup"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li class="google"><a href="https://www.google.com/"><i class="fa fa-google" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                  
                        {{-- <div class="comments-wrap">
                            <h4>Comments</h4> --}}
                            {{-- @foreach ($comments as $comment)
                                
                            
                            <div class="comment-item">
                                <div class="avatar"><img src="{{asset('images/common/author-avatar.jpg')}}" alt="author-avatar"></div>
                                <div class="info">
                                    <div class="date">
                                        <a href="#">25 Sep 2016</a> by <a href="#">{{$comment->$name}}</a>
                                        <a href="#" class="quote">#</a>
                                    </div>
                                    {{-- <p>{{$news->createcomment->id}}</p> --}}
                                    {{-- <a href="#" class="reply">reply</a>
                                </div>
                            </div>
                            @endforeach --}}
                            {{-- <div class="comment-item answer">
                                <div class="avatar"><img src="{{asset('images/common/author-avatar.jpg')}}" alt="author-avatar"></div>
                                <div class="info">
                                    <div class="date">
                                        <a href="#">25 Sep 2016</a> by <a href="#">Ian Finch</a>
                                        <a href="#" class="quote">#</a>
                                    </div>
                                    <p>Pabst irony tattooed, synth sriracha selvage pok pok. Wayfarers kinfolk sartorial, helvetica you probably haven't heard of them tumeric venmo deep v mixtape semiotics brunch.</p>
                                    <a href="#" class="reply">reply</a>
                                </div>
                            </div>
                            <div class="comment-item">
                                <div class="avatar"><img src="{{asset('images/common/author-avatar.jpg')}}" alt="author-avatar"></div>
                                <div class="info">
                                    <div class="date">
                                        <a href="#">25 Sep 2016</a> by <a href="#">Ian Finch</a>
                                        <a href="#" class="quote">#</a>
                                    </div>
                                    <p>Pabst irony tattooed, synth sriracha selvage pok pok. Wayfarers kinfolk sartorial, helvetica you probably haven't heard of them tumeric venmo deep v mixtape semiotics brunch.</p>
                                    <a href="#" class="reply">reply</a>
                                </div>
                            </div> --}}
                            {{-- <div class="leave-comment-wrap">
                                <h4>Leave a comment</h4>
                                @if(Session::has('success'))
                                <div class="col-md-12">
                                    <div class="alert team-alert fade in" role="alert"> 
                                        {{Session::get('success')}}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span class="fa fa-close" aria-hidden="true"></span></button><a href="{{route('mainmenu')}}">Kembali ke beranda.</a>
                                    </div>
                                </div>
                                @endif	
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-md-8">
                                            <div class="card"> --}}
                                                {{-- <div class="card-header">Create Post</div>
                                                <div class="card-body">
                                                    <form method="post" action="{{ route('comment') }}">
                                                        <div class="form-group">
                                                            {{csrf_field()}}
                                                            <label class="label">Post Title: </label>
                                                            <input type="text" name="title" class="form-control" required/>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="label">Post Body: </label>
                                                            <textarea name="body" rows="10" cols="30" class="form-control" required></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="submit" class="btn btn-success" />
                                                        </div>
                                                    </form>
                                                </div> --}}
                                            {{-- </div>
                                        </div>
                                    </div>
                                </div>
                                <form method="POST" action="{{ route('comments.store') }}" id="contactUSForm">
                                {{ csrf_field() }}								
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="item">
                                                <label>
                                                    <span>Name <i>*</i></span>
                                                    <input type="text" name="name" value="{{ old('name') }}" style="color: white !important;">
                                                    @if ($errors->has('name'))
                                                        <span style="color: #a94442 !important;">{{ $errors->first('name') }}</span>
                                                    @endif
                                                </label>
                                            </div>	  
                                        </div>
                                        <div class="col-md-6">
                                            <div class="item">
                                                <label>
                                                    <span>Email <i>*</i></span>
                                                    <input type="email" name="email" value="{{ old('email') }}" style="color: white !important;">
                                                    @if ($errors->has('email'))
                                                        <span style="color: #a94442 !important;">{{ $errors->first('email') }}</span>
                                                    @endif
                                                </label>
                                            </div>	
                                        </div>
                                        <div class="col-md-12">
                                            <div class="item">
                                                <label>
                                                    <span>Your message<i>*</i></span>
                                                    <textarea name="comment" style="color: white !important;">{{ old('comment') }}</textarea>
                                                    @if ($errors->has('comment'))
                                                        <span style="color: #a94442 !important;">{{ $errors->first('comment') }}</span>
                                                    @endif
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button class="comment-submit">post a comment</button>
                                        </div> --}}
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
             
                {{-- <!--CONTACT WRAP BEGIN-->
<section class="contacts-wrap" style="background-color: #161616;">
    <div class="container">
        @if(Session::has('success'))
        <div class="col-md-12">
            <div class="alert team-alert fade in" role="alert"> 
                {{Session::get('success')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span class="fa fa-close" aria-hidden="true"></span></button><a href="{{route('mainmenu')}}">Kembali ke beranda.</a>
            </div>
        </div>
        @endif
        <div class="row">
            <div class="col-md-5">
                <h4>Head office</h4>	
                <p>Selvage mixtape coloring book, street art swag sriracha activated charcoal vegan hammock selfies distillery wayfarers dreamcatcher lyft beard. </p>
                <div class="contact-office-img">
                    <img class="img-responsive" src="images/dota/office-img.jpg" alt="contact-office-img">	
                </div>
                <ul class="contact-list">
                    <li><i class="fa fa-flag" aria-hidden="true"></i><span>276 Upper Parliament Street, Liverpool L8, Great Britain</span></li>
                    <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:team@email.com">team@email.com</a></li>
                    <li class="phone"><i class="fa fa-phone" aria-hidden="true"></i><span>+61 3 8376 6284</span></li>
                </ul>
                <ul class="contact-bar">
                    <li class="facebook"><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                    <li class="twitter"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li class="google"><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a></li>
                    <li class="pinterest"><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                </ul>
            </div>
    
            <div class="col-md-7">
                <h4>Get in touch</h4>	
                <div class="leave-comment-wrap">
                    <form method="POST" action="{{ route('contact.us.store') }}" id="contactUSForm">
                    {{ csrf_field() }}	

                        <div class="row">
                            <div class="col-md-6">
                                <div class="item">
                                    <label>
                                        <span>Name <i>*</i></span>
                                        <input type="text" name="name" value="{{ old('name') }}" style="color: white !important;">
                                        @if ($errors->has('name'))
                                            <span style="color: #a94442 !important;">{{ $errors->first('name') }}</span>
                                        @endif
                                    </label>
                                </div>	
                            </div>
                            <div class="col-md-6">
                                <div class="item">
                                    <label>
                                        <span>Email <i>*</i></span>
                                        <input type="email" name="email" value="{{ old('email') }}" style="color: white !important;">
                                        @if ($errors->has('email'))
                                            <span style="color: #a94442 !important;">{{ $errors->first('email') }}</span>
                                        @endif
                                    </label>
                                </div>	
                            </div>
                            <div class="col-md-12">
                                <div class="item">
                                    <label>
                                        <span>Phone</span>
                                        <input type="text" name="phone" value="{{ old('phone') }}" style="color: white !important;">
                                        @if ($errors->has('phone'))
                                            <span style="color: #a94442 !important;">{{ $errors->first('phone') }}</span>
                                        @endif
                                    </label>
                                </div>	
                            </div>
                            <div class="col-md-12">
                                <div class="item">
                                    <label>
                                        <span>Subject</span>
                                        <input type="text" name="subject" value="{{ old('subject') }}" style="color: white !important;">
                                        @if ($errors->has('subject'))
                                            <span style="color: #a94442 !important;">{{ $errors->first('subject') }}</span>
                                        @endif
                                    </label>
                                </div>	
                            </div>
                            <div class="col-md-12">
                                <div class="item">
                                    <label>
                                        <span>Your message<i>*</i></span>
                                        <textarea name="message" style="color: white !important;">{{ old('message') }}</textarea>
                                        @if ($errors->has('message'))
                                            <span style="color: #a94442 !important;">{{ $errors->first('message') }}</span>
                                        @endif
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button class="comment-submit">Send us message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--CONTACT WRAP END--> --}}


                <!--NEWS SINGLE END-->

            </div>
        </div>
    </div>

    <!--CONTENT END-->`

@endsection
