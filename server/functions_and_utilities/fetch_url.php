<?php
    $slugs = explode("/",$_SERVER['REQUEST_URI']);
    $sl = mysqli_real_escape_string($conn, htmlspecialchars(strip_tags(trim($slugs[2]))));
    $query = $conn->query("SELECT * FROM `main` WHERE `slug` = '$sl'");
    
    if (mysqli_num_rows($query)>0){
        header("Location: ".mysqli_fetch_assoc($query)["origin"]);
        die();
    }
?>