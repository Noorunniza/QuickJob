<?php
  $con=new mysqli("localhost","root","","demo");
  // if(isset($_GET['register']))
  // {
  //   $a=$_GET['name'];
  //   $b=$_GET['email'];
  //   $c=$_GET['username'];
  //   $d=$_GET['password'];
  //   $ins=$con->query("INSERT INTO `register`(`name`, `email`, `username`, `password`) VALUES ('$a','$b','$c','$d')"); 
  // }
  // if(isset($_GET['update']))
  // {
  //   $f=$_GET['username'];
  //   $e=$_GET['email'];
   
    
  //   $ins=$con->query("UPDATE `register` SET `email`='$e'WHERE  username='$f'")  ;
  // }
  // if(isset($_GET['delete']))
  // {
  //   $f=$_GET['username'];
  //   // $e=$_GET['email'];
   
    
  //   $ins=$con->query("DELETE FROM `register` WHERE username='$f'")  ;
  // }

  
?>
<!-- <form action=""  method="GET">
    
<input type="text" name="name">
<input type="email" name="email">
<input type="text" name="username">
<input type="password" name="password">
 <input type="submit" name="register" >
</form> -->
<!-- <form action="" method="GET">
<input type="email" name="email" placeholder="enter email">
<input type="type" name="username" placeholder=" username">
 <input type="submit" name="update">

</form> -->
<!-- <form action="" method="GET">
<input type="type" name="username" placeholder=" username">
 <input type="submit" name="delete" >

</form> -->
<!-- <table border="">
  <tr>
    <td>name</td>
      <td>email</td>
      <td>username</td>
      <td>password</td>
    
  </tr>
  <?php 
  $con= new mysqli("localhost","root","","demo");
   $sel=$con->query("SELECT * FROM `register`");
   if(isset($sel))
   {
   if($sel->num_rows>0)
   {
   while($row=mysqli_fetch_array($sel))
   {
   $name=$row['name'];
   $email=$row['email'];
   $username=$row['username'];
   $password=$row['password'];
   echo "<tr>
   <td>$name</td>
   <td>$email</td>
   <td>$username</td>
   <td>$password</td> </tr>";

   }
   }
   else{
    echo "no rows";
   }
  }
  ?> 
</table>
 