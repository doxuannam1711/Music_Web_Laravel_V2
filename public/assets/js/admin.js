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




var nameDataMusic = document.querySelectorAll(".table-data-musics-name")
var singerDataMusic = document.querySelectorAll(".table-data-musics-singer")
var pathDataMusic = document.querySelectorAll(".table-data-musics-path")
var imageDataMusic = document.querySelectorAll(".table-data-musics-image")


// var songss = function (nameDataMusic, singerDataMusic, pathDataMusic, imageDataMusic) {
//   for (var i = 0; i < singerDataMusic.length; i++) {
//     songss.name = nameDataMusic.textContent;
//     songss.singer = singerDataMusic.textContent
//     songss.path = pathDataMusic.textContent
//     songss.imageDataMusic = imageDataMusic.textContent
//   }
//   return songss;
// }

// console.log(obj);

var obj = [
]
for (var i = 0; i < singerDataMusic.length; i++) {
  let _nameDataMusic = nameDataMusic[i].textContent
  let _singerDataMusic = singerDataMusic[i].textContent
  let _pathDataMusic = pathDataMusic[i].textContent
  let _imageDataMusic = imageDataMusic[i].textContent
  let path_default = "./assets/musics/"
  let image_default = "./assets/img/"
  let objTemp = {
    name: `${_nameDataMusic}`,
    singer: `${_singerDataMusic}`,
    path: `${path_default}${_pathDataMusic}`,
    image: `${image_default}${_imageDataMusic}`
  }
  // console.log(objTemp);
  obj.push(objTemp);
}

var app = {
  currentIndex: 0,
  isPLaying: false,
  isRandom: false,
  isRepeat: false,
  render: function () {

    console.log(obj);
    const htmls = obj.map((song, index) => {
      return `
            
                <div class="song ${index === app.currentIndex ? "active" : ""
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
    //Play v?? pause b??i h??t
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
    //C???p nh???t ph???n tr??m v?? hi???n th??? th???i gian tr??n thanh progress
    function formatTimer(number) {
      const minutes = Math.floor(number / 60);
      const seconds = Math.floor(number - minutes * 60);
      return `${minutes}:${seconds}`;
    }
    audio.ontimeupdate = function () {
      //Display Time
      const { duration, currentTime } = audio; //audio.duration v?? audio.currentTime

      progress.max = duration; //Thanh progress ch???y theo b??i h??t
      progress.value = currentTime;

      current.textContent = formatTimer(currentTime);
      if (isNaN(duration)) {
        durationTime.textContent = "00:00";
      } else {
        durationTime.textContent = formatTimer(duration);
      }
    };
    //Tua theo thanh nh???c
    progress.addEventListener("change", handleChangeProgress);
    function handleChangeProgress() {
      audio.currentTime = progress.value;
      console.log("current time: ", audio.currentTime);
    }
    //Quay ????a CD khi play nh???c, d???ng khi pause nh???c
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
    //X??? l?? next song khi song ended ho???c repeat khi song ended
    audio.onended = function () {
      if (app.isRepeat == true) {
        audio.play();
      } else {
        nextBtn.click();
      }
    };
    //Click v??o b??i h??t n??o ph??t b??i ????
    playList.onclick = function (e) {
      const songNode = e.target.closest(".song:not(.active)");
      if (songNode || e.target.closest(".option")) {
        //Khi click v??o b??i h??t
        if (songNode) {
          // console.log(e.target.getAttribute('data-index'));
          app.currentIndex = Number(songNode.dataset.index);
          app.loadCurrentSong();
          app.render();
          audio.play();
        }
        //Khi click v??o option
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
        return obj[this.currentIndex];
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
    if (this.currentIndex >= obj.length) {
      this.currentIndex = 0;
    }
    this.loadCurrentSong();
  },
  // Previous Song
  prevSong: function () {
    this.currentIndex--;
    if (this.currentIndex < 0) {
      this.currentIndex = obj.length - 1;
    }
    this.loadCurrentSong();
  },
  //Random Song
  playRandomSong: function () {
    let newSong;
    do {
      newSong = Math.floor(Math.random() * obj.length);
    } while (newSong === this.currentIndex);
    this.currentIndex = newSong;
    this.loadCurrentSong();
  },
  //B??i h??t s??? xu???t hi???n ra khung nh??n khi m?? b??? che khu???t
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
    this.handleEvent(); // L???ng nghe v?? b???t c??c s??? ki???n
    this.defineProperties();
    this.loadCurrentSong(); // load b??i h??t hi???n t???i
    this.render(); //load ra playlist
  },
};

app.start();