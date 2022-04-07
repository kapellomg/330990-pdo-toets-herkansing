<?php ob_start();
$servername = "localhost"; 
$username = "root";
$password = ""; 
$dbname = "pdo_toets_herkansing"; 
try {
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password); 
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$stmt = $conn->prepare("INSERT INTO burrito (id, formaat, saus, bonen, rijst) 
VALUES (:id, :formaat, :saus, :bonen, :rijst)");
$stmt->bindParam(':id', $id); 
$stmt->bindParam(':formaat', $formaat);
$stmt->bindParam(':saus', $saus); 
$stmt->bindParam(':bonen', $bonen);
$stmt->bindParam(':rijst', $rijst);

// set the PDO error mode to exception $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
// prepare sql and bind parameters
 
// insert a row 
$id = NULL; 
$formaat = $_POST["formaat"]; 
$saus = $_POST["saus"]; 
$bonen = $_POST["bonen"];
$rijst = $_POST["rijst"];
$id = $_POST["id"];
var_dump($stmt->queryString); 



$stmt->execute(); 
    echo "New records created successfully"; 
    header("Refresh:3; ./read.php"); }
    catch(PDOException $e) { echo $e->getMessage(); header("Location: ./index.php"); } $conn = null; 
