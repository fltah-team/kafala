<?php
	include('../../utils/db.php');
	include('../../utils/notifyAPI.php');
        include('../../utils/error_handler.php');

        $text = "ssss";
        $ufrom = "dd";
        $uto = "qq";
        $type =4 ;
                
	$result = fp_notify_add($text , $ufrom , $uto , $type );
	fp_db_close();
	if(!$result)
            die ("err");
        
	
?>