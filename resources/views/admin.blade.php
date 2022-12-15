<!-- <!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
   <title>{{$title}}</title>
</head>

<body>
   <table class="table table-bordered">
      <thead>
         <tr>
            <th>id</th>
            <th>name</th>
            <th>singer</th>
            <th>path</th>
            <th>image</th>
            <th width="5%">Edit</th>
            <th width="5%">Remove</th>
         </tr>
      </thead>
      <tbody @foreach ($musics as $key=> $item)
         <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->singer}}</td>
            <td class="col_path">{{$item->path}}</td>
            <td>{{$item->image}}</td>
            <td>
               <a href="{{route('admin.edit', ['id' => $item->id])}}" class="btn btn-warning btn-sm">Edit</a>
            </td>
            <td>
               <a onclick="return confirm('Bạn có chắc chắn muốn xoá')" href="{{route('admin.delete', ['id' => $item->id])}}" class="btn btn-danger btn-sm">Remove</a>
            </td>
         </tr>

      </tbody>
      @endforeach
   </table>
   <a href="{{route('admin.add')}}" class="btn btn-primary">Add</a>
   <script src="{{url('/assets/js/ca_nhan.js')}}">
   </script>
</body>

</html> -->

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
   <link rel="stylesheet" href="{{url('/assets/font/font/css/all.css')}}">

   <link rel="stylesheet" href="{{url('/assets/css/khampha.css')}}">

   <link rel="stylesheet" href="{{url('/assets/css/ca_nhan.css')}}">

   <link rel="stylesheet" href="{{url('/assets/css/the_loai.css')}}">

   <link rel="stylesheet" href="{{url('/assets/css/top100.css')}}">

   <link rel="stylesheet" href="{{url('/assets/css/login_form.css')}}">

   <link rel="stylesheet" href="{{url('/assets/css/top100_editForm.css')}}">


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
            <input id="username" type="text" class="login-input" placeholder="Enter username" required>

            <label for="login-password" class="login-label">
               Password
            </label>
            <input id="login-password" type="password" class="login-input" placeholder="Enter password" required>

            <button type="submit" id="login">
               Login <i class="fa-solid fa-check"></i>
            </button>
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

   <!-- Grid 1: Start chứa menu sidebar bên trái -->
   <div class="grid-1">
      <div class="sidebar">
         <div class="logo-brand pl-35">
            <img onclick="changeTo_tabCaNhan()" src="{{url('assets/img/assets-khampha/logo.png')}}" width="100"
               height="100%" alt="logo brand">
         </div>
         <!-- menu 1 -->
         <div class="nav-menu-1">
            <a class="ca-nhan" href="#" onclick="changeTo_tabCaNhan()">
               <div class="nav-icon"><i class="fa-solid fa-person"></i></div>
               <span>Cá nhân</span>
            </a>
            <a class="kham-pha" href="#" onclick="changeTo_tabKhamPha()">
               <div class="nav-icon"><i class="fa-solid fa-music"></i></div>
               <span>Khám phá</span>
            </a>
            <a class="chart" href="#" onclick="changeTo_tabChart()">
               <div class="nav-icon"><i class="fa-solid fa-chart-simple"></i></div>
               <span>#Chart</span>
            </a>
            <!-- <a class="theo-doi" href="#">
                  <div class="nav-icon"><i class="fa-sharp fa-solid fa-lines-leaning"></i></div>
                  <span>Theo dõi</span>
               </a> -->

         </div>
         <div class="divider"></div>
         <!-- menu 2 -->
         <div class="nav-menu-2">
            <a class="nhac-moi" href="#" onclick="changeTo_tabNhacMoi()">
               <div class="nav-icon"><i class="fa-solid fa-record-vinyl"></i></div>
               <span>Nhạc mới</span>
            </a>
            <a class="the-loai" href="#" onclick="changeTo_tabTheLoai()">
               <div class="nav-icon"><i class="fa-solid fa-radio"></i></div>
               <span>Thể loại</span>
            </a>
            <a class="top-100" href="#" onclick="changeTo_tabTop100()">
               <div class="nav-icon"><i class="fa-solid fa-award"></i></div>
               <span>Top 100</span>
            </a>
         </div>
      </div>
      
      <!-- Begin: Button Login and Sign Up -->
      <!-- <div id="login_and_signup">
         <div class="login-text">Đăng nhập để khám phá playlist dành riêng cho bạn</div>
         <button class="btn-login js-action-login s-full-width">Đăng nhập</button>
      </div>

      <div id="login_and_signup">
         <div class="login-text">Nghe nhạc không giới hạn cùng kho nhạc VIP</div>
         <button class="btn-login js-action-signUp s-full-width">Đăng ký</button>
      </div> -->
      <!-- End: Button Login and Sign Up -->
   </div>
   <!-- Grid 1: End chứa menu sidebar bên trái -->

<!-- Start grid 2: -->
   <div class="grid-2">

      <!-- Start header chứa thanh tìm kiếm -->
      <div class="header-top">
         <div class="search-bar">
            <input type="text" alt="Tìm kiếm" placeholder="Tìm kiếm bài hát, nghệ sĩ, lời bài hát...">
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
               <span>Admin</span>
            </a>
            <form action="http://127.0.0.1:8000/">
               <button class="btn-logout">Đăng xuất</button>
            </form>
         </div>
      </div>
      <!-- End header chứa thanh tìm kiếm -->


      <!-- Start trang cá nhân -->
      <div id="tabCaNhan">
         <table class="table table_admin table-bordered" style="width:98%;">
            <thead>
               <tr>
                  <th>id</th>
                  <th>name</th>
                  <th>singer</th>
                  <th>path</th>
                  <th>image</th>
                  <th width="5%">Edit</th>
                  <th width="5%">Remove</th>
               </tr>
            </thead>
            <tbody @foreach ($musics as $key=> $item)
               <tr>
                  <td>{{$item->id}}</td>
                  <td class="table-data-musics-name">{{$item->name}}</td>
                  <td class="table-data-musics-singer">{{$item->singer}}</td>
                  <td class="table-data-musics-path">{{$item->path}}</td>
                  <td class="table-data-musics-image">{{$item->image}}</td>
                  <td>
                     <a href="{{route('admin.edit', ['id' => $item->id])}}" class="btn btn-warning btn-sm">Edit</a>
                  </td>
                  <td>
                     <a onclick="return confirm('Bạn có chắc chắn muốn xoá')" href="{{route('admin.delete', ['id' => $item->id])}}" class="btn btn-danger btn-sm">Remove</a>
                  </td>
               </tr>

            </tbody>
            @endforeach
         </table>
         <a href="{{route('admin.add')}}" class="btn btn-primary">Add</a>

         <span class="testTEXT" style="color: azure;"></span>
         <div class="player-container">
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
      <!-- End trang cá nhân -->

      <!-- Start trang khám phá -->
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
               <h2>Hot Hit Hôm Nay</h2>
            </div>
            <div class="playlist--carousel">
               <div class="pl-element">
                  <div class="element--head">
                     <img src="./assets/img/assets-khampha/hothit1.webp" alt="">
                     <div class="func--play"><i class="fa-regular fa-circle-play"></i></div>
                     <div class="overlay"></div>
                  </div>
                  <div class="element--title">
                     <h3>Nhạc của Vũ</h3>
                     <p>Những ca khúc buồn hay nhất của Vũ huhuhu:(</p>
                  </div>
               </div>
               <div class="pl-element">
                  <div class="element--head">
                     <img src="./assets/img/assets-khampha/hothit2.webp" alt="">
                     <div class="func--play"><i class="fa-regular fa-circle-play"></i></div>
                     <div class="overlay"></div>
                  </div>
                  <div class="element--title">
                     <h3>Nhạc của Vũ</h3>
                     <p>Những ca khúc buồn hay nhất của Vũ huhuhu:(</p>
                  </div>
               </div>
               <div class="pl-element">
                  <div class="element--head">
                     <img src="./assets/img/assets-khampha/hothit3.webp" alt="">
                     <div class="func--play"><i class="fa-regular fa-circle-play"></i></div>
                     <div class="overlay"></div>
                  </div>
                  <div class="element--title">
                     <h3>Nhạc của Vũ</h3>
                     <p>Những ca khúc buồn hay nhất của Vũ huhuhu:(</p>
                  </div>
               </div>
               <div class="pl-element">
                  <div class="element--head">
                     <img src="./assets/img/assets-khampha/hothit4.webp" alt="">
                     <div class="func--play"><i class="fa-regular fa-circle-play"></i></div>
                     <div class="overlay"></div>
                  </div>
                  <div class="element--title">
                     <h3>Nhạc của Vũ</h3>
                     <p>Những ca khúc buồn hay nhất của Vũ huhuhu:(</p>
                  </div>
               </div>
               <div class="pl-element">
                  <div class="element--head">
                     <img src="./assets/img/assets-khampha/hothit5.webp" alt="">
                     <div class="func--play"><i class="fa-regular fa-circle-play"></i></div>
                     <div class="overlay"></div>
                  </div>
                  <div class="element--title">
                     <h3>Nhạc của Vũ</h3>
                     <p>Những ca khúc buồn hay nhất của Vũ huhuhu:(</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- End trang khám phá -->


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
                                 <div class="playlist__song-thumb media__thumb mr-10"
                                    style="background: url('./assets/img/Zingchart/phuongly.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img"
                                          style="background: url('./assets/img/Zingchart/phuongly.jpg') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">Chưa Bao Giờ Em
                                       Quên</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">Hương Ly</a>

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
                                 <div class="playlist__song-thumb media__thumb mr-10"
                                    style="background: url('./assets/img/Zingchart/yeulacuoi.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img"
                                          style="background: url('./assets/img/Zingchart/yeulacuoi.jpg') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">Yêu Là Cưới</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">Phát Hồ</a>,

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
                                    <span class="playlist__song-title info__title">Em Là Con Thuyền Cô
                                       Đơn</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">Thái Học</a>

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
                                 <div class="playlist__song-thumb media__thumb mr-10"
                                    style="background: url('./assets/img/Zingchart/khuemoclong.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img"
                                          style="background: url('./assets/img/Zingchart/khuemoclong.jpg') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">Khuê Mộc Lang</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">Hương Ly</a>,

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
                                    <span class="playlist__song-title info__title">Yêu Là Cưới
                                       (Remix)</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">Phát Hồ</a>,

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
                                 <div class="playlist__song-thumb media__thumb mr-10"
                                    style="background: url('./assets/img/Zingchart/thaylong.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img"
                                          style="background: url('./assets/img/Zingchart/thaylong.jpg') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">Thay Lòng</span>
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
                                 <div class="playlist__song-thumb media__thumb mr-10"
                                    style="background: url('./assets/img/Zingchart/roitoiluon.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img"
                                          style="background: url('./assets/img/Zingchart/roitoiluon.jpg') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">Rồi Tới Luôn</span>
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
                                 <div class="playlist__song-thumb media__thumb mr-10"
                                    style="background: url('./assets/img/Zingchart/tinhyeugoilachiatay.jpg') no-repeat center center / cover">
                                    <div class="thumb--animate">
                                       <div class="thumb--animate-img"
                                          style="background: url('./assets/img/Zingchart/tinhyeugoilachiatay.jpg') no-repeat 50% / contain">
                                       </div>
                                    </div>
                                    <div class="play-song--actions">
                                       <div class="control-btn btn-toggle-play1">
                                          <i class="fa-solid fa-play"></i>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="playlist__song-body media__info">
                                    <span class="playlist__song-title info__title">Có Một Tình Yêu Gọi Là
                                       Chia
                                       Tay</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">Tăng Phúc</a>,

                                       <a href="#" class="is-ghost">Trương Thảo Nhi</a>

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
                                 <div class="playlist__song-thumb media__thumb mr-10"
                                    style="background: url('./assets/img/Zingchart/phuongly.jpg') no-repeat center center / cover">
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
                                    <span class="playlist__song-title info__title">Cưới Luôn Được
                                       Không?</span>
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
                                 <div class="playlist__song-thumb media__thumb mr-10"
                                    style="background: url('./assets/img/tabCharts/chartSongRanks/song10.jpg') no-repeat center center / cover">
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
                                    <span class="playlist__song-title info__title">Bao Lâu Ta Lại Yêu Một
                                       Người</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">Doãn Hiếu</a>,

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
                                 <div class="playlist__song-thumb media__thumb mr-10"
                                    style="background: url('./assets/img/tabCharts/chartSongRanks/song11.jpg') no-repeat center center / cover">
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
                                    <span class="playlist__song-title info__title">Thương Nhau Tới
                                       Bến</span>
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
                                 <div class="playlist__song-thumb media__thumb mr-10"
                                    style="background: url('./assets/img/tabCharts/chartSongRanks/song12.jpg') no-repeat center center / cover">
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
                                    <span class="playlist__song-title info__title">Đông Phai Mờ Dáng
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
                                 <div class="playlist__song-thumb media__thumb mr-10"
                                    style="background: url('./assets/img/tabCharts/chartSongRanks/song13.jpg') no-repeat center center / cover">
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
                                    <span class="playlist__song-title info__title">Nhắn Rằng Anh Nhớ
                                       Em</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">Đình Dũng</a>,

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
                                    style="background: url('./assets/img/tabCharts/chartSongRanks/song14.jpg') no-repeat center center / cover">
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
                                    <span class="playlist__song-title info__title">Dịu Dàng Em Đến</span>
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
                                    style="background: url('./assets/img/tabCharts/chartSongRanks/song15.jpg') no-repeat center center / cover">
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
                                    <span class="playlist__song-title info__title">Em Hát Ai Nghe</span>
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
                                    style="background: url('./assets/img/tabCharts/chartSongRanks/song16.jpg') no-repeat center center / cover">
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
                                    <span class="playlist__song-title info__title">Vậy Là Ta Mất Nhau</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">Khải Đăng</a>

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
                                    style="background: url('./assets/img/tabCharts/chartSongRanks/song17.jpg') no-repeat center center / cover">
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
                                    <span class="playlist__song-title info__title">vâng anh đi đi (liu riu
                                       version)</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">Bích Phương</a>

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
                                    style="background: url('./assets/img/tabCharts/chartSongRanks/song18.jpg') no-repeat center center / cover">
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
                                    <span class="playlist__song-title info__title">Nếu Lúc Trước Em Đừng
                                       Tới</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">Phạm Đình Thái Ngân</a>,

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
                                    style="background: url('./assets/img/tabCharts/chartSongRanks/song19.jpg') no-repeat center center / cover">
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
                                    <span class="playlist__song-title info__title">Cô Đơn Dành Cho Ai</span>
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
                                    style="background: url('./assets/img/tabCharts/chartSongRanks/song20.jpg') no-repeat center center / cover">
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
                                    style="background: url('./assets/img/tabCharts/chartSongRanks/song21.jpg') no-repeat center center / cover">
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
                                    <span class="playlist__song-title info__title">Yêu Mà Chưa Dám
                                       Nói</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">Thanh Hưng</a>

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
                                    style="background: url('./assets/img/tabCharts/chartSongRanks/song22.jpg') no-repeat center center / cover">
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
                                    <span class="playlist__song-title info__title">Độ Tộc 2</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">Độ Mixi</a>,

                                       <a href="#" class="is-ghost">Pháo</a>,

                                       <a href="#" class="is-ghost">Phúc Du</a>,

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
                                    style="background: url('./assets/img/tabCharts/chartSongRanks/song23.jpg') no-repeat center center / cover">
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
                                    <span class="playlist__song-title info__title">Chiều Đồng Quê</span>
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
                                    style="background: url('./assets/img/tabCharts/chartSongRanks/song24.jpg') no-repeat center center / cover">
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
                                    <span class="playlist__song-title info__title">Túp Lều Vàng</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">Nguyễn Đình Vũ</a>,

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
                                    style="background: url('./assets/img/tabCharts/chartSongRanks/song25.jpg') no-repeat center center / cover">
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
                                    style="background: url('./assets/img/tabCharts/chartSongRanks/song26.jpg') no-repeat center center / cover">
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
                                    <span class="playlist__song-title info__title">Sai Cách Yêu</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">Lê Bảo Bình</a>

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
                                    style="background: url('./assets/img/tabCharts/chartSongRanks/song27.jpg') no-repeat center center / cover">
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
                                    <span class="playlist__song-title info__title">có hẹn với thanh
                                       xuân</span>
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
                                    style="background: url('./assets/img/tabCharts/chartSongRanks/song28.jpg') no-repeat center center / cover">
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
                                    <span class="playlist__song-title info__title">Em Nào Có Tội</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">Thương Võ</a>,

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
                                    style="background: url('./assets/img/tabCharts/chartSongRanks/song29.jpg') no-repeat center center / cover">
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
                                    <span class="playlist__song-title info__title">Nhắn Tới Khoảng Trời
                                       Em</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">Quân A.P</a>

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
                                    style="background: url('./assets/img/tabCharts/chartSongRanks/song30.jpg') no-repeat center center / cover">
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
                                    <span class="playlist__song-title info__title">Em Hứa Thế Nào</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">Như Việt</a>,

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



      <!-- Start trang nhạc mới -->
      <div id="tabNhacMoi">
         <div class="charts__container">
            <div class="grid">
               <div class="chart__container-header mb-40">
                  <h3 class="chart__header-name">NHẠC MỚI</h3>
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
                                    <span class="playlist__song-title info__title">Đừng Lo Nhé! Có Anh Đây</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">Thiên Tú</a>

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
                                    <span class="playlist__song-title info__title">Hơn Em Chỗ Nào</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">Thuỳ Chi</a>

                                       
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
                                    <span class="playlist__song-title info__title">Rồi Em Sẽ Ổn Thôi
                                       </span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">Bảo Uyên</a>,

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
                                    <span class="playlist__song-title info__title">Chung Đường Ngược Hướng</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">Thiên Ân</a>,

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
                                    <span class="playlist__song-title info__title">Phận Khách Sang Sông
                                       </span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">Lâm Chấn Hải</a>,

                                       

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
                                    <span class="playlist__song-title info__title">Đâu Biết Trước Chuyện Xa Nhau</span>
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
                                    <span class="playlist__song-title info__title">Anh Bước Ra Từ Manga</span>
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
                                    <span class="playlist__song-title info__title">Mất Bao Lâu Để Quên Một Người
                                       </span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">Quang Trung</a>,

                                       <a href="#" class="is-ghost">Ái Phương</a>

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
                                    <span class="playlist__song-title info__title">Càng Biết Càng Đau</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">Liz Kim Cương</a>

                                       

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
                                    <span class="playlist__song-title info__title">Một Ngày Mãi Mãi</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">Trang</a>,

                                       <a href="#" class="is-ghost">Tùng</a>

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
                                    <span class="playlist__song-title info__title">Luyến Lưu</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">Phát Hồ</a>

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
                                    <span class="playlist__song-title info__title">Chưa Đủ Để Giữ Em</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">Vương Anh Tú</a>

                                       

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
                                    <span class="playlist__song-title info__title">Nhắn Rằng Anh Nhớ
                                       Em</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">Đình Dũng</a>,

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
                                    <span class="playlist__song-title info__title">Dịu Dàng Em Đến</span>
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
                                    <span class="playlist__song-title info__title">Em Hát Ai Nghe</span>
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
                                    <span class="playlist__song-title info__title">Vậy Là Ta Mất Nhau</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">Khải Đăng</a>

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
                                    <span class="playlist__song-title info__title">Vâng anh đi đi (liu riu
                                       version)</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">Bích Phương</a>

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
                                    <span class="playlist__song-title info__title">Nếu Lúc Trước Em Đừng
                                       Tới</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">Phạm Đình Thái Ngân</a>,

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
                                    <span class="playlist__song-title info__title">Cô Đơn Dành Cho Ai</span>
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
                                    <span class="playlist__song-title info__title">Yêu Mà Chưa Dám
                                       Nói</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">Thanh Hưng</a>

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
                                    <span class="playlist__song-title info__title">Độ Tộc 2</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">Độ Mixi</a>,

                                       <a href="#" class="is-ghost">Pháo</a>,

                                       <a href="#" class="is-ghost">Phúc Du</a>,

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
                                    <span class="playlist__song-title info__title">Chiều Đồng Quê</span>
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
                                    <span class="playlist__song-title info__title">Túp Lều Vàng</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">Nguyễn Đình Vũ</a>,

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
                                    <span class="playlist__song-title info__title">Sai Cách Yêu</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">Lê Bảo Bình</a>

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
                                    <span class="playlist__song-title info__title">Có hẹn với thanh
                                       xuân</span>
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
                                    <span class="playlist__song-title info__title">Em Nào Có Tội</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">Thương Võ</a>,

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
                                    <span class="playlist__song-title info__title">Nhắn Tới Khoảng Trời
                                       Em</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">Quân A.P</a>

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
                                    <span class="playlist__song-title info__title">Em Hứa Thế Nào</span>
                                    <p class="playlist__song-author info__author">

                                       <a href="#" class="is-ghost">Như Việt</a>,

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
      <!-- End trang nhạc mới -->

      <!-- Start trang thể loại -->
      <div id="tabTheLoai">
         <div class="music-type-rec" style="margin-bottom: 75px;">
            <div class="main-img-board element--head">
               <img class="img-main" src="./assets/img/assets-the_loai/main_img_theloai.jpg" alt="">
            </div>

            <p class="type-title">Quốc gia</p>
            <div class="playlist--hot-hit white">
               <div class="playlist--carousel">
                  <div class="pl-element">
                     <div class="element--rec"
                        style="background-image: url('./assets/img/assets-the_loai/nhacviet.bmp');">
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
                     <div class="element--rec"
                        style="background-image: url('./assets/img/assets-the_loai/nhachan.bmp');">
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
                     <div class="element--rec"
                        style="background-image: url('./assets/img/assets-the_loai/nhachoa.bmp');">
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
                     <div class="element--rec"
                        style="background-image: url('./assets/img/assets-the_loai/nhacaumi.bmp');">
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
                        <h3>Indie Việt</h3>
                        <p>Nhạc Indie Việt hay nhất mọi thời đại</p>
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
                        <p>Ca khúc Mùa đông diệu kỳ lạnh hơn tấm lòng NYC của bạn</p>
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
                        <h3>Rap Việt ngày nay</h3>
                        <p>Vẫn là Rap nhưng mà bài này chiến lắm!</p>
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
                        <p>Tuyển tập những bài hát HOT nhất</p>
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
                        <h3>Thứ Sáu</h3>
                        <p>Những ca khúc buồn hay nhất của Vũ hũhũhũ:(</p>
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
                        <h3>Chí Dân</h3>
                        <p>Tuyển tập những ca khúc hay nhất của Chí Dân - Remix</p>
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
                        <h3>Hương Trâm</h3>
                        <p>Tuyển tập những ca khúc hay nhất của Hương Trâm - Remix</p>
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
                        <p>Tuyển tập những ca khúc hay nhất của Min - Remix</p>
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
                        <p>Tuyển tập những ca khúc hay nhất của Minzy - Remix</p>
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
                        <p>Tuyển tập những ca khúc hay nhất của OnlyC - Remix</p>
                     </div>
                  </div>
               </div>
            </div>

            <p class="type-title">Nhạc game</p>
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
                        <p>Nhạc game XCOM 2 - 'Squad Loadout'</p>
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
                        <p>Nhạc game Arknight - 'Void'</p>
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
                        <p>Nhạc game Horizon Zero Dawn - 'Horizon'</p>
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
                        <p>Nhạc game Genshin Impact - 'Dawn Winery'</p>
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
                        <p>Nhạc game God of War: Raknarok - 'GOWR'</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- End trang thể loại -->

      <!-- Start trang top 100 -->
      <div id="tabTop100">
         <div class="top_music">
            <div class="banner"></div>
            <div class="bg-blur"></div>
            <div class="bg-alpha"></div>
            <div class="bg-alpha-1"></div>

            <div class="card-section">

               <div class="card-container">
                  <h3 class="title">Nổi Bật</h3>

                  <div class="card-wrapper">

                     <div class="card-item">
                        <a href="#">
                           <div class="card-image">
                              <img style="width: 100%; height: 100%;" src="./assets/img/top100/top100_nhacTre.png"
                                 alt="">
                              <div class="show-effect">
                                 <i class="fa-regular fa-heart"></i>
                                 <i class="fas fa-play"></i>
                                 <i class="fas fa-ellipsis-h"></i>
                              </div>
                           </div>
                        </a>
                        <div class="card-info">
                           <div class="card-name">
                              <a href="#">Top 100 Bài Nhạc Trẻ Hay...</a>
                           </div>
                           <div class="card-artists">
                              <a href="#">MONO</a>,
                              <a href="#">Vương Anh Tú</a>,
                              <a href="#">Keyo</a>...
                           </div>
                        </div>
                        <div class="container-btn-top100-edit-Form">
                           <button class="btn-top100-edit-Form">Edit</button>                         
                        </div>
                        
                     </div>
                     <div class="card-item">
                        <a href="#">
                           <div class="card-image">
                              <img style="width: 100%; height: 100%;" src="./assets/img/top100/top100_nhacAuMy.png"
                                 alt="">
                              <div class="show-effect">
                                 <i class="fa-regular fa-heart"></i>
                                 <i class="fas fa-play"></i>
                                 <i class="fas fa-ellipsis-h"></i>
                              </div>
                           </div>

                        </a>
                        <div class="card-info">
                           <div class="card-name">
                              <a href="#">Top 100 Pop Âu Mỹ Hay Nhất...</a>
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
                              <img style="width: 100%; height: 100%;" src="./assets/img/top100/top100_nhacHanQuoc.png"
                                 alt="">
                              <div class="show-effect">
                                 <i class="fa-regular fa-heart"></i>
                                 <i class="fas fa-play"></i>
                                 <i class="fas fa-ellipsis-h"></i>
                              </div>
                           </div>

                        </a>
                        <div class="card-info">
                           <div class="card-name">
                              <a href="#">Top 100 Nhạc Hàn Quốc Hay...</a>
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
                              <a href="#">Top 100 Nhạc EDM...</a>
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
                              <img style="width: 100%; height: 100%;" src="./assets/img/top100/top100_rapVietNam.png"
                                 alt="">
                              <div class="show-effect">
                                 <i class="fa-regular fa-heart"></i>
                                 <i class="fas fa-play"></i>
                                 <i class="fas fa-ellipsis-h"></i>
                              </div>
                           </div>

                        </a>
                        <div class="card-info">
                           <div class="card-name">
                              <a href="#">Top 100 Nhạc Rap Việt Nam...</a>
                           </div>
                           <div class="card-artists">
                              <a href="#">HIEUTHUHAI</a>,
                              <a href="#">G5R Squad</a>,
                              <a href="#">Phúc Du</a>...
                           </div>

                        </div>
                     </div>




                  </div>
               </div>

               <div class="card-container">
                  <h3 class="title">Nhạc Việt Nam</h3>

                  <div class="card-wrapper">

                     <!-- 5 card item -->
                     <div class="card-item">
                        <a href="#">
                           <div class="card-image">
                              <img style="width: 100%; height: 100%;"
                                 src="./assets/img/top100/nhacVietNam/top100_edmViet.png" alt="">
                              <div class="show-effect">
                                 <i class="fa-regular fa-heart"></i>
                                 <i class="fas fa-play"></i>
                                 <i class="fas fa-ellipsis-h"></i>
                              </div>
                           </div>
                        </a>
                        <div class="card-info">
                           <div class="card-name">
                              <a href="#">Top 100 Nhạc EDM Việt Hay...</a>
                           </div>
                           <div class="card-artists">
                              <a href="#">Masawe</a>,
                              <a href="#">Pháo</a>,
                              <a href="#">CM1X</a>...
                           </div>
                        </div>
                     </div>
                     <div class="card-item">
                        <a href="#">
                           <div class="card-image">
                              <img style="width: 100%; height: 100%;"
                                 src="./assets/img/top100/nhacVietNam/top_100Vpop.png" alt="">
                              <div class="show-effect">
                                 <i class="fa-regular fa-heart"></i>
                                 <i class="fas fa-play"></i>
                                 <i class="fas fa-ellipsis-h"></i>
                              </div>
                           </div>

                        </a>
                        <div class="card-info">
                           <div class="card-name">
                              <a href="#">Top 100 Nhạc V-Pop Hay Nhất...</a>
                           </div>
                           <div class="card-artists">
                              <a href="#">MONO</a>,
                              <a href="#">Vương Anh Tú</a>,
                              <a href="#">Keyo</a>...
                           </div>

                        </div>
                     </div>
                     <div class="card-item">
                        <a href="#">
                           <div class="card-image">
                              <img style="width: 100%; height: 100%;"
                                 src="./assets/img/top100/nhacVietNam/top100_nhacPhimVietNam.png" alt="">
                              <div class="show-effect">
                                 <i class="fa-regular fa-heart"></i>
                                 <i class="fas fa-play"></i>
                                 <i class="fas fa-ellipsis-h"></i>
                              </div>
                           </div>

                        </a>
                        <div class="card-info">
                           <div class="card-name">
                              <a href="#">Top 100 Nhạc Phim Việt Nam...</a>
                           </div>
                           <div class="card-artists">
                              <a href="#">Hùng Cường</a>,
                              <a href="#">Lưu Ánh Loan</a>,
                              <a href="#">Việt Hòa</a>...
                           </div>

                        </div>
                     </div>
                     <div class="card-item">
                        <a href="#">
                           <div class="card-image">
                              <img style="width: 100%; height: 100%;"
                                 src="./assets/img/top100/nhacVietNam/top100_nhacTrinh.png" alt="">
                              <div class="show-effect">
                                 <i class="fa-regular fa-heart"></i>
                                 <i class="fas fa-play"></i>
                                 <i class="fas fa-ellipsis-h"></i>
                              </div>
                           </div>

                        </a>
                        <div class="card-info">
                           <div class="card-name">
                              <a href="#">Top 100 Nhạc Trịnh Hay Nhất...</a>
                           </div>
                           <div class="card-artists">
                              <a href="#">Hùng Cường</a>,
                              <a href="#">Lưu Ánh Loan</a>,
                              <a href="#">Việt Hòa</a>...
                           </div>

                        </div>
                     </div>
                     <div class="card-item">
                        <a href="#">
                           <div class="card-image">
                              <img style="width: 100%; height: 100%;"
                                 src="./assets/img/top100/nhacVietNam/top100_caiLuong.png" alt="">
                              <div class="show-effect">
                                 <i class="fa-regular fa-heart"></i>
                                 <i class="fas fa-play"></i>
                                 <i class="fas fa-ellipsis-h"></i>
                              </div>
                           </div>

                        </a>
                        <div class="card-info">
                           <div class="card-name">
                              <a href="#">Top 100 Cải Lương Hay Nhất...</a>
                           </div>
                           <div class="card-artists">
                              <a href="#">Cẩm Loan</a>,
                              <a href="#">Hoàn Lâm</a>,
                              <a href="#">Vy Thúy Hằng</a>...
                           </div>

                        </div>
                     </div>
                     <!-- 5 card item -->
                     <div class="card-item">
                        <a href="#">
                           <div class="card-image">
                              <img style="width: 100%; height: 100%;"
                                 src="./assets/img/top100/nhacVietNam/top100_nhacKhongLoi.png" alt="">
                              <div class="show-effect">
                                 <i class="fa-regular fa-heart"></i>
                                 <i class="fas fa-play"></i>
                                 <i class="fas fa-ellipsis-h"></i>
                              </div>
                           </div>
                        </a>
                        <div class="card-info">
                           <div class="card-name">
                              <a href="#">Top 100 Nhạc Không Lời Việt...</a>
                           </div>
                           <div class="card-artists">
                              <a href="#">Vũ Đặng Quốc Việt</a>,
                              <a href="#">Peto</a>,
                              <a href="#">Phương Thùy</a>...
                           </div>
                        </div>
                     </div>
                     <div class="card-item">
                        <a href="#">
                           <div class="card-image">
                              <img style="width: 100%; height: 100%;"
                                 src="./assets/img/top100/nhacVietNam/top100_nhacThieuNhi.png" alt="">
                              <div class="show-effect">
                                 <i class="fa-regular fa-heart"></i>
                                 <i class="fas fa-play"></i>
                                 <i class="fas fa-ellipsis-h"></i>
                              </div>
                           </div>

                        </a>
                        <div class="card-info">
                           <div class="card-name">
                              <a href="#">Top 100 Nhạc Thiếu Nhi Hay...</a>
                           </div>
                           <div class="card-artists">
                              <a href="#">Ngọc Khánh Chi</a>,
                              <a href="#">Bé Thanh Ngân</a>,
                              <a href="#">Chân</a>...
                           </div>

                        </div>
                     </div>
                     <div class="card-item">
                        <a href="#">
                           <div class="card-image">
                              <img style="width: 100%; height: 100%;"
                                 src="./assets/img/top100/nhacVietNam/top100_nhacQueHuong.png" alt="">
                              <div class="show-effect">
                                 <i class="fa-regular fa-heart"></i>
                                 <i class="fas fa-play"></i>
                                 <i class="fas fa-ellipsis-h"></i>
                              </div>
                           </div>

                        </a>
                        <div class="card-info">
                           <div class="card-name">
                              <a href="#">Top 100 Nhạc Quê Hương...</a>
                           </div>
                           <div class="card-artists">
                              <a href="#">Phi Nhung</a>,
                              <a href="#">Tố My</a>,
                              <a href="#">Dương Hồng Loan</a>...
                           </div>

                        </div>
                     </div>
                     <div class="card-item">
                        <a href="#">
                           <div class="card-image">
                              <img style="width: 100%; height: 100%;"
                                 src="./assets/img/top100/nhacVietNam/top100_nhacCachMang.png" alt="">
                              <div class="show-effect">
                                 <i class="fa-regular fa-heart"></i>
                                 <i class="fas fa-play"></i>
                                 <i class="fas fa-ellipsis-h"></i>
                              </div>
                           </div>

                        </a>
                        <div class="card-info">
                           <div class="card-name">
                              <a href="#">Top 100 Nhạc Cách Mạng...</a>
                           </div>
                           <div class="card-artists">
                              <a href="#">Trường Kha</a>,
                              <a href="#">Quang Hà</a>,
                              <a href="#">Tình Ca Việt</a>...
                           </div>

                        </div>
                     </div>
                     <div class="card-item">
                        <a href="#">
                           <div class="card-image">
                              <img style="width: 100%; height: 100%;"
                                 src="./assets/img/top100/nhacVietNam/top100_nhacDanceViet.png" alt="">
                              <div class="show-effect">
                                 <i class="fa-regular fa-heart"></i>
                                 <i class="fas fa-play"></i>
                                 <i class="fas fa-ellipsis-h"></i>
                              </div>
                           </div>

                        </a>
                        <div class="card-info">
                           <div class="card-name">
                              <a href="#">Top 100 Nhạc Dance Việt...</a>
                           </div>
                           <div class="card-artists">
                              <a href="#">CUKAK</a>,
                              <a href="#">Phát Hồ</a>,
                              <a href="#">DinhLong</a>...
                           </div>

                        </div>
                     </div>
                     <!-- 5 card item -->
                     <div class="card-item">
                        <a href="#">
                           <div class="card-image">
                              <img style="width: 100%; height: 100%;" src="./assets/img/top100/top100_rapVietNam.png"
                                 alt="">
                              <div class="show-effect">
                                 <i class="fa-regular fa-heart"></i>
                                 <i class="fas fa-play"></i>
                                 <i class="fas fa-ellipsis-h"></i>
                              </div>
                           </div>
                        </a>
                        <div class="card-info">
                           <div class="card-name">
                              <a href="#">Top 100 Nhạc Rap Việt Nam...</a>
                           </div>
                           <div class="card-artists">
                              <a href="#">HIEUTHUHAI</a>,
                              <a href="#">G5R Squad</a>,
                              <a href="#">Phúc Du</a>...
                           </div>
                        </div>
                     </div>
                     <div class="card-item">
                        <a href="#">
                           <div class="card-image">
                              <img style="width: 100%; height: 100%;"
                                 src="./assets/img/top100/nhacVietNam/top100_nhacRockViet.png" alt="">
                              <div class="show-effect">
                                 <i class="fa-regular fa-heart"></i>
                                 <i class="fas fa-play"></i>
                                 <i class="fas fa-ellipsis-h"></i>
                              </div>
                           </div>

                        </a>
                        <div class="card-info">
                           <div class="card-name">
                              <a href="#">Top 100 Nhạc Rock Việt Nam...</a>
                           </div>
                           <div class="card-artists">
                              <a href="#">7UPPERCUTS</a>,
                              <a href="#">The Cassette</a>,
                              <a href="#">ĐÁ SỐ TỚI</a>...
                           </div>

                        </div>
                     </div>
                     <div class="card-item">
                        <a href="#">
                           <div class="card-image">
                              <img style="width: 100%; height: 100%;"
                                 src="./assets/img/top100/nhacVietNam/top100_nhacTruTinh.png" alt="">
                              <div class="show-effect">
                                 <i class="fa-regular fa-heart"></i>
                                 <i class="fas fa-play"></i>
                                 <i class="fas fa-ellipsis-h"></i>
                              </div>
                           </div>

                        </a>
                        <div class="card-info">
                           <div class="card-name">
                              <a href="#">Top 100 Nhạc Trữ Tình Hay...</a>
                           </div>
                           <div class="card-artists">
                              <a href="#">Như Quỳnh</a>,
                              <a href="#">Mạnh Quỳnh</a>,
                              <a href="#">Đan Trường</a>...
                           </div>

                        </div>
                     </div>
                     <div class="card-item">
                        <a href="#">
                           <div class="card-image">
                              <img style="width: 100%; height: 100%;" src="./assets/img/top100/top100_nhacTre.png"
                                 alt="">
                              <div class="show-effect">
                                 <i class="fa-regular fa-heart"></i>
                                 <i class="fas fa-play"></i>
                                 <i class="fas fa-ellipsis-h"></i>
                              </div>
                           </div>

                        </a>
                        <div class="card-info">
                           <div class="card-name">
                              <a href="#">Top 100 Bài Hát Nhạc Trẻ Hay...</a>
                           </div>
                           <div class="card-artists">
                              <a href="#">MONO</a>,
                              <a href="#">Vương Anh Tú</a>,
                              <a href="#">Keyo</a>...
                           </div>

                        </div>
                     </div>


                  </div>
               </div>

               <div class="card-container">
                  <h3 class="title">Nhạc Châu Á</h3>

                  <div class="card-wrapper">

                     <div class="card-item">
                        <a href="#">
                           <div class="card-image">
                              <img style="width: 100%; height: 100%;"
                                 src="./assets/img/top100/nhacChauA/top100_nhacPhimHoaNgu.png" alt="">
                              <div class="show-effect">
                                 <i class="fa-regular fa-heart"></i>
                                 <i class="fas fa-play"></i>
                                 <i class="fas fa-ellipsis-h"></i>
                              </div>
                           </div>
                        </a>
                        <div class="card-info">
                           <div class="card-name">
                              <a href="#">Top 100 Nhạc Phim Hoa Ngữ...</a>
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
                              <img style="width: 100%; height: 100%;"
                                 src="./assets/img/top100/nhacChauA/top100_nhacPhimHanQuoc.png" alt="">
                              <div class="show-effect">
                                 <i class="fa-regular fa-heart"></i>
                                 <i class="fas fa-play"></i>
                                 <i class="fas fa-ellipsis-h"></i>
                              </div>
                           </div>

                        </a>
                        <div class="card-info">
                           <div class="card-name">
                              <a href="#">Top 100 Nhạc Phim Hàn Quốc...</a>
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
                              <img style="width: 100%; height: 100%;"
                                 src="./assets/img/top100/nhacChauA/top100_nhacHoaNgu.png" alt="">
                              <div class="show-effect">
                                 <i class="fa-regular fa-heart"></i>
                                 <i class="fas fa-play"></i>
                                 <i class="fas fa-ellipsis-h"></i>
                              </div>
                           </div>

                        </a>
                        <div class="card-info">
                           <div class="card-name">
                              <a href="#">Top 100 Nhạc Hoa Hay Nhất...</a>
                           </div>
                           <div class="card-artists">
                              <a href="#">A Nhũng</a>,
                              <a href="#">Mộng Nhiên</a>,
                              <a href="#">Danh Quyết</a>...
                           </div>

                        </div>
                     </div>
                     <div class="card-item">
                        <a href="#">
                           <div class="card-image">
                              <img style="width: 100%; height: 100%;"
                                 src="./assets/img/top100/nhacChauA/top100_nhacJpop.png" alt="">
                              <div class="show-effect">
                                 <i class="fa-regular fa-heart"></i>
                                 <i class="fas fa-play"></i>
                                 <i class="fas fa-ellipsis-h"></i>
                              </div>
                           </div>

                        </a>
                        <div class="card-info">
                           <div class="card-name">
                              <a href="#">Top 100 Nhạc Nhật Bản Hay...</a>
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
                              <img style="width: 100%; height: 100%;" src="./assets/img/top100/top100_nhacHanQuoc.png"
                                 alt="">
                              <div class="show-effect">
                                 <i class="fa-regular fa-heart"></i>
                                 <i class="fas fa-play"></i>
                                 <i class="fas fa-ellipsis-h"></i>
                              </div>
                           </div>

                        </a>
                        <div class="card-info">
                           <div class="card-name">
                              <a href="#">Top 100 Nhạc Hàn Quốc Hay...</a>
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
                  <h3 class="title">Nhạc Âu Mỹ</h3>

                  <div class="card-wrapper">

                     <!-- 5 card item -->
                     <div class="card-item">
                        <a href="#">
                           <div class="card-image">
                              <img style="width: 100%; height: 100%;"
                                 src="./assets/img/top100/nhacAuMy/top100_nhacAudiophile.png" alt="">
                              <div class="show-effect">
                                 <i class="fa-regular fa-heart"></i>
                                 <i class="fas fa-play"></i>
                                 <i class="fas fa-ellipsis-h"></i>
                              </div>
                           </div>
                        </a>
                        <div class="card-info">
                           <div class="card-name">
                              <a href="#">Top 100 Nhạc Audiophile Âu...</a>
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
                              <img style="width: 100%; height: 100%;"
                                 src="./assets/img/top100/nhacAuMy/top100_nhacFolk.png" alt="">
                              <div class="show-effect">
                                 <i class="fa-regular fa-heart"></i>
                                 <i class="fas fa-play"></i>
                                 <i class="fas fa-ellipsis-h"></i>
                              </div>
                           </div>

                        </a>
                        <div class="card-info">
                           <div class="card-name">
                              <a href="#">Top 100 Nhạc Folk Âu Mỹ Hay...</a>
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
                              <img style="width: 100%; height: 100%;"
                                 src="./assets/img/top100/nhacAuMy/top100_nhacBlueJazz.png" alt="">
                              <div class="show-effect">
                                 <i class="fa-regular fa-heart"></i>
                                 <i class="fas fa-play"></i>
                                 <i class="fas fa-ellipsis-h"></i>
                              </div>
                           </div>

                        </a>
                        <div class="card-info">
                           <div class="card-name">
                              <a href="#">Top 100 Nhạc Blue/Jazz Âu...</a>
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
                              <img style="width: 100%; height: 100%;"
                                 src="./assets/img/top100/nhacAuMy/top100_nhacTrance_house_techno.png" alt="">
                              <div class="show-effect">
                                 <i class="fa-regular fa-heart"></i>
                                 <i class="fas fa-play"></i>
                                 <i class="fas fa-ellipsis-h"></i>
                              </div>
                           </div>

                        </a>
                        <div class="card-info">
                           <div class="card-name">
                              <a href="#">Top 100 Nhạc...</a>
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
                              <img style="width: 100%; height: 100%;"
                                 src="./assets/img/top100/nhacAuMy/top100_nhacIndie.png" alt="">
                              <div class="show-effect">
                                 <i class="fa-regular fa-heart"></i>
                                 <i class="fas fa-play"></i>
                                 <i class="fas fa-ellipsis-h"></i>
                              </div>
                           </div>

                        </a>
                        <div class="card-info">
                           <div class="card-name">
                              <a href="#">Top 100 Nhạc Indie Âu Mỹ...</a>
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
                              <img style="width: 100%; height: 100%;"
                                 src="./assets/img/top100/nhacAuMy/top100_nhacChristian&Gospel.png" alt="">
                              <div class="show-effect">
                                 <i class="fa-regular fa-heart"></i>
                                 <i class="fas fa-play"></i>
                                 <i class="fas fa-ellipsis-h"></i>
                              </div>
                           </div>
                        </a>
                        <div class="card-info">
                           <div class="card-name">
                              <a href="#">Top 100 Nhạc Christian &...</a>
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
                              <img style="width: 100%; height: 100%;"
                                 src="./assets/img/top100/nhacAuMy/top100_nhacPhimAuMy.png" alt="">
                              <div class="show-effect">
                                 <i class="fa-regular fa-heart"></i>
                                 <i class="fas fa-play"></i>
                                 <i class="fas fa-ellipsis-h"></i>
                              </div>
                           </div>

                        </a>
                        <div class="card-info">
                           <div class="card-name">
                              <a href="#">Top 100 Nhạc Phim Âu Mỹ...</a>
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
                              <img style="width: 100%; height: 100%;"
                                 src="./assets/img/top100/nhacAuMy/top100_nhacR&B.png" alt="">
                              <div class="show-effect">
                                 <i class="fa-regular fa-heart"></i>
                                 <i class="fas fa-play"></i>
                                 <i class="fas fa-ellipsis-h"></i>
                              </div>
                           </div>

                        </a>
                        <div class="card-info">
                           <div class="card-name">
                              <a href="#">Top 100 Nhạc R&B Âu Mỹ Hay...</a>
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
                              <a href="#">Top 100 Nhạc EDM...</a>
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
                              <img style="width: 100%; height: 100%;"
                                 src="./assets/img/top100/nhacAuMy/top100_nhacCountry.png" alt="">
                              <div class="show-effect">
                                 <i class="fa-regular fa-heart"></i>
                                 <i class="fas fa-play"></i>
                                 <i class="fas fa-ellipsis-h"></i>
                              </div>
                           </div>

                        </a>
                        <div class="card-info">
                           <div class="card-name">
                              <a href="#">Top 100 Nhạc Country Âu Mỹ...</a>
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
                              <img style="width: 100%; height: 100%;"
                                 src="./assets/img/top100/nhacAuMy/top100_nhacRapAuMy.png" alt="">
                              <div class="show-effect">
                                 <i class="fa-regular fa-heart"></i>
                                 <i class="fas fa-play"></i>
                                 <i class="fas fa-ellipsis-h"></i>
                              </div>
                           </div>
                        </a>
                        <div class="card-info">
                           <div class="card-name">
                              <a href="#">Top 100 Nhạc Rap/Hip Hop...</a>
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
                              <img style="width: 100%; height: 100%;"
                                 src="./assets/img/top100/nhacAuMy/top100_nhacRockAuMy.png" alt="">
                              <div class="show-effect">
                                 <i class="fa-regular fa-heart"></i>
                                 <i class="fas fa-play"></i>
                                 <i class="fas fa-ellipsis-h"></i>
                              </div>
                           </div>

                        </a>
                        <div class="card-info">
                           <div class="card-name">
                              <a href="#">Top 100 Nhạc Rock Âu Mỹ...</a>
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
                              <img style="width: 100%; height: 100%;" src="./assets/img/top100/top100_nhacAuMy.png"
                                 alt="">
                              <div class="show-effect">
                                 <i class="fa-regular fa-heart"></i>
                                 <i class="fas fa-play"></i>
                                 <i class="fas fa-ellipsis-h"></i>
                              </div>
                           </div>

                        </a>
                        <div class="card-info">
                           <div class="card-name">
                              <a href="#">Top 100 Pop Âu Mỹ Hay Nhất...</a>
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
                  <h3 class="title">Nhạc Hòa Tấu</h3>

                  <div class="card-wrapper">

                     <div class="card-item">
                        <a href="#">
                           <div class="card-image">
                              <img style="width: 100%; height: 100%;"
                                 src="./assets/img/top100/nhacHoaTau/top100_nhacCuKhac.png" alt="">
                              <div class="show-effect">
                                 <i class="fa-regular fa-heart"></i>
                                 <i class="fas fa-play"></i>
                                 <i class="fas fa-ellipsis-h"></i>
                              </div>
                           </div>
                        </a>
                        <div class="card-info">
                           <div class="card-name">
                              <a href="#">Top 100 Nhạc Hòa Tấu Nhạc...</a>
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
                              <img style="width: 100%; height: 100%;"
                                 src="./assets/img/top100/nhacHoaTau/top100_nhacNewAge&WorldMusic.png" alt="">
                              <div class="show-effect">
                                 <i class="fa-regular fa-heart"></i>
                                 <i class="fas fa-play"></i>
                                 <i class="fas fa-ellipsis-h"></i>
                              </div>
                           </div>

                        </a>
                        <div class="card-info">
                           <div class="card-name">
                              <a href="#">Top 100 Hòa Tấu New Age /...</a>
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
                              <img style="width: 100%; height: 100%;"
                                 src="./assets/img/top100/nhacHoaTau/top100_nhacSaxophone.png" alt="">
                              <div class="show-effect">
                                 <i class="fa-regular fa-heart"></i>
                                 <i class="fas fa-play"></i>
                                 <i class="fas fa-ellipsis-h"></i>
                              </div>
                           </div>

                        </a>
                        <div class="card-info">
                           <div class="card-name">
                              <a href="#">Top 100 Nhạc Hòa Tấu Nhạc...</a>
                           </div>
                           <div class="card-artists">
                              <a href="#">Đinh Quang Minh</a>,
                              <a href="#">Đông Hòa</a>,
                              <a href="#">Kenny G</a>...
                           </div>

                        </div>
                     </div>
                     <div class="card-item">
                        <a href="#">
                           <div class="card-image">
                              <img style="width: 100%; height: 100%;"
                                 src="./assets/img/top100/nhacHoaTau/top100_nhacCello.png" alt="">
                              <div class="show-effect">
                                 <i class="fa-regular fa-heart"></i>
                                 <i class="fas fa-play"></i>
                                 <i class="fas fa-ellipsis-h"></i>
                              </div>
                           </div>

                        </a>
                        <div class="card-info">
                           <div class="card-name">
                              <a href="#">Top 100 Nhạc Hòa Tấu Nhạc...</a>
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
                              <img style="width: 100%; height: 100%;"
                                 src="./assets/img/top100/nhacHoaTau/top100_nhacViolin.png" alt="">
                              <div class="show-effect">
                                 <i class="fa-regular fa-heart"></i>
                                 <i class="fas fa-play"></i>
                                 <i class="fas fa-ellipsis-h"></i>
                              </div>
                           </div>

                        </a>
                        <div class="card-info">
                           <div class="card-name">
                              <a href="#">Top 100 Nhạc Hòa Tấu Nhạc...</a>
                           </div>
                           <div class="card-artists">
                              <a href="#">Hiền Lê</a>,
                              <a href="#">Yanni</a>,
                              <a href="#">Jmi</a>...
                           </div>

                        </div>
                     </div>
                     <div class="card-item">
                        <a href="#">
                           <div class="card-image">
                              <img style="width: 100%; height: 100%;"
                                 src="./assets/img/top100/nhacHoaTau/top100_nhacGuitar.png" alt="">
                              <div class="show-effect">
                                 <i class="fa-regular fa-heart"></i>
                                 <i class="fas fa-play"></i>
                                 <i class="fas fa-ellipsis-h"></i>
                              </div>
                           </div>

                        </a>
                        <div class="card-info">
                           <div class="card-name">
                              <a href="#">Top 100 Nhạc Hòa Tấu Nhạc...</a>
                           </div>
                           <div class="card-artists">
                              <a href="#">Đinh Quang Minh</a>,
                              <a href="#">Đông Hòa</a>,
                              <a href="#">Francis Goya</a>...
                           </div>

                        </div>
                     </div>
                     <div class="card-item">
                        <a href="#">
                           <div class="card-image">
                              <img style="width: 100%; height: 100%;"
                                 src="./assets/img/top100/nhacHoaTau/top100_nhacPiano.png" alt="">
                              <div class="show-effect">
                                 <i class="fa-regular fa-heart"></i>
                                 <i class="fas fa-play"></i>
                                 <i class="fas fa-ellipsis-h"></i>
                              </div>
                           </div>

                        </a>
                        <div class="card-info">
                           <div class="card-name">
                              <a href="#">Top 100 Nhạc Hòa Tấu Nhạc...</a>
                           </div>
                           <div class="card-artists">
                              <a href="#">Vũ Đặng Quốc Việt</a>,
                              <a href="#">Relax Lab</a>,
                              <a href="#">Yiruma</a>...
                           </div>

                        </div>
                     </div>
                     <div class="card-item">
                        <a href="#">
                           <div class="card-image">
                              <img style="width: 100%; height: 100%;"
                                 src="./assets/img/top100/nhacHoaTau/top100_HoaTauCoDien.png" alt="">
                              <div class="show-effect">
                                 <i class="fa-regular fa-heart"></i>
                                 <i class="fas fa-play"></i>
                                 <i class="fas fa-ellipsis-h"></i>
                              </div>
                           </div>

                        </a>
                        <div class="card-info">
                           <div class="card-name">
                              <a href="#">Top 100 Nhạc Hòa Tấu Cổ...</a>
                           </div>
                           <div class="card-artists">
                              <a href="#">Contempo-Divo</a>,
                              <a href="#">한규원</a>,
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







   <!-- Start thanh phát nhạc bên dưới -->
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
   <!-- End thanh phát nhạc bên dưới -->

   <script src="{{url('/assets/js/admin.js')}}"></script>
   <script src="{{url('/assets/js/change_tab.js')}}"></script>
   <script src="{{url('assets/js/openFormLoginAndSignUp.js')}}"></script>

</body>

</html>