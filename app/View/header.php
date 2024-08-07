<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]>     <html class="no-js" lang=""> <!<![endif]-->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

  <title><?php
        if($titlepage!="") echo $titlepage;
        else echo" CLOUDYY BEAUTY";
        ?></title>
  <meta name="description" content="Shopaholic - e-Commerce HTML5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="apple-touch-icon" href="apple-touch-icon.png">


  <link rel="stylesheet" type="text/css" href="public/layout/assets/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="public/layout/assets/css/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="public/layout/assets/css/et-line-icons.css">  
  
  <link rel="stylesheet" href="public/layout/assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="public/layout/assets/css/slick.css">
  <link rel="stylesheet" href="public/layout/assets/css/magnific-popup.css"> 
  <link rel="stylesheet" href="public/layout/assets/css/style.css">
  <link rel="stylesheet" href="public/layout/assets/css/shop/shop-details.css">
  <link rel="stylesheet" href="public/layout/assets/css/themes.css">
  <link rel="stylesheet" href="public/layout/assets/css/home/home-11.css">
  <link rel="stylesheet" href="public/layout/assets/css/shop/cart.css">
  <link rel="stylesheet" href="public/layout/assets/css/shop/checkout.css">
  <link rel="stylesheet" href="public/layout/assets/css/shop/shop.css">
  <link rel="stylesheet" href="public/layout/assets/css/pages/register.css">

  <!--[if lte IE 7]><script src="lte-ie7.js"></script><![endif]-->
  <!--[if lt IE 9]><script src="public/layout/assets/js/vendor/html5-3.6-respond-1.4.2.min.js"></script><![endif]-->


</head>


<body>


  <header id="masthead" class="masthead">

    <div class="header-top">
      <div class="container">
        <div class="row">
          <div class="col-sm-5 top-left text-left">
            <p class="top-contact">
              <i class="ti-email"></i><span><a href="#"></a></span>
              <i class="ti-mobile"></i><span></span>
            </p><!-- /.top-contact -->

          </div><!-- /.top-left -->

          <div class="col-sm-7 top-right text-right">
            

            <div class="my-account dropdown">
              <a href="#">tài khoản<i class="ti-user"></i></a>
              <ul class="unsorted-list">
                <li><a href="register.html">Đăng nhập</a></li>
                <!-- <li><a href="#">My Profile</a></li>
                <li><a href="#">My Wishlist</a></li>
                <li><a href="cart.html">My Cart</a></li> -->
                <li><a href="register.html">Đăng xuất</a></li>
              </ul>
            </div><!-- /.my-account -->
            
          </div><!-- /.top-right -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </div><!-- /.header-top -->

    <div class="header-middle">
      <div class="container">
        <div class="row">
          <div class="col-sm-3">
            <h1><a class="navbar-brand hidden-xs" href="./"><img src="public/upload/logo.jpg" alt="Site Logo" style="max-width: 70%; margin-left: 30px; margin-top: -20px;"></a></h1>
          </div>
          <div class="col-sm-7">
            <div class="top-search-form">
              <form action="#" method="post" class="menu-form">
                <fieldset> 
                  <select name="category" id="category">
                    <option selected="selected">Danh mục</option>
                    <!-- <option>Men's Wear</option>
                    <option>Women's Wear</option>
                    <option>Kid's Wear</option>
                    <option>Men's Fashion</option>
                    <option>Women's Fashion</option>
                    <option>Kid's Fashion</option>
                    <option>Home Applience</option>
                    <option>Electronics</option>
                    <option>Gadgets</option>
                    <option>Mobile</option>
                    <option>Laptop</option>
                    <option>Others</option> -->
                  </select>
                </fieldset>

                <input type="text" placeholder="Tìm kiếm ..." class="form-control">
                <button type="submit" class="btn"><i class="fa fa-search"></i></button>
              </form>  
            </div><!-- /.top-search-form -->
          </div>
          <div class="col-sm-2">
            <div class="shop-cart">             
              <a class="cart-control" href="index.php?pg=cart" title="View your shopping cart">
                <i class="ti-bag"></i>
                <span class="count">3</span>
                <span>Giỏ hàng</span> 
               
              </a><!-- /.cart-control -->

              
            </div>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container -->
    </div><!-- /.header-middle -->

    <div class="header-bottom">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-menu" aria-expanded="false">
            <i class="fa fa-bars"></i>
          </button>
          <a class="navbar-brand visible-xs" href="./">
            <img src="images/logo.png" alt="Site Logo">
          </a><!-- /.navbar-brand -->
        </div>

        <nav id="main-menu" class="menu collapse navbar-collapse pull-left">
          <ul class="nav navbar-nav">
            <li class="menu-item menu-item-has-children active">
              <a href="">Trang chủ</a>
              <!-- <ul class="sub-menu children">
                <li class="menu-item"><a href="index-01.html">Home 01</a></li>
                <li class="menu-item"><a href="index-02.html">Home 02</a></li>
                <li class="menu-item"><a href="index-03.html">Home 03</a></li>
                <li class="menu-item"><a href="index-04.html">Home 04</a></li>
                <li class="menu-item"><a href="index-05.html">Home 05</a></li>
                <li class="menu-item"><a href="index-06.html">Home 06</a></li>
                <li class="menu-item"><a href="index-07.html">Home 07</a></li>
                <li class="menu-item"><a href="index-08.html">Home 08</a></li>
                <li class="menu-item"><a href="index-09.html">Home 09</a></li>
                <li class="menu-item"><a href="index-10.html">Home 10</a></li>
                <li class="menu-item"><a href="index-11.html">Home 11</a></li>
              </ul> -->
            </li>
            <li class="menu-item"><a href="index.php?pg=product">Sản phẩm</a></li> 
            <li class="menu-item"><a href="">Giới thiệu</a></li> 
            <li class="menu-item"><a href="">Liên hệ</a></li> 

            <!-- <li class="menu-item"><a href="#">Buy</a></li>  -->

          </ul><!-- /.navbar-nav -->
        </nav><!-- /.navbar-collapse -->

        <div class="menu-social pull-right">
          <a href="#"><i class="ti-twitter-alt"></i></a>
          <a href="#"><i class="ti-facebook"></i></a>
          <a href="#"><i class="ti-pinterest-alt"></i></a>
          <a href="#"><i class="ti-vimeo-alt"></i></a>
        </div><!-- /.menu-social -->
      </div><!-- /.container -->
    </div><!-- /.header-bottom -->

  </header><!-- /#masthead -->