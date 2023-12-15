<!DOCTYPE html>
<html lang = "en">
<head>
	<meta charset = "UTf-8">
	<meta http-equiv = "X-UA-Compatible" content = "IE-edge">
	<meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
	<title>home</title>

	<!--swiper css link-->
	<link rel = "stylesheet" href ="https://unpkg.com/swiper@7/swiper.bundle.min.css">

	<!--font awesome cdn link-->
	<link rel = "stylesheet" href = "https://cdnjs.cloudfare.com/ajax/libs/font.awesome/5.15.4/css/all.min.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	
	<!--custom css file link-->
	<link rel = "stylesheet" href = "css/style.css">

	<script type = "text/javascript">
		function display()
		{
			alert("You have successfully booked your TOUR.Total amount to be payed is Rs.5000/-");
		}
		</script>
</head>

<body>

<!--header section starts-->

<section class = "header">
	<a href = "home.php" class = "logo"></a>
	<img src = "images/Travelers.png" alt = "logo" style = "width:10%;margin-right: auto;margin-left: -85px;">

	<nav class = "navbar">
		<a href = "home.php">Home</a>
		<a href = "about.php">About</a>
		<a href = "package.php">Package</a>
		<a href = "book.php">Book</a>
	</nav>

<div id = "menu-btn" class = "fas fa-bars"></div>

</section>

<!--header section ends-->
<div class="heading" style="background:url(images/header-bg-3.jpg) no-repeat">
	<h1>Book Now</h1>
</div>

<section class="booking">
	
	<h1 class="heading-title">Book Your trip!</h1>

	<form action="book_form.php" method="post" class="book-form">

		<div class="flex">
			<div class="inputBox">
				<span>Name :</span>
				<input type="text" placeholder="Enter your Name" name="name">

			</div>
			<div class="inputBox">
				<span>Email :</span>
				<input type="text" placeholder="Enter your Email" name="email">

			</div>
			<div class="inputBox">
				<span>Phone :</span>
				<input type="text" placeholder="Enter your Number" name="phone">

			</div>
			<div class="inputBox">
				<span>Address :</span>
				<input type="text" placeholder="Enter your Address" name="address">

			</div>
			<div class="inputBox">
				<span>Where to :</span>
				<input type="text" placeholder="Place you want to visit" name="location">

			</div>
			<div class="inputBox">
				<span>How many :</span>
				<input type="number" placeholder="Number of Guests" name="guests">

			</div>
			<div class="inputBox">
				<span>Arrivals :</span>
				<input type="date" name="arrivals">


			</div>
			<div class="inputBox">
				<span>Leaving :</span>
				<input type="date" name="leaving">
				

			</div>

		</div>
		<input type="submit" value="Submit" class="btn" name="send" onclick = "display()">
	</form>
</section>

<!--footer section starts-->

<section class = "footer">

	<div class = "box-container">

		<div class = "box">
			<h3>Quick links</h3>
			<a href = "home.php"> <i class = "fas fa-angle-right"></i>home</a>
			<a href = "about.php"> <i class = "fas fa-angle-right"></i>about</a>
			<a href = "package.php"> <i class = "fas fa-angle-right"></i>package</a>
			<a href = "book.php"> <i class = "fas fa-angle-right"></i>book</a>
		</div>

		<div class = "box">
			<h3>Extra links</h3>
			<a href = "#"> <i class = "fas fa-angle-right"></i>ask questions</a>
			<a href = "#"> <i class = "fas fa-angle-right"></i>about us</a>
			<a href = "#"> <i class = "fas fa-angle-right"></i>privacy policy</a>
			<a href = "#"> <i class = "fas fa-angle-right"></i>terms of use</a>
		</div>

		<div class = "box">
			<h3>Contact info</h3>
			<a href = "#"> <i class = "fas fa-phone"></i>+123-456-7890</a>
			<a href = "#"> <i class = "fas fa-phone"></i>+111-222-3333</a>
			<a href = "#"> <i class = "fas fa-envelope"></i>shaikhanas@gmail.com</a>
			<a href = "#"> <i class = "fas fa-map"></i>Mumbai, India - 400104</a>
		</div>


		<div class = "box">
			<h3>Follow us</h3>
			<a href = "#"> <i class = "fas fa-facebook"></i>facebook</a>
			<a href = "#"> <i class = "fas fa-twitter"></i>twitter</a>
			<a href = "#"> <i class = "fas fa-instagram"></i>instagram</a>
			<a href = "#"> <i class = "fas fa-linkedin"></i>linkedin</a>
		</div>
	</div>
	

<!--footer section ends-->

<!--swiper js link-->
<script src = "https://unpkg.com/swiper@7/swiper.bundle.min.js"></script>

<!--custom js file link-->
<script src = "js/script.js"></script>

</body>
</html>