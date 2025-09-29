<?php
    include("../functions/connection.php");
    extract($_GET);
    $id= $_GET['id'];
    $status = $_GET['status'];


    $sql = $con->query("update vacancy set status=$status where id='$id'");

    if($action){
        if($sql){
            header("Location: ../emdashboard/addvacancy.php");
        }
    }else{
        if($sql){
            header("Location: ../addvacancy.php");
        }
    }
    
    ?>