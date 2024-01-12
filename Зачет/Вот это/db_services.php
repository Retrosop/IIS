<!DOCTYPE html>
<html>
<head>
<title>Список услуг</title>
<meta charset="utf8" />
<?php include 'head.php' ?>
</head>
<body>
<h2>Список услуг</h2>
<?php

include 'db_connect.php';

$sql = "SELECT * FROM services";
if($result = $conn->query($sql)){
    $rowsCount = $result->num_rows; // количество полученных строк
    echo "<p>Записей: $rowsCount</p>";
    echo "<table><tr><th>Услуга</th><th>Стоимость за месяц</th></tr>";
    foreach($result as $row){
        echo "<tr>";
            echo "<td>" . $row["tipe"] . "</td>";
            echo "<td>" . $row["per_month"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    $result->free();
} else{
    echo "Ошибка: " . $conn->error;
}
$conn->close();
?>
</body>
</html>