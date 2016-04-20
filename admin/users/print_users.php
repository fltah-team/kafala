<?php
	include('../../utils/db.php');
	include('../../utils/usersAPI.php');
	$users = fp_users_get();
	fp_db_close();
	if(!$users) die ("prolem");
	$ucount = @count($users);
	if($ucount == 0 ) die("NO users");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>الهيئة الخيرية الاسلامية للرعاية الاجتماعية</title>
</head>

<body>
<div style=" margin: 0 auto; width: 100%; border: solid 3px black; border-radius: 30px;">
<!-- Title -->
<div id="title">
<table width="90%" border="0" align="center">
  <tr>
    <td align="center"><img src="../../images/logo.png" /></td>
    <td align="center"><h2>الهيئة الخيرية الاسلامية للرعاية الاجتماعية</h2 ></td>
    <td align="center"  ><img src="../../images/logo.png" /></td>
  </tr>
</table>
</div>

<!-- menu -->


<!-- main -->

<h2 align="center" class="adress"> بيانات المستخدمين </h2>



<table width="90%" align="center" border="2">

    <tr align="center"  style="background: #e7e6e6;" >
        <td width="25%" > نوع المستخدم</td>
    <td width="20%">اسم المستخدم</td>
    <td width="45%">الاسم كامل</td>
    <td width="10%">الرقم</td>
  </tr>
  <?php 
  	for($i = 0 ; $i < $ucount ; $i++){
		$user = $users[$i];
  ?>
    <tr align="center" style="background: #f6f5f5   ;" onclick="window.location.href='user.php?id='+<?php echo $user->id?>" >
    <td><?php
  fp_get_user_type($user->type);
	  ?></td>
    <td><?php echo $user->username?></td>
    <td><?php echo $user->name?></td>
    <td><?php echo $user->id?></td>
    
  </tr>
  <?php } ?>
  </table>

<br />
<br />
<br />


</div>
</body>
</html>
