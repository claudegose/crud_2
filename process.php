<?php
session_start();

$mysqli = new mysqli("localhost", "root","root","crud") or die(mysqli_error());
$update = false;
$name= "";
$location = "";


if (isset($_POST['save']))
{
    $name = $_POST['name'];
    $location = $_POST['location'];

    $mysqli->query("INSERT INTO data (name, location) VALUES('$name', '$location') ") or
            die($mysqli->error);

    $_SESSION['message'] = "Record has been saved!";
    $_SESSION['msg_type'] = "Success";

    header("location: index.php");


}

if (isset($_GET["delete"]))
{
    $id = $_GET["delete"];
    $mysqli->query("DELETE FROM data WHERE id=$id") or die($mysqli->error());

    $_SESSION['message'] = "Record has been deleted!";
    $_SESSION['msg_type'] = "Danger";

    header("location: index.php");
}


if (isset($_GET["edit"])){
    $id = $_GET["edit"];
    $update = true;
    $result = $mysqli->query("SELECT * FROM data WHERE id=$id") or die($mysqli->error());
    if (count($result)==1){
        $row = $result->fetch_array();
        $name = $row["name"];
        $location = $row["location"];
    }
}