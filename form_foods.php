<?php
    include 'connection.php';

    if(isset($_POST["submit"])){
        $ITEM_ID = $_POST ['ITEM_ID'];
        $ITEM_NAME = $_POST ['ITEM_NAME'];
        $ITEM_UNIT = $_POST ['ITEM_UNIT'];
        $COMPANY_ID = $_POST ['COMPANY_ID'];

        $query = mysqli_query ($connection, "INSERT INTO foods (ITEM_ID, ITEM_NAME, ITEM_UNIT, COMPANY_ID) 
        VALUES ('$ITEM_ID','$ITEM_NAME','$ITEM_UNIT' ,'$COMPANY_ID ')") 
        or die (mysqli_error());

        echo "<script>alert('Rekod Telah Dimasukkan');
        window.location = 'view_foods.php'</script>";
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Foods</title>
    <link rel = "stylesheet" href = "bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class = "container">
    <form action = '' method = "post">
        <div class = "mb-3">
            <label class = "form-label"> Item ID</label>
            <input type = "text" class ="form-control" name = "ITEM_ID">
        </div>
        <div class = "mb-3">
            <label class = "form-label"> Item Name</label>
            <input type = "text" class ="form-control" name = "ITEM_NAME">
        </div>
        <div class = "mb-3">
            <label class = "form-label"> Item Unit</label>
            <input type = "text" class ="form-control" name = "ITEM_UNIT">
        </div>
        <div class = "mb-3">
            <label class = "form-label"> Company ID</label>
            <input type = "text" class ="form-control" name = "COMPANY_ID">
        </div>
        <button type = "submit" name = "submit" class = "btn btn-primary">Submit</button>
    </form>
    </div>
</body>
</html>