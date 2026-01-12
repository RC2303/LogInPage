<?php
    session_start();
    if (!isset($_SESSION["user"])){
        header("location:../index.php");
    } 
?>
<html>
<head>
    <link href="../css/mStyles.css" rel="stylesheet">
</head>
<body>
    <div class="row" id="header">
        <div class="userInfo">Welcome<?php echo $_SESSION["user"]; ?>
        <button onclick="window.location.replace('http://127.0.0.1/LogInPage/');">LogOut</button>
    </div>

    </div>
</body>
</html>