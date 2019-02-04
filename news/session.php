<?php
/**
 * Created by PhpStorm.
 * User: Veselin
 * Date: 25.10.2018 г.
 * Time: 0:34
 */

   include('config.php');
   session_start();

   $user_check = $_SESSION['login_user'];

   $ses_sql = mysqli_query($db,"select username from project.users where username = '$user_check' ");

   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

   $login_session = $row['username'];

   if(!isset($_SESSION['login_user'])){
       header("location:login.php");
   }