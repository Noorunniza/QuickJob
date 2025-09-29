<?php
    include("./functions/connection.php");

    $id = $_GET['id'];
    $status = $_GET['status'];


    $sql = $con->query("update field set status=$status where id='$id'");

    if($sql){
        header("Location:./addfields.php");
    }
    ?>