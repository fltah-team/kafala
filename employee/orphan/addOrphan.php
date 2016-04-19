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
   </ul>
</div>

<!-- main -->
<div class="main">

<div class="login">
<h2 align="center">بيانات يتيم </h2>
<br />
<p id="noti"></p>
<br />

<form action="saveOrphan.php" method="post" >
<table width="85%" border="0" align="center">

  <tr align="center">
  	<td width="13%" align="right">&nbsp;</td>
  	<td width="13%" align="center">&nbsp;</td>
    <?php
    
	include('../../utils/db.php');
	include('../../utils/sponsorAPI.php');
	$sponsors = fp_sponsor_get();
	$scount = count($sponsors);
	
	?>
    <td width="13%" align="right">
    <select class="select" tabindex="1" name="sponsor" id="sponsor">
    <?php for($i = 0 ; $i < $scount ; $i++){
		$sponsor = $sponsors[$i] ; ?>
      <option value="<?php echo $sponsor->id?>"><?php echo $sponsor->name?></option>
	<?php } ?>
    </select></td>
    <td width="14%">جهة الكفالة</td>
    <td width="21%" align="right"><select tabindex="0" class="select" name="status" id="status">
      <option value="1">مكفول</option>
      <option value="2">قيد التسويق</option>
      <option value="3">متوقف</option>
    </select></td>
    <td width="26%" align="center">الحالة</td>
  </tr>
  
  <tr>
    <td>&nbsp;</td>
  </tr>
    <tr align="center">
	<td>&nbsp;</td>
  	<td align="right"><input class="textFiels" name="name4" type="text" id="name4" tabindex="5" size="10" maxlength="30" /></td>
    <td align="right"><input class="textFiels" name="name3" type="text" tabindex="4" id="name3" size="10" maxlength="30" /></td>
    <td align="right"><input class="textFiels" name="name2" type="text" tabindex="3" id="name2" size="10" maxlength="30" /></td>
    <td align="right"><input class="textFiels" name="name1" tabindex="2" type="text" id="name1" size="10" maxlength="30" /></td>
    <td align="center">اسم اليتيم</td>
  </tr>
  
    <tr>
    <td>&nbsp;</td>
  </tr>
    <tr align="right">
	<td>
        </td>
        <td align="right"></td>
    <td align="right"><select class="select" name="gender" id="gender">
      <option value="1">ذكر</option>
      <option value="0">انثى</option>
    </select></td>
  	<td align="center">الجنس</td>
    
    <td align="center"><table width="80%" border="0">
      <tr>
        <td><select name="y" class="select" id="y">
          <?php
	  for($i=1997 ; $i <= date("Y") ; $i++)
  	  echo "<option value='".$i."'>$i</option>'";
	  ?>
        </select></td>
        <td><select class="select" name="m" id="m">
          <?php
	  for($i=1 ; $i <= 12 ; $i++)
  	  echo "<option value='".$i."'>$i</option>'";
	  ?>
        </select></td>
        <td><select class="select" name="d" id="d">
          <?php
	  for($i=1 ; $i <= 31 ; $i++)
  	  echo "<option value='".$i."'>$i</option>'";
	  ?>
        </select></td>
      </tr>
      </table></td>
    <td align="center">تاريخ الميلاد</td>
  </tr>
  

    <tr>
    <td>&nbsp;</td>
  </tr>
    <tr align="center">
	<td>&nbsp;</td>
  	<td align="right"><input class="textFiels" name="mname4" type="text" id="mname4" size="10" maxlength="30" /></td>
    <td align="right"><input class="textFiels" name="mname3" type="text" id="mname3" size="10" maxlength="30" /></td>
    <td align="right"><input class="textFiels" name="mname2" type="text" id="mname2" size="10" maxlength="30" /></td>
    <td align="right"><input class="textFiels" name="mname1" type="text" id="mname1" size="10" maxlength="30" /></td>
    <td align="center">اسم والدة اليتيم</td>
  </tr>
  
  <tr>
    <td>&nbsp;</td>
  </tr>
    <tr align="right">
    <td align="right"></td>
    <td align="right">
      </td>
		<td>
        <select class="select" name="mstatus" id="mstatus">
          <option value="متزوجة">متزوجة</option>
          <option value="مطلقة">مطلقة</option>
        </select>
    	</td>
  	<td align="right">حالتها الاجتماعية

  	  </td>
    
    <td align="right"><table width="80%" border="0">
      <tr>
        <td><select name="fy" class="select" id="fy">
          <?php
	  for($i=1950 ; $i <= date("Y") ; $i++)
  	  echo "<option value='".$i."'>$i</option>'";
	  ?>
        </select></td>
        <td><select class="select" name="fm" id="fm">
          <?php
	  for($i=1 ; $i <= 12 ; $i++)
  	  echo "<option value='".$i."'>$i</option>'";
	  ?>
        </select></td>
        <td><select class="select" name="fd" id="fd">
          <?php
	  for($i=1 ; $i <= 31 ; $i++)
  	  echo "<option value='".$i."'>$i</option>'";
	  ?>
        </select></td>
      </tr>
    </table></td>
    <td align="center">تاريخ ميلادها</td>
  </tr>
  
  <tr>
    <td>&nbsp;</td>
  </tr>
    <tr align="center">
  	<td align="right"><input class="textFiels" name="lw" type="text" id="lw" size="10" maxlength="30" /></td>
    <td>عمله السابق</td>
    <td align="right"><input class="textFiels" name="dr" type="text" id="dr" size="10" maxlength="30" /></td>
    <td align="right">سبب الوفاة</td>
    <td align="right">
       <table width="60%" border="0">
      <tr>
        <td><select name="my" class="select" id="my">
          <?php
	  for($i=1950 ; $i <= date("Y") ; $i++)
  	  echo "<option value='".$i."'>$i</option>'";
	  ?>
        </select></td>
        <td><select class="select" name="mm" id="mm">
          <?php
	  for($i=1 ; $i <= 12 ; $i++)
  	  echo "<option value='".$i."'>$i</option>'";
	  ?>
        </select></td>
        <td><select class="select" name="md" id="md">
          <?php
	  for($i=1 ; $i <= 31 ; $i++)
  	  echo "<option value='".$i."'>$i</option>'";
	  ?>
        </select></td>
      </tr>
    </table>
    </td>
    <td align="center">تاريخ وفاة والد اليتيم</td>
  </tr>
    
</table>



<!--   Aderss   -->


<br />
<h2 align="center">العنوان</h2>
<br />
<table width="85%" border="0" align="center" id=" ">
  <tr align="center">
  	<td width="13%" align="right"><input class="textFiels" name="district" type="text" id="district" size="10" maxlength="30" /></td>
  	<td width="7%" align="right">الحي</td>
    <td width="25%" align="right"><input class="textFiels" name="city" type="text" id="city" size="15" maxlength="30" /></td>
    <td width="24%" align="center">المدينة/القرية</td>
        <?php
    
	include('../../utils/stateAPI.php');
	$states = fp_states_get();
	$scount = count($states);
	
	?>
    
    <td width="13%" align="right">
    <select class="select" name="state" id="state">
    <?php for($i = 0 ; $i < $scount ; $i++){
		$state = $states[$i] ; ?>
      <option value="<?php echo $state->id?>"><?php echo $state->name?></option>
	<?php } ?>
    </select>
    
      </td>
    <td width="18%" align="center">الولاية</td>
  </tr>
  
  <tr>
    <td>&nbsp;</td>
  </tr>
    <tr align="center">
	<td>&nbsp;</td>
  	<td align="right"></td>
    <td align="right"><input class="textFiels" name="hno" type="text" id="hno" size="15" maxlength="30" /></td>
    <td align="right">رقم المنزل/معلم بارز</td>
    <td align="right"><input class="textFiels" name="section" type="text" id="section" size="10" maxlength="30" /></td>
    <td align="center">المربع</td>
  </tr>
  
  
    <tr>
    <td>&nbsp;</td>
  </tr>
    <tr align="right">
	<td>&nbsp;</td>
    <td>&nbsp;</td>
     <td align="right"><input class="textFiels" name="tel2" type="text" id="tel2" size="10" maxlength="30" /></td>
    <td align="center">جوال 2</td>
    <td align="right"><input class="textFiels" name="tel1" type="text" id="tel1" size="10" maxlength="30" /></td>
    <td align="center">جوال 1</td>
  </tr>
  
  
</table>

<!--   Learning   -->


<br />
<h2 align="center">التعليم</h2>
<br />
<table width="85%" border="0" align="center" id=" ">
  <tr align="center">
  	<td width="16%"></td>
  	<td width="7%" align="right">&nbsp;</td>
  	<td width="23%" align="right"><input name="teachingr" type="text"  class="textFiels" id="teachingr" size="20" maxlength="30" />
  	  </td>
	<td width="12%" align="center">السبب</td>
        <td width="19%" align="center">
        <select class="select" name="learning" id="learning">
      <option  value="1">يدرس</option>
      <option  value="0">لا يدرس</option>
    </select>
    <script type="text/javascript" >
            var totalVAL = 21 ;
            
    </script>
    </td>
        <td width="23%">الحالة الدراسية</td>
        
        
  </tr>
  
  <tr>
    <td>&nbsp;</td>
  </tr>
  
  <tr align="center">
  	<td><input class="textFiels" name="class" type="text" id="class" size="10" maxlength="30" /></td>
    <td>الصف</td>
  	
	<td width="23%" align="right"><input class="textFiels" name="school" type="text" id="school" size="20" maxlength="30" /></td>
        <td width="12%" align="center">اسم المدرسة</td>
        <td align="center"><input class="textFiels" name="level" type="text" id="level" size="10" maxlength="30" /></td>
  	<td>المرحلة</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  
    <tr align="center">
  	<td width="16%" align="right">&nbsp;</td>
  	<td width="7%" align="right">&nbsp;</td>
  	<td width="23%" align="right">&nbsp;</td>
	<td width="12%" align="center">&nbsp;</td>
	<td width="19%" align="center">جزء
	  <select class="select" name="quran" id="quran">
	    <?php
	  for($i=1 ; $i <= 30 ; $i++)
  	  echo "<option value='".$i."'>$i</option>'";
	  ?>
	    </select></td>
	<td width="23%" align="right">مستوى حفظ القران</td>
        </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  
</table>


<!-- health -->


<br />
<h2 align="center">الحالة الصحية</h2>
<br />

  <table width="85%" border="0" align="center" id=" ">

  <tr align="center">
  	<td width="2%"></td>
  	<td width="12%" align="right"></td>
  	<td width="38%" align="left"><input class="textFiels" name="illt" type="text" id="illt" size="30" maxlength="30"   /></td>
	<td width="12%" align="center" id="illLable">نوع المرض</td>
        <td width="8%" align="center">
        <select class="select" name="illness" id="illness">
      <option value="1">جيدة</option>
      <option value="0">سيئة</option>
    </select>
    </td>
        <td width="28%">الحالة الصحية </td>
    
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  
</table>

<!-- Employee -->

<table width="85%" border="0" align="center" >
</tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
   
   <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
  	<td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="center"><button class="bt" name="add" type="button" onclick="" ><img align="right" src="../../images/style images/add_icon.png" style="padding-left:5px" /> اضافة يتيم  </button></td>
    <td>&nbsp;</td>
  </tr>
  </form>
</table>
</div>
<script type="text/javascript" >
	alert();
	var nodes = document.getElementsByClassName("textFiels");//+document.getElementsByClassName("select");
        var selectores_nodes = document.getElementsByClassName("select");
	var str = "" ;
        
	for(var i = 0 ; i <= nodes.length ; i++){
		str+=nodes[i].getAttribute("id")+"="+nodes[i].value+"&\n";
                if(selectores_nodes[i])
                    str+=selectores_nodes[i].getAttribute("id")+"="+selectores_nodes[i].value+"&\n";
                
		}
	
			  
	function IsEmpty(){ 
	var res = 0 ;
        
	// empty
	for(i=0 ; i <= (nodes.length) ; i++){
	if(nodes.item(i).value == ""){
	nodes.item(i).style.color = "#ff0000" ;
	nodes.item(i).setAttribute("placeholder","هذا الحقل فارغ");
	
		} else res++;
		check(res);
	}
	 
}
function check(res){
	if(res == ) ajax();
	
	}


function ajax()
{
	
	var n = document.getElementById("footer");
	
	var i = 0;
	
	
    var ajax;
	var data ;
	//var d_node = document.getElementById(elementID);
	elementID = "div";
	filename = "saveOrphan.php";
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
            alert(ajax.responseText);
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
<p>جميع الحقوق محفوظة 2016 &copy;</p>
</div>
</div>
</body>
</html>
