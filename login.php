<?php
	session_start();
	include"koneksi.php";
	$username=$_POST['usr'];
	$password=$_POST['psw'];
	$psw=md5($password);
	
	$sql_student="select * from students where usr='$username' and psw='$psw'";
	$query_student=mysqli_query($koneksi,$sql_student);
	if($hasil=mysqli_fetch_array($query_student,MYSQLI_NUM)){
		$_SESSION['user']=$username;
		$_SESSION['userid']=$hasil[0];
		$_SESSION['nama']=$hasil[1];
		header("location:index.php");
	}else{
		header("location:index.php?page=login&stat=false");
	}

	$sql_researcher="select * from researchers where usr='$username' and psw='$psw'";
	$query_researcher=mysqli_query($koneksi,$sql_researcher);
	if($hasil=mysqli_fetch_array($query_researcher,MYSQLI_NUM)){
		$_SESSION['user']=$username;
		$_SESSION['userid']=$hasil[0];
		$_SESSION['nama']=$hasil[1];
		header("location:index.php");
	}
	else{
		header("location:index.php?page=login&stat=false");
	}
?>