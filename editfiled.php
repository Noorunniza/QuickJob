<?php
$field_id = $_GET['id'];

include("./functions/functions.php");

$con=new mysqli("localhost","root","","quick");
    

    if(isset($_POST['edit'])){
        $field_name=$_POST['name'];
       $description=$_POST['description'];
        if($_FILES['fieldimage']['size'] > 0){
            // var_dump($_FILES['fieldimage']);
            // die();
            $imageName = imageConvert($_FILES['fieldimage'],'./assets/filedImages/');
            // echo $imageName;
            // die();
            $sql = $con->query("update field set fieldimage ='$imageName' where id='$field_id' ");
        }
        
           $update=$con->query("update field set name = '$field_name',description='$description' where id='$field_id'");
            if($update){
            echo "updated!";
            redirect("./addfields.php");
            }
        
    }
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Field</title>
    <style>
        *{
        margin: 0px;
        padding: 0px;
    }
        body {
            font-family: Arial, sans-serif;
            /* background-image: url(./assets/istockphoto-1247934977-612x612.jpg);
            background-size: cover; */
            background: linear-gradient(to left,grey,#8b9b9ee0);
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            display: block;
            font-weight: bold;
        }
        input[type="text"], input[type="number"], textarea, select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        select {
            height: 40px;
        }
        textarea {
            resize: vertical;
        }
        .btn-submit {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .btn-submit:hover {
            background-color: #0056b3;
        }
        #her_head {
            display: flex;
            text-transform: uppercase;
            font-size: 30px;
            font-weight: 1200;
            font-family: cursive;
        
            background-color:#8b9b9ee0;
            width: 100%;
            color: hsl(0, 0%, 3%);
            text-align: center;
            padding: 30px;
        
        }

    </style>
</head>
<body>
    <div>
        <h1 id="her_head">EDIT Filed</h1>
    </div>
    <div class="container">
        
        <form  method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label >Filed NAME</label>
                <?php 
                if(!empty($field_id)){
                    $sql = $con->query("select * from field where id='$field_id'");
                    $result = $sql->fetch_assoc();
                }else{
                    redirect('./addfields.php');
                }
                ?>
                <input type="text" id="name" name="name" value="<?php echo $result['name']; ?>" required>
                <textarea name="description">
                <?php echo $result['description'];?>
                </textarea>
                
                <div class="form-group">
                <img style="height:200px; width:200px;" src="./assets/filedImages/<?php echo $result['fieldimage'];?>" alt="<?php echo $result['fieldimage'];?>">
                <label for="resume">Upload Photo:</label>
                <input type="file" name="fieldimage" accept=".jpeg,.png,.jpg" >
            </div>
            
            </div>
           
            <div class="form-group">
                <input type="submit" class="btn-submit" value="Edit" name="edit">
            </div>
        </form>
    </div>
</body>
</html>
