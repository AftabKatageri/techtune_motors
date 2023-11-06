<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<?php include 'navigate.php'; ?>


<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/cc5.jpg" alt="TechTune Motors" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Car view</h3>
        <p>We had such a great time working</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/cc2.jpg" alt="TechTune Motors" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Explore Now</h3>
        <p>Thank you, TechTune!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/cc1.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <p>Welcome to our website!!</p>
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

<section class="m-5">
	<div >
		<h2 class="text-center"> About Us</h2>
	</div>
	<div class="row mt-5">
		<div class="col-lg-6 col-md-6 col-12">
			<img src="images/cc3.jpg" class="img-fluid aboutimg" >
		</div>
		<div class="col-lg-6 col-12">
			<h2 class="display-4"> We are TechTune Motors. </h2>
			<p class="py-4"> TechTune Motors website is an online platform designed to provide information, 
                resources, and services related to the maintenance, repair, and overall care of automobiles,
                 motorcycles, or any other motor vehicles. It serves as a digital hub for vehicle owners and enthusiasts, 
                 offering a range of features and content . </p>
			<a href="about.php" class="btn btn-success">Wanna Know Us?</a>		
		</div>
	</div>
</section>

<section class="m-5">
	<div class="pt-5">
		<h2 class="text-center"> Our Services and Our Work! </h2>
	</div>
	<div class="mt-5 container-fluid">
		<div class="row">
			 <div class="col-lg-3 col-md-3 col-12">
			 	<div class="card" >
				  <img class="card-img-top" src="images/cc6.jpg" alt="Card image">
				  <div class="card-body">
				    <h4 class="card-title">Step 1</h4>
				    <p class="card-text">Select The Perfect Car Service From Techtune Portfolio.</p>
				    
				  </div>
				</div>
			 </div>
			  <div class="col-lg-3 col-md-3 col-12">
			 	<div class="card" >
				  <img class="card-img-top" src="images/cc7.jpg" alt="Card image">
				  <div class="card-body">
				    <h4 class="card-title">Step 2</h4>
				    <p class="card-text">Schedule Free Door Step Pickup And Drop For All Services Booked..</p>
				    
				  </div>
				</div>
			 </div>
			  <div class="col-lg-3 col-md-3 col-12">
			 	<div class="card" >
				  <img class="card-img-top" src="images/cc8.jpg" alt="Card image">
				  <div class="card-body">
				    <h4 class="card-title">Step 3</h4>
				    <p class="card-text">Track Your Car Services Real-Time and Enjoy while we service</p>
				    
				  </div>
				</div>
			 </div>
             <div class="col-lg-3 col-md-3 col-12">
			 	<div class="card" >
				  <img class="card-img-top" src="images/cc4.jpg" alt="Card image">
				  <div class="card-body">
				    <h4 class="card-title">Finish</h4>
				    <p class="card-text">Your Vehicle is Perfect To Ride..</p>
				    
				  </div>
				</div>
			 </div>
		</div>
	</div>
</section>



<section class="m-5">
	<div class="pt-5">
		<h2 class="text-center"> Gallery</h2>
        <p class="text-center"> This gallery typically includes a collection of 
            images and sometimes videos that offer a glimpse into the services and projects 
            we have undertaken. </p>
	</div>
	<div class="row mt-5">
		<div class="col-lg-4 col-md-4 col-12  mb-4">
			<img src="images/cc9.jpg" class="img-fluid pb-3">
		</div>
		<div class="col-lg-4 col-md-4 col-12  mb-4">
			<img src="images/cc10.jpg" class="img-fluid pb-3">
            <p class="text-center"><br>The way we serve! </p> 
		</div><div class="col-lg-4 col-md-4 col-12  mb-4">
			<img src="images/cc13.jpg" class="img-fluid pb-3">
		</div><div class="col-lg-4 col-md-4 col-12  mb-4">
			<img src="images/cc11.jpg" class="img-fluid pb-3">
		</div><div class="col-lg-4 col-md-4 col-12  mb-4">
			<img src="images/cc12.jpg" class="img-fluid pb-3">
		</div><div class="col-lg-4 col-md-4 col-12  mb-4">
			<img src="images/c10.jpg" class="img-fluid pb-3">
		</div>
	</div>
</section>


<section class="my-5">
	<div class="pt-5">
		<h1 class="text-center">  Contact Us </h1>
        <p class="text-center"> Way Through Which You Can Contact Us! </p> 
	</div>

	<div class="w-50 m-auto">
		<form action="userinfo.php" method="post">
		<div class="form-group">
	    <label for="pwd">Name:</label>
	    <input type="text" class="form-control" name="user" >
	  </div>
	  <div class="form-group">
	    <label for="email">Email address:</label>
	    <input type="email" class="form-control" name="email" autocomplete="off">
	  </div>
	  <div class="form-group">
	    <label for="pwd">Mobile:</label>
	    <input type="text" class="form-control" name="mobile">
	  </div>
		<div class="form-group">
			<label for="comment">Comment:</label>
  <textarea class="form-control" rows="5" name="comment"></textarea>

		</div>
	

	  <button type="submit" class="btn btn-success">Submit</button>
	</form>
		
	</div>
</section>
<?php include 'footer.php'; ?>
<footer>

	<div class=" bg-dark text-center text-capitalize">
		<h5 class="py-3 text-white">TechTune@gmail.com</h5>
        <h5 class="py-3 text-white">RR Nagar</h5>
	</div>
</footer>



</body>
</html>