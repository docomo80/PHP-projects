<?php
/**
 * Created by PhpStorm.
 * User: Veselin
 * Date: 24.10.2018 г.
 * Time: 23:19
 */

   session_start();

   if(session_destroy()) {
       header("Location: login.php");
   }
