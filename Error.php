<!DOCTYPE html>


<html>
<head>
<title>Page Title</title>
<meta charset="utf-8"></meta>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="default.php">Project 3</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="default.php">Home</a></li>
        <li><a href="AboutUs.php">About Us</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="Part01_ArtistsDataList.php">Artist Data List(Part 1)</a></li>
            <li><a href="Part02_SingleArtist.php?id=19">Single Artist(Part 2)</a></li>
            <li><a href="Part03_SingleWork.php?id=394">Single Work(Part 3)</a></li>
            <li><a href="Part04_Search.php">Search(Part 4)</a></li>  
          </ul>
        </li>
      </ul>
	  
      <form method="GET" action="check.php" class="navbar-form navbar-right">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search" name="homesearch">
        </div>
        <input type="submit" class="btn btn-info" value="Search">
      </form>
      <p class="navbar-text navbar-right">Chandra Shekar</p>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<?php
if(isset($_GET["invalid_artistid"])){?>
	<div class="container">
	<p><h3> Invalid Artist ID</h3></p>
	<p><h3>Please select from the artists datalist page : <a href="Part01_ArtistsDataList.php">Artist Data List</a></h3></p>
	</div>
<?php }
else if(isset($_GET["invalid_query_param"])){?>
    <div class="container">
	<p><h3> Invalid Query Parameter</h3></p>
	<p><h3>Please select from the artists datalist page : <a href="Part01_ArtistsDataList.php">Artist Data List</a></h3></p>
	</div>

<?php }
else if(isset($_GET["invalid_artWorkID"])){?>
    <div class="container">
	<p><h3> Invalid ArtWork ID</h3></p>
	<p><h3><a href="Part03_SingleWork.php?id=394">Single Work</a></h3></p>
	</div>

<?php }
else if(isset($_GET["invalid_artwork_query_param"])){?>
    <div class="container">
	<p><h3> Invalid Query Parameter</h3></p>
	<p><h3><a href="Part03_SingleWork.php?id=394">Single Work</a></h3></p>
	</div>

<?php } ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>