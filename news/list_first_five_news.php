<?php
/**
 * Created by PhpStorm.
 * User: Veselin
 * Date: 25.10.2018 г.
 * Time: 23:31
 */

include ("config.php");

$query = mysqli_query($con,
    "SELECT news.id, categories.name as c, news.name, news.text, news.time
    FROM news 
    INNER JOIN categories ON news.category_id=categories.id
    ORDER BY TIME desc
    LIMIT 5;");

while ($row = mysqli_fetch_assoc($query)) {
    ?>
    <div id="open" style="display:inline-block;border:1px solid #dadada;margin:5px;padding:5px; width: 90%; height: 200px; border-radius: 10px; background-color: #bce8f1">
        <a href="print_news_in_new_window.php?id=<?php echo $row['id']; ?>" target="_blank">Read more</a>
        <div id="1" style="font-size:20px; padding-bottom: 3px; font-weight: bold " ><?php echo $row['name']; ?></div>
        <div  style="font-size:16px;padding-bottom: 3px "><?php echo $row['text']; ?></div>
        <div  style="font-size:16px;padding-bottom: 3px">data: <?php echo $row['time']; ?></div>
        <div  style="font-size:14px;padding-bottom: 3px">category: <?php echo $row['c']; ?></div>
    </div>
    <?php
}
?>


