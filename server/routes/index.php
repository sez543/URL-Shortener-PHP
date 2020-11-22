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
            <?php
            if (empty($_POST["origin"]) || empty($_POST["target"]) || !check($_POST["origin"])){
        ?>
            <div class="window">
                <form action="" method="POST">
                    <input type="text" name="origin" id="origin" placeholder="Enter your origin here" />
                    <input type="text" name="target" id="target" placeholder="Enter your target slug here" />
                    <div class="button">
                        <input type="submit" value="Generate" />
                    </div>
                </form>
            </div>
            <?php
                }else{
                include "server/functions_and_utilities/add_url.php";
                if ($status == "success"){
            ?>
            <h2>
                Success! You can visit the website specified at
                <?php
                    echo 'http://'. $_SERVER['SERVER_NAME'].str_replace("index.php", "", $_SERVER['REQUEST_URI']).$slug;
                ?>
            </h2>
            <?php
                }else{
                    echo "<h1>Slug already taken. Please try with another one or visit /all for a list of all taken slugs</h1>";
                }
                }
                $conn->close();
            ?>
        </section>
    </div>
</body>

</html>