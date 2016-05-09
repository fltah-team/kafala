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
    <style >
        *{
            font-family:Droid Arabic Kufi;
        }
        .table{
        }
        .header{
            border: 1px #000 solid;
            background: #f1eded
        }
        .data{
            border: 1px #000 solid;
        }
    </style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>الهيئة الخيرية الاسلامية للرعاية الاجتماعية</title>
</head>

<body>
<div >
<!-- Title -->
<div id="title">
    <table width="100%" border="0" align="center">
  <tr>
    <td align="center"><img src="../../images/logo.png" /></td>
    <td align="center"><h3>الهيئة الخيرية الاسلامية للرعاية الاجتماعية</h3></td>
    <td align="center"  ><img src="../../images/logo.png" /></td>
  </tr>
</table>
</div>

<!-- menu -->


<!-- main -->

<h2 align="center" class="adress"> بيانات المستخدمين </h2>



<table class="table" width="100%" align="center" border="0">

    <tr align="center"   >
        <td class="header"  width="35%" > نوع المستخدم</td>
    <td class="header"  width="20%">اسم المستخدم</td>
    <td class="header"  width="40%">الاسم كامل</td>
    <td class="header"  width="5%">الرقم</td>
  </tr>
  <?php 
  	for($i = 0 ; $i < $ucount ; $i++){
		$user = $users[0];
  ?>
    <tr  align="center" onclick="window.location.href='user.php?id='+<?php echo $user->id?>" >
    <td class="data"><?php
  fp_get_user_type($user->type);
	  ?></td>
    <td class="data"><?php echo $user->username?></td>
    <td class="data"><?php echo $user->name?></td>
    <td class="data"><?php echo $i+1?></td>
    
  </tr>
  <?php } ?>
  </table>

<br />
<br />
<br />


</div>
</body>
</html>
<script type="text/javascript" >
    //window.print();
</script>