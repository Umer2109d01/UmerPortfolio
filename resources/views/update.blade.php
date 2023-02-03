<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <title>Techworld</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css1/bootstrap.min.css" rel="stylesheet">

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- Template Stylesheet -->
    <link href="css1/style.css" rel="stylesheet">
</head>

<body>

   
           
          <div class="container">
            <form method="post"  action="/add_product" enctype="multipart/form-data">
                @csrf   
               
            <div class="form-group">
            <label for="">Product Name</label>
            <input type="text"
              class="form-control" name="pname" required id="" aria-describedby="helpId"  placeholder="">
           
          </div>
          <br>
            <div class="form-group">
            <label for="">Product Price</label>
            <input type="text"
              class="form-control" name="pprice" required id="" aria-describedby="helpId" placeholder="">
           
          </div>
          <br>
            <div class="form-group">
            <label for="">Product Quantity</label>
            <input type="number"
              class="form-control" name="pquantity" required id="" aria-describedby="helpId" placeholder="">
           
          </div>
          <br>
          <div class="form-group">
            <label for="">Product Image</label>
            <input type="file"
              class="form-control" required name="pimage" id="" aria-describedby="helpId" placeholder="">
           
          </div>
<br>
          <div class="form-group">
            <label for="">Product type </label>
           <select name="ptype" required  class="form-control">
        <option>
            NEW
</option>
<option>
            USED
</option>
</select>
           
          </div>
          <br>
          <div class="form-group">
            <label for="">Product Description</label>
            <input type="text"
              class="form-control" name="pdesc" id="" required aria-describedby="helpId" placeholder="">
           
          </div>
          <br>
          <div class="form-group">
          <label for="">Product Category </label>
          <select name="pcategory" required  class="form-control">
         
            
           
        @foreach($catdata as $ct)
     
        <option value=" {{$ct->id}}">
        {{$ct->cat_name}}
        </option>
       
      @endforeach
       


</select>


        
       


 
       <br>


          <button class="btn btn-primary" name="btn">Add Product</button>

                           



</form>


</div>














           
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>


