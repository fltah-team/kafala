<?php
	include('../auth.php');
    include('../../utils/db.php');
	include('../../utils/familyAPI.php');        
    $id = $_GET['id'];
	$result = fp_member_delete($id) ;
	fp_db_close();
        
	if(!$result)
            echo(" لم تتم عملية الحذف ");
        else 
            echo("تمت عملية الحذف  بنجاح");
	?>