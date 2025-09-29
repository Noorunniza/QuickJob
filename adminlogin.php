<?php
$con=new mysqli("localhost","root","","quick");
if(isset($_POST['login']))
{
    
    $a=$_POST["username"];
    $b=$_POST["password"];
    $res=$con->query("SELECT * from `login` where username='$a' and password='$b'");
    if($res->num_rows>0)
    {
        echo "<script>alert('login succesfully');</script>";
        header("location:admin.php");
    }
    else
    {
        echo "<script>alert('login unsuccesfull');</script>";
}
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Admin Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            /* background-color: #f3f3f3; */
            background: linear-gradient(to left,grey,hsla(188, 21%, 48%, 0.878));
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;

        }

        .login-container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 350px;
            /* height: 300px; */
            padding: 20px;
        }

        .login-container h2 {
            text-align: center;
            color: #333;
        }

        .login-form {
            display: flex;
            flex-direction: column;
        }

        .form-group {
            margin: 10px 0;
        }

        .form-group label {
            color: #555;
            font-weight: 600;
        }

        .form-group input {
            width: 50%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        .form-group input:focus {
            outline: none;
            border-color: #3498db;
        }

        .login-button {
            background-color: #3498db;
            color: #fff;
            border: none;
            padding: 10px;
            border-radius: 10px;
            cursor: pointer;
        }

        .login-button:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Admin Login</h2>
        <form class="login-form" action="admin.php" method="POST">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="login-button" name="login">Login</button>
        </form>
    </div>
</body>
</html>
