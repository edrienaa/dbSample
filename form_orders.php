<?php
   include 'connection.php';

   if(isset($_POST["submit"])){
    $ORD_NUM = $_POST['ORD_NUM'];
    $ORD_AMOUNT = $_POST['ORD_AMOUNT'];
    $ADVANCE_AMOUNT = $_POST['ADVANCE_AMOUNT'];
    $ORD_DATE = $_POST['ORD_DATE'];
   
   $query = mysqli_query($connection, "INSERT INTO daysorder
   (ORD_NUM, ORD_AMOUNT, ADVANCE_AMOUNT, ORD_DATE) VALUES ('$ORD_NUM','$ORD_AMOUNT','$ADVANCE_AMOUNT','$ORD_DATE')")
   or die(mysqli_error());
   
   echo "<script>alert('Rekod telah dimasukkan');
   window.location = 'view_orders.php'</script>";

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
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</body>
</html>