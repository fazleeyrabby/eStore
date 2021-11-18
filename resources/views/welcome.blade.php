<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Hello, world!</title>

      <!-- Link Swiper's CSS -->
      <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
      />
      <!-- start responsive plugin file -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      <!-- End responsive plugin file -->
      <!-- font awasme -->
      <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
      <!-- start custom file -->
      <link rel="stylesheet" type="text/css" href="{{ asset('public/css/style.css') }}" />
      <!-- end custom file -->
      <style>
         
      </style>
      <script type="text/javascript">
         $(document).ready(function(){
            $(".wish-icon i").click(function(){
            $(this).toggleClass("fa-heart fa-heart-o");
   });
});
      </script>
   </head>
   <body>
      <!-- start header -->
      <!-- Top header -->
      <div class="top-bar">
         <div class="container-fluid">
            <div class="row">
               <div class="col-sm-6">
                  <i class="fa fa-envelope"></i>
                  support@gmail.com
               </div>
               <div class="col-sm-6">
                  <i class="fa fa-phone-alt"></i>
                  01778602754
               </div>
            </div>
         </div>
      </div>
      <!-- middle header-navbar -->
      <div class="nav">
         <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <a class="navbar-brand" href="#">MENU</a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarNavDropdown">
                  <ul class="navbar-nav">
                     <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#">PRODUCTS</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#">PRODUCT DETAILS</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#">CART</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#">CHECKOUT</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#">MY ACCOUNT</a>
                     </li>
                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        MORE PAGES
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                           <a class="dropdown-item" href="#">Action</a>
                           <a class="dropdown-item" href="#">Another action</a>
                           <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                     </li>
                     <div class="navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           USER ACCOUNT
                           </a>
                           <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                              <a class="dropdown-item" href="#">Login</a>
                              <a class="dropdown-item" href="#">Register</a>
                           </div>
                        </li>
                     </div>
                  </ul>
               </div>
            </nav>
         </div>
      </div>
      <!-- bottom header -->
      <div class="bottom-bar">
         <div class="container-fluid">
            <div class="row align-items-center">
               <div class="col-md-3">
                  <div class="logo">
                     <a href="index.html">
                     <img src="public/img/logo.png" alt="Logo">
                     </a>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="search">
                     <input type="text" placeholder="Search">
                     <button><i class="fa fa-search"></i></button>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="user">
                     <a href="wishlist.html" class="btn wishlist">
                     <i class="fa fa-heart"></i>
                     <span>(0)</span>
                     </a>
                     <a href="cart.html" class="btn cart">
                     <i class="fa fa-shopping-cart"></i>
                     <span>(0)</span>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end header -->
      <!-- start containt -->
      <div class="header">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-3">
                  <nav class="navbar bg-light">
                     <ul class="navbar-nav">
                        <li class="nav-item">
                           <a class="nav-link" href="#"><i class="fa fa-home"></i>Home</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#"><i class="fa fa-shopping-bag"></i>Best Selling</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#"><i class="fa fa-plus-square"></i>New Arrivals</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#"><i class="fa fa-female"></i>Fashion & Beauty</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#"><i class="fa fa-child"></i>Kids & Babies Clothes</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#"><i class="fa fa-tshirt"></i>Men & Women Clothes</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#"><i class="fa fa-mobile-alt"></i>Gadgets & Accessories</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#"><i class="fa fa-microchip"></i>Electronics & Accessories</a>
                        </li>
                     </ul>
                  </nav>
               </div>
               <div class="col-md-6">
                  <div id="demo" class="carousel slide" data-ride="carousel">
                     <!-- <ul class="carousel-indicators">
                        <li data-target="#demo" data-slide-to="0" class="active"></li>
                        <li data-target="#demo" data-slide-to="1"></li>
                        <li data-target="#demo" data-slide-to="2"></li>
                     </ul> -->
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <img src="public/img/slider-1.jpg" alt="Los Angeles" class="w-100" >
                           <div class="carousel-caption">
                              <h3>one</h3>
                              <p>We had such a great time in LA!</p>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <img src="public/img/slider-2.jpg" alt="Chicago" class="w-100">
                           <div class="carousel-caption">
                              <h3>two</h3>
                              <p>Thank you, Chicago!</p>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <img src="public/img/slider-3.jpg" alt="New York" class="w-100">
                           <div class="carousel-caption">
                              <h3>three</h3>
                              <p>We love the Big Apple!</p>
                           </div>
                        </div>
                     </div>
                     <a class="carousel-control-prev" href="#demo" data-slide="prev">
                     <span class="carousel-control-prev-icon"></span>
                     </a>
                     <a class="carousel-control-next" href="#demo" data-slide="next">
                     <span class="carousel-control-next-icon"></span>
                     </a>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="header-img">
                     <div class="img-item">
                        <img src="public/img/category-1.jpg" />
                        <a class="img-text" href="">
                           <p>Adult Section</p>
                        </a>
                     </div>
                     <div class="img-item">
                        <img src="public/img/category-2.jpg" />
                        <a class="img-text" href="">
                           <p>Kids section</p>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- start multi slider -->
      <div class="container-fluid">
         <!-- <h1 align="center">multi slider</h1> -->
            <div class="swiper-container mySwiper">
               <div class="swiper-wrapper">
                 <div class="swiper-slide">
                 <img src="public/img/brand-1.png">
                  </div>
                 <div class="swiper-slide">
                     <img src="public/img/brand-2.png">
                 </div>
                 <div class="swiper-slide">
                     <img src="public/img/brand-3.png">
                 </div>
                 <div class="swiper-slide">
                     <img src="public/img/brand-4.png">
                 </div>
                 <div class="swiper-slide">
                     <img src="public/img/brand-5.png">
                 </div>
                 <div class="swiper-slide">
                     <img src="public/img/brand-6.png">
                 </div>
                 <div class="swiper-slide">
                     <img src="public/img/brand-1.png">
                 </div>
                 <div class="swiper-slide">
                     <img src="public/img/brand-2.png">
                 </div>
               </div>
<!--                <div class="swiper-button-next"></div>
               <div class="swiper-button-prev"></div> -->
            </div>
      </div><br>
      <!-- end multi slider -->
      <div class="feature">
         <div class="container-fluid">
            <div class="row align-items-center">
               <div class="col-lg-3 col-md-6 feature-col">
                  <div class="feature-content">
                     <i class="fab fa-cc-mastercard"></i>
                     <h2>Secure Payment</h2>
                     <p>
                        Lorem ipsum dolor sit amet consectetur elit
                     </p>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6 feature-col">
                  <div class="feature-content">
                     <i class="fa fa-truck"></i>
                     <h2>Worldwide Delivery</h2>
                     <p>
                        Lorem ipsum dolor sit amet consectetur elit
                     </p>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6 feature-col">
                  <div class="feature-content">
                     <i class="fa fa-sync-alt"></i>
                     <h2>90 Days Return</h2>
                     <p>
                        Lorem ipsum dolor sit amet consectetur elit
                     </p>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6 feature-col">
                  <div class="feature-content">
                     <i class="fa fa-comments"></i>
                     <h2>24/7 Support</h2>
                     <p>
                        Lorem ipsum dolor sit amet consectetur elit
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="category">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-3">
                  <div class="category-item ch-400">
                     <img src="public/img/category-3.jpg" />
                     <a class="category-name" href="">
                        <p>Select Your Desires!!</p>
                     </a>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="category-item ch-250">
                     <img src="public/img/category-4.jpg" />
                     <a class="category-name" href="">
                        <p>Select Your Desires!!</p>
                     </a>
                  </div>
                  <div class="category-item ch-150">
                     <img src="public/img/category-5.jpg" />
                     <a class="category-name" href="">
                        <p>Select Your Desires!!</p>
                     </a>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="category-item ch-150">
                     <img src="public/img/category-6.jpg" />
                     <a class="category-name" href="">
                        <p>Select Your Desires!!</p>
                     </a>
                  </div>
                  <div class="category-item ch-250">
                     <img src="public/img/category-7.jpg" />
                     <a class="category-name" href="">
                        <p>Select Your Desires!!</p>
                     </a>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="category-item ch-400">
                     <img src="public/img/category-8.jpg" />
                     <a class="category-name" href="">
                        <p>Select Your Desires!!</p>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="call-to-action">
         <div class="container-fluid">
            <div class="row align-items-center">
               <div class="col-md-6">
                  <h1>Contact Us</h1>
               </div>
               <div class="col-md-6">
                  <a href="tel:0123456789">01773464545</a>
               </div>
            </div>
         </div>
      </div>
      
      <div class="container-xl">
         <div class="row">
            <div class="col-md-12">
               <h2>Featured <b>Products</b></h2>
               <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
               <!-- Carousel indicators -->
               <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                  <li data-target="#myCarousel" data-slide-to="2"></li>
               </ol>   
               <!-- Wrapper for carousel items -->
               <div class="carousel-inner">
                  <div class="item carousel-item active">
                     <div class="row">
                        <div class="col-sm-3">
                           <div class="thumb-wrapper">
                              <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                              <div class="img-box">
                                 <img src="public/img/product-1.jpg" class="img-fluid" alt="">                         
                              </div>
                              <div class="thumb-content">
                                 <h4>Apple iPad</h4>                          
                                 <div class="star-rating">
                                    <ul class="list-inline">
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                    </ul>
                                 </div>
                                 <p class="item-price"><strike>$400.00</strike> <b>$369.00</b></p>
                                 <a href="#" class="btn btn-primary">Add to Cart</a>
                              </div>                  
                           </div>
                        </div>
                        <div class="col-sm-3">
                           <div class="thumb-wrapper">
                              <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                              <div class="img-box">
                                 <img src="public/img/product-2.jpg" class="img-fluid" alt="Headphone">
                              </div>
                              <div class="thumb-content">
                                 <h4>Sony Headphone</h4>                         
                                 <div class="star-rating">
                                    <ul class="list-inline">
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                    </ul>
                                 </div>
                                 <p class="item-price"><strike>$25.00</strike> <b>$23.99</b></p>
                                 <a href="#" class="btn btn-primary">Add to Cart</a>
                              </div>                  
                           </div>
                        </div>      
                        <div class="col-sm-3">
                           <div class="thumb-wrapper">
                              <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                              <div class="img-box">
                                 <img src="public/img/product-3.jpg" class="img-fluid" alt="Macbook">
                              </div>
                              <div class="thumb-content">
                                 <h4>Macbook Air</h4>                         
                                 <div class="star-rating">
                                    <ul class="list-inline">
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
                                    </ul>
                                 </div>
                                 <p class="item-price"><strike>$899.00</strike> <b>$649.00</b></p>
                                 <a href="#" class="btn btn-primary">Add to Cart</a>
                              </div>                  
                           </div>
                        </div>                        
                        <div class="col-sm-3">
                           <div class="thumb-wrapper">
                              <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                              <div class="img-box">
                                 <img src="public/img/product-4.jpg" class="img-fluid" alt="Nikon">
                              </div>
                              <div class="thumb-content">
                                 <h4>Nikon DSLR</h4>                          
                                 <div class="star-rating">
                                    <ul class="list-inline">
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                    </ul>
                                 </div>
                                 <p class="item-price"><strike>$315.00</strike> <b>$250.00</b></p>
                                 <a href="#" class="btn btn-primary">Add to Cart</a>
                              </div>                  
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="item carousel-item">
                     <div class="row">
                        <div class="col-sm-3">
                           <div class="thumb-wrapper">
                              <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                              <div class="img-box">
                                 <img src="public/img/product-4.jpg" class="img-fluid" alt="Play Station">
                              </div>
                              <div class="thumb-content">
                                 <h4>Sony Play Station</h4>
                                 <p class="item-price"><strike>$289.00</strike> <span>$269.00</span></p>
                                 <div class="star-rating">
                                    <ul class="list-inline">
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                    </ul>
                                 </div>
                                 <a href="#" class="btn btn-primary">Add to Cart</a>
                              </div>                  
                           </div>
                        </div>
                        <div class="col-sm-3">
                           <div class="thumb-wrapper">
                              <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                              <div class="img-box">
                                 <img src="/examples/images/products/macbook-pro.jpg" class="img-fluid" alt="Macbook">
                              </div>
                              <div class="thumb-content">
                                 <h4>Macbook Pro</h4>
                                 <p class="item-price"><strike>$1099.00</strike> <span>$869.00</span></p>
                                 <div class="star-rating">
                                    <ul class="list-inline">
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
                                    </ul>
                                 </div>
                                 <a href="#" class="btn btn-primary">Add to Cart</a>
                              </div>                  
                           </div>
                        </div>
                        <div class="col-sm-3">
                           <div class="thumb-wrapper">
                              <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                              <div class="img-box">
                                 <img src="/examples/images/products/speaker.jpg" class="img-fluid" alt="Speaker">
                              </div>
                              <div class="thumb-content">
                                 <h4>Bose Speaker</h4>
                                 <p class="item-price"><strike>$109.00</strike> <span>$99.00</span></p>
                                 <div class="star-rating">
                                    <ul class="list-inline">
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                    </ul>
                                 </div>
                                 <a href="#" class="btn btn-primary">Add to Cart</a>
                              </div>                  
                           </div>
                        </div>
                        <div class="col-sm-3">
                           <div class="thumb-wrapper">
                              <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                              <div class="img-box">
                                 <img src="/examples/images/products/galaxy.jpg" class="img-fluid" alt="Galaxy">
                              </div>
                              <div class="thumb-content">
                                 <h4>Samsung Galaxy S8</h4>
                                 <p class="item-price"><strike>$599.00</strike> <span>$569.00</span></p>
                                 <div class="star-rating">
                                    <ul class="list-inline">
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                    </ul>
                                 </div>
                                 <a href="#" class="btn btn-primary">Add to Cart</a>
                              </div>                  
                           </div>
                        </div>                  
                     </div>
                  </div>
                  <div class="item carousel-item">
                     <div class="row">
                        <div class="col-sm-3">
                           <div class="thumb-wrapper">
                              <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                              <div class="img-box">
                                 <img src="/examples/images/products/iphone.jpg" class="img-fluid" alt="iPhone">
                              </div>
                              <div class="thumb-content">
                                 <h4>Apple iPhone</h4>
                                 <p class="item-price"><strike>$369.00</strike> <span>$349.00</span></p>
                                 <div class="star-rating">
                                    <ul class="list-inline">
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                    </ul>
                                 </div>
                                 <a href="#" class="btn btn-primary">Add to Cart</a>
                              </div>                  
                           </div>
                        </div>
                        <div class="col-sm-3">
                           <div class="thumb-wrapper">
                              <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                              <div class="img-box">
                                 <img src="/examples/images/products/canon.jpg" class="img-fluid" alt="Canon">
                              </div>
                              <div class="thumb-content">
                                 <h4>Canon DSLR</h4>
                                 <p class="item-price"><strike>$315.00</strike> <span>$250.00</span></p>
                                 <div class="star-rating">
                                    <ul class="list-inline">
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                    </ul>
                                 </div>
                                 <a href="#" class="btn btn-primary">Add to Cart</a>
                              </div>                  
                           </div>
                        </div>
                        <div class="col-sm-3">
                           <div class="thumb-wrapper">
                              <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                              <div class="img-box">
                                 <img src="/examples/images/products/pixel.jpg" class="img-fluid" alt="Pixel">
                              </div>
                              <div class="thumb-content">
                                 <h4>Google Pixel</h4>
                                 <p class="item-price"><strike>$450.00</strike> <span>$418.00</span></p>
                                 <div class="star-rating">
                                    <ul class="list-inline">
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
                                    </ul>
                                 </div>
                                 <a href="#" class="btn btn-primary">Add to Cart</a>
                              </div>                  
                           </div>
                        </div>   
                        <div class="col-sm-3">
                           <div class="thumb-wrapper">
                              <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                              <div class="img-box">
                                 <img src="/examples/images/products/watch.jpg" class="img-fluid" alt="Watch">
                              </div>
                              <div class="thumb-content">
                                 <h4>Apple Watch</h4>
                                 <p class="item-price"><strike>$350.00</strike> <span>$330.00</span></p>
                                 <div class="star-rating">
                                    <ul class="list-inline">
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                       <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                    </ul>
                                 </div>
                                 <a href="#" class="btn btn-primary">Add to Cart</a>
                              </div>                  
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Carousel controls -->
               <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                  <i class="fa fa-angle-left"></i>
               </a>
               <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                  <i class="fa fa-angle-right"></i>
               </a>
            </div>
            </div>
         </div>
      </div>
      
      <br><br><br><br>
      <!-- end content -->
      <!-- start footer -->
       <div class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h2>Get in Touch</h2>
                            <div class="contact-info">
                                <p><i class="fa fa-map-marker"></i>123 E Store, Los Angeles, USA</p>
                                <p><i class="fa fa-envelope"></i>email@example.com</p>
                                <p><i class="fa fa-phone"></i>+123-456-7890</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h2>Follow Us</h2>
                            <div class="contact-info">
                                <div class="social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                    <a href=""><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h2>Company Info</h2>
                            <ul>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Terms & Condition</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h2>Purchase Info</h2>
                            <ul>
                                <li><a href="#">Pyament Policy</a></li>
                                <li><a href="#">Shipping Policy</a></li>
                                <li><a href="#">Return Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="row payment align-items-center">
                    <div class="col-md-6">
                        <div class="payment-method">
                            <h2>We Accept:</h2>
                            <img src="public/img/payment-method.png" alt="Payment Method" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="payment-security">
                            <h2>Secured By:</h2>
                            <img src="public/img/godaddy.svg" alt="Payment Security" />
                            <img src="public/img/norton.svg" alt="Payment Security" />
                            <img src="public/img/ssl.svg" alt="Payment Security" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 copyright">
                        <p>Copyright &copy; <a href="https://htmlcodex.com">HTML Codex</a>. All Rights Reserved</p>
                    </div>

                    <div class="col-md-6 template-by">
                        <p>Template By <a href="https://htmlcodex.com">HTML Codex</a></p>
                    </div>
                </div>
            </div>
        </div>
      <!-- end footer -->
       <!-- Swiper JS link-->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <!-- Initialize Swiper js-->
    <script>
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: 4,
        spaceBetween: 30,
        slidesPerGroup: 1,
        loop: true,
         autoplay: {
          delay: 2500,
          disableOnInteraction: false,
        },
        loopFillGroupWithBlank: true,
        breakpoints: {
    // when window width is >= 320px
    320: {
      slidesPerView: 1,
      spaceBetween: 20
    },
    // when window width is >= 480px
    480: {
      slidesPerView: 2,
      spaceBetween: 30
    },
    // when window width is >= 640px
    640: {
      slidesPerView: 2,
      spaceBetween: 40
    },
    767:{
        slidesPerView: 3,
      spaceBetween: 40
    },
    769:{
        slidesPerView: 4,
      spaceBetween: 40
    }
  },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
    </script>
   </body>
</html>

