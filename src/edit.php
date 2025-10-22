<?php
include 'config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = $mysqli->query("SELECT * FROM Isikud WHERE Isiku_id=$id");
    $row = $result->fetch_assoc();
}

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $nimi = $_POST['Nimi'];
    $sugu = $_POST['sugu'];
    $pikkus = $_POST['pikkus'];
    $kaal = $_POST['kaal'];
    $synniaeg = $_POST['synniaeg'];

    $sql = "UPDATE Isikud 
            SET Nimi='$nimi', sugu='$sugu', pikkus='$pikkus', kaal='$kaal', synniaeg='$synniaeg'
            WHERE Isiku_id=$id";

    if ($mysqli->query($sql)) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error updating record: " . $mysqli->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Muuda isikut</title>
</head>
<body>
<h1>Muuda isiku andmeid</h1>
<form method="post">
  <table>
    <tr>
      <td>Nimi:</td>
      <td><input type="text" name="Nimi" value="<?php echo $row['Nimi']; ?>"></td>
    </tr>
    <tr>
      <td>Sugu:</td>
      <td>
        <select name="sugu">
          <option value="M" <?php if($row['sugu']=='M') echo 'selected'; ?>>M</option>
          <option value="N" <?php if($row['sugu']=='N') echo 'selected'; ?>>N</option>
        </select>
      </td>
    </tr>
    <tr>
      <td>Pikkus:</td>
      <td><input type="number" name="pikkus" value="<?php echo $row['pikkus']; ?>"></td>
    </tr>
    <tr>
      <td>Kaal:</td>
      <td><input type="number" name="kaal" value="<?php echo $row['kaal']; ?>"></td>
    </tr>
    <tr>
      <td>Sünniaeg:</td>
      <td><input type="date" name="synniaeg" value="<?php echo $row['synniaeg']; ?>"></td>
    </tr>
    <tr>
      <td colspan="2" style="text-align:center;">
        <input type="submit" name="update" value="Salvesta muutused" class="button">
        <a class="button" href="index.php">Tagasi</a>
      </td>
    </tr>
  </table>
</form>
<a href="index.php">Tagasi</a>
</body>
</html>
