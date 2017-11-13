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
              <input style="margin-top: 10px; float:right; background: #2B2B2B; color: #0167BB;" type="button" id="btn1" href="login.php" value="log-in">

            </div>
          </div>
        </nav>

      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4"></div>
        <div class="col-sm-4"></div>
      </div>
      <div class="row">
          <div class="col-sm-4"></div>
          <div class="col-sm-4">
            <h1>Login</h1>
            <form id="form1" method="post" action="loguser.php">
            <div class="form-group">
                <label for="username" >Username: </label>
                <input type="text" class="form-control" id="username1" pattern="[A-Za-z]+[0-9]+" required>
                <br/>
                <input type="submit" class="btn btn-primary" value="submit" id="submit1"> 
            </div>
            </form>
          </div>
      </div>    
      <div class="row">
          <div class="col-sm-4"></div>
          <div class="col-sm-4">
            <h1>Register</h1>
            <form id="form2" method="post" action="register.php">
              <div class="form-group">
              <label for="username" >Username: </label>
                <input type="text" class="form-control" id="username" name="username" pattern="[A-Za-z0-9]+" required>
				
				<label for="password" >Password: </label> 
                <input type="text" class="form-control" id="password" name="password" pattern="[A-Za-z0-9]+" required>
                

                <label for="firstName" >First Name: </label>
                <input type="text" class="form-control" id="firstName" name="firstName" pattern="[A-Za-z]+" required>

                <label for="lastName">Last Name: </label>
                <input type="text" class="form-control" id="lastName" name="lastName" pattern="[A-Za-z]+" required>

                <label for="email" >Email: </label>
                <input type="email" class="form-control" id="email"  name="email" pattern="[\w\-\.\+]+\@[A-Za-z0-9\.\-]+\.[a-zA-Z0-9]{2,4}" required>

                <br/>

                <input type="submit" class="btn btn-primary" value="submit" id="submit1"> 

              </div>
              </form>
          </div>
      </div>
    </div>
  </div>
     

	</body>
</html>