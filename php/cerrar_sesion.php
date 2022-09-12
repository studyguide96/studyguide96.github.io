<?php

    session_start();

    $doc = $_SESSION['documento'];
    if(empty($doc)){
        header('location: ../index.html');
    }
   
    session_destroy();
    header("location: ../index.html");
  
  
    