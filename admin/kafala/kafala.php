
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>الهيئة الخيرية الاسلامية للرعاية الاجتماعية</title>
<link href="../../style/pageStyle.css" rel="stylesheet" type="text/css" />
</head>

<body>
<!-- Title -->
<table align="center" width="80%" >
    <tr >
        <td>
            <img width="100%"  src="../../images/banner.JPG" style="margin: 5px;border: 2px #990033 solid; border-radius: 10px ;" />            
        </td>
    </tr>
</table>

<!-- menu -->
<div class="menu">
	<?php include '../menu.php';?>
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
        <input class="textFiels" name="total" type="text" id="total" value="<?php echo $sponsorship->date?>" size="10" maxlength="30" />
    </td>
    <td align="center">من</td>
  </tr>
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
    <tr>
    <td align="right">
        <input class="textFiels" name="total" type="text" id="total" value="<?php echo $sponsorship->last_date?>" size="10" maxlength="30" />
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
      <td align="right"><button name="add" id="bt" class="del_bt"  type="button" onclick="ajax(<?php echo $sponsorship->id?>)"> حذف <img  align="right" src="../../images/style images/delete_icon.png" style="padding-left:5px" /></button></td>
      <td align="center"><button name="add" class="info_bt" style="padding: 0 10px;" type="button" onclick="window.open('print_kafala.php?id=<?php echo $sponsorship->id?>')"    > طباعة   <img align="right" src="../../images/style images/print_icon.png" style="padding-left:5px" /></button></td>
    
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
