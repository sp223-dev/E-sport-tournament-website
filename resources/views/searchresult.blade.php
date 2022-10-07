@extends('layouts.master')

@section('content')
@section('title', 'Search Results')

    <!--SERCH WRAPPER BEGIN-->

    <section class="search-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4>Search Results for “{{Request()->get('search')}}”</h4>
                    <div class="search-field">
                        <form method="GET">
                            <div class="wrap">
                                <input type="text" name="search" placeholder="masukkan judul pencarian" required>
                                <button><i class="fa fa-search" aria-hidden="true"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    @forelse($datas as $data)
                    <div class="search-item">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="image"><img class="img-responsive" src="{{asset('image/news/'.$data->image)}}" alt="gallery-slide-img"></div>
                            </div>
                            <div class="col-md-8">
                                <div class="info">
                                    <a href="{{route('news-show', ['id' => $data -> id])}}" class="name">{{$data->judul}}</a>
                                    <div class="wrap">
                                        <a href="">{{$data->date}}</a> by <a href="">{{$data->author}}</a>
                                    </div>
                                    <p>{{str_limit($data->deskripsi, 150)}}</p>
                                    <a href="{{route('news-show', ['id' => $data -> id])}}" class="read-more">read more</a>
                                </div>
                            </div>
                            @empty
                            <p style="text-align: center; margin: revert !important;"><i>Sorry, but nothing matched your search criteria. <strong>Please try again with some different keywords.<strong><i></p>
                        </div>
                    </div>
                    @endforelse 
                    {{-- <div class="donation-item">
                        <div class="row no-gutter equal-height">
                            @forelse($datas as $data)
                            <div class="col-md-7 col-sm-12">
                                <div class="img-wrap"><img class="img-responsive" src="{{asset('image/news/'.$data->image)}}" alt="donation-item"></div>
                            </div>
                            <div class="col-md-5 col-sm-12 position-relative">
                                <div class="info">
                                    <div class="wrap">
                                        <div class="title">{{$data->judul}}</div>
                                        <p style="color: #666666">BY SANDY PERMATASARI</p>
                                        
                                        <p>{{$data->deskripsi, 5}}</p>
                                        <a href="{{route('news-show', ['id' => $data -> id])}}" class="btn small">Read more</a> 
                                    </div>
                                </div>
                            </div>
                            @empty
                            <p style="text-align: center; margin: revert !important;"><i>Sorry, but nothing matched your search criteria. <strong>Please try again with some different keywords.<strong><i></p>
                            
                        </div>
                        @endforelse 
                    </div> --}}
                </div>
                    {{-- <div class="search-item">
                        <div class="row">
                            {{-- @forelse($datas as $data) --}}
                            {{-- <div class="col-md-4">
                                <div class="image"><img class="img-responsive"  alt="gallery-slide-img"></div>
                            </div>
                            <div class="col-md-8">
                                <div class="info">
                                    <a href="news-single.html" class="name">{{$data->judul}}</a>
                                    <div class="wrap">
                                        <a href="news-single.html">25 Sep 2016</a> by <a href="news-single.html">Mason Carrington</a>
                                    </div>
                                    <p>{{$data->deskripsi, 5}}</p>
                                    <a href="{{route('news-show', ['id' => $data -> id])}}" class="read-more">read more</a>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
                
                    {{-- <div class="search-item">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="image"><img class="img-responsive" src="images/common/news2.jpg" alt="gallery-slide-img"></div>
                            </div>
                            <div class="col-md-8">
                                <div class="info">
                                    <a href="news-single.html" class="name">{{$datas -> judul}}</a>
                                    <div class="wrap">
                                        <a href="news-single.html">{{$datas -> tanggal}}</a>
                                    </div>
                                    <p>{{$datas -> deskripsi}}</p>
                                    <a href="news-single.html" class="read-more">read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="search-item">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="image"><img class="img-responsive" src="images/common/news3.jpg" alt="gallery-slide-img"></div>
                            </div>
                            <div class="col-md-8">
                                <div class="info">
                                    <a href="news-single.html" class="name">{{$datas -> judul}}</a>
                                    <div class="wrap">
                                        <a href="news-single.html">{{$datas -> tanggal}}</a>
                                    </div>
                                    <p>{{$datas -> deskripsi}}</p>
                                    <a href="news-single.html" class="read-more">read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="search-item">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="image"><img class="img-responsive" src="images/common/news4.jpg" alt="gallery-slide-img"></div>
                            </div>
                            <div class="col-md-8">
                                <div class="info">
                                    <a href="news-single.html" class="name">Bauza: Tabsed and Tobon will start against Interclubo</a>
                                    <div class="wrap">
                                        <a href="news-single.html">25 Sep 2016</a> by <a href="news-single.html">Mason Carrington</a>
                                    </div>
                                    <p>Pabst irony tattooed, synth <span>test</span> sriracha selvage pok pok. Wayfarers kinfolk sartorial... </p>
                                    <a href="news-single.html" class="read-more">read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     --}}

    </section>
    
    <!--SERCH WRAPPER END-->

@endsection