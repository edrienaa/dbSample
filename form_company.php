<?php
    include 'connection.php';

    if(isset($_POST["submit"])){
        $COMPANY_ID = $_POST ['COMPANY_ID'];
        $COMPANY_NAME = $_POST ['COMPANY_NAME'];
        $COMPANY_CITY = $_POST ['COMPANY_CITY'];

        $query = mysqli_query ($connection, "INSERT INTO company 
        (COMPANY_ID, COMPANY_NAME, COMPANY_CITY) 
        VALUES ('$COMPANY_ID','$COMPANY_NAME','$COMPANY_CITY')") 
        or die (mysqli_error());

        echo "<script>alert('Rekod Telah Dimasukkan');
        window.location = 'view_company.php'</script>";
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Company</title>
    <link rel = "stylesheet" href = "bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class = "container">
    <form action = '' method = "post">
        <div class = "mb-3">
            <label class = "form-label"> Company ID</label>
            <input type = "text" class ="form-control" placeholder = "isikan company id" name = "COMPANY_ID">
        </div>
        <div class = "mb-3">
            <label class = "form-label"> Company Name</label>
            <input type = "text" class ="form-control" placeholder = "isikan company name" name = "COMPANY_NAME">
        </div>
        <div class = "mb-3">
            <label class = "form-label"> Company City</label>
            <input type = "text" class ="form-control" placeholder = "isikan company id" name = "COMPANY_CITY">
        </div>
        <button type = "submit" name = "submit" class = "btn btn-primary">Submit</button>
    </form>
    </div>
</body>
</html>