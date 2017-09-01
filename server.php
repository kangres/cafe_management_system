<?php
	$first_name = "";
	$last_name = "";
	$sic = "";
	$errors = array();
	
	//connect to the database
	$db = mysqli_connect('localhost:85','root','','register');
	
	//if the register button is clicked
	if(isset($_POST['registeration'])){
		$first_name = mysql_real_escape_string($POST['first_name']);
		$last_name = mysql_real_escape_string($POST['last_name']);
		$sic = mysql_real_escape_string($POST['sic']);
		$password_1 = mysql_real_escape_string($POST['password_1']);
		$password_2 = mysql_real_escape_string($POST['password_2']);
		
		//ensure that form fields are filled properly
		if(empty($first_name)){
			array_push($errors, "first name is requierd");
		}
		if(empty($last_name)){
			array_push($errors, "last name is requierd");
		}
		if(empty($sic)){
			array_push($errors, "sic is requierd");
		}
		if(empty($password_1)){
			array_push($errors, "password is requierd");
		}
		if($password_1!=password_2){
			array_push($errors, "the two password do not match");
		}
		//if there are no errors save user to database
		if(count($errors) == 0){
			$password = md5(password_1);//encrypt password before storing into database
			$sql = "INSERT INTO register (first_name,last_name,sic,password)
					VALUES('$first_name','$last_name','$sic','$password')";
					mysql_query($db,$sql);
		}
	}