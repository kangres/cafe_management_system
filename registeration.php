<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<body>
<h1>welcome to new registration</h1>
        <form action="registeration.php"method="POST">
			<?php include('errors.php') ?>
			<div id="frm">
				<p>
				<label>Enter first name</label>
				<input type="text"id="user"name="first_name">
				</p>
				<p>
				<label>Enter last name</label>
				<input type="text"id="user"name="last_name">
				</p>
				<p>
				<label>Enetr SIC number:</label>
				<input type="text"id="mail"name="sic">
				</p>
				<p>
				<label>Create password</label>
				<input type="password"name="password_1">
				</p>
				<p>
				<label>Confirm passwpord</label>
				<input type="password"name="password_2">
				</p>
				<p>
				<input type="submit"name="submit">
				</p>
        </form>
    </div>
    <style>
    body{
        background:green;
    }
        h1{
            color:black;
            Left-margin:50%;
        }
        #frm{
            padding: 30px;
            border: solid yellow 5px;
            margin:50px auto;
            border-radius:10px;
            background:purple;
            width:250px;
            height:310px;
            color:yellow;
        }
        #btn{
            color:#fff;
            background:#337ab7;
            padding:5px;
            margin-Left:70%;
            color:pink;
            border-radius:5px;
            border: solid yellow 2px;
        }
    </style>
</body>
</html>


