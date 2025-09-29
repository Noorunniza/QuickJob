<?php
include("../functions/connection.php");
include("../functions/functions.php");

$id = $_GET['id'];
if(!empty($id)){
    $sql = $con->query("select * from company where id=$id");
    $result = $sql->fetch_assoc();
 if(isset($_POST['submit']))
 {
    $a=$_POST['name'];
    $b=$_POST['address'];
    $c=$_POST['phone'];
    $d=$_POST['field'];
    
        if($_FILES['companyImage']['size'] > 0){
            $imageName = imageConvert($_FILES['companyImage'],'../assets/companyImages/');
            $sql = $con->query("update company set companyImage = '$imageName'");
        }
        $sqlUpdte = $con->query("update company set name='$a',address='$b',phone='$c',field_id='$d' where id=$id");
        redirect("../addcompany.php");
  }
  
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit company</title>
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
        <h1 id="her_head">EDIT COMPANY</h1>
    </div>
    <div class="container">
        
        <form  method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label >COMPANY NAME</label>
                <input type="text" id="name" name="name" value="<?php echo $result['name'] ?>" required>
            </div>
            <div class="form-group">
                <label >COMPANY ADDRESS</label>
                <textarea name="address" id="" required >
                <?php echo $result['address'] ?>
                </textarea>
                <!-- <input type="number" id="address" name="required_no_of_employees" required> -->
            </div>
            <div class="form-group">
                <label>CONTACT</label>
                <input type="number" id="phone" name="phone" value="<?php echo $result['phone'] ?>" required>
            </div>
            <div class="form-group">
                <label>Field</label>
                <select name="field" id="field">
                    <option>Select value</option>
                    <?php 
                        $sql= $con->query("select * from field");
                        while($fieldResult = $sql->fetch_assoc()){
                            ?>
                            <option value="<?php echo $fieldResult['id']; ?>" <?php if($fieldResult['id']==$result['field_id']) echo 'selected="selected"'; ?> ><?php echo $fieldResult['name']; ?></option>
                            <?php
                        }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <img style="height:200px; width:200px;"src="../assets/companyImages/<?php echo $result['companyImage'];?>">
                <label for="resume">Upload Photo:</label>
                <input type="file" id="companyImage" name="companyImage" accept=".jpeg,.png,.jpg" >
            </div>
            <div class="form-group">
                <input type="submit" class="btn-submit" value="Submit" name="submit">
            </div>
        </form>
    </div>
</body>
</html>