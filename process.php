<?php
$mysqli = new mysqli("localhost", "root","root","crud") or die(mysqli_error());

if (isset($_POST['save']))
{
    $name = $_POST['name'];
    $location = $_POST['location'];

    $mysqli->query("INSERT INTO data (name, location) VALUES('$name', '$location') ") or
            die($mysqli->error);

}

if (isset($_GET["delete"])){
    $id = $_GET["delete"];
    $mysqli->query("DELETE FROM data WHERE id=$id") or die($mysqli->error);
}