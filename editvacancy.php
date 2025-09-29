<?php
$vid = $_GET['vid'];

include("./functions/functions.php");

$con=new mysqli("localhost","root","","quick");
    

    if(isset($_POST['submit'])){
        $a=$_POST['cmp_id'];
        $cat_id = $_POST['category'];
        $b=$_POST['required_no_of_employees'];
        $c=$_POST['salaries'];
        $d=$con->real_escape_string($_POST['work_experience']);
        $f=$_POST['sex'];
        $v_name= $_POST['v_name'];
        $cat_id = $_POST['category'];
        $description =$con->real_escape_string( $_POST['job_description']);
        
           $update=$con->query("update vacancy 
                                set v_name = '$v_name',
                                cmp_id = '$a',
                                cat_id = '$cat_id',
                                required_no_of_employees='$b',
                                salaries='$c',
                                work_experience='$d',
                                description='$description',
                                sex='$f'
                                where id='$vid'");
            if($update){
            echo "updated!";
            redirect("./addvacancy.php");
            }
        
    }
    

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Vacancy</title>
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
        <h1 id="her_head">EDIT VACANCY</h1>
    </div>
    <div class="container">
    <?php 
                if(!empty($vid)){
                    $sql = $con->query("select *  from vacancy v
                                        inner join company c on v.cmp_id = c.id
                                        inner join category cat on v.cat_id = cat.id
                                        where v.id='$vid'");
                    $result = $sql->fetch_assoc();
                    // var_dump($result['v_name']);

                }else{
                    redirect('./addvacancy.php');
                }
                ?>
        <form action="" method="POST">
        <div class="form-group">
                <label >Vaccancy Name</label>
                <input type="text" id="v_name" name="v_name" value="<?php echo $result['v_name']; ?>" required>
            </div>
            <div class="form-group">
            <label >Comapny</label>
                <select name="cmp_id" required>
                    <?php 
                    
                        $sql=$con->query("select c.name,c.id,f.name as fname from company c inner join field f on c.field_id = f.id ");
                        while($fieldResults=$sql->fetch_assoc()){
                    ?>
                    <option value="<?php echo $fieldResults['id']; ?>" <?php if($result['cmp_id']==$fieldResults['id']) echo 'selected="selected"'; ?>><?php echo $fieldResults['name']."(".$fieldResults['fname'].")";?></option>
                    <?php
                        }
                    ?>
                    
                </select>
            </div>
            <div class="form-group">
                <label >Required Number of Employees</label>
                <input type="number" id="required_no_of_employees" name="required_no_of_employees" value="<?php echo $result['required_no_of_employees'] ?>" required>
            </div>
            <div class="form-group">
                <label>Salaries</label>
                <input type="text" id="salaries" name="salaries"  value="<?php echo $result['salaries'] ?>" required>
            </div>
            <div class="form-group">
                <label>Work Type</label>
                <select name="category" id="category" onChange="HandleSelectCategory(this.value)">
                    <option>select value</option>
                    <option value="2" <?php if($result['cat_id']== 2) echo 'selected="selected"'; ?>>Experienced</option>
                    <option value="3" <?php if($result['cat_id']== 3) echo 'selected="selected"'; ?>>Fresher</option>
                </select>
            </div>
            <div class="form-group" id="workexp">
                <label >Work Experience</label>
                <input type="text" id="work_experience" name="work_experience" value="<?php echo $result['work_experience'] ?>">
            </div>
            <div class="form-group">
                <label>Job Description</label>
                <textarea id="job_description" name="job_description" rows="4" required>
                 <?php echo $result['description'] ?>
                </textarea>
            </div>
            <div class="form-group">
                <label >Preferred Sex</label>
                <select id="sex" name="sex" required>
                    <option value="male" <?php if($result['sex']== "male") echo 'selected="selected"'; ?>>Male</option>
                    <option value="female" <?php if($result['sex']== "female") echo 'selected="selected"'; ?>>Female</option>
                    <option value="any" <?php if($result['sex']== "any") echo 'selected="selected"'; ?>>Any</option>
                </select>
            </div>
            <div class="form-group">
                <input type="submit" class="btn-submit" value="Submit" name="submit">
            </div>
        </form>
    </div>
</body>
<!-- <script>
        const workexpDiv = document.getElementById("workexp");

        workexpDiv.style.display="none";
        
        const HandleSelectCategory = (value) => {
            console.log(value);
            if(value==2){
                workexpDiv.style.display = "block";
            }else{
                workexpDiv.style.display = "none";
            }
        }

</script> -->
</html>
