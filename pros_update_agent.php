<?php

    include 'connection.php';

    $id = $_GET ['id'];

    $query = mysqli_query ($connection, "SELECT * FROM agents WHERE AGENT_CODE = '$id'");

    if(isset ($_POST['submit'])){

        $up_agent_name = $_POST ['up_agent_name'];
        $up_working_area = $_POST ['up_working_area'];
        $up_commission = $_POST ['up_commission'];
        $up_phone_no = $_POST ['up_phone_no'];
        $up_country = $_POST ['up_country'];

        $query_update = mysqli_query ($connection, "UPDATE agents 
        SET AGENT_NAME='$up_agent_name', WORKING_AREA=' $up_working_area', COMMISSION='$up_commission', PHONE_NO='$up_phone_no', COUNTRY='$up_country' 
        WHERE AGENT_CODE = '$id'");

        echo "<script>alert('Rekod Telah Dikemaskini');
        window.location = 'list_agent.php'</script>";

    }
?>

<!--form-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel = "stylesheet" href = "bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class =  "container">
    <form action = "" method = "post">
        <?php
            while($data = mysqli_fetch_array($query)){
        ?>
        <div class = "mb-3">
            <label class="form-label"> Agent Name</label>
            <input type="text" class="form-control" value = "<?php echo $data ['AGENT_NAME']?>" name="up_agent_name">
        </div>
        <div class = "mb-3">
            <label class="form-label"> Working Area</label>
            <input type="text" class="form-control" value = "<?php echo $data ['WORKING_AREA']?>" name="up_working_area">
        </div>
        <div class = "mb-3">
            <label class="form-label"> Commission</label>
            <input type="text" class="form-control" value = "<?php echo $data ['COMMISSION']?>" name="up_commission">
        </div>
        <div class = "mb-3">
            <label class="form-label"> Phone No</label>
            <input type="text" class="form-control" value = "<?php echo $data ['PHONE_NO']?>" name="up_phone_no">
        </div>
        <div class = "mb-3">
            <label class="form-label"> Country</label>
            <input type="text" class="form-control" value = "<?php echo $data ['COUNTRY']?>" name="up_country">
        </div>
        <button type = "submit" name = "submit"class="btn btn-primary">Update</button>
        <?php } ?>
    </form>
    </div>
</body>
</html>