<?php
    include 'connection.php';


    $carian = $_POST ['search'];
    

    $query = mysqli_query ($connection, "SELECT * from agents where AGENT_NAME  LIKE '%$carian%' ");
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

<!--Search-->
    <form action="list_agent_search.php" method="post">
        <div class="input-group mb-3 pt-5">
            <input type="text" class="form-control" name="search" placeholder="Masukkan data yang ingin dicari">
            <button class="btn btn-primary">Cari</button>
        </div>
    </form>

<!-- Table Data -->
    <table class = "table table-striped">
        <thead>
        <tr>
        <th>AGENT CODE</th>
        <th>AGENT NAME</th>
        <th>WORKING AREA</th>
        <th>COMMISSION</th>
        <th>PHONE NUMBER</th>
        <th>COUNTRY</th>
        <th>UPDATE</th>
        <th>DELETE</th>
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
            <td><a href = "pros_update_agent.php?id=<?php echo $data['AGENT_CODE'];?>"><button class="btn btn-success">Update</button></a>
            </td>
            <td><a href = "pros_delete_agent.php?id=<?php echo $data['AGENT_CODE'];?>"><button class="btn btn-danger">Delete</button></a>
            </td>
            <?php } ?> 
        </tr>
    </tbody>
        </table> 
</body>
</html>