@extends('master')

@section('sidebar')
<aside id="sidebar">
    <div class="sidebar__content">
        <!-- Sidebar logo -->
        <a href="{{route('home')}}" class="sidebar__logo">
            <img class="sidebar__logo--big" src="assets/icon/logo.png" alt="">
            <img class="sidebar__logo--small" src="assets/icon/icon.png" alt="">
        </a>
        <!-- End Sidebar logo -->

        <!-- Sidebar nav -->
        <ul class="sidebar__nav">
            <li class="sidebar__nav-item sidebar__nav-item--active">
                <a href="{{route('home')}}" class="sidebar__nav-link sidebar__nav-link--active">
                    <i class="bi bi-house"></i>
                    <span>Trang chủ</span>
                </a>
            </li>

            <li class="sidebar__nav-item">
                <a href="{{route('theme')}}" class="sidebar__nav-link">
                    <i class="bi bi-music-note-beamed"></i>
                    <span>Chủ đề</span>
                </a>
            </li>

            <li class="sidebar__nav-item">
                <a href="{{route('genre')}}" class="sidebar__nav-link">
                    <i class="bi bi-ui-radios-grid"></i>
                    <span> Thể loại</span>
                </a>
            </li>
            

            <li class="sidebar__nav-item">
                <a href="{{route('artists')}}" class="sidebar__nav-link">
                    <i class="bi bi-people"></i>
                    <span>Nghệ sĩ</span>
                </a>
            </li>

            <li class="sidebar__nav-item">
                <a href="{{route('album')}}" class="sidebar__nav-link">
                    <i class="bi bi-journal-album"></i>
                    <span>Album</span>
                </a>
            </li>

            <li class="sidebar__nav-item">
                <a href="{{route('event')}}" class="sidebar__nav-link">
                    <i class="bi bi-calendar-event"></i>
                    <span>Event</span>
                </a>
            </li>

            <li class="sidebar__nav-item">
                <a href="{{route('news')}}" class="sidebar__nav-link">
                    <i class="bi bi-newspaper"></i>
                    <span>Tin tức</span>
                </a>
            </li>
        </ul>
        <!-- End Sidebar nav -->
        <div class="sidebar__vip">
            <img src="./assets/img/vip.jpg" alt="">
        </div>
    </div>
</aside>
@endsection

@section('content')
<main id="main">

    <div class="container-fluid">
        <!-- Slider -->
        <section id="slider" class="row">
            <div class="col-10">
                <div id="slider__content" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#slider__content" data-slide-to="0" class="active"></li>
                        <li data-target="#slider__content" data-slide-to="1"></li>
                        <li data-target="#slider__content" data-slide-to="2"></li>
                        <li data-target="#slider__content" data-slide-to="3"></li>
                        <li data-target="#slider__content" data-slide-to="4"></li>
                        <li data-target="#slider__content" data-slide-to="5"></li>
                    </ol>

                    <div class="slider__content--list carousel-inner">
                        <div class="slider__content--item carousel-item active">
                        <img src="./assets/img/home/slide1.jpg" class="d-block w-100" alt="...">
                        </div>

                        <div class="slider__content--item carousel-item">
                        <img src="./assets/img/home/slide2.jpg" class="d-block w-100" alt="...">
                        </div>

                        <div class="slider__content--item carousel-item">
                        <img src="./assets/img/home/slide3.jpg" class="d-block w-100" alt="...">
                        </div>

                        <div class="slider__content--item carousel-item">
                        <img src="./assets/img/home/slide4.jpg" class="d-block w-100" alt="...">
                        </div>

                        <div class="slider__content--item carousel-item">
                        <img src="./assets/img/home/slide5.jpg" class="d-block w-100" alt="...">
                        </div>

                        <div class="slider__content--item carousel-item">
                        <img src="./assets/img/home/slide6.jpg" class="d-block w-100" alt="...">
                        </div>

                    </div>

                    <button class="carousel-control-prev" type="button" data-target="#slider__content" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </button>

                    <button class="carousel-control-next" type="button" data-target="#slider__content" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </button>
                </div>
            </div>
        </section>
        <!-- End Slider -->

        <!-- Releases -->
        <section id="music" class="row row--grid">
            <!-- title -->
            <div class="col-12">
                <div class="music__title">
                    <h2>Những Giai Điệu Mới Nhất</h2>
                </div>
            </div>
            <!-- end title -->
            @for ($i = 0; $i < 12; $i++)
            <div class="col-xl-2 col-lg-3 col-sm-4 col-6">
                <div class="music__item" data-index="{{$new[$i]->id}}">
                    <div class="music__item--img">
                        <img src="{{$new[$i]->image}}" alt="">
                    </div>
                    <div class="music__item--btn removeElement">
                        <a href="{{$new[$i]->link}}" class="music--btn music--btn__download">
                            <i class="bi bi-download"></i>
                        </a>
                        <div class="music--btn music--btn__play">
                            <i class="bi bi-play-circle"></i>
                        </div>
                        <div class="music--btn music--btn__add">
                            <i class="bi bi-plus-circle"></i>
                        </div>
                    </div>
                    <div class="music__item--info">
                        <span class="name--title"><b>{{$new[$i]->name}}</b></span>
                        <span class="name--title"><a href="{{route('artists-detail', $new[$i]->artists->id)}}">{{$new[$i]->artists->name}}</a></span>
                    </div>
                </div>
            </div>
            @endfor

            
        </section>
        <!-- End Releases -->

        <!-- Aritist -->
        <section id="artists" class="row row--grid">
            <!-- title -->
            <div class="col-12">
                <div class="artists__title">
                    <h2>Nghệ Sĩ Nổi Bật</h2>
                </div>
            </div>
            <!-- end title -->

            @for ($i = 0; $i < 12; $i++)
            <div class="col-xl-2 col-lg-3 col-sm-4 col-4">
                <div class="artists__item">
                    <div class="artists__item--img">
                        <a href="{{route('artists-detail', $artists[$i]->id)}}"><img src="{{$artists[$i]->image}}" alt=""></a>
                    </div>
                    <div class="artists__item--info">
                        <h4><a href="{{route('artists-detail', $artists[$i]->id)}}"><b>{{$artists[$i]->name}}</b></a></h4>
                    </div>
                </div>
            </div>
            @endfor
        </section>
        <!-- End Artist -->

        <!-- Top 5 -->
        <section id="top" class="row row--grid">
            <div class="col-xl-4 col-lg-6 col-sm-12 col-12">
                <div class="row row--grid">
                    <!-- title -->
                    <div class="col-12">
                        <div class="top__title">
                            <h2>Thịnh hành</h2>
                        </div>
                    </div>
                    <!-- end title -->
                    @for ($i = 0; $i < 5; $i++)
                    <div class="col-12">
                        <div class="top__item">
                            <span>{{$i + 1}}</span>
                            <div class="top__item--info">
                                <div class="top__item--img" data-index="{{$new[$i]->id}}">
                                    <img src="{{$new[$i]->image}}" alt="">
                                    <div class="top--btn removeElement">
                                        <i class="bi bi-play-circle"></i>
                                    </div>
                                </div>
                                <div class="top__track--info">
                                    <span class="name--title"><b>{{$new[$i]->name}}</b></span>
                                    <span class="name--title"><a href="#">{{$new[$i]->artists->name}}</a></span>
                                </div>
                            </div>
                            <span><i class="bi bi-heart"></i></span>
                        </div>
                    </div>
                    @endfor
                </div>
            </div>

            <div class="col-xl-4 col-lg-6 col-sm-12 col-12">
                <div class="row row--grid">
                    <!-- title -->
                    <div class="col-12">
                        <div class="top__title">
                            <h2>Yêu Thích</h2>
                        </div>
                    </div>
                    <!-- end title -->
                    @for ($i = 0; $i < 5; $i++)
                    <div class="col-12">
                        <div class="top__item">
                            <span>{{$i + 1}}</span>
                            <div class="top__item--info">
                                <div class="top__item--img" data-index="{{$topLike[$i]->id}}">
                                    <img src="{{$topLike[$i]->image}}" alt="">
                                    <div class="top--btn removeElement">
                                        <i class="bi bi-play-circle"></i>
                                    </div>
                                </div>
                                <div class="top__track--info">
                                    <span class="name--title"><b>{{$topLike[$i]->name}}</b></span>
                                    <span class="name--title"><a href="#">{{$topLike[$i]->artists->name}}</a></span>
                                </div>
                            </div>
                            <span><i class="bi bi-heart"></i></span>
                        </div>
                    </div>
                    @endfor
                </div>
            </div>

            <div class="col-xl-4 col-lg-6 col-sm-12 col-12">
                <div class="row row--grid">
                    <!-- title -->
                    <div class="col-12">
                        <div class="top__title">
                            <h2>Ngẫu Nhiên</h2>
                        </div>
                    </div>
                    <!-- end title -->
                    @for ($i = 0; $i < 5; $i++)
                    <div class="col-12">
                        <div class="top__item">
                            <span>{{$i + 1}}</span>
                            <div class="top__item--info">
                                <div class="top__item--img" data-index="{{$topRandom[$i]->id}}">
                                    <img src="{{$topRandom[$i]->image}}" alt="">
                                    <div class="top--btn removeElement">
                                        <i class="bi bi-play-circle"></i>
                                    </div>
                                </div>
                                <div class="top__track--info">
                                    <span class="name--title"><b>{{$topRandom[$i]->name}}</b></span>
                                    <span class="name--title"><a href="#">{{$topRandom[$i]->artists->name}}</a></span>
                                </div>
                            </div>
                            <span><i class="bi bi-heart"></i></span>
                        </div>
                    </div>
                    @endfor
                </div>
            </div>
        </section>
        <!-- End Top 5 -->

        <!-- Releases -->
        <section id="music" class="row row--grid">
            <!-- title -->
            <div class="col-12">
                <div class="music__title">
                    <h2>Tình Yêu Đôi Lứa</h2>
                </div>
            </div>
            <!-- end title -->
            @foreach($themeLove as $love)
            <div class="col-xl-2 col-lg-3 col-sm-4 col-6">
                <div class="music__item" data-index="{{$love->tracks->id}}">
                    <div class="music__item--img">
                        <img src="{{$love->tracks->image}}" alt="">
                    </div>
                    <div class="music__item--btn removeElement">
                        <a href="{{$love->tracks->link}}" class="music--btn music--btn__download">
                            <i class="bi bi-download"></i>
                        </a>
                        <div class="music--btn music--btn__play">
                            <i class="bi bi-play-circle"></i>
                        </div>
                        <div class="music--btn music--btn__add">
                            <i class="bi bi-plus-circle"></i>
                        </div>
                    </div>
                    <div class="music__item--info">
                        <span class="name--title"><b>{{$love->tracks->name}}</b></span>
                        <span class="name--title"><a href="{{route('artists-detail', $love->tracks->artists->id)}}">{{$love->tracks->artists->name}}</a></span>
                    </div>
                </div>
            </div>
            @endforeach

            
        </section>
        <!-- End Releases -->

        <!-- Releases -->
        <section id="music" class="row row--grid">
            <!-- title -->
            <div class="col-12">
                <div class="music__title">
                    <h2>Tuổi Học Trò</h2>
                </div>
            </div>
            <!-- end title -->
            @foreach($themeSchool as $school)
            <div class="col-xl-2 col-lg-3 col-sm-4 col-6">
                <div class="music__item" data-index="{{$school->tracks->id}}">
                    <div class="music__item--img">
                        <img src="{{$school->tracks->image}}" alt="">
                    </div>
                    <div class="music__item--btn removeElement">
                        <a href="{{$school->tracks->link}}" class="music--btn music--btn__download">
                            <i class="bi bi-download"></i>
                        </a>
                        <div class="music--btn music--btn__play">
                            <i class="bi bi-play-circle"></i>
                        </div>
                        <div class="music--btn music--btn__add">
                            <i class="bi bi-plus-circle"></i>
                        </div>
                    </div>
                    <div class="music__item--info">
                        <span class="name--title"><b>{{$school->tracks->name}}</b></span>
                        <span class="name--title"><a href="{{route('artists-detail', $school->tracks->artists->id)}}">{{$school->tracks->artists->name}}</a></span>
                    </div>
                </div>
            </div>
            @endforeach

            
        </section>
        <!-- End Releases -->

        <!-- Event -->
        <section id="events" class="row row--grid">
            <!-- title -->
            <div class="col-12">
                <div class="events__title">
                    <h2>Sự Kiện Nổi Bật</h2>
                </div>
            </div>
            <!-- end title -->

            <div class="col-xl-4 col-lg-6 col-sm-6 col-12">
                <a href="google.com" class="events__item">
                    <div class="events__item--img">
                        <img src="./assets/img/events/event1.jpg" alt="">
                    </div>
                    <div class="events__item--info">
                        <h5>8 Tháng 1 năm 2022</h5>
                        <span>7:00 pm</span>
                        <h4>In The Moonlight</h4>
                        <p>Số 8 Nguyễn Bỉnh Khiêm, Quận 1, Thành Phố Hồ Chí Minh</p>
                    </div>
                </a>
            </div>

            <div class="col-xl-4 col-lg-6 col-sm-6 col-12">
                <a href="google.com" class="events__item">
                    <div class="events__item--img">
                        <img src="./assets/img/events/event2.jpg" alt="">
                    </div>
                    <div class="events__item--info">
                        <h5>12 Tháng 1 năm 2022</h5>
                        <span>8:30 pm</span>
                        <h4>Đêm Nhạc Thà Rằng Như Thế</h4>
                        <p>Số 137 Nguyễn Đình Chiểu, P6, Q3, TPHCM</p>
                    </div>
                </a>
            </div>

            <div class="col-xl-4 col-lg-6 col-sm-6 col-12">
                <a href="google.com" class="events__item">
                    <div class="events__item--img">
                        <img src="./assets/img/events/event3.jpg" alt="">
                    </div>
                    <div class="events__item--info">
                        <h5>15 Tháng 1 năm 2022</h5>
                        <span>8:30 pm</span>
                        <h4>Đêm Nhạc Nỗi Yêu Bé Dại</h4>
                        <p>Đường Huyền Trân Công Chúa, P. Bến Thành, Quận 1, TP. Hồ Chí Minh.h</p>
                    </div>
                </a>
            </div>

            
        </section>
        <!-- End Event -->

        <!-- Releases -->
        <section id="music" class="row row--grid">
            <!-- title -->
            <div class="col-12">
                <div class="music__title">
                    <h2>V-POP</h2>
                </div>
            </div>
            <!-- end title -->
            @for ($i = 0; $i < 6; $i++)
            <div class="col-xl-2 col-lg-3 col-sm-4 col-6">
                <div class="music__item" data-index="{{$genrevpop[$i]->id}}">
                    <div class="music__item--img">
                        <img src="{{$genrevpop[$i]->image}}" alt="">
                    </div>
                    <div class="music__item--btn removeElement">
                        <a href="{{$genrevpop[$i]->link}}" class="music--btn music--btn__download">
                            <i class="bi bi-download"></i>
                        </a>
                        <div class="music--btn music--btn__play">
                            <i class="bi bi-play-circle"></i>
                        </div>
                        <div class="music--btn music--btn__add">
                            <i class="bi bi-plus-circle"></i>
                        </div>
                    </div>
                    <div class="music__item--info">
                        <span class="name--title"><b>{{$genrevpop[$i]->name}}</b></span>
                        <span class="name--title"><a href="{{route('artists-detail', $genrevpop[$i]->artists->id)}}">{{$genrevpop[$i]->artists->name}}</a></span>
                    </div>
                </div>
            </div>
            @endfor

            
        </section>
        <!-- End Releases -->

        <!-- Releases -->
        <section id="music" class="row row--grid">
            <!-- title -->
            <div class="col-12">
                <div class="music__title">
                    <h2>NHẠC TÌNH</h2>
                </div>
            </div>
            <!-- end title -->
            @foreach($genreRomance as $romance)
            <div class="col-xl-2 col-lg-3 col-sm-4 col-6">
                <div class="music__item" data-index="{{$romance->id}}">
                    <div class="music__item--img">
                        <img src="{{$romance->image}}" alt="">
                    </div>
                    <div class="music__item--btn removeElement">
                        <a href="{{$romance->link}}" class="music--btn music--btn__download">
                            <i class="bi bi-download"></i>
                        </a>
                        <div class="music--btn music--btn__play">
                            <i class="bi bi-play-circle"></i>
                        </div>
                        <div class="music--btn music--btn__add">
                            <i class="bi bi-plus-circle"></i>
                        </div>
                    </div>
                    <div class="music__item--info">
                        <span class="name--title"><b>{{$romance->name}}</b></span>
                        <span class="name--title"><a href="{{route('artists-detail', $romance->artists->id)}}">{{$romance->artists->name}}</a></span>
                    </div>
                </div>
            </div>
            @endforeach

            
        </section>
        <!-- End Releases -->
        
        <!-- News -->
        <section id="news" class="row row--grid">
            <!-- title -->
            <div class="col-12">
                <div class="news__title">
                    <h2>Tin nổi bật</h2>
                </div>
            </div>
            <!-- end title -->

            <div class="col-xl-4 col-lg-6 col-sm-6 col-12">
                <div class="news__item">
                    <div class="news__item--img">
                        <a href="{{route('news1')}}">
                            <img src="./assets/img/news/news1.jpg" alt="">
                        </a>
                    </div>

                    <a href="{{route('news1')}}" class="news__item--info">
                        <h5>Hoài Linh trở lại rực rỡ, Đàm Vĩnh Hưng, Hồng Vân giờ ra sao ?</h5>
                    </a>
                </div>
            </div>

            <div class="col-xl-4 col-lg-6 col-sm-6 col-12">
                <div class="news__item">
                    <div class="news__item--img">
                        <a href="{{route('news2')}}"><img src="./assets/img/news/news2.jpg" alt=""></a>
                    </div>

                    <a href="{{route('news2')}}" class="news__item--info">
                        <h5>Nam ca sĩ Việt được ra mắt ở Hàn Quốc</h5>
                    </a>
                </div>
            </div>

            <div class="col-xl-4 col-lg-6 col-sm-6 col-12">
                <div class="news__item">
                    <div class="news__item--img">
                        <a href="{{route('news3')}}">
                            <img src="./assets/img/news/news3.jpg" alt="">
                        </a>
                    </div>

                    <a href="{{route('news3')}}" class="news__item--info">
                        <h5>Hoàng Thùy Linh sau 2 năm yên ắng</h5>
                    </a>
                </div>
            </div>

        </section>
        <!-- End News -->
    </div>
</main>
@endsection

<script src="{{route('alltracks')}}"></script>