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
        <div id="page__signup">
           <h1>Đăng Nhập</h1>
            <form class="page__signup--info" method="post" action="{{route('sign-in')}}">
                <input type="hidden" name="_token" value="{{csrf_token()}}">

                <label class="signup__item">Tên đăng nhập:</label>
                <input class="page__signup--input" type="text" name="username">
            
                <label class="signup__item">Mật khẩu:</label>
                <input class="page__signup--input" type="password" name="password">
                 
                <input class="btn--submit" type="submit" name="signin" value="Đăng nhập">
            </form>
        </div>
        @if(Session::has('success'))
        <div class="page__sign--message">
            <p>{{Session::get('success')}}</p>
        </div>
        @endif
        @if(Session::has('fail'))
        <div class="page__sign--message">
            <p>{{Session::get('fail')}}</p>
        </div>
        @endif

        
    </div>
</main>
@endsection

<script src="{{route('alltracks')}}"></script>