<?php
    include 'connection.php';

    $query = mysqli_query ($connection , "SELECT * FROM customer");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dbsample</title>

    <link rel = "stylesheet" href = "bootstrap/css/bootstrap.min.css">
</head>
<body>
    <table class = "table table-striped">
        <thead>
        <tr>
        <th>CUSTOMER CODE</th>
        <th>CUSTOMER NAME</th>
        <th>CUSTOMER CITY</th>
        <th>WORKING AREA</th>
        <th>CUSTOMER COUNTRY</th>
        <th>GRADE</th>
        <th>OPENING AMT</th>
        <th>RECEIVE AMT</th>
        <th>PAYMENT AMT</th>
        <th>OUTSTANDING AMT</th>
        <th>PHONE NUMBER</th>
        <th>AGENT CODE</th>
        </tr>
        </thead>

        <?php
       while ($data = mysqli_fetch_array($query)){ 

        ?>

    <tbody>
        <tr>
            <td>
                <?php echo $data['CUST_CODE'];  ?> 
            </td>
            <td>
                <?php echo $data['CUST_NAME'];  ?> 
            </td>
            <td>
                <?php echo $data['CUST_CITY'];  ?> 
            </td>
            <td>
                <?php echo $data['WORKING_AREA'];  ?> 
            </td>
            <td>
                <?php echo $data['CUST_COUNTRY'];  ?> 
            </td>
            <td>
                <?php echo $data['GRADE'];  ?> 
            </td>
            <td>
                <?php echo $data['OPENING_AMT'];  ?> 
            </td>
            <td>
                <?php echo $data['RECEIVE_AMT'];  ?> 
            </td>
            <td>
                <?php echo $data['PAYMENT_AMT'];  ?> 
            </td>
            <td>
                <?php echo $data['OUTSTANDING_AMT'];  ?> 
            </td>
            <td>
                <?php echo $data['PHONE_NO'];  ?> 
            </td>
            <td>
                <?php echo $data['AGENT_CODE'];  ?> 
            </td>
            <?php } ?> 
        </tr>
    </tbody>
        </table> 
</body>
</html>