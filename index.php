<?php 
    session_start();

?>

<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=div, initial-scale=1.0">
    <title>Home</title>
    <style>
        * {
            margin: 0px;
            padding: 0px;
        }

        #nav1 {
            
            width: 50%;
            color: rgb(28, 28, 83);
            display: flex;
            justify-content: start;
            gap: 10px;
            padding-left: 10px;
            font-family: cursive;
            font-size: 26px;
            font-weight: bold;


        }

        #nav1::first-letter {
            color: rgb(221, 255, 0);

        }

        #nav2 {
            width: 30%;
            display: flex;
            justify-content: start;
            gap: 20px;
            font-size: 20px;
            font-weight: bold;
        }

        #navbar {
            display: flex;
            width: 100%;
            position: fixed;
            padding: 10px;
            padding-left: 50px;
            background-color: rgb(139, 155, 158);

        }

        .navbar img {
            position: absolute;
            top: 35px;
            left: 35px;
            margin: 0;
            float: left;
            /* margin: 10px; */
            height: 3px;
            /* Adjust the height as needed */
            justify-content: start;
            position: relative;
        }

        /* .logo { 
      float:right;
      size-adjust: 50%;
      padding-right: 100%; 
     } */


        .nav-link {
            color: rgb(28, 28, 83);
            text-decoration: none;
            font-size: larger;
            font-weight: 900;
            font-family: cursive;
            text-transform: capitalize;
            justify-content: space-between;
        }

        .nav-link:hover {
            color: antiquewhite;
        }



        /*#copy {
            
            font-size: medium;
            font-weight: 900;
            text-align: center;
            font-family: monospace;
            background-color: #28defe;
        }*/


        #hero {
            width: 100%;
            color: rbg(28, 28, 83);
            text-align: center;
            font-size: 20px;
            font-style: oblique;
            font-weight: 900;
            display: flex;
            justify-content: center;
            background-image: url('./assets/business-businessman-communication-concept.jpg');
            background-size: cover;

        }

        #hero_bt {
            margin-top: 20px;
            padding: 20px;
            width: 200px;
            background-color: rgb(28, 28, 83);
            border: none;
            color: white;
            font-size: 18px;
            border-radius: 50px;
        }

        #footer {
            padding: 30px;
            background-color: rgb(139, 155, 158);
        }

        #foot1 {

            justify-content: start;
            font-size: 16px;
            font-weight: 900;

        }

        #foot2 {

            display: flex;
            justify-content: end;
            padding: 2px;
            gap: 20px;

            /* text-align: center; */

        }

        h3 {
            font-size: 25px;
            font-weight: -1200;
            text-align: end;
            padding-top: -800px;
            justify-content: end;
            color: #0e0e0e;
            margin: -10px;
            margin-right: -100px;
            margin-top: -30px;
        }

        #copy {
            justify-content: center;
            background-color: rgb(139, 155, 158);
            text-align: center;
            font-size: 20px;
            font-weight: 900;
        }

        #social {
            display: flex;
            justify-content: center;
            /* Center-align horizontally */
            align-items: center;
            /* Center-align vertically */
            height: 100px;
            /* Adjust height as needed */
            background-color: rgb(139, 155, 158);
            /* Just for visualization */
        }

        #button {
            color: #f5f5f5;
            text-decoration: none;
            font-style: italic;
            font-weight: 900;

        }

        #button:hover {
            color: black;
        }

        .container-wrapper {
            display: flex;
            flex-direction: row;
            justify-content: center;
        }

        .container {
            border: 1px solid #ddd;
            width: 100%;
            padding: 10px;
            margin: 10px;
            display: flex;
            align-items: center;
            border-color: black;
        }

        .container img {
            max-width: 300px;
            margin-right: 10px;

        }

        /* .button {
            background-color: rgba(13, 13, 13, 0.502);
            color: #fff;
            margin-left: 200px;
            padding: 10px 70px;
            text-decoration: none;
            display: block;
            margin: 10px auto;
            width: 100px;
        } */
        .button {
            background-color: rgba(121, 142, 148, 0.801);
            color: hsl(0, 3%, 6%);
            padding: 10px 20px;
            margin: 10px auto;
            text-decoration: none;
            font-weight: 600;
            border-radius: 5px;
           margin-top: 30px;
           position: absolute;
    
        }

        #heading {
            margin-top: -60px;
            position: absolute;
            text-align: left;
            color: hwb(180 7% 93%);
            font-style: normal;
            font-size: 36px;
            font-weight: bold;
        
        }

        .button:hover {
            color: rgb(218, 215, 215);
        }
        
        .header {
            background-color:rgba(121, 142, 148, 0.801);
            color: hsl(0, 0%, 6%);
            text-align: center;
            padding: 20px;
        }
    </style>
</head>

<body>
    <!-- Navbar opening-->
    <div id="navbar">
        <img src="assets\quick-job-logo-template-design-letter-q-logo-fast-vector-38391217.jpg" height=100px;>
        <!-- position=absolute; -->
        <!-- top=100px; -->
        <!-- left=50px; -->
        <!-- margin=500px;> -->

        <div id="nav1">QUICK JOB


            <!-- <a href="#" class="logo"><img src="quick-job-logo-template-design-letter-q-logo-fast-vector-38391217.jpg" ></a> -->

        </div>
        <div id="nav2">
        <?php 
            include('./navbar/navbar.php');            
        ?>            

        </div>
    </div>
    <!-- Navbar closing-->
    <!-- hero section opnening -->
    <div id="hero">
        <div style="display:flex;
        justify-content:center;
          background-color:#7c888a6f;;    
           padding:300px;">
            
            <?php if (isset($_SESSION['isAuthenticated_user']) && $_SESSION['isAuthenticated_user'] = true){
?>
    <div style=width:50%>
                <h id="her_head"></h>
                <p id="hero_content">Welcome to online Job Portal. It provides facility to the Job Seeker to search for
                    various jobs as per his qualification. Here Job Seeker can registered himself on the web portal and
                    create his profile along with his educational information. Job Seeker can search various jobs and
                    apply
                    for the Job</p>
            </div>
                <?php 
                    }else{ ?>
                    <div style=width:50%>
                <h id="her_head">Register here </h>
                <p id="hero_content">Welcome to online Job Portal. It provides facility to the Job Seeker to search for
                    various jobs as per his qualification. Here Job Seeker can registered himself on the web portal and
                    create his profile along with his educational information. Job Seeker can search various jobs and
                    apply
                    for the Job</p>
                <button id="hero_bt"> <a href="register.php" id="button"> Register</a></button>
            </div>
       <?php } ?>
        </div>
    </div>

    <!-- hero1 section opening -->
    <div>
        <div class="header">
            <h1>Job fileds</h1>
        </div>
        <?php 
            $con=new mysqli("localhost","root","","quick");
            $sql = $con->query("select * from field");
            while($fieldResult = $sql->fetch_assoc()){
                ?>
                <div class="container">
            <img src="./assets/filedImages/<?php echo $fieldResult['fieldimage']; ?>" alt="Information Technology">
            <div>
                <h3 id="heading"><?php echo $fieldResult['name']; ?></h3>
                <p id="con"><?php echo $fieldResult['description']; ?></p>
                <?php 
                if (isset($_SESSION['isAuthenticated_user']) && $_SESSION['isAuthenticated_user'] = true){
                ?>
                <a href="companies.php?id=<?php echo $fieldResult['id']; ?>" class="button">View Companies</a>
                <?php 
                    }else{
                ?>
                     <a href="./login.php" class="button">View Companies</a>
                <?php
                    }
                ?>
            </div>
        </div>
        <?php

            }
        ?>
    </div>

    <!-- footer opening -->
    <div id="footer">
        <div id="foot1">
            contact<br>
            nooru@gmail.com <br>
            9961822083
            <div id="social">
                <a href="past the link"><img src="assets\facebook.png"></a>
                <a href="past the link"><img src="assets\instagram.png" width="65px"></a>

                <a href="past the link"><img src="assets/youtube.png"></a>
                <a href="past the link"><img src="assets/twitter.jpg"></a>
            </div>
        </div>
        <div id="foot2">
            <h3>Useful links</h3>
            <div style="display: flex;justify-content: space-around;">
                <a href="index.php" class="nav-link">home</a>
                <a href="about.php" class="nav-link">about</a>
                <a href="contact.php" class="nav-link">contact </a>
                <a href="login.php" class="nav-link">login</a>
                <a href="register.php" class="nav-link">register</a>
            </div>

        </div>
    </div>
    <div id="copy">
        copyright@nooru
    </div>



    <!-- footer closing -->

</body>

</html>