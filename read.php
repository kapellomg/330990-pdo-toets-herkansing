<?php

try {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "pdo_toets_herkansing";


    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare("SELECT * FROM burrito");

    $stmt->execute();

    $result = $stmt->setFetchMode(PDO::FETCH_OBJ);

    $resultaat = "";


    foreach ($stmt->fetchAll() as $key => $value) {
        $resultaat .= "
        <tr>
        <td>$value->id</td>
        <td>$value->formaat cm</td>
        <td>$value->saus</td>
        <td>$value->bonen</td>
        <td>$value->rijst</td>
        <td>
        
        
        <input type='hidden' name='id' value='$value->id'>
        <button type='submit'></button>
        </form>
        
        </td>
        <td><a href='delete.php?id=$value->id'><i class='fa-solid fa-trash-can'></i></a></td>
        </tr>
        ";
    }
} catch (ErrorException $e) {
    print("Error: " . $e->getMessage());
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <!-- custom icom font awesome cdn file link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <title>pdo_toets_herkansing</title>
</head>

<body>

    <div class="container mt-3">
        <h1 class="text-center">Tabel overzicht</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">formaat</th>
                    <th scope="col">saus</th>
                    <th scope="col">bonen</th>
                    <th>rijst</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <?php echo $resultaat ?>
            </tbody>
        </table>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>