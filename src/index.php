<?php
include 'config.php';
?>

<!DOCTYPE html>
<html>
<head>
  <title>Isikute nimekiri</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
<h1>ISIKUD</h1>
<a href="add.php">Lisa uus isik</a>
<table>
<tr>
  <th>ID</th>
  <th>Nimi</th>
  <th>Sugu</th>
  <th>Pikkus</th>
  <th>Kaal</th>
  <th>Sünniaeg</th>
  <th>Toimingud</th>
</tr>

<?php
$result = $mysqli->query("SELECT * FROM Isikud");
while ($row = $result->fetch_assoc()) {
    echo "<tr>
            <td>{$row['Isiku_id']}</td>
            <td>{$row['Nimi']}</td>
            <td>{$row['sugu']}</td>
            <td>{$row['pikkus']}</td>
            <td>{$row['kaal']}</td>
            <td>{$row['synniaeg']}</td>
            <td>
              <a class='button' href='edit.php?id={$row['Isiku_id']}'>Muuda</a> |
              <a class='button' href='delete.php?id={$row['Isiku_id']}'>Kustuta</a>
            </td>
          </tr>";
}
?>
</table>
<a class='button' href='add.php'>Lisa uus isik</a>
</body>
</html>
