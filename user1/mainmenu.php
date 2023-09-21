<?php
    require 'conn.php';
    $sql = "SELECT * FROM  user";
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
    <title>User Bio</title>
</head>

<body>
    <div class="container">
        <h1>User  Bio</h1><br>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col-4">FirstName-LastName</th>
                    <th scope="col-4">Address</th>
                    <th scope="col-4">Phone</th>
                    <th scope="col-4">Edit</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<tr><td>".$row["id"]."</td>"."<td>".$row["firstname"]." ".$row["lastname"]."</td>"."<td>".$row["address"]."</td>"."<td>".$row["phone"]."</td>"."<td>"."<a class='btn btn-warning' href='editbio.php?sid=".$row["id"]."'>Edit</a>"."</td>";
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

</html>