<!DOCTYPE html>
<html>
<head>
<title>Список сотрудников</title>
<meta charset="utf8" />
<?php include 'head.php' ?>
</head>
<body>
<h2>Список сотрудников</h2>
<?php

include 'db_connect.php';

$sql = "SELECT * FROM employee";
if($result = $conn->query($sql)){
    $rowsCount = $result->num_rows; // количество полученных строк
    echo "<p>Записей: $rowsCount</p>";
    echo "<table><tr><th>Код</th><th>Фамилия</th><th>Имя</th><th>Отчество</th><th>Должность</th></tr>";
    foreach($result as $row){
        echo "<tr>";
            echo "<td>" . $row["idemployee"] . "</td>";
            echo "<td>" . $row["surname"] . "</td>";
            echo "<td>" . $row["name"] . "</td>";
            echo "<td>" . $row["patr_name"] . "</td>";
            echo "<td>" . $row["position"] . "</td>";
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