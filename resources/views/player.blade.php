<!-- Player -->
<div id="player">
    <div class="row row--grid">
        <div class="player__info--space col-xl-3 col-lg-3 col-md-3 col-2">
            <div class="player__info">
                <div class="player__info--track">
                    <img class="cd--thumb" src="./assets/img/music/cover.svg" alt="">
                    <div class="player__track">
                        <span  class="player__title"><b>Ái Nộ</b></span>	
                        <span class="player__artists">Masew, Khôi Vũ</span>
                    </div>
                </div>
                <i class="bi bi-heart"></i>
            </div>
        </div>

        <!-- Player control -->
        <div class="col-xl-6 col-lg-5 col-md-5 col-sm-9 col-10">
            <div class="player__control">
                <div class="player__control--button">
                    <div class="control--button button--random">
                        <i class="bi bi-shuffle" style="font-size: 20px;"></i>
                    </div>
                    <div class="control--button button--prev">
                        <i class="bi bi-skip-start" style="font-size: 32px;"></i>
                    </div>
                    <div class="control--button button--toggle">
                        <i class="button--play bi bi-play-circle" style="font-size: 40px;"></i>
                        <i class="button--pause bi bi-pause-circle" style="font-size: 40px;"></i>
                    </div>
                    <div class="control--button button--next">
                        <i class="bi bi-skip-end" style="font-size: 32px;"></i>
                    </div>
                    <div class="control--button button--repeat">
                        <i class="bi bi-arrow-repeat" style="font-size: 24px;"></i>
                    </div>
                </div>
    
                <div class="player__control--range">
                    <span class="control--range-time time--left">00:00</span>
                    <input id="range--progress" type="range" value="0" step="1" min="0" max="200">
                    <span class="control--range-time time--right">00:00</span>
                </div>
                <audio id="audio" src="" preload="metadata"></audio>
            </div>
        </div>
        <!-- End Player control -->

        <div class="player__feature--space col-xl-3 col-lg-4 col-md-4 col-4">
            <div class="player__feature">
                <a class="feature--download control--button">
                    <i class="bi bi-download"></i>
                </a>
                <div class="control--button">
                    <i class="bi bi-share"></i>
                </div>
                <div class="feature--sound">
                    <i class="sound--on bi bi-volume-up"></i>
                    <i class="sound--off removeElement bi bi-volume-mute"></i>
                    <input class="sound--progress" type="range" value="0" step="1" min="0" max="100">
                </div>
                <div class="feature--playlist">
                    <i class="bi bi-music-note-list"></i>
                </div>
            </div>
        </div>

        <div class="player__open--button col-sm-1 col-2">
            <div class="player__feature--open">
                <div class="feature--open__button">
                    <i class="bi bi-three-dots"></i>
                </div>
            </div>
        </div>

        <div class="player--mobile col-12">
            <div class="row">
                <div class="col-12">
                    <div class="player__info">
                        <div class="player__info--track">
                            <img class="cd--thumb" src="./assets/img/music/cover.svg" alt="">
                            <div class="player__track--mobile">
                                <span  class="player__title"><b>Ái Nộ</b></span>	
                                <span class="player__artists">Masew, Khôi Vũ</span>
                            </div>
                        </div>
                        <i class="bi bi-heart"></i>
                    </div>
                </div>

                <div class="col-12">
                    <div class="player__feature">
                        <a class="feature--download control--button">
                            <i class="bi bi-download"></i>
                        </a>
                        <div class="control--button">
                            <i class="bi bi-share"></i>
                        </div>
                        <div class="feature--sound">
                            <i class="sound--on bi bi-volume-up"></i>
                            <i class="sound--off removeElement bi bi-volume-mute"></i>
                            <input class="sound--progress" type="range" value="0" step="1" min="0" max="100">
                        </div>
                        <div class="feature--playlist">
                            <i class="bi bi-music-note-list"></i>
                        </div>
                    </div>
                </div>
    
            </div>
        </div>
    </div>

</div>
<!-- End Player -->

<!-- Playlist -->
<div id="playlist">
    <div class="playlist__title">
        <h4>Danh sách phát</h4>
    </div>
    <div class="playlist__playing">
        <p class="playlist__section--title">Đang phát</p class="playlist__section--title">
        <div class="playlist__playing--item">
            <div class="playlist__item playlist__item--active">
                <div class="playlist__item--info">
                    <img src="./assets/img/music/AiNo.jpg" alt="">
                    <div class="play__track--info"> 
                        <span><b class="item--name">Ái Nộ</b></span>	
                        <span class="item--artists">Masew, Khôi Vũ</span>
                    </div>
                </div>
                <i class="bi bi-heart"></i>
            </div>
        </div>
    </div>
    <div class="playlist__next">
        <div class="next--info">
            <div class="playlist--info">
                <i class="bi bi-disc"></i>
                <span><b>Playlist: </b></span><a href="">Ngẫu nhiên</a>
            </div>
        </div>
        <div class="next--list">
            <!-- <div class="playlist__item">
                <div class="playlist__item--info">
                    <img src="./assets/img/music/AiNo.jpg" alt="">
                    <div class="play__track--info">
                        <span><b class="item--name">Ái Nộ</b></span>	
                        <span class="item--artists">Masew, Khôi Vũ</span>
                    </div>
                </div>
                <i class="bi bi-heart"></i>
            </div>
            <div class="playlist__item">
                <div class="playlist__item--info">
                    <img src="./assets/img/music/AiNo.jpg" alt="">
                    <div class="play__track--info">
                        <span><b class="item--name">Ái Nộ</b></span>	
                        <span class="item--artists">Masew, Khôi Vũ</span>
                    </div>
                </div>
                <i class="bi bi-heart"></i>
            </div> -->
        </div>
    </div>
</div>
<!-- End Playlist -->