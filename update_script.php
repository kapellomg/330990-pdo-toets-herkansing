<?php
try {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "pdo_toets_herkansing";

    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare("UPDATE burrito set formaat = :formaat, saus = :saus, 
        bonen= :bonen, rijst = :rijst WHERE id = :id");


    $stmt->bindParam(":formaat", $formaat);
    $stmt->bindParam("saus", $saus);
    $stmt->bindParam("bonen", $bonen);
    $stmt->bindParam(":rijst", $rijst);
    $stmt->bindParam(":id", $id);
//update  maken 

    $id = $_POST["id"];
    $formaat = $_POST["formaat"];
    $saus = $_POST["saus"];
    $bonen = $_POST["bonen"];
    $rijst = $_POST["rijst"];

    $stmt->execute();


    if ($stmt == true) {
        echo "Data goed gewijzegd";
        header("Refresh: 3; url=./index.php?message=goed");
    }
} catch (ErrorException $e) {
    print("Error: " . $e->getMessage());
}
