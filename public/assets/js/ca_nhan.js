const $ = document.querySelector.bind(document);
const $$ = document.querySelectorAll.bind(document);

const appPlayer = $(".app-player");
const cdThumb = $(".cd-thumb");
const playList = $(".play-list");
const songName = $("footer .song-name");
const singer = $("footer .singer");
const audio = $("#audio");
const playBtn = $(".btn-toggle-play");
const progress = $("#progress");
const durationTime = $(".duration-time");
const current = $(".current-time");
const prevBtn = $(".btn-prev");
const nextBtn = $(".btn-next");
const randomBtn = $(".btn-random");
const repeatBtn = $(".btn-repeat");

const app = {
  currentIndex: 0,
  isPLaying: false,
  isRandom: false,
  isRepeat: false,
  songs: [
    {
      name: "1 Second For Test",
      singer: "Second man",
      path: "./assets/musics/1sec.mp3",
      image: "./assets/img/1sec.png",
    },
    {
      name: "Lạ Lùng",
      singer: "Vũ",
      path: "./assets/musics/Lạ_Lùng _Vũ.mp3",
      image: "./assets/img/Vu_Ti_Hong.jpg",
    },
    {
      name: "Happy For You",
      singer: "Lukas Graham (feat Vũ)",
      path: "./assets/musics/Lukas Graham Happy For You .mp3",
      image: "./assets/img/HappyForYou.png",
    },
    {
      name: "Snowman",
      singer: "Sia",
      path: "./assets/musics/Snowman_Sia.mp3",
      image: "./assets/img/Sia_Snowman.jpg",
    },
    {
      name: "My Love",
      singer: "West Life",
      path: "./assets/musics/Westlife_MyLove.mp3",
      image: "./assets/img/WestLife_MyLove.jpg",
    },
    {
      name: "I Do",
      singer: "911",
      path: "./assets/musics/I_Do _911_Band.mp3",
      image: "./assets/img/I_Do_911.jpg",
    },
    {
      name: "Beautiful in white",
      singer: "West Life",
      path: "./assets/musics/Westlife_Beautiful in white.mp3",
      image: "./assets/img/beautiful_in_white.png",
    },
    {
      name: "Just give me a reason",
      singer: "P!nk",
      path: "./assets/musics/P!nk_Just Give Me A Reason ft Nate Ruess.mp3",
      image: "./assets/img/Just_give_me_a_reason.jpg",
    },
    {
      name: "When You Tell Me That You Love Me",
      singer: "West Life with Diana Ross",
      path: "./assets/musics/Westlife_When You Tell Me That You Love Me Official Video with Diana Ross.mp3",
      image:
        "./assets/img/When You Tell Me That You Love Me Official Video with Diana Ross.png",
    },
    {
      name: "Soledad",
      singer: "West Life",
      path: "./assets/musics/Westlife_Soledad.mp3",
      image: "./assets/img/Soledad.jpg",
    },
    {
      name: "TO THE MOON",
      singer: "hooligan",
      path: "./assets/musics/TO THE MOON_hooligan.mp3",
      image: "./assets/img/TO THE MOON.jpg",
    },
    {
      name: "Talking To The Moon",
      singer: "Bruno Mars",
      path: "./assets/musics/Bruno Mars_Talking To The Moon.mp3",
      image: "./assets/img/Talking to the moon.jpg",
    },
    // {
    //     name: "",
    //     singer: "",
    //     path: "/musics/Snowman_Sia.mp3",
    //     image: "/img/Sia_Snowman.jpg",
    // },
  ],

  render: function () {
    const htmls = this.songs.map((song, index) => {
      return `
            
                <div class="song ${
                  index === app.currentIndex ? "active" : ""
                }" data-index="${index}">
                    <div class="thumb" 
                        style="background-image: url('${song.image}')">
                    </div>
                    <div class="body">
                        <h3 class="title">${song.name}</h3>
                        <p class="author">${song.singer}</p>
                    </div>
                    <div class="option">
                        <i class="fas fa-ellipsis-h"></i>
                    </div>
                </div>
            
            `;
    });
    playList.innerHTML = htmls.join("\n");
  },

  handleEvent: function () {
    //Play và pause bài hát
    playBtn.onclick = function () {
      if (app.isPLaying) {
        audio.pause();
      } else {
        audio.play();
      }
    };
    audio.onplay = function () {
      app.isPLaying = true;
      appPlayer.classList.add("playing");
      cdThumbAnimate.play();
    };
    audio.onpause = function () {
      app.isPLaying = false;
      appPlayer.classList.remove("playing");
      cdThumbAnimate.pause();
    };
    //Cập nhật phần trăm và hiển thị thời gian trên thanh progress
    function formatTimer(number) {
      const minutes = Math.floor(number / 60);
      const seconds = Math.floor(number - minutes * 60);
      return `${minutes}:${seconds}`;
    }
    audio.ontimeupdate = function () {
      //Display Time
      const { duration, currentTime } = audio; //audio.duration và audio.currentTime

      progress.max = duration; //Thanh progress chạy theo bài hát
      progress.value = currentTime;

      current.textContent = formatTimer(currentTime);
      if (isNaN(duration)) {
        durationTime.textContent = "00:00";
      } else {
        durationTime.textContent = formatTimer(duration);
      }
    };
    //Tua theo thanh nhạc
    progress.addEventListener("change", handleChangeProgress);
    function handleChangeProgress() {
      audio.currentTime = progress.value;
      console.log("current time: ", audio.currentTime);
    }
    //Quay đĩa CD khi play nhạc, dừng khi pause nhạc
    const cdThumbAnimate = cdThumb.animate([{ transform: "rotate(360deg)" }], {
      duration: 10000, // 10 seconds
      iterations: Infinity,
    });
    cdThumbAnimate.pause();
    //Next Song click and Next Song Click Random
    nextBtn.onclick = function () {
      if (app.isRandom == true) {
        app.playRandomSong();
      } else {
        app.nextSong();
      }
      audio.play();
      app.render();
      app.scrollToViewSong();
    };
    //Prev Song click and Prev Song Click Random
    prevBtn.onclick = function () {
      if (app.isRandom == true) {
        app.playRandomSong();
      } else {
        app.prevSong();
      }
      audio.play();
      app.render();
      app.scrollToViewSong();
    };
    //Turn on/off and change color button Random Song
    randomBtn.onclick = function () {
      app.isRandom = !app.isRandom;
      randomBtn.classList.toggle("active", app.isRandom);
    };
    //Turn on/off and change color button Repeat Song
    repeatBtn.onclick = function () {
      app.isRepeat = !app.isRepeat;
      repeatBtn.classList.toggle("active", app.isRepeat);
    };
    //Xử lý next song khi song ended hoặc repeat khi song ended
    audio.onended = function () {
      if (app.isRepeat == true) {
        audio.play();
      } else {
        nextBtn.click();
      }
    };
    //Click vào bài hát nào phát bài đó
    playList.onclick = function (e) {
      const songNode = e.target.closest(".song:not(.active)");
      if (songNode || e.target.closest(".option")) {
        //Khi click vào bài hát
        if (songNode) {
          // console.log(e.target.getAttribute('data-index'));
          app.currentIndex = Number(songNode.dataset.index);
          app.loadCurrentSong();
          app.render();
          audio.play();
        }
        //Khi click vào option
        if (e.target.closest(".option")) {
        }
      }

      // if(e.target.closest('.song:not(.active)')){
      //     console.log(e.target);
      // }
    };
  },
  //Load current song
  defineProperties: function () {
    Object.defineProperty(this, "currentSong", {
      get: function () {
        return app.songs[this.currentIndex];
      },
    });
  },
  loadCurrentSong: function () {
    songName.textContent = this.currentSong.name;
    singer.textContent = this.currentSong.singer;

    cdThumb.style.backgroundImage = `url('${this.currentSong.image}')`;
    audio.src = this.currentSong.path;
  },
  //Next Song
  nextSong: function () {
    this.currentIndex++;
    if (this.currentIndex >= this.songs.length) {
      this.currentIndex = 0;
    }
    this.loadCurrentSong();
  },
  // Previous Song
  prevSong: function () {
    this.currentIndex--;
    if (this.currentIndex < 0) {
      this.currentIndex = this.songs.length - 1;
    }
    this.loadCurrentSong();
  },
  //Random Song
  playRandomSong: function () {
    let newSong;
    do {
      newSong = Math.floor(Math.random() * this.songs.length);
    } while (newSong === this.currentIndex);
    this.currentIndex = newSong;
    this.loadCurrentSong();
  },
  //Bài hát sẽ xuất hiện ra khung nhìn khi mà bị che khuất
  scrollToViewSong: function () {
    setTimeout(() => {
      $(".song.active").scrollIntoView({
        behavior: "smooth",
        block: "nearest",
      });
    }, 500);
    // $(".play-list.active").scrollIntoView();
  },

  start: function () {
    this.handleEvent(); // Lắng nghe và bắt các sự kiện
    this.defineProperties();
    this.loadCurrentSong(); // load bài hát hiện tại
    this.render(); //load ra playlist
  },
};

app.start();
