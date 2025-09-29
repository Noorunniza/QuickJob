<?php
$con=new mysqli("localhost","root","","quick");
if(isset($_GET['insert']))
{
 $a=$_GET['fname'];
 $b=$_GET['lname'];
 $c=$_GET['DOB'];
$d=$_GET['email'];
 $e=$_GET['phone'];
 $f=$_GET['status'];
 $g=$_GET['address'];
 $h=$_GET['username'];
 $i=$_GET['password'];

 

$ins=$con->query("INSERT INTO `register`(`fname`,`lname`,`DOB`,`email`,`phone`,`status`,`address`,`username`,`password`) VALUES ('$a','$b','$c','$d','$e','$f','$h','$i')");

if($ins)
{
    echo "inserted";
}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add new employer</title>
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
                <h1 id="her_head">Add Jobseeker</h1> <br><br>
                <form action="">

                    <table>
                        <tr>
                            <td> FIRSTNAME</td>
                            <td> <input required class="inp" type="text" name="fname" id="" placeholder="enter name">
                            </td>
                        </tr>
                        <tr>
                            <td> LASTNAME</td>
                            <td> <input required class="inp" type="text" name="lname" id="" placeholder="enter name">
                            </td>
                        </tr>
                        <tr>
                            <td> DOB</td>
                            <td> <input required class="inp" type="text" name="DOB" id="" placeholder="enter date of birth">
                            </td>
                        </tr>
                        <tr>
                            <td> EMAIL</td>
                            <td> <input required class="inp" type="email" name="email" id="" placeholder="enter email">
                            </td>
                        </tr>
                        <tr>
                            <td> CONTACT NO</td>
                            <td> <input required class="inp" type="number" name="phone" id="" placeholder="enter phone number">
                            </td>
                        </tr>
                        <tr>
                            <td> STATUS</td>
                            <td> <input required class="inp" type="text" name="status" id=""
                                    placeholder="enter address"></td>
                        </tr>
                        <tr>
                            <td> ADDRESS</td>
                            <td> <input required class="inp" type="text" name="address" id=""
                                    placeholder="enter address"></td>
                        </tr>
                        <tr>
                            <td> USERNAME</td>
                            <td> <input required class="inp" type="text" name="username" id="" placeholder="enter email">
                            </td>
                        </tr>
                        <tr>
                            <td> PASSWORD</td>
                            <td> <input required class="inp" type="text" name="password" id=""
                                    placeholder="enter company name">
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