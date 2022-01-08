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
            <h1 style="color: white">Hoàng Thùy Linh sau 2 năm yên ắng</h1>
            <p><b>&emsp;&emsp;Hoàng Thùy Linh tâm sự hai năm qua cô gặp nhiều vấn đề về tinh thần và sức khỏe. Nhưng sau đó, nữ ca sĩ biết cách 
                cân bằng cảm xúc và yêu thương bản thân hơn.</b></p>
            <p>&emsp;&emsp;Tối 1/1, Hoàng Thùy Linh trở lại sau hai năm kể từ album Hoàng phát hành năm 2019. Nữ ca sĩ phát hành MV mới Gieo quẻ 
                và cho biết đây là điểm bắt đầu một chương mới trong sự nghiệp của cô. Gieo quẻ do Khắc Hưng sáng tác. Bài hát cũng nói về tâm 
                trạng của nữ ca sĩ trong hai năm qua.</p>
            <img src="./assets/img/news/news3.jpg" alt="">
            <p>&emsp;&emsp;Hoàng Thùy Linh chia sẻ trong thời gian qua cô stress vì vấn đề dịch bệnh. Nhưng sau đó, cô đọc sách mỗi khi gặp năng 
                lượng tiêu cực và biết cách tận hưởng cuộc sống hơn. Nữ ca sĩ dành thời gian chăm sóc bản thân và nhà cửa. Vượt qua khó khăn về tâm 
                lý và học cách yêu thương bản thân, Hoàng Thùy Linh sẵn sàng để xuất hiện nhiều hơn trong năm 2022.</p>
            <p>&emsp;&emsp;“Hai năm qua, tôi phải dừng lại và trải qua những khó khăn trong công việc lẫn sức khỏe. Nhưng tôi có nhiều thời 
                gian hơn để lắng nghe và quan sát những ngóc ngách trong cuộc sống xung quanh. Tôi ngưỡng mộ những người đã vượt qua được khó khăn 
                của chính họ, lẫn khó khăn chung của cộng đồng để tạo nên năng lượng tích cực. Đó là điều ai cũng cần có trong giai đoạn này”, Hoàng 
                Thùy Linh tâm sự.</p>
            <p>&emsp;&emsp;“Trong cuộc chiến khốn khó nhất của nhân loại, sức mạnh đoàn kết và tập thể luôn là ‘át chủ bài’. Tôi cảm được truyền 
                cảm hứng, học hỏi từ chính con người Việt Nam. Điều đó thôi thúc tôi muốn được tâm sự, chia sẻ với khán giả bằng âm nhạc, như lời 
                động viên, cảm ơn. Đó là lý do Gieo quẻ ra đời”, nữ ca sĩ nói thêm.</p>
            <p>&emsp;&emsp;Hoàng Thùy Linh cho biết cô coi khó khăn hai năm qua như đoạn đường đông đúc xe cộ bỗng dưng bị tắc vì chiếc đèn đỏ. 
                Không chỉ con người hay phương tiện giao thông, mà sự vận hành của xã hội cũng bị ảnh hưởng. Sẽ có cảm giác hụt hẫng, hoang mang 
                khi mọi thứ xáo trộn nhưng theo nữ ca sĩ, một khi đã đối mặt và chấp nhận, ta vượt qua nó rất nhanh.</p>
            <p>&emsp;&emsp;Qua bài hát mới, Hoàng Thùy Linh muốn truyền tải thông điệp tích cực tới khán giả, đặc biệt trong giai đoạn dịch bệnh 
                bùng phát ảnh hưởng tới sức khỏe của mọi người.</p>
            <p>&emsp;&emsp;Khi được hỏi bản thân đang ở đâu trong hành trình làm nghề, Hoàng Thùy Linh cho biết cô luôn thấy mình ở điểm bắt đầu. 
                sDo đó, mỗi lần giới thiệu sản phẩm mới, cô đều lo lắng và áp lực làm sao hoàn thành công việc tốt nhất có thể.</p>
    
            <span>Theo Nguyễn Hữu Huyến</span>
        </div>
    </div>  
</main>

@endsection
