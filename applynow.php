<?php 
    session_start();
    include("./functions/connection.php");
    include("./functions/functions.php");

    $id = $_GET['id'];
    $company_id = $_GET['company_id'];
?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Listing</title>
    <link rel="stylesheet" href="styles.css">
</head>
<style>
    .job-listing {
    background-color: #f5f5f5;
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 10px;
    margin: 10px;
}

.job-name {
    font-size: 24px;
    font-weight: bold;
    color: #333;
}

.required-employees {
    font-size: 16px;
    color: #555;
}

.salary {
    font-size: 16px;
    color: #555;
}

.qualification {
    font-size: 16px;
    color: #555;
}

.job-description {
    font-size: 16px;
    color: #444;
}

.apply-now-button {
    display: inline-block;
    padding: 10px 20px;
    background-color: #0074cc;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
    font-weight: bold;
    margin-top: 10px;
}

.apply-now-button:hover {
    background-color: #0056a7;
}

</style>
<body>
    <?php 
    if($id && $company_id){
        $uid = $_SESSION['userid'];
        $sql = $con->query("select *,v.id as v_id
                            from vacancy v
                            inner join company cmp
                            on v.cmp_id = cmp.id  
                            inner join category c 
                            on v.cat_id = c.id 
                            where v.cat_id = {$id} AND v.cmp_id = {$company_id} AND v.status=1 and  cmp.status=1" );
                            // if () {
                            //     // Redirect to the next page
                            //     header("Location: next_page.php");
                            //     exit();
                            // } 
        if($sql->num_rows == 0){
            redirect("./next_page.html");
        }                 
        while($result = $sql->fetch_assoc()){
        ?>
        <div class="job-listing">
        <h2 class="job-name"><?php echo $result['v_name']; ?></h2>
        <p class="required-employees">Required Employees: <?php echo $result['required_no_of_employees']; ?></p>
        <p class="salary">Salary: $<?php echo $result['salaries']; ?>  per year</p>
        <p class="qualification">Qualification/Experience: <?php echo $result['name'].",". $result['work_experience'] ?></p>
        <p class="job-description">Job Description: <?php echo $result['description'] ?></p>
        <?php 
            $ApplyCheckSql = $con->query("select jc.jc_id from 
                                          job_apply_child jc inner join job_apply_master jm 
                                          on jc.jm_id = jm.jm_id 
                                          where jc.v_id={$result['v_id']} 
                                          and jm.js_id='$uid'");
                                          $ApplyResult = $ApplyCheckSql->fetch_assoc();
                                          
            if(!empty($ApplyResult['jc_id'])){
                ?>
                <label>Resume Submitted</label>
        <?php 
        } else{
        ?>
        <a href="resume.php?vid=<?php echo $result['v_id'];?>&uid=<?php echo $uid;?>" class="apply-now-button">Apply Now</a>
    <?php } ?>
    </div>
        <?php
         }  
        }else{
            redirect('./index.php');
        }
    ?>
    
    <!-- <div class="job-listing">
        <h2 class="job-name">Data Analyst</h2>
        <p class="required-employees">Required Employees: 2</p>
        <p class="salary">Salary: $70,000 - $90,000 per year</p>
        <p class="qualification">Qualification/Experience: Bachelor's degree in Statistics or related field and 2+ years of data analysis experience</p>
        <p class="job-description">Job Description: We are seeking a data analyst to analyze and interpret data and provide valuable insights for our organization...</p>
        <a href="resume.php" class="apply-now-button">Apply Now</a>
    </div>
    <div class="job-listing">
        <h2 class="job-name">UI/UX Designer</h2>
        <p class="required-employees">Required Employees: 1</p>
        <p class="salary">Salary: $60,000 - $80,000 per year</p>
        <p class="qualification">Qualification/Experience: Bachelor's degree in Design or related field and 3+ years of UI/UX design experience</p>
        <p class="job-description">Job Description: We are looking for a talented UI/UX designer to create engaging and intuitive user experiences for our digital products...</p>
        <a href="resume.php" class="apply-now-button">Apply Now</a>
    </div>
    <div class="job-listing">
        <h2 class="job-name">Cybersecurity Analyst</h2>
        <p class="required-employees">Required Employees: 2</p>
        <p class="salary">Salary: $75,000 - $95,000 per year</p>
        <p class="qualification">Qualification/Experience: Bachelor's degree in Cybersecurity or related field and 3+ years of cybersecurity experience</p>
        <p class="job-description">Job Description: We are seeking a cybersecurity analyst to protect our organization's computer systems and networks from security breaches and cyberattacks...</p>
        <a href="resume.php" class="apply-now-button">Apply Now</a>
    </div> -->
    
</body>
</html>
