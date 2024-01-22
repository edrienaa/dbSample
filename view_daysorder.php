<?php
    include 'connection.php';

    $query = mysqli_query ($connection , "SELECT * FROM daysorder");
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
    <table class = "table table-dark table-striped">
        <thead>
        <tr>
        <th>ORDER NUMBER</th>
        <th>ORDER AMOUNT</th>
        <th>ADVANCE AMOUNT</th>
        <th>ORDER_DATE</th>
        <th>CUSTOMER CODE</th>
        <th>AGENT CODE</th>
        <th>ORDER DESCRIPTION</th>
        </thead>
        </tr>

        <?php
       while ($data = mysqli_fetch_array($query)){ 

        ?>

    <tbody>
        <tr>
            <td>
                <?php echo $data['ORD_NUM'];  ?> 
            </td>
            <td>
                <?php echo $data['ORD_AMOUNT'];  ?> 
            </td>
            <td>
                <?php echo $data['ADVANCE_AMOUNT'];  ?> 
            </td>
            <td>
                <?php echo $data['ORD_DATE'];  ?> 
            </td>
            <td>
                <?php echo $data['CUST_CODE'];  ?> 
            </td>
            <td>
                <?php echo $data['AGENT_CODE'];  ?> 
            </td>
            <td>
                <?php echo $data['ORD_DESCRIPTION'];  ?> 
            </td>
            <?php } ?> 
        </tr>
    </tbody>
        </table> 
</body>
</html>