<?php
  session_start();
?>
<!DOCTYPE Html>
<html>
	<head>
	<title>

	</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
  <link rel='stylesheet' href="css/bootstrap.min.css" type='text/css'/> <!-- this can be applied to all pages to add bootstrap css //-->
  <link rel='stylesheet' href="css/theme.css" type='text/css'/>
  <link rel='stylesheet' href="css/carousel.css" type='text/css'/> 
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
    <div class="navbar-wrapper">
  
      <div class="container">
        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="/">Movies AF</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav" >
                <li class="active"><a href="/">Home</a></li>
                <li ><a href="/aboutapp">Movies</a></li>
        <li><a href="#donate">Directors</a></li>
        <li><a href="/volunteer/">Actors</a></li>
                <li><a href="/contact">Watchlist</a></li>     
                <li> </li>
                <li> </li>
                <li> </li> 
              </ul>

              <label style="margin-top: 10px;color:white;">Search </label> 
              <input type="search" style="margin-top: 10px;" name="search" id="searchBox">
              <a href="login.php"><input style="margin-top: 10px; float:right; background: #2B2B2B; color: #0167BB;" type="button" id="btn1" value="log-in"></a>
              
            </div>
          </div>
        </nav>

      </div>
    </div>
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
      			<img src="http://static.tumblr.com/8bfc962a5ca8f773d634b9aec670e029/yxql1hy/tjtov7rlt/tumblr_static_26osk19e9qck84sgcwogsw88w.jpg" alt="Los Angeles">
    		</div>

		    <div class="item">
		      <img src="http://www.jbsuits.com/blog/wp-content/uploads/2017/03/deadpool-ryan-ronalds.jpg" alt="Chicago">
		    </div>

		    <div class="item">
		      <img src="https://ewedit.files.wordpress.com/2017/06/dunkirk_sdtk_cover_01_1425px_rgb_300dpi.jpg?w=2400&h=2400" alt="New York">
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

	<script>

	</script>

	</body>
</html>