<?php
    include 'connection.php';

    if(isset($_POST["submit"])){
        $AGENT_CODE = $_POST ['AGENT_CODE'];
        $AGENT_NAME = $_POST ['AGENT_NAME'];
        $WORKING_AREA = $_POST ['WORKING_AREA'];
        $COMMISSION = $_POST ['COMMISSION'];
        $PHONE_NUMBER = $_POST ['PHONE_NUMBER'];
        $COUNTRY = $_POST ['COUNTRY'];

        $query = mysqli_query ($connection, "INSERT INTO agents
        (AGENT_CODE, AGENT_NAME, WORKING_AREA, COMMISSION, PHONE_NO, COUNTRY) 
        VALUES ('$AGENT_CODE',' $AGENT_NAME','$WORKING_AREA','$COMMISSION','$PHONE_NUMBER','$COUNTRY')")
        or die (mysqli_error());
        
        echo "<script>alert('Rekod Telah Dimasukkan');
        window.location = 'view_agents.php'</script>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Agent</title>
    <link rel = "stylesheet" href = "bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
    <form action ="" method = "post">
        <div class = "mb-3">
            <label class="form-label"> Agent Code</label>
            <input type="text" class="form-control" placeholder="isikan code agent" name="AGENT_CODE">
        </div>
        <div class = "mb-3">
            <label class="form-label"> Agent Name</label>
            <input type="text" class="form-control" placeholder="isikan nama agent" name="AGENT_NAME">
        </div>
        <div class = "mb-3">
            <label class="form-label"> Working Area</label>
            <input type="text" class="form-control" placeholder="isikan working area agent" name="WORKING_AREA">
        </div>
        <div class = "mb-3">
            <label class="form-label"> Commission</label>
            <input type="text" class="form-control" placeholder="isikan commission agent" name="COMMISSION">
        </div>
        <div class = "mb-3">
            <label class="form-label"> Phone Number</label>
            <input type="text" class="form-control" placeholder="isikan phone number agent" name="PHONE_NUMBER">
        </div>
        <div class = "mb-3">
            <label class="form-label"> Country</label>
            <input type="text" class="form-control" placeholder="isikan country agent" name="COUNTRY">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form> 
    </div>
</body>
</html>