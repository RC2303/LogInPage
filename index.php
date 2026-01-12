<?php
session_start();
session_unset();
session_destroy();
?>
<html>
    <head>
        <title>Log In Page</title>
        <link rel="stylesheet" href="css/mStyles.css">
        <link rel="stylesheet" href="css/mForms.css">

    </head>

    <body>
        <div class="row" id="header">
            <div class="userInfo">Welcome<?php echo $_SESSION["user"]; ?>
            <button onclick="window.location.replace('http://127.0.0.1/LogInPage');">LogOut</button></div>
        </div>
        <div class="content">
            
            <h1 style="padding-top 10px;">LogIn</h1>


            <form action="backend/login.php" method="POST" id="loginform">
                <label for "username">User Name</label>
                <br>
                <input type="text" id="username" name="username"class="mtxt">
                <br>
                <label for "password">Password</label>
                <br>
                <input type="text" id="password" name="password" class="mtxt">
                <br>
                <input type="button" value="LogIn" class="mButton" onclick=login()>
                <input type="button" value="Reset"class="mButton" onclick=clearform()>
                
            </form>
            <a href="pages/signupT.html" style="margin-left:5; display: inline-block;"">SignUp...</a>

        </div>
<script>
    function clearform(){//setting
        document.getElementById("username").value="";
        document.getElementById("password").value="";
    }
    function login(){//reading
        var user=document.getElementById("username").value;
        var pass=document.getElementById("password").value;

        console.log("user"+user);
        console.log("pass"+pass);

        if (user=="" || pass==""){
            alert("Please fill all the fields");
        }
        else{
            document.getElementById("loginform").submit();
        }
    }


</script>
    </body>

</html>