<?php 
    
if (isset($_SESSION['isAuthenticated_user']) && $_SESSION['isAuthenticated_user'] = true){
    echo "<a href='index.php' class='nav-link'> home </a>
    <a href='./contact.php' class='nav-link'> contact </a>
    <a href='./logout.php' class='nav-link'> logout</a>
    <a href='./about.php' class='nav-link'> about </a>
    <a href='./feedback.php' class='nav-link'> feedback </a>";
}else{
    echo "<a href='index.php' class='nav-link'> home </a>
    <a href='./contact.php' class='nav-link'> contact </a>
    <a href='./about.php' class='nav-link'> about </a>
    <a href='./login.php' class='nav-link'> login </a>
    <a href='./register.php' class='nav-link'> register </a>
    <a href='./feedback.php' class='nav-link'> feedback </a>";
}


?>