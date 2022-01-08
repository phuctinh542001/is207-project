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
            <li class="sidebar__nav-item">
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

            <li class="sidebar__nav-item sidebar__nav-item--active">
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
        <h1>Tin Tức Showbiz Việt Nam</h1>
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