<?php

    include 'connection.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = mysqli_query($connection, "SELECT * FROM user WHERE username = '$username' AND password = '$password' ");

    if(mysqli_num_rows($query)==0)
    {
        echo "<script>alert('Username dan Password salah')
        window.location = 'login.php'</script>";
        
    }
    else
    {
        session_start();
        $row = mysqli_fetch_assoc($query);
        $_SESSION['username'] = $row['username'];

        if ($username = $row['username'] && $password = $row['password'])
        {
            header("Location: list_agent_view.php");
            
        }
        else
        {
        echo "<script>alert('Username dan Password salah');
        window.location = 'login.php'</script>";
        }
    }

?>