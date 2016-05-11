<?php
	include('../../utils/db.php');
	include('../../utils/usersAPI.php');
    include('../../utils/error_handler.php');
    
	$id = (int)$_POST['id'];
    $name = $_POST['name'];
    $pass = $_POST['pass1'];
    echo $name.$pass;
	$result = fp_users_update($id,null,null,$pass);
	fp_db_close();
	if(!$result)
		fp_err_update_fail("المستخدم");
    else
        fp_err_update_succes("المستخدم");
?>