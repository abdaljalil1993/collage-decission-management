<?php
session_start();
ob_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Council App</title>
	<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/all.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
<!--Floating WhatsApp css-->
<link rel="stylesheet" href="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/floating-wpp.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
<!--Floating WhatsApp javascript-->
	  <meta charset="utf-8">
    <meta  lang="en">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<style type="text/css">
	html {
  scroll-behavior: smooth;
}

	body{
		margin: 0;
		padding: 0;
	}

	.top-bar{
		width: 100%;
		background-color: #21537C;
		height: 40px;
		padding: 3px;
		color: #D69B25;
		font-weight: bold;

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
		background-color:rgba(10,54,108,0.6);
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
</style>

</head>
<body>




<div style=" height: 80px; ">
<div style="background-color:rgba(10,54,108,0.2);width: 100%;height: 80px; ">
  <div class="mynav">
<?php
include 'empnav.php';
?>
</div>

<div style="background-color: #fefefe;padding: 9px;">
  <div style="height:30px;"></div>
<div class="container-fluid" >
  <div class="row">
    
    <div class="col-md-12" style="box-shadow: 0px 0px 10px 10px #c8c8c8">
        <div style="border-radius: 10px;background-color: rgba(255,255,255,0.6);padding:30px;">
   <h1 class="text-warning">All Decision</h1> 
    <hr>
  <div class="table-responsive">
    <table id="xx" class="table table-bordered">
  <thead>
    <tr>
      <th>ID</th>
       <th>subject</th>
        <th>depend</th>
          
        
          <th>take A look</th>
           <th>delibration</th>
            <th>username</th>
            <th>date</th>
             <th>Council</th>
                 <th>State</th>
                  <th>View Votes</th>
            <th>Approve To Council</th>
                <th>Accept</th>
          <th>Delete</th>

      
      
    </tr>
  </thead>

  <tbody>
    <?php

    include'conn.php';

    /*
$con=mysqli_connect("localhost","bacttrai_WPERM","fadidebow@1993","bacttrai_WPERM")or die("error db".mysqli_error($con));

    */
    $t=mysqli_query($con,"select * from decision where conc='".$_SESSION['sec']."'");
while($row=mysqli_fetch_array($t))
{
  echo'
<tr>
<td>'.$row['id'].'</td>
<td>'.$row['subject'].'</td>
<td>'.$row['depend'].'</td>
<td>'.$row['takelook'].'</td>
<td>'.$row['delibration'].'</td>
<td>'.$row['username'].'</td>
<td>'.$row['dt'].'</td>
<td>'.$row['conc'].'</td>
<td>'.$row['state'].'</td>
<td><a href="dvote.php?id='.$row['id'].'" class="btn btn-info">View Votes</a></td>

<td><a href="managedec.php?id1='.$row['id'].'" class="btn btn-warning">Approve To Council</a></td>
<td><a href="managedec.php?id2='.$row['id'].'" class="btn btn-success">Accept</a></td>
<td><a href="managedec.php?id='.$row['id'].'" class="btn btn-danger">Delete</a></td>

</tr>
  ';
}

  if(isset($_GET['id']))
    {
      $x=$_GET['id'];

      $t=mysqli_query($con,"delete from decision where id='$x'");
      if(isset($t)){
        echo '<script type="text/javascript">toastr.success("delete Decision Successfully");</script>';
       echo' <meta http-equiv="refresh" content="0 ;url=managedec.php" />';
      }
    }


     if(isset($_GET['id1']))
    {
      $x=$_GET['id1'];

      $t=mysqli_query($con,"update  decision set state='approved' where id='$x'");
      if(isset($t)){
        echo '<script type="text/javascript">toastr.success("send  Decision Successfully");</script>';
       echo' <meta http-equiv="refresh" content="0 ;url=managedec.php" />';
      }
    }

        if(isset($_GET['id2']))
    {
      $x=$_GET['id2'];

      $t=mysqli_query($con,"update  decision set state='archived' where id='$x'");
      if(isset($t)){
        echo '<script type="text/javascript">toastr.success("Accept  Decision Successfully");</script>';
       echo' <meta http-equiv="refresh" content="0 ;url=managedec.php" />';
      }
    }
  
  
    ?>
  </tbody>
</table>


    </div>
    </div>

    
  </div>
</div>
 <div style="height: 60px;"></div>
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


<script type="text/javascript" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>

<script type="text/javascript">
  $(document).ready( function () {
    $('#xx').DataTable();
} );
</script>

</body>
</html>
