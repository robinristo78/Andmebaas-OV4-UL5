<?php
include 'config.php';

if (isset($_POST['submit'])) {
    $nimi = $_POST['Nimi'];
    $sugu = $_POST['sugu'];
    $pikkus = $_POST['pikkus'];
    $kaal = $_POST['kaal'];
    $synniaeg = $_POST['synniaeg'];

    $sql = "INSERT INTO Isikud (Nimi, sugu, pikkus, kaal, synniaeg)
            VALUES ('$nimi', '$sugu', '$pikkus', '$kaal', '$synniaeg')";

    if ($mysqli->query($sql)) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . $mysqli->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Lisa isik</title>
</head>
<body>
<h1>Lisa uus isik</h1>
<form method="post">
  <table>
    <tr>
      <td>Nimi:</td>
      <td><input type="text" name="Nimi" required></td>
    </tr>
    <tr>
      <td>Sugu:</td>
      <td>
        <select name="sugu">
          <option value="M">M</option>
          <option value="N">N</option>
        </select>
      </td>
    </tr>
    <tr>
      <td>Pikkus:</td>
      <td><input type="number" name="pikkus" required></td>
    </tr>
    <tr>
      <td>Kaal:</td>
      <td><input type="number" name="kaal" required></td>
    </tr>
    <tr>
      <td>Sünniaeg:</td>
      <td><input type="date" name="synniaeg" required></td>
    </tr>
    <tr>
      <td colspan="2" style="text-align:center;">
        <input type="submit" name="submit" value="Lisa" class="button">
        <a class="button" href="index.php">Tagasi</a>
      </td>
    </tr>
  </table>
</form>
<a href="index.php">Tagasi</a>
</body>
</html>