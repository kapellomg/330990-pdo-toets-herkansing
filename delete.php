<?php
try{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "pdo_toets_herkansing";

    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare("DELETE FROM burrito WHERE id = :id");

    $stmt->bindParam(":id", $id);

    $id = $_GET["id"];

    $stmt->execute();

    if($stmt == true){
        echo "SUCCESS";
        header("Refresh: 4; url=./index.php");
    }
}catch(ErrorException $e){
        print("FAILURE " . $e->getMessage());
    }
