<?php
  if(isset($_get['page'])) {
      $page = $_get['page'];

      switch($page) {
           case '';

           case 'home':
            file_exists('pages/home.php') ? include 'page/home.php' :include 'pages/404.php';
            break;
        default:
            include 'pages/404.php';
      }
    }else{
    include "pages/home.php";    
  }
?>