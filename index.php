<?php
    session_start();
     if(isset($_SESSION['un']) || isset($_SESSION['u_type']) || isset($_SESSION['name'])){
        switch ($_SESSION['u_type']){
                case 1 : header("location:admin/admin.php");
                    break;
                case 2 : header("location:employee/employee.php");
                    break;
                case 3 : header("location:admin/admin.php");
                    break;
                case 4 : header("location:admin/admin.php");
                    break;
                default : header("location:index.php?m=".$m);
            }
    }
    
    
?>
﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>الهيئة الخيرية الاسلامية للرعاية الاجتماعية</title>
<link href="style/pageStyle.css" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<!-- Title pihasdlfb -->
<table align="center" width="80%" >
    <tr >
        <td>
            <img width="100%"  src="images/banner.JPG" style="border: 2px #990033 solid; border-radius: 10px ;" />            
        </td>
    </tr>
    </table>
<?php
    if(isset($_GET['m'])){
        $m =  $_GET['m'];
        if($m != ""){
        echo '
          <div style="text-align:center;color:#fff;">
                <div class="alert-box error"><span>خطأ: </span>'.$m.'
                </div>
                 </div>  
        ';
    }
    }
?>
<div class="login">
		<div class="login-screen">
			<div class="app-title">
                            <h1>تسجيل دخول</h1>
			</div>

			<div class="login-form">
                            <form action="utils/login.php" method="post" >
				<div class="control-group">
				<input type="text" class="login-field" value="" placeholder="اسم المستخدم" name="login-name" />
				<label class="login-field-icon fui-user" for="login-name"></label>
				</div>

				<div class="control-group">
				<input type="password" class="login-field" value="" placeholder="كلمة المرور" name="login-pass" />
				<label class="login-field-icon fui-lock" for="login-pass"></label>
				</div>

                            <!--<a class="btn btn-primary btn-large btn-block" onclick="get_str()">تسجيل دخول</a>-->
                            <input type="submit" value="تسجيل دخول" class="btn btn-primary btn-large btn-block" id="login"/>
                            <br />
                            </form>
			</div>
		</div>

	</div>

</body>
</html>
