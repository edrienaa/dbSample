<?php
   include 'connection.php';

   if(isset($_POST["submit"])){
    $ORD_NUM = $_POST['ORD_NUM'];
    $ORD_AMOUNT = $_POST['ORD_AMOUNT'];
    $ADVANCE_AMOUNT = $_POST['ADVANCE_AMOUNT'];
    $ORD_DATE = $_POST['ORD_DATE'];
    $CUST_CODE = $_POST['CUST_CODE'];
    $AGENT_CODE = $_POST['AGENT_CODE'];
    $ORD_DESCRIPTION = $_POST['ORD_DESCRIPTION'];
   

   $query = mysqli_query($connection, "INSERT INTO daysorder
   (ORD_NUM, ORD_AMOUNT, ADVANCE_AMOUNT, ORD_DATE, CUST_CODE, AGENT_CODE, ORD_DESCRIPTION) VALUES ('$ORD_NUM','$ORD_AMOUNT','$ADVANCE_AMOUNT','$ORD_DATE','$CUST_CODE','$AGENT_CODE', '$ORD_DESCRIPTION')")
   or die(mysqli_error());
   
   echo "<script>alert('Rekod telah dimasukkan');
   window.location = 'view_daysorder.php'</script>";

   }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Agent</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
    <form action="" method="post">
        <div class="mb-3">
            <label class="form-label">Order Number</label>
            <input type="text" class="form-control" placeholder="Isikan Order Number" name="ORD_NUM">
        </div>
        <div class="mb-3">
            <label class="form-label">Order Amount</label>
            <input type="text" class="form-control" placeholder="Isikan Order Amount" name="ORD_AMOUNT">
        </div>
        <div class="mb-3">
            <label class="form-label">Advance Amount</label>
            <input type="text" class="form-control" placeholder="Isikan Advance Amount" name="ADVANCE_AMOUNT">
        </div>
        <div class="mb-3">
            <label class="form-label">Order Date</label>
            <input type="text" class="form-control" placeholder="Isikan Order Date" name="ORD_DATE">
        </div>
        <div class="mb-3">
            <label class="form-label">Customer Code</label>
            <input type="text" class="form-control" placeholder="Isikan Customer Code" name="CUST_CODE">
        </div>
        <div class="mb-3">
            <label class="form-label">Agent Code</label>
            <input type="text" class="form-control" placeholder="Isikan Agent Code" name="AGENT_CODE">
        </div>
        <div class="mb-3">
            <label class="form-label">Order Description</label>
            <input type="text" class="form-control" placeholder="Isikan Order Description" name="ORD_DESCRIPTION">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</body>
</html>