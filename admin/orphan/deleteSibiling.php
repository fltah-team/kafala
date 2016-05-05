<?php

	
	include('../../utils/db.php');
	include('../../utils/orphanAPI.php');
	include('../../utils/siblingAPI.php');
        if(!isset($_GET['id']) || $_GET['id']== 0 || $_GET['id'] == '')
            die ("تعذر اضافة الفرد");
        $id = $_GET['id'];
	$result = fp_sibiling_delete($id) ;
	fp_db_close();
	if(!$result)
		die ("تعذر حذف الفرد");
        else
	echo "تم حذف الفرد بنجاح";
	
	?>