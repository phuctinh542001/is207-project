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
            

            <li class="sidebar__nav-item sidebar__nav-item--active">
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
        <h1>Những Người Làm Nghệ Thuật Việt Nam</h1>
        <!-- Aritist -->
        <section id="artists" class="row row--grid">
            <!-- title -->
            <div class="col-12">
                <div class="artists__title">
                    <h2>Nghệ Sĩ Nổi Bật</h2>
                </div>
            </div>
            <!-- end title -->

            @foreach ($artists as $art)
            <div class="col-xl-2 col-lg-3 col-sm-4 col-4">
                <div class="artists__item">
                    <div class="artists__item--img">
                        <a href="{{route('artists-detail', $art->id)}}"><img src="{{$art->image}}" alt=""></a>
                    </div>
                    <div class="artists__item--info">
                        <h4><a href="{{route('artists-detail', $art->id)}}"><b>{{$art->name}}</b></a></h4>
                    </div>
                </div>
            </div>
            @endforeach
        </section>
        <!-- End Artist -->

        
    </div>
</main>
@endsection

<script src="{{route('alltracks')}}"></script>