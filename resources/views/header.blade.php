<header id="header">
    <form action="#" class="header__search">
        <input type="text" placeholder="Nhập tên bài hát, nghệ sĩ hoặc chủ đề ...">
        <button><i class="bi bi-search"></i></button>
    </form>

    <div class="header__actions">
        @if(Auth::check())
        <div class="header__action--signin">
            <a class="header__action-btn" href="#">
                <span>Xin chào {{Auth::user()->name}} <i class="bi bi-emoji-smile"></i></span>
            </a>
        </div>

        <div class="header__action--signin">
            <a class="header__action-btn" href="{{route('sign-out')}}">
                <span>Đăng Xuất</span>
            </a>
        </div>
        @else
        <div class="header__action--signin">
            <a class="header__action-btn" href="{{route('sign-up')}}">
                <span>Đăng ký</span>
            </a>
        </div>

        <div class="header__action--signin">
            <a class="header__action-btn" href="{{route('sign-in')}}">
                <span>Đăng nhập</span>
            </a>
        </div>
        @endif
    </div>
</header>