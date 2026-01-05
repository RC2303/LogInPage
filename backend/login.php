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
        echo "Login successful. Welcome, " . $user . "!";
    } 
    else {
        echo "Login failed. Invalid username or password.";
    }

?> 