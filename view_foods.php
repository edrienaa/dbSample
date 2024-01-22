<?php
    include 'connection.php';

    $query = mysqli_query ($connection , "SELECT * FROM foods");
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
        <th>ITEM ID</th>
        <th>ITEM NAME</th>
        <th>ITEM UNIT</th>
        <th>COMPANY ID</th>
        </thead>
        </tr>

        <?php
       while ($data = mysqli_fetch_array($query)){ 

        ?>

    <tbody>
        <tr>
            <td>
                <?php echo $data['ITEM_ID'];  ?> 
            </td>
            <td>
                <?php echo $data['ITEM_NAME'];  ?> 
            </td>
            <td>
                <?php echo $data['ITEM_UNIT'];  ?> 
            </td>
            <td>
                <?php echo $data['COMPANY_ID'];  ?> 
            </td>
            <?php } ?> 
        </tr>
    </tbody>
        </table> 
</body>
</html>