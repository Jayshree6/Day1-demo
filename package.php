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
	
	<!--custom css file link-->
	<link rel = "stylesheet" href = "css/style.css">

</head>
<body>

<!--header section starts-->

<section class = "header">
	<a href = "home.php" class = "logo">travel.</a>
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

<div class="heading" style="background:url(images/header-bg-1.jpg) no-repeat">
	<h1>packages</h1>
</div>

<section class="packages">
<h1 class="heading-title">top destinations</h1>
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


<div class="box">
<div class="image">
<img src="images/img-4.jpg" alt="">
</div>

<div class="content">
	<h2>SHIMLA TOUR</h2>
	<label for="tour">Choose a tour:"tour"</label>

		<select name="tour" id="tour">
  			<option value="christchurch">Christ Church</option>
  			<option value="viceregal">Viceregal Lodge</option>
  			<option value="scandalpoint">Scandal Point</option>
  			<option value="kalibari">KaliBari Temple</option>
		</select>
	<h3>Packages</h3>
	<b>4 days 2 nights<br>
	Price:Rs.5,000/- per person</b>
	<br><br>
	<a href="book.php" class="btn">Book Now</a>
      </div>
  </div>


<div class="box">
<div class="image">
<img src="images/img-5.jpg" alt="">
</div>

<div class="content">
	<h2>GOA</h2>
	<label for="tour">Choose a tour:"tour"</label>

		<select name="tour" id="tour">
  			<option value="arambol">Arambol Beach</option>
  			<option value="chapora ">Chapora Fort</option>
  			<option value="secathedral">Se Cathedral</option>
  			<option value="aguada">Aguada Fort</option>
		</select>
	<h3>Packages</h3>
	<b>4 days 2 nights<br>
	Price:Rs.5,000/- per person</b>
	<br><br>
	<a href="book.php" class="btn">Book Now</a>
      </div>
  </div>


<div class="box">
<div class="image">
<img src="images/img-6.jpg" alt="">
</div>

<div class="content">
	<h2>MANALI</h2>
	<label for="tour">Choose a tour:"tour"</label>

		<select name="tour" id="tour">
  			<option value="hadimbadevi">Hadimba Devi Temple</option>
  			<option value="joginifalls">Jogini Falls</option>
  			<option value="vanvihar">Van Vihar </option>
  			<option value="mall">Mall Road</option>
		</select>
	<h3>Packages</h3>
	<b>4 days 2 nights<br>
	Price:Rs.5,000/- per person</b>
	<br><br>
	<a href="book.php" class="btn">Book Now</a>
      </div>
  </div>

<div class="box">
<div class="image">
<img src="images/img-7.jpg" alt="">
</div>

<div class="content">
	<h2>RAJASTHAN</h2>
	<label for="tour">Choose a tour:"tour"</label>

		<select name="tour" id="tour">
  			<option value="dausa">Dausa</option>
  			<option value="dholpur">Dholpur</option>
  			<option value="tonk">Tonk</option>
  			<option value="bhilwara">Bhilwara</option>
		</select>
	<h3>Packages</h3>
	<b>4 days 2 nights<br>
	Price:Rs.5,000/- per person</b>
	<br><br>
	<a href="book.php" class="btn">Book Now</a>
      </div>
  </div>


<div class="box">
<div class="image">
<img src="images/img-8.jpg" alt="">
</div>

<div class="content">
	<h2>GUJARAT</h2>
	<label for="tour">Choose a tour:"tour"</label>

		<select name="tour" id="tour">
  			<option value="dwarka">Dwarka</option>
  			<option value="katch">Ran of Katch</option>
  			<option value="palitana">Palitana</option>
  			<option value="gir">Gir National Park</option>
		</select>
	<h3>Packages</h3>
	<b>4 days 2 nights<br>
	Price:Rs.5,000/- per person</b>
	<br><br>
	<a href="book.php" class="btn">Book Now</a>
      </div>
  </div>


<!-- <div class="box">
<div class="image">
<img src="images/img-9.jpg" alt="">
</div>

<div class="content">
	<h2>MUMBAI</h2>
	<label for="tour">Choose a tour:"tour"</label>

		<select name="tour" id="tour">
  			<option value="gate">Gateway Of India</option>
  			<option value="marine">MarineLines</option>
  			<option value="juhu">Juhu Beach</option>
  			<option value="kanheri">Kanheri caves</option>
		</select>
	<h3>Packages</h3>
	<b>4 days 2 nights<br>
	Price:Rs.1,500/- per person</b>
	<br><br>
	<a href="book.php" class="btn">Book Now</a>
      </div>
  </div> -->




</section>

<!--footer section starts-->

<section class = "footer">

	<div class = "box-container">

		<div class = "box">
			<h3>quick links</h3>
			<a href = "home.php"> <i class = "fas fa-angle-right"></i>home</a>
			<a href = "about.php"> <i class = "fas fa-angle-right"></i>about</a>
			<a href = "package.php"> <i class = "fas fa-angle-right"></i>package</a>
			<a href = "book.php"> <i class = "fas fa-angle-right"></i>book</a>
		</div>

		<div class = "box">
			<h3>extra links</h3>
			<a href = "#"> <i class = "fas fa-angle-right"></i>ask questions</a>
			<a href = "#"> <i class = "fas fa-angle-right"></i>about us</a>
			<a href = "#"> <i class = "fas fa-angle-right"></i>privacy policy</a>
			<a href = "#"> <i class = "fas fa-angle-right"></i>terms of use</a>
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



