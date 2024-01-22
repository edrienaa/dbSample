<?php
    include 'connection.php';

    $query = mysqli_query ($connection , "SELECT * FROM listofitem");
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
        <th>ITEM CODE</th>
        <th>ITEM NAME</th>
        <th>BATCH CODE</th>
        <th>CONAME</th>
        </tr>
        </thead>

        <?php
       while ($data = mysqli_fetch_array($query)){ 
        ?>

    <tbody>
        <tr>
            <td>
                <?php echo $data['ITEMCODE'];  ?> 
            </td>
            <td>
                <?php echo $data['ITEMNAME'];  ?> 
            </td>
            <td>
                <?php echo $data['BATCHCODE'];  ?> 
            </td>
            <td>
                <?php echo $data['CONAME'];  ?> 
            </td>
            <?php } ?> 
        </tr>
    </tbody>
        </table> 
</body>
</html>