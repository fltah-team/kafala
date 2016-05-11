
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>الهيئة الخيرية الاسلامية للرعاية الاجتماعية</title>
<link href="../../style/pageStyle.css" rel="stylesheet" type="text/css" />
</head>

<body>
<!-- Title -->
<div id="title">
<table width="90%" border="0" align="center">
  <tr>
    <td><img src="../../images/logo.png" /></td>
    <td><h1>الهيئة الخيرية الاسلامية للرعاية الاجتماعية</h1></td>
    <td><img src="../../images/logo.png" /></td>
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
                        <li><a href="../finalOrphan/showOrphans.php">عرض الكل  </a></li>
                        <li><a href="../orphan/showOrphans.php"> بيانات غير معتمدة </a></li>
                        <li>
                            <form method="get" action="../finalOrphan/orphanInfo.php" >
                                <input dir="rtl" type="text" name="id" size="12"/> <input type="submit" size="5" value="بحث" id="o_serch"/>
                            </form>
                        </li>
                    </ul>
                </li>
                <li><a href="#">المستخدمين</a>    
                    <ul class="submenu">
                        <li><a href="../users/showUsers.php">عرض الكل  </a></li>
                        <li><a href="../users/addUser.php">اضافة مستخدم جديد</a></li>
                        
                    </ul>
                </li>
                <li><a href="#">الكفالات</a>    
                    <ul class="submenu">
                        <li><a href="../kafala/showKafala.php">عرض الكل  </a></li>
                        <li><a href="../kafala/addKafala.php">اضافة كفالة جديدة</a></li>
                        
                    </ul>
                </li>
                <li><a href="#">أخرى</a>    
                    <ul class="submenu">
                        <li><a href="../sponsor/showSponsor.php">عرض جهات الكفالة  </a></li>
                        <li><a href="../sponsor/addSponsor.php">اضافة جهة كفالة</a></li>
                        <li><a href="../states/showState.php">عرض الولايات  </a></li>
                        <li><a href="../states/addState.php">اضافة ولاية جديدة</a></li>
                        
                    </ul>
                </li>
                <li><a href="../../utils/logout.php">تسجيل خروج</a></li>
            </ul>
            
            
            </div>
        </td>
    </tr>
</table>
</div>



<!-- main -->
<div class="main">

<div class="login">
    <h2 align="center" class="adress">بيانات كفالة </h2>
<br />
<?php
	include('../../utils/db.php');
	include('../../utils/kafalaAPI.php');
        include('../../utils/error_handler.php');
        include '../../utils/sponsorAPI.php';
	if(!isset($_GET['id']) || $_GET['id']=="" || (int)$_GET['id']==0){
            fp_err_show_record("الكفالة");
        }
	$id = $_GET['id']; 
	$sponsorship = fp_kafala_get_by_id($id);
	if(!$sponsorship)fp_err_show_record("الكفالة");
    $name = fp_sponsor_get_by_id($sponsorship->sponsor)->name;
	fp_db_close();

?>
    <table width="60%" border="0" align="center">
       
    <td align="right" width="44%"><input class="textFiels" name="total" type="text" id="total" value="<?php echo $name?>" size="10" maxlength="30" /></td>
    <td align="center" width="56%">جهة الكفالة</td>
    </tr>
      <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
      <td align="right"><input class="textFiels" name="total" type="text" id="total" value="<?php echo $sponsorship->amount?>" size="10" maxlength="30" /></td>
    <td align="center">المبلغ الكلي</td>
    </tr>
      <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="right"><input class="textFiels" name="saving" type="text" id="saving" value="<?php echo $sponsorship->saving?>" size="10" maxlength="30" /></td>
    <td align="center">الادخار</td>
    </tr>
      <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="right">
        <input class="textFiels" name="total" type="text" id="total" value="<?php echo "هنا التاريخ"?>" size="10" maxlength="30" />
    </td>
    <td align="center">الى</td>
  </tr>
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="right">
        <input class="textFiels" name="saving" type="text" id="saving" value="<?php fp_get_sponsored($sponsorship->sponsored)?>" size="10" maxlength="30" />
    </td>
    <td align="center">المكفولين</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
      <td align="right"><button name="add" id="bt"  type="button" onclick="ajax(<?php echo $sponsorship->id?>)"> حذف <img  align="right" src="../../images/style images/delete_icon.png" style="padding-left:5px" /></button></td>
    
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
    </table>
</div>
    <div style="margin: 0 auto; text-align: center ; width: 60%;" id="reponse">
    <span id="res_stattus"></span>
</div>
<script type="text/javascript">

	//var del = document.getElementById("delete");
	
	//ajax("div","deleteuser.php","?id=7",false);
	
	function ajax(ID)
{
    var ajax;
    document.getElementById('bt').style.display = 'none';
	//var d_node = document.getElementById(elementID);
	elementID = "div";
	filename = "deleteKafala.php";
	str = "?id="+ID;
	post = false ;
	conf = confirm("ستقوم بحذف الكفالة من المكفولين \n هل أنت متأكد");
	if(conf){
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
        if (ajax.readyState==1){ document.getElementById("reponse").innerHTML += '<img src="../../images/style images/blue_loader.gif" alt="جاري التحميل" width="60px" />';
        document.getElementById("res_stattus").innerText = "جاري معالجة الطلب";
        }
        
        if (ajax.readyState==4&&ajax.status==200)
        {
            //alert(ajax.responseText);
            document.getElementById("reponse").innerHTML = ajax.responseText;
			//document.getElementById(elementID).innerHTML=ajax.responseText;
        }
    }
    if (post==false)
    {
        ajax.open("GET",filename+str,true);
        ajax.send(null);
		
    }
    else
    {
        ajax.open("POST",filename,true);
        ajax.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        ajax.send(str);
    }
    return ajax;
	}
}
	
</script>
<div id="footer">
<p>جميع الحقوق محفوظة 2016 &copy;</p>
</div>
</div>
</body>
</html>
