<!DOCTYPE>
<html>
	<head>
		<title>
			The Jet Connect!
		</title>
	</head>
	<style>
		body {
			margin: 0px
			margin: 0;
			overflow-x: hidden;
			background-color: #ebcbe8;  

		}
		
		.border {
			border: 0px solid #ccc;
			border-radius: 10px;
			margin: 10px 5px;
			padding: 10px;
		}
		ul
		{
  			list-style-type: none;
			background: rgb(21,214,230);
            background: linear-gradient(90deg, rgba(21,214,230,1) 0%, rgba(251,142,240,0.6896008403361344) 100%);
			margin-bottom: 2px;
			color: black;
			margin-top: -38px;
			padding: 0px;
			overflow: hidden;
			margin-left: -10px;
			margin-right: -10px;
			z-index: 1;
			position: sticky;
			top: 0px;
			
		}
		li
		{
			display: inline;
			float: left;
			
		}
		h1
		{
			background: rgb(21,214,230);
            background: linear-gradient(90deg, rgba(21,214,230,1) 0%, rgba(251,142,240,0.6896008403361344) 100%);
			color: black;
			border: 10px;
			margin-left: -10px;
			margin-right: -10px;
			margin-top: -10px;
			padding: 15px;
			font-size: 50px;
			text-align: center;
			font-family: "Times New Roman";
		}
		h2
		{
			border: 10px;
			padding: 5px;
			font-size: 35px;
			text-align: center;
		}
		a:link, a:visited 
		{
			color: black;
			padding: 14px 25px;
			text-align: center; 
			text-decoration: none;
			display: block;
		}

		a:hover, a:active 
		{
			background-color: #ebcbe8;
			color: #094198;
		}
		.reserve_room
		{
			color: #000;
			border: 10px;
			padding: 5px;
			font-size: 35px;
			text-align: center;
			text-shadow: 2px 2px black;
			background-color:#15d6e6;
			width: 500px;
			margin: auto;
			border-radius: 50px;
		}

		.headings
		{
			color: black;
			font-family: "Times New Roman";
			text-decoration: none;
		}

		.welcome1
		{
			color: black;
			font-family: "Courier New, monospace";
			font-size: 28px;
		}
		.welcome2
		{
			color: black;
			font-family: Snell Roundhand, cursive;
			font-size: 24px;
			color: teal;
		}
		.basic_box {
			border: 1px solid #ccc;
			border-radius: 5px;
			margin: 10px 220px;
			padding: 50px;
			box-shadow: 0 10px 20px rgba(0,0,0,0.19);
		}
		.r_room
		{
			color: #FFF;
			border: 10px;
			padding: 10px;
			font-size: 35px;
			text-align: center;
			text-shadow: 2px 2px black;
			background-color: rgba(09,41,98,0.99);
			width: 500px;
			margin: auto;
			border-radius: 40px;
		}
		.row {
  			display: flex;
		}

		.column {
  			flex: 33.33%;
  			padding: 5px;
		}
		.footer {
			background-color: rgba(09,41,98,0.99);
			bottom: 0px;
			margin: 0px;
			margin-bottom: 0px;
			padding: 10px,0;
		}
		.foot-text {
			color: #D6FEFF;
			text-align: left;
		}
		


		* {box-sizing: border-box;}
		body {font-family: Verdana, sans-serif;}
		.mySlides {display: none;}
		img {
			vertical-align: middle;
			background-size: contain;
			margin-left: -10px;
		}
		
		.reserve_room:hover
		{
			color: #000;
			border: 10px;
			padding: 14px;
			font-size: 35px;
			text-align: center;
			text-shadow: 2px 2px black;
			background-color: #4AB8F9;
			width: 500px;
			margin: auto;
			border-radius: 50px;
		}
		/* Slideshow container */
		.slideshow-container {
		  max-width: 10000px;
		  position: relative;
		  margin: auto;
		  padding: 0px;
		  padding-left: 450px;
		  padding-top: 30px;
		}

		/* Caption text */
		.text {
		  color: #f2f2f2;
		  font-size: 30px;
		  padding: 8px 12px;
		  position: absolute;
		  bottom: 8px;
		  width: 100%;
		  text-shadow: 4px 4px black;
		  text-align: center;
		}

		/* Number text (1/3 etc) */
		.numbertext {
		  color: #f2f2f2;
		  font-size: 12px;
		  padding: 8px 12px;
		  position: absolute;
		  top: 0;
		}

		/* The dots/bullets/indicators */
		.dot {
		  height: 15px;
		  width: 15px;
		  margin: 0 2px;
		  background-color: white;
		  border-radius: 50%;
		  display: inline-block;
		  transition: background-color 0s ease;
		}

		.active {
		  background-color: #717171;
		}

		/* Fading animation */
		.fade {
		  -webkit-animation-name: fade;
		  -webkit-animation-duration: 1.5s;
		  animation-name: fade;
		  animation-duration: 1.5s;
		}

		@-webkit-keyframes fade {
		  from {opacity: .4} 
		  to {opacity: 1}
		}

		@keyframes fade {
		  from {opacity: .4} 
		  to {opacity: 1}
		}
	</style>

	<body >
		
		<h1 id="td1" style="padding: 10px; font-size: 45px; position: sticky; z-index: 1">THE <p style="color: black; display: inline;">JET CONNECT </p> </h1>

		<ul>
			<li><a href="index.php">HOME</a>
			<li><a href="admin_login.php">ADMIN LOGIN</a></li>
			<li><a href="user_login.php">USER LOGIN</a></li>
			<li><a href="b+1.php">B+ TREE</a></li> 
		</ul>

		<div class="slideshow-container">

		<div class="mySlides fade">
		  <img id="1" src="Images/one.jpg" width="60%" height="60%" padding-left=20px>
		  
		</div>

		<div class="mySlides fade">
		  <img id="2" src="Images/two.jpg"width="60%" height="60%">
		  
		</div>

		<div class="mySlides fade">
		  <img id="3" src="Images/three.jpg"width="60%" height="60%">
		 
		</div>

		</div>
		<br>

		<div style="text-align:center">
		  <span class="dot"></span> 
		  <span class="dot"></span> 
		  <span class="dot"></span> 
		</div>

		<script>
		var slideIndex = 0;
		showSlides();

		function showSlides() {
		  var i;
		  var slides = document.getElementsByClassName("mySlides");
		  var dots = document.getElementsByClassName("dot");
		  for (i = 0; i < slides.length; i++) {
		    slides[i].style.display = "none";  
		  }
		  slideIndex++;
		  if (slideIndex > slides.length) {slideIndex = 1}    
		  for (i = 0; i < dots.length; i++) {
		    dots[i].className = dots[i].className.replace(" active", "");
		  }
		  slides[slideIndex-1].style.display = "block";  
		  dots[slideIndex-1].className += " active";
		  setTimeout(showSlides, 4000); // Change image every 4.5 seconds
		}
		</script>
		<br><br>
		<a class="reserve_room" href="user_login.php">BOOK A FLIGHT</a><br>
		</div><br>
	</body>
</html>