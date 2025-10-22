<?php
include 'config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $mysqli->query("DELETE FROM Isikud WHERE Isiku_id=$id");
}

header("Location: index.php");
exit();
?>
