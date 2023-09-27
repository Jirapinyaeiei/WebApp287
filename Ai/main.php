<?php
    require 'conn.php';
    $sql = "SELECT * FROM movie";
    $result = $conn->query($sql);
    if(!$result){
        die("Error : ". $conn->$conn_error);
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Main Menu</title>
</head>

<body>
    <div class="container">
        <h1>Main Menu</h1><br>
        <table class="table">
            <tbody>
                <?php
                ?>
            </tbody>
        </table>
        <a class="btn btn-success" href='mainmenu.php'>User</a>
        <a class="btn btn-success" href='movie.php'>Movie</a>
        <a class="btn btn-success" href='actormain.php'>Actor</a>
        <a class="btn btn-success" href='buy.php'>Buy</a>
    </div>
</body>

</html>