$(document).ready(function () {
    const myWindow = $(window);
    const hearderSearch = $(".header__search input");
    const btnFeatureOpen = $(".feature--open__button");
    const playerMoblie = $(".player--mobile");
    const slider = $("#slider > div");
    const btnPlayList = $(".feature--playlist");
    const playlist = $("#playlist");
    const btnMusicItem = $(".music__item");
    const btnTopItem = $(".top__item");
    // console.log(btnMusicInfo);

    myWindow.on("load", function () {
        if (Number(myWindow.width()) < 576) {
            hearderSearch.attr("placeholder", "Tìm kiếm")
        }
        else {
            hearderSearch.attr("placeholder", "Nhập tên bài hát, nghệ sĩ hoặc chủ đề ...")
        } 

        if (Number(myWindow.width()) < 992) {
            slider.removeClass("col-10");
            slider.addClass("col-12");
        }
        else {
            slider.removeClass("col-12");
            slider.addClass("col-10");
        } 
    });

    myWindow.resize(function () {
        playerMoblie.css("transform", "translate(0, 0)");
        playlist.css("transform", "");
        if (Number(myWindow.width()) < 576) {
            hearderSearch.attr("placeholder", "Tìm kiếm ...")
        }
        else {
            hearderSearch.attr("placeholder", "Nhập tên bài hát, nghệ sĩ hoặc chủ đề ...")
        } 

        if (Number(myWindow.width()) < 992) {
            slider.removeClass("col-10");
            slider.addClass("col-12");
        }
        else {
            slider.removeClass("col-12");
            slider.addClass("col-10");
        } 
    });

    btnFeatureOpen.click(function () {
        playlist.css("transform", "");
        if (playerMoblie.css("transform") == "matrix(1, 0, 0, 1, 0, 0)" || playerMoblie.css("transform") == "none") {
            playerMoblie.css("transform", "translate(0, -196px)");
            playerMoblie.css("transition", "transform 0.5s");
            // playerMoblie.css("z-index", "20");
        }
        else {
            playerMoblie.css("transform", "translate(0, 0)");
        }
    });

    btnPlayList.click(function () {
        if (playlist.css("transform") == "none") {
            // console.log("hello");
            if (Number(myWindow.width()) >= 922) {
                playlist.css("transform", "translate(-100%, 0)");
            }
            else {
                playlist.css("transform", "translate(-100%, 0)");
            }
        }
        else {
            if ($(window).width() >= 922) {
                playlist.css("transform", "");
            }
            else {
                playlist.css("transform", "");
            }
        }
        
    });

    btnMusicItem.hover(function (e) {
        const itemTarget = e.target.closest(".music__item");
        itemTarget.childNodes[1].classList.toggle("css-low-brightness");
        itemTarget.childNodes[3].classList.toggle("removeElement");
        itemTarget.childNodes[3].classList.toggle("flexElement");
    });

    btnTopItem.hover(function (e) {
        const itemTarget = e.target.closest(".top__item");
        itemTarget.childNodes[3].childNodes[1].childNodes[1].classList.toggle("css-low-brightness");
        itemTarget.childNodes[3].childNodes[1].childNodes[3].classList.toggle("removeElement");
        itemTarget.childNodes[3].childNodes[1].childNodes[3].classList.toggle("flexElement");
    });
   
});