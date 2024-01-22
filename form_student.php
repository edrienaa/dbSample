<?php
    include 'connection.php';

    if(isset($_POST["submit"])){
        $NAME = $_POST ['NAME'];
        $TITLE = $_POST ['TITLE'];
        $CLASS = $_POST ['CLASS'];
        $SECTION = $_POST ['SECTION'];
        $ROLLID = $_POST ['ROLLID'];

        $query = mysqli_query ($connection, "INSERT INTO student(NAME, TITLE, CLASS, SECTION, ROLLID) 
        VALUES ('$NAME','$TITLE','$CLASS','$SECTION','$ROLLID' )") or die (query_error());

        echo "<script>alert('Rekod Telah Dimasukkan');
        window.location = 'view_student.php'</script>";
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Student</title>
    <link rel = "stylesheet" href = "bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class = "container">
    <form action = '' method = "post">
        <div class = "mb-3">
            <label class = "form-label"> NAME </label>
            <input type = "text" class = "form-control" placeholder = "isikan name" name = "NAME">
        </div>
        <div class = "mb-3">
            <label class = "form-label"> TITLE </label>
            <input type = "text" class = "form-control" placeholder = "isikan title" name = "TITLE">
        </div>
        <div class = "mb-3">
            <label class = "form-label"> CLASS </label>
            <input type = "text" class = "form-control" placeholder = "isikan class" name = "CLASS">
        </div>
        <div class = "mb-3">
            <label class = "form-label"> SECTION </label>
            <input type = "text" class = "form-control" placeholder = "isikan section" name = "SECTION">
        </div>
        <div class = "mb-3">
            <label class = "form-label"> ROLL ID </label>
            <input type = "text" class = "form-control" placeholder = "isikan roll id" name = "ROLLID">
        </div>
        <button type = "text" name = "submit" class = "btn btn-primary"> SUBMIT </submit>
</div>
</form>
</body>
</html>