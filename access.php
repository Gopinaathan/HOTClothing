<?php
    include('config.php');

    if (isset($_POST["btnLogin"])){

        $email = $_POST["email"];
        $password = $_POST["password"];

        $sql = 
        $result = mysqli_query($conn,$sql);
        if(mysqli_query($result)>0)
    }
?>