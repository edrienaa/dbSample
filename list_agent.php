<?php 

include 'connection.php';
session_start();

if(!$_SESSION ['username'])
{
     header("Location: login.php");
}

$query = mysqli_query($connection, "SELECT * FROM agents");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>

<button class="btn btn-danger">
<a href="pros_logout.php">Logout</a></button>

<form action="list_agent_search.php" method="post">
    <div class ="input-group mb-3 pt-5">
        <input type="text" class="form-control" name="search"
        placeholder="Masukkan Data Yang Ingin Dicari">
        <button class="btn btn-primary">Cari</button>
</div>
</form>
    <table class="table table-striped">
        <th>agent code</th>
        <th>agent name</th>
        <th>working area</th>
        <th>commission</th>
        <th>phone number</th>
        <th>country</th>
        <th>update</th>
        <th>delete</th>
        
        <?php
        while($data = mysqli_fetch_array($query)){
            ?>
            <tbody>
                <tr>
                    <td>
                        <?php echo $data['AGENT_CODE']; ?>
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
                   <td>
                        <a href="pros_update_agent.php?id=<?php echo $data['AGENT_CODE'];?>">
                        <button class="btn btn-success">update</button>
                   </td>
                   <td>
                        <a href="pros_delete_agent.php?id=<?php echo $data['AGENT_CODE'];?>">
                        <button class="btn btn-danger">delete</button>
                   </td>
                   <?php } ?>
               </tr>
          </tbody>
    </table>
</body>
</html>
<?php
while($data = mysqli_fetch_array($query)){
    echo $data['AGENT_CODE'];
}

?>