<!DOCTYPE html>
<html lang = "en">
<head>
	<meta charset = "UTf-8">
	<meta http-equiv = "X-UA-Compatible" content = "IE-edge">
	<meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
	<title>Home</title>

	<!--swiper css link-->
	<link rel = "stylesheet" href ="https://unpkg.com/swiper@7/swiper.bundle.min.css">

	<!--font awesome cdn link-->
	<link rel = "stylesheet" href = "https://cdnjs.cloudfare.com/ajax/libs/font.awesome/5.15.4/css/all.min.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	
	<!--custom css file link-->
	<link rel = "stylesheet" href = "css/style.css">

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

<!--home section starts-->

<section class="home">

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="images/hom-slide-1.jpg" alt="slider 1" style="width:100%;">
							<span>Travel around the world</span>
      </div>

      <div class="item">
        <img src="images/home-slide-2.jpg" alt="slider 2" style="width:100%;">
							<span>Make your tour worthwhile</span>
      </div>
    
      <div class="item">
        <img src="images/home-slide-3.jpg" alt="slider 3" style="width:100%;">
							<span>Discover new places</span>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


	<!-- <div class="swiper home-slider">
		<div class="swiper-wrapper">

			<div class="swiper-slide slide" style="background: url(images/home-slide-1.jpg) no-repeat">
				<div class="content">
					<span>explore, discover, travel</span>
					<h3>travel around the world</h3>
					<a href="package.php" class="btn">discover mores</a>
				</div>
			</div>

			<div class="swiper-slide slide" style="background: url(images/home-slide-2.jpg) no-repeat">
				<div class="content">
					<span>explore, discover, travel</span>
					<h3>discover new places</h3>
					<a href="package.php" class="btn">discover mores</a>
				</div>
			</div>
			
			<div class="swiper-slide slide" style="background: url(images/home-slide-3.jpg) no-repeat">
				<div class="content">
					<span>explore, discover, travel</span>
					<h3>make your tour worthwhile</h3>
					<a href="package.php" class="btn">discover mores</a>
				</div>
			</div>
			
			<div class="swiper-button-next"></div>
			<div class="swiper-button-prev"></div>

		</div>
	</div> -->
</section>

<!--home section ends-->

<!--home about section starts-->
<section class="home-about">
	<div class="image">
		<img src="images/about-img.jpg" alt="">
		</div>
		
	
	<div class="content">
		<h3>About Us </h3>
		<p>We provide tours and travels facility for couples
			at same rate that is Rs.5000/-
			Whatever may be your destination within India it's a discount..
			HURRY UP......AND BOOK YOUR TOUR!!!!! 
		</p>
		<a href="about.php" class="btn">Read More</a>
	</div>
       
<!--home about section ends-->

<!--home packages section ends-->
</section>
<section class="packages">
<h1 class="heading-title">Top Destinations</h1>
<div class="box-container">

<div class="box">
<div class="image">
<img src="images/img-1.jpg" alt="">
</div>

<div class="content">
	<h2>DELHI TOUR</h2>
	<label for="tour">Choose a tour:</label>

		<select name="tour" id="tour">
  			<option value="agra">Taj Mahal</option>
  			<option value="red fort">Red Fort</option>
  			<option value="india gate">India Gate</option>
  			<option value="akshardham">Akshardham</option>
		</select>
	<h3>Packages</h3>
	<b>4 days 3 nights<br>
	Price:Rs.5,000/- per person</b>
	<br><br>
	<a href="book.php" class="btn">Book Now</a>
      </div>
  </div>

<div class="box">
<div class="image">
<img src="images/img-2.jpg" alt="">
</div>

<div class="content">
	<h2>KERALA TOUR</h2>
	<label for="tour">Choose a tour:</label>

		<select name="tour" id="tour">
  			<option value="varkala">Varkala</option>
  			<option value="periyar">Periyar National Park</option>
  			<option value="kovalam">Kovalam</option>
  			<option value="bekal">Bekal</option>
		</select>
	<h3>Packages</h3>
	<b>4 days 3 nights<br>
	Price:Rs.5,000/- per person</b>
	<br><br>
	<a href="book.php" class="btn">Book Now</a>
      </div>
  </div>

<div class="box">
<div class="image">
<img src="images/img-3.jpg" alt="">
</div>

<div class="content">
	<h2>KASHMIR TOUR</h2>
	<label for="tour">Choose a tour:</label>

		<select name="tour" id="tour">
  			<option value="parimahal">Pari Mahal</option>
  			<option value="patanitop">Patani Top</option>
  			<option value="amarnath">Amarnath Cave Temple</option>
  			<option value="shalimarbagh">Shalimar Bagh</option>
		</select>
	<h3>Packages</h3>
	<b>4 days 2 nights<br>
	Price:Rs.5,000/- per person</b>
	<br><br>
	<a href="book.php" class="btn">Book Now</a>
      </div>
  </div>



</div>
<div class="load-more"> <a href="package.php" cladd="btn">load more</a>
 </div>
  </section>
<!--home packages section ends-->

<!--home offer section starts-->
<section class="home-offer">
<div class="content">
<h3>upto 50% off</h3>
<p>Up to 50% off. Sale. Summer Sale has Started. <br>
as India's fastest growing Travel & Tour Company<br> (For online & offline activities)</p>
<a href="book.php" class="btn">Book Now</a>
</div>
</section>
<!--home offer section ends-->

<!--services section starts-->

	<!-- <section class = "services">

		<h1 class = "heading-title"> Our Services </h1>

		<div class = "box-container">

			<div class = "box">
				<img src = "images/icon-1.jpg" alt = "">
				<h3>Adventure</h3>
			</div>
			
			<div class = "box">
				<img src = "images/icon-2.jpg" alt = "">
				<h3>Tour Guide</h3>
			</div>

			<div class = "box">
				<img src = "images/icon-3.jpg" alt = "">
				<h3>Trekking</h3>
			</div>

			<div class = "box">
				<img src = "images/icon-4.jpg" alt = "">
				<h3>Camp Fire</h3>
			</div>
			<div class = "box">
				<img src = "images/icon-5.png" alt = "">
				<h3>Off Road</h3>
			</div>

			<div class = "box">
				<img src = "images/icon-6.png" alt = "">
				<h3>Camping</h3>
			</div>

		</div> -->

<!--services section ends-->
</br>


<!--footer section starts-->

<section class = "footer">

	<div class = "box-container">

		<div class = "box">
			<h3>Quick Links</h3>
			<a href = "home.php"> <i class = "fas fa-angle-right"></i>Home</a>
			<a href = "about.php"> <i class = "fas fa-angle-right"></i>About</a>
			<a href = "package.php"> <i class = "fas fa-angle-right"></i>Package</a>
			<a href = "book.php"> <i class = "fas fa-angle-right"></i>Book</a>
		</div>

		<div class = "box">
			<h3>extra links</h3>
			<a href = "#"> <i class = "fas fa-angle-right"></i>Ask Questions</a>
			<a href = "#"> <i class = "fas fa-angle-right"></i>About Us</a>
			<a href = "#"> <i class = "fas fa-angle-right"></i>Privacy Policy</a>
			<a href = "#"> <i class = "fas fa-angle-right"></i>Terms Of Use</a>
		</div>

		<div class = "box">
			<h3>contact info</h3>
			<a href = "#"> <i class = "fas fa-phone"></i>+123-456-7890</a>
			<a href = "#"> <i class = "fas fa-phone"></i>+111-222-3333</a>
			<a href = "#"> <i class = "fas fa-envelope"></i>shaikhanas@gmail.com</a>
			<a href = "#"> <i class = "fas fa-map"></i>Mumbai, India - 400104</a>
		</div>


		<div class = "box">
			<h3>follow us</h3>
			<a href = "#"> <i class = "fas fa-facebook"></i>Facebook</a>
			<a href = "#"> <i class = "fas fa-twitter"></i>Twitter</a>
			<a href = "#"> <i class = "fas fa-instagram"></i>Instagram</a>
			<a href = "#"> <i class = "fas fa-linkedin"></i>Linkedin</a>
		</div>
	</div>
	
<!--footer section ends-->

<!--swiper js link-->
<script src = "https://unpkg.com/swiper@7/swiper.bundle.min.js"></script>

<!--custom js file link-->
<script src = "js/script.js"></script>

</body>
</html>



