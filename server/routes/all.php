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
        <section style="flex-direction: column; padding: 100px 0 50px 0;">
            <?php
                $vals = $conn->query("SELECT * FROM `main`");
                if (mysqli_num_rows($vals) > 0) {
                    while ($row = mysqli_fetch_assoc($vals)) {
                        echo "<p>" . "<a href='".$row["origin"]."'>".$row["origin"]."</a> - <b>Slug:</b> " .$row["slug"] . "</p>";
                    }
                }else{
                    echo "<h2>No entries currently present in the database</h2>";
                }
            ?>
        </section>
    </div>
</body>

</html>