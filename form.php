<?php
include 'lib/data-functions.php';
if($_POST)
{
    $name = $_POST['name'];
    $description = $_POST['description'];
    $status = $_POST['status'];
    $age = $_POST['age'];

    $kitten = [
        'name' => $name,
        'description' => $description,
        'status' => $status,
        'age' => $age
    ];

    insert_data($kitten);
    var_dump($_POST);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<h1>Kitty Shelter</h1>
    
<div class="form">    
    <form action="" method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" name="name" class="form-control" value="<?php $kitten['name']?>">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Description</label>
            <textarea name="description" cols="30" rows="10" class="form-control" value="<?php $kitten['description']?>"></textarea> 
        </div>
        <div class="form-check">
            <label class="form-check-label">
            <h4>Status</h4>
            <input type="checkbox" name="status" class="form-check-input" value="<?php $kitten['status']?>">
            Adopted
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
            <h4>Age</h4> 
            <select name="age" value="<?php $kitten['age']?>">
                <option value="0-6">0-6 months</option>
                <option value="6-12" selected>6-12 months</option>
                <option value="more">more than 1 year</option>
            </select>
            </label>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
</html>