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
    <h2 align="center" class="adress">بيانات أسرة </h2>
<br />
<?php 
        include('../../utils/db.php');
        include('../../utils/familyAPI.php');
        include('../../utils/siblingAPI.php');
        include('../../utils/sponsorAPI.php');
        include ('../../utils/error_handler.php');
	if(!isset($_GET['id']) || $_GET['id']==""){
            fp_err_show_record("اليتيم");
        }
        
	$id = $_GET['id'];
	$orphan = fp_family_get_by_phone1($id);
	if(!$orphan) fp_err_show_record("الطالب");
        include('../../utils/stateAPI.php');
	$states = fp_states_get();
	$scount = count($states);
    $curr_state  = fp_states_get_by_id($orphan->residence_state);
        
        
?>
<br />

<table width="85%" border="0" align="center">

  <tr align="center">
    <?php
	
	$sponsors = fp_sponsor_get();
	$scount = count($sponsors);
	
	?>
    <td align="right">
        <?php
        $sponsors = fp_sponsor_get();
        $spcount = @count($sponsors);
        $curr_sponsor = fp_sponsor_get_by_id($orphan->warranty_organization);
        ?>
        <select class="select" tabindex="1" name="sponsor" id="sponsor">
    <?php 
                echo "<option value='$curr_sponsor->id'>$curr_sponsor->name</option>";
                for($i = 0 ; $i < $spcount ; $i++){
		$sponsor = $sponsors[$i] ; ?>
      <option value="<?php echo $sponsor->id?>"><?php echo $sponsor->name?></option>
	<?php } ?>
    </select>
    </td>
    <td width="14%">جهة الكفالة</td>
    <td width="21%" align="right">
       <?php fp_select_status_get_by_id($orphan->state); ?>
    </td>
    <td width="26%" align="center">الحالة</td>

  
    <td width="14%" align="right">
        <input class="textFiels" name="id" disabled type="text" id="id" size="10" maxlength="30" value="<?php echo $orphan->family_id?>"  />
    </td>
    <td width="20%" align="center">الرقم</td>
      </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
    <tr align="center">
	<td>&nbsp;</td>
  	<td align="right"><input value="<?php echo $orphan->father_4th_name?>" class="textFiels" name="name4" type="text" id="name4" tabindex="5" size="10" maxlength="30" /></td>
    <td align="right"><input value="<?php echo $orphan->father_last_name?>" class="textFiels" name="name3" type="text" tabindex="4" id="name3" size="10" maxlength="30" /></td>
    <td align="right"><input value="<?php echo $orphan->father_middle_name?>" class="textFiels" name="name2" type="text" tabindex="3" id="name2" size="10" maxlength="30" /></td>
    <td align="right"><input value="<?php echo $orphan->father_first_name?>" class="textFiels" name="name1" tabindex="2" type="text" id="name1" size="10" maxlength="30" /></td>
    <td align="center">اسم رب الأسرة</td>
  </tr>
  
    <tr>
    <td>&nbsp;</td>
  </tr>
    <tr align="right">
        <td align="right"><input value="<?php echo $orphan->social_state?>" class="textFiels" name="name1" tabindex="2" type="text" id="state" size="10" maxlength="30" /></td>
    <td align="center">الحالة الاجتماعية</td>
                <td align="center" dir="rtl" >
  	    ذكر<input type="radio" name="s_gender" value="1" id="male_gender" />
            &nbsp;&nbsp;
  	    أنثى<input type="radio" name="s_gender" value="0" id="female_gender" />
  	    
    </td>
    <script type="text/javascript" >
            var gender = <?php echo $orphan->sex?>;
            var male =document.getElementById("male_gender");
            var female =document.getElementById("female_gender");
            if(gender == 1)male.setAttribute("checked","checked");
            else
                if(gender == 0)female.setAttribute("checked","checked");
        </script>
  	<td align="center">الجنس</td>
    <td align="center">
        <?php fp_select_date_get_by_id(1950, null, $orphan->birth_date)?>
    </td>
    <td align="center">تاريخ الميلاد</td>
  </tr>
 
  <tr>
    <td>&nbsp;</td>
  </tr>
    <tr align="center">
  	<td align="right"><input value="<?php echo $orphan->father_work?>" class="textFiels" name="lw" type="text" id="lw" size="10" maxlength="30" /></td>
    <td>عمله السابق</td>
    <td align="right"><input value="<?php echo $orphan->father_dead_cause?>" class="textFiels" name="dr" type="text" id="dr" size="10" maxlength="30" /></td>
    <td align="right">سبب الوفاة</td>
    <td align="right">
       <?php fp_select_date_get_by_id(1995, 'f', $orphan->father_dead_date)?>
    </td>
    <td align="center">تاريخ وفاة  رب الاسرة</td>
  </tr>
    <tr>
    <td>&nbsp;</td>
  </tr>
    <tr align="center">
	<td>&nbsp;</td>
  	<td align="right"><input value="<?php echo $orphan->supporter_4th_name?>" class="textFiels" name="name4" type="text" id="sn4" tabindex="5" size="10" maxlength="30" /></td>
    <td align="right"><input value="<?php echo $orphan->supporter_last_name?>" class="textFiels" name="name3" type="text" tabindex="4" id="sn3" size="10" maxlength="30" /></td>
    <td align="right"><input value="<?php echo $orphan->supporter_meddle_name?>" class="textFiels" name="name2" type="text" tabindex="3" id="sn2" size="10" maxlength="30" /></td>
    <td align="right"><input value="<?php echo $orphan->supporter_first_name?>" class="textFiels" name="name1" tabindex="2" type="text" id="sn1" size="10" maxlength="30" /></td>
    <td align="center">المعيل الحالي  الأسرة</td>
  </tr>
  
    <tr>
    <td>&nbsp;</td>
  </tr>
    <tr align="right">
        <td align="right"><input value="<?php echo $orphan->supporter_state?>" class="textFiels" name="name1" tabindex="2" type="text" id="sstate" size="10" maxlength="30" /></td>
    <td align="center">الحالة الاجتماعية</td>
                <td align="center" dir="rtl" >
  	    ذكر<input type="radio" name="ss_gender" value="1" id="smale_gender" />
            &nbsp;&nbsp;
  	    أنثى<input type="radio" name="ss_gender" value="0" id="sfemale_gender" />
  	    
    </td>
    <script type="text/javascript" >
            var gender = <?php echo $orphan->sex?>;
            var male =document.getElementById("smale_gender");
            var female =document.getElementById("sfemale_gender");
            if(gender == 1)male.setAttribute("checked","checked");
            else
                if(gender == 0)female.setAttribute("checked","checked");
        </script>
  	<td align="center">الجنس</td>
    <td align="center">
        <?php fp_select_date_get_by_id(1950, 's', $orphan-> 	supporter_birth_date)?>
    </td>
    <td align="center">تاريخ الميلاد</td>
  </tr>
 <tr>
    <td>&nbsp;</td>
  </tr>
    <tr align="center">
    <td align="center"></td>
    <td align="center"></td>
  	<td align="right"><input value="<?php echo $orphan->supporter_work?>" class="textFiels" name="lw" type="text" id="sw" size="10" maxlength="30" /></td>
    <td>عمله الحالي</td>
    <td align="right"><input value="<?php echo $orphan->supporter_relation?>" class="textFiels" name="dr" type="text" id="sr" size="10" maxlength="30" /></td>
    <td align="center">صلة القرابة بالاسرة</td>
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

    <td width="13%" align="right">
    <select class="select" name="state" id="state">
    <?php 
    echo "<option value='$curr_state->id'>$curr_state->name</option>";
    for($i = 0 ; $i < $scount ; $i++){
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
  <tr>
    <td>&nbsp;</td>
  </tr>
  
</table>
<br />
<!--   Family   -->

<?php 
    $members = fp_member_get(" WHERE `familyID` =$orphan->phone1");
    $mcount = @count($members);
    $males = fp_member_get(" WHERE `sex` = 1 AND `familyID` =$orphan->phone1");
    $females = fp_member_get(" WHERE `sex` = 0 AND `familyID` =$orphan->phone1");
    $mnum = @count($males);
    $fnum = @count($females);
    ?>
<br />
<h2 align="center"><b><span dir="RTL" lang="AR-SA">عدد افراد الاسرة </span>
</b></h2>
<table width="70%" border="0" align="center" >
  <tr align="center">
      <td width="29%" align="center"><h2><?php echo $fnum ?></h2></td>
  	<td width="11%" align="center">الاناث </td>
        <td width="16%" align="center"><h2><?php echo $mnum ?></h2></td>
    <td width="15%" align="center"> الذكور</td>
    <td width="15%" align="center"><h2><?php echo $fnum+$mnum ?></h2></td>
    <td width="14%" align="center">  عدد افراد الأسرة  </td>
  </tr>
  
  
    <table class="table" width="90%" border="0" align="center">
   <br />
   <tr class="table_header">
       <td align="center" width="5%">حذف</td>
      <td align="center" width="5%">الحالة الصحية</td>
      <td align="center" width="5%">المرحلة الدراسية</td>
      <td align="center" width="5%">صلة القرابة</td>
    <td align="center" width="10%">تاريخ الميلاد</td>
    <td align="center" width="25%">الجنس</td>
    <td align="center" width="10%">الإسم</td>
    <td align="center" width="5%">&nbsp;</td>
  </tr>
   <?php 
        for($i = 0 ; $i < $mcount ; $i++){
		$one_sibling = $members[$i];
  ?>
   <tr class="table_data<?php echo $i%2?>">
       <td onclick="delete_sibling_ajax(<?php echo $one_sibling->member_id?>)" align="center" >
        <img width="22px"   align="middle" alt="حذف" src="../../images/style images/delete_icon.png"   />
    </td>
    <td align="center"><?php echo $one_sibling->health_state ?></td>    
    <td align="center"><?php echo $one_sibling->study_level ?></td>
    <td align="center"><?php echo $one_sibling->relation ?></td>
    <td align="center"><?php echo $one_sibling->birth_date ?></td>
    <td align="center"><?php if($one_sibling->sex == 1) echo "ذكر"; else echo "أنثى";?></td>
    <td align="center"><?php echo $one_sibling->name ?></td>
    <td align="center"><?php echo $i+1 ?></td>
  </tr>
   <?php } ?>
   <tr class="table_data<?php echo $i%2?>">
       <td></td>
       <td align="center" >
        <input type="text" class="textFiels" id="ill_state" size="10" maxlength="30" /> 
    </td>
       <td align="center" >
        <input type="text" class="textFiels" id="slevel" size="10" maxlength="30" /> 
    </td>
    <td align="center" >
        <input type="text" class="textFiels" id="seral" size="10" maxlength="30" /> 
    </td>
    <td align="center">
        <?php fp_select_date_get(1990,'s')?>
    </td>
       <td align="center" dir="rtl" >
  	    ذكر<input type="radio" name="s_gender" value="1" id="sibling_male_gender" />
            &nbsp;&nbsp;
  	    أنثى<input type="radio" name="s_gender" value="0" id="sibling_female_gender" />
  	    
    </td>
    <td align="center"><input class="textFiels" name="fbname" type="text" id="sibling_name" size="10" maxlength="30" /></td>
    <td></td>
  </tr>
  <tr >
  	
      <td align="center"><input type="button" class="add_bt" id="login " onclick="get_s_str()" value="إضافة فرد" /></td>
   </tr>

</table>


</table>

<script type="text/javascript">
function get_s_str(){
       var s_str = "" ;
      var sname = document.getElementById('sibling_name');
      s_str+='sibling_name='+sname.value+'&';
      var s_bd = document.getElementById('sy').value+"-"+document.getElementById('sm').value+"-"+document.getElementById('sd').value;
      s_str+='s_bd='+s_bd+'&';
      var seral = document.getElementById("seral");
      s_str+='seral='+seral.value+'&';
      var slevel = document.getElementById("slevel");
      s_str+='slevel='+slevel.value+'&';
      var ill_state = document.getElementById("ill_state");
      s_str+='ill_state='+ill_state.value+'&';
      var s_gender_nodes = document.getElementsByName("s_gender");

      if(document.getElementById("sibling_male_gender").checked == true) s_gender_value = "1" ;
        else s_gender_value = "0" ;
      s_str+='s_gender='+s_gender_value+'&';
      s_str+='o_id='+<?php echo $orphan->phone1 ?>;
      //window.location.href = "saveMember.php?"+s_str;
      sibling_ajax(s_str);
      
      }
  function sibling_ajax(s_str)
{	
    var ajax;
	var data ;
	filename = "saveMember.php";
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
            window.location.reload();
            //window.location.href = "orphanInfo.php?id="+<?php //echo $id?>
			//document.getElementById(elementID).innerHTML=ajax.responseText;
        }
    }
    if (post==false)
    {
        ajax.open("GET",filename+"?"+s_str,true);
        s_str = '';
        ajax.send(null);
		
    }
    else 
    {
        ajax.open("POST",filename,true);
        ajax.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        ajax.send(s_str);
        s_str = '';
    }
    return ajax;
	
}
function delete_sibling_ajax(id)
{	
    var ajax;
	var data ;
	filename = "deleteMember.php";
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
            window.location.reload();
            
            //window.location.href = "orphanInfo.php?id="+<?php //echo $id?>
			//document.getElementById(elementID).innerHTML=ajax.responseText;
        }
    }
    if (post==false)
    {
        ajax.open("GET",filename+"?id="+id,true);
        s_str = '';
        ajax.send(null);
		
    }
    else 
    {
        ajax.open("POST",filename,true);
        ajax.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        ajax.send(s_str);
        s_str = '';
    }
    return ajax;
	
}
</script>
<br />
<!-- Employee -->
<table width="50%" border="0" align="center" id=" ">
  <tr>
      <td>&nbsp;</td>
      
      <td align="center"><input class="textFiels" disabled name="impt" type="text" id="user_d" size="10" maxlength="30" value="<?php echo $orphan->data_entery_date?>"/></td>
    <td align="center">التاريخ</td>
    <td align="center"><input class="textFiels" disabled name="impt" type="text" id="user" size="10" maxlength="30" value="<?php echo $orphan->data_entery_name?>"/></td>
    <td align="center">مدخل البيانات   </td>
  </tr>
   
   <tr>
        <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="center"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="center"><button class="del_bt" name="add" onclick="del_ajax(<?php echo $orphan->phone1?>)" >الغاء البيانات<img align="right" src="../../images/style images/delete_icon.png" style="padding-left:5px" />  </button></td>
    <td>&nbsp;</td>
    <td align="center"><button class="add_bt" name="add" type="button" onclick="i3_get_str()" >اعتماد البيانات<img align="right" src="../../images/style images/update_icon.png" style="padding-left:5px" />  </button></td>
    <td>&nbsp;</td>
  </tr>

</table>


</div>
<div  style="margin: 0 auto; text-align: center ; width: 60%;" id="reponse">
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
        else i3_get_str();
}

function i3_get_str(){
        alert(str);
        var text = document.getElementsByTagName('input');
        var select = document.getElementsByTagName('select');
        var str = 'id=<?php echo $orphan->id?>&';
        for(var i = 0 ; i< text.length ; i++){
           str += text[i].getAttribute('id')+'='+text[i].value+'&';
        }
        for(var i = 0 ; i< select.length ; i++){
           str += select[i].getAttribute('id')+'='+select[i].value+'&';
        }
        gender_value = 1 ;
        if(document.getElementById("male_gender").checked == true) gender_value = "1" ;
        else
            if(document.getElementById("female_gender").checked == true) gender_value = "0" ;
        else gender_value = "1" ;
        str+="gender="+gender_value;
        //window.location.href = "finalStudent.php?"+str;
        alert(str);
        //ajax(str);
}
function ajax(str)
{		
    
    var ajax;
	var data ;
	//var d_node = document.getElementById(elementID);
	elementID = "div";
	filename = "finalStudent.php";
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
            document.getElementById("reponse").innerHTML=ajax.responseText;
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

//*********************  DELETE
function del_ajax(ID)
{	
    conf = confirm("ستقوم بحذف بيانات الأسرة \n هل أنت متأكد");
    if(conf){
    var ajax;
	var data ;
        var str = "?id=0"+ID;
        //var d_node = document.getElementById(elementID);
	elementID = "div";
	filename = "deleteStudent.php";
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
            document.getElementById("reponse").innerHTML=ajax.responseText;
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
<p>جميع الحقوق محفوظة 2016 &copy;</div>
</div>
</body>
</html>
