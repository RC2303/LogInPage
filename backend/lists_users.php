<?php

    $a_users=array("john.doe","jane.smith","alice.jones");
    $a_status=array("0","1","1");   
 
?>




<html>
    <head>
        <title>Users</title>
        <link rel="stylesheet" href="../css/mStyles.css">
        <link rel="stylesheet" href="../css/mForms.css">

    </head>

    <body>
        <div class="row" id="header">
        </div>
        <div class="content" style="width: 50%;">
            <div style="text-align: center;color:grey;">
                <h2>Users List</h2>
            </div>
            <div style="width: 50%;float: left;">
                <div class="tableCell tableHeader">UserName</div>
            </div>
            <div style="width: 50%;float: right;">
                <div class="tableCell tableHeader">Status</div>
            </div>


            <?php
            for($i=0;$i<sizeof($a_users);$i++){
                echo '<div style="width: 50%;float: left;">
                <div class="tableCell">'.$a_users[$i].'</div>
            </div>';         
            ?>
            <div style="width: 50%;float: right;">
                <div class="tableCell">
            <?php
                    if ($a_status[$i]){
                        echo "Active";
                    }
                    else{
                        echo "Inactive";
                    }
                ?>
                </div>
            </div>
            <?php
                }
            ?>

        </div>

    </body>
</html>