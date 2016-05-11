<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>الهيئة الخيرية الاسلامية للرعاية الاجتماعية</title>
<link href="../../style/pageStyle.css" rel="stylesheet" type="text/css" />
</head>

    <body >
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
                            <form method="get" action="orphanInfo.php" >
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
                        <li><a href="../states/showState.php">عرض المدن  </a></li>
                        <li><a href="../kafala/showKafala.php">اضافة مدينة جديدة</a></li>
                        
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
    <h2 align="center" class="adress">إضافة كفالة جديدة </h2>

<br />
<form action="saveuser.php" method="post">
	<table width="60%" border="0" align="center">
            
        <?php
    
	include('../../utils/db.php');
	include('../../utils/sponsorAPI.php');
	$sponsors = fp_sponsor_get();
	$scount = count($sponsors);
	
	?>
    <td align="right" width="44%"><select class="textFiels" name="sponsor" id="sponsor">
    <?php for($i = 0 ; $i < $scount ; $i++){
		$sponsor = $sponsors[$i] ; ?>
      <option value="<?php echo $sponsor->id?>"><?php echo $sponsor->name?></option>
	<?php } ?>
    </select></td>
    <td align="center" width="56%">جهة الكفالة</td>
    </tr>
      <tr>
    <td>&nbsp;</td>
    <td></td>
  </tr>
  <tr>
    <td align="right"><input class="textFiels" name="total" type="text" id="total" size="10" maxlength="30" /></td>
    <td align="center">المبلغ الكلي</td>
    </tr>
      <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="right"><input class="textFiels" name="saving" type="text" id="saving" size="10" maxlength="30" /></td>
    <td align="center">الادخار</td>
    </tr>
      <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
      <td align="right"><?php
 echo
      "<table width='$80%'border='0'>
      <tr>
        <td><select name='y' class='select' id='y'>";
	  for($i=date("Y") ; $i <= date("Y")+3 ; $i++)
  	  echo "<option value='$i'>$i</option>";
        echo "</select></td>
        <td><select class='select' name='m' id='m'>";
	  for($i=1 ; $i <= 12 ; $i++)
  	  echo "<option value='$i'>$i</option>";
        echo "</select></td>
        <td><select class='select' name='m' id='d'>";
	  for($i=1 ; $i <= 31 ; $i++)
  	  echo "<option value='$i'>$i</option>";
       echo '</select></td>
      </tr>
      </table>';
      ?></td>
    <td align="center">من اليوم الحالي الى</td>
  </tr>
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="right"><select  class="textFiels" id="sponsored">
  	  <option value="1">الأيتام</option>
      <option value="2">الطلاب</option>
      <option value="3">الدعاة/المقرئين/المعلمين</option>
      <option value="4">الأسر</option>
    </select></td>
    <td align="center">المكفولين    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
      <td align="right" ><button name="add"  id="bt"  type="button" onclick="IsEmpty()">إضافة <img align="right" src="../../images/style images/add_icon.png" style="padding-left:5px" /></button></td>

    <td>&nbsp;</td>
  </tr>
    


  <tr>
      <td>&nbsp;</td>
      <td ></td>
    
  </tr>
    </table>
</form>
<div style="margin: 0 auto; text-align: center ; width: 60%;" id="reponse">
    <span id="res_stattus"></span>
</div>
</div>
<script type="text/javascript" >;
 
	var checker = 0; 
	var sponsor = document.getElementById("sponsor");
	var total = document.getElementById("total");
	var saving = document.getElementById("saving");
	var last_date = document.getElementById("y").value+"-"+document.getElementById("m").value+"-"+document.getElementById("d").value;
	var sponsored = document.getElementById("sponsored");
	function IsEmpty(){ 
	// empty
	if(total.value == ""){
	total.style.color = "#ff0000" ;
	total.setAttribute("placeholder","هذا الحقل فارغ");
	checker++;
		}
        
	if(saving.value == ""){
	saving.style.color = "#ff0000" ;
	saving.setAttribute("placeholder","هذا الحقل فارغ");
	checker++;
		}	 
	if(checker == 0 )ajax();
	else 
	checker = 0; 
}

function ajax()
{
    document.getElementById('bt').style.display = 'none';
    var ajax;
	//var d_node = document.getElementById(elementID);
	elementID = "div";
	filename = "saveKafala.php"; 
	str = "sponsor="+sponsor.value+"&total="+total.value+"&saving="+saving.value+"&last_date="+last_date+"&ponsored="+sponsored.value;
	post = true ;
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
            //document.getElementById("bt").setAttribute("disabled","disabled");
            //window.location.href = "showUsers.php";
            //document.getElementById(elementID).innerHTML=ajax.responseText;
        }
    }
    if (post==false)
    {
        ajax.open("GET",filename+"?"+str,true);
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
	
  </script>
<div id="footer">
<p> جميع الحقوق محفوظة 2016 &copy;</p>
</div>
</div>
</body>
</html>
