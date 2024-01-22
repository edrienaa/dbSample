<?php
    include 'connection.php';

    if(isset($_POST["submit"])){
        $ITEMCODE = $_POST ['ITEMCODE'];
        $ITEMNAME = $_POST ['ITEMNAME'];
        $BATCHCODE = $_POST ['BATCHCODE'];
        $CONAME = $_POST ['CONAME'];

        $query = mysqli_query ($connection, "INSERT INTO listofitem(ITEMCODE, ITEMNAME, BATCHCODE, CONAME) 
        VALUES ('$ITEMCODE ','$ITEMNAME','$BATCHCODE','$CONAME')") or die (mysqli_error());

        echo "<script>alert('Rekod Telah Dimasukkan');
        window.location = 'view_listofitem.php'</script>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form List Of Item</title>
    <link rel = "stylesheet" href = "bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class = "container">
    <form action = '' method = "post">
        <div class = "mb-3">
            <label class = "form-label"> Item Code </label>
            <input type = "text" class = "form-control" placeholder = "Isikan Item Code" name = "ITEMCODE">
        </div>
        <div class = "mb-3">
            <label class = "form-label"> Item Name </label>
            <input type = "text" class = "form-control" placeholder = "Isikan Item Name" name = "ITEMNAME">
        </div>
        <div class = "mb-3">
            <label class = "form-label"> Batch Code </label>
            <input type = "text" class = "form-control" placeholder = "Isikan Batch Code" name = "BATCHCODE">
        </div>
        <div class = "mb-3">
            <label class = "form-label"> Coname </label>
            <input type = "text" class = "form-control" placeholder = "Isikan Coname" name = "CONAME">
        </div>
        <button type = "submit" name = "submit" class = "btn btn-primary"> SUBMIT </button
</div>
</form>
</body>
</html>