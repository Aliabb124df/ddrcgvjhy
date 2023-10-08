<?php 
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "myDBPDO"; 

try { 
    $conn = new PDO("mysql:host=$servername", $username, $password); 
    // set the PDO error mode to exception 
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    $sql = "CREATE DATABASE myDBPDO"; 
    // use exec() because no results are returned 
    $conn->exec($sql); 
    echo "Database created successfully<br>";
} 
catch(PDOException $e) { 
    echo $sql . "<br>" . $e->getMessage(); 
} 
   // $conn = null;
    
    try { 
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password); 
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        // sql to create table 
        $sql = "CREATE TABLE user ( id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, name VARCHAR(30) NOT NULL, password VARCHAR(30) NOT NULL, cpassword VARCHAR(30) NOT NULL, email VARCHAR(50), reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP )"; 
        // use exec() because no results are returned 
        $conn->exec($sql); 
        echo "Table user created successfully"; 
    } 
    catch(PDOException $e) { 
        echo $sql . "<br>" . $e->getMessage(); 
    } 
    $conn = mysqli_connect('localhost','root','','myDBPDO') or die('connection failed');
   
    try { 
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password); 
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
      // sql to create table 
      $sql = "CREATE TABLE products ( id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, name VARCHAR(30) NOT NULL, price INT(30) NOT NULL, image VARCHAR(50) NOT NULL, description VARCHAR(50) NOT NULL, reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP )"; 
      // use exec() because no results are returned 
      $conn->exec($sql); 
   } 
   catch(PDOException $e) { 
      echo $sql . "<br>" . $e->getMessage(); 
   } 
   try { 
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password); 
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    // sql to create table 
    $sql = "CREATE TABLE cart ( id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, user_id INT(30) NOT NULL, name VARCHAR(30) NOT NULL, price    INT(30) NOT NULL, quantity INT(50),image VARCHAR(50), reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP )"; 
    // use exec() because no results are returned 
    $conn->exec($sql); 
} 
catch(PDOException $e) { 
    echo $sql . "<br>" . $e->getMessage(); 
}
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    $sql = "INSERT INTO products (name, price, image,description) 
    VALUES ('laptop', 200, 'images/product-1.jpg','description description description')";
    $conn->exec($sql); 
    $sql = "INSERT INTO products (name, price, image ,description) 
     VALUES ('mobile', 100, 'images/product-2.jpg','description description description')"; 
    // use exec() because no results are returned 
    $conn->exec($sql); 
    echo "New record created successfully";
 
?>