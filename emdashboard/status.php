<?php
    include("./connection.php");

    $email = $_GET['email'];
    $status = $_GET['status'];


    $sql = $con->query("update login set status=$status where username='$email'");

    if($sql){
        header("Location: ../addjobseeker.php");
    }
    // class DatabaseUpdater {
    //     private $conn;
    
    //     public function __construct($host, $username, $password, $database) {
    //         $this->conn = new mysqli($host, $username, $password, $database);
    
    //         if ($this->conn->connect_error) {
    //             die("Connection failed: " . $this->conn->connect_error);
    //         }
    //     }
    
    //     public function updateRecord($table, $data, $where) {
    //         $set = '';
    //         foreach ($data as $key => $value) {
    //             $set .= $key . " = '" . $this->conn->real_escape_string($value) . "', ";
    //         }
    //         $set = rtrim($set, ', ');
    
    //         $sql = "UPDATE " . $table . " SET " . $set . " WHERE " . $where;
    
    //         $result = $this->conn->query($sql);
    
    //         if ($result) {
    //             echo "Record updated successfully!";
    //         } else {
    //             echo "Error updating record: " . $this->conn->error;
    //         }
    //     }
    
    //     public function closeConnection() {
    //         $this->conn->close();
    //     }
    // }
    
    
    
    
  
?>