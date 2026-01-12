<?php
    function VarExist($var){
        if(isset($var)){
            return $var;
        }
        else{
            // header("Location: ../index.html");
        }
    }

    $user=new stdClass();
    $user->fn=VarExist($_POST['firstname']);
    $user->ln=VarExist($_POST['lastname']);
    $user->email=VarExist($_POST['email']);
    $user->pass=VarExist($_POST['password']);
    $user->sex=VarExist($_POST['sex']);
    $user->age=VarExist($_POST['age']);
    $user->lang=VarExist($_POST['language']);
    

    InsertUserToDBObject($user);
    
    $usr=array();
    $usr+=['firstname'=>VarExist($_POST['firstname'])];
    $usr+=['ln'=>VarExist($_POST['lastname'])];
    $usr+=['email'=>VarExist($_POST['email'])];
    $usr+=['pass'=>VarExist($_POST['password'])];
    $usr+=['sex'=>VarExist($_POST['sex'])];
    $usr+=['age'=>VarExist($_POST['age'])];
    $usr+=['lang'=>VarExist($_POST['language'])];

    echo "<br>";
    InsertUserToDBObject($usr);


    function InsertUserToDBObject($user){
        print_r($user);
    }
    
    function InsertUserToDBArray($usr){
        print_r($usr);
    }

    
?>