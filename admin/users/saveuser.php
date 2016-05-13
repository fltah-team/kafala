<?php
	include('../../utils/db.php');
	include('../../utils/usersAPI.php');
        include '../../utils/error_handler.php';
        if(!isset($_POST['name']) || !isset($_POST['un']) || !isset($_POST['pass']) || !isset($_POST['type']))
            fp_err_add_fail("المستخدم");
        $check_user = fp_users_get_by_username($_POST['un']);
        if($check_user) fp_err_add_fail("اسم المستخدم متكرر . اكتب اسم مستخدم اخر");
	$result = fp_users_add($_POST['name'],$_POST['un'],$_POST['pass'],$_POST['type']);
	fp_db_close();
	if(!$result)
		fp_err_add_fail("المستخدم");
        else
            fp_err_add_succes("المستخدم");
?>