<?php
    
    $user=$_POST['username'];
    $pass=$_POST['password'];


    $loggedIn=false;
    $a_users=array("john.doe","jane.smith","alice.jones");
    $a_pass=array("12345","password","qwerty");
  
    for ($i=0;$i<sizeof($a_users);$i++){
        if (($user==$a_users[$i])&&($pass==$a_pass[$i])){
           $loggedIn=true;
           break; 
        }
    }


    if ($loggedIn){
        session_start();
        $_SESSION["user"]=$a_users[$i];
        header("location:../pages/page1.php");
    } 
    else {
        header("location:../index.php");
    }

?> 