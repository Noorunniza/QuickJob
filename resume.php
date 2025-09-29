<?php

    include("./functions/connection.php");
    include("./functions/functions.php");

    $vid=$_GET['vid'];
    $user_id = $_GET['uid'];
    if(empty($vid) || empty($user_id)){
        redirect('./index.php');
    }
    if(isset($_POST['apply'])){
        if(isset($_FILES['resumefile'])){
            $resumeName = imageConvert($_FILES['resumefile'],'./assets/resumefile/');
            $MasterCheck = $con->query("select * from job_apply_master where js_id='$user_id'");
            $MasterResult = $MasterCheck->fetch_assoc();
            $masterid = $MasterResult["jm_id"];
            if(!empty($MasterResult['jm_id'])){
              $ApplyChildSql = $con->query("insert into job_apply_child (jm_id,v_id,resume) values ($masterid,$vid,'$resumeName')");
            }else{
              $ApplyMasterSql = "insert into job_apply_master (js_id) values ($user_id)";
              $con->query($ApplyMasterSql);
              $lastInsertedID = $con->insert_id;
              $ApplyChildSql = $con->query("insert into job_apply_child (jm_id,v_id,resume) values ($lastInsertedID,$vid,'$resumeName')");
            }
        redirect("./thanku.php");
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Apply Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to left, hsl(0, 28%, 92%), hsla(188, 21%, 48%, 0.878));
            text-align: center;
        }
        .container {
            
            margin: 200px auto;
            width: 700px;
            background-color: #fff;
            padding: 50px;
            border-radius: 40px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            text-align: left;
        }
        .form-group input[type="text"],
        .form-group input[type="password"],
        .form-group input[type="file"] {
            width: 90%;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .form-group input[type="file"] {
            padding: 20px;
        }
        .form-group input[type="submit"] {
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 30px;
            cursor: pointer;
        }
        .form-group input[type="submit"]:hover {
            background-color: #0056b3;
            
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Apply Form</h2>
        <form  method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="resume">Upload Resume:</label>
                <input type="file" id="resume" name="resumefile" accept=".pdf" required>
            </div>
            <div class="form-group">
                <input type="submit" name="apply" value="Submit">
            </div>
        </form>
    </div>
</body>
</html>
