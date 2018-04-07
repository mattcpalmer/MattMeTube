<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Media Upload</title>
</head>

<body>

   <div id="Navigation_Bar">
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container-fluid">



    <!-- Links that are located on the Navagation Bar -->

  	<!-- Left Nav Bar Elements -->

    <ul class="navbar-nav navbar-left">
  	  <a class="navbar-brand" href="#">METUBE</a>
      <li class="nav-item">
        <a class="nav-link" href="#">IMAGE</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">VIDEO</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">AUDIO</a>
      </li>
     </ul>


  	  <!-- Right Nav Bar Elements -->
  	<ul class="nav navbar-nav navbar-right">

  		<!-- Search bar -->
  		<form class="navbar-form navbar-right" action="#" style="padding-right: 20px; width: 450px">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search" name="search">
          <div class="input-group-btn">
            <button class="btn btn-default" type="submit">
  				 <i class="fas fa-search"></i>
         	 </button>
          </div>
        </div>
      </form>

  		<!--<li class="nav-item">
  		  <a class="nav-link" href="register.php"> Register</a>
  	  </li>-->
  	  <li class="nav-item">
  		  <a class="nav-link" href="index.php"> Logout</a>
  		</li>
   </ul>

  </div>
  </nav>
  </div>








<form method="post" action="media_upload_process.php" enctype="multipart/form-data" >

  <p style="margin:0; padding:0">
  <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
   Add a Media: <label style="color:#663399"><em> (Each file limit 10M)</em></label><br/>
   <input  name="file" type="file" size="50" />

	<input value="Upload" name="submit" type="submit" />
  </p>


 </form>

</body>
</html>
