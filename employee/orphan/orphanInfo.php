<?php 
        include('../../utils/db.php');
	include('../../utils/orphanAPI.php');
	if(!isset($_GET['id'])) die("no ID");
	$id = (int)$_GET['id']; 
	$orphan = fp_orphan_get_by_id($id);
	fp_db_close();
	
	if(!$orphan) die ("prolem");	
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
  	<td width="16%" align="right">&nbsp;</td>
  	<td width="18%" align="center">&nbsp;</td>
    <?php
        
	include('../../utils/sponsorAPI.php');
	$sponsors = fp_sponsor_get();
        $real_sponsor = fp_sponsor_get_by_id($orphan->warranty_organization);
	$scount = count($sponsors);
	
	?>
    <td width="17%" align="right">
        <input class="textFiels" size="10" maxlength="30" value="<?php echo $orphan->warranty_organization?>" />
    </td>
    <td width="18%">جهة الكفالة</td>
    <td width="14%" align="right">
        <input class="textFiels" size="10" maxlength="30" value="<?php echo $orphan->state?>" />
    </td>
    <td width="20%" align="center">الحالة</td>
  </tr>
  
  <tr>
    <td>&nbsp;</td>
  </tr>
    <tr align="center">
	<td>&nbsp;</td>
        <td align="right"><input class="textFiels" name="name4" type="text" id="name4" tabindex="5" size="10" maxlength="30" value="<?php echo $orphan->last_4th_name?>" /></td>
    <td align="right"><input class="textFiels" name="name3" type="text" tabindex="4" id="name3" size="10" maxlength="30"  value="<?php echo $orphan->last_name?>" /></td>
    <td align="right"><input class="textFiels" name="name2" type="text" tabindex="3" id="name2" size="10" maxlength="30"  value="<?php echo $orphan->meddle_name?>" /></td>
    <td align="right"><input class="textFiels" name="name1" tabindex="2" type="text" id="name1" size="10" maxlength="30" value="<?php echo $orphan->first_name?>"  /></td>
    <td align="center">اسم اليتيم</td>
  </tr>
  
    <tr>
    <td>&nbsp;</td>
  </tr>
    <tr align="right">
	<td>
        </td>
        <td align="right"></td>
    <td align="right">
        <input class="textFiels" size="10" maxlength="30" value="<?php echo $orphan->sex?>" />
    </td>
  	<td align="center">الجنس</td>
    
        <td align="right">
        <input class="textFiels" size="10" maxlength="30" value="<?php echo $orphan->birth_date?>" />
      </td>
    <td align="center">تاريخ الميلاد</td>
  </tr>
  

    <tr>
    <td>&nbsp;</td>
  </tr>
    <tr align="center">
	<td>&nbsp;</td>
  	<td align="right"><input class="textFiels" name="mname4" type="text" id="mname4" size="10" maxlength="30"  value="<?php echo $orphan->mother_4th_name?>" /></td>
    <td align="right"><input class="textFiels" name="mname3" type="text" id="mname3" size="10" maxlength="30"  value="<?php echo $orphan->mother_last_name?>" /></td>
    <td align="right"><input class="textFiels" name="mname2" type="text" id="mname2" size="10" maxlength="30"  value="<?php echo $orphan->mother_middle_name?>" /></td>
    <td align="right"><input class="textFiels" name="mname1" type="text" id="mname1" size="10" maxlength="30"  value="<?php echo $orphan->mother_first_name?>" /></td>
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
        <input class="textFiels" size="10" maxlength="30" value="<?php echo $orphan->mother_state?>" />
    	</td>
  	<td align="right">حالتها الاجتماعية
  	  </td>
    
    <td align="right">
    <input class="textFiels" size="10" maxlength="30" value="<?php echo $orphan->mother_Birth_date?>" />  
    </td>
    <td align="center">تاريخ ميلادها</td>
  </tr>
  
  <tr>
    <td>&nbsp;</td>
  </tr>
    <tr align="center">
  	<td align="right"><input class="textFiels" name="lw" type="text" id="lw" size="10" maxlength="30" value="<?php echo $orphan->father_work?>" /></td>
    <td>عمله السابق</td>
    <td align="right"><input class="textFiels" name="dr" type="text" id="dr" size="10" maxlength="30" value="<?php echo $orphan->father_dead_cause?>" /></td>
    <td align="right">سبب الوفاة</td>
    <td align="right"><input class="textFiels" name="fdd" type="text" id="fdd" size="10" maxlength="30" value="<?php echo $orphan->father_dead_date?>" /></td>
    <td align="center">تاريخ وفاة والد اليتيم</td>
  </tr>
    
</table>



<!--   Aderss   -->


<br />
<h2 align="center">العنوان</h2>
<br />
<table width="85%" border="0" align="center" id=" ">
  <tr align="center">
  	<td width="13%" align="right"><input class="textFiels" name="district" type="text" id="district" size="10" maxlength="30" value="<?php echo $orphan->District?>"/></td>
  	<td width="11%" align="right">الحي</td>
    <td width="22%" align="right"><input class="textFiels" name="city" type="text" id="city" size="20" maxlength="30"  value="<?php echo $orphan->city?>" /></td>
    <td width="13%" align="center">المدينة/القرية</td>
        
    <td width="14%" align="right">
    <input class="textFiels" name="district" type="text" id="district" size="10" maxlength="30" value="<?php echo $orphan->residence_state?>"/>
      </td>
    <td width="16%" align="center">الولاية</td>
  </tr>
  
  <tr>
    <td>&nbsp;</td>
  </tr>
    <tr align="center">
	<td>&nbsp;</td>
  	<td align="right"></td>
    <td align="right"><input class="textFiels" name="hno" type="text" id="hno" size="20" maxlength="30"  value="<?php echo $orphan->house_no?>"/></td>
    <td align="right">رقم المنزل/معلم بارز</td>
    <td align="right"><input class="textFiels" name="section" type="text" id="section" size="10" maxlength="30" value="<?php echo $orphan->section?>" /></td>
    <td align="center">المربع</td>
  </tr>
  
  
    <tr>
    <td>&nbsp;</td>
  </tr>
    <tr align="right">
	<td>&nbsp;</td>
    <td>&nbsp;</td>
     <td align="right"><input class="textFiels" name="tel2" type="text" id="tel2" size="10" maxlength="30"  value="<?php echo $orphan->phone2?>"/></td>
    <td align="center">جوال 2</td>
    <td align="right"><input class="textFiels" name="tel1" type="text" id="tel1" size="10" maxlength="30" value="<?php echo $orphan->phone1?>" /></td>
    <td align="center">جوال 1</td>
  </tr>
  
  
</table>

<!--   Family   -->


<br />
<h2 align="center">عدد افراد الأسرة</h2>
<br />
<table width="85%" border="0" align="center" id=" ">
  <tr align="center">
  	<td width="29%" align="right"><input name="femaleno" type="text" readonly="readonly" id="femaleno" size="10" maxlength="30" /></td>
  	<td width="11%" align="right">الأناث</td>
    <td width="16%" align="right"><input name="maleno" type="text" readonly="readonly" id="maleno" size="10" maxlength="30" /></td>
    <td width="15%" align="center">الذكور</td>
    <td width="15%" align="right"><input name="fno" type="text" readonly="readonly" id="fno" size="10" maxlength="30" /></td>
    <td width="14%" align="center">عدد أفراد الأسرة</td>
  </tr>
  
  
 <table width="70%" border="1" align="center">
 <form action="" method="get">
   <br />
  <tr>
    <td align="center">الحالة</td>
    <td align="center">تاريخ الميلاد</td>
    <td align="center">الجنس</td>
    <td align="center">الاسم</td>
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td align="center">
        <select tabindex="0" class="select" name="status" id="sibling_status">
      <option value="1">مكفول</option>
      <option value="2">قيد التسويق</option>
      <option value="3">متوقف</option>
    </select>
    </td>
    <td align="center">
        <table width="60%" border="0">
      <tr>
        <td><select name="my" class="select" id="sy">
          <?php
	  for($i=1950 ; $i <= date("Y") ; $i++)
  	  echo "<option value='".$i."'>$i</option>'";
	  ?>
        </select></td>
        <td><select class="select" name="mm" id="sm">
          <?php
	  for($i=1 ; $i <= 12 ; $i++)
  	  echo "<option value='".$i."'>$i</option>'";
	  ?>
        </select></td>
        <td><select class="select" name="md" id="sd">
          <?php
	  for($i=1 ; $i <= 31 ; $i++)
  	  echo "<option value='".$i."'>$i</option>'";
	  ?>
        </select></td>
      </tr>
    </table>
    </td>
    <td align="center">
  	    ذكر<input type="radio" name="s_gender" value="1" id="sibling_male_gender" />
            <br />
  	    أنثى<input type="radio" name="s_gender" value="0" id="sibling_female_gender" />
  	    
    </td>
    <td align="center"><input class="textFielsS" name="fbname" type="text" id="sibling_name" size="30" maxlength="30" /></td>
    <td align="center">1</td>
  </tr>
  <tr >
  	<td></td>
    <td></td>
    <td></td>
    <td align="center"><input type="button" name="login " id="login " onclick="sibling_ajax()" value="اضافة فرد" /></td>
    <td></td>
  </tr>
  <script type="text/javascript">
      var s_str = "" ;
      var sname = document.getElementById('sibling_name');
      var s_bd = document.getElementById('sy').value+"-"+document.getElementById('sm').value+"-"+document.getElementById('sd').value;
      var s_status = document.getElementById("sibling_status");
      /*var s_male = document.getElementById("sibling_male_gender");
      var s_female = document.getElementById("sibling_female_gender");*/
      var s_gender_nodes = document.getElementsByName("s_gender");
      var s_gender_value ="" ;
      /*
      for(var i=0 ; i<= s_gender_nodes.length ; i++){
          if(s_gender_nodes[i].checked s_gender_value = s_gender_nodes[i].value ;
      }
      */
     if(document.getElementById("sibling_male_gender").checked == true) s_gender_value = "1" ;
        else s_gender_value = "0" ;
      s_str += sname.getAttribute("id")+"="+sname.value+"&\n"
            +"s_bd="+s_bd+"&\n"
            +s_status.getAttribute("id")+"="+s_status.value+"&\n"
            +"s_gender="+s_gender_value+"&\n"
            +"o_id="+<?php echo $orphan->id ?> ;
  function sibling_ajax()
{		
    var ajax;
	var data ;
	filename = "saveSibiling.php";
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
        ajax.open("GET",filename+"?"+s_str,true);
        ajax.send(null);
		
    }
    else 
    {
        ajax.open("POST",filename,true);
        ajax.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        ajax.send(s_str);
    }
    return ajax;
	
}
</script>
    </form>
</table>


</table>


<!--   Learning   -->


<br />
<h2 align="center">التعليم</h2>
<br />
<table width="85%" border="0" align="center" id=" ">
  <tr align="center">
  	<td width="11%"></td>
  	<td width="9%" align="right">&nbsp;</td>
  	<td width="41%" align="right"><input name="teachingr" type="text" readonly="readonly"  class="textFiels" id="teachingr" value="<?php echo $orphan->nonstuding_cause?>" size="10" maxlength="30" />
  	  </td>
	<td width="14%" align="center">السبب</td>
        <td width="14%" align="center">
        <input class="textFiels" name="illt" type="text" id="illt" size="10" maxlength="30" value="<?php echo $orphan->studing_state?>"  />
    </td>
        <td width="11%">الحالة الدراسية</td>
        
        
  </tr>
  
  <tr>
    <td>&nbsp;</td>
  </tr>
  
  <tr align="center">
  	<td></td>
    <td></td>
  	
	<td width="41%" align="right"><input class="textFiels" name="illt" type="text" id="illt" size="30" maxlength="30" value="<?php echo $orphan->school_name?>"  /></td>
        <td width="14%" align="center">اسم المدرسة</td>
        <td></td>
  	<td></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  
  </table>
  
  <table width="85%" border="0" align="center" id=" ">
    <tr align="center">
  	<td width="26%" align="right">جزء
  	  <input class="textFiels" name="class" type="text" id="class" size="10" maxlength="10" value="<?php echo $orphan->quran_parts?>" /></td></td>
  	<td width="23%" align="right">مستوى حفظ القران</td>
  	<td width="13%" align="right"><input class="textFiels" name="class" type="text" id="class" size="10" maxlength="30" value="<?php echo $orphan->year?>" /></td>
	<td width="14%" align="center">الصف</td>
        <td width="13%" align="center"><input class="textFiels" name="level" type="text" id="level" size="10" maxlength="30" value="<?php echo $orphan->level?>"/></td>
        <td width="11%">المرحلة</td>
    
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
  	<td width="28%" align="right"></td>
  	<td width="35%" align="left"><input class="textFiels" name="illt" type="text" id="illt" size="30" maxlength="30" value="<?php echo $orphan->ill_cause?>"  /></td>
	<td width="14%" align="center" id="illLable">نوع المرض</td>
        <td width="10%" align="center">
        <input class="textFiels" name="illt" type="text" id="illt" size="10" maxlength="30" value="<?php echo $orphan->health_state?>"  />
    </td>
        <td width="18%">الحالة الصحية </td>
    <script type="text/javascript" >
    	function checkIllness(){
			var illt =document.getElementById('illt');
			var illness =document.getElementById('illness');
			var illLable =document.getElementById('illLable');
			var autoIll = "GOOD";
			if(illness.value == 1){
				illt.style.display='none';
				illt.setAttribute('value',autoIll);
				alert(illt.getAttribute('value'));
				//illt.setAttribute('readonly','readonly');
        	
			}
			else if(illness.value == 0){
				illt.style.display='block';
				autoIll = "ILLNESS";
				illt.setAttribute('value',autoIll);
				alert(illt.getAttribute('value'));
				}
		}
    </script>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  
</table>

<!-- Employee -->

<table width="85%" border="0" align="center" id=" ">
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
    <td align="center"><button class="add_bt" name="add" type="button" onclick="IsEmpty()" ><img align="right" src="../../images/style images/add_icon.png" style="padding-left:5px" /> اضافة يتيم  </button></td>
    <td>&nbsp;</td>
  </tr>
  </form>
</table>
</div>
<script type="text/javascript" >
	
	var date = document.getElementById("y").value+"-"+document.getElementById("m").value+"-"+document.getElementById("d").value;
	var gender = document.getElementById("y").value; 
	var nodes = document.getElementsByClassName("textFiels");
	var str = "" ;
	for(var i = 0 ; i <= nodes.length ; i++){
		str+=nodes[i].getAttribute("id")+"="+nodes[i].value+"&\n";
		}
		;
		/*
	var str2= "sponsor="+nodes[0].value+
			  "&status="+nodes.item(1).value+
			  "&name1="+nodes.item(2).value+
			  "&name2="+nodes.item(3).value+
			  "&name3="+nodes.item(4).value+
			  "&name4="+nodes.item(5).value+
			  "&bd="+nodes.item(6).value+
			  
			  "&mname1="+nodes.item(7).value+
			  "&mname2="+nodes.item(8).value+
			  "&mname3="+nodes.item(9).value+
			  "&mname4="+nodes.item(10).value+
			   
			  			  
			  "&mstatus="+nodes.item(11).value+
			  "&mbd="+nodes.item(12).value+
			  "&lw="+nodes.item(13).value+
			  "&dr="+nodes.item(14).value+
			  "&fdd="+nodes.item(15).value+
			  "&district="+nodes.item(16).value+
			  "&city="+nodes.item(17).value+
			  
			  
			  
			  "&state="+nodes.item(18).value+
			  "&hno="+nodes.item(19).value+
			  "&section="+nodes.item(20).value+
			  "&tel2="+nodes.item(21).value+
			  "&tel1="+nodes.item(22).value+
			  "&femaleno="+nodes.item(23).value+
			  "&maleno="+nodes.item(24).value+
			  "&fno="+nodes.item(25).value+
			  
			  
			  
			  "&teachingr="+nodes.item(26).value+
			  "&school="+nodes.item(27).value+
			  "&quran="+nodes.item(28).value+
			  "&class="+nodes.item(29).value+
			  "&level="+nodes.item(30).value+
			  "&illt="+nodes.item(31).value;
			  "&illness"+document.getElementById("illness");
			  */
			  
	function IsEmpty(){ 
	var res = 0 ;
	// empty
	for(i=0 ; i <= (nodes.length-5) ; i++){
	if(nodes.item(i).value == ""){
	nodes.item(i).style.color = "#ff0000" ;
	nodes.item(i).setAttribute("placeholder","هذا الحقل فارغ");
	
		} else res++;
		check(res);
	}
	 
}
function check(res){
	if(res == 32) ajax();
	
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
