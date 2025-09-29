<!DOCTYPE html>
<html>

<head>
    <style>
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
            display: flex; /* Make container a flex container */
            align-items: center; /* Vertically center content */
            font-weight: 500;
            font-size: 100% ;
            border-color:#131414;
        
        }

        .container img {
            max-width: 300px;
            margin-right: 10px;
            margin-left: 10px;
            
        }

        .button {
            background-color: rgba(121, 142, 148, 0.801);
            color: hsl(0, 3%, 6%);
            padding: 10px 20px;
            text-decoration: none;
            font-weight: 600;
            border-radius: 5px;
        }

        .heading {
            color: #131414;
            font-style: normal;
            font-size: 36px;
            font-weight: bold;
        }
        .button:hover {
            color:rgb(218, 215, 215);
        }
    </style>
</head>

<body>

    <?php 
        include("./functions/functions.php");
         $con=new mysqli("localhost","root","","quick");
         $sql = $con->query("select *,c.name as cname,c.id as cid from company c inner join field f on c.field_id  =  f.id where c.field_id={$_GET['id']}");
         if($sql->num_rows>0){
         while ($row = $sql->fetch_assoc()) {
    ?>
    <div class="container">
        <img src="assets/companyImages/<?php echo $row['companyImage'] ?>" alt="Company Image">
        <div>
            <h3 class="heading"><?php echo $row['cname']; ?></h3>
            <p>UST is a global digital transformations solutions provider. For more than 23 years, UST has worked side by side with the world’s best companies to make a real impact through transformation..</p>
            <p>location:kerala</p>
            <a href="jobs.php?id=<?php echo $row['cid']; ?>" class="button">View jobs</a>
        </div>
    </div>
    <?php
         }
        }else{
            redirect("./nextcompany.php");
        }
    ?>
    
    <!-- <div class="container">
        <img src="assets/oracle-squarelogo-1570718316042.webp" alt="Information Technology">
        <div>
            <h3 class="heading">ORACLE</h3>
            <p> IBM works to design, advance, and scale the technologies that define each era. Restlessly reinventing since 1911, we are one of the largest technology, consulting and research companies in the world.</p>
            <p>location:kerala</p>
            <a href="fresher.php" class="button">View jobs</a>
        </div>
    </div>
    <div class="container">
        <img src="assets/ibm-squareLogo-1680100245029.webp" alt="Information Technology">
        <div>
            <h3 class="heading">IBM</h3>
            <p>IBM works to design, advance, and scale the technologies that define each era. Restlessly reinventing since 1911, we are one of the largest technology, consulting and research companies in the world.</p>
            <p>location:kerala</p>
            <a href="fresher.php" class="button">View jobs</a>
        </div>
    </div>
    <div class="container">
        <img src="assets/amazon-squarelogo-1552847650117.webp" alt="Information Technology">
        <div>
            <h3 class="heading">AMAZON</h3>
            <p>All Amazon teams and businesses, from Prime delivery to AWS, are guided by four key tenets: customer obsession rather than competitor focus, passion for invention, commitment to operational excellence.</p>
            <p>location:kerala</p>
            <a href="fresher.php" class="button">View jobs</a>
        </div>
    </div>
    <div class="container">
        <img src="assets/Infopark_logo.png" alt="Information Technology">
        <div>
            <h3 class="heading">infopark</h3>
            <p>Infopark Kochi, a perfect destination to house your IT/ITES Business in Kochi, features all world class infrastructures for an IT Park..</p>
            <p>location:kerala</p>
            <a href="fresher.php" class="button">View jobs</a>
        </div>
    </div> -->
    <!-- Repeat the above container structure for other career fields -->

</body>

</html>
