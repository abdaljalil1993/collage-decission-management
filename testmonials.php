<?php
session_start();

?>

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


<div>
<div >
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

<div style="height:20px;"></div>



</div>
<!-- background-color:rgba(108,113,131,0.8); -->
</div>




<div class="container">
	<div style="height: 30px"></div>
	<div class="row">
	<?php
include 'conn.php';
$r=mysqli_query($con,"select * from msg ");
while($row=mysqli_fetch_array($r))
{
	echo'

	<div class="col-4">
			<div  style="box-shadow: 0px 0px 10px 10px #c8c8c8">
        <div style="border-radius: 10px;background-color: rgba(255,255,255,0.6);padding:30px;">
    <h1 class="text-warning">'.$row['name'].' </h1> 
    <hr>
    
    <p style="word-wrap: break-word;">email : '.$row['email'].'</p>
     <p class="text-danger">subject: '.$row['subject'].'</p>
      <h3 class="text-primary">message :'.$row['message'].'</h3>
 
     
  
    </div>
    </div>

		</div>
	';
}



	?>
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
  <li><i class="fa fa-angle-double-right text-warning"></i> <a style="color: white;" href="book.php">Decisions</a></li>

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
    					

    					<span style="color: white"> <i style="color:#D69B25;font-size: 20px; " class=" fa fa-envelope"></i> info@Council.sy</span>
    					<br>
    					<br>
    				
    						
    			</div>
    			

    			<div class="col-md-4 col-sm-12">
    				<ul class="social1">
    					<h3 class="text-white">Follow Us</h3>
			<li><a href="#" style="color: white"><i style="color:#D69B25;font-size: 28px; " class=" fab fa-facebook"></i> Council</a></li><br>
			<li><a href="#"  style="color: white"><i style="color:#D69B25;font-size: 28px; " class=" fab fa-twitter"></i> @Council.sy</a></li><br>
			
			<li><a href="#"  style="color: white"><i style="color:#D69B25;font-size: 28px; " class=" fab fa-instagram"></i> Council</a></li><br>
			
	
		</ul>
    			</div>
    		
    		</div>
    	</div>
    </div>
</div>

<div style="height: 40px;background-color:#10305a;padding-top: 6px; ">
	<p class="text-center text-warning">All Right Reserved To Council <i class="fa fa-heart"></i> 2021</p>

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


<?php
include'conn.php';


ob_end_flush();

?>
