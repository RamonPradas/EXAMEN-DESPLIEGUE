<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>RAMÓN PRADAS MARTORELL</h1>

    <?php
    $servername = "db";
    $username = "root";
    $password = "secret";
    $dbname = "vehiculos";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
        /* echo "SIIIIIIIII \n"; */
        $resultado = $conn->query("SELECT * FROM coches");
        while($row = mysqli_fetch_array($resultado))
        {
        echo "<tr>";
        echo "<td>" . $row['id'] ."</td>" . "\n";
        echo "<td>" . $row['marca'] . "</td>" . "\n";
        echo "<td>" . $row['modelo'] . "</td>" . "\n";
        echo "</tr>";
        echo "<br>";
        }


    ?>
  
    
</body>
</html>