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
   <body class="main-layout inner_posituong contact_page">
      
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
                              <li class="nav-item ">
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
    <a class="dropdown-item" href="Accessories">Accessories</a>
  </div>
</div>
</li>
                              <li class="nav-item ">
                                 <a class="nav-link active" href="contact">Contact Us</a>
                              </li>
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
      <!--  contact -->
      <div class="contact">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Contact Now</h2>
                  </div>
               </div>
            </div>
            <div class="row" >
               <div class="col-md-10 offset-md-1">
                  <form id="request" class="main_form" action="{{URL::TO('/contact')}}" method="POST">
                  @csrf   
                  <div class="row">
                        <div class="col-md-12 ">
                           <input class="contactus" placeholder="Name" type="type" name="Name"> 
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Email" type="type" name="Email"> 
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Phone Number" type="number" name="Number">                          
                        </div>
                        <div class="col-md-12">
                           <textarea class="textarea" placeholder="Message" type="text" name="Message" >Message </textarea>
                        </div>
                        <div class="col-md-12">
                           <button class="send_btn" name="btn">Send</button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <!-- end contact -->
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
                        <li>Laptops  , Computers <br>Mouses , Keyboards <br>Speakers , Hardisks <br>Batterys , Rams <br>Tablets
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
