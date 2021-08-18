<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>CRUD</title>
</head>
<body>
<h1 align="center" style="color:#2471A3  ;">Dream Location Planner</h1>
<?php require_once "process.php"; ?>
<?php $mysqli = new mysqli->query("SELECT * FROM data") or die($mysqli->error)
function pre_r($result)
{
    echo "<pre>";
    print_r($array);
    echo "</pre>";

}
?>
<div class="col-lg-4 col-md-4 col-sm-4 container justify-content-center">
<form action="process.php" method="POST">
             <div class="form-group text-center ">
                <label>Name</label>
                <input type="type" name="name" class="form-control" placeholder="Enter your name">
             </div>
             <div class="form-group text-center ">
                <label>Enter your Dream Location</label>
                <input type="type2" name="location" class="form-control" placeholder="Enter your Dream location">
            </div>
            <div class="form-group text-center ">
                <button type="submit" class="btn btn-outline-dark " name="save">Save</button>
            </div>
</form>
</div>




</body>
</html>