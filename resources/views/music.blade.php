<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <link rel="stylesheet" href="{{url('/assets/font/font/css/all.css')}}">

   <link rel="stylesheet" href="{{url('/assets/css/khampha.css')}}">

   <link rel="stylesheet" href="{{url('/assets/css/khampha2.css')}}">


   <link rel="stylesheet" href="{{url('/assets/css/ca_nhan.css')}}">

   <link rel="stylesheet" href="{{url('/assets/css/the_loai.css')}}">

   <link rel="stylesheet" href="{{url('/assets/css/top100.css')}}">

   <link rel="stylesheet" href="{{url('/assets/css/login_form.css')}}">

   <link rel="stylesheet" href="{{url('/assets/css/base.css')}}">
   <link rel="stylesheet" href="{{url('/assets/css/zingchart.css')}}">
   <link rel="stylesheet" href="{{url('/assets/css/normalize.min.css')}}">
   <link rel="stylesheet" href="{{url('/assets/css/grid.css')}}">
   <title>Music Player Laravel</title>
</head>

<body style="user-select: none;">

   <!-- Begin: Open login form -->
   <div class="form-login js-login">
      <div class="login-container js-login-container">
         <div class="login-close-btn js-login-close-btn">
            <i class="fa-solid fa-xmark"></i>
         </div>

         <header class="login-header">
            Login Form
         </header>

         <div class="login-body">
            <label for="username" class="login-label">
               Username
            </label>
            <input id="username" type="text" class="login-input login-input-username" placeholder="Enter username" required>

            <label for="login-password" class="login-label">
               Password
            </label>
            <input id="login-password" type="password" class="login-input login-input-password" placeholder="Enter password" required>
            <a href="#" class = "a_login" >
                              <button type="submit" id="login">

                  Login <i class="fa-solid fa-check"></i>

               </button>
            </a>
         </div>

         <footer class="login-footer">
            <p class="login-help">Forgot <a href="#">password?</a></p>
         </footer>
      </div>
   </div>
   <!-- End: Open login form -->

   <!-- Begin: Open signup form -->
   <div class="form-sign-up js-signUp">
      <div class="login-container js-signUp-container">
         <div class="login-close-btn js-signUp-close-btn">
            <i class="fa-solid fa-xmark"></i>
         </div>

         <header class="login-header">
            Sign up Form
         </header>

         <div class="login-body">
            <label for="email" class="login-label">
               Email
            </label>
            <input id="email" type="email" class="login-input" placeholder="Enter email" required>

            <label for="password" class="login-label">
               Password
            </label>
            <input id="password" type="password" class="login-input" placeholder="Enter password" required>

            <label for="repeat-password" class="login-label">
               Repeat Password
            </label>
            <input id="repeat-password" type="password" class="login-input" placeholder="Repeat password" required>

            <button type="submit" id="login">
               Sign Up <i class="fa-solid fa-check"></i>
            </button>
         </div>

         <footer class="login-footer">
            <p class="login-help">By creating an account you agree to our <a href="#">Terms & Privacy</a></p>
         </footer>
      </div>
   </div>
   <!-- End: Open signup form -->

   <!-- Grid 1: Start ch???a menu sidebar b??n tr??i -->
   <div class="grid-1">
      <div class="sidebar">
         <div class="logo-brand pl-35">
            <img onclick="changeTo_tabCaNhan()" src="{{url('assets/img/assets-khampha/logo.png')}}" width="100" height="100%" alt="logo brand">
         </div>
         <!-- menu 1 -->
         <div class="nav-menu-1">
            <a class="ca-nhan" href="#" onclick="changeTo_tabCaNhan()">
               <div class="nav-icon"><i class="fa-solid fa-person"></i></div>
               <span>C?? nh??n</span>
            </a>
            <a class="kham-pha" href="#" onclick="changeTo_tabKhamPha()">
               <div class="nav-icon"><i class="fa-solid fa-music"></i></div>
               <span>Kh??m ph??</span>
            </a>
            <a class="chart" href="#" onclick="changeTo_tabChart()">
               <div class="nav-icon"><i class="fa-solid fa-chart-simple"></i></div>
               <span>#Chart</span>
            </a>
            <!-- <a class="theo-doi" href="#">
                  <div class="nav-icon"><i class="fa-sharp fa-solid fa-lines-leaning"></i></div>
                  <span>Theo d??i</span>
               </a> -->

         </div>
         <div class="divider"></div>
         <!-- menu 2 -->
         <div class="nav-menu-2">
            <a class="nhac-moi" href="#" onclick="changeTo_tabNhacMoi()">
               <div class="nav-icon"><i class="fa-solid fa-record-vinyl"></i></div>
               <span>Nh???c m???i</span>
            </a>
            <a class="the-loai" href="#" onclick="changeTo_tabTheLoai()">
               <div class="nav-icon"><i class="fa-solid fa-radio"></i></div>
               <span>Th??? lo???i</span>
            </a>
            <a class="top-100" href="#" onclick="changeTo_tabTop100()">
               <div class="nav-icon"><i class="fa-solid fa-award"></i></div>
               <span>Top 100</span>
            </a>
         </div>
      </div>

      <!-- Begin: Button Login and Sign Up -->
      <div id="login_and_signup">
         <div class="login-text">????ng nh???p ????? kh??m ph?? playlist d??nh ri??ng cho b???n</div>
         <button class="btn-login js-action-login s-full-width">????ng nh???p</button>
      </div>

      <div id="login_and_signup">
         <div class="login-text">Nghe nh???c kh??ng gi???i h???n c??ng kho nh???c VIP</div>
         <button class="btn-login js-action-signUp s-full-width">????ng k??</button>
      </div>
      <!-- End: Button Login and Sign Up -->
   </div>
   <!-- Grid 1: End ch???a menu sidebar b??n tr??i -->

   <!-- Start grid 2: -->
   <div class="grid-2">

      <!-- Start header ch???a thanh t??m ki???m -->
      <div class="header-top">
         <div class="search-bar">
            <input type="text" alt="T??m ki???m" placeholder="T??m ki???m b??i h??t, ngh??? s??, l???i b??i h??t...">
            <span class="search-icon"><i class="fa-solid fa-magnifying-glass"></i></span>
            </input>
         </div>
         <div class="user-function">
            <a href="#" class="button1 func"><i class="fa-solid fa-seedling"></i></a>

            <div class="header__nav-btn func">
               <input type="file" name="upload song" id="header__nav-input">
               <label for="header__nav-input">
                  <i class="fa-solid fa-upload"></i>
               </label>
            </div>
            </li>

            <a href="#" class="button3 func"><i class="fa-solid fa-gear"></i></a>
            <a href="#" class="button5 user">
               <i class="fa-solid fa-user"></i>
               <span>Nh??m PT Web</span>
            </a>
         </div>
      </div>
      <!-- End header ch???a thanh t??m ki???m -->


      <!-- Start trang c?? nh??n -->
      <div id="tabCaNhan">
         <div class="player-container" style="display: none">
            <div class="player-right">
               <div class="play-list">
                  <!-- <div class="song">
                     <div class="thumb" 
                           style="background-image: url('/img/music-avatar.jpg')">
                     </div>
                     <div class="body">
                           <h3 class="title">Music name</h3>
                           <p class="author">Singer</p>
                     </div>
                     <div class="option">
                           <i class="fas fa-ellipsis-h"></i>
                     </div>
                  </div>    -->
               </div>
            </div>

         </div>

      </div>
      <!-- End trang c?? nh??n -->

      <!-- Start trang kh??m ph?? -->
      <div id="tabKhamPha">
         <!-- section 1: slide -->
         <div class="playlist-slide">
            <div class="slides flex" id="scroll-slide">
               <img class="slide-component" src="./assets/img/assets-khampha/slide1.jpg" alt="">
               <img class="slide-component" src="./assets/img/assets-khampha/slide2.jpg" alt="">
               <img class="slide-component" src="./assets/img/assets-khampha/slide3.jpg" alt="">
            </div>
         </div>
         
         <!-- section 02: Hot hit -->
         <div class="playlist--hot-hit white">
            <div class="playlist--title">
               <h2>Hot Hit H??m Nay</h2>
            </div>
            <div class="playlist--carousel">
               <div class="pl-element">
                  <div class="element--head absolute">
                     <i class="fas fa-play absolute z98 cover-play-btn"></i>
                     <img src="./assets/img/assets-khampha/hothit1.webp" alt="">
                     <div class="overlay"></div>
         
                  </div>
                  <div class="element--title">
                     <h3>Nh???c c???a V??</h3>
                     <p>Nh???ng ca kh??c bu???n hay nh???t c???a V?? huhuhu:(</p>
                  </div>
               </div>
               <div class="pl-element">
                  <div class="element--head">
                     <img src="./assets/img/assets-khampha/hothit2.webp" alt="">
                     <div class="func--play"><i class="fa-regular fa-circle-play"></i></div>
         
                  </div>
                  <div class="element--title">
                     <h3>Nh???c c???a V??</h3>
                     <p>Nh???ng ca kh??c bu???n hay nh???t c???a V?? huhuhu:(</p>
                  </div>
               </div>
               <div class="pl-element">
                  <div class="element--head">
                     <img src="./assets/img/assets-khampha/hothit3.webp" alt="">
                     <i class="fas fa-play absolute z98 cover-play-btn"></i>
         
                  </div>
                  <div class="element--title">
                     <h3>Nh???c c???a V??</h3>
                     <p>Nh???ng ca kh??c bu???n hay nh???t c???a V?? huhuhu:(</p>
                  </div>
               </div>
               <div class="pl-element">
                  <div class="element--head">
                     <img src="./assets/img/assets-khampha/hothit4.webp" alt="">
                     <div class="func--play"><i class="fa-regular fa-circle-play"></i></div>
         
                  </div>
                  <div class="element--title">
                     <h3>Nh???c c???a V??</h3>
                     <p>Nh???ng ca kh??c bu???n hay nh???t c???a V?? huhuhu:(</p>
                  </div>
               </div>
               <div class="pl-element">
                  <div class="element--head">
                     <img src="./assets/img/assets-khampha/hothit5.webp" alt="">
                     <div class="func--play"><i class="fa-regular fa-circle-play"></i></div>
         
                  </div>
                  <div class="element--title">
                     <h3>Nh???c c???a V??</h3>
                     <p>Nh???ng ca kh??c bu???n hay nh???t c???a V?? huhuhu:(</p>
                  </div>
               </div>
            </div>
         </div>
         
         <!-- Section 03: Hay nhat cua nam 2022 -->
         <div class="playlist--hot-2022 white">
            <div class="playlist--title">
               <h2>Hay nh???t c???a n??m 2022</h2>
            </div>
            <div class="playlist--carousel">
               <div class="pl-element">
                  <div class="element--head">
                     <img src="./assets/img/assets-khampha/hot1.webp" alt="">
                     <div class="func--play"><i class="fa-regular fa-circle-play"></i></div>
         
                  </div>
                  <div class="element--title">
                     <p>Nh???ng ca kh??c hay nh???t n??m 2022</p>
                  </div>
               </div>
               <div class="pl-element">
                  <div class="element--head">
                     <img src="./assets/img/assets-khampha/hot2.webp" alt="">
                     <div class="func--play"><i class="fa-regular fa-circle-play"></i></div>
         
                  </div>
                  <div class="element--title">
                     <p>Nh???ng ngh??? s?? n???i b???t n??m 2022</p>
                  </div>
               </div>
               <div class="pl-element">
                  <div class="element--head">
                     <img src="./assets/img/assets-khampha/hot3.webp" alt="">
                     <div class="func--play"><i class="fa-regular fa-circle-play"></i></div>
         
                  </div>
                  <div class="element--title">
                     <p>Nh???ng ca kh??c VPOP n???i b???t nh???t 2022</p>
                  </div>
               </div>
               <div class="pl-element">
                  <div class="element--head">
                     <img src="./assets/img/assets-khampha/hot4.webp" alt="">
                     <div class="func--play"><i class="fa-regular fa-circle-play"></i></div>
         
                  </div>
                  <div class="element--title">
                     <p>Nh???ng ca kh??c KPOP n???i b???t nh???t 2022</p>
                  </div>
               </div>
               <div class="pl-element">
                  <div class="element--head">
                     <img src="./assets/img/assets-khampha/hot5.webp" alt="">
                     <div class="func--play"><i class="fa-regular fa-circle-play"></i></div>
         
                  </div>
                  <div class="element--title">
                     <p>Nh???ng ca kh??c USUK n???i b???t nh???t 2022</p>
                  </div>
               </div>
            </div>
         </div>
         
         <!-- section 04: playlist giang sinh -->
         <div class="playlist--hot-2022 white">
            <div class="playlist--title">
               <h2>Gi??ng sinh s???p t???i r???i n??</h2>
            </div>
            <div class="playlist--carousel">
               <div class="pl-element">
                  <div class="element--head">
                     <img src="./assets/img/assets-khampha/xmas1.webp" alt="">
                     <div class="func--play"><i class="fa-regular fa-circle-play"></i></div>
         
                  </div>
                  <div class="element--title">
                     <h3>Nh???ng b???n nh???c Gi??ng Sinh b???t h???</h3>
                     <p>Nh???ng ca kh??c gi??ng sinh hay nh???t n??m 2022</p>
                  </div>
               </div>
               <div class="pl-element">
                  <div class="element--head">
                     <img src="./assets/img/assets-khampha/xmas2.webp" alt="">
                     <div class="func--play"><i class="fa-regular fa-circle-play"></i></div>
         
                  </div>
                  <div class="element--title">
                     <h3>Gi??ng sinh r???n r??ng c??ng c??? nh??</h3>
                     <p>Nh???ng ca kh??c gi??ng sinh hay nh???t n??m 2022</p>
                  </div>
               </div>
               <div class="pl-element">
                  <div class="element--head">
                     <img src="./assets/img/assets-khampha/xmas3.webp" alt="">
                     <div class="func--play"><i class="fa-regular fa-circle-play"></i></div>
         
                  </div>
                  <div class="element--title">
                     <h3>Nh???c POP Gi??ng sinh USUK</h3>
                     <p>Nh???ng ca kh??c gi??ng sinh hay nh???t n??m 2022</p>
                  </div>
               </div>
               <div class="pl-element">
                  <div class="element--head">
                     <img src="./assets/img/assets-khampha/xmas4.webp" alt="">
                     <div class="func--play"><i class="fa-regular fa-circle-play"></i></div>
         
                  </div>
                  <div class="element--title">
                     <h3>B???n t??nh ca m??a ????ng ???m l??ng</h3>
                     <p>Nh???ng ca kh??c gi??ng sinh hay nh???t n??m 2022</p>
                  </div>
               </div>
               <div class="pl-element">
                  <div class="element--head">
                     <img src="./assets/img/assets-khampha/xmas5.webp" alt="">
                     <div class="func--play"><i class="fa-regular fa-circle-play"></i></div>
         
                  </div>
                  <div class="element--title">
                     <h3>Noel t??nh y??u kh??ng d??nh cho ng?????i c?? ????n</h3>
                     <p>Nh???ng ca kh??c gi??ng sinh hay nh???t n??m 2022</p>
                  </div>
               </div>
            </div>
         </div>
         
         <div class="music--new white">
            <div class="playlist--title">
               <h2>Nh???c m???i v??? l??ng</h2>
            </div>
            <div class="music--carousel">
         
               <div class="pl-element">
                  <div class="element--head">
                     <img src="./assets/img/assets-khampha/baihat1.webp" alt="">
                     <div class="func--play"><i class="fa-regular fa-circle-play"></i></div>
         
                  </div>
                  <div class="element--title flex">
                     <div class="title">
                        <h3>Anh nh??? ra r???ng</h3>
                        <p>V?? hay ho</p>
                     </div>
                     <div class="func">
                        <i class="fa-regular fa-circle-play"></i>
                     </div>
                  </div>
               </div>
         
               <div class="pl-element">
                  <div class="element--head">
                     <img src="./assets/img/assets-khampha/baihat1.webp" alt="">
                     <div class="func--play"><i class="fa-regular fa-circle-play"></i></div>
         
                  </div>
                  <div class="element--title flex">
                     <div class="title">
                        <h3>Anh nh??? ra r???ng</h3>
                        <p>V?? hay ho</p>
                     </div>
                     <div class="func">
                        <i class="fa-regular fa-circle-play"></i>
                     </div>
                  </div>
               </div>
         
               <div class="pl-element">
                  <div class="element--head">
                     <img src="./assets/img/assets-khampha/baihat1.webp" alt="">
                     <div class="func--play"><i class="fa-regular fa-circle-play"></i></div>
         
                  </div>
                  <div class="element--title flex">
                     <div class="title">
                        <h3>Anh nh??? ra r???ng</h3>
                        <p>V?? hay ho</p>
                     </div>
                     <div class="func">
                        <i class="fa-regular fa-circle-play"></i>
                     </div>
                  </div>
               </div>
         
               <div class="pl-element">
                  <div class="element--head">
                     <img src="./assets/img/assets-khampha/baihat1.webp" alt="">
                     <div class="func--play"><i class="fa-regular fa-circle-play"></i></div>
         
                  </div>
                  <div class="element--title flex">
                     <div class="title">
                        <h3>Anh nh??? ra r???ng</h3>
                        <p>V?? hay ho</p>
                     </div>
                     <div class="func">
                        <i class="fa-regular fa-circle-play"></i>
                     </div>
                  </div>
               </div>
         
               <div class="pl-element">
                  <div class="element--head">
                     <img src="./assets/img/assets-khampha/baihat1.webp" alt="">
                     <div class="func--play"><i class="fa-regular fa-circle-play"></i></div>
         
                  </div>
                  <div class="element--title flex">
                     <div class="title">
                        <h3>Anh nh??? ra r???ng</h3>
                        <p>V?? hay ho</p>
                     </div>
                     <div class="func">
                        <i class="fa-regular fa-circle-play"></i>
                     </div>
                  </div>
               </div>
         
         
               <div class="pl-element">
                  <div class="element--head">
                     <img src="./assets/img/assets-khampha/baihat1.webp" alt="">
                     <div class="func--play"><i class="fa-regular fa-circle-play"></i></div>
         
                  </div>
                  <div class="element--title flex">
                     <div class="title">
                        <h3>Anh nh??? ra r???ng</h3>
                        <p>V?? hay ho</p>
                     </div>
                     <div class="func">
                        <i class="fa-regular fa-circle-play"></i>
                     </div>
                  </div>
               </div>
         
         
         
         
            </div>
         </div>
      </div>
      <!-- End trang kh??m ph?? -->


      <!-- Start trang zing chart -->
      <div id="tabChart">
         <div class="charts__container">
            <div class="grid">
               <div class="chart__container-header mb-40">
                  <h3 class="chart__header-name">#Music chart</h3>
                  <div class="chart__header-btn">
                     <i class="fa-solid fa-play chart__header-icon"></i>
                  </div>
               </div>
               <div class="row no-gutters chart--container mt-10 mb-20 expand-song">
                  <div class=" col l-12 m-12 c-12">
                     <div class="container__playlist">
                        <div class="playlist__list-charts overflow-visible">

                           <div class="playlist__list-song media ">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                          is-outline--blue
                                                                          
                                                                          
                                                                          
                                                                      ">
                                       1
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10" style="background: url('./assets/img/Zingchart/phuongly.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img" style="background: url('./assets/img/Zingchart/phuongly.jpg') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">Ch??a Bao Gi??? Em
                                       Qu??n</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">H????ng Ly</a>

                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">05:11</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                           <div class="playlist__list-song media ">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                          
                                                                          is-outline--green
                                                                          
                                                                          
                                                                      ">
                                       2
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10" style="background: url('./assets/img/Zingchart/yeulacuoi.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img" style="background: url('./assets/img/Zingchart/yeulacuoi.jpg') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">Y??u L?? C?????i</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">Ph??t H???</a>,

                                       <a href="#" class="is-ghost">X2X</a>,

                                       <a href="#" class="is-ghost"></a>

                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">02:59</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                           <div class="playlist__list-song media ">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                          
                                                                          
                                                                          is-outline--red
                                                                          
                                                                      ">
                                       3
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10" style="background: url('./assets/img/Zingchart/emlaconthuyen.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img" style="background: url('./assets/img/Zingchart/emlaconthuyen.jpg') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">Em L?? Con Thuy???n C??
                                       ????n</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">Th??i H???c</a>

                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">05:04</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                           <div class="playlist__list-song media ">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                          
                                                                          
                                                                          
                                                                          is-outline--text
                                                                      ">
                                       4
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10" style="background: url('./assets/img/Zingchart/khuemoclong.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img" style="background: url('./assets/img/Zingchart/khuemoclong.jpg') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">Khu?? M???c Lang</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">H????ng Ly</a>,

                                       <a href="#" class="is-ghost">Jombie</a>

                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">03:26</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                           <div class="playlist__list-song media ">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                          
                                                                          
                                                                          
                                                                          is-outline--text
                                                                      ">
                                       5
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10" style="background: url('./assets/img/Zingchart/yeulacuoiremix.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img" style="background: url('./assets/img/Zingchart/yeulacuoiremix.jpg') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">Y??u L?? C?????i
                                       (Remix)</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">Ph??t H???</a>,

                                       <a href="#" class="is-ghost">DinhLong</a>,

                                       <a href="#" class="is-ghost">X2X</a>

                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">03:50</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                           <div class="playlist__list-song media ">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                          
                                                                          
                                                                          
                                                                          is-outline--text
                                                                      ">
                                       6
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10" style="background: url('./assets/img/Zingchart/thaylong.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img" style="background: url('./assets/img/Zingchart/thaylong.jpg') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">Thay L??ng</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">DIMZ</a>,

                                       <a href="#" class="is-ghost">TVk</a>,

                                       <a href="#" class="is-ghost">NH4T</a>

                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">04:36</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                           <div class="playlist__list-song media ">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                          
                                                                          
                                                                          
                                                                          is-outline--text
                                                                      ">
                                       7
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10" style="background: url('./assets/img/Zingchart/roitoiluon.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img" style="background: url('./assets/img/Zingchart/roitoiluon.jpg') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">R???i T???i Lu??n</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">Nal</a>

                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">04:07</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                           <div class="playlist__list-song media ">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                          
                                                                          
                                                                          
                                                                          is-outline--text
                                                                      ">
                                       8
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10" style="background: url('./assets/img/Zingchart/tinhyeugoilachiatay.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img" style="background: url('./assets/img/Zingchart/tinhyeugoilachiatay.jpg') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">C?? M???t T??nh Y??u G???i L??
                                       Chia
                                       Tay</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">T??ng Ph??c</a>,

                                       <a href="#" class="is-ghost">Tr????ng Th???o Nhi</a>

                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">04:18</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                           <div class="playlist__list-song media ">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                          
                                                                          
                                                                          
                                                                          is-outline--text
                                                                      ">
                                       9
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10" style="background: url('./assets/img/Zingchart/phuongly.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img" style="background: url('./assets/img/SongActiveAnimation/icon-playing.gif') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">C?????i Lu??n ???????c
                                       Kh??ng?</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">YuniBoo</a>,

                                       <a href="#" class="is-ghost">Goctoi Mixer</a>

                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">04:02</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                           <div class="playlist__list-song media ">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                          
                                                                          
                                                                          
                                                                          is-outline--text
                                                                      ">
                                       10
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10" style="background: url('./assets/img/tabCharts/chartSongRanks/song10.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img" style="background: url('./assets/img/SongActiveAnimation/icon-playing.gif') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">Bao L??u Ta L???i Y??u M???t
                                       Ng?????i</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">Do??n Hi???u</a>,

                                       <a href="#" class="is-ghost">B.</a>

                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">03:51</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                           <div class="playlist__list-song media song--not-expand">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                          
                                                                          
                                                                          
                                                                          is-outline--text
                                                                      ">
                                       11
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10" style="background: url('./assets/img/tabCharts/chartSongRanks/song11.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img" style="background: url('./assets/img/SongActiveAnimation/icon-playing.gif') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">Th????ng Nhau T???i
                                       B???n</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">Nal</a>

                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">04:55</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                           <div class="playlist__list-song media song--not-expand">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                          
                                                                          
                                                                          
                                                                          is-outline--text
                                                                      ">
                                       12
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10" style="background: url('./assets/img/tabCharts/chartSongRanks/song12.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img" style="background: url('./assets/img/SongActiveAnimation/icon-playing.gif') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">????ng Phai M??? D??ng
                                       Ai</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">DatKaa</a>,

                                       <a href="#" class="is-ghost">QT Beatz</a>

                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">04:40</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                           <div class="playlist__list-song media song--not-expand">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                          
                                                                          
                                                                          
                                                                          is-outline--text
                                                                      ">
                                       13
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10" style="background: url('./assets/img/tabCharts/chartSongRanks/song13.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img" style="background: url('./assets/img/SongActiveAnimation/icon-playing.gif') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">Nh???n R???ng Anh Nh???
                                       Em</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">????nh D??ng</a>,

                                       <a href="#" class="is-ghost">ACV</a>

                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">05:12</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                           <div class="playlist__list-song media song--not-expand">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                          
                                                                          
                                                                          
                                                                          is-outline--text
                                                                      ">
                                       14
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10" style="background: url('./assets/img/tabCharts/chartSongRanks/song14.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img" style="background: url('./assets/img/SongActiveAnimation/icon-playing.gif') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">D???u D??ng Em ?????n</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">ERIK</a>,

                                       <a href="#" class="is-ghost">NinjaZ</a>

                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">03:05</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                           <div class="playlist__list-song media song--not-expand">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                          
                                                                          
                                                                          
                                                                          is-outline--text
                                                                      ">
                                       15
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10" style="background: url('./assets/img/tabCharts/chartSongRanks/song15.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img" style="background: url('./assets/img/SongActiveAnimation/icon-playing.gif') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">Em H??t Ai Nghe</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">Orange</a>

                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">04:39</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                           <div class="playlist__list-song media song--not-expand">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                          
                                                                          
                                                                          
                                                                          is-outline--text
                                                                      ">
                                       16
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10" style="background: url('./assets/img/tabCharts/chartSongRanks/song16.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img" style="background: url('./assets/img/SongActiveAnimation/icon-playing.gif') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">V???y L?? Ta M???t Nhau</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">Kh???i ????ng</a>

                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">04:15</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                           <div class="playlist__list-song media song--not-expand">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                          
                                                                          
                                                                          
                                                                          is-outline--text
                                                                      ">
                                       17
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10" style="background: url('./assets/img/tabCharts/chartSongRanks/song17.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img" style="background: url('./assets/img/SongActiveAnimation/icon-playing.gif') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">v??ng anh ??i ??i (liu riu
                                       version)</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">B??ch Ph????ng</a>

                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">03:39</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                           <div class="playlist__list-song media song--not-expand">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                          
                                                                          
                                                                          
                                                                          is-outline--text
                                                                      ">
                                       18
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10" style="background: url('./assets/img/tabCharts/chartSongRanks/song18.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img" style="background: url('./assets/img/SongActiveAnimation/icon-playing.gif') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">N???u L??c Tr?????c Em ?????ng
                                       T???i</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">Ph???m ????nh Th??i Ng??n</a>,

                                       <a href="#" class="is-ghost">Hino</a>

                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">03:35</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                           <div class="playlist__list-song media song--not-expand">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                          
                                                                          
                                                                          
                                                                          is-outline--text
                                                                      ">
                                       19
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10" style="background: url('./assets/img/tabCharts/chartSongRanks/song19.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img" style="background: url('./assets/img/SongActiveAnimation/icon-playing.gif') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">C?? ????n D??nh Cho Ai</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">Lee Ken</a>,

                                       <a href="#" class="is-ghost">Nal</a>

                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">03:51</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                           <div class="playlist__list-song media song--not-expand">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                          
                                                                          
                                                                          
                                                                          is-outline--text
                                                                      ">
                                       20
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10" style="background: url('./assets/img/tabCharts/chartSongRanks/song20.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img" style="background: url('./assets/img/SongActiveAnimation/icon-playing.gif') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">MONEY</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">LISA</a>

                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">02:48</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                           <div class="playlist__list-song media song--not-expand">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                          
                                                                          
                                                                          
                                                                          is-outline--text
                                                                      ">
                                       21
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10" style="background: url('./assets/img/tabCharts/chartSongRanks/song21.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img" style="background: url('./assets/img/SongActiveAnimation/icon-playing.gif') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">Y??u M?? Ch??a D??m
                                       N??i</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">Thanh H??ng</a>

                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">04:25</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                           <div class="playlist__list-song media song--not-expand">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                          
                                                                          
                                                                          
                                                                          is-outline--text
                                                                      ">
                                       22
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10" style="background: url('./assets/img/tabCharts/chartSongRanks/song22.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img" style="background: url('./assets/img/SongActiveAnimation/icon-playing.gif') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">????? T???c 2</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">????? Mixi</a>,

                                       <a href="#" class="is-ghost">Ph??o</a>,

                                       <a href="#" class="is-ghost">Ph??c Du</a>,

                                       <a href="#" class="is-ghost">Masew</a>

                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">03:21</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                           <div class="playlist__list-song media song--not-expand">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                          
                                                                          
                                                                          
                                                                          is-outline--text
                                                                      ">
                                       23
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10" style="background: url('./assets/img/tabCharts/chartSongRanks/song23.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img" style="background: url('./assets/img/SongActiveAnimation/icon-playing.gif') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">Chi???u ?????ng Qu??</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">H2K</a>

                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">03:20</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                           <div class="playlist__list-song media song--not-expand">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                          
                                                                          
                                                                          
                                                                          is-outline--text
                                                                      ">
                                       24
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10" style="background: url('./assets/img/tabCharts/chartSongRanks/song24.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img" style="background: url('./assets/img/SongActiveAnimation/icon-playing.gif') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">T??p L???u V??ng</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">Nguy???n ????nh V??</a>,

                                       <a href="#" class="is-ghost">ACV</a>

                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">03:31</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                           <div class="playlist__list-song media song--not-expand">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                          
                                                                          
                                                                          
                                                                          is-outline--text
                                                                      ">
                                       25
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10" style="background: url('./assets/img/tabCharts/chartSongRanks/song25.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img" style="background: url('./assets/img/SongActiveAnimation/icon-playing.gif') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">LALISA</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">LISA</a>

                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">03:21</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                           <div class="playlist__list-song media song--not-expand">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                          
                                                                          
                                                                          
                                                                          is-outline--text
                                                                      ">
                                       26
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10" style="background: url('./assets/img/tabCharts/chartSongRanks/song26.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img" style="background: url('./assets/img/SongActiveAnimation/icon-playing.gif') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">Sai C??ch Y??u</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">L?? B???o B??nh</a>

                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">05:42</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                           <div class="playlist__list-song media song--not-expand">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                          
                                                                          
                                                                          
                                                                          is-outline--text
                                                                      ">
                                       27
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10" style="background: url('./assets/img/tabCharts/chartSongRanks/song27.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img" style="background: url('./assets/img/SongActiveAnimation/icon-playing.gif') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">c?? h???n v???i thanh
                                       xu??n</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">MONSTAR</a>

                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">03:38</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                           <div class="playlist__list-song media song--not-expand">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                          
                                                                          
                                                                          
                                                                          is-outline--text
                                                                      ">
                                       28
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10" style="background: url('./assets/img/tabCharts/chartSongRanks/song28.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img" style="background: url('./assets/img/SongActiveAnimation/icon-playing.gif') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">Em N??o C?? T???i</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">Th????ng V??</a>,

                                       <a href="#" class="is-ghost">ACV</a>

                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">04:51</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                           <div class="playlist__list-song media song--not-expand">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                          
                                                                          
                                                                          
                                                                          is-outline--text
                                                                      ">
                                       29
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10" style="background: url('./assets/img/tabCharts/chartSongRanks/song29.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img" style="background: url('./assets/img/SongActiveAnimation/icon-playing.gif') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">Nh???n T???i Kho???ng Tr???i
                                       Em</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">Qu??n A.P</a>

                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">03:55</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                           <div class="playlist__list-song media song--not-expand">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                          
                                                                          
                                                                          
                                                                          is-outline--text
                                                                      ">
                                       30
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10" style="background: url('./assets/img/tabCharts/chartSongRanks/song30.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img" style="background: url('./assets/img/SongActiveAnimation/icon-playing.gif') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">Em H???a Th??? N??o</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">Nh?? Vi???t</a>,

                                       <a href="#" class="is-ghost">ACV</a>

                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">04:25</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                        </div>
                     </div>
                  </div>
               </div>
               <div class="charts__expand">
                  <button class="button charts__expand-btn">Xem top 100</button>
               </div>
            </div>
         </div>
      </div>
      <!-- End trang zing chart -->



      <!-- Start trang nh???c m???i -->
      <div id="tabNhacMoi">
         <div class="charts__container">
            <div class="grid">
               <div class="chart__container-header mb-40">
                  <h3 class="chart__header-name">NH???C M???I</h3>
                  <div class="chart__header-btn">
                     <i class="fa-solid fa-play chart__header-icon"></i>
                  </div>
               </div>
               <div class="row no-gutters chart--container mt-10 mb-20 expand-song">
                  <div class=" col l-12 m-12 c-12">
                     <div class="container__playlist">
                        <div class="playlist__list-charts overflow-visible">

                           <div class="playlist__list-song media ">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                  is-outline--blue
                                                                  
                                                                  
                                                                  
                                                               ">
                                       1
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10"
                                    style="background: url('./assets/img/nhacmoi/dunglo.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img"
                                          style="background: url('./assets/img/nhacmoi/dunglo.jpg') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">?????ng Lo Nh??! C?? Anh ????y</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">Thi??n T??</a>

                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">04:41</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                           <div class="playlist__list-song media ">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                  
                                                                  is-outline--green
                                                                  
                                                                  
                                                               ">
                                       2
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10"
                                    style="background: url('./assets/img/nhacmoi/honem.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img"
                                          style="background: url('./assets/img/nhacmoi/honem.jpg') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">H??n Em Ch??? N??o</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">Thu??? Chi</a>

                                       
                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">04:56</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                           <div class="playlist__list-song media ">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                  
                                                                  
                                                                  is-outline--red
                                                                  
                                                               ">
                                       3
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10"
                                    style="background: url('./assets/img/Zingchart/emlaconthuyen.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img"
                                          style="background: url('./assets/img/Zingchart/emlaconthuyen.jpg') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">R???i Em S??? ???n Th??i
                                       </span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">B???o Uy??n</a>,

                                       <a href="#" class="is-ghost">RIN9</a>

                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">04:10</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                           <div class="playlist__list-song media ">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                  
                                                                  
                                                                  
                                                                  is-outline--text
                                                               ">
                                       4
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10"
                                    style="background: url('./assets/img/nhacmoi/chungduong.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img"
                                          style="background: url('./assets/img/nhacmoi/chungduong.jpg') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">Chung ???????ng Ng?????c H?????ng</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">Thi??n ??n</a>,

                                       <a href="#" class="is-ghost">LQ Media</a>

                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">03:26</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                           <div class="playlist__list-song media ">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                  
                                                                  
                                                                  
                                                                  is-outline--text
                                                               ">
                                       5
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10"
                                    style="background: url('./assets/img/Zingchart/yeulacuoiremix.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img"
                                          style="background: url('./assets/img/Zingchart/yeulacuoiremix.jpg') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">Ph???n Kh??ch Sang S??ng
                                       </span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">L??m Ch???n H???i</a>,

                                       

                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">05:25</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                           <div class="playlist__list-song media ">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                  
                                                                  
                                                                  
                                                                  is-outline--text
                                                               ">
                                       6
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10"
                                    style="background: url('./assets/img/nhacmoi/daubt.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img"
                                          style="background: url('./assets/img/nhacmoi/daubt.jpg') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">????u Bi???t Tr?????c Chuy???n Xa Nhau</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">Bozitt</a>,

                                       <a href="#" class="is-ghost">Reddy</a>,

                                       <a href="#" class="is-ghost">NH4T</a>

                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">04:40</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                           <div class="playlist__list-song media ">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                  
                                                                  
                                                                  
                                                                  is-outline--text
                                                               ">
                                       7
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10"
                                    style="background: url('./assets/img/nhacmoi/anhbuoc.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img"
                                          style="background: url('./assets/img/nhacmoi/anhbuoc.jpg') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">Anh B?????c Ra T??? Manga</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">Mr.Siro</a>

                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">05:26</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                           <div class="playlist__list-song media ">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                  
                                                                  
                                                                  
                                                                  is-outline--text
                                                               ">
                                       8
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10"
                                    style="background: url('./assets/img/nhacmoi/matbao.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img"
                                          style="background: url('./assets/img/nhacmoi/matbao.jpg') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">M???t Bao L??u ????? Qu??n M???t Ng?????i
                                       </span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">Quang Trung</a>,

                                       <a href="#" class="is-ghost">??i Ph????ng</a>

                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">05:15</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                           <div class="playlist__list-song media ">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                  
                                                                  
                                                                  
                                                                  is-outline--text
                                                               ">
                                       9
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10"
                                    style="background: url('./assets/img/nhacmoi/cangbiet.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img"
                                          style="background: url('./assets/img/nhacmoi/cangbiet.jpg') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">C??ng Bi???t C??ng ??au</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">Liz Kim C????ng</a>

                                       

                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">04:36</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                           <div class="playlist__list-song media ">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                  
                                                                  
                                                                  
                                                                  is-outline--text
                                                               ">
                                       10
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10"
                                    style="background: url('./assets/img/nhacmoi/motngay.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img"
                                          style="background: url('./assets/img/nhacmoi/motngay.jpg') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">M???t Ng??y M??i M??i</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">Trang</a>,

                                       <a href="#" class="is-ghost">T??ng</a>

                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">03:10</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                           <div class="playlist__list-song media song--not-expand">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                  
                                                                  
                                                                  
                                                                  is-outline--text
                                                               ">
                                       11
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10"
                                    style="background: url('./assets/img/nhacmoi/luyenluu.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img"
                                          style="background: url('./assets/img/nhacmoi/luyenluu.jpg') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">Luy???n L??u</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">Ph??t H???</a>

                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">04:07</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                           <div class="playlist__list-song media song--not-expand">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                  
                                                                  
                                                                  
                                                                  is-outline--text
                                                               ">
                                       12
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10"
                                    style="background: url('./assets/img/nhacmoi/dongphai.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img"
                                          style="background: url('./assets/img/nhacmoi/dongphai.jpg') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">Ch??a ????? ????? Gi??? Em</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">V????ng Anh T??</a>

                                       

                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">05:36</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                           <div class="playlist__list-song media song--not-expand">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                  
                                                                  
                                                                  
                                                                  is-outline--text
                                                               ">
                                       13
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10"
                                    style="background: url('./assets/img/nhacmoi/nhanrang.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img"
                                          style="background: url('./assets/img/nhacmoi/nhanrang.jpg') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">Nh???n R???ng Anh Nh???
                                       Em</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">????nh D??ng</a>,

                                       <a href="#" class="is-ghost">ACV</a>

                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">05:12</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                           <div class="playlist__list-song media song--not-expand">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                  
                                                                  
                                                                  
                                                                  is-outline--text
                                                               ">
                                       14
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10"
                                    style="background: url('./assets/img/nhacmoi/diudang.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img"
                                          style="background: url('./assets/img/SongActiveAnimation/icon-playing.gif') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">D???u D??ng Em ?????n</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">ERIK</a>,

                                       <a href="#" class="is-ghost">NinjaZ</a>

                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">03:05</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                           <div class="playlist__list-song media song--not-expand">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                  
                                                                  
                                                                  
                                                                  is-outline--text
                                                               ">
                                       15
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10"
                                    style="background: url('./assets/img/nhacmoi/emhat.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img"
                                          style="background: url('./assets/img/SongActiveAnimation/icon-playing.gif') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">Em H??t Ai Nghe</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">Orange</a>

                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">04:39</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                           <div class="playlist__list-song media song--not-expand">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                  
                                                                  
                                                                  
                                                                  is-outline--text
                                                               ">
                                       16
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10"
                                    style="background: url('./assets/img/nhacmoi/vayla.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img"
                                          style="background: url('./assets/img/SongActiveAnimation/icon-playing.gif') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">V???y L?? Ta M???t Nhau</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">Kh???i ????ng</a>

                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">04:15</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                           <div class="playlist__list-song media song--not-expand">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                  
                                                                  
                                                                  
                                                                  is-outline--text
                                                               ">
                                       17
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10"
                                    style="background: url('./assets/img/nhacmoi/vanganh.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img"
                                          style="background: url('./assets/img/SongActiveAnimation/icon-playing.gif') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">V??ng anh ??i ??i (liu riu
                                       version)</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">B??ch Ph????ng</a>

                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">03:39</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                           <div class="playlist__list-song media song--not-expand">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                  
                                                                  
                                                                  
                                                                  is-outline--text
                                                               ">
                                       18
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10"
                                    style="background: url('./assets/img/nhacmoi/neuluctruoc.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img"
                                          style="background: url('./assets/img/SongActiveAnimation/icon-playing.gif') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">N???u L??c Tr?????c Em ?????ng
                                       T???i</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">Ph???m ????nh Th??i Ng??n</a>,

                                       <a href="#" class="is-ghost">Hino</a>

                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">03:35</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                           <div class="playlist__list-song media song--not-expand">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                  
                                                                  
                                                                  
                                                                  is-outline--text
                                                               ">
                                       19
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10"
                                    style="background: url('./assets/img/nhacmoi/codon.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img"
                                          style="background: url('./assets/img/SongActiveAnimation/icon-playing.gif') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">C?? ????n D??nh Cho Ai</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">Lee Ken</a>,

                                       <a href="#" class="is-ghost">Nal</a>

                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">03:51</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                           <div class="playlist__list-song media song--not-expand">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                  
                                                                  
                                                                  
                                                                  is-outline--text
                                                               ">
                                       20
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10"
                                    style="background: url('./assets/img/nhacmoi/money.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img"
                                          style="background: url('./assets/img/SongActiveAnimation/icon-playing.gif') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">MONEY</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">LISA</a>

                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">02:48</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                           <div class="playlist__list-song media song--not-expand">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                  
                                                                  
                                                                  
                                                                  is-outline--text
                                                               ">
                                       21
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10"
                                    style="background: url('./assets/img/nhacmoi/yeuma.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img"
                                          style="background: url('./assets/img/SongActiveAnimation/icon-playing.gif') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">Y??u M?? Ch??a D??m
                                       N??i</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">Thanh H??ng</a>

                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">04:25</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                           <div class="playlist__list-song media song--not-expand">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                  
                                                                  
                                                                  
                                                                  is-outline--text
                                                               ">
                                       22
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10"
                                    style="background: url('./assets/img/nhacmoi/dotoc.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img"
                                          style="background: url('./assets/img/SongActiveAnimation/icon-playing.gif') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">????? T???c 2</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">????? Mixi</a>,

                                       <a href="#" class="is-ghost">Ph??o</a>,

                                       <a href="#" class="is-ghost">Ph??c Du</a>,

                                       <a href="#" class="is-ghost">Masew</a>

                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">03:21</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                           <div class="playlist__list-song media song--not-expand">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                  
                                                                  
                                                                  
                                                                  is-outline--text
                                                               ">
                                       23
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10"
                                    style="background: url('./assets/img/nhacmoi/chieudongque.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img"
                                          style="background: url('./assets/img/SongActiveAnimation/icon-playing.gif') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">Chi???u ?????ng Qu??</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">H2K</a>

                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">03:20</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                           <div class="playlist__list-song media song--not-expand">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                  
                                                                  
                                                                  
                                                                  is-outline--text
                                                               ">
                                       24
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10"
                                    style="background: url('./assets/img/nhacmoi/tupleuvang.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img"
                                          style="background: url('./assets/img/SongActiveAnimation/icon-playing.gif') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">T??p L???u V??ng</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">Nguy???n ????nh V??</a>,

                                       <a href="#" class="is-ghost">ACV</a>

                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">03:31</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                           <div class="playlist__list-song media song--not-expand">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                  
                                                                  
                                                                  
                                                                  is-outline--text
                                                               ">
                                       25
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10"
                                    style="background: url('./assets/img/nhacmoi/lalisa.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img"
                                          style="background: url('./assets/img/SongActiveAnimation/icon-playing.gif') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">LALISA</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">LISA</a>

                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">03:21</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                           <div class="playlist__list-song media song--not-expand">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                  
                                                                  
                                                                  
                                                                  is-outline--text
                                                               ">
                                       26
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10"
                                    style="background: url('./assets/img/nhacmoi/saicachyeu.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img"
                                          style="background: url('./assets/img/SongActiveAnimation/icon-playing.gif') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">Sai C??ch Y??u</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">L?? B???o B??nh</a>

                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">05:42</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                           <div class="playlist__list-song media song--not-expand">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                  
                                                                  
                                                                  
                                                                  is-outline--text
                                                               ">
                                       27
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10"
                                    style="background: url('./assets/img/nhacmoi/cohen.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img"
                                          style="background: url('./assets/img/SongActiveAnimation/icon-playing.gif') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">C?? h???n v???i thanh
                                       xu??n</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">MONSTAR</a>

                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">03:38</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                           <div class="playlist__list-song media song--not-expand">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                  
                                                                  
                                                                  
                                                                  is-outline--text
                                                               ">
                                       28
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10"
                                    style="background: url('./assets/img/nhacmoi/emnaocotoi.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img"
                                          style="background: url('./assets/img/SongActiveAnimation/icon-playing.gif') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">Em N??o C?? T???i</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">Th????ng V??</a>,

                                       <a href="#" class="is-ghost">ACV</a>

                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">04:51</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                           <div class="playlist__list-song media song--not-expand">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                  
                                                                  
                                                                  
                                                                  is-outline--text
                                                               ">
                                       29
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10"
                                    style="background: url('./assets/img/nhacmoi/nhantoi.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img"
                                          style="background: url('./assets/img/SongActiveAnimation/icon-playing.gif') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">Nh???n T???i Kho???ng Tr???i
                                       Em</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">Qu??n A.P</a>

                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">03:55</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                           <div class="playlist__list-song media song--not-expand">
                              <div class="playlist__song-info media__left">
                                 <div class="playlist__song-rank">
                                    <div class="playlist__rank-number 
                                                                  
                                                                  
                                                                  
                                                                  is-outline--text
                                                               ">
                                       30
                                    </div>
                                    <div class="playlist__rank-icon">
                                       <i class="fa-solid fa-minus"></i>
                                    </div>
                                 </div>
                                 <div class="playlist__song-thumb media__thumb mr-10"
                                    style="background: url('./assets/img/nhacmoi/emhua.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img"
                                          style="background: url('./assets/img/SongActiveAnimation/icon-playing.gif') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">Em H???a Th??? N??o</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">Nh?? Vi???t</a>,

                                       <a href="#" class="is-ghost">ACV</a>

                                    </p>
                                 </div>
                              </div>
                              <span class="playlist__song-time media__content">04:25</span>
                              <div class="playlist__song-option song--tab media__right hide-on-mobile">
                                 <div class="playlist__song-btn btn--mic option-btn">
                                    <i class="btn--icon song__icon icon__mic--edit fa-solid fa-microphone"></i>
                                 </div>
                                 <div class="playlist__song-btn btn--heart option-btn">
                                    <i class="btn--icon song__icon icon--heart fa-solid fa-heart"></i>
                                 </div>
                                 <div class="playlist__song-btn option-btn">
                                    <i class="btn--icon fa-solid fa-ellipsis"></i>
                                 </div>
                              </div>
                           </div>

                        </div>
                     </div>
                  </div>
               </div>
               <div class="charts__expand">
                  <button class="button charts__expand-btn">Xem top 100</button>
               </div>
            </div>
         </div>
      </div>
      <!-- End trang nh???c m???i -->

      <!-- Start trang th??? lo???i -->
      <div id="tabTheLoai">
         <div class="music-type-rec" style="margin-bottom: 75px;">
            <div class="main-img-board element--head">
               <img class="img-main" src="./assets/img/assets-the_loai/main_img_theloai.jpg" alt="">
            </div>

            <p class="type-title">Qu???c gia</p>
            <div class="playlist--hot-hit white">
               <div class="playlist--carousel">
                  <div class="pl-element">
                     <div class="element--rec" style="background-image: url('./assets/img/assets-the_loai/nhacviet.bmp');">
                        <div class="element--rec-cover">
                           <div class=" icon-play-200">
                              <i class="fa-regular fa-heart"></i>
                              <i class="fas fa-play"></i>
                              <i class="fas fa-ellipsis-h"></i>
                           </div>
                        </div>
                        + <div class="overlay"></div>
                     </div>
                  </div>
                  <div class="pl-element">
                     <div class="element--rec" style="background-image: url('./assets/img/assets-the_loai/nhachan.bmp');">
                        <div class="element--rec-cover">
                           <div class=" icon-play-200">
                              <i class="fa-regular fa-heart"></i>
                              <i class="fas fa-play"></i>
                              <i class="fas fa-ellipsis-h"></i>
                           </div>
                        </div>
                        <div class="overlay"></div>
                     </div>
                  </div>
                  <div class="pl-element">
                     <div class="element--rec" style="background-image: url('./assets/img/assets-the_loai/nhachoa.bmp');">
                        <div class="element--rec-cover">
                           <div class=" icon-play-200">
                              <i class="fa-regular fa-heart fa-icon"></i>
                              <i class="fas fa-play"></i>
                              <i class="fas fa-ellipsis-h"></i>
                           </div>
                        </div>
                        <div class="overlay"></div>
                     </div>
                  </div>
                  <div class="pl-element">
                     <div class="element--rec" style="background-image: url('./assets/img/assets-the_loai/nhacaumi.bmp');">
                        <div class="element--rec-cover">
                           <div class=" icon-play-200">
                              <i class="fa-regular fa-heart"></i>
                              <i class="fas fa-play"></i>
                              <i class="fas fa-ellipsis-h"></i>
                           </div>
                        </div>
                        <div class="overlay"></div>
                     </div>
                  </div>
               </div>
            </div>

            <p class="type-title">EDM</p>
            <div class="playlist--hot-hit white">
               <div class="playlist--carousel">
                  <div class="pl-element">
                     <div class="element--head-cover">
                        <div class="element--head absolute">
                           <i class="fas fa-play absolute z98 cover-play-btn"></i>
                           <img class="absolute" src="./assets/img/assets-the_loai/hothit1.webp" alt="">
                           <div class="func--play"><i class="fa-regular fa-circle-play"></i></div>
                           <div class="overlay"></div>
                        </div>
                     </div>
                     <div class="element--title">
                        <h3>Indie Vi???t</h3>
                        <p>Nh???c Indie Vi???t hay nh???t m???i th???i ?????i</p>
                     </div>
                  </div>
                  <div class="pl-element">
                     <div class="element--head-cover">
                        <div class="element--head absolute">
                           <i class="fas fa-play absolute z98 cover-play-btn"></i>
                           <img class="absolute" src="./assets/img/assets-the_loai/hothit2.webp" alt="">
                           <div class="func--play"><i class="fa-regular fa-circle-play"></i></div>
                           <div class="overlay"></div>
                        </div>
                     </div>
                     <div class="element--title">
                        <h3>Chrismas HITS</h3>
                        <p>Ca kh??c M??a ????ng di???u k??? l???nh h??n t???m l??ng NYC c???a b???n</p>
                     </div>
                  </div>
                  <div class="pl-element">
                     <div class="element--head-cover">
                        <div class="element--head absolute">
                           <i class="fas fa-play absolute z98 cover-play-btn"></i>
                           <img class="absolute" src="./assets/img/assets-the_loai/hothit3.webp" alt="">
                           <div class="func--play"><i class="fa-regular fa-circle-play"></i></div>
                           <div class="overlay"></div>
                        </div>
                     </div>
                     <div class="element--title">
                        <h3>Rap Vi???t ng??y nay</h3>
                        <p>V???n l?? Rap nh??ng m?? b??i n??y chi???n l???m!</p>
                     </div>
                  </div>
                  <div class="pl-element">
                     <div class="element--head-cover">
                        <div class="element--head absolute">
                           <i class="fas fa-play absolute z98 cover-play-btn"></i>
                           <img class="absolute" src="./assets/img/assets-the_loai/hothit4.webp" alt="">
                           <div class="func--play"><i class="fa-regular fa-circle-play"></i></div>
                           <div class="overlay"></div>
                        </div>
                     </div>
                     <div class="element--title">
                        <h3>Combo HITS</h3>
                        <p>Tuy???n t???p nh???ng b??i h??t HOT nh???t</p>
                     </div>
                  </div>
                  <div class="pl-element">
                     <div class="element--head-cover">
                        <div class="element--head absolute">
                           <i class="fas fa-play absolute z98 cover-play-btn"></i>
                           <img class="absolute" src="./assets/img/assets-the_loai/hothit5.webp" alt="">
                           <div class="func--play"><i class="fa-regular fa-circle-play"></i></div>
                           <div class="overlay"></div>
                        </div>
                     </div>
                     <div class="element--title">
                        <h3>Th??? S??u</h3>
                        <p>Nh???ng ca kh??c bu???n hay nh???t c???a V?? h??h??h??:(</p>
                     </div>
                  </div>
               </div>
            </div>



            <p class="type-title">Remix</p>
            <div class="playlist--hot-hit white">
               <div class="playlist--carousel">
                  <div class="pl-element">
                     <div class="element--head-cover">
                        <div class="element--head absolute">
                           <i class="fas fa-play absolute z98 cover-play-btn"></i>
                           <img class="absolute" src="./assets/img/assets-the_loai/chidan.webp" alt="">
                           <div class="func--play"><i class="fa-regular fa-circle-play"></i></div>
                           <div class="overlay"></div>
                        </div>
                     </div>
                     <div class="element--title">
                        <h3>Ch?? D??n</h3>
                        <p>Tuy???n t???p nh???ng ca kh??c hay nh???t c???a Ch?? D??n - Remix</p>
                     </div>
                  </div>
                  <div class="pl-element">
                     <div class="element--head-cover">
                        <div class="element--head absolute">
                           <i class="fas fa-play absolute z98 cover-play-btn"></i>
                           <img class="absolute" src="./assets/img/assets-the_loai/huongtram.webp" alt="">
                           <div class="func--play"><i class="fa-regular fa-circle-play"></i></div>
                           <div class="overlay"></div>
                        </div>
                     </div>
                     <div class="element--title">
                        <i class="fas fa-play absolute z98 cover-play-btn"></i>
                        <h3>H????ng Tr??m</h3>
                        <p>Tuy???n t???p nh???ng ca kh??c hay nh???t c???a H????ng Tr??m - Remix</p>
                     </div>
                  </div>
                  <div class="pl-element">
                     <div class="element--head-cover">
                        <div class="element--head absolute">
                           <i class="fas fa-play absolute z98 cover-play-btn"></i>
                           <img class="absolute" src="./assets/img/assets-the_loai/min.webp" alt="">
                           <div class="func--play"><i class="fa-regular fa-circle-play"></i></div>
                           <div class="overlay"></div>
                        </div>
                     </div>
                     <div class="element--title">
                        <h3>Min</h3>
                        <p>Tuy???n t???p nh???ng ca kh??c hay nh???t c???a Min - Remix</p>
                     </div>
                  </div>
                  <div class="pl-element">
                     <div class="element--head-cover">
                        <div class="element--head absolute">
                           <i class="fas fa-play absolute z98 cover-play-btn"></i>
                           <img class="absolute" src="./assets/img/assets-the_loai/minzy.webp" alt="">
                           <div class="func--play"><i class="fa-regular fa-circle-play"></i></div>
                           <div class="overlay"></div>
                        </div>
                     </div>
                     <div class="element--title">
                        <h3>Minzy</h3>
                        <p>Tuy???n t???p nh???ng ca kh??c hay nh???t c???a Minzy - Remix</p>
                     </div>
                  </div>
                  <div class="pl-element">
                     <div class="element--head-cover">
                        <div class="element--head absolute">
                           <i class="fas fa-play absolute z98 cover-play-btn"></i>
                           <img class="absolute" src="./assets/img/assets-the_loai/onlyC.webp" alt="">
                           <div class="func--play"><i class="fa-regular fa-circle-play"></i></div>
                           <div class="overlay"></div>
                        </div>
                     </div>
                     <div class="element--title">
                        <h3>OnlyC</h3>
                        <p>Tuy???n t???p nh???ng ca kh??c hay nh???t c???a OnlyC - Remix</p>
                     </div>
                  </div>
               </div>
            </div>

            <p class="type-title">Nh???c game</p>
            <div class="playlist--hot-hit white">
               <div class="playlist--carousel">
                  <div class="pl-element">
                     <div class="element--head-cover">
                        <div class="element--head absolute">
                           <i class="fas fa-play absolute z98 cover-play-btn"></i>
                           <img class="absolute" src="./assets/img/assets-the_loai/xcom2.jfif" alt="">
                           <div class="func--play"><i class="fa-regular fa-circle-play"></i></div>
                           <div class="overlay"></div>
                        </div>
                     </div>
                     <div class="element--title">
                        <h3>XCOM 2</h3>
                        <p>Nh???c game XCOM 2 - 'Squad Loadout'</p>
                     </div>
                  </div>
                  <div class="pl-element">
                     <div class="element--head-cover">
                        <div class="element--head absolute">
                           <i class="fas fa-play absolute z98 cover-play-btn"></i>
                           <img class="absolute" src="./assets/img/assets-the_loai/texas.bmp" alt="">
                           <div class="func--play"><i class="fa-regular fa-circle-play"></i></div>
                           <div class="overlay"></div>
                        </div>
                     </div>
                     <div class="element--title">
                        <h3>Arknight</h3>
                        <p>Nh???c game Arknight - 'Void'</p>
                     </div>
                  </div>
                  <div class="pl-element">
                     <div class="element--head-cover">
                        <div class="element--head absolute">
                           <i class="fas fa-play absolute z98 cover-play-btn"></i>
                           <img class="absolute" src="./assets/img/assets-the_loai/horizonzerodawn.jpg" alt="">
                           <div class="func--play"><i class="fa-regular fa-circle-play"></i></div>
                           <div class="overlay"></div>
                        </div>
                     </div>
                     <div class="element--title">
                        <h3>Horizon Zero Dawn</h3>
                        <p>Nh???c game Horizon Zero Dawn - 'Horizon'</p>
                     </div>
                  </div>
                  <div class="pl-element">
                     <div class="element--head-cover">
                        <div class="element--head absolute">
                           <i class="fas fa-play absolute z98 cover-play-btn"></i>
                           <img class="absolute" src="./assets/img/assets-the_loai/genshin.jfif" alt="">
                           <div class="func--play"><i class="fa-regular fa-circle-play"></i></div>
                           <div class="overlay"></div>
                        </div>
                     </div>
                     <div class="element--title">
                        <h3>Genshin Impact</h3>
                        <p>Nh???c game Genshin Impact - 'Dawn Winery'</p>
                     </div>
                  </div>
                  <div class="pl-element">
                     <div class="element--head-cover">
                        <div class="element--head absolute">
                           <i class="fas fa-play absolute z98 cover-play-btn"></i>
                           <img class="absolute" src="./assets/img/assets-the_loai/gow.webp" alt="">
                           <div class="func--play"><i class="fa-regular fa-circle-play"></i></div>
                           <div class="overlay"></div>
                        </div>
                     </div>
                     <div class="element--title">
                        <h3>God of War: Raknarok</h3>
                        <p>Nh???c game God of War: Raknarok - 'GOWR'</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- End trang th??? lo???i -->

      <!-- Start trang top 100 -->
      <div id="tabTop100">
         <div class="top_music">
            <div class="banner"></div>
            <div class="bg-blur"></div>
            <div class="bg-alpha"></div>
            <div class="bg-alpha-1"></div>

            <div class="card-section">

               <div class="card-container">
                  <h3 class="title">N???i B???t</h3>

                  <div class="card-wrapper">

                     <div class="card-item">
                        <a href="#">
                           <div class="card-image">
                              <img style="width: 100%; height: 100%;" src="./assets/img/top100/top100_nhacTre.png" alt="">
                              <div class="show-effect">
                                 <i class="fa-regular fa-heart"></i>
                                 <i class="fas fa-play"></i>
                                 <i class="fas fa-ellipsis-h"></i>
                              </div>
                           </div>
                        </a>
                        <div class="card-info">
                           <div class="card-name">
                              <a href="#">Top 100 B??i Nh???c Tr??? Hay...</a>
                           </div>
                           <div class="card-artists">
                              <a href="#">MONO</a>,
                              <a href="#">V????ng Anh T??</a>,
                              <a href="#">Keyo</a>...
                           </div>
                        </div>
                     </div>
                     <div class="card-item">
                        <a href="#">
                           <div class="card-image">
                              <img style="width: 100%; height: 100%;" src="./assets/img/top100/top100_nhacAuMy.png" alt="">
                              <div class="show-effect">
                                 <i class="fa-regular fa-heart"></i>
                                 <i class="fas fa-play"></i>
                                 <i class="fas fa-ellipsis-h"></i>
                              </div>
                           </div>

                        </a>
                        <div class="card-info">
                           <div class="card-name">
                              <a href="#">Top 100 Pop ??u M??? Hay Nh???t...</a>
                           </div>
                           <div class="card-artists">
                              <a href="#">Adele</a>,
                              <a href="#">The Kid LAROI</a>,
                              <a href="#">Justin Bieber</a>...
                           </div>

                        </div>
                     </div>
                     <div class="card-item">
                        <a href="#">
                           <div class="card-image">
                              <img style="width: 100%; height: 100%;" src="./assets/img/top100/top100_nhacHanQuoc.png" alt="">
                              <div class="show-effect">
                                 <i class="fa-regular fa-heart"></i>
                                 <i class="fas fa-play"></i>
                                 <i class="fas fa-ellipsis-h"></i>
                              </div>
                           </div>

                        </a>
                        <div class="card-info">
                           <div class="card-name">
                              <a href="#">Top 100 Nh???c H??n Qu???c Hay...</a>
                           </div>
                           <div class="card-artists">
                              <a href="#">BLACKPINK</a>,
                              <a href="#">IVE</a>,
                              <a href="#">(G)I-DLE</a>...
                           </div>

                        </div>
                     </div>
                     <div class="card-item">
                        <a href="#">
                           <div class="card-image">
                              <img style="width: 100%; height: 100%;" src="./assets/img/top100/top100_edm.png" alt="">
                              <div class="show-effect">
                                 <i class="fa-regular fa-heart"></i>
                                 <i class="fas fa-play"></i>
                                 <i class="fas fa-ellipsis-h"></i>
                              </div>
                           </div>

                        </a>
                        <div class="card-info">
                           <div class="card-name">
                              <a href="#">Top 100 Nh???c EDM...</a>
                           </div>
                           <div class="card-artists">
                              <a href="#">Alan Walker</a>,
                              <a href="#">K-391</a>,
                              <a href="#">Emelie Hollow</a>...
                           </div>

                        </div>
                     </div>
                     <div class="card-item">
                        <a href="#">
                           <div class="card-image">
                              <img style="width: 100%; height: 100%;" src="./assets/img/top100/top100_rapVietNam.png" alt="">
                              <div class="show-effect">
                                 <i class="fa-regular fa-heart"></i>
                                 <i class="fas fa-play"></i>
                                 <i class="fas fa-ellipsis-h"></i>
                              </div>
                           </div>

                        </a>
                        <div class="card-info">
                           <div class="card-name">
                              <a href="#">Top 100 Nh???c Rap Vi???t Nam...</a>
                           </div>
                           <div class="card-artists">
                              <a href="#">HIEUTHUHAI</a>,
                              <a href="#">G5R Squad</a>,
                              <a href="#">Ph??c Du</a>...
                           </div>

                        </div>
                     </div>




                  </div>
               </div>

               <div class="card-container">
                  <h3 class="title">Nh???c Vi???t Nam</h3>

                  <div class="card-wrapper">

                     <!-- 5 card item -->
                     <div class="card-item">
                        <a href="#">
                           <div class="card-image">
                              <img style="width: 100%; height: 100%;" src="./assets/img/top100/nhacVietNam/top100_edmViet.png" alt="">
                              <div class="show-effect">
                                 <i class="fa-regular fa-heart"></i>
                                 <i class="fas fa-play"></i>
                                 <i class="fas fa-ellipsis-h"></i>
                              </div>
                           </div>
                        </a>
                        <div class="card-info">
                           <div class="card-name">
                              <a href="#">Top 100 Nh???c EDM Vi???t Hay...</a>
                           </div>
                           <div class="card-artists">
                              <a href="#">Masawe</a>,
                              <a href="#">Ph??o</a>,
                              <a href="#">CM1X</a>...
                           </div>
                        </div>
                     </div>
                     <div class="card-item">
                        <a href="#">
                           <div class="card-image">
                              <img style="width: 100%; height: 100%;" src="./assets/img/top100/nhacVietNam/top_100Vpop.png" alt="">
                              <div class="show-effect">
                                 <i class="fa-regular fa-heart"></i>
                                 <i class="fas fa-play"></i>
                                 <i class="fas fa-ellipsis-h"></i>
                              </div>
                           </div>

                        </a>
                        <div class="card-info">
                           <div class="card-name">
                              <a href="#">Top 100 Nh???c V-Pop Hay Nh???t...</a>
                           </div>
                           <div class="card-artists">
                              <a href="#">MONO</a>,
                              <a href="#">V????ng Anh T??</a>,
                              <a href="#">Keyo</a>...
                           </div>

                        </div>
                     </div>
                     <div class="card-item">
                        <a href="#">
                           <div class="card-image">
                              <img style="width: 100%; height: 100%;" src="./assets/img/top100/nhacVietNam/top100_nhacPhimVietNam.png" alt="">
                              <div class="show-effect">
                                 <i class="fa-regular fa-heart"></i>
                                 <i class="fas fa-play"></i>
                                 <i class="fas fa-ellipsis-h"></i>
                              </div>
                           </div>

                        </a>
                        <div class="card-info">
                           <div class="card-name">
                              <a href="#">Top 100 Nh???c Phim Vi???t Nam...</a>
                           </div>
                           <div class="card-artists">
                              <a href="#">H??ng C?????ng</a>,
                              <a href="#">L??u ??nh Loan</a>,
                              <a href="#">Vi???t H??a</a>...
                           </div>

                        </div>
                     </div>
                     <div class="card-item">
                        <a href="#">
                           <div class="card-image">
                              <img style="width: 100%; height: 100%;" src="./assets/img/top100/nhacVietNam/top100_nhacTrinh.png" alt="">
                              <div class="show-effect">
                                 <i class="fa-regular fa-heart"></i>
                                 <i class="fas fa-play"></i>
                                 <i class="fas fa-ellipsis-h"></i>
                              </div>
                           </div>

                        </a>
                        <div class="card-info">
                           <div class="card-name">
                              <a href="#">Top 100 Nh???c Tr???nh Hay Nh???t...</a>
                           </div>
                           <div class="card-artists">
                              <a href="#">H??ng C?????ng</a>,
                              <a href="#">L??u ??nh Loan</a>,
                              <a href="#">Vi???t H??a</a>...
                           </div>

                        </div>
                     </div>
                     <div class="card-item">
                        <a href="#">
                           <div class="card-image">
                              <img style="width: 100%; height: 100%;" src="./assets/img/top100/nhacVietNam/top100_caiLuong.png" alt="">
                              <div class="show-effect">
                                 <i class="fa-regular fa-heart"></i>
                                 <i class="fas fa-play"></i>
                                 <i class="fas fa-ellipsis-h"></i>
                              </div>
                           </div>

                        </a>
                        <div class="card-info">
                           <div class="card-name">
                              <a href="#">Top 100 C???i L????ng Hay Nh???t...</a>
                           </div>
                           <div class="card-artists">
                              <a href="#">C???m Loan</a>,
                              <a href="#">Ho??n L??m</a>,
                              <a href="#">Vy Th??y H???ng</a>...
                           </div>

                        </div>
                     </div>
                     <!-- 5 card item -->
                     <div class="card-item">
                        <a href="#">
                           <div class="card-image">
                              <img style="width: 100%; height: 100%;" src="./assets/img/top100/nhacVietNam/top100_nhacKhongLoi.png" alt="">
                              <div class="show-effect">
                                 <i class="fa-regular fa-heart"></i>
                                 <i class="fas fa-play"></i>
                                 <i class="fas fa-ellipsis-h"></i>
                              </div>
                           </div>
                        </a>
                        <div class="card-info">
                           <div class="card-name">
                              <a href="#">Top 100 Nh???c Kh??ng L???i Vi???t...</a>
                           </div>
                           <div class="card-artists">
                              <a href="#">V?? ?????ng Qu???c Vi???t</a>,
                              <a href="#">Peto</a>,
                              <a href="#">Ph????ng Th??y</a>...
                           </div>
                        </div>
                     </div>
                     <div class="card-item">
                        <a href="#">
                           <div class="card-image">
                              <img style="width: 100%; height: 100%;" src="./assets/img/top100/nhacVietNam/top100_nhacThieuNhi.png" alt="">
                              <div class="show-effect">
                                 <i class="fa-regular fa-heart"></i>
                                 <i class="fas fa-play"></i>
                                 <i class="fas fa-ellipsis-h"></i>
                              </div>
                           </div>

                        </a>
                        <div class="card-info">
                           <div class="card-name">
                              <a href="#">Top 100 Nh???c Thi???u Nhi Hay...</a>
                           </div>
                           <div class="card-artists">
                              <a href="#">Ng???c Kh??nh Chi</a>,
                              <a href="#">B?? Thanh Ng??n</a>,
                              <a href="#">Ch??n</a>...
                           </div>

                        </div>
                     </div>
                     <div class="card-item">
                        <a href="#">
                           <div class="card-image">
                              <img style="width: 100%; height: 100%;" src="./assets/img/top100/nhacVietNam/top100_nhacQueHuong.png" alt="">
                              <div class="show-effect">
                                 <i class="fa-regular fa-heart"></i>
                                 <i class="fas fa-play"></i>
                                 <i class="fas fa-ellipsis-h"></i>
                              </div>
                           </div>

                        </a>
                        <div class="card-info">
                           <div class="card-name">
                              <a href="#">Top 100 Nh???c Qu?? H????ng...</a>
                           </div>
                           <div class="card-artists">
                              <a href="#">Phi Nhung</a>,
                              <a href="#">T??? My</a>,
                              <a href="#">D????ng H???ng Loan</a>...
                           </div>

                        </div>
                     </div>
                     <div class="card-item">
                        <a href="#">
                           <div class="card-image">
                              <img style="width: 100%; height: 100%;" src="./assets/img/top100/nhacVietNam/top100_nhacCachMang.png" alt="">
                              <div class="show-effect">
                                 <i class="fa-regular fa-heart"></i>
                                 <i class="fas fa-play"></i>
                                 <i class="fas fa-ellipsis-h"></i>
                              </div>
                           </div>

                        </a>
                        <div class="card-info">
                           <div class="card-name">
                              <a href="#">Top 100 Nh???c C??ch M???ng...</a>
                           </div>
                           <div class="card-artists">
                              <a href="#">Tr?????ng Kha</a>,
                              <a href="#">Quang H??</a>,
                              <a href="#">T??nh Ca Vi???t</a>...
                           </div>

                        </div>
                     </div>
                     <div class="card-item">
                        <a href="#">
                           <div class="card-image">
                              <img style="width: 100%; height: 100%;" src="./assets/img/top100/nhacVietNam/top100_nhacDanceViet.png" alt="">
                              <div class="show-effect">
                                 <i class="fa-regular fa-heart"></i>
                                 <i class="fas fa-play"></i>
                                 <i class="fas fa-ellipsis-h"></i>
                              </div>
                           </div>

                        </a>
                        <div class="card-info">
                           <div class="card-name">
                              <a href="#">Top 100 Nh???c Dance Vi???t...</a>
                           </div>
                           <div class="card-artists">
                              <a href="#">CUKAK</a>,
                              <a href="#">Ph??t H???</a>,
                              <a href="#">DinhLong</a>...
                           </div>

                        </div>
                     </div>
                     <!-- 5 card item -->
                     <div class="card-item">
                        <a href="#">
                           <div class="card-image">
                              <img style="width: 100%; height: 100%;" src="./assets/img/top100/top100_rapVietNam.png" alt="">
                              <div class="show-effect">
                                 <i class="fa-regular fa-heart"></i>
                                 <i class="fas fa-play"></i>
                                 <i class="fas fa-ellipsis-h"></i>
                              </div>
                           </div>
                        </a>
                        <div class="card-info">
                           <div class="card-name">
                              <a href="#">Top 100 Nh???c Rap Vi???t Nam...</a>
                           </div>
                           <div class="card-artists">
                              <a href="#">HIEUTHUHAI</a>,
                              <a href="#">G5R Squad</a>,
                              <a href="#">Ph??c Du</a>...
                           </div>
                        </div>
                     </div>
                     <div class="card-item">
                        <a href="#">
                           <div class="card-image">
                              <img style="width: 100%; height: 100%;" src="./assets/img/top100/nhacVietNam/top100_nhacRockViet.png" alt="">
                              <div class="show-effect">
                                 <i class="fa-regular fa-heart"></i>
                                 <i class="fas fa-play"></i>
                                 <i class="fas fa-ellipsis-h"></i>
                              </div>
                           </div>

                        </a>
                        <div class="card-info">
                           <div class="card-name">
                              <a href="#">Top 100 Nh???c Rock Vi???t Nam...</a>
                           </div>
                           <div class="card-artists">
                              <a href="#">7UPPERCUTS</a>,
                              <a href="#">The Cassette</a>,
                              <a href="#">???? S??? T???I</a>...
                           </div>

                        </div>
                     </div>
                     <div class="card-item">
                        <a href="#">
                           <div class="card-image">
                              <img style="width: 100%; height: 100%;" src="./assets/img/top100/nhacVietNam/top100_nhacTruTinh.png" alt="">
                              <div class="show-effect">
                                 <i class="fa-regular fa-heart"></i>
                                 <i class="fas fa-play"></i>
                                 <i class="fas fa-ellipsis-h"></i>
                              </div>
                           </div>

                        </a>
                        <div class="card-info">
                           <div class="card-name">
                              <a href="#">Top 100 Nh???c Tr??? T??nh Hay...</a>
                           </div>
                           <div class="card-artists">
                              <a href="#">Nh?? Qu???nh</a>,
                              <a href="#">M???nh Qu???nh</a>,
                              <a href="#">??an Tr?????ng</a>...
                           </div>

                        </div>
                     </div>
                     <div class="card-item">
                        <a href="#">
                           <div class="card-image">
                              <img style="width: 100%; height: 100%;" src="./assets/img/top100/top100_nhacTre.png" alt="">
                              <div class="show-effect">
                                 <i class="fa-regular fa-heart"></i>
                                 <i class="fas fa-play"></i>
                                 <i class="fas fa-ellipsis-h"></i>
                              </div>
                           </div>

                        </a>
                        <div class="card-info">
                           <div class="card-name">
                              <a href="#">Top 100 B??i H??t Nh???c Tr??? Hay...</a>
                           </div>
                           <div class="card-artists">
                              <a href="#">MONO</a>,
                              <a href="#">V????ng Anh T??</a>,
                              <a href="#">Keyo</a>...
                           </div>

                        </div>
                     </div>


                  </div>
               </div>

               <div class="card-container">
                  <h3 class="title">Nh???c Ch??u ??</h3>

                  <div class="card-wrapper">

                     <div class="card-item">
                        <a href="#">
                           <div class="card-image">
                              <img style="width: 100%; height: 100%;" src="./assets/img/top100/nhacChauA/top100_nhacPhimHoaNgu.png" alt="">
                              <div class="show-effect">
                                 <i class="fa-regular fa-heart"></i>
                                 <i class="fas fa-play"></i>
                                 <i class="fas fa-ellipsis-h"></i>
                              </div>
                           </div>
                        </a>
                        <div class="card-info">
                           <div class="card-name">
                              <a href="#">Top 100 Nh???c Phim Hoa Ng???...</a>
                           </div>
                           <div class="card-artists">
                              <a href="#">Cheng Xiao</a>,
                              <a href="#">Xu Kai</a>,
                              <a href="#">Angela Zhang</a>...
                           </div>
                        </div>
                     </div>
                     <div class="card-item">
                        <a href="#">
                           <div class="card-image">
                              <img style="width: 100%; height: 100%;" src="./assets/img/top100/nhacChauA/top100_nhacPhimHanQuoc.png" alt="">
                              <div class="show-effect">
                                 <i class="fa-regular fa-heart"></i>
                                 <i class="fas fa-play"></i>
                                 <i class="fas fa-ellipsis-h"></i>
                              </div>
                           </div>

                        </a>
                        <div class="card-info">
                           <div class="card-name">
                              <a href="#">Top 100 Nh???c Phim H??n Qu???c...</a>
                           </div>
                           <div class="card-artists">
                              <a href="#">Jo Jung Suk</a>,
                              <a href="#">Gaho</a>,
                              <a href="#">DAVICHI</a>...
                           </div>

                        </div>
                     </div>
                     <div class="card-item">
                        <a href="#">
                           <div class="card-image">
                              <img style="width: 100%; height: 100%;" src="./assets/img/top100/nhacChauA/top100_nhacHoaNgu.png" alt="">
                              <div class="show-effect">
                                 <i class="fa-regular fa-heart"></i>
                                 <i class="fas fa-play"></i>
                                 <i class="fas fa-ellipsis-h"></i>
                              </div>
                           </div>

                        </a>
                        <div class="card-info">
                           <div class="card-name">
                              <a href="#">Top 100 Nh???c Hoa Hay Nh???t...</a>
                           </div>
                           <div class="card-artists">
                              <a href="#">A Nh??ng</a>,
                              <a href="#">M???ng Nhi??n</a>,
                              <a href="#">Danh Quy???t</a>...
                           </div>

                        </div>
                     </div>
                     <div class="card-item">
                        <a href="#">
                           <div class="card-image">
                              <img style="width: 100%; height: 100%;" src="./assets/img/top100/nhacChauA/top100_nhacJpop.png" alt="">
                              <div class="show-effect">
                                 <i class="fa-regular fa-heart"></i>
                                 <i class="fas fa-play"></i>
                                 <i class="fas fa-ellipsis-h"></i>
                              </div>
                           </div>

                        </a>
                        <div class="card-info">
                           <div class="card-name">
                              <a href="#">Top 100 Nh???c Nh???t B???n Hay...</a>
                           </div>
                           <div class="card-artists">
                              <a href="#">Kenshi Yonezu</a>,
                              <a href="#">YOASOBI</a>,
                              <a href="#">FLOW</a>...
                           </div>

                        </div>
                     </div>
                     <div class="card-item">
                        <a href="#">
                           <div class="card-image">
                              <img style="width: 100%; height: 100%;" src="./assets/img/top100/top100_nhacHanQuoc.png" alt="">
                              <div class="show-effect">
                                 <i class="fa-regular fa-heart"></i>
                                 <i class="fas fa-play"></i>
                                 <i class="fas fa-ellipsis-h"></i>
                              </div>
                           </div>

                        </a>
                        <div class="card-info">
                           <div class="card-name">
                              <a href="#">Top 100 Nh???c H??n Qu???c Hay...</a>
                           </div>
                           <div class="card-artists">
                              <a href="#">BLACKPINK</a>,
                              <a href="#">IVE</a>,
                              <a href="#">(G)I-DLE</a>...
                           </div>

                        </div>
                     </div>
                  </div>
               </div>

               <div class="card-container">
                  <h3 class="title">Nh???c ??u M???</h3>

                  <div class="card-wrapper">

                     <!-- 5 card item -->
                     <div class="card-item">
                        <a href="#">
                           <div class="card-image">
                              <img style="width: 100%; height: 100%;" src="./assets/img/top100/nhacAuMy/top100_nhacAudiophile.png" alt="">
                              <div class="show-effect">
                                 <i class="fa-regular fa-heart"></i>
                                 <i class="fas fa-play"></i>
                                 <i class="fas fa-ellipsis-h"></i>
                              </div>
                           </div>
                        </a>
                        <div class="card-info">
                           <div class="card-name">
                              <a href="#">Top 100 Nh???c Audiophile ??u...</a>
                           </div>
                           <div class="card-artists">
                              <a href="#">Bobby Vinton</a>,
                              <a href="#">Herman's Hermits</a>,
                              <a href="#">Matt Monro</a>...
                           </div>
                        </div>
                     </div>
                     <div class="card-item">
                        <a href="#">
                           <div class="card-image">
                              <img style="width: 100%; height: 100%;" src="./assets/img/top100/nhacAuMy/top100_nhacFolk.png" alt="">
                              <div class="show-effect">
                                 <i class="fa-regular fa-heart"></i>
                                 <i class="fas fa-play"></i>
                                 <i class="fas fa-ellipsis-h"></i>
                              </div>
                           </div>

                        </a>
                        <div class="card-info">
                           <div class="card-name">
                              <a href="#">Top 100 Nh???c Folk ??u M??? Hay...</a>
                           </div>
                           <div class="card-artists">
                              <a href="#">Lydia Cole</a>,
                              <a href="#">The Paper Kites</a>,
                              <a href="#">Aoife O'Donovan</a>...
                           </div>

                        </div>
                     </div>
                     <div class="card-item">
                        <a href="#">
                           <div class="card-image">
                              <img style="width: 100%; height: 100%;" src="./assets/img/top100/nhacAuMy/top100_nhacBlueJazz.png" alt="">
                              <div class="show-effect">
                                 <i class="fa-regular fa-heart"></i>
                                 <i class="fas fa-play"></i>
                                 <i class="fas fa-ellipsis-h"></i>
                              </div>
                           </div>

                        </a>
                        <div class="card-info">
                           <div class="card-name">
                              <a href="#">Top 100 Nh???c Blue/Jazz ??u...</a>
                           </div>
                           <div class="card-artists">
                              <a href="#">Eartha Kitt</a>,
                              <a href="#">Pablo Cepeda</a>,
                              <a href="#">Lynn Blessing</a>...
                           </div>

                        </div>
                     </div>
                     <div class="card-item">
                        <a href="#">
                           <div class="card-image">
                              <img style="width: 100%; height: 100%;" src="./assets/img/top100/nhacAuMy/top100_nhacTrance_house_techno.png" alt="">
                              <div class="show-effect">
                                 <i class="fa-regular fa-heart"></i>
                                 <i class="fas fa-play"></i>
                                 <i class="fas fa-ellipsis-h"></i>
                              </div>
                           </div>

                        </a>
                        <div class="card-info">
                           <div class="card-name">
                              <a href="#">Top 100 Nh???c...</a>
                           </div>
                           <div class="card-artists">
                              <a href="#">Alan Walker</a>,
                              <a href="#">K-391</a>,
                              <a href="#">Emelie Hollow</a>...
                           </div>

                        </div>
                     </div>
                     <div class="card-item">
                        <a href="#">
                           <div class="card-image">
                              <img style="width: 100%; height: 100%;" src="./assets/img/top100/nhacAuMy/top100_nhacIndie.png" alt="">
                              <div class="show-effect">
                                 <i class="fa-regular fa-heart"></i>
                                 <i class="fas fa-play"></i>
                                 <i class="fas fa-ellipsis-h"></i>
                              </div>
                           </div>

                        </a>
                        <div class="card-info">
                           <div class="card-name">
                              <a href="#">Top 100 Nh???c Indie ??u M???...</a>
                           </div>
                           <div class="card-artists">
                              <a href="#">Au/Ra</a>,
                              <a href="#">Luke Hemmings</a>,
                              <a href="#">Declan McKenna</a>...
                           </div>

                        </div>
                     </div>
                     <!-- 5 card item -->
                     <div class="card-item">
                        <a href="#">
                           <div class="card-image">
                              <img style="width: 100%; height: 100%;" src="./assets/img/top100/nhacAuMy/top100_nhacChristian&Gospel.png" alt="">
                              <div class="show-effect">
                                 <i class="fa-regular fa-heart"></i>
                                 <i class="fas fa-play"></i>
                                 <i class="fas fa-ellipsis-h"></i>
                              </div>
                           </div>
                        </a>
                        <div class="card-info">
                           <div class="card-name">
                              <a href="#">Top 100 Nh???c Christian &...</a>
                           </div>
                           <div class="card-artists">
                              <a href="#">Rhett Walker</a>,
                              <a href="#">Pentatonix</a>,
                              <a href="#">Justin Bieber</a>...
                           </div>
                        </div>
                     </div>
                     <div class="card-item">
                        <a href="#">
                           <div class="card-image">
                              <img style="width: 100%; height: 100%;" src="./assets/img/top100/nhacAuMy/top100_nhacPhimAuMy.png" alt="">
                              <div class="show-effect">
                                 <i class="fa-regular fa-heart"></i>
                                 <i class="fas fa-play"></i>
                                 <i class="fas fa-ellipsis-h"></i>
                              </div>
                           </div>

                        </a>
                        <div class="card-info">
                           <div class="card-name">
                              <a href="#">Top 100 Nh???c Phim ??u M???...</a>
                           </div>
                           <div class="card-artists">
                              <a href="#">Lionel Richie</a>,
                              <a href="#">Ariana Grande</a>,
                              <a href="#">Low Roar</a>...
                           </div>

                        </div>
                     </div>
                     <div class="card-item">
                        <a href="#">
                           <div class="card-image">
                              <img style="width: 100%; height: 100%;" src="./assets/img/top100/nhacAuMy/top100_nhacR&B.png" alt="">
                              <div class="show-effect">
                                 <i class="fa-regular fa-heart"></i>
                                 <i class="fas fa-play"></i>
                                 <i class="fas fa-ellipsis-h"></i>
                              </div>
                           </div>

                        </a>
                        <div class="card-info">
                           <div class="card-name">
                              <a href="#">Top 100 Nh???c R&B ??u M??? Hay...</a>
                           </div>
                           <div class="card-artists">
                              <a href="#">Giveon</a>,
                              <a href="#">Khalid</a>,
                              <a href="#">Nicki Minaj</a>...
                           </div>

                        </div>
                     </div>
                     <div class="card-item">
                        <a href="#">
                           <div class="card-image">
                              <img style="width: 100%; height: 100%;" src="./assets/img/top100/top100_edm.png" alt="">
                              <div class="show-effect">
                                 <i class="fa-regular fa-heart"></i>
                                 <i class="fas fa-play"></i>
                                 <i class="fas fa-ellipsis-h"></i>
                              </div>
                           </div>

                        </a>
                        <div class="card-info">
                           <div class="card-name">
                              <a href="#">Top 100 Nh???c EDM...</a>
                           </div>
                           <div class="card-artists">
                              <a href="#">Alan Walker</a>,
                              <a href="#">K-391</a>,
                              <a href="#">Emelie Hollow</a>...
                           </div>

                        </div>
                     </div>
                     <div class="card-item">
                        <a href="#">
                           <div class="card-image">
                              <img style="width: 100%; height: 100%;" src="./assets/img/top100/nhacAuMy/top100_nhacCountry.png" alt="">
                              <div class="show-effect">
                                 <i class="fa-regular fa-heart"></i>
                                 <i class="fas fa-play"></i>
                                 <i class="fas fa-ellipsis-h"></i>
                              </div>
                           </div>

                        </a>
                        <div class="card-info">
                           <div class="card-name">
                              <a href="#">Top 100 Nh???c Country ??u M???...</a>
                           </div>
                           <div class="card-artists">
                              <a href="#">Taylor Swift</a>,
                              <a href="#">Mitchell Tenpenny</a>,
                              <a href="#">Walker Hayes</a>...
                           </div>

                        </div>
                     </div>
                     <!-- 5 card item -->
                     <div class="card-item">
                        <a href="#">
                           <div class="card-image">
                              <img style="width: 100%; height: 100%;" src="./assets/img/top100/nhacAuMy/top100_nhacRapAuMy.png" alt="">
                              <div class="show-effect">
                                 <i class="fa-regular fa-heart"></i>
                                 <i class="fas fa-play"></i>
                                 <i class="fas fa-ellipsis-h"></i>
                              </div>
                           </div>
                        </a>
                        <div class="card-info">
                           <div class="card-name">
                              <a href="#">Top 100 Nh???c Rap/Hip Hop...</a>
                           </div>
                           <div class="card-artists">
                              <a href="#">Post Malone</a>,
                              <a href="#">24KGoldn</a>,
                              <a href="#">Lil Nas X</a>...
                           </div>
                        </div>
                     </div>
                     <div class="card-item">
                        <a href="#">
                           <div class="card-image">
                              <img style="width: 100%; height: 100%;" src="./assets/img/top100/nhacAuMy/top100_nhacRockAuMy.png" alt="">
                              <div class="show-effect">
                                 <i class="fa-regular fa-heart"></i>
                                 <i class="fas fa-play"></i>
                                 <i class="fas fa-ellipsis-h"></i>
                              </div>
                           </div>

                        </a>
                        <div class="card-info">
                           <div class="card-name">
                              <a href="#">Top 100 Nh???c Rock ??u M???...</a>
                           </div>
                           <div class="card-artists">
                              <a href="#">Simple Plan</a>,
                              <a href="#">Foo Fighters</a>,
                              <a href="#">The Script</a>...
                           </div>

                        </div>
                     </div>
                     <div class="card-item">
                        <a href="#">
                           <div class="card-image">
                              <img style="width: 100%; height: 100%;" src="./assets/img/top100/top100_nhacAuMy.png" alt="">
                              <div class="show-effect">
                                 <i class="fa-regular fa-heart"></i>
                                 <i class="fas fa-play"></i>
                                 <i class="fas fa-ellipsis-h"></i>
                              </div>
                           </div>

                        </a>
                        <div class="card-info">
                           <div class="card-name">
                              <a href="#">Top 100 Pop ??u M??? Hay Nh???t...</a>
                           </div>
                           <div class="card-artists">
                              <a href="#">Adele</a>,
                              <a href="#">The Kid LAROI</a>,
                              <a href="#">Justin Bieber</a>...
                           </div>

                        </div>
                     </div>
                  </div>
               </div>

               <div class="card-container">
                  <h3 class="title">Nh???c H??a T???u</h3>

                  <div class="card-wrapper">

                     <div class="card-item">
                        <a href="#">
                           <div class="card-image">
                              <img style="width: 100%; height: 100%;" src="./assets/img/top100/nhacHoaTau/top100_nhacCuKhac.png" alt="">
                              <div class="show-effect">
                                 <i class="fa-regular fa-heart"></i>
                                 <i class="fas fa-play"></i>
                                 <i class="fas fa-ellipsis-h"></i>
                              </div>
                           </div>
                        </a>
                        <div class="card-info">
                           <div class="card-name">
                              <a href="#">Top 100 Nh???c H??a T???u Nh???c...</a>
                           </div>
                           <div class="card-artists">
                              <a href="#">Relax Lab</a>,
                              <a href="#">Igor Krutoy</a>,
                              <a href="#">Toshiro Masuda</a>...
                           </div>
                        </div>
                     </div>
                     <div class="card-item">
                        <a href="#">
                           <div class="card-image">
                              <img style="width: 100%; height: 100%;" src="./assets/img/top100/nhacHoaTau/top100_nhacNewAge&WorldMusic.png" alt="">
                              <div class="show-effect">
                                 <i class="fa-regular fa-heart"></i>
                                 <i class="fas fa-play"></i>
                                 <i class="fas fa-ellipsis-h"></i>
                              </div>
                           </div>

                        </a>
                        <div class="card-info">
                           <div class="card-name">
                              <a href="#">Top 100 H??a T???u New Age /...</a>
                           </div>
                           <div class="card-artists">
                              <a href="#">Louie Ocampo</a>,
                              <a href="#">Bandari</a>,
                              <a href="#">Richard Clayderman</a>...
                           </div>

                        </div>
                     </div>
                     <div class="card-item">
                        <a href="#">
                           <div class="card-image">
                              <img style="width: 100%; height: 100%;" src="./assets/img/top100/nhacHoaTau/top100_nhacSaxophone.png" alt="">
                              <div class="show-effect">
                                 <i class="fa-regular fa-heart"></i>
                                 <i class="fas fa-play"></i>
                                 <i class="fas fa-ellipsis-h"></i>
                              </div>
                           </div>

                        </a>
                        <div class="card-info">
                           <div class="card-name">
                              <a href="#">Top 100 Nh???c H??a T???u Nh???c...</a>
                           </div>
                           <div class="card-artists">
                              <a href="#">??inh Quang Minh</a>,
                              <a href="#">????ng H??a</a>,
                              <a href="#">Kenny G</a>...
                           </div>

                        </div>
                     </div>
                     <div class="card-item">
                        <a href="#">
                           <div class="card-image">
                              <img style="width: 100%; height: 100%;" src="./assets/img/top100/nhacHoaTau/top100_nhacCello.png" alt="">
                              <div class="show-effect">
                                 <i class="fa-regular fa-heart"></i>
                                 <i class="fas fa-play"></i>
                                 <i class="fas fa-ellipsis-h"></i>
                              </div>
                           </div>

                        </a>
                        <div class="card-info">
                           <div class="card-name">
                              <a href="#">Top 100 Nh???c H??a T???u Nh???c...</a>
                           </div>
                           <div class="card-artists">
                              <a href="#">David Darling</a>,
                              <a href="#">The Piano Guys</a>,
                              <a href="#">Yo-Yo Ma</a>...
                           </div>

                        </div>
                     </div>
                     <div class="card-item">
                        <a href="#">
                           <div class="card-image">
                              <img style="width: 100%; height: 100%;" src="./assets/img/top100/nhacHoaTau/top100_nhacViolin.png" alt="">
                              <div class="show-effect">
                                 <i class="fa-regular fa-heart"></i>
                                 <i class="fas fa-play"></i>
                                 <i class="fas fa-ellipsis-h"></i>
                              </div>
                           </div>

                        </a>
                        <div class="card-info">
                           <div class="card-name">
                              <a href="#">Top 100 Nh???c H??a T???u Nh???c...</a>
                           </div>
                           <div class="card-artists">
                              <a href="#">Hi???n L??</a>,
                              <a href="#">Yanni</a>,
                              <a href="#">Jmi</a>...
                           </div>

                        </div>
                     </div>
                     <div class="card-item">
                        <a href="#">
                           <div class="card-image">
                              <img style="width: 100%; height: 100%;" src="./assets/img/top100/nhacHoaTau/top100_nhacGuitar.png" alt="">
                              <div class="show-effect">
                                 <i class="fa-regular fa-heart"></i>
                                 <i class="fas fa-play"></i>
                                 <i class="fas fa-ellipsis-h"></i>
                              </div>
                           </div>

                        </a>
                        <div class="card-info">
                           <div class="card-name">
                              <a href="#">Top 100 Nh???c H??a T???u Nh???c...</a>
                           </div>
                           <div class="card-artists">
                              <a href="#">??inh Quang Minh</a>,
                              <a href="#">????ng H??a</a>,
                              <a href="#">Francis Goya</a>...
                           </div>

                        </div>
                     </div>
                     <div class="card-item">
                        <a href="#">
                           <div class="card-image">
                              <img style="width: 100%; height: 100%;" src="./assets/img/top100/nhacHoaTau/top100_nhacPiano.png" alt="">
                              <div class="show-effect">
                                 <i class="fa-regular fa-heart"></i>
                                 <i class="fas fa-play"></i>
                                 <i class="fas fa-ellipsis-h"></i>
                              </div>
                           </div>

                        </a>
                        <div class="card-info">
                           <div class="card-name">
                              <a href="#">Top 100 Nh???c H??a T???u Nh???c...</a>
                           </div>
                           <div class="card-artists">
                              <a href="#">V?? ?????ng Qu???c Vi???t</a>,
                              <a href="#">Relax Lab</a>,
                              <a href="#">Yiruma</a>...
                           </div>

                        </div>
                     </div>
                     <div class="card-item">
                        <a href="#">
                           <div class="card-image">
                              <img style="width: 100%; height: 100%;" src="./assets/img/top100/nhacHoaTau/top100_HoaTauCoDien.png" alt="">
                              <div class="show-effect">
                                 <i class="fa-regular fa-heart"></i>
                                 <i class="fas fa-play"></i>
                                 <i class="fas fa-ellipsis-h"></i>
                              </div>
                           </div>

                        </a>
                        <div class="card-info">
                           <div class="card-name">
                              <a href="#">Top 100 Nh???c H??a T???u C???...</a>
                           </div>
                           <div class="card-artists">
                              <a href="#">Contempo-Divo</a>,
                              <a href="#">?????????</a>,
                              <a href="#">Hawa</a>...
                           </div>

                        </div>
                     </div>
                  </div>
               </div>

            </div>



         </div>
      </div>
      <!-- End trang top 100 -->


   </div>
   <!-- End grid 2: -->







   <!-- Start thanh ph??t nh???c b??n d?????i -->
   <div class="app-player">
      <div class="player-left">
         <div class="player-left-top">
            <div class="cd">
               <div class="cd-thumb">

               </div>
            </div>
            <footer>
               <!-- <h4>Now playing:</h4> -->
               <h2 class="song-name">String 57th & 9th</h2>
               <h2 class="singer">String 57th & 9th</h2>
            </footer>
            <!-- <img src="{{ url('/img/music-avatar.jpg') }}" alt="" class="album-art"> -->
         </div>

         <div class="player-left-bottom">
            <div class="time-container">
               <input id="progress" class="progress" type="range" value="0" step="1" min="0" max="100">
               <audio id="audio" src=""></audio>
               <div class="timer">
                  <div class="current-time">01:00</div>
                  <div class="duration-time">03:20</div>

               </div>
            </div>

            <div class="control-container">
               <div class="btn btn-repeat">
                  <i class="fas fa-redo"></i>
               </div>
               <div class="btn btn-prev">
                  <i class="fas fa-step-backward"></i>
               </div>
               <div class="btn btn-toggle-play">
                  <i class="fas fa-pause icon-pause"></i>
                  <i class="fas fa-play icon-play"></i>
               </div>
               <div class="btn btn-next">
                  <i class="fas fa-step-forward"></i>
               </div>
               <div class="btn btn-random">
                  <i class="fas fa-random"></i>
               </div>
            </div>

         </div>
         <div class="right-side" style="height: 100%; width:100%"></div>
      </div>
   </div>
   <!-- End thanh ph??t nh???c b??n d?????i -->

   <script src="{{url('/assets/js/ca_nhan.js')}}"></script>
   <script src="{{url('/assets/js/change_tab.js')}}"></script>
   <script src="{{url('assets/js/openFormLoginAndSignUp.js')}}"></script>

</body>

</html>