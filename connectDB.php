<?php
function connectDB(){
 
    $servername = "localhost";
    $name = "root";
    $password = "123456";
    $dbname = "asm1_PH55597";
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $name, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        return null;
    }
}   
?>
