<?php
	include('../../utils/db.php');
	include('../../utils/usersAPI.php');
        $check_user = fp_users_get_by_username($_POST['un']);
        if($check_user) die("اسم المستخدم متكرر . اكتب اسم مستخدم اخر");
	$result = fp_users_add($_POST['name'],$_POST['un'],$_POST['pass'],$_POST['type']);
	fp_db_close();
	if(!$result)
		die ("fail");

	echo "تمت اضافة".$_POST['name'];
?>