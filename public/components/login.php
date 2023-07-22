<?php
include "db.php";

session_start();

function uidExists($con,$email){
	$sql="SELECT * FROM users WHERE usersEmail=?;";
	$stmt=mysqli_stmt_init($con);
	if(!mysqli_stmt_prepare($stmt,$sql)){
	  header("location: index.php?error=stmtfailed");
	  exit();
	}
	mysqli_stmt_bind_param($stmt,"s",$email);
	mysqli_stmt_execute($stmt);
 
	$resultData=mysqli_stmt_get_result($stmt);
 
	if($row=mysqli_fetch_assoc($resultData)){
	 return $row;
	}
	else{
	 $result=false;
	 return $result;
	}
	mysqli_stmt_close($stmt);
  }

  function  loginUser($con,$username,$pwd){
	$uidExists=uidExists($con,$username);

	if($uidExists==false){

	echo "<span style='color:red;'>Please register before login..!</span>";
	exit();
	}
	$pwdHashed=$uidExists['usersPwd'];
	$checkPwd=password_verify($pwd,$pwdHashed);

	if($checkPwd===false){
	
	echo "<span style='color:red;'>Wrong password..!</span>";
	exit();
	}elseif($checkPwd===true){
	 session_start();

	 $_SESSION['uid']=$uidExists["usersId"];
	 $_SESSION['name']=$uidExists["usersName"];

	 echo "login_success";
	 echo "<script> location.href='../../index.php'; </script>";
		 
	 exit;
	}
}



if(isset($_POST["email"]) && isset($_POST["password"])){

	$username=$_POST['email'];
	$pwd=$_POST['password'];
  

	loginUser($con,$username,$pwd);

	
}
    


?>