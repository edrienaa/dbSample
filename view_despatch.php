<?php
    include 'connection.php';

    $query = mysqli_query ($connection , "SELECT * FROM despatch");
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
        <th>DESPATCH NUMBER</th>
        <th>DESPATCH DATE</th>
        <th>DESPATCH AMOUNT</th>
        <th>ORDER NUMBER</th>
        <th>ORDER DATE/th>
        <th>ORDER AMOUNT</th>
        <th>AGENT CODE</th>
        </tr>
        </thead>

        <?php
       while ($data = mysqli_fetch_array($query)){ 

        ?>

    <tbody>
        <tr>
            <td>
                <?php echo $data['DES_NUM'];  ?> 
            </td>
            <td>
                <?php echo $data['DES_DATE'];  ?> 
            </td>
            <td>
                <?php echo $data['DES_AMOUNT'];  ?> 
            </td>
            <td>
                <?php echo $data['ORD_NUM'];  ?> 
            </td>
            <td>
                <?php echo $data['ORD_DATE'];  ?> 
            </td>
            <td>
                <?php echo $data['ORD_AMOUNT'];  ?> 
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