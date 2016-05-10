<?php
    /*include '../utils/auth.php';
    $is_loged = fp_is_loged(1);
    if(!$is_loged)
        header("location:../");
    else echo "loged";*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>الهيئة الخيرية الاسلامية للرعاية الاجتماعية</title>
<link href="../style/pageStyle.css" rel="stylesheet" type="text/css" />
</head>

<body>
<!-- Title -->
<div id="title">
<table width="90%" border="0" align="center">
  <tr>
    <td><img src="../images/logo.png" /></td>
    <td><h1>الهيئة الخيرية الاسلامية للرعاية الاجتماعية</h1></td>
    <td><img src="../images/logo.png" /></td>
  </tr>
</table>
</div>

<!-- menu -->
<div class="menu">
	<table align="center">
    <tr>
        <td>
            <div class="container" id="main" role="main" align="center" >
            <ul class="menu" >
                <li><a href="#">الأيتام</a>    
                    <ul class="submenu">
                        <li><a href="finalOrphan/showOrphans.php">عرض الكل  </a></li>
                        <li><a href="orphan/showOrphans.php"> بيانات غير معتمدة </a></li>
                        <li>
                            <form method="get" action="orphanInfo.php" >
                                <input dir="rtl" type="text" name="id" size="12"/> <input type="submit" size="5" value="بحث" id="o_serch"/>
                            </form>
                        </li>
                    </ul>
                </li>
                <li><a href="#">المستخدمين</a>    
                    <ul class="submenu">
                        <li><a href="users/showUsers.php">عرض الكل  </a></li>
                        <li><a href="users/addUser.php">اضافة مستخدم جديد</a></li>
                        
                    </ul>
                </li>
                <li><a href="#">الكفالات</a>    
                    <ul class="submenu">
                        <li><a href="kafala/showKafala.php">عرض الكل  </a></li>
                        <li><a href="kafala/addKafala.php">اضافة كفالة جديدة</a></li>
                        
                    </ul>
                </li>
                <li><a href="#">أخرى</a>    
                    <ul class="submenu">
                        <li><a href="sponsor/showSponsor.php">عرض جهات الكفالة  </a></li>
                        <li><a href="sponsor/addSponsor.php">اضافة جهة كفالة</a></li>
                        <li><a href="states/showState.php">عرض الولايات  </a></li>
                        <li><a href="states/addState.php">اضافة ولاية جديدة</a></li>
                        
                    </ul>
                </li>
                <li><a href="../utils/logout.php">تسجيل خروج</a></li>
            </ul>
            
            
            </div>
        </td>
    </tr>
</table>
</div>



<!-- main -->
<div class="main">
<br />
<h1 align="center" class="adress"> مدير النظام </h1>
<br />
<table width="60%" border="0" align="center">
  <tr>
    <td width="268" align="center" class="linkBT"><a href="users/addUser.php">اضافة مستخدم</a></td>
    <td width="100" align="center" ></td>
    <td width="219" align="center" class="linkBT"><a href="kafala/addKafala.php">اضافة كفالة</a></td>
    </tr>
      <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    </tr>
    <tr>
    <td width="268" align="center" class="linkBT"><a href="users/showUsers.php">عرض المستخدمين</a></td>
    <td width="100" align="center" ></td>
    <td width="219" align="center" class="linkBT"><a href="kafala/showKafala.php">عرض الكفالات</a></td>
    </tr>
  
    </table>
<div id="footer">
  <p>جميع الحقوق محفوظة 2016 &copy;</p>
</div>
</div>
</body>
</html>
