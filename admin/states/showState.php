<?php
	include('../../utils/db.php');
	include('../../utils/stateAPI.php');
        include('../../utils/error_handler.php');
    
        $states = fp_states_get();
	fp_db_close();
        
?>
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
      
      <li><a href="cars.html">تسجيل خروج</a>
      <li><a href="customers.html">الدعاة</a>
      <li><a href="employees.html">الطلاب</a>
      <li><a href="reports.html">الأسر</a>
      <li><a href="main.html">الأيتام</a>
      <li><a href="main.html">عرض المستخدمين</a>
   </ul>

</div>

<!-- main -->
<div class="main">
<h1 align="center" class="adress">  المدن </h1>
<br />

<?php
    if($states == 0 ||$states == -1 ) {
            fp_err_show_records("المدن");
        }
        
	$ucount = @count($states);
?>

<table width="40%" align="center" class="table">
    
    <tr align="center" class="table_header">
 <td width="5%">حذف </td>
    <td width="40%">الاسم </td>
    <td width="5%">الرقم</td>
  </tr>
  <?php 
  	for($i = 0 ; $i < $ucount ; $i++){
		$state = $states[$i];
  ?>

    <tr align="center" class="table_data<?php echo $i%2?>"  >
        <td onclick="ajax(<?php echo json_decode($state->id) ?>)" >
        <img width="22px"   align="middle" alt="حذف" src="../../images/style images/delete_icon.png" style="padding-left:5px"  />
    </td>
    <td><?php echo $state->name?></td>
    <td><?php echo $state->id?></td>
    
  </tr>
  <?php } ?>
    
  </table>

<br />

<div id="footer">
  <p>جميع الحقوق محفوظة 2016 &copy;</p>
</div>
</div>
<script type="text/javascript">

function ajax(ID)
{
    var ajax;
	//var d_node = document.getElementById(elementID);
	elementID = "sucsses_notice";
	filename = "deleteState.php";
	str = "?id="+ID;
	post = false ;
	conf = confirm("هل تريد مسح <?php echo $state->name?>");
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
        if (ajax.readyState==4&&ajax.status==200)
        {
            alert(ajax.responseText);
			window.location.href = "showState.php";
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
</body>
</html>
