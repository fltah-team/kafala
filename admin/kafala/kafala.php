
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
	<ul>
      
      <li><a href="../employee/orphan/cars.html">تسجيل خروج</a>
      <li><a href="../employee/orphan/customers.html">الدعاة</a>
      <li><a href="../employee/orphan/employees.html">الطلاب</a>
      <li><a href="../employee/orphan/reports.html">الأسر</a>
      <li><a href="../employee/orphan/main.html">الأيتام</a>
   </ul>
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
	if(!isset($_GET['id']) || $_GET['id']=="" || (int)$_GET['id']==0){
            fp_err_show_record("الكفالة");
        }
	$id = $_GET['id']; 
	$sponsorship = fp_kafala_get_by_id($id);
	fp_db_close();
	if(!$sponsorship)fp_err_show_record("الكفالة");
        

?>
    <table width="60%" border="0" align="center">
       
    <td align="right" width="44%"><input class="textFiels" name="total" type="text" id="total" value="<?php echo $sponsorship->sponsor?>" size="10" maxlength="30" /></td>
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
    <td align="right"><select class="textFiels" id="months">
  	  <?php
	  for($i=1 ; $i <= 12 ; $i++)
  	  echo "<option value='".$i."'>$i</option>'";
	  ?>
	  </select></td>
    <td align="center">عدد الشهور</td>
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
