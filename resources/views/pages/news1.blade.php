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
            <h1>Hoài Linh trở lại rực rỡ, Đàm Vĩnh Hưng, Hồng Vân giờ ra sao sau khi vướng ồn ào với nữ CEO Bình Dương?</h1>
            <p><b>&emsp;&emsp;Sau nhiều lùm xùm với CEO Đại Nam, các sao Việt hiện tại đã trở lại tích cực với nghệ thuật.</b></p>
            <img src="./assets/img/news/news1.jpg" alt="">
            <p>&emsp;&emsp;Năm 2021, showbiz Việt trở thành chủ đề nóng trên mạng xã hội khi CEO Nguyễn Phương Hằng (giám đốc công ty Đại Nam) 
                lên sóng livestream tố các nghệ sĩ có dấu hiệu khuất tất trong hoạt động từ thiện tại miền Trung vào cuối năm 2020. Trước các 
                thông tin mà nữ đại gia Bình Dương đưa ra, đa số khán giả đều yêu cầu các nghệ sĩ như Hoài Linh, Trấn Thành, Thủy Tiên, Đàm Vĩnh 
                Hưng… công khai rõ sao kê các khoản thu - chi để các mạnh thường quân tiện theo dõi. Bên cạnh đó, nhiều sao Việt cũng bị vướng vào 
                ồn ào với nữ doanh nhân Bình Dương.</p>
            <p>&emsp;&emsp;Sau ồn ào giải ngân chậm 14 tỷ đồng tiền từ thiện cứu trợ miền Trung và liên tục bị doanh nhân Nguyễn Phương Hằng nhắc tên 
                trong các video livestream, Hoài Linh dường như vắng bóng khỏi các hoạt động giải trí. Anh cũng không đăng tải bất cứ thông tin nào lên 
                các trang mạng xã hội trong nhiều tháng qua. Mới đây, thông tin nam danh hài trở lại nghệ thuật khi nhận lời tham gia vở kịch “Lạc giữa biển
                người” đã thu hút sự quan tâm của đông đảo khán giả. Nhiều đồng nghiệp, người hâm mộ bày tỏ sự háo hức, mong chờ những dự án mới 
                tiếp theo của Hoài Linh.</p>
            <p>&emsp;&emsp;Trước đó, ngày 22.12, cơ quan CSĐT Công an TP.HCM đã có kết luận chính thức vụ Hoài Linh bị tố lừa đảo. Căn cứ vào kết 
                quả điều tra, xác minh, xác định nội dung các tố giác không có sự việc phạm tội. Do vậy, Cơ quan CSĐT Công an TP.HCM đã ra quyết định 
                không khởi tố vụ án hình sự số 1156-01, ngày 23/11/2021. Ngày 30/11/2021, Viện Kiểm sát nhân dân TP.HCM có kết luận số 406/KLKS-VKS-P2 
                xác định: “Quyết định không khởi tố vụ án hình sự của Cơ quan CSĐT Công an TP.HCM là có căn cứ, đúng pháp luật”, Thông báo của Cơ quan 
                CSĐT Công an TP.HCM khẳng định.</p>
            <img src="./assets/img/news/news12.jpg" alt="">
            <p>&emsp;&emsp;Cũng như Vy Oanh, Đàm Vĩnh Hưng là một trong số ít nghệ sĩ đứng lên phản bác nữ doanh nhân Bình Dương khi bị nữ đại gia 
                này tố gian lận tiền từ thiện. Thậm chí “ông hoàng nhạc Việt” còn làm đơn tố cáo CEO Đại Nam về việc nhiều lần vu khống, xúc phạm 
                nhân phẩm anh trên sóng livestream. Giọng ca “Biển tình” nhiệt tình phối hợp trong việc điều tra cũng như bày tỏ sự tin tưởng 
                trước sự minh bạch, khách quan của cơ quan chắc năng: “Khi cơ quan điều tra đã vào cuộc thì chắc chắn câu chuyện này sẽ nhanh chóng 
                được làm rõ, ai sai, vu khống, bịa đặt những thông tin về Hưng thì phải chịu trách nhiệm về việc làm của mình bằng pháp luật, và nếu 
                bản thân Hưng sai Hưng cũng sẽ phải chịu trách nhiệm trước pháp luật”.</p>
            <p>&emsp;&emsp;Thời gian này, Đàm Vĩnh Hưng đang lưu diễn ở hải ngoại. Anh thường chia sẻ các video trên trang cá 
                nhân, hé lộ cuộc sống vui vẻ bên bạn bè, đồng nghiệp và được khán giả yêu thương, ủng hộ khi xuất hiện trên các sân khấu hoành 
                tráng ở xứ cờ hoa.</p>
            <img src="./assets/img/news/news13.jpg" alt="">
            <p>&emsp;&emsp;Trong các livestream, Giám đốc khu du lịch Đại Nam đã có động thái nhắc đến NSND Hồng Vân với những lời lẽ khó 
                nghe và nặng nề. Được biết, mâu thuẫn giữa bà Phương Hằng và nghệ sĩ Hồng Vân bắt đầu từ bình luận của nghệ sĩ này dưới một bài 
                đăng có ý mỉa mai nữ doanh nhân Bình Dương. Từ đó, bà xã diễn viên Lê Tuấn Anh vướng phải nhiều lùm xùm về đoạn băng ghi âm chửi 
                khán giả, mối quan hệ thân thiết với “thần y” Võ Hoàng Yên, sự liên quan đến quỹ từ thiện của nghệ sĩ Hoài Linh... Ở thời điểm đó, 
                NSND Hồng Vân đã có cách ứng xử khá văn minh. Cô đăng dòng trạng thái giải đáp từng thắc mắc với khán giả về lời tố của nữ doanh nhân, 
                đồng thời phản bác những thông tin sai sự thật về mình trên báo chí. Kể từ sau đó, bà bầu sân khấu kịch Phú Nhuận cũng không đả động 
                đến vấn đề này nữa.</p>
            <p>&emsp;&emsp;Mới đây, kỷ niệm 23 năm kết hôn, NSND Hồng Vân đã đăng tải những hình ảnh hạnh phúc bên ông xã từ trẻ cho tới hiện tại, 
                cùng lời nhắn nhủ ngọt ngào. “Chúng mình luôn sát cánh bên nhau trong mọi hoàn cảnh đã 23 năm rồi ông xã nhỉ... Cảm ơn ông xã luôn 
                là người bảo vệ, che chở và mang lại hạnh phúc cho bốn mẹ con em. Luôn bên nhau chồng nhé”, nữ nghệ sĩ viết. Hiện tại, NSND Hồng Vân 
                cùng tài tử Lê Tuấn Anh đã sang tận xứ cờ hoa để thăm con gái Xí Ngầu và đỡ đần khi cháu ngoại đầu tiên chào đời.</p>
    
            <span>Theo Nguyễn Hữu Huyến</span>
        </div>
    </div>
</main>

@endsection
