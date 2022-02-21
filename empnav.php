 <?php
$x=isset($_GET['council'])?$_GET['council']:'';
 ?>      

        <nav class="navbar navbar-expand-lg navbar-light " id="navbar">
  <a class="navbar-brand text-uppercase" id="nn" href="#" style="color: #D69B25; font-size: 23px;" >  Council App</a>
  <button style="border-color: #D69B25;" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon" ></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active x" >
        <a class="nav-link a" style="color: #E7E7E8; font-size: 17px;" href="employee.php?council=<?php if($x !='')
{
    echo $x; }?>">Home <span class="sr-only">(current)</span></a>
      </li>
  
  <li class="nav-item x">
        <a class="nav-link a" style="color: #E7E7E8; font-size: 17px;" href="adddec.php">Add Decision</a>
      </li>

    
    

       <li class="nav-item x">
        <a class="nav-link a" style="color: #E7E7E8; font-size: 17px;" href="managedec.php">Manage Decisions</a>
      </li>

         <li class="nav-item x">
        <a class="nav-link a" style="color: #E7E7E8; font-size: 17px;" href="ar.php">Archived Decisions</a>
      </li>
         <li class="nav-item x">
        <a class="nav-link a" style="color: #E7E7E8; font-size: 17px;" href="post.php">Posts</a>
      </li>
    
    </ul>
    <a class="btn btn-outline-warning my-2 my-sm-0 mr-2" href="login.php">LogOut</a>
         

  </div>
</nav>