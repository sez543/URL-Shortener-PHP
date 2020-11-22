<?php
    $status = "taken";
    $origin = mysqli_real_escape_string($conn, htmlspecialchars(strip_tags(trim($_POST["origin"]))));
    $slug = mysqli_real_escape_string($conn, htmlspecialchars(strip_tags(trim($_POST["target"]))));
    if (mysqli_num_rows($conn->query("SELECT `origin` FROM `main` WHERE `slug` = '$slug'"))==0)
    {
        $status = "success";
        $sql = "INSERT INTO `main` (`origin`, `slug`) VALUES ('$origin', '$slug')";
        if ($conn->query($sql)===FALSE){
            echo "Error";
        }
    }
?>