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
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
      media="screen">
      <script src="js/jquery.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.bundle.min.js"></script>
   <script src="js/jquery-3.0.0.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
      
   <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   <style>
      img {
         transition: 0.9;

      }

      img:hover {
         transform: scale(1.1);
      }




      body {
         width: 100%;
         height: 100%;
         margin: 0;
         background-color: white;
         font-family: 'Roboto', sans-serif;
      }

      .shopping-cart {
         width: 750px;
         height: 423px;
         margin: 80px auto;
         background: #FFFFFF;
         box-shadow: 1px 2px 3px 0px rgba(0, 0, 0, 0.10);
         border-radius: 6px;

         display: flex;
         flex-direction: column;
      }

      .title {
         height: 60px;
         border-bottom: 1px solid #E1E8EE;
         padding: 20px 30px;
         color: #5E6977;
         font-size: 18px;
         font-weight: 400;
      }

      .item {
         padding: 20px 30px;
         height: 120px;
         display: flex;
      }

      .item:nth-child(3) {
         border-top: 1px solid #E1E8EE;
         border-bottom: 1px solid #E1E8EE;
      }

      .buttons {
         position: relative;
         padding-top: 30px;
         margin-right: 60px;
      }

      .delete-btn,
      .like-btn {
         display: inline-block;
         Cursor: pointer;
      }

      .delete-btn {
         width: 18px;
         height: 17px;
         background: url(&amp;quot;delete-icn.svg&amp;quot;) no-repeat center;
      }

      .like-btn {
         position: absolute;
         top: 9px;
         left: 15px;
         /* background: url('twitter-heart.png'); */
         width: 60px;
         height: 60px;
         background-size: 2900%;
         background-repeat: no-repeat;
      }

      .is-active {
         animation-name: animate;
         animation-duration: .8s;
         animation-iteration-count: 1;
         animation-timing-function: steps(28);
         animation-fill-mode: forwards;
      }

      @keyframes animate {
         0% {
            background-position: left;
         }

         50% {
            background-position: right;
         }

         100% {
            background-position: right;
         }
      }

      .image {
         margin-right: 50px;
      }

      .description {
         padding-top: 10px;
         margin-right: 60px;
         width: 115px;
      }

      .description span {
         display: block;
         font-size: 14px;
         color: #43484D;
         font-weight: 400;
      }

      .description span:first-child {
         margin-bottom: 5px;
      }

      .description span:last-child {
         font-weight: 300;
         margin-top: 8px;
         color: #86939E;
      }

      .quantity {
         padding-top: 20px;
         margin-right: 60px;
      }

      .quantity input {
         -webkit-appearance: none;
         border: none;
         text-align: center;
         width: 32px;
         font-size: 16px;
         color: #43484D;
         font-weight: 300;
      }

      button[class*=btn] {
         width: 110px;
         height: 40px;
         background-color: #E1E8EE;
         border-radius: 6px;
         border: none;
         cursor: pointer;
      }

      .minus-btn img {
         margin-bottom: 3px;
      }

      .plus-btn img {
         margin-top: 2px;
      }

      button:focus,
      input:focus {
         outline: 0;
      }

      .total-price {
         width: 83px;
         padding-top: 27px;
         text-align: center;
         font-size: 16px;
         color: #43484D;
         font-weight: 300;
      }

      @media (max-width: 800px) {
         .shopping-cart {
            width: 100%;
            height: auto;
            overflow: hidden;
         }

         .item {
            height: auto;
            flex-wrap: wrap;
            justify-content: center;
         }

         .image img {
            width: 50%;
         }

         .image,
         .quantity,
         .description {
            width: 100%;
            text-align: center;
            margin: 6px 0;
         }

         .buttons {
            margin-right: 20px;
         }
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
                     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04"
                        aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
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
                                 <a class="nav-link " href="product" data-toggle="dropdown">Product</a>

                                 <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item " href="all">All</a>
                                    <a class="dropdown-item " href="laptop">Laptop</a>
                                    <a class="dropdown-item" href="computer"> Computer</a>
                                    <a class="dropdown-item" href="tablet">Tablets</a>
                                    <a class="dropdown-item" href="accessories">Accessories</a>
                                 </div>
                           </div>
                           </li>
                           <li class="nav-item ">
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
                           <li class="nav-item active">
                              <a class="nav-link " href="cart">Cart</a>
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
   <table id="cart" class="table table-hover table-condensed">
    <thead>
        <tr>
            <th style="width:50%">Product</th>
            <th style="width:10%">Price</th>
            <th style="width:8%">Quantity</th>
            <th style="width:22%" class="text-center">Subtotal</th>
            <th style="width:10%"></th>
        </tr>
    </thead>
    <tbody>

      @if(auth()->user() == null)

            <h1 >Plese login Login First</h1>

            @else
    @php $total = 0 @endphp
        @if(session('cart'))
            @foreach(session('cart') as $id => $details)
                @php $total += $details['price'] * $details['quantity'] @endphp
                <tr data-id="{{ $id }}">
                    <td data-th="Product">
                        <div class="row">
                            <div class="col-sm-3 hidden-xs"><img src="Product_image/{{ $details['image'] }}" width="100" height="100" class="img-responsive"/></div>
                            <div  class="col-sm-9">
                                <h4  class="nomargin" id="proname">{{ $details['name'] }}</h4>
                                <input readonly style="border:none;" type="text" value="{{$id}}" class="productid">
                            </div>
                        </div>
                    </td>
                    <td data-th="Price"  >Rs{{ $details['price'] }}</td>
                    <td data-th="Quantity">
                        <input type="number" value="{{ $details['quantity'] }}" class="form-control update-cart" />
                    </td>
                    <td data-th="Subtotal" class="text-center" >Rs{{ $details['price'] * $details['quantity'] }}</td>
                    <td class="actions" data-th="">
                        <button class="btn btn-danger btn-sm remove-from-cart"><i class="fa fa-trash-o"></i></button>
                    </td>
                </tr>
            @endforeach
        @endif
    </tbody>


    <tfoot>
    
 
        <tr>
            <td colspan="5" class="text-right" ><h3><input readonly style="border:none;" class="subtotal1" value="Total Rs{{ $total }}"/></h3></td>
        </tr>
       
    </tfoot>
</table>
<form method="post" >
  <div class="form-group">
   
    <input type="text" name="address" class="form-control" id="address" placeholder="Enter Address">
    <small id="emailHelp" class="form-text text-muted">We'll never share your Address with anyone else.</small>
  </div>
  <br>
  <div class="form-group">
   
    <input type="number" name="number" class="form-control" id="number" placeholder="Number">
 
  </div>



  <button  type="button" class="btn btn-success" id="continuebtn" >Place Order</button>

        
 
           
     
         


            </form>
          
     
@endif








<script type="text/javascript">
  $(document).ready(function(){

  $(".update-cart").change(function (e) {
        e.preventDefault();
  
        var ele = $(this);
  
        $.ajax({
            url: '{{ route('update.cart') }}',
            method: "patch",
            data: {
                _token: '{{ csrf_token() }}', 
                id: ele.parents("tr").attr("data-id"), 
                quantity: ele.parents("tr").find(".quantity").val()
            },
            success: function (response) {
               window.location.reload();
            }
        });
    });
  
    $(".remove-from-cart").click(function (e) {
        e.preventDefault();
  
        var ele = $(this);
  
        if(confirm("Are you sure want to remove?")) {
            $.ajax({
                url: '{{ route('remove.from.cart') }}',
                method: "DELETE",
                data: {
                    _token: '{{ csrf_token() }}', 
                    id: ele.parents("tr").attr("data-id"),
                    
                },
                success: function (response) {
                    window.location.reload();
                }
                
            });
            console.log(data)
        }
    });
   });


   $("#continuebtn").click(function(){
      $(".productid").each(function(){
         var productid = $(this).val();
         var subtotal1 = $(".subtotal1").val();
var address= $("#address").val();
var number= $("#number").val();

         console.log(productid+subtotal1);
         $.ajax({
            url:"/continuecart",
            type:"POST",
            data:{
               productid:productid,
            
               subtotal1:subtotal1,
                address:address,
                number:number,
               _token:"{{csrf_token()}}"
            },
               success:function()
               {
                  alert("Order has been placed");
               },
               error:function(){
                  alert("Error found");
               }
           
         });
      });
   });
</script>



   <!--  footer -->

   <!-- end footer -->
   <!-- Javascript files-->
   
   <!-- sidebar -->
   <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
   <script src="js/custom.js"></script>


</body>

</html>

