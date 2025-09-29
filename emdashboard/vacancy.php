<?php
include("./connection.php");
include("./functions.php");
if(isset($_POST['submit']))
{
  $a=$_POST['cmp_id'];
  $b=$_POST['required_no_of_employees'];
  $c=$_POST['salaries'];
  $d=$con-> real_escape_string($_POST['work_experience']);
  $f=$_POST['sex'];
  $v_name= $_POST['v_name'];
  $cat_id = $_POST['category'];
  $job_description =$con->real_escape_string( $_POST['description']);

//  if($_POST['work_experience'] == "Fresher"){
    // $ins=$con->query("INSERT INTO `vacancy`(`cmp_id`,`cat_id`,`v_name`,`required_no_of_employees`,`salaries`,`work_experience`,`sex`,`description`) VALUES ('$a',$cat_id,'$v_name','$b','$c','Fresher','$f','$job_description')");
//  }else{
    $ins=$con->query("INSERT INTO `vacancy`(`cmp_id`,`cat_id`,`v_name`,`required_no_of_employees`,`salaries`,`work_experience`,`sex`,`description`) VALUES ('$a',$cat_id,'$v_name','$b','$c','$d','$f','$job_description')");
//  }
    if($ins)
    {
        echo "inserted";
        redirect("./addvacancy.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Vacancy</title>
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
        <h1 id="her_head">ADD JOB VACANCY</h1>
    </div>
    <div class="container">
        
        <form action="" method="POST">
        <div class="form-group">
                <label>Vacancy Name</label>
                <input type="text" id="v_name" name="v_name" required>
            </div>
            <div class="form-group">
                <label>Company Name</label>
                <select name="cmp_id" required>
                    <?php 
                        $sql=$con->query("select c.name,c.id,f.name as fname from company c inner join field f on c.field_id = f.id ");
                        while($fieldResults=$sql->fetch_assoc()){
                    ?>
                    <option value="<?php echo $fieldResults['id']; ?>"><?php echo $fieldResults['name']."(".$fieldResults['fname'].")";?></option>
                    <?php
                        }
                    ?>
                    
                </select>
            </div>
            <div class="form-group">
                <label >Required Number of Employees</label>
                <input type="number" id="required_no_of_employees" name="required_no_of_employees" required>
            </div>
            <div class="form-group">
                <label>Salaries</label>
                <input type="text" id="salaries" name="salaries" required>
            </div>
            <div class="form-group">
                <label>Work Type</label>
                <select name="category" id="category">
                    <option>select value</option>
                    <option value="2">Experienced</option>
                    <option value="3">Fresher</option>
                </select>
            </div>
            <div class="form-group" id="workexp">
                <label >Work Experience</label>
                <input type="text" id="work_experience" name="work_experience">
            </div>
            
            <div class="form-group">
                <label>Job Description</label>
                <textarea id="job_description" name="description" rows="4" required></textarea>
            </div>
            <div class="form-group">
                <label >Preferred Sex</label>
                <select id="sex" name="sex" required>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="any">Any</option>
                </select>
            </div>
            <div class="form-group">
                <input type="submit" class="btn-submit" value="Submit" name="submit">
            </div>
        </form>
    </div>
</body>
<script>
        // const workexpDiv = document.getElementById("workexp");

        // workexpDiv.style.display="none";
        
        // const HandleSelectCategory = (value) => {
        //     console.log(value);
        //     if(value==2){
        //         workexpDiv.style.display = "block";
        //     }else{
        //         workexpDiv.style.display = "none";
        //     }
        // }

</script>
</html>
