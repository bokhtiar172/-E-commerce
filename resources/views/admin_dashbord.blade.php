<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Fshop || Bazar</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"><!--bootstrap css link-->
    <link rel="stylesheet" href="css/index.css"><!--css link-->
    <script src="https://kit.fontawesome.com/ba78558982.js" crossorigin="anonymous"></script>
  </head>
  <body>
      <!-- navbar  start -->
          <nav class="navbar navbar-expand bg-dark">
            <div class="container">
              <a href="{{route('admin.dashbord')}}" class="text-light navbar-brand">Admin Dashbord</a>
              <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link text-light" href="#">Bokhtiar</a> </li>
                <li class="nav-item"><a class="nav-link" href="#"><img class="user-img" src="f3.jpg" alt="asdf"> </a> </li>
              </ul>
            </div>
          </nav>
      <!-- navbar  end -->
      <!-- main content start -->

        <section class="mt-2" style="background-color: #EAEDED; color: white;">
          <div class="">
          <div class="row ml-1 mr-1">
            <!-- main content left side start -->

            <div class="col-md-2 text-center left-side" style="background-color: #34495E;  " >
              <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link btn text-light font-weight-bold" href="{{route('admin.dashbord')}}"><i class="fas fa-house-user"></i><span class="ml-1">Dashbord</span> </a> </li>

              <div class="dropdown mt-1"><!-- start category dropdown-->
              <a class="btn dropdown dropdown-toggle font-weight-bold"  type="" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-certificate"></i> <span class="ml-1"> Product Category</span>
            </a>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="{{route('admin.all.category')}}">All Category</a>
                <a class="dropdown-item" href="{{route('admin.add.category')}}">Add Category</a>
              </div>
            </div><!-- end category dropdown -->


            <div class="dropdown mt-1"><!-- start brand dropdown-->
            <a class="btn dropdown-bgc-color dropdown-toggle font-weight-bold" type="" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fab fa-bandcamp"></i>  <span class="ml-1">Product Brand</span>
          </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="{{route('admin.all.brand')}}">All Brand</a>
              <a class="dropdown-item" href="{{route('admin.add.brand')}}">Add Brand</a>
            </div>
          </div><!-- end brand dropdown -->


          <div class="dropdown mt-1"><!-- start dropdown-->
          <a class="btn dropdown-bgc-color dropdown-toggle font-weight-bold" type="" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fab fa-sellsy"></i>  <span class="ml-1">Flash Sell Product</span>
        </a>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="{{route('admin.all.flashsell')}}">All Flash Sell Product</a>
            <a class="dropdown-item" href="{{route('admin.add.flashsell')}}">Add Flash Sell Product</a>
          </div>
        </div><!-- end dropdown -->

        <div class="dropdown mt-1"><!-- start dropdown-->
        <a class="btn dropdown-bgc-color dropdown-toggle font-weight-bold" type="" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fab fa-sellsy"></i>  <span class="ml-1">Offer Product's</span>
      </a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="{{route('admin.all.offer')}}">All Offer Product</a>
          <a class="dropdown-item" href="{{route('admin.add.offer')}}">Add Offer Product</a>
        </div>
      </div><!-- end dropdown -->


        <div class="dropdown mt-1"><!-- start dropdown-->
          <a class="btn dropdown-bgc-color dropdown-toggle font-weight-bold" type="" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fab fa-sellsy"></i>  <span class="ml-1">Product menus</span>
        </a>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="{{route('admin.all.product')}}">All Product</a>
            <a class="dropdown-item" href="{{route('admin.add.product')}}">Add Product</a>
          </div>
        </div><!-- end dropdown -->


        <div class="dropdown mt-1"><!-- start dropdown-->
          <a class="btn dropdown-bgc-color dropdown-toggle font-weight-bold" type="" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fab fa-slideshare"></i><span class="ml-1">Slider</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">All Slider</a>
            <a class="dropdown-item" href="{{route('admin.add.slider')}}">Add Slider</a>
          </div>
        </div><!-- end dropdown -->


        <div class="dropdown mt-1"><!-- start dropdown-->
        <a class="btn dropdown-bgc-color dropdown-toggle font-weight-bold" type="" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-shopping-cart"></i>  <span class="ml-1">Payment Info</span>
      </a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="#">All Pyment Info</a>
          <a class="dropdown-item" href="{{route('admin.add.payment')}}">Add Payment</a>
        </div>
      </div><!-- end dropdown -->









              <div class="dropdown mt-1"><!-- start dropdown-->
              <a class="btn dropdown-bgc-color dropdown-toggle font-weight-bold" type="" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fab fa-sellsy"></i>  <span class="ml-1">Sells Monitoring</span>
              </a>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="{{url('/admin/today-report')}}">Day By Day Report</a>
                <?php $all_month=DB::table('orders')->get(); ?>
                <a class="dropdown-item" href="">
                  @foreach($all_month as $v_month)
                    <a href="{{url('admin/month/'.$v_month->month)}}">{{$v_month->month}}</a>
                  @endforeach
                </a>
                <a class="dropdown-item" href="#">Year By Year Report</a>
              </div>
            </div><!-- end dropdown -->



            <div class="dropdown mt-1"><!-- start dropdown-->
            <a class="btn dropdown-bgc-color dropdown-toggle font-weight-bold" type="" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-hand-spock"></i><span class="ml-1">  Add Sponcer</span>
          </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="{{route('admin.all.sponcer')}}">All Sponcer</a>
              <a class="dropdown-item" href="{{route('admin.add.sponcer')}}">Add Sponcer</a>
            </div>
          </div><!-- end dropdown -->
          <li class="nav-item"><a class="nav-link btn text-light font-weight-bold" href="{{url('admin/order-show')}}"><i class="fad fa-bags-shopping"></i><span class="ml-1">Product Order</span> </a> </li>
        <li class="nav-item"><a class="nav-link btn text-light font-weight-bold" href="#"><i class="fas fa-bell"></i><span class="ml-1">Notification</span> </a> </li>
        <li class="nav-item"><a class="nav-link btn text-light font-weight-bold" href="#"><i class="fas fa-envelope"></i><span class="ml-1">E-mail</span> </a> </li>
        <li class="nav-item"><a class="nav-link btn text-light font-weight-bold" href="#"><i class="fal fa-sms"></i><span class="ml-1">Chat</span> </a> </li>
        <li class="nav-item"><a class="nav-link btn text-light font-weight-bold" href="#"><i class="fas fa-calendar-week"></i><span class="ml-1">Calendar</span> </a> </li>

        <li class="nav-item"><a class="nav-link btn text-light font-weight-bold" href="#"><i class="fas fa-th-list"></i><span class="ml-1">ToDo List</span> </a> </li>
        <li class="nav-item"><a class="nav-link btn text-light font-weight-bold" href="#"><i class="fas fa-sign-out-alt"></i><span class="ml-1">Log Out</span> </a> </li>

          </ul>
      </div>
            <!-- main content left side end-->

            <!-- main content right side start -->
            <div class="col-md-10">

                @yield('admin_content')

            </div>
            <!-- main content right side end-->
          </div>
          </div>
        </section>








      <!-- main content end-->


<!-- javascript link bootstrap-->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
