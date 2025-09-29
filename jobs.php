<!DOCTYPE html>
<html>
<head>
    <title>Job Portal</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            /* background-color: #f0f0f0; */
            background: linear-gradient(to left, hsl(0, 20%, 94%), rgba(0, 123, 255, 0.514));
            text-align: center;
        }
        .container {
            margin-top: 100px;
        }
        .job-button {
            font-size: 18px;
            padding: 15px 30px;
            border: none;
            border-radius: 5px;
            background-color: #007BFF;
            color: #fff;
            cursor: pointer;
            margin: 10px;
            text-decoration: none !important; /* Remove underline */
            display: inline-block; /* Ensure the button behaves like a block element */
        }
        .job-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to Our Job Portal</h1>
        <p>Are you looking for a job?</p>
        <?php 
            include("./functions/connection.php");
            include("./functions/functions.php");

            $id = $_GET['id'];
            if(!$id){
                redirect('./index.php');
            }
            $sql = $con->query("select c.name as cat_name, c.id as cat_id,v.id as vid from vacancy v  inner join category c on v.cat_id = c.id where  v.cmp_id = {$id}");
            if($sql->num_rows > 0){
            while($result = $sql->fetch_assoc()){
                // var_dump($result)
                
        ?>
        <a href="applynow.php?id=<?php echo $result['cat_id'];?>&company_id=<?php echo $id;?>" class="job-button"><?php echo $result['cat_name']; ?></a>
        <?php
            }
        }else{
            redirect("./next_page.html");
        }
        
        ?>
    </div>
</body>
</html>
