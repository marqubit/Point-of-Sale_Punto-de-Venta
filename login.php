<?php
	session_start();
	$errmsg_arr = array();
	$errflag = false;

    //funcion para conectar
    function connect_BDD(){
    	$link = mysql_connect('localhost', 'marqubit_pos', "seccion33");
		if(!$link) {
			die('Failed to connect to server: ' . mysql_error());
		}
		$db = mysql_select_db('marqubit_pos', $link);
		if(!$db) {
			die("Unable to select database");
		}
		return $link;
    }

	//funcion que limpia las cadenas para que no hagan SQL injection
	function clean($str) {
		$str = @trim($str);
		//sin espacios
		if(get_magic_quotes_gpc()) {
			// sin comillas
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
		//las sentencias sql no las hace si tineenn caracteres especiales
	}

	$link = connect_BDD();
	//Sanitize the POST values
	$login = clean($_POST['username']);
	$password = clean($_POST['password']);
	//Input Validations
	if($login == '') {
		$errmsg_arr[] = 'Username missing';
		$errflag = true;
	}
	if($password == '') {
		$errmsg_arr[] = 'Password missing';
		$errflag = true;
	}
	
	//If there are input validations, redirect back to the login form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: index.php");
		exit();
	}
	
	//Create query
	$qry="SELECT * FROM user WHERE username='$login' AND password='$password'";
	$result=mysql_query($qry);
	
	//Check whether the query was successful or not
	if($result) {
		if(mysql_num_rows($result) > 0) {
			//Login Successful
			session_regenerate_id();
			$member = mysql_fetch_assoc($result);
			$_SESSION['SESS_MEMBER_ID'] = $member['id'];
			$_SESSION['SESS_FIRST_NAME'] = $member['name'];
			$_SESSION['SESS_LAST_NAME'] = $member['position'];
			//$_SESSION['SESS_PRO_PIC'] = $member['profImage'];
			session_write_close();
			header("location: main/index.php");
			exit();
		}else {
			//Login failed
			header("location: index.php");
			exit();
		}
	}else {
		die("Query failed");
	}
?>