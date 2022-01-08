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
        <div id="page__artdetail">
            <div class="page__artdetail--bg">
                <img src="./assets/img/artists/artistsbg.jpg" alt="">
            </div>
            <div class="page__artdetail--img">
                <div class="page__artdetail--item">
                    <img src="{{$artists[0]->image}}" alt="">
                    <div class="page__artdetail--info">
                        <h2>{{$artists[0]->name}}</h2>
                        <p><span>{{$artists[0]->like}}</span>&emsp;<i class="bi bi-heart"></i></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Releases -->
        <section id="music" class="row row--grid">
            @foreach($artistsTracks as $arttracks)
            <div class="col-xl-2 col-lg-3 col-sm-4 col-6">
                <div class="music__item" data-index="{{$arttracks->id}}">
                    <div class="music__item--img">
                        <img src="{{$arttracks->image}}" alt="">
                    </div>
                    <div class="music__item--btn removeElement">
                        <a href="{{$arttracks->link}}" class="music--btn music--btn__download">
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
                        <span class="name--title"><b>{{$arttracks->name}}</b></span>
                        <span class="name--title"><a href="artist.html">{{$arttracks->artists->name}}</a></span>
                    </div>
                </div>
            </div>
            @endforeach

            
        </section>
        <!-- End Releases -->
    </div>
</main>
@endsection

<script src="{{route('alltracks')}}"></script>