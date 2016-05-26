<?php
    
session_start();
     if(!isset($_SESSION['un']) || !isset($_SESSION['u_type']) || !isset($_SESSION['name']))
         header("location:../");
     if(isset($_SESSION['u_type'])){
         if($_SESSION['u_type'] != 1)
             header("location:../");
     }
    include '../utils/db.php';
    include '../utils/error_handler.php';
    include '../utils/notifyAPI.php';
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
<h2 align="center" class="adress">الإشعارات</h2>
<br />
<table align="center" border="0" width="60%" dir="rtl" >
    <?php
    $notifys = fp_notify_get(" WHERE `uto` = 'user'");//.$_SESSION['name']."'");
    fp_db_close();
    if($notifys == -1 || $notifys == 0)
        fp_err_show_records ("اشعارات");
    $ncount = @count($notifys);
    for($i = 0 ; $i<$ncount ; $i++){
        $notify = $notifys[$i];
?>
    <tr >
        <td><img src="../images/style images/delete_icon.png" width="20px" align="middle" onclick="delete_notify_ajax(<?php echo $notify->id?>)" /></td>   
        <td  width="95%">
            <?php 
                fp_notify($notify->text, $notify->type);
            ?>
        </td>
    </tr>
    <?php } ?>
</table>
<script type="text/javascript">
function delete_notify_ajax(id)
{	
        var ajax;
	var data ;
	filename = "notify/deleteNotify.php?id="+id;
	post = false ;
    if (window.XMLHttpRequest)
    {
        ajax=new XMLHttpRequest();//IE7+, Firefox, Chrome, Opera, Safari
    } 
    else if (ActiveXObject("Microsoft.XMLHTTP"))
    {
        ajax=new ActiveXObject("Microsoft.XMLHTTP");//IE6/5
    }
    else if (ActiveXObject("Msxml2.XMLHTTP"))
    {
        ajax=new ActiveXObject("Msxml2.XMLHTTP");//other
    }
    else
    {
        alert("Error: Your browser does not support AJAX.");
        return false;
    }
    ajax.onreadystatechange=function()
    {
        if (ajax.readyState==4&&ajax.status==200)
        {
            window.location.reload();
            
            //window.location.href = "orphanInfo.php?id="+<?php //echo $id?>
			//document.getElementById(elementID).innerHTML=ajax.responseText;
        }
    }
    if (post==false)
    {
        ajax.open("GET",filename+"?id="+id,true);
        s_str = '';
        ajax.send(null);
		
    }
    else 
    {
        ajax.open("POST",filename,true);
        ajax.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        ajax.send(s_str);
        s_str = '';
    }
    return ajax;
	
}
</script>
<div id="footer">
  <p>جميع الحقوق محفوظة 2016 &copy;</p>
</div>
</div>
</body>
</html>
