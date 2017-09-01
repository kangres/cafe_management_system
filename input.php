<!DOCTYPE html>
<html>
<head>
     <title>Login page</title>
     <link rel="stylesheet"type="text/css" href="style.css">
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
</head>
<body>
	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Cafeteria</a>
    </div>
	<form action="sample.html"method="post">
    <ul class="nav navbar-nav">
	
      <li><p>
				<input type = "hidden" name="shapassword">
                <input type="hidden" name="key">
				<input id = "username" name="username" type="text" class="form-control "style="display: inline;
				width:200px;margin-left:600px;margin-top:6px" placeholder="User Name">
				<input id="username" name="username" type="password" class="form-control" style="display: inline;
				width:200px" placeholder="password">
				<button type="submit" id="btnLogIn" name="btnLogIn" class="btn btn-sucses"style="color:red">Go</button>
				<br>
				<span style="color:red;font-size;14px;font-weight:bold"></span>
           </p>
	  </li>
	  <li><a href="registeration.php">Register</a></li>
    </ul>
  </div>
  <div class = "slick-slide img">
	<img src="cafe4.jpg" style="width:100%;height:100%">
	<img src = "cafe3.jpg">
  </div>
</nav>
	<div id="special">
		<h1 class = "one">Todays Special</h1>
		<p><li class = "two">chicken biryani</li></p>
		<p><li class = "three">veg biryani</li></p>
	</div>
    <style>
	.reg{
	}
	.signupbtn{
		margin-top:6px;
		margin-left:4px;
	}
	.image{
		width:720px;
		height:720px;
	}
	#special{
		border: dotted red 2px;
		border-width:3px auto;
		margin-right:80%;
		.two{
			margin-left:2%;
		}
		.three{
			margin-left:2%;
		}
		.one{
			margin-left:10%;
		}
	}
	body{
		background-color:purple;
	}
	
	.slick-slide img {
		min-width: calc(100% - 100px);
		margin: 0 50px;
	}
	.btn btn-sucses{
		color:red;
	}
    </style>
</body>
</html>














