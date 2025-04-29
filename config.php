 <?php
 $host = 'localhost';
 $dbname = 'fitquest2';
 $username = 'root';
 $password = '';
 
 // Create connection using MySQLi
 $conn = new mysqli($host, $username, $password, $dbname);
 
 // Check connection
 if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
 }
?>