<?php
    if(isset($_POST["submit"])){        
        try{
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "pdo_toets_herkansing";

            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $stmt = $conn->prepare("INSERT INTO burrito (id, formaat, saus, bonen, rijst)
            VALUES (:id, :formaat, :saus, :bonen, :rijst)");

            $stmt->bindParam(":id", $id);
            $stmt->bindParam(":formaat", $formaat);
            $stmt->bindParam(":saus", $saus);
            $stmt->bindParam(":bonen", $bonen);
            $stmt->bindParam(":rijst", $rijst);

            $id = null;
            $formaat = $_POST["formaat"];
            $saus = $_POST["saus"];
            $bonen = $_POST["bonen"];
            $rijst = $_POST["rijst"];
            $stmt->execute();

            echo "SUCCESS";
            header("Refresh: 3; url=./index.php?message=success");
        }catch(ErrorException $e){
            print("FAILURE " . $e->getMessage());
        }
    }
?>