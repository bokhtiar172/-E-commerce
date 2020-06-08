<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Bazar||Shop</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css">
  </head>



  <body style="background-color: #F8F9F9;">


<nav class="navbar navbar-expand-lg navbar-light bg-light " style="height: 25px;" >

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
    <div class="navbar-nav ml-auto">
      <!-- css for google languse  api css start  -->
      					<style media="screen">
      					.translated-ltr{margin-top:-40px;}
      					.translated-ltr{margin-top:-40px;}
      					.goog-te-banner-frame {display: none;margin-top:-20px;}

      					.goog-logo-link {
      					 display:none !important;
      					}

      					.goog-te-gadget{
      					 color: transparent !important;
      					}
      					</style>
      <!-- css for google languse  api css end  -->
      <span class="pt-2"  id="google_translate_element"></span >
      <!-- script start  -->
      <script type="text/javascript">
            function googleTranslateElementInit() {
              new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
            }
      </script>
      <!-- script end  -->
      <a class="nav-item nav-link" href="{{route('register')}}">SingUp</a>
      <a class="nav-item nav-link" href="{{route('login')}}">Login</a>
      <a class="nav-item nav-link" href="{{route('user.logout')}}">Logout</a>
    </div>
  </div>
</nav>
<!-- first header end -->
<!-- secound header start  -->
<section class=" sticky-top " style="background-color: #FDFEFE; ">
    <nav class="navbar   navbar-expand-lg navbar-expand-sm navbar-expand-md navbar-light" >
      <div class="container">
          <a class="navbar-brand" href="{{url('/')}}"> <img height="50px;" width="50px;" src="{{asset('img/h.png')}}" alt=""> </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <form class="form-inline my-2 my-lg-0 ml-5 pl-5" method="post" action="{{route('user.search')}}"><!-- search start -->
            @csrf
            <input class="form-inline form-control mr-sm-1 border-box content-box padding-box" name="search" style="padding-right: 380px;"  type="search" placeholder="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form><!-- search end -->


          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
              <li class="nav-item active">
                <a  class="nav-link btn  ml-4" href="{{url('user/show_all_cart')}}"><img src="{{asset('img/c.png')}}"  alt=""><strong class="text-danger">{{App\cart::total_item_cart()}} </strong>  <span class="sr-only">(current)</span></a>
              </li>
              <!-- notification area start -->
                    <?php
                        $notification=DB::table('notificaions')
                                      ->where('user_id',Auth::id())
                                      ->first();
                     ?>

              <li class="nav-item">
               <button tabindex="0" class="btn btn-lg btn-light btn-sm" role="button" data-placement="bottom" data-toggle="popover" data-html="true" data-trigger="focus" title="Notification" data-content="
                <div>

                      <?php
                          foreach (App\notificaion::all() as $v_notification) {
                            echo $v_notification->notification;
                            echo "<br>";
                            echo $v_notification->created_at->diffForHumans();

                            echo "<br>";
                            echo "<br>";
                          }
                       ?>

                 </div>
               "> <img src="{{asset('img/notification.png')}}" alt=""></button>
              </li>




              <!-- notification javascript code start -->

              <!-- notification javascript code start -->
              <!-- notification area end-->







              <li class="nav-item">
                <a class="nav-link btn  ml-4" href="{{url('user/all-wishlist-show')}}"><img src="{{asset('img/wish.png')}}" alt=""><strong class="text-danger">{{App\wishlist::total_number_wishlist()}} </strong> </a>
              </li>
              <li class="nav-item"> <!-- message  area start -->
                <a class="nav-link btn  ml-4" href=""><img src="{{asset('img/message.png')}}" alt=""> </a>
              </li><!-- message  area end -->
            </ul>
          </div>
        </div>
    </nav>
  </section>






@yield('user_content')

    <!-- footer area start  -->
    <hr>
          <section class="bg-dark text-light"><br>
              <div class="">
                <div class="row">
                  <div class="col-md-3 text-center ">
                    <h4 class="text-center">Website Link</h4>
                    <ul class="navbar-nav">
                      <li><a href="#">Home</a> </li>
                      <li><a href="#">Product Category</a> </li>
                      <li><a href="#">ALL Product</a> </li>
                      <li><a href="#">About</a> </li>
                      <li><a href="#">Contact</a> </li>
                    </ul>
                  </div><!--first row end-->
                  <div class="col-md-4">
                    <h4 class="text-center">Contact Us</h4>
                    <div class="form-group">

                      <input class="form-control" type="email" name="email" placeholder="Enter Your E-mail" value="">
                    </div>
                    <div class="form-group">

                      <input class="form-control" type="name" name="name" placeholder="Enter Your Name" value="">
                    </div>
                    <div class="">

                      <textarea class="form-control" name="name" rows="4" cols="30" placeholder="Enter Your Comment"></textarea>
                    </div>
                  </div><!-- end secount div-->
                  <div class="col-md-5 text-center">
                    <div class="">
                      <p class="card-title h4 text-center">Our Goal</p>
                      <p class="card-body">Our goal is best service provider and halthy and qulity food delevary that is our goal, slogan is sosto rakhte pase ache apanr fshop  </p>
                    </div>
                  </div><!-- end of third div-->
                </div>
              </div>
          </section><!-- end of first section for foooter -->





<script type="text/javascript">
$(function () {
  $('[data-toggle="popover"]').popover()
})
</script>
















    <!-- javascript link -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper('.swiper-container', {
        slidesPerView: 1,
        spaceBetween: 10,
        // init: false,
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
        },
        breakpoints: {
          '@0.00': {
            slidesPerView: 1,
            spaceBetween: 10,
          },
          '@0.75': {
            slidesPerView: 2,
            spaceBetween: 20,
          },
          '@1.00': {
            slidesPerView: 3,
            spaceBetween: 40,
          },
          '@1.50': {
            slidesPerView: 4,
            spaceBetween: 50,
          },
        }
      });
    </script>

    <!-- translate api script start -->
          <script type="text/javascript">
          (function(){var gtConstEvalStartTime = new Date();/*

       Copyright The Closure Library Authors.
       SPDX-License-Identifier: Apache-2.0
      */
      function d(b){var a=document.getElementsByTagName("head")[0];a||(a=document.body.parentNode.appendChild(document.createElement("head")));a.appendChild(b)}function _loadJs(b){var a=document.createElement("script");a.type="text/javascript";a.charset="UTF-8";a.src=b;d(a)}function _loadCss(b){var a=document.createElement("link");a.type="text/css";a.rel="stylesheet";a.charset="UTF-8";a.href=b;d(a)}function _isNS(b){b=b.split(".");for(var a=window,c=0;c<b.length;++c)if(!(a=a[b[c]]))return!1;return!0}
      function _setupNS(b){b=b.split(".");for(var a=window,c=0;c<b.length;++c)a.hasOwnProperty?a.hasOwnProperty(b[c])?a=a[b[c]]:a=a[b[c]]={}:a=a[b[c]]||(a[b[c]]={});return a}window.addEventListener&&"undefined"==typeof document.readyState&&window.addEventListener("DOMContentLoaded",function(){document.readyState="complete"},!1);
      if (_isNS('google.translate.Element')){return}(function(){var c=_setupNS('google.translate._const');c._cest = gtConstEvalStartTime;gtConstEvalStartTime = undefined;c._cl='en';c._cuc='googleTranslateElementInit';c._cac='';c._cam='';c._ctkk='440533.1623159804';var h='translate.googleapis.com';var s=(true?'https':window.location.protocol=='https:'?'https':'http')+'://';var b=s+h;c._pah=h;c._pas=s;c._pbi=b+'/translate_static/img/te_bk.gif';c._pci=b+'/translate_static/img/te_ctrl3.gif';c._pli=b+'/translate_static/img/loading.gif';c._plla=h+'/translate_a/l';c._pmi=b+'/translate_static/img/mini_google.png';c._ps=b+'/translate_static/css/translateelement.css';c._puh='translate.google.com';_loadCss(c._ps);_loadJs(b+'/translate_static/js/element/main.js');})();})();
          </script>
    <!-- translate api script end -->
  </body>
</html>
