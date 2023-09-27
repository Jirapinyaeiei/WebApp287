<?php
    require 'conn.php';
    $sql = "SELECT * FROM actor";
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
    <title>Actor</title>
</head>

<body>
    <div class="container">
        <h1>Actor</h1><br>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col-4">ชื่อ-นามสกุล</th>
                    <th scope="col-4">ชื่อเล่น</th>
                    <th scope="col-4">เพศ</th>
                    <th scope="col-4">อายุ</th>
                    <th scope="col-4">หนังที่แสดง</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<tr><td>".$row["actorname"]."</td>"."<td>".$row["actor nickname"]."</td>"."<td>".$row["gender"]."</td>"."<td>".$row["age"]."</td>"."<td>".$row["movies shown"]."</td>"."</td>";
                            echo "</tr>";    
                        }
                    }else {
                        echo "0 results";
                    }
                    $conn->close();
                ?>
            </tbody>
        </table>
        <a class="btn btn-success" href='insertbio.php'>Insert User</a>
    </div>
</body>
