
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            
        }

        /* Sidebar */
        .sidebar {
            margin-top: 0px;
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
            background-color: #555;
        }

        /* Content Area */
        .content {
            margin-left: 250px;
            padding: 20px;
        }

        /* Header */
        .header {
            /* background-color: hwb(0 5% 95% / 0.785); */
            background: linear-gradient(to right, #3c3a3a, hsla(188, 21%, 48%, 0.878));
            color: #fff;
            padding: 10px;
            width: 120%;
             margin-left:-20px;
                margin-top: -20px;
        }

        /* Box Container */
        .box-container {
            
            background-color: rgba(105, 179, 194, 0.856);
            /* background: linear-gradient(to right, #3c3a3a, hsla(188, 21%, 48%, 0.878)); */
            width: 150px;
            height: 150px;
            padding: 50px;
            margin: 10px 0;
            border-radius: 30px;
            
            display: inline-block;
        }
    
    a{
        color:white;
        text-decoration: none;
    }
    a:hover{
        color: black;
    }
    .logout {
    padding: 12px 30px; /* Adjusted padding for a slightly larger button */
    background: linear-gradient(to right, #3c3a3a, hsla(188, 21%, 48%, 0.878)); /* Change background color to a shade of blue */
    color: white; /* Text color */
    text-decoration: none; /* Add text decoration back */
    /* border: 2px solid #2980b9; Border styling */
    border-radius: 5px; /* Reduced border-radius for a less rounded appearance */
    cursor: pointer; /* Enable the cursor */
    display: inline-block; /* Ensures that the button doesn't take the full width */
    text-align: end; /* Center-align text within the button */
    font-size: large;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    /* font-style: italic; */
    font-weight: 900;
}

        /* .logout:hover {
            background-color: wheat;
        } */
        .logout-container {
            display: flex;
            justify-content: left;
            
        }
    </style>
</head>
<body>
    <div class="sidebar">
        
    <a href="admin.php">Dashboard</a>
    <br><br><br>
        <a href="addemployer.php">Employer</a>
        <a href="addjobseeker.php">Job Seeker</a>
        <a href="addfields.php">Fields</a>
        <a href="addcompany.php">Company</a>
        <a href="addvacancy.php">Vacancies</a>
        <a href="addcategory.php">catogery</a>
        <a href="addappliedjob.php">Applied job</a>
        <a href="addfeedback.php">Feedback</a>



    </div>

    <div class="content">
        <div class="header">
            <h1>Admin Dashboard </h1> 
            <div  style="text-align: center;  " ><a href='./logout.php' class="logout"> Logout</a></div>
        
           
        </div>

        <div id="employer" class="box-container">
          <h2>  <a href="addemployer.php">Employer </a> </h2>
            <!-- Add content for the employer section here -->
        </div>&nbsp;&nbsp;&nbsp;&nbsp;

        <div id="jobseeker" class="box-container">
            <h2> <a href="addjobseeker.php">Job Seeker</a></h2>
            <!-- Add content for the job seeker section here -->
        </div>&nbsp;&nbsp;&nbsp;&nbsp;


        <div id="fields" class="box-container">
            <h2> <a href="addfields.php">Fields</a></h2>
            <!-- Add content for the fields section here -->
        </div>&nbsp;&nbsp;&nbsp;&nbsp;


        <div id="company" class="box-container">
        <h2 > <a href="addcompany.php">Company </a> </h2>
            <!-- Add content for the company section here -->
        </div>&nbsp;&nbsp;&nbsp;&nbsp;


        <div id="vacancies" class="box-container">
            <h2> <a href="addvacancy.php">Vacancies</a></h2>
            <!-- Add content for the vacancies section here -->
        </div>&nbsp;&nbsp;&nbsp;&nbsp;

        <div id="vacancies" class="box-container">
            <h2> <a href="addcategory.php">catogery</a></h2>
            <!-- Add content for the vacancies section here -->
        </div>&nbsp;&nbsp;&nbsp;&nbsp;

        <div id="vacancies" class="box-container">
            <h2> <a href="addappliedjob.php">Applied job</a></h2>
            <!-- Add content for the vacancies section here -->
        </div>&nbsp;&nbsp;&nbsp;&nbsp;

        <div id="vacancies" class="box-container">
            <h2> <a href="addappliedjob.php">Feedback</a></h2>
            <!-- Add content for the vacancies section here -->
        </div>&nbsp;&nbsp;&nbsp;&nbsp;
    </div>
</body>
</html>
