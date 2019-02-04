<?php
/**
 * Created by PhpStorm.
 * User: Veselin
 * Date: 26.10.2018 г.
 * Time: 9:48
 */
include("config.php");

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
   echo '<br>';
}

$get = ($_GET['id']);

$query = mysqli_query($con, "SELECT `id`, `name`, `text` FROM `news`
WHERE `id` = $get");

while ($row = mysqli_fetch_assoc($query)) {
    ?>
        <div id="open"
             style="border:1px solid #dadada;border-radius: 10px;padding:5px;  height: 300px; text-align: justify; background-color: #46b8da;">
            <div id="1"
                 style="font-size:20px; padding-bottom: 10px; font-weight: bold"><?php echo $row['name']; ?></div>
            <div style="font-size:18px;padding-bottom: 3px; "><?php echo $row['text']; ?></div>
        </div>
    <?php
}
?>
