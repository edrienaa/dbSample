<?php
    include 'connection.php';

    $query = mysqli_query ($connection , "SELECT * FROM student");
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
        <th>NAME</th>
        <th>TITLE</th>
        <th>CLASS</th>
        <th>SECTION</th>
        <th>ROLL ID</th>
        </tr>
        </thead>

        <?php
       while ($data = mysqli_fetch_array($query)){ 
        ?>

    <tbody>
        <tr>
            <td>
                <?php echo $data['NAME'];  ?> 
            </td>
            <td>
                <?php echo $data['TITLE'];  ?> 
            </td>
            <td>
                <?php echo $data['CLASS'];  ?> 
            </td>
            <td>
                <?php echo $data['SECTION'];  ?> 
            </td>
            <td>
                <?php echo $data['ROLLID'];  ?> 
            </td>
            <?php } ?> 
        </tr>
    </tbody>
        </table> 
</body>
</html>