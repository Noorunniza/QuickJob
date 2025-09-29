<?php
    include("../functions/functions.php");
    include("../functions/connection.php");
    
    $id = $_GET['id'];

    if(!empty($id)){
        $sql = $con->query("select 
                            e.empid as empid,
                            e.cmp_id as cmp_id,
                            e.gender as gender,
                            e.name as name,
                            e.email as email,
                            e.phone as phone,
                            e.address as address,
                            l.password as password,
                            c.name as cmpnyname 
                            from employer e
                            inner join company c on  e.cmp_id = c.id 
                            inner join login l on e.email = l.username where empid={$id}");
        $result = $sql->fetch_assoc();
        $oldEmail = $result["email"];
        $cmp_id = $result["cmp_id"];
        $oldpassword = $result["password"];

        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $name=$_POST['name'];
            $newemail=$_POST['email'];
            $phone=$_POST['phone'];
            $gender=$_POST['gender'];
            $address=$_POST['address'];
            $cmpnyname=$_POST['cmp_id'];
            $password = $_POST['password'];
            $sqlCheck = $con->query("select * from login where username='$newemail'");

            if($sqlCheck->num_rows<0){
            //login update
            $updateLogin = $con->prepare("update table login set username=?, password=?");
            $updateLogin->bind_param("ss",$newemail,$password);
            $final = $updateLogin->execute();
            //employer update
            $ins=$con->prepare("update 
                                employer set 
                                name=?,
                                email=?,
                                phone=?,
                                gender=?,
                                address=?,
                                cmp_id=?
                            ");
            $ins->bind_param("sssssi",$name,$newemail,$phone,$gender,$address,$cmpnyname);
            $ins->execute();
            
            }else if(($oldEmail == $newemail)){
                //employer update
            $ins=$con->prepare("update 
            employer set 
            name=?,
            email=?,
            phone=?,
            gender=?,
            address=?,
            cmp_id=?
                ");
            $ins->bind_param("sssssi",$name,$newemail,$phone,$gender,$address,$cmpnyname);
            $ins->execute();
            }else{
                phpalert("There is an Account Associated with this mail");
            }
            redirect("../addemployer.php");
        }
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Employee</title>
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
                <form action="" method="POST">

                    <table>
                        <tr>
                            <td> NAME</td>
                            <td> <input required class="inp" type="text" name="name" id="" value="<?php echo $result['name']; ?>" placeholder="enter name">
                            </td>
                        </tr>
                        
                        <tr>
                            <td> CONTACT NO</td>
                            <td> <input required class="inp" type="number" name="phone" id="" value="<?php echo $result['phone']; ?>"placeholder="enter phone number">
                            </td>
                        </tr>
                        <tr>
                            <td> ADDRESS</td>
                            <td> <input required class="inp" type="text" name="address" id="" value="<?php echo $result['address']; ?>"
                                    placeholder="enter address"></td>
                        </tr>
                        <tr>
                            <td> GENDER</td>
                            <td> <input required class="inp" type="text" name="gender" id="" value="<?php echo $result['gender']; ?>"placeholder="enter gender">
                            </td>
                        </tr>
                        <tr>
                            <td> COMPANY NAME</td>
                            <td> <select  class="inp" name="cmp_id" required>
                                    <?php 
                                        $sql = $con->query("select id,name from company");
                                        while($result = $sql->fetch_assoc()){
                                    ?>
                                    <option value="<?php echo $result['id']; ?>" <?php if($result['id']==$cmp_id) echo 'selected="selected"'; ?>><?php echo $result['name']; ?></option>
                                    <?php 
                                        }
                                    ?>
                                </select> 
                            </td>
                        </tr>
                        <tr>
                            <td> EMAIL</td>
                            <td> <input required class="inp" type="email" name="email" id="" value="<?php echo $oldEmail; ?>"placeholder="enter email">
                            </td>
                        </tr>
                        <tr>
                            <td> PASSWORD</td>
                            <td> <input required class="inp" type="password" name="password" id="" value="<?php echo $oldpassword; ?>" placeholder="*****">
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