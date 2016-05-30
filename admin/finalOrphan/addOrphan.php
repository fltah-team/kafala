<?php include '../auth.php';?>
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
	<?php include '../menu.php';?>
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
        include('../../utils/error_handler.php');
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
    <td width="21%" align="right">
        <?php fp_select_status_get()?>
    </td>
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
    <td align="right">
                <td align="center" dir="rtl" >
  	    ذكر<input type="radio" name="s_gender" value="1" id="male_gender" />
            &nbsp;&nbsp;
  	    أنثى<input type="radio" name="s_gender" value="0" id="female_gender" />
  	    
    </td>
    </td>
  	<td align="center">الجنس</td>
    
    <td align="center">
        <?php fp_select_date_get(1990,null)?>
    </td>
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
        <?php fp_select_mother_status_get()?>
    	</td>
  	<td align="right">حالتها الاجتماعية

  	  </td>
    
    <td align="right">
        <?php fp_select_date_get(1960,'m')?>
    </td>
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
       <?php fp_select_date_get(1995,'f')?>
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

<!--   Family   -->


<br />
<h2 align="center"><b><span dir="RTL" lang="AR-SA">عدد افراد الاسرة </span>
</b></h2>
<table width="60%" border="0" align="center" id=" ">
  <tr align="center">
      <td width="29%" align="right" id="num_male_sib">0</td>
  	<td width="11%" align="right">الاناث </td>
        <td width="16%" align="right" id="num_female_sib">0</td>
    <td width="15%" align="center"> الذكور</td>
    <td width="15%" align="right" id="num_sib">0</td>
    <td width="14%" align="center">  عدد الاخوان  </td>
  </tr>
  
  
    <table class="table" width="70%" border="0" align="center">
   <br />
   <tr class="table_header">
       <td align="center" width="15%">حذف</td>
      <td align="center" width="15%">الحالة</td>
    <td align="center" width="15%">تاريخ الميلاد</td>
    <td align="center" width="25%">الجنس</td>
    <td align="center" width="20%">الإسم</td>
    <td align="center" width="10%">&nbsp;</td>
  </tr>
   <?php 
        $scount = @count($sibilings);
        for($i = 0 ; $i < $scount ; $i++){
		$one_sibling = $sibilings[$i];
  ?>
   <tr class="table_data<?php echo $i%2?>">
       <td onclick="delete_sibling_ajax(<?php echo $one_sibling->id?>)" align="center" >
        <img width="22px"   align="middle" alt="حذف" src="../../images/style images/delete_icon.png"   />
    </td>
    <td align="center"><?php fp_get_state($one_sibling->state)?></td>
    <td align="center"><?php echo $one_sibling->birth_date ?></td>
    <td align="center"><?php if($one_sibling->sex == 1) echo "ذكر"; else echo "أنثى";?></td>
    <td align="center"><?php echo $one_sibling->name ?></td>
    <td align="center"><?php echo $i+1 ?></td>
  </tr>
   <?php } ?>
   <tr class="table_data<?php echo $i%2?>">
       <td></td>
    <td align="center" >
        <select tabindex="0" class="select" name="status" id="s_status">
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
       <td align="center" dir="rtl" >
  	    ذكر<input type="radio" name="s_gender" value="1" id="sibling_male_gender" />
            &nbsp;&nbsp;
  	    أنثى<input type="radio" name="s_gender" value="0" id="sibling_female_gender" />
  	    
    </td>
    <td align="center"><input class="textFielsS" name="fbname" type="text" id="sibling_name" size="10" maxlength="30" /></td>
    <td></td>
  </tr>
  <tr >
  	
    <td align="center"><input type="button" name="login " id="login " onclick="get_s_str()" value="إضافة فرد" /></td>
   </tr>

</table>


</table>
<script type="text/javascript" >
    
    var index = 0;
    var s_str_array = Array();
    function get_s_str(){
      var s_str = "" ;
      var sname = document.getElementById('sibling_name');
      s_str+='sibling_name='+sname.value+'&';
      var s_bd = document.getElementById('sy').value+"-"+document.getElementById('sm').value+"-"+document.getElementById('sd').value;
      s_str+='s_bd='+s_bd+'&';
      var s_status = document.getElementById("s_status");
      s_str+='sibling_status='+s_status.value+'&';
      var s_gender_nodes = document.getElementsByName("s_gender");

      if(document.getElementById("sibling_male_gender").checked == true) s_gender_value = "1" ;
      else
      if(document.getElementById("sibling_female_gender").checked == true) s_gender_value = "0" ;
      else s_gender_value = "1" ;
      s_str+='s_gender='+s_gender_value+'&';
      s_str_array[index] = s_str;
      alert(index);
      index++;
      }
</script>
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
        <td width="12%" align="center"  id="teachingr_lable">السبب</td>
        <td width="19%" align="center">
        <select class="select" name="learning" id="learning">
            <option  value="1" onclick="learning1()">يدرس</option>
            <option  value="0" onclick="learning0()">لا يدرس</option>
    </select>
    <script type="text/javascript" >
        document.getElementById('teachingr').style.display = 'none';
         document.getElementById('teachingr_lable').innerText = '';
     function learning0(){
         document.getElementById('class').style.display = 'none';
         document.getElementById('class_lable').innerText = ''; 
         document.getElementById('level').style.display = 'none';
         document.getElementById('level_lable').innerText = ''; 
         document.getElementById('school').style.display = 'none';
         document.getElementById('school_lable').innerText = '';
         document.getElementById('teachingr').style.display = 'block';
         document.getElementById('teachingr_lable').innerText = 'السبب';
     }   
          function learning1(){
         document.getElementById('class').style.display = 'block';
         document.getElementById('class_lable').innerText = 'الصف';  
         document.getElementById('level').style.display = 'block';
         document.getElementById('level_lable').innerText = 'المرحلة'; 
         document.getElementById('school').style.display = 'block';
         document.getElementById('school_lable').innerText = 'اسم المدرسة'; 
         document.getElementById('teachingr').style.display = 'none';
         document.getElementById('teachingr_lable').innerText = ''; 
     }
    </script>
    </td>
        <td width="23%">الحالة الدراسية</td>
        
        
  </tr>
  
  <tr>
    <td>&nbsp;</td>
  </tr>
  
  <tr align="center">
  	<td style="height: 29px"><input class="textFiels" name="class" type="text" id="class" size="10" maxlength="30" /></td>
        <td style="height: 29px" id="class_lable">الصف</td>
  	
	<td width="23%" align="right" style="height: 29px"><input class="textFiels" name="school" type="text" id="school" size="20" maxlength="30" /></td>
        <td width="12%" align="center" style="height: 29px" id="school_lable">اسم المدرسة</td>
        <td align="center" style="height: 29px"><input class="textFiels" name="level" type="text" id="level" size="10" maxlength="30" /></td>
        <td style="height: 29px" id="level_lable">المرحلة</td>
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
	  for($i=0 ; $i <= 30 ; $i++)
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
	<td width="18%" align="center" id="illLable">نوع المرض</td>
        <td width="8%" align="center">
        <select class="select" name="illness" id="illness">
            <option id="goodill" onclick="illness1()" value="1">جيدة</option>
            <option id="badill"  onclick="illness0()" value="0">سيئة</option>
    </select>
    </td>
        
        <td width="28%">الحالة الصحية </td>
        <script type="text/javascript" >
         document.getElementById('illt').style.display = 'none';
         document.getElementById('illLable').innerText = '';
        function illness1(){
             document.getElementById('illt').style.display = 'none';
             document.getElementById('illLable').innerText = '';
         }
         function illness0(){
             document.getElementById('illt').style.display = 'block';
             document.getElementById('illLable').innerText = 'نوع المرض';
         }
        </script>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  
</table>
<script type="text/javascript" id="illt1" >
    
</script>
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
    <td align="center"><button class="bt" name="add" type="button" onclick="get_str()" ><img align="right" src="../../images/style images/add_icon.png" style="padding-left:5px" /> اضافة يتيم  </button></td>
    <td>&nbsp;</td>
  </tr>
  </form>
</table>
</div>
    <div  style="margin: 0 auto; text-align: center ; width: 60%;" id="reponse">
    <span id="res_stattus"></span>
</div>
<script type="text/javascript" >
        
function IsEmpty(){ 
        var text = document.getElementsByTagName('input');
        var empty_checker = 0 ;
        for(var i = 0 ; i< text.length ; i++){
           if(text[i].value == ''){
               text.item(i).style.color = "#ff0000" ;
               text.item(i).setAttribute("placeholder","هذا الحقل فارغ");
               empty_checker++;
           }
        }
        if(empty_checker > 0 )alert("هناك حقول يجب تعبئتها");
        else get_str();
}

function get_str(){
        
	var text = document.getElementsByTagName('input');
        var select = document.getElementsByTagName('select');
        var str = '';
        for(var i = 0 ; i< text.length ; i++){
           str += text[i].getAttribute('id')+'='+text[i].value+'&';
        }
        for(var i = 0 ; i< select.length ; i++){
           str += select[i].getAttribute('id')+'='+select[i].value+'&';
        }
        gender_value = 1 ;
        if(document.getElementById("male_gender").checked == true) gender_value = "1" ;
        else gender_value = "0" ;
        str+="gender="+gender_value;
        //window.location.href = "saveOrphan.php?"+str;
        alert(str);
       ajax(str);
}
function ajax(str)
{		
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
            document.getElementById("res_stattus").innerHTML=ajax.responseText;
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

function add_sibling (){
    var s_final_str = "";
    if(s_str_array.length != 0)
    for(var i =0 ; i < s_str_array.length ; i++){
        s_final_str+=s_str_array[i];
    }
     alert(document.getElementById("success_notice").getAttribute("name"));
}	
</script>
<div id="footer">
<p>جميع الحقوق محفوظة 2016 &copy;</p>
</div>
</div>
</body>
</html>
