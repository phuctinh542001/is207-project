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

            <li class="sidebar__nav-item sidebar__nav-item--active">
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
        <h1>Sự Kiện Âm Nhạc Hot Sắp Diễn Ra</h1>
        <div id="page__event">
            <h2><i class="bi bi-slack"></i>  <b>IN THE MOONLIGHT</b></h2>
            <div class="page__event--img">
                <img src="./assets/img/events/event12.jpg" alt="">
            </div>
            <div class="page__event--info">
                <p><b>TẤT CẢ SẼ THAY EM - PHẠM QUỲNH ANH & HOÀNG PHƯƠNG</b></p>
                <p>&emsp;&emsp;Ánh trăng được xem là hình ảnh biểu trưng cho sự tri cảm về vẻ đẹp hiện sinh trong lòng vạn vật, là nguồn cảm hứng vô tận 
                    đối với tâm hồn nghệ sĩ để hướng đến sự sinh động trong thế giới nghệ thuật. Hãy chậm lại giữa thế gian vội vã để đến 
                    với In The Moonlight, lắng đọng, thưởng thức và cảm nhận ánh trăng dành riêng cho tâm hồn và tình yêu nghệ thuật nhé bạn!</p>
                <p>&emsp;&emsp;Diễn ra tại khu vườn giữa tầng rooftop của GEM Center, các đêm nhạc của IN THE MOONLIGHT đã sẵn sàng với nhiều lựa chọn 
                    cho bạn đặt chỗ.</p>
                <p><b>LỊCH TRÌNH:</b></p>
                <p>&emsp;&emsp;<i class="bi bi-calendar3-event"></i>&emsp;Ngày 8 tháng 1 năm 2022</p>
                <p>&emsp;&emsp;19:00 - 20:45: Dùng tiệc Festive Canape Buffet tại sảnh tiệc Sol</p>
                <p>&emsp;&emsp;21:00 - 22:30: Thưởng thức đêm nhạc tại Saltus với phần trình diễn của các ca sỹ khách mời.</p>
                <p><b>ĐỊA ĐIỂM:</b></p>
                <p>&emsp;&emsp;Số 8 Nguyễn Bỉnh Khiêm, Quận 1, Thành Phố Hồ Chí Minh</p>
            </div>
        </div>
        <div id="page__event">
            <h2><i class="bi bi-slack"></i>  <b>[C-Show] ĐÊM NHẠC THÀ RẰNG NHƯ THẾ</b></h2>
            <div class="page__event--img">
                <img src="./assets/img/events/event22.jpg" alt="">
            </div>
            <div class="page__event--info">
                <p><b>ĐÊM NHẠC THÀ RẰNG NHƯ THẾ CỦA ƯNG HOÀNG PHÚC </b></p>
                <p>&emsp;&emsp;Chàng ca sĩ đa tài điển trai thế hệ 8X lần đầu tiên xuất hiện tại C-Show mọi người nhanh tay book chỗ ủng hộ ạ </p>
                <p>&emsp;&emsp;Diễn ra tại khu vườn giữa tầng rooftop của GEM Center, các đêm nhạc của IN THE MOONLIGHT đã sẵn sàng với nhiều lựa chọn 
                    cho bạn đặt chỗ.</p>
                <p><b>LỊCH TRÌNH:</b></p>
                <p>&emsp;&emsp;<i class="bi bi-calendar3-event"></i>&emsp;Ngày 12 tháng 1 năm 2022</p>
                <p><b>ĐỊA ĐIỂM:</b></p>
                <p>&emsp;&emsp;Số 137 Nguyễn Đình Chiểu, P6, Q3, TPHCM</p>
            </div>
        </div>
        <div id="page__event">
            <h2><i class="bi bi-slack"></i>  <b>IN THE MOONLIGHT</b></h2>
            <h4>&emsp;&emsp;Ngày 8 tháng 1 năm 2022</h4>
            <div class="page__event--img">
                <img src="./assets/img/events/event32.jpg" alt="">
            </div>
            <div class="page__event--info">
                <p><b>ĐÊM NHẠC ĐẶC BIỆT CỦA NHẠC SĨ ĐỨC TRÍ TẠI THE SHOW VIETNAM </b></p>
                <p>&emsp;&emsp;Đức Trí là một nhạc sĩ tài năng và có nhiều thành tựu “khủng” trong sự nghiệp: hơn 30 năm kinh nghiệm trong lĩnh 
                    vực sản xuất âm nhạc, là nhạc sĩ Việt Nam đầu tiên từng tu nghiệp tại trường nhạc Berklee, Hoa Kỳ...</p>
                <p>&emsp;&emsp;Nhạc sĩ Đức Trí cũng phát hành rất nhiều album của mình dưới dạng đĩa than, không hoàn toàn chạy theo nền tảng 
                    nhạc số ở thời đại công nghệ để giữ nguyên không gian của bản thu gốc. Gần đây nhất, nhạc sĩ Đức Trí vừa phát hành album 
                    "Nỗi Đau Bé Dại" bằng đĩa than kết hợp cùng nữ ca sĩ Thuỳ Chi.</p>
                <p>&emsp;&emsp;Bật mí ở đêm nhạc ngày 15/01/2022 sắp tới, Nhạc sĩ Đức Trí sẽ xuất hiện cũng những vị khách mời của mình như : 
                    Lê Hiếu, Thùy Chi, Hoàng Yến Chibi, và khách mời đặc biệt khác. Đêm nhạc đặc biệt của Nhạc sĩ Đức Trí sẽ là một sân chơi âm 
                    nhạc hoàn toàn mới mẻ và đặc biệt, hứa hẹn sẽ không làm quý khán giả thất vọng.</p>
                <p><b>LỊCH TRÌNH:</b></p>
                <p>&emsp;&emsp;<i class="bi bi-calendar3-event"></i>&emsp;Ngày 15 tháng 1 năm 2022</p>
                <p><b>ĐỊA ĐIỂM:</b></p>
                <p>&emsp;&emsp;Dinh Độc Lập, Cổng số 01 đường Huyền Trân Công Chúa, P. Bến Thành, Quận 1, TP. Hồ Chí Minh.</p>
            </div>
        </div>
    </div>
</main>
@endsection

<script src="{{route('alltracks')}}"></script>