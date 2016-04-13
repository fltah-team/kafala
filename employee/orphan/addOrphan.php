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
<form action="saveOrphan.php" method="get" >
<table width="85%" border="0" align="center">

  <tr align="center">
  	<td width="16%" align="right">&nbsp;</td>
  	<td width="18%" align="center">&nbsp;</td>
    <?php
    
	include('../../utils/db.php');
	include('../../utils/sponsorAPI.php');
	$sponsors = fp_sponsor_get();
	$scount = count($sponsors);
	
	?>
    <td width="17%" align="right">
    <select class="textFiels" name="sponsor" id="sponsor">
    <?php for($i = 0 ; $i < $scount ; $i++){
		$sponsor = $sponsors[$i] ; ?>
      <option value="<?php echo $sponsor->id?>"><?php echo $sponsor->name?></option>
	<?php } ?>
    </select></td>
    <td width="18%">جهة الكفالة</td>
    <td width="14%" align="right"><select class="textFiels" name="status" id="status">
      <option value="1">مكفول</option>
      <option value="2">قيد التسويق</option>
      <option value="3">متوقف</option>
    </select></td>
    <td width="20%" align="center">الحالة</td>
  </tr>
  
  <tr>
    <td>&nbsp;</td>
  </tr>
    <tr align="center">
	<td>&nbsp;</td>
  	<td align="right"><input class="textFiels" name="name4" type="text" id="name4" size="10" maxlength="30" /></td>
    <td align="right"><input class="textFiels" name="name3" type="text" id="name3" size="10" maxlength="30" /></td>
    <td align="right"><input class="textFiels" name="name2" type="text" id="name2" size="10" maxlength="30" /></td>
    <td align="right"><input class="textFiels" name="name1" type="text" id="name1" size="10" maxlength="30" /></td>
    <td align="center">اسم اليتيم</td>
  </tr>
  
    <tr>
    <td>&nbsp;</td>
  </tr>
    <tr align="right">
	<td>
        </td>
        <td align="right"></td>
    <td align="right"><select class="textFiels" name="gender" id="gender">
      <option value="1">ذكر</option>
      <option value="0">انثى</option>
    </select></td>
  	<td align="center">الجنس</td>
    <script type="text/javascript" />
    	
		// GENDER
	var m = document.getElementById("male");
	var f = document.getElementById("female");
	var gender = checkGender();
	function checkGender(){
		if(m.checked)return m.value;
	else if(f.checked)return f.value;
		}
	
    </script>
    <td align="center"><table width="80%" border="0">
      <tr>
        <td><select name="y" class="textFiels" id="y">
          <?php
	  for($i=1997 ; $i <= date("Y") ; $i++)
  	  echo "<option value='".$i."'>$i</option>'";
	  ?>
        </select></td>
        <td><select class="textFiels" name="m" id="m">
          <?php
	  for($i=1 ; $i <= 12 ; $i++)
  	  echo "<option value='".$i."'>$i</option>'";
	  ?>
        </select></td>
        <td><select class="textFiels" name="d" id="d">
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
        <select class="textFiels" name="mstatus" id="mstatus">
          <option value="1">متزوجة</option>
          <option value="2">مطلقة</option>
        </select>
    	</td>
  	<td align="right">حالتها الاجتماعية

  	  </td>
    
    <td align="right"><table width="80%" border="0">
      <tr>
        <td><select name="my" class="textFiels" id="my">
          <?php
	  for($i=1950 ; $i <= date("Y") ; $i++)
  	  echo "<option value='".$i."'>$i</option>'";
	  ?>
        </select></td>
        <td><select class="textFiels" name="mm" id="mm">
          <?php
	  for($i=1 ; $i <= 12 ; $i++)
  	  echo "<option value='".$i."'>$i</option>'";
	  ?>
        </select></td>
        <td><select class="textFiels" name="md" id="md">
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
    <td align="right"><input class="textFiels" name="fdd" type="text" id="fdd" size="10" maxlength="30" /></td>
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
  	<td width="11%" align="right">الحي</td>
    <td width="22%" align="right"><input class="textFiels" name="city" type="text" id="city" size="20" maxlength="30" /></td>
    <td width="13%" align="center">المدينة/القرية</td>
        <?php
    
	include('../../utils/stateAPI.php');
	$states = fp_states_get();
	$scount = count($states);
	
	?>
    
    <td width="14%" align="right">
    <select class="textFiels" name="state" id="state">
    <?php for($i = 0 ; $i < $scount ; $i++){
		$state = $states[$i] ; ?>
      <option value="<?php echo $state->id?>"><?php echo $state->name?></option>
	<?php } ?>
    </select>
    
      </td>
    <td width="16%" align="center">الولاية</td>
  </tr>
  
  <tr>
    <td>&nbsp;</td>
  </tr>
    <tr align="center">
	<td>&nbsp;</td>
  	<td align="right"></td>
    <td align="right"><input class="textFiels" name="hno" type="text" id="hno" size="20" maxlength="30" /></td>
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

<!--   Family   -->


<br />
<h2 align="center">عدد افراد الأسرة</h2>
<br />
<table width="85%" border="0" align="center" id=" ">
  <tr align="center">
  	<td width="29%" align="right"><input name="femaleno" type="text" disabled="disabled" id="femaleno" size="10" maxlength="30" /></td>
  	<td width="11%" align="right">الأناث</td>
    <td width="16%" align="right"><input name="maleno" type="text" disabled="disabled" id="maleno" size="10" maxlength="30" /></td>
    <td width="15%" align="center">الذكور</td>
    <td width="15%" align="right"><input name="fno" type="text" disabled="disabled" id="fno" size="10" maxlength="30" /></td>
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
    <td align="center"><input class="textFielsS" name="fbstate" type="text" id="un2" size="10" maxlength="30" /></td>
    <td align="center"><input class="textFielsS" name="fmbd" type="text" id="un2" size="10" maxlength="30" /></td>
    <td align="center"><label>
  	    <input type="radio" name="gender" value="1" id="gender_0" />
  	    ذكر</label>
        <label>
  	    <input type="radio" name="gender" value="2" id="gender_1" />
  	    انثى</label></td>
    <td align="center"><input class="textFielsS" name="fbname" type="text" id="un2" size="30" maxlength="30" /></td>
    <td align="center">1</td>
  </tr>
  <tr >
  	<td></td>
    <td></td>
    <td></td>
    <td align="center"><input type="button" name="login " id="login " onclick="goto_save_family_member()" value="اضافة فرد" /></td>
    <td></td>
  </tr>
  <script type="text/javascript">
  		var fmdata = Array();
		fmdata[0] = document.getElementById("fbname").value;
		fmdata[1] = document.getElementById("fmbd");
		fmdata[2] = document.getElementById("fbstate");
		function goto_save_family_member(){
			//var site = fmdata[0].value;
			//"save_family_member.php?orphan=1&name="+fbname.value+"&sex=1&bd="+fmbd.value+"&state="+fbstate.value ;
			alert(fmdata[0]);
			//window.location.href = site ;
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
  	<td width="41%" align="right"><input name="teachingr" type="text" disabled="disabled"  class="textFiels" id="teachingr" value="يدرس" size="40" maxlength="30" />
  	  </td>
	<td width="14%" align="center">السبب</td>
        <td width="14%" align="center">
        <select class="textFiels" name="learning" id="learning">
      <option onclick="checkLearn(1)" value="1">يدرس</option>
      <option onclick="checkLearn(0)" value="0">لا يدرس</option>
    </select>
    </td>
        <td width="11%">الحالة الدراسية</td>
        
        <script type="text/javascript" />
			function checkLearn(learn){
				if(learn == 0){
					document.getElementById('teachingr').removeAttribute('disabled');
       				document.getElementById('teachingr').setAttribute('value','');
     				document.getElementById('school').setAttribute('disabled','disabled');
        			document.getElementById('school').setAttribute('value','هذا الطالب لا يدرس');
        			document.getElementById('level').setAttribute('disabled','disabled');
        			document.getElementById('level').setAttribute('value','هذا الطالب لا يدرس');
        			document.getElementById('class').setAttribute('disabled','disabled');
        			document.getElementById('class').setAttribute('value','هذا الطالب لا يدرس');
					return 1 ;
		}
				else if(learn == 1){
        			document.getElementById('teachingr').setAttribute('disabled','disabled');
       				document.getElementById('teachingr').setAttribute('value','يدرس');
        			document.getElementById('school').removeAttribute('disabled');
        			document.getElementById('school').setAttribute('value','');
        			document.getElementById('level').removeAttribute('disabled');
        			document.getElementById('level').setAttribute('value','');
        			document.getElementById('class').removeAttribute('disabled');
        			document.getElementById('class').setAttribute('value','');
					return 0 ;
					}
			}
    </script>
    
  </tr>
  
  <tr>
    <td>&nbsp;</td>
  </tr>
  
  <tr align="center">
  	<td></td>
    <td></td>
  	
	<td width="41%" align="right"><input class="textFiels" name="school" type="text" id="school" size="40" maxlength="30" /></td>
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
  	  <select class="textFiels" name="quran" id="quran">
  	  <?php
	  for($i=1 ; $i <= 30 ; $i++)
  	  echo "<option value='".$i."'>$i</option>'";
	  ?>
	  </select></td>
  	<td width="23%" align="right">مستوى حفظ القران</td>
  	<td width="13%" align="right"><input class="textFiels" name="class" type="text" id="class" size="10" maxlength="30" /></td>
	<td width="14%" align="center">الصف</td>
        <td width="13%" align="center"><input class="textFiels" name="level" type="text" id="level" size="10" maxlength="30" /></td>
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
  	<td width="35%" align="left"><input class="textFiels" name="illt" type="text" id="illt" size="30" maxlength="30" disabled="disabled" value="جيدة" /></td>
	<td width="14%" align="center">نوع المرض</td>
        <td width="10%" align="center">
        <select class="textFiels" name="ill" id="illness">
      <option onclick="checkIllness(1)" value="1">جيدة</option>
      <option onclick="checkIllness(0)" value="0">سيئة</option>
    </select>
    </td>
        <td width="11%">الحالة الصحية </td>
    <script type="text/javascript" >
    	function checkIllness(ill){
			var illt =document.getElementById('illt');
			if(ill == 1){
			illt.setAttribute('disabled','disabled');
        	illt.setAttribute('value','جيدة' );
			}
			else if(ill == 0){
				illt.removeAttribute('disabled');
        		illt.removeAttribute('value');
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
  
  <tr align="center">
  	<td width="1%"></td>
  	<td width="18%" align="right"></td>
  	<td width="25%" align="left"><input disabled="disabled" class="textFiels" name="udate" type="text" id="udate" size="20" maxlength="30" /></td>
	<td width="10%" align="center">التاريخ</td>
        <td width="27%" align="center"><input disabled="disabled" class="textFiels" name="user" type="text" id="user" size="20" maxlength="30" /></td>
        <td width="19%">مدخل البيانات</td>
    
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  
    <tr align="center">
  	<td width="1%"></td>
  	<td width="18%" align="right"></td>
  	<td width="25%" align="left"><input disabled="disabled" class="textFiels" name="adate" type="text" id="adate" size="20" maxlength="30" /></td>
	<td width="10%" align="center">التاريخ</td>
        <td width="27%" align="center"><input disabled="disabled" class="textFiels" name="admin" type="text" id="admin" size="20" maxlength="30" /></td>
        <td width="19%">اعتماد رئيس القسم</td>
    
  </tr>
  
   <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
  	<td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="right"><input class="bt" name="add" type="submit"   value="اضافة يتيم" /></td>
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
		str+=nodes[i].getAttribute("id")+"="+nodes[i].value+"&";
		}
		
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
	st = "";
	var str = "START";
	
	
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
