<?php
    session_start();
    $doc = $_SESSION['documento'];
    $nivel = $_SESSION['nivel']; 

	if(empty($doc)){
		header('location: ../index.html');
	}
    else{
        if($nivel == 1){
            header(("location: main.php?doc=$doc"));
        }
        else{     
            header(("location: admin.php?doc=$doc"));
        }
        
    }