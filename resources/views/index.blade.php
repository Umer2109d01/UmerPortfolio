

<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Techworld</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
      <style>

img

{
   transition:0.9;

}
img:hover{
   transform:scale(1.1);
}
</style>
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                         <img src="images/Logo.png" style="height: 70px;" alt="#" />
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item active">
                                 <a class="nav-link" href="/">Home</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="about">About</a>
                              </li>
                              
                              
                              <div class="dropdown nav-item">
                                 <li class="nav-item">
                                    <a class="nav-link " href="product" data-toggle="dropdown" >Product</a>
                                
     <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
     <a class="dropdown-item " href="all">All</a>
       <a class="dropdown-item " href="laptop">Laptop</a>
       <a class="dropdown-item" href="Computer"> Computer</a>
       <a class="dropdown-item" href="Tablet">Tablets</a>
       <a class="dropdown-item" href="Accessories.">Accessories</a>
     </div>
   </div>
   </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="contact">Contact Us</a>
                              </li>
                              @if(auth()->user() == null)
                              <li class="nav-item">
                                 <a class="nav-link" href="register">Sign Up</a>
                              </li>
                              
                              <li class="nav-item ">
                                 <a class="nav-link" href="login">Login</a>
                              </li>
                              @else
                              @if(auth()->user()->admin == 0)
                              <li class="nav-item ">
                                 <a class="nav-link" href="dashboard">{{ Auth::user()->name }}</a>
                              </li>
                              @else
                              <li class="nav-item ">
                                 <a class="nav-link" href="profile">{{ Auth::user()->name }}</a>
                              </li>
                              @endif
                              @endif
                              <li class="nav-item ">
                                 <a class="nav-link" href="cart">Cart</a>
                              </li>
                           </ul>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header inner -->
      <!-- end header -->
      <!-- banner -->
      <section class="banner_main">
         <div id="banner1" class="carousel slide" data-ride="carousel">
            <ol class="">
               <li data-target="#banner1" data-slide-to="0" class=""></li>
               
              
            </ol>
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <div class="carousel-caption">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="text-bg">
                                 <span>Computer And Laptop</span>
                                 <h1>Accessories</h1>
                                 <p>There are many types of Computers, Laptops, Tablets, and Accessories are available are here. </p>
                                 <a href="all">Buy Now </a> <a href="contact">Contact </a>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="text_img">
                                 <figure><img src="images/pct.png" alt="#"/></figure>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="carousel-caption">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="text-bg">
                                 <span>Computer And Laptop</span>
                                 <h1>Accessories</h1>
                                 <p>There are many types of Computers, Laptops, Tablets, and Accessories are available are here.</p>
                                 <a href="all">Buy Now </a> <a href="contact">Contact </a>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="text_img">
                                 <figure><img src="images/pct.png" alt="#"/></figure>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="carousel-caption">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="text-bg">
                                 <span>Computer And Laptop</span>
                                 <h1>Accessories</h1>
                                 <p>There are many types of Computers, Laptops, Tablets, and Accessories are available are here.</p>
                                 <a href="all">Buy Now </a> <a href="contact">Contact </a>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="text_img">
                                 <figure><img src="images/pct.png" alt="#"/></figure>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="carousel-caption">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="text-bg">
                                 <span>Computer And Laptop</span>
                                 <h1>Accessories</h1>
                                 <p>There are many types of Computers, Laptops, Tablets, and Accessories are available are here.</p>
                                 <a href="all">Buy Now </a> <a href="contact">Contact </a>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="text_img">
                                 <figure><img src="images/pct.png" alt="#"/></figure>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="carousel-caption">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="text-bg">
                                 <span>Computer And Laptop</span>
                                 <h1>Accessories</h1>
                                 <p>There are many types of Computers, Laptops, Tablets, and Accessories are available are here.</p>
                                 <a href="all">Buy Now </a> <a href="contact.php">Contact </a>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="text_img">
                                 <figure><img src="images/pct.png" alt="#"/></figure>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#banner1" role="button" data-slide="prev">
            <i class="fa fa-chevron-left" aria-hidden="true"></i>
            </a>
            <a class="carousel-control-next" href="#banner1" role="button" data-slide="next">
            <i class="fa fa-chevron-right" aria-hidden="true"></i>
            </a>
         </div>
      </section>
      <!-- end banner -->
      <!-- three_box -->
      <div class="three_box">
         <div class="container">
            <div class="row">
               <div class="col-md-4">
                  <div class="box_text">
                     <i><img src="images/thr.png" alt="#"/></i>
                     <h3> <a href="computer"> Computer</h3></a>
                     <p>A computer is a machine or device that performs processes, calculations and operations based instructions provided by  software or hardware program. It has  ability to accept data (input), process it, and then produce outputs.</p>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="box_text">
                     <i><img src="images/thr1.png" alt="#"/></i>
                     <h3> <a href="laptop"> Laptop</h3></a>
                     <p>A laptop, laptop computer, or notebook computer is a small, portable personal computer (PC) with a screen and alphanumeric keyboard. Laptops combine all the input/output components and capabilities of a desktop computer. </p>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="box_text">
                     <i><img src="images/thr2.png" alt="#"/></i>
                     <h3> <a href="tablet"> Tablet</h3></a>
                     <p>A tablet is a wireless, portable personal computer with a touchscreen interface. The tablet form factor is typically smaller than a notebook computer, but larger than a smartphone.  </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- three_box -->
      <!-- products -->
      <div  class="products">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Our Products</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="our_products">
                     <div class="row">
                        <div class="col-md-4 margin_bottom1">
                           <div class="product_box">
                              <figure><img src="images/product1.jpg" alt="#"/></figure>
                              <h3> <a href="computer" style="color:white"> Computer  </a></h3>
                           </div>
                        </div>
                        <div class="col-md-4 margin_bottom1">
                           <div class="product_box">
                              <figure><img src="images/product2.jpg" alt="#"/></figure>
                              <h3> <a href="laptop" style="color:white"> Laptop  </a></h3>
                           </div>
                        </div>
                        <div class="col-md-4 margin_bottom1">
                           <div class="product_box">
                              <figure><img src="images/product3.jpg" alt="#"/></figure>
                              <h3> <a href="tablet" style="color:white"> Tablet  </a></h3>
                           </div>
                        </div>
                        <div class="col-md-4 margin_bottom1">
                           <div class="product_box">
                              <figure><img src="images/product4.png" alt="#"/></figure>
                              <h3> <a href="accessories" style="color:white"> Speaker  </a></h3>
                           </div>
                        </div>
                        <div class="col-md-4 margin_bottom1">
                           <div class="product_box">
                              <figure><img src="images/product5.png" alt="#"/></figure>
                              <h3> <a href="accessories" style="color:white"> Internet  </a></h3>
                           </div>
                        </div>
                        <div class="col-md-4 margin_bottom1">
                           <div class="product_box">
                              <figure><img src="images/product6.png" alt="#"/></figure>
                              <h3> <a href="accessories" style="color:white"> Hardisk  </a></h3>
                           </div>
                        </div>
                        <div class="col-md-4">
                           <div class="product_box">
                              <figure><img src="images/product7.png" alt="#"/></figure>
                              <h3> <a href="accessories" style="color:white"> Rams  </a></h3>
                           </div>
                        </div>
                        <div class="col-md-4">
                           <div class="product_box">
                              <figure><img src="images/product8.png" alt="#"/></figure>
                              <h3> <a href="accessories" style="color:white"> Battery  </a></h3>
                           </div>
                        </div>
                        <div class="col-md-4">
                           <div class="product_box">
                              <figure><img src="images/product9.png" alt="#"/></figure>
                              <h3> <a href="accessories" style="color:white"> Drive  </a></h3>
                           </div>
                        </div>
                        <br><br>
                        <div class="col-md-4">
                           <div class="product_box">
                              <figure><img src="images/product11.jpg" alt="#"/></figure>
                              <h3> <a href="accessories" style="color:white"> Mouse  </a></h3>
                           </div>
                        </div>
                        <div class="col-md-4">
                           <div class="product_box">
                              <figure><img src="images/product10.jpg" alt="#"/></figure>
                              <h3> <a href="accessories" style="color:white"> Keyboard  </a></h3>
                           </div>
                        </div>
                        <div class="col-md-4">
                           <div class="product_box">
                              <figure><img src="images/product12.jpg" alt="#"/></figure>
                              <h3> <a href="accessories" style="color:white"> Ssd  </a></h3>
                           </div>
                        </div>
                       
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end products -->
      <!-- laptop  section -->
      <div class="laptop">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <div class="titlepage">
                     <p>Every Computer and laptop</p>
                     <h2>Up to 40% off !</h2>
                     <a class="read_more" href="all">Shop Now</a>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="laptop_box">
                     <figure><img src="images/pc.png" alt="#"/></figure>
                  </div>
               </div>
            </div>
         </div>
      </div>
      </div>
      <!-- end laptop  section -->
      <!-- customer -->
      <div class="customer">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Customer Review</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div id="myCarousel" class="carousel slide customer_Carousel " data-ride="carousel">
                     <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                     </ol>
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <div class="container">
                              <div class="carousel-caption ">
                                 <div class="row">
                                    <div class="col-md-9 offset-md-3">
                                       <div class="test_box">
                                          <i><img src="images/cos.png" alt="#"/></i>
                                          <h4>Johnson</h4>
                                          <p>I am supremely satisfied with this item, having used it now for almost a year. With all of its features and a stunning performance, this was a real bargain at the price I paid. I would recommend it to anyone needing a medium performance workhorse laptop with a large screen.</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container">
                              <div class="carousel-caption">
                                 <div class="row">
                                    <div class="col-md-9 offset-md-3">
                                       <div class="test_box">
                                          <i><img src="images/cos.png" alt="#"/></i>
                                          <h4>Sanday miller</h4>
                                          <p>Thank you very much for such a wonderful product. It was nicely packed and delivered. Just a suggestion, it must have windows pre installed.</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container">
                              <div class="carousel-caption">
                                 <div class="row">
                                    <div class="col-md-9 offset-md-3">
                                       <div class="test_box">
                                          <i><img src="images/cos.png" alt="#"/></i>
                                          <h4>David</h4>
                                          <p>Amazing seller response and the Chromebook is in amazing quality 10/10 would recommend! very happy with my purchase</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                     <span class="sr-only">Previous</span>
                     </a>
                     <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                     <span class="carousel-control-next-icon" aria-hidden="true"></span>
                     <span class="sr-only">Next</span>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end customer -->

     
      <!--  footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                     <img class="logo1" style="height: 70px;" src="images/logo2.png" alt="#"/>
                     <ul class="social_icon">
                        <li><a href="https://www.facebook.com/profile.php?id=100016734302257"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="https://instagram.com/kotwalsamiullah?igshid=YmMyMTA2M2Y="><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        
                        <li><a href="https://www.snapchat.com/add/shonayk?share_id=ZB9-Bs3aIzw&locale=en-US"><i class="fa fa-snapchat" aria-hidden="true"></i></a></li>
                     </ul>
                  </div>
                  <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                     <h3>About Us</h3>
                     <ul class="about_us">
                     <li>Welcome to Techworld. Online Computer store in Pakistan. Buy Laptops, Computers, Tablets and Accessories  at the best prices in Pakistan.
                        </li>
                     </ul>
                  </div>
                  <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                     <h3>Contact Us</h3>
                     <ul class="conta">
                        <li>+923232842882<br> +923021954421<br>umer2109d01@aptechgdn.net<br>sami2109d01@aptechgdn.net</li>
                     </ul>
                  </div>
                  <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                     <h3>Products</h3>
                     <ul class="about_us">
                        <li>Laptops  , Computers <br>Mouses , Keyboards <br>Speakers , Hardisks <br>Batterys , Rams <br> Tablets
</li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <p>© Techworld 2022 All Rights Reserved.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>

