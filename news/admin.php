<?php
include("config.php");
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Admin</title>
    <link type="text/css" rel="stylesheet" href="./css/main_page_css.css"/>
</head>
<body>
<?php include ("submit_news_query.php")?>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Site for news</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="index1.php">Home</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>
</nav>
<!-- /Top Header -->

<div class="container">
    <form id="contact" action="" method="post">
        <input type="hidden" name="action" value="add_category">
        <h3>Admin Panel</h3>
        <h4>Please add category</h4>
        <fieldset>
            <input placeholder="category" type="text" name="category" tabindex="1" autofocus>
            <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit category</button>
        </fieldset>
    </form>
    <form id="contact" action="" method="post">
        <input type="hidden" name="action" value="add_news">
        <h4>Please add news</h4>
        <?php
        $query = mysqli_query($con, "SELECT `id`, `name` FROM `categories`");
        echo '<select name="category_id">';
        while ($row = mysqli_fetch_assoc($query)) {
            echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';
        }
        echo '</select>';
        ?>

        <fieldset>
            <input placeholder="name of news" type="text" name="news" tabindex="2">
        </fieldset>
        <fieldset>
            <input placeholder="text of news" type="text" name="text" tabindex="3">
        </fieldset>
        <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit news</button>
    </form>
</div>
</body>
</html>
