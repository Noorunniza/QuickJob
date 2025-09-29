<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Jobseeker List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }

        .header {
            /* background-color: rgb(28, 40, 43); */
            background: linear-gradient(to left, #3c3a3a, hsla(188, 21%, 48%, 0.878));
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        .container {
            width: 80%;
            /* max-width: 800px; */
            margin: 0px auto;
            padding: 20px;
            background-color: hsl(0, 43%, 96%);
            border-radius: 5px;
            box-shadow: 0 2px 4px hwb(0 62% 36% / 0.945);
            width: 100%;

        }

        h1 {
            font-size: 24px;
        }

        .company-list {
            list-style: none;
            padding: 0;
        }

        .company-list li {
            margin: 10px 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .add-company {
            text-align: center;
            margin-top: 20px;
        }

        .add-button {
            /* background-color: #3498db; */
            background: linear-gradient(to right, hsl(0, 9%, 91%), hsla(188, 21%, 48%, 0.878));
            border: #f5f5f5;
            color: #fff;
            /* border: none; */
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            /* Remove the default button underline */
            display: inline-block;
            /* Ensure the anchor acts like a button */
        }

        .add-button:hover {
            background-color: hsl(0, 6%, 50%);
        }

        #style {
            font-family: cursive;
        }

        #head {
            font-size: 20px;
        }
        #hero{
            width: 100%;
            text-align: center;
            display: flex;
            justify-content: start;
            /* background-color:rgb(245, 210, 245);
        } */}
        #hero_head{
            color: black;
            justify-content: start;
            margin-left: 0px;
            text-transform: uppercase;
            font-family: monospace;
            font-size:30px
        }
        .hero_bt {   
         margin-top: 3px; 
        padding: 10px;
        width: 50px;
        /* background-color:black; */

        /* border: none; */
        color: black; 
        font-size: 18px;
        /* border-radius: 50px; */
        display: inline-block;
        text-decoration: none;
        border: 1px solid black;
        margin-left: 640px;
    }
    .hero_bt:hover {
        color:white;
        /* background-color: white; */
        border: 1px solid white;
     }
     .hero_bt1 {   
        margin-top: -95px; 
        padding: 3px;
        width: 30px;
        /* background-color:black; */

        /* border: none; */
        color: black; 
        font-size: 18px;
        /* border-radius: 50px; */
        display: inline-block;
        text-decoration: none;
        border: 1px solid black;
        margin-left: 710px;
        /* float:right; */
        /* padding-left: 200px; */
        /* gap:0px; */
    }
    .hero_bt:hover {
        color:#3f3737;
        /* background-color: white; */
        /* border: 1px solid hsl(193, 72%, 63%); */
        background-color: hsla(0, 2%, 23%, 0.548);
        /* float: right; */
     }


        table,tr{
            border: 1px solid black;
            color:black;
            width: 100%;
            border: none;
        }
        td{
            padding: 5px;
            border: 1px solid black;
            color:black;
        }
        #hero-content{
            margin-left: 0px;
            margin-top: 0px;
        }
        .bt{
            padding: 10px;
            color: white;
            border: 1px solid white;
            display: inline-block;
            background-color: black;
            font-family:monospace;
            text-transform: capitalize;
        }
        #hero_head{
            justify-content: left;
            margin-top: 130px;


        }
        .sidebar {
            margin-top: 100px;
            width: 250px;
            /* background-color: hsla(0, 0%, 5%, 0.772); */
            background: linear-gradient(to left, #3c3a3a, hsla(188, 21%, 48%, 0.878));
            color: #fff;
            position: fixed;
            height: 100%;
            overflow-y: auto;

        }

        .sidebar a {
            padding: 20px 20px;
            text-decoration: none;
            color: #fff;
            display: block;
        }

        .sidebar a:hover {
            background-color: hsl(0, 0%, 8%);
        }

        /* Content Area */
        .content {
            margin-left: 250px;
            padding: 20px;
        }

        /* Header */
        .header {
            position: fixed;
             top: 0;
            background-color: hwb(0 5% 95% / 0.785);
            color: #fff;
            padding: 30px;
            width: 100%;
             margin-left:-20px;
             margin-top: -20px;
        }
        #hero_content{
            margin-top: -70px;
        }
    </style>
</head>

<body>
<div class="sidebar">
<a href="admin.php">Dashboard</a>

        <a href="addemployer.php">Employer</a>
        <a href="addjobseeker.php">Job Seeker</a>
        <a href="addfields.php">Fields</a>
        <a href="addcompany.php">Company</a>
        <a href="addvacancy.php">Vacancies</a>
        <a href="addcategory.php">Category</a>
        <a href="addappliedjob.php">Applied job</a>
        <a href="addfeedback.php">Feedback</a>



    </div>
    <div id="style">
        <div class="header">
            <h1>JobSeeker</h1>
            <h1></h1>
            <!-- <a class="add-button" href="jobseeker.php">Add Jobseeker</a> -->

        </div>
            <div id="hero">
                <div style="display: flex;justify-content: center; padding: 0px;">
                    <div style="width: 100%; margin-top: 10px; margin-left: 300px;">
                        <h2 id="hero_head">LIST OF JOBSEEKER</h2><br><br>
                        <p id="hero_content">
                        <table>
                            <form method="POST">
                            <tr>
                                <th>FAST NAME</th>
                                <th>LAST NAME</th>
                                <th>DOB</th>
                                <th>CONTACTNO</th>
                                <th>ADDRESS</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                            <?php
                            include("./functions/connection.php");
                            include("./functions/functions.php");

                            $sel=$con->query("select * from register r inner join login l on r.username = l.username");
                            if($sel->num_rows>0){
                                while($r=mysqli_fetch_array($sel)){
                                    $a=$r['fname'];
                                    $b=$r['lname'];
                                    $c=$r['DOB'];
                                    $e=$r['phone'];
                                    $f=$r['address'];
                                    $g=$r['username'];
                                    $status = $r['status'];
                                    ?>
                                    <tr>
                                    <td><?php echo $a ?></td>
                                    <td><?php echo $b ?></td>
                                    <td><?php echo $c ?></td>
                                    <td><?php echo $e ?></td>
                                    <td><?php echo $f ?></td>
                                    <td><?php echo $g ?></td>

                                    <td>
                                        <?php 
                                            if($status == 1){
                                                ?>
                                                <span style="color:green;"></span>Active</span>
                                                <?php 
                                            }
                                            else if($status == 0){
                                                ?>
                                                <span style="color:red;"></span>InActive</span>
                                                <?php
                                            }
                                        ?>
                                    </td>
                                    <!-- //button -->
                                <?php 
                                            if($status == 1){
                                                ?>
                                               <td>
                                                <a  style="text-decoration: none;" class='bt' type='submit' class="btn-submit" name='Deactivate'  href='./functions/status.php?email=<?php echo $g; ?>&status=0'>Deactivate

                                                </a></td><br>
                                                <?php 
                                            }
                                            else if($status == 0){
                                                ?>
                                               <td><a  style="text-decoration: none;" class='bt' type='submit' class="btn-submit" name='Activate' href='./functions/status.php?email=<?php echo $g; ?>&status=1'>Activate</button></td><br>
                                                <?php
                                            }
                                        ?>
                                  </td>
                                
                                </td>
                                     </tr>
                                     <?php 
                                }
                            }
                            

                           ?>
                           </form>
                        </table>

                        </p>


                        <a href="admin.php" class="hero_bt">back</a>
                    </div>
                </div>
            </div>
            <!-- Add your list of companies here -->
        </div>
    </div>
</body>
</html>