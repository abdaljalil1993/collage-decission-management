<!DOCTYPE html>
<html>
<head>
	<title>Council App</title>
	<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/all.css"/>
<!--Floating WhatsApp css-->




<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet"> 





<link rel="stylesheet" href="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/floating-wpp.min.css">
<!--Floating WhatsApp javascript-->
	  <meta charset="utf-8">
	  <meta  lang="en">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">




<style type="text/css">
	html {
  scroll-behavior: smooth;
}

	*{
		margin: 0;
		padding: 0;
	}


	body{
		margin-right: 0;
		margin-left: 0;
		margin-top: 0;
		margin-bottom: 0;
    font-family: 'Open Sans', sans-serif;
	}

	.top-bar{
		width: 100%;
		background-color: #112159;
		height: 40px;
		padding: 3px;
		color: #D69B25;
		
		
		z-index: 99;
		

	}
	.social1{
		float: left;
		padding: 5px;
		list-style-type: none;
	}
.social1 li {
		float: left;
		margin-right: 8px;
	}
	.social{
		float: right;
		padding: 5px;
		list-style-type: none;
	}
	.social li {
		float: left;
		margin-right: 8px;
	}

	.mynav{
		background-color:rgba(108,113,131,0.9);
		width: 100%;
		

	
	}

	.mynav nav{
		width: 100%;
	}
.a:hover{
	color: red;
}
.x:hover{
	background-color: rgb(214,155,37);


}

.x:focus{
	background-color: rgb(214,155,37);
}

.about{
	width: 100%;
	height: 300px;
	margin-top: 10px;
	display: block;
}


.image-container {
    position: relative;
    width: 100%;
    
}
.image-container .after {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    display: block;
   background-color:rgba(10,54,108,0.8);
    color: #FFF;
}

.c{
	box-shadow: 0px 0px 3px 3px #cecece;
}
.c:hover{
	box-shadow: 0px 0px 4px 4px #D69B25;
	margin-top: -5px;
	transition: .4s ease;
}

.img-thumbnail{
	width: 190px;
	height: 100px;
}

.vv{
	background-color:rgba(255,255,255,0.8);border-radius: 10px;padding: 10px;height: 190px;word-wrap: break-word;border:1px solid #D69B25; overflow: hidden;
	width: 31%;
	margin-right: 5px;
}

@media only screen and (max-width: 600px) {

  .vx .row div:nth-child(1){
		
  	width: 100%;
  	margin-bottom: 200px;
}



  .vx .row div:nth-child(1):hover{
		
  	width: 100%;
  	margin-bottom: 200px;
  	padding: 10px;
  	margin-top: -10px;
  	margin-left: 5px;
  
  	transition: 0.6s ease;

}



  .vx div:nth-child(2){
		
  	width: 100%;
  	margin-bottom: 200px;
}


 .vx div:nth-child(2):hover{
		
  width: 100%;
  	margin-bottom: 200px;
  	padding: 2px;
  	margin-top: -10px;
  	margin-left: 5px;
  	box-shadow: 0px 0px 2px 5px #ccc;
  	transition: 0.6s ease;
}
.vx div:nth-child(3){
		
  	width: 100%;
  	margin-bottom: 200px;
}


 .vx div:nth-child(3):hover{
		
  	width: 100%;
  	margin-bottom: 200px;
  	padding: 2px;
  	margin-top: -10px;
  	margin-left: 5px;
  	box-shadow: 0px 0px 2px 5px #ccc;
  	transition: 0.6s ease;
}

.about{
	margin-top: 380px;
}

 
}


#mypage{
	width: 100%;
	padding: 0px;
}


#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 199;
  font-size: 18px;
  border: none;
  outline: dotted;
  background-color:rgba(108,113,131,0.7);
  color: white;
  cursor: pointer;
  width: 50px;
  height: 50px;
  padding: 5px;
  border-radius: 50%;
  text-align: center;
}

#myBtn:hover {
  background-color: rgba(0,0,0,0.8);
}
</style>

</head>
<body>
	<div id="mypage">



<div style="background-image: url('images/2.png');background-repeat: no-repeat;background-size: cover;background-attachment: fixed; height: 600px; ">
<div style="background-color:rgba(10,54,108,0.2);width: 100%;height: 600px; ">
	<div class="mynav">
	<nav class="navbar navbar-expand-lg navbar-light " id="navbar">
  <a class="navbar-brand text-uppercase" id="nn" href="#" style="color: #D69B25; font-size: 23px;" >  Council App</a>
  <button style="border-color: #D69B25;" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon" ></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active x" >
        <a class="nav-link a" style="color: #E7E7E8; font-size: 17px;" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
  

        <li class="nav-item x">
        <a class="nav-link a" style="color: #E7E7E8; font-size: 17px;" href="#about">About Us</a>
      </li>
     

 
    
    </ul>
    <a class="btn btn-outline-warning my-2 my-sm-0 mr-2" href="login.php">Login</a>
         <a class="btn btn-outline-warning my-2 my-sm-0" href="sign.php">Sign Up</a>

  </div>
</nav>
</div>

<div style="height:120px;"></div>

  <div class="col-12 text-center" style=" margin: 0px auto;z-index: 0;color: white">
 <h1>Tishreen Confedence | Make All Decision </h1>
 <h3>Easy Way To Make All Decision In One Click</h3>
  </div>

</div>
<!-- background-color:rgba(108,113,131,0.8); -->
</div>




<div style="height: 50px;"></div>
<div>
<div class="container vx" style="height: 150px;margin-top: 0px;margin-bottom: 20px;position: relative;display: block;">

	<div class="row">

			<div class="  vv  mb-3">
			<div style=" ">
				<i class="fa fa-book" style="color: #D69B25;font-size: 35px;"></i><br>
				<h3>Our Mision</h3>
				<p>Our Mission is to Make and Order All Decisions in our Collage</p>

			</div>
		</div>
		<!-- sttart first item -->
		
		<!-- end first item -->
		<!-- sttart first item -->
	
		<!-- end first item -->


		<!-- sttart first item -->
		<div class="  vv mb-3">
			<div style=" ">
				<i class="fa fa-edit" style="color: #D69B25;font-size: 35px;"></i><br>
				<h3>Our Vision</h3> 
				<p>Is to to Make and Order All Decisions in our Collage</p>

			</div>
		</div>
		<!-- end first item -->

		<div class=" vv mb-3">
			<div style=" ">
				<i class="fa fa-flag" style="color:#D69B25;font-size: 35px;"></i><br>
				<h3>Our Value</h3>
				<p>help collages to Make and Order All Decisions </p>

			</div>
		</div>
	</div>

</div>











<div style="height: 120px;"></div>

<div  class=" container-fluid about" id="about" style="background-image: url('images/about-bg.png');background-size: cover;background-repeat: no-repeat;">
	<br>

	<h1 class="text-center text-uppercase" style="color: #21537C;font-size: 30px;font-weight: bold;">About Us</h1>
<div class="container" >
	<div class="row">
	<div class="col-md-6">
			<p class="text-justify" style="font-size: 20px;">Our business is helping our Collages   to Make and Order All Decisions in our Collage
</p>
	</div>
	<div class="col-md-6">
			<p class="text-justify" style="font-size: 20px;">We are a trusted Site that offer the best offers in the decision making and we insure the good service that delevired from us 
</p>
	</div>

	
</div>
</div>
</div>
<div style="height: 132px;"></div>
<div style="margin: 10px auto;height: 40px;text-align: center;">
	<a style=" font-weight: bold;" href="#contact" class="btn btn-outline-primary btn-lg">Contact  Us</a>
</div>


</div>


<div style="height: 80px;"></div>
<div class="image-container" id="book">
    <img alt="book consultation image hero-bg" src="images/2.png" style="width: 100%;height: 340px;" />
    <div class="after">
    	<div class="container">
    		<div style="height: 80px;"></div>
    		<div class="row">
    			<div class="col-md-9">
    				<h2  class="text-warning">Search, Find , All Decisions </h2>
    				<p class="text-justify" style="font-size: 18px;">here you can find every thing you need about Collage and Decisions </p></div>
    			<div class="col-md-3">
    				<br>
    				<a  href="home.php" class="btn btn-outline-warning btn-lg btn-block" style="border-radius: 10px;">find More  </a>
    			</div>
    		</div>
    	</div>
    </div>
</div>








<div style="background-image: url('images/contact-bg.png');background-repeat: no-repeat;" id="contact">
  <div style="height: 40px"></div>
<div class="container">
  <h1 class="text-center" style="color: #21537C">Contact Us</h1>
  <div class="row">
    <div class="col-md-6">
      <i class="fa fa-map-marker-alt" style="font-size: 20px;color:#21537C "></i>
      <span style="font-size: 24px;color:#21537C;letter-spacing: 1px; ">&nbsp;Latakia - Al Zeraa</span>
      <hr>

      <i class="fa fa-envelope" style="font-size: 20px;color:#21537C "></i> 
      <span style="font-size: 24px;color:#21537C;letter-spacing: 1px; ">&nbsp; info@council.sy</span>
      <hr>

        <i class="fa fa-phone" style="font-size: 20px;color:#21537C "></i> 
      <span style="font-size: 24px;color:#21537C;letter-spacing: 1px; ">&nbsp; 0997 737 795</span>
      <hr>


        <i class="fab fa-facebook" style="font-size: 20px;color:#21537C "></i> 
      <span style="font-size: 24px;color:#21537C;letter-spacing: 1px; "> <a style="color:#21537C " href="#" target="blank">&nbsp; council</a></span>
      <hr>
      <a href="send.php" class="btn btn-outline-primary btn-lg btn-block">Send Us Message</a>
    </div>
    <div class="col-md-6">
     <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d10921.646620464333!2d35.79156607394707!3d35.52838068202637!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sar!2s!4v1619907207924!5m2!1sar!2s"   style="border:0;width: 100%;height: 100%;" allowfullscreen="" loading="lazy"></iframe>
    </div>
  </div>
</div>
</div>
<div style="height: 20px;"></div>

























	
<div style="height: 100px;" id="test"></div>
<div class="image-container" >
    <img alt="book consultation image hero-bg" src="images/22.jpg" style="width: 100%;height: 340px;" />
    <div class="after">
      <div class="container">
        <div style="height: 80px;"></div>
        <div class="row">
          <div class="col-md-9">
            <h2  class="text-warning">see What Student say about our services and give us feedback <br>
            its help us to improve our job ...thanks alot</p></div>
          <div class="col-md-3">
            <br>
            <a  href="testmonials.php" class="btn btn-outline-warning btn-lg btn-block" style="border-radius: 10px;">See Reviews  </a>
          </div>
        </div>
      </div>
    </div>
</div>














<div style="height: 20px;"></div>
<div style="background-image: url('images/544.jpg');background-size: cover;background-attachment: fixed;background-repeat: no-repeat;">
	
<div style="width: 100%;  background-color:rgba(10,54,108,0.7);" >
		<div class="container-fluid" style="padding-bottom:8px;">
    		<div style="height: 30px;"></div>
    		<div class="row">
    			
    			<div class="col-md-4 col-sm-12">
    				<h3 style="color: white;">Navigation</h3>
            <ul style="list-style-type: none;">
  <li ><i class="fa fa-angle-double-right text-warning"></i>
   <a style="color: white" class=" " href="index.php"> Home</a> </li>
  <li><i class="fa fa-angle-double-right text-warning"></i> <a href=""><a style="color: white;" href="index.php#about"> About Us</a></a></li>
  <li><i class="fa fa-angle-double-right text-warning"></i> <a style="color: white;" href="book.php"> Decisions</a></li>

  <li><i class="fa fa-angle-double-right text-warning"></i>
    <a style="color: white;" href="index.php#contact"> Contact Us</a></li>

</ul>
    			</div>


    		
    			<div class="col-md-4 col-sm-12" style="height: 240px;">
    						<h3 class="text-white">Contact Us </h3>
    				<p class="text-justify text-white">
    				
    				</p>
    				

    				<span><a href="#"  style="color: white"><i style="color:#D69B25;font-size: 20px; " class=" fa fa-phone"></i> 0988 5621 75</a></span><br><br>

            <span style="color: white"> <i style="color:#D69B25;font-size: 20px; " class=" fab fa-whatsapp"></i> 0997 7373 795</span><br>
            <br>

    					<span><a href="#"  style="color: white"><i style="color:#D69B25;font-size: 20px; " class=" fab fa-whatsapp"></i> 0988 4621 335</a></span><br><br>
    					

    					<span style="color: white"> <i style="color:#D69B25;font-size: 20px; " class=" fa fa-envelope"></i> info@council.sy</span>
    					<br>
    					<br>
    				
    						
    			</div>
    			

    			<div class="col-md-4 col-sm-12">
    				<ul class="social1">
    					<h3 class="text-white">Follow Us</h3>
			<li><a href="#" style="color: white"><i style="color:#D69B25;font-size: 28px; " class=" fab fa-facebook"></i> council</a></li><br>
			<li><a href="#"  style="color: white"><i style="color:#D69B25;font-size: 28px; " class=" fab fa-twitter"></i> @council.sy</a></li><br>
			
			<li><a href="#"  style="color: white"><i style="color:#D69B25;font-size: 28px; " class=" fab fa-instagram"></i> council</a></li><br>
			
	
		</ul>
    			</div>
    		
    		</div>
    	</div>
    </div>
</div>

<div style="height: 40px;background-color:#10305a;padding-top: 6px; ">
	<p class="text-center text-warning">All Right Reserved To council <i class="fa fa-heart"></i> 2021</p>

</div>



<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-angle-double-up"></i></button>

 </div>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/all.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

<!--Floating WhatsApp javascript-->
<script type="text/javascript" src="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/floating-wpp.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
<script type="text/javascript">
	$(function() {
  $('#WAButton').floatingWhatsApp({
    phone: '00963 997 737 795', //WhatsApp Business phone number International format-
    //Get it with Toky at https://toky.co/en/features/whatsapp.
    headerTitle: 'Chat with us on WhatsApp!', //Popup Title
    popupMessage: 'Hello, how can we help you?', //Popup Message
    showPopup: true, //Enables popup display
    buttonImage: '<img src="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/whatsapp.svg" />', //Button Image
    //headerColor: 'crimson', //Custom header color
    //backgroundColor: 'crimson', //Custom background button color
    position: "left"    
  });
});



	$(document).ready(function(){
		$("#bb").click(function(){
			$("#xx").slideToggle(1000);
		});
	});
</script>

<script>
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
      document.getElementById("navbar").style.height = "auto";
    document.getElementById("logo").style.height = "69px";
     document.getElementById("logo").style.width = "95px";
     document.getElementById("nn").style.fontSize = "20px";
  } else {
  document.getElementById("navbar").style.height = "auto";

   document.getElementById("logo").style.height = "100px";
     document.getElementById("logo").style.width = "150px";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>




</body>
</html>

