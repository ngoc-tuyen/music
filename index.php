<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Untitled Document</title>
<link href="styles/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet"
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
	  
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                  <a class="nav-link" href="index.php"> Home <span class="glyphicon glyphicon-home sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#"> <span class="glyphicon glyphicon-user"></span>Content</a>
              </li>
              <li class="nav-item dropdown">
                  <a class="nav-link" href="#" id="navbarDropdown">
                      Genre
                  </a>
                  <div class="dropdown-content">
                      <a class="dropdown-item" href="#">Korea</a>
                      <a class="dropdown-item" href="#">US-UK</a>
                      <a class="dropdown-item" href="#">Vietnamese</a>
                      <a class="dropdown-item" href="#">Chinese</a>
                  </div>
              </li>
          </ul>
          
          <form class="form-inline my-2 my-lg-0" action="search.php" method="post">
              <input class="form-control mr-sm-2"  type="search" placeholder="search" aria-label="search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">search</button>
	 	  </form>  
				  <div class="dropdown">
					<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
					  Login
					</button>
					<div class="dropdown-menu">
						  <h5 class="dropdown-header">User</h5>
						  <a class="dropdown-item" href="login.php">Login</a>
						  <a class="dropdown-item" href="register.php">Register</a>
						  <div class="dropdown-divider"></div>
						  <h5 class="dropdown-header">Admin</h5>
					  <a class="dropdown-item" href="insert_song.php">Insert Song</a>
					</div>
				  </div>
			  
         
      </div>
  </div>
</nav>
<!-- end menu -->
<!-- slide -->
<div id="carouselExampleIndicators" class="carousel slide mt-1" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/slide1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/slide2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/slide3.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- end slide -->
<!-- list product -->
<div class="container">
	<div class="row mt-5">
		<h2 class="list-product-title">Product</h2>
		<div class="list-product-subtitle">
		</div>
		<div class="product-group">
			<div class="row">
				<?php 
				 
		  
		global $con;
				$con = new MySQLi('localhost','root','','sdlc');
				if (!$con)
					{
						echo "ket noi that bai";
					}
		  
		$get_pro = " select * from song";
		
		$run_pro = mysqli_query($con, $get_pro);
		
		while($row_pro = mysqli_fetch_array($run_pro)){
		  $pro_Id = $row_pro['SongId'];
		  $pro_Name = $row_pro['SongName'];
		  $pro_Price = $row_pro['SongPrice'];
		  $pro_File = $row_pro['SongFile'];
		  $pro_Image = $row_pro['SongImage'];
		  $pro_Title = $row_pro['SongTitle'];	  
		  
		  echo "
		           <div class='col-md-3 col-sm-6 col-xs-12'>
			    <h3>$pro_Title</h3>
				<img src='images/$pro_Image' width='250' height='250' />
				<br/>
				<audio id='audio_1' controls> 
					<source src='images/$pro_File ' />
				</audio>
				<p><b> $pro_Name </b></p>
				<p><b> Price: $ $pro_Price </b></p>
				
				<a href='index.php?add_cart=$pro_Id'>
				  <button style='float:left'>Buy now</button>
				</a>
			  </div>
			  
			  
		  ";
		};
		?>				
			</div>
		</div>
	</div>
	
	<!-- Footer -->
<footer class="page-footer font-small blue-grey lighten-5">

  
  <!-- Footer Links -->
  <div style="background-color: #E9E9E9" class="container text-center text-md-left mt-5">

    <!-- Grid row -->
    <div class="row mt-3 dark-grey-text">

      <!-- Grid column -->
      
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Support</h6>
        <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
        <a href="#!">help</a>
        </p>
        <p>
        <a href="#!">diagram</a>
        </p>
        <p>
        <a href="#!">Contact advertising</a>
		</p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">other services</h6>
        <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <a class="dark-grey-text" href="#!">Mobile app</a>
        </p>
        <p>
          <a class="dark-grey-text" href="#!">Mobile web</a>
        </p>
        <p>
          <a class="dark-grey-text" href="#!">Desktop</a>
        </p>
        <p>
          <a class="dark-grey-text" href="#!">3G service</a>
        </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Contact</h6>
        <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <i class="fas fa-home mr-3"></i> Viet Nam, Ha Noi,</p>
        <p>
          <i class="fas fa-envelope mr-3"></i> info@example.com</p>
        <p>
          <i class="fas fa-phone mr-3"></i> + 84 234 567 88</p>
        <p>
          <i class="fas fa-print mr-3"></i> + 84 234 567 89</p>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center text-black-50 py-3">© 2020 Copyright
  
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
</div>
</body>
</html>