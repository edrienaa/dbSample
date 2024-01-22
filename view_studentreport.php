<?php
    include 'connection.php';

    $query = mysqli_query ($connection , "SELECT * FROM studentreport");
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
        <th>CLASS</th>
        <th>SECTION</th>
        <th>ROLL ID</th>
        <th>GRADE</th>
        <th>SEMESTER</th>
        <th>CLASS ATTENDED</th>
        </tr>
        </thead>

        <?php
       while ($data = mysqli_fetch_array($query)){ 
        ?>

    <tbody>
        <tr>
            <td>
                <?php echo $data['CLASS'];  ?> 
            </td>
            <td>
                <?php echo $data['SECTION'];  ?> 
            </td>
            <td>
                <?php echo $data['ROLLID'];  ?> 
            </td>
            <td>
                <?php echo $data['GRADE'];  ?> 
            </td>
            <td>
                <?php echo $data['SEMISTER'];  ?> 
            </td>
            <td>
                <?php echo $data['CLASS_ATTENDED'];  ?> 
            </td>
            <?php } ?> 
        </tr>
    </tbody>
        </table> 
</body>
</html>