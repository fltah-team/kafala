<?php
	include('../../utils/db.php');
	include('../../utils/orphanAPI.php');
	
	$orphans = fp_orphan_get();
	fp_db_close();
	if(!$orphans) die ("prolem");
	$ocount = @count($orphans);
	if($ocount == 0 ) die("NO orphans");
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
<h1 align="center" class="adress"> بيانات الأيتام </h1>
<br />
<table width="90%" border="0" align="center">
    <tr class="table_header" align="center">
    <td class="table_header" width="7%">عرض</td>
    <td class="table_header" width="7%">العمر</td>
    <td class="table_header" width="9%">الولاية </td>
    <td class="table_header" width="8%">الجنس </td>
    <td class="table_header" width="29%">جهة الكفالة</td>
    <td class="table_header" width="15%">الحالة</td>
    <td class="table_header" width="28%">الاسم </td>
    <td  class="table_header" width="4%">الرقم</td>
    
  </tr>
  <?php 
  	include('../../utils/stateAPI.php');
	include('../../utils/sponsorAPI.php');
function ageCalculator($dob){
        if(!empty($dob)){
        $birthdate = new DateTime($dob);
        $today   = new DateTime('today');
        $age = $birthdate->diff($today)->y;
        return $age;
    }
	else
        return 0;   
}
  	for($i = 0 ; $i < $ocount ; $i++){
		$orphan = $orphans[$i];
  ?>
  	<td class="table_data" width="9%"><a href="orphanInfo.php?id=<?php echo $orphan->id?>">عرض</a></td>
    <td class="table_data" width="7%"><?php
echo ageCalculator($orphan->birth_date);?></td>
 	<td class="table_data" width="9%"><?php echo $orphan->id?></td>
    <td class="table_data" width="8%"><?php echo $orphan->sex?> </td>
    <td class="table_data" width="29%"><?php echo $orphan->warranty_organization?></td>
    <td class="table_data" width="15%"><?php switch($orphan->state){
						case 1 :
							echo "مكفول";
						break;
						case 2 :
							echo "قيد التسويق";
						break;
						case 3 :
							echo "متوقف";
						}?></td>
    <td class="table_data" width="28%"> <?php echo $orphan->first_name." ".$orphan->meddle_name." ".$orphan->last_name." ".$orphan->last_4th_name?></td>
    <td class="table_data" width="4%"><?php echo $orphan->id?></td>
    
  </tr>
  <?php } ?>
  </table>

<br />
<div id="footer">
  <p>جميع الحقوق محفوظة 2016 &copy;</p>
</div>
</div>
<script type="text/javascript">

	//var del = document.getElementById("delete");
	
	//ajax("div","deleteuser.php","?id=7",false);
	
	function ajax(ID)
{
    var ajax;
	//var d_node = document.getElementById(elementID);
	elementID = "div";
	filename = "deleteuser.php";
	str = "?id="+ID;
	post = false ;
	conf = confirm("هل تريد مسح <?php echo $user->name?>");
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
			window.location.href = "showUsers.php";
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
