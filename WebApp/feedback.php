<!DOCTYPE Html>
<html>
	<head>
	<title>

	</title>
	<style>

    body {

            background-image: url("http://thewallpaper.co/wp-content/uploads/2016/03/cool-background-textures-high-resolution-images-desktop-images-samsung-wallpaper-desktop-images-for-mac-windows-wallpaper-amazing-widescreen-artwork-1920x1200-1440x900.jpg");
            background-repeat: no-repeat;
            background-attachment: fixed; 
          }
  </style>
	
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
	
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	
	<script type="text/javascript">
			function Validation(){
				if (!document.getElementById("name").value.match(/^[A-z]+$/)){
					alert("Please enter a valid Name");
					return false;
				}
				
				if(!$("#email")[0].checkValidity())
				{
				$("#errorMsg").text($("#email")[0].validationMessage);
				return false;
				}
								
				return true;
			}

</script>
	
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
              <a class="navbar-brand" href="index.php">Movies AF</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav" >
               <li class="active"><a href="index.php">Home</a></li>
                <li ><a href="movies.php">Movies</a></li>
                <li><a href="/contact">Watchlist</a></li>
				<li><a href="feedback.php">Feedback</a></li> 
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
		
		 <div class="container-fluid" style=" margin: auto; width:50%; background-color: #fcfcff;margin-top: -20%;">
		 
				</br></br></br></br></br></br></br></br></br></br></br></br></br>
				
				
				<form id="form">
				<div class="form-group">
				<center>
				<fieldset style="width: 450px">
				<legend >Feedback</legend>
				<br><br>

				Name:  <input class="form-control" id="name" type="text" name="Name" required>
				<br><br>

				E-mail address:  <input class="form-control" id="email" type="email" name="Email" required>
				<p id="errorMsg"></p>
				<br></br>

				Gender:  <select class="form-control" name="Gender" required>
									<option value="male">Male</option>
									<option value="female">Female</option>
							 </select>
				<br><br>
				
				Date of Birth(DD/MM/YYYY):  
				<input class="form-control" id="Date" type="text" name="Date" required>
				<p id="date_val" style="red"></p>

				<script>
						$("#Date").datepicker({maxDate: 0, changeMonth: true, changeYear: true, dateFormat: "dd-mm-yyyy"});
				</script>
				<br><br><br><br></br></br></br>

				Please Leave Your Feedback Below<input class="form-control" id="feedback" type="text" style="height: 150px" name="feedback" required>
				<br></br>
				

				<input class="btn btn-primary" type="submit" name="Submit" onclick="Validation()">        
				<input class="btn btn-primary" type="reset" name="Reset" value="Clear">
				<br><br>

				</center>
				</fieldset>
				</div>
				</form>
		 </div>

      </div>
    </div>
	
	</body>
	</html>