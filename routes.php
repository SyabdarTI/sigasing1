<?php
  if(isset($_get['page'])) {
      $page = $_get['page'];

      switch($page) {
           case '';

           case 'home':
            file_exists('pages/home.php') ? include 'page/home.php' :include 'pages/404.php';
            break;
           case 'lokasiread':
             file_exists('pages/admin/lokasiread.php') ? include 'pages/admin/lokasiread.php' : include 'pages/404.php';
             break;

             case 'lokasicread':
             file_exists('pages/admin/lokasicread.php') ? include 'pages/admin/lokasiread.php' : include 'pages/404.php';
             break;
        default:
            include 'pages/404.php';
      }
    }else{
    include "pages/home.php";    
  }
?>