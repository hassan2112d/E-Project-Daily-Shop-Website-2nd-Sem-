<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <meta name="csrf_token" content="{{csrf_token() }}">
    <title>@yield('page_title')</title>
    
   
    <link href="{{asset('frontAssets/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('frontAssets/css/bootstrap.css')}}" rel="stylesheet">   
    <link href="{{asset('frontAssets/css/jquery.smartmenus.bootstrap.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('frontAssets/css/jquery.simpleLens.css')}}">    
    <link rel="stylesheet" type="text/css" href="{{asset('frontAssets/css/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontAssets/css/nouislider.css')}}">
    <link id="switcher" href="{{asset('frontAssets/css/theme-color/default-theme.css')}}" rel="stylesheet">
    <!-- <link id="switcher" href="css/theme-color/bridge-theme.css" rel="stylesheet"> -->
    <link href="{{asset('frontAssets/css/sequence-theme.modern-slide-in.css')}}" rel="stylesheet" media="all">

    <link href="{{asset('frontAssets/css/style.css')}}" rel="stylesheet">    

    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  

  </head>
  <body> 
   <!-- wpf loader Two -->
    <div id="wpf-loader-two">          
      <div class="wpf-loader-two-inner">
        <span>Loading</span>
      </div>
    </div> 
    <!-- / wpf loader Two -->       
  <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
  <!-- END SCROLL TOP BUTTON -->


  <!-- Start header section -->
  <header id="aa-header">
    <!-- / header top  -->

    <!-- start header bottom  -->
    <div class="aa-header-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="aa-header-bottom-area">
              <!-- logo  -->
              <div class="aa-logo">
                <!-- Text based logo -->
                <a href="{{url('/')}}">
                  <span class="fa fa-shopping-cart"></span>
                  <p>daily<strong>Shop</strong> <span>Your Shopping Partner</span></p>
                </a>
                <!-- img based logo -->
                <!-- <a href="index.html"><img src="img/logo.jpg" alt="logo img"></a> -->
              </div>
              <!-- / logo  -->
               <!-- cart box -->
              <div class="aa-cartbox">
                <a class="aa-cart-link" href="#">
                  <span class="fa fa-shopping-basket"></span>
                  <span class="aa-cart-title">SHOPPING CART</span>
                  <span class="aa-cart-notify">2</span>
                </a>
                <div class="aa-cartbox-summary">
                  <ul>
                    <li>
                      <a class="aa-cartbox-img" href="#"><img src="{{asset('frontAssets/img/woman-small-2.jpg')}}" alt="img"></a>
                      <div class="aa-cartbox-info">
                        <h4><a href="#">Product Name</a></h4>
                        <p>1 x $250</p>
                      </div>
                      <a class="aa-remove-product" href="#"><span class="fa fa-times"></span></a>
                    </li>                  
                    <li>
                      <span class="aa-cartbox-total-title">
                        Total
                      </span>
                      <span class="aa-cartbox-total-price">
                        $500
                      </span>
                    </li>
                  </ul>
                  <a class="aa-cartbox-checkout aa-primary-btn" href="javascript:void(0)">Checkout</a>
                </div>
              </div>
              <!-- / cart box -->
              <div class="aa-search-box">
                <form action="">
                  <input type="text" id="search" placeholder="Search here...">
                  <button type="button" onclick="funSearch()"><span class="fa fa-search"></span></button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- / header bottom  -->
  </header>
  <!-- / header section -->
  <!-- menu -->
  <section id="menu">
    <div class="container">
      <div class="menu-area">
        <!-- Navbar -->
        <div class="navbar navbar-default" role="navigation">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>          
          </div>
          <div class="navbar-collapse collapse">
            <!-- Left nav -->
            <ul class="nav navbar-nav">
              <li><a href="{{url('/')}}">Home</a></li>
              <li><a href="{{url('/category')}}">Product</a></li>
              <li><a href="{{url('/contact')}}">Contact</a></li>
              <li><a href="{{url('/about')}}">About Us</a></li>
              <li><a href="{{url('/cart')}}">Cart</a>
              @if(session()->has('FRONT_USER_LOGIN')!=null)
              <li><a href="{{url('/logout')}}">Logout</a></li>
              @else
              <li><a href="" data-toggle="modal" data-target="#login-modal">Login</a></li>
              @endif
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>       
    </div>
  </section>
  <!-- / menu -->
  <!-- Start slider -->
  
      @section('container')

      @show

  <!-- footer -->  
  <footer id="aa-footer">
    <!-- footer bottom -->
    <div class="aa-footer-top">
     <div class="container">
        <div class="row">
        <div class="col-md-12">
          <div class="aa-footer-top-area">
            <div class="row">
              <div class="col-md-4 col-sm-6">
                <div class="aa-footer-widget">
                
                  <h3>Main Menu</h3>
                  <ul class="aa-footer-nav">
                    <li><a href="{{url('/')}}">Home</a></li><br>
                    <li><a href="{{url('/about')}}">About Us</a></li><br>
                    <li><a href="{{url('/contact')}}">Contact Us</a></li><br>
                    <li><a href="{{url('/cart')}}">Cart</a></li><br>
                    <li><a href="{{url('/category')}}">Product</a></li><br>
                  </ul>
                </div>
                <div class="aa-logo">
                    <!-- Text based logo -->
                    <a href="{{url('/')}}">
                      <p class="myLogo">daily<strong>Shop</strong> <br><span>Your Shopping Partner</span></p>
                    </a>
                 </div>
              </div>
              <div class="col-md-4 col-sm-6">
                <div class="aa-footer-widget">
                  <div class="aa-footer-widget">
                    <h3>About Daily Shop</h3>
                    <ul class="aa-footer-nav">
                    <p class="myPara"> We are offering the finnest and the best quality products WORLD-WIDE,through our easy way of shipping to every possible cities and countries,we are the most trustable multinational company recognized globally.</p>
                    </ul>
                  </div>
                </div>
              </div>
              
              <div class="col-md-4 col-sm-6">
                <div class="aa-footer-widget">
                  <div class="aa-footer-widget">
                    <h3>Contact Us</h3>
                    <address>
                    <p>Address: Aptech Garden Center <br>APWA Complex </p>
                      <p><span class="fa fa-phone"></span>+1 212-982-4589</p>
                      <p><span class="fa fa-envelope"></span> <a class="myPara" href="mailto:dailyshop@gmail.com"></a> dailyshop@gmail.com</p>
                    </address>
                    <div class="aa-footer-social">
                      <a href="#"><span class="fa fa-facebook"></span></a>
                      <a href="#"><span class="fa fa-twitter"></span></a>
                      <a href="#"><span class="fa fa-google-plus"></span></a>
                      <a href="#"><span class="fa fa-youtube"></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
     </div>
    </div>
    <!-- footer-bottom -->
    <div class="aa-footer-bottom">
      <div class="container">
        <div class="row">
        <div class="col-md-12">
          <div class="aa-footer-bottom-area">
            <p>Designed by <a href="http://www.markups.io/">Aptech Students 2112d group</a></p>
          </div>
        </div>
      </div>
      </div>
    </div>
  </footer>
  
  <!-- Login Modal -->  
  <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">                      
        <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4>Login or Register</h4>
          <form class="aa-login-form" action="" id="frmLogin" method="post">
            @csrf
            <label for="">Email address<span>*</span></label>
            <input type="email" placeholder="Email" name="loginEmail">
            <label for="">Password<span>*</span></label>
            <input type="password" placeholder="Password" name="loginPassword"><br>
            <button class="aa-browse-btn" type="submit" id="btnLogin">Login</button><br>
            <div id="loginMsg"></div>
            <br>
            <div class="aa-register-now">
              Don't have an account?<a href="{{url('registration')}}">Register now!</a>
            </div>
          </form>
        </div>                        
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>    

  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="{{asset('frontAssets/js/bootstrap.js')}}"></script>  
  <script type="text/javascript" src="{{asset('frontAssets/js/jquery.smartmenus.js')}}"></script>
  <script type="text/javascript" src="{{asset('frontAssets/js/jquery.smartmenus.bootstrap.js')}}"></script>  
  <script src="{{asset('frontAssets/js/sequence.js')}}"></script>
  <script src="{{asset('frontAssets/js/sequence-theme.modern-slide-in.js')}}"></script>  
  <script type="text/javascript" src="{{asset('frontAssets/js/jquery.simpleGallery.js')}}"></script>
  <script type="text/javascript" src="{{asset('frontAssets/js/jquery.simpleLens.js')}}"></script>
  <script type="text/javascript" src="{{asset('frontAssets/js/slick.js')}}"></script>
  <script type="text/javascript" src="{{asset('frontAssets/js/nouislider.js')}}"></script>
  <script src="{{asset('frontAssets/js/custom.js')}}"></script> 

  </body>
</html>