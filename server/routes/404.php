<!DOCTYPE html>
<html lang="en">

<?php 
    include "server/components/header.php";
?>

<body>
    <div id="container" class="darkmode">
        <div class="side_button">
            <div class="fill">
                <img src="images/light_moon.svg" alt="" class="light" />
                <img src="images/dark_moon.svg" alt="" class="dark" />
            </div>
        </div>
        <section>
            <h1>404 - Not Found</h1>
            <?php
                header( "refresh:5;url=/URL_sh/" );
            ?>
        </section>
    </div>
</body>

</html>