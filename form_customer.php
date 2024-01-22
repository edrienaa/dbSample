<?php
    include 'connection.php';

    if (isset($_POST["submit"])){
        $CUST_CODE = $_POST['CUST_CODE'];
        $CUST_NAME = $_POST['CUST_NAME'];
        $CUST_CITY = $_POST['CUST_CITY'];
        $WORKING_AREA = $_POST['WORKING_AREA'];
        $CUST_COUNTRY = $_POST['CUST_COUNTRY'];
        $GRADE = $_POST['GRADE'];
        $OPENING_AMT = $_POST['OPENING_AMT'];
        $RECEIVE_AMT = $_POST['RECEIVE_AMT'];
        $PAYMENT_AMT = $_POST['PAYMENT_AMT'];
        $OUTSTANDING_AMT = $_POST['OUTSTANDING_AMT'];
        $PHONE_NO = $_POST['PHONE_NO'];
        $AGENT_CODE = $_POST['AGENT_CODE'];

        $query = mysql_query ($connection, "INSERT INTO customer
        (CUST_CODE, CUST_NAME, CUST_CITY, WORKING_AREA, CUST_COUNTRY, GRADE, OPENING_AMT, RECEIVE_AMT, PAYMENT_AMT, OUTSTANDING_AMT, PHONE_NO, AGENT_CODE) 
        VALUES ('$CUST_CODE','$CUST_NAME','$CUST_CITY','$WORKING_AREA','$CUST_COUNTRY','$GRADE','$OPENING_AMT','$RECEIVE_AMT','$PAYMENT_AMT','$OUTSTANDING_AMT','$PHONE_NO','$AGENT_CODE')") 
        or die (mysqli_error());

        echo "<script>alert('Rekod Telah Dimasukkan');
        window.location = 'view_customer.php'</script>";
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Customer</title>

    <link rel = "stylesheet" href = "bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class = "container">
    <form action = '' method = "post">
        <div class = "mb-3">
            <lable class = "form-label"> Customer Code</label>
            <input type = "text" class = "form-control" name = "CUST_CODE">
        </div>
        <div class = "mb-3">
            <lable class = "form-label"> Customer Name</label>
            <input type = "text" class = "form-control" name = "CUST_NAME">
        </div>
        <div class = "mb-3">
            <lable class = "form-label"> Customer City</label>
            <input type = "text" class = "form-control" name = "CUST_CITY">
        </div>
        <div class = "mb-3">
            <lable class = "form-label"> Working Area </label>
            <input type = "text" class = "form-control" name = "WORKING_AREA">
        </div>
        <div class = "mb-3">
            <lable class = "form-label"> Customer Country</label>
            <input type = "text" class = "form-control" name = "CUST_COUNTRY">
        </div>
        <div class = "mb-3">
            <lable class = "form-label"> Grade</label>
            <input type = "text" class = "form-control" name = "GRADE">
        </div>
        <div class = "mb-3">
            <lable class = "form-label"> Opening AMT</label>
            <input type = "text" class = "form-control" name = "OPENING_AMT">
        </div>
        <div class = "mb-3">
            <lable class = "form-label">Receive AMT</label>
            <input type = "text" class = "form-control" name = "RECEIVE_AMT">
        </div>
        <div class = "mb-3">
            <lable class = "form-label"> Payment AMT </label>
            <input type = "text" class = "form-control" name = "PAYMENT_AMT">
        </div>
        <div class = "mb-3">
            <lable class = "form-label">Outstanding AMT</label>
            <input type = "text" class = "form-control" name = "OUTSTANDING_AMT">
        </div>
        <div class = "mb-3">
            <lable class = "form-label">Phone Numbr</label>
            <input type = "text" class = "form-control" name = "PHONE_NO">
        </div>
        <div class = "mb-3">
            <lable class = "form-label"> Agent Code</label>
            <input type = "text" class = "form-control" name = "AGENT_CODE">
        </div>
        <button type = "submit" name = "submit" class = "btn btn-primary">Submit</button>
    </form>
    </div>
</body>
</html>