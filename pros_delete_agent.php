<?php

    include 'connection.php';
    $id = $_GET ['id'];

    $query = mysqli_query ($connection ,"DELETE FROM agents WHERE AGENT_CODE = '$id' ");

    echo "<script>alert('Rekod Telah Dihapuskan');
    window.location = 'list_agent_view.php'</script>";
?>