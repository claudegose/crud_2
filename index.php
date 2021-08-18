<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>CRUD</title>
</head>
<body>

<h1 align="center" style="color:#2471A3  ;">Dream Location Planner</h1>
<?php require_once "process.php"; ?>

<?php
if (isset($_SESSION["message"])): ?>


<div class="alert alert-<?=$_SESSION["msg_type"]?> ">

    <?php
        echo $_SESSION["message"];
        unset($_SESSION["message"]);
    ?>

</div>

<?php endif ?>
<div class="container">
<?php
$mysqli = new mysqli("localhost", "root","root","crud") or die(mysqli_error($mysqli));
$result = $mysqli->query("SELECT * FROM data") or die($mysqli->error);
?>

<div class="row justify-content-center">
    <table class="table">
        <thead>
        <tr>
            <th>Name</th>
            <th>Location</th>
            <th colspan="2">Action</th>
        </tr>
        </thead>

        <?php
        while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?php echo $row["name"]; ?></td>
            <td><?php echo $row["location"]; ?></td>
            <td>
                <a href="index.php?edit=<?php echo $row["id"]; ?>"
                class="btn btn-info">Edit</a>
                <a href="process.php?delete=<?php echo $row["id"]; ?>"
                   class="btn btn-danger">Delete</a>


            </td>
        </tr>
        <?php endwhile; ?>
    </table>

</div>
<?php
    function pre_r($array){
        echo "<pre>";
        print_r($array);
        echo "</pre>";
    }
    ?>

<div class="col-lg-4 col-md-4 col-sm-4 container justify-content-center" id="divmain">
<form action="process.php" method="POST">
             <div class="form-group text-center" id="haha1">
                <label>Name</label>
                <input type="type" name="name" class="form-control"
                       value="<?php echo $name; ?>" placeholder="Enter your name">
             </div>
             <div class="form-group text-center" id="haha2">
                <label>Enter your Dream Location</label>
                <input type="type2" name="location" class="form-control"
                       value="<?php  echo $location; ?>" placeholder="Enter your Dream location">
            </div>
            <div class="form-group text-center " id="haha3">
                <?php
                if ($update == true):
                ?>
                 <button type="submit" class="btn btn-info" name="update">Update</button>
                endif;
                <?php else: ?>

                <button type="submit" class="btn btn-outline-dark " name="save">Save</button>
            <?php endif; ?>
            </div>
</form>
</div>
</div>




</body>
</html>