// Một số bài hát có thể bị lỗi do liên kết bị hỏng. Vui lòng thay thế liên kết khác để có thể phát
// Some songs may be faulty due to broken links. Please replace another link so that it can be played
$(document).ready(function () {
	const PlAYER_STORAGE_KEY = "F8_PLAYER";

	const player = $("#player");
	// const heading = $("header h2");
	const cd = $(".player__info");
	const cdThumb = $(".cd--thumb");
	const title = $(".player__title");
	const artist = $(".player__artists");
	const playlistPlaying = $(".playlist__playing--item");
	const playlistNext = $(".next--list");
	var playlistItem = $(".playlist__item");
	const audio = $("#audio")[0];
	const playBtn = $(".button--toggle");
	const prevBtn = $(".button--prev");
	const nextBtn = $(".button--next");
	const randomBtn = $(".button--random");
	const repeatBtn = $(".button--repeat");
	const downBtn = $(".feature--download");
	const soundOnBtn = $(".sound--on");
	const soundOffBtn = $(".sound--off");
	const progress = $("#range--progress")[0];
	const progressSound = $(".sound--progress");
	const timeLeft = $(".time--left");
	const timeRight = $(".time--right");
	const topBtnPlay = $(".top--btn");
	const musicBtnPlay = $(".music--btn__play");
	const musicBtnAdd = $(".music--btn__add");
	// console.log(musicBtnPlay);

	const app = {
		currentIndex: 0,
		isPlaying: false,
		isRandom: false,
		isRepeat: false,
		config: {},
		songs: alltracks,
		// setConfig: function (key, value) {
		//   this.config[key] = value;
		//   // (2/2) Uncomment the line below to use localStorage
		//   // localStorage.setItem(PlAYER_STORAGE_KEY, JSON.stringify(this.config));
		// },
		render: function () {
			playlistPlaying.html(`
				<div class="playlist__item playlist__item--active data-index="${this.currentIndex}">
					<div class="playlist__item--info">
						<img src="${this.currentSong.image}" alt="">
						<div class="play__track--info">
							<span><b class="item--name">${this.currentSong.name}</b></span>	
							<span class="item--artists">${this.currentSong.singer}</span>
						</div>
					</div>
					<i class="bi bi-heart"></i>
				</div>
			`);
			playlistNext.html("");
			for (let i = 0; i < this.songs.length; i++) {
				playlistNext.append(`
					<div class="playlist__item" data-index="${i}">
						<div class="playlist__item--info">
							<img src="${this.songs[i].image}" alt="">
							<div class="play__track--info">
								<span><b class="item--name">${this.songs[i].name}</b></span>	
								<span class="item--artists">${this.songs[i].singer}</span>
							</div>
						</div>
						<i class="bi bi-heart"></i>
					</div>
				`);
			}

			playlistItem = $(".playlist__item");
			this.listenPlaylist();

			var link = this.currentSong.path;
			link = link.replace("amp;","")
			downBtn.attr("href", `${link}`);
			progressSound[0].value = 100;
			progressSound[1].value = 100;
			// console.log(playlistItem);
			audio.onloadedmetadata = function () {
				// console.log(audio.duration);
				var timeMin = parseInt(audio.duration / 60);
				var timeSec = parseInt(audio.duration - 60 * timeMin);
				var timeOut = timeMin.toString() + ":";
				if (timeSec > 9)
					timeOut += timeSec.toString();
				else
					timeOut += ("0" + timeSec.toString());
				// console.log(timeOut);
				timeRight.html(timeOut);
			}
		},
		defineProperties: function () {
			Object.defineProperty(this, "currentSong", {
				get: function () {
					return this.songs[this.currentIndex];
				}
			});
		},
		handleEvents: function () {
			const _this = this;
			// const cdWidth = cd.offsetWidth;

			// Xử lý CD quay / dừng
			// Handle CD spins / stops
			// const cdThumbAnimate = cdThumb.animate([{ transform: "rotate(360deg)" }], {
			//   duration: 10000, // 10 seconds
			//   iterations: Infinity
			// });
			// cdThumbAnimate.pause();

			// Xử lý phóng to / thu nhỏ CD
			// Handles CD enlargement / reduction
			// document.onscroll = function () {
			//   const scrollTop = window.scrollY || document.documentElement.scrollTop;
			//   const newCdWidth = cdWidth - scrollTop;

			//   cd.style.width = newCdWidth > 0 ? newCdWidth + "px" : 0;
			//   cd.style.opacity = newCdWidth / cdWidth;
			// };

			// Xử lý khi click play
			// Handle when click play
			playBtn.click(function () {
				
				if (_this.isPlaying) {
					audio.pause();
				} else {
					audio.play();
				}
			});

			// Khi song được play
			// When the song is played
			audio.onplay = function () {
				_this.isPlaying = true;
				player.addClass("playing");
				// cdThumbAnimate.play();
			};

			// Khi song bị pause
			// When the song is pause
			audio.onpause = function () {
				_this.isPlaying = false;
				player.removeClass("playing");
				// cdThumbAnimate.pause();
			};

			// Khi tiến độ bài hát thay đổi
			// When the song progress changes
			audio.ontimeupdate = function () {
				if (audio.duration) {
					const progressPercent = Math.floor(
						(audio.currentTime / audio.duration) * 200
					);
					var timeMin = parseInt(audio.currentTime / 60);
					var timeSec = parseInt(audio.currentTime - 60 * timeMin);
					var timeOut = timeMin.toString() + ":";
					if (timeSec > 9)
						timeOut += timeSec.toString();
					else
						timeOut += ("0" + timeSec.toString());
					timeLeft.html(timeOut);
					progress.value = progressPercent;
				}
			};

			// Xử lý khi tua song
			// Handling when seek
			progress.onmousedown = function (e) {
				audio.pause();
			};

			progress.onchange = function (e) {
				const seekTime = (audio.duration / 200) * e.target.value;
				audio.currentTime = seekTime;
				audio.play();
			};

			// Khi next song
			// When next song
			nextBtn.click(function () {
				if (_this.isRandom) {
					_this.playRandomSong();
				} else {
					_this.nextSong();
				}
				audio.play();
				_this.render();
				// _this.scrollToActiveSong();
			});

			// Khi prev song
			// When prev song
			prevBtn.click(function () {
				if (_this.isRandom) {
					_this.playRandomSong();
				} else {
					_this.prevSong();
				}
				audio.play();
				_this.render();
				// _this.scrollToActiveSong();
			});

			// Xử lý bật / tắt random song
			// Handling on / off random song
			randomBtn.click(function (e) {
				_this.isRandom = !_this.isRandom;
				// _this.setConfig("isRandom", _this.isRandom);
				randomBtn.toggleClass("control--button__active");
				repeatBtn.removeClass("control--button__active");
			});

			// Xử lý lặp lại một song
			// Single-parallel repeat processing
			repeatBtn.click(function (e) {
				_this.isRepeat = !_this.isRepeat;
				// _this.setConfig("isRepeat", _this.isRepeat);
				repeatBtn.toggleClass("control--button__active");
				randomBtn.removeClass("control--button__active");
			});

			// Xử lý next song khi audio ended
			// Handle next song when audio ended
			audio.onended = function () {
				if (_this.isRepeat) {
					audio.play();
				} else {
					nextBtn.click();
				}
			};
			 
			soundOnBtn.click(function () {
				soundOnBtn.toggleClass("removeElement");
				soundOffBtn.toggleClass("removeElement");
				audio.muted = true;
			});
			
			soundOffBtn.click(function () {
				soundOnBtn.toggleClass("removeElement")
				soundOffBtn.toggleClass("removeElement");
				audio.muted = false;
			});
			
			progressSound[0].onchange = function (e) {
				var volume = e.target.value;
				console.log(volume);
				audio.volume  = volume / 100;
			};
			progressSound[1].onchange = function (e) {
				var volume = e.target.value;
				console.log(volume);
				audio.volume  = volume / 100;
			};

			topBtnPlay.click(function (e) {
				// console.log("hello");
				const songNode = e.target.closest(".top__item--img");
				for (let i = 0; i < alltracks.length; i++) {
					if (songNode.dataset.index == alltracks[i].id) {
						_this.songs = [alltracks[i]];
						_this.currentIndex = 0;
						_this.loadCurrentSong();
						_this.render();
						audio.play();
					}
				}
			});
			musicBtnPlay.click(function (e) {
				// console.log("hello");
				const songNode = e.target.closest(".music__item");
				for (let i = 0; i < alltracks.length; i++) {
					if (songNode.dataset.index == alltracks[i].id) {
						_this.songs = [alltracks[i]];
						_this.currentIndex = 0;
						_this.loadCurrentSong();
						_this.render();
						audio.play();
					}
				}
			});
			musicBtnAdd.click(function (e) {
				const songNode = e.target.closest(".music__item");
				for (let i = 0; i < alltracks.length; i++) {
					if (songNode.dataset.index == alltracks[i].id) {
						_this.songs.push(alltracks[i]);
						_this.render();
						audio.play();
					}
				}
			});
		},

		loadCurrentSong: function () {
			// console.log(this.currentSong);
			title.html(`${this.currentSong.name}`);
			artist.html(`${this.currentSong.singer}`);
			cdThumb.attr("src", `${this.currentSong.image}`);
			audio.src = this.currentSong.path;
			
		},
		// loadConfig: function () {
		//   this.isRandom = this.config.isRandom;
		//   this.isRepeat = this.config.isRepeat;
		// },
		nextSong: function () {
			this.currentIndex++;
			if (this.currentIndex >= this.songs.length) {
				this.currentIndex = 0;
			}
			this.loadCurrentSong();
		},
		prevSong: function () {
			this.currentIndex--;
			if (this.currentIndex < 0) {
				this.currentIndex = this.songs.length - 1;
			}
			this.loadCurrentSong();
		},
		playRandomSong: function () {
			let newIndex;
			do {
				newIndex = Math.floor(Math.random() * this.songs.length);
			} while (newIndex === this.currentIndex);

			this.currentIndex = newIndex;
			this.loadCurrentSong();
		},
		listenPlaylist: function () {
			const _this = this;
			// Lắng nghe hành vi click vào playlist
			// Listen to playlist clicks
			playlistItem.click(function (e) {
				// console.log(playlistItem);
				const songNode = e.target.closest(".playlist__item:not(.playlist__item--active)");
				// console.log(songNode);
				if (songNode ) {
					// Xử lý khi click vào song
					// Handle when clicking on the song
						_this.currentIndex = Number(songNode.dataset.index);
						// console.log(songNode.dataset.index);
						_this.loadCurrentSong();
						_this.render();
						audio.play();
				}
			});
		},
		start: function () {
			// Gán cấu hình từ config vào ứng dụng
			// Assign configuration from config to application
			// this.loadConfig();

			// Định nghĩa các thuộc tính cho object
			// Defines properties for the object
			this.defineProperties();

			// Lắng nghe / xử lý các sự kiện (DOM events)
			// Listening / handling events (DOM events)
			this.handleEvents();
			
			// Tải thông tin bài hát đầu tiên vào UI khi chạy ứng dụng
			// Load the first song information into the UI when running the app
			this.loadCurrentSong();
			
			// Render playlist
			this.render();

			// Hiển thị trạng thái ban đầu của button repeat & random
			// Display the initial state of the repeat & random button
			// randomBtn.classList.toggle("active", this.isRandom);
			// repeatBtn.classList.toggle("active", this.isRepeat);
		}
	};

	app.start();

});


