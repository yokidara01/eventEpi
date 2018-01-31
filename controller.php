<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name =  $_POST["login"] ;
   $mdp =  $_POST["mdp"] ;
 

}
if($name!="admin"  ||  $mdp!="epi123"){
 header('Location: '."error.php");
}else{
	session_start();
	$_SESSION["co"] = "true";
	 header('Location: '."backend.php");

}

?>