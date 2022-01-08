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
        <div class="" id="page__news">
            <h1 style="color: white">Nam ca sĩ Việt được ra mắt ở Hàn Quốc</h1>
            <p><b>&emsp;&emsp;Hanbin nổi tiếng khi tham gia chương trình sống còn I-LAND. Sau đó, anh rời BELIF Entertainment và gia nhập 
            Yuehua Entertainment.</b></p>
            <p>&emsp;&emsp;Ngày 3/1, công ty giải trí Yuehua Entertainment công bố Hanbin (tên thật Ngô Ngọc Hưng) chính thức ra mắt trong nhóm nhạc nam mới mang
            tên TEMPEST. Yuehua Entertainment cho biết TEMPEST sẽ ra mắt vào đầu năm nhưng chưa công bố thời gian cụ thể. Theo công ty quản lý, 
            cái tên TEMPEST thể hiện tham vọng làm mưa làm gió trong ngành công nghiệp âm nhạc với năng lượng 
            tươi sáng và màn trình diễn mạnh mẽ. TEMPEST là nhóm nhạc nam đầu tiên Yuehua Entertainment giới thiệu sau 3 năm hoạt động.</p>
            <img src="./assets/img/news/news2.jpg" alt="">
            <p>&emsp;&emsp;Hanbin sinh năm 1998, là sinh viên chuyên ngành Marketing của Đại Học Thương mại Hà Nội. 
            Anh tham gia nhóm nhảy cover nổi tiếng C.A.C và đảm nhận vai trò trưởng nhóm. Nam thần tượng từng giành chức quán quân Kpop 
            Random Dance Competition mùa 1. Năm 2019, anh sang Hàn Quốc đào tạo.</p>
            <p>&emsp;&emsp;Anh là thực tập sinh người Việt đầu tiên được giới thiệu bởi BELIF Entertainment - công ty hợp tác giữa Big Hit Entertainment 
            (công ty quản lý của BTS) và CJ ENM. Nam ca sĩ nổi tiếng khi tham gia chương trình sống còn I-LAND và nổi tiếng với kỹ năng vũ đạo. 
            Sau khi bị loại khỏi chương trình, Hanbin có lượng fan nhất định tại Hàn Quốc. Anh rời công ty Big Hit Entertainment 
            và gia nhập Yuehua Entertainment.</p>
            <p>&emsp;&emsp;Trước Hanbin, một số ca sĩ Việt ra mắt tại Hàn Quốc. Tuy nhiên, Hanbin là ca sĩ đầu tiên của Việt Nam được đào tạo, 
            hoạt động trong công ty giải trí lớn như BELIF Entertainment và Yuehua Entertainment.</p>
    
            <span>Theo Nguyễn Hữu Huyến</span>
        </div>
    </div>
</main>
@endsection
