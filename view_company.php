<?php
    include 'connection.php';

    $query = mysqli_query ($connection , "SELECT * FROM company");
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
        <th>COMPANY ID</th>
        <th>COMPANY NAME</th>
        <th>COMPANY CITY</th>
        </tr>
        </thead>

        <?php
       while ($data = mysqli_fetch_array($query)){ 

        ?>

    <tbody>
        <tr>
            <td>
                <?php echo $data['COMPANY_ID'];  ?> 
            </td>
            <td>
                <?php echo $data['COMPANY_NAME'];  ?> 
            </td>
            <td>
                <?php echo $data['COMPANY_CITY'];  ?> 
            </td>
            <?php } ?> 
        </tr>
    </tbody>
        </table> 
</body>
</html>