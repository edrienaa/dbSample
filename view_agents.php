<?php
    include 'connection.php';

    $query = mysqli_query ($connection , "SELECT * FROM agents");
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
        <th>AGENT CODE</th>
        <th>AGENT NAME</th>
        <th>WORKING AREA</th>
        <th>COMMISSION</th>
        <th>PHONE NUMBER</th>
        <th>COUNTRY</th>
        </tr>
        </thead>

        <?php
       while ($data = mysqli_fetch_array($query)){ 

        ?>

    <tbody>
        <tr>
            <td>
                <?php echo $data['AGENT_CODE'];  ?> 
            </td>
            <td>
                <?php echo $data['AGENT_NAME'];  ?> 
            </td>
            <td>
                <?php echo $data['WORKING_AREA'];  ?> 
            </td>
            <td>
                <?php echo $data['COMMISSION'];  ?> 
            </td>
            <td>
                <?php echo $data['PHONE_NO'];  ?> 
            </td>
            <td>
                <?php echo $data['COUNTRY'];  ?> 
            </td>
            <?php } ?> 
        </tr>
    </tbody>
        </table> 
</body>
</html>