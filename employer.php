<?php
include("./functions/connection.php");
include("./functions/functions.php");

if(isset($_POST['insert']))
{
 $a=$_POST['name'];
 $b=$_POST['email'];
 $password = $_POST['password'];
 $c=$_POST['phone'];
 $d=$_POST['gender'];
 $e=$_POST['address'];
 $f=$_POST['cmp_id'];
 
$sqlCheck = $con->query("select * from login where username='$b'");
if($sqlCheck->num_rows>0){
    phpalert("There is an account associated with this Email");
}else{
    $role = "employer";
    $insertStmt = $con->prepare('insert into login (username,password,role) values (?,?,?)');
    $insertStmt->bind_param("sss",$b,$password,$role);
    $finalResult = $insertStmt->execute();
    $ins=$con->query("INSERT INTO `employer`(`name`,`email`,`phone`,`gender`,`address`,`cmp_id`) VALUES ('$a','$b','$c','$d','$e','$f')");
}
redirect("./addemployer.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Employee</title>
    <style>
        #hero {
            width: 100%;
            color: rbg(28, 28, 83);
            text-align: center;
            font-size: 20px;
            font-style: oblique;
            font-weight: 900;
            display: flex;
            justify-content: center;
            background-image: url('./assets/Job-Seekers-Header3.jpg');
            background-color: dimgray;
            background-size: cover;

        }
        #her_head {
            display: flex;
            text-transform: uppercase;
            font-size: 25px;
            font-weight: 1200;
            font-family: cursive;
        }
        td{
            padding:5px;

        }
        .inp {
            /* color: #dcdce8; */
            padding: 10px;
            border-radius: 5px;
            border: none;
            font-family: cursive;


        }
        #hero_bt {
            margin-top: 10px;
            padding: 15px;
            width: 200px;
            background-color: black;
            border: none;
            color: grey;
            font-size: 18px;
            border-radius: 30px;
        }
    </style>
</head>

<body>
    <div id="hero">
        <div style="display: flex;width:100%;justify-content: center;background-color:hsla(204, 3%, 37%, 0.568);
                padding: 250px;">
            <div style="width: 50%;">
                <p id="hero_content">

                    <!-- register opening -->
                <h1 id="her_head">Add Employers</h1> <br><br>
                <form method="post">

                    <table>
                        <tr>
                            <td> NAME</td>
                            <td> <input required class="inp" type="text" name="name" id="" placeholder="enter name">
                            </td>
                        </tr>
                        
                        <tr>
                            <td> CONTACT NO</td>
                            <td> <input required class="inp" type="number" name="phone" id="" placeholder="enter phone number">
                            </td>
                        </tr>
                        <tr>
                            <td> ADDRESS</td>
                            <td> <input required class="inp" type="text" name="address" id=""
                                    placeholder="enter address"></td>
                        </tr>
                        <tr>
                            <td> GENDER</td>
                            <td> <input required class="inp" type="text" name="gender" id="" placeholder="Enter gender">
                            </td>
                        </tr>
                        <tr>
                            <td> COMPANY NAME</td>
                            <td>
                                <select  class="inp" name="cmp_id" required>
                                    <?php 
                                        $sql = $con->query("select id,name from company");
                                        while($result = $sql->fetch_assoc()){
                                    ?>
                                    <option value="<?php echo $result['id']; ?>"><?php echo $result['name']; ?></option>
                                    <?php 
                                        }
                                    ?>
                                </select> 
                            </td>
                        </tr>
                        <tr>
                            <td> EMAIL</td>
                            <td> <input required class="inp" type="email" name="email" id="" placeholder="enter email">
                            </td>
                        </tr>
                        <tr>
                            <td> Password</td>
                            <td> <input required class="inp" type="password" name="password" id=""
                                    placeholder="****">
                            </td>
                        </tr>
                        
                        <tr>
                            <td></td>
                            <td> <button id="hero_bt"  name="insert" type="submit">ADD</button></td>
                        </tr>
                    </table>


                </form>
            </div>
        </div>
    </div>
</body>

</html>