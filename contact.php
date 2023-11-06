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
<div class="jumbotron">
  <h1 class="text-uppercase">TechTune Motors </h1> 
  <p class="text-capitalize"> Rajarajeshwari Nagar, Bangalore <br><span class="text-uppercase">Have a visit!</span></p> 
</div>
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