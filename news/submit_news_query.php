<?php
/**
 * Created by PhpStorm.
 * User: Veselin
 * Date: 27.10.2018 г.
 * Time: 9:47
 */
if ($_POST) {

    // add new category
    if ($_POST['action']=='add_category') {
        mysqli_query($con, "INSERT INTO `categories` SET `name` = '" . $_POST['category'] . "'");
    }

    // create new news
    if ($_POST['action']=='add_news') {

        mysqli_query($con, "INSERT INTO `news`
       SET 
        `name` = '" . $_POST['news'] . "',
        `text` = '" . $_POST['text'] . "',
        `category_id` = '" . $_POST['category_id'] . "'");
      }
}
?>

