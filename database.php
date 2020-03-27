<?php
    $servername ="localhost";
    $username ="root";
    $password ="";
    $dbname ="hailcar";
    $con = new mysqli($servername, $username, $password, $dbname);
    if(!$con){
        die('Could not Connect My Sql:' .mysql_error());
    }

?>