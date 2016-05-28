
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> الهيئة الخيرية الاسلامية للرعاية الاجتماعية</title>
<link href="../../style/pageStyle.css" rel="stylesheet" type="text/css" />
<style type="text/css">
.auto-style1 {
	direction: rtl;
}
</style>
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
    <h2 align="center" class="adress">بيانات داعية/معلم/مقريء </h2>
<br />
<?php 
        include('../../utils/db.php');
        include('../../utils/finalPreacherAPI.php');
        include('../../utils/experienceAPI.php');
        include('../../utils/siblingAPI.php');
        include('../../utils/sponsorAPI.php');
        include ('../../utils/error_handler.php');
	if(!isset($_GET['id']) || $_GET['id']==""){
            fp_err_show_record("الداعية");
        }
        
	$id = $_GET['id'];
	$orphan = fp_final_preacher_get_by_id($id);
	if(!$orphan) fp_err_show_record("الداعية");
        
    $exp = fp_experience_get_by_preacherID($orphan->id);
        include('../../utils/stateAPI.php');
	$states = fp_states_get();
	$scount = count($states);
        $curr_state  = fp_states_get_by_id($orphan->residence_state);
        
        
?>
<br />
<form action="saveOrphan.php" method="post" >
<table width="85%" border="0" align="center">

  <tr align="center">
    <td width="17%" align="right">
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
    <td width="18%">جهة الكفالة</td>
    <td width="14%" align="right">
        <?php fp_select_status_get_by_id($orphan->state); ?>
    </td>
    <td width="20%" align="center">الحالة</td>
    <td width="14%" align="right">
        <input class="textFiels" name="id" disabled type="text" id="id" size="10" maxlength="30" value="<?php echo $orphan->id?>"  />
    </td>
    <td width="20%" align="center">الرقم</td>
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
    
        <td align="right">
            <?php fp_select_date_get_by_id(1990, null, $orphan->birth_date)?>
        
      </td>
    <td align="center">تاريخ الميلاد</td>
    <td width="10%" align="right">
        <?php fp_select_preacher_type_get_by_id($orphan->type);?>
    </td>
    <td width="10%" align="center">النوع</td>
  </tr>
    
    <tr>
    
    <td>&nbsp;</td>
  </tr>
 
      <tr align="center">
  	<td align="right"><input class="textFiels" value="<?php echo $orphan->female_members_no?>" name="lw" type="text" id="sisters_no" size="10" maxlength="30" /></td>
    <td>الاناث</td>
    <td align="right"><input class="textFiels" value="<?php echo $orphan->male_members_no?>" name="dr" type="text" id="brothers_no" size="10" maxlength="30" /></td>
    <td align="right">الذكور</td>
    <td align="right">
        <input class="textFiels" disabled name="lw" value="<?php echo $orphan->female_members_no+$orphan->male_members_no?>" type="text" id="f_mem" size="10" maxlength="30" />
    </td>
    <td align="center">عدد الاخوان</td>
  </tr>  
</table>

<br />

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
  
  
</table>

<!--   Learning   -->
<br />
<h2 align="center">التعليم</h2>
<br />
<table width="85%" border="0" align="center" id=" ">
  <tr align="center">
  	<td style="height: 29px"><input value="<?php echo $orphan->qualify_rating?>" class="textFiels" name="class" type="text" id="digree" size="10" maxlength="30" /></td>
        <td style="height: 29px" id="class_lable">التقدير</td>
        <td width="23%" align="right" style="height: 29px">
        <?php fp_select_date_get_by_id(1995, "c", $orphan->qualify_date)?></td>
        <td width="12%" align="center" style="height: 29px" id="school_lable">تاريخه</td>
        <td align="right" ><input value="<?php echo $orphan->qualify_name?>" class="textFiels" name="level" type="text" id="cert" size="10" maxlength="30" /></td>
        <td style="height: 29px" id="level_lable">المؤهل</td>
        
        
  </tr>
  
  <tr>
    <td>&nbsp;</td>
  </tr>
  
  <tr align="center">
  	<td style="height: 29px" id="class_lable"></td>
    <td style="height: 29px" id="class_lable"></td>
  	<td width="23%" align="right" style="height: 29px"><input class="textFiels" value="<?php echo $orphan->Issuer?>" name="school" type="text" id="cert_org" size="20" maxlength="30" /></td>
        <td width="12%" align="center" style="height: 29px" id="school_lable">جهة الاصدار</td>
       <td>&nbsp;</td>
       <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
   <tr align="center">
  	<td style="height: 29px"><?php fp_select_date_get_by_id(1995, "c", $orphan->Joining_Date)?></td>
        <td style="height: 29px" id=""> تاريخ  الالتحاق</td>
  	<td width="23%" align="right" style="height: 29px"><input value="<?php echo $orphan->current_work?>" class="textFiels" name="school" type="text" id="w_org" size="20" maxlength="30" /></td>
        <td width="12%" align="center" style="height: 29px" id="school_lable">جهة العمل الحالية</td>
        <td width="19%" align="center">جزء
	  <select class="select" name="quran" id="quran">
	    <?php
      echo "<option value='".$orphan->quran_parts."'>$orphan->quran_parts</option>'";
	  for($i=0 ; $i <= 30 ; $i++)
  	  echo "<option value='".$i."'>$i</option>'";
	  ?>
	    </select></td>
        <td width="23%" align="center">حفظ القران</td>    
   </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>

</table>
<h2 align="center"><b><span dir="RTL" lang="AR-SA"> الخبرات والمؤهلات الاخرى(يشترط ابراز الشهادات)</span>
</b></h2>

    <table class="table" width="70%" border="0" align="center">
   <br />
   <tr class="table_header">
       <td align="center" width="15%">حذف</td>
    <td align="center" width="15%">التاريخ</td>
    <td align="center" width="25%">الجهة</td>
    <td align="center" width="20%">المؤهل / الخبرة </td>
    <td align="center" width="10%">&nbsp;</td>
  </tr>
   <?php 
        $expcount = @count($exp);
        for($i = 0 ; $i < $expcount ; $i++){
		$ex = $exp[$i];
  ?>
   <tr class="table_data<?php echo $i%2?>">
       <td onclick="delete_exp_ajax(<?php echo $ex->id?>)" align="center" >
        <img width="22px"   align="middle" alt="حذف" src="../../images/style images/delete_icon.png"   />
    </td>
    <td align="center"><?php echo $ex->date ?></td>
    <td align="center"><?php echo $ex->organizaton ?></td>
    <td align="center"><?php echo $ex->qualifier_name ?></td>
    <td align="center"><?php echo $i+1 ?></td>
  </tr>
   <?php } ?>
   <tr class="table_data<?php echo $i%2?>">
       <td></td>
    
    <td align="center">
        <?php fp_select_date_get(1990,'ex')?>
    </td>
       <td align="center" dir="rtl" >
  	  <input class="textFielsS" name="fbname" type="text" id="org" size="20" maxlength="30" />
    </td>
    <td align="center"><input class="textFielsS" name="fbname" type="text" id="qualifier_name" size="20" maxlength="30" /></td>
    <td></td>
  </tr>
  <tr >
      
    <td align="center"><input type="button" name="login " id="login " onclick="get_exp_str()" value="إضافة " /></td>
    <td align="center" style="color: white" id="notifyx"></td>
   </tr>

</table>


</table>

<script type="text/javascript">
function get_exp_str(){
      var d = document.getElementById('exy').value+"-"+document.getElementById('exm').value+"-"+document.getElementById('exd').value;
      var s_str = "?id=<?php echo $orphan->id ?>&qualifier_name="+document.getElementById("qualifier_name").value+"&date="+d+"&org="+document.getElementById("org").value ;

      //exp_ajax(s_str);
      window.location.href = "saveExp.php"+s_str;
      }
  function exp_ajax(s_str)
{	
    var ajax;
	alert(s_str);
	filename = "saveExp.php";
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
function delete_exp_ajax(id)
{	
        var ajax;
	var data ;
	filename = "deleteExp.php";
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

<!-- health -->

<br />
<h2 align="center">الحالة الصحية</h2>
<br />

  <table width="80%" border="0" align="center" id=" ">

  <tr align="center">
  	<td width="0%"></td>
  	<td width="0%" align="right"></td>
  	<td width="35%" align="left"><input class="textFiels" name="illt" type="text" id="illt" size="30" maxlength="30" value="<?php echo $orphan->ill_cause?>"  /></td>
	<td width="20%" align="center" id="illLable">نوع المرض</td>
        <td width="20%" align="center" id="ill_container">
        
        </td>
        <td width="2%"> 
        <select class="select" name="illnessGood1" id="illness">
            <?php
            if($orphan->health_state == 1){
            echo '<option id="goodill"  value="1">جيدة</option>
            <option id="badill"   value="0">سيئة</option>';
            }
            else {
            echo '<option id="badill"   value="0">سيئة</option>
                <option id="goodill"  value="1">جيدة</option>';
            
            }
            ?>
        </select>
        </td>
        <td width="18%">الحالة الصحية  </td>

  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  
</table>
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
    <td align="center"></td> 
    </tr>
    <tr>
      <td>&nbsp;</td>
      
      <td align="center"><input class="textFiels" disabled name="level" type="text" id="sdsg" size="10" maxlength="30" value="<?php echo $orphan->head_dep_date?>"/>   </td>
    <td>التاريخ</td>
              <td align="center"><input class="textFiels" disabled name="level" type="text" id="sgsdg" size="10" maxlength="30" value="<?php echo $orphan->head_dep_name?>"/</td>
    <td>اعتماد رئيس القسم</td>
  </tr>
    
   <tr>
        <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="center"></td>
    <td>&nbsp;</td>
  </tr>
</table>
<table align="center" >
  <tr>
    <td align="center"><button name="add" id="bt"  type="button" onclick="del_ajax()"> حذف <img  align="right" src="../../images/style images/delete_icon.png" style="padding-left:5px" /></button></td>
      <td>&nbsp;</td>
    <td><button name="add" class="bt"  type="button" onclick="window.open('print_preacher_info.php?id=<?php echo $orphan->id?>')"    > طباعة   <img align="right" src="../../images/style images/print_icon.png" style="padding-left:5px" /></button></td>
    <td>&nbsp;</td>
    <td align="center"><button class="add_bt" name="add" type="button" onclick="get_str()" >تعديل البيانات<img align="right" src="../../images/style images/update_icon.png" style="padding-left:5px" />  </button></td>
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
        else
            if(document.getElementById("female_gender").checked == true) gender_value = "0" ;
        else gender_value = "1" ;
        str+="gender="+gender_value;
        //window.location.href = "saveStudent.php?"+str;
        //alert(str);
        ajax(str);
}
function ajax(str)
{		
    var ajax;
	var data ;
	//var d_node = document.getElementById(elementID);
	elementID = "div";
	filename = "saveStudent.php";
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
function del_ajax(ID)
{
    var ajax;
    document.getElementById('bt').style.display = 'none';
	//var d_node = document.getElementById(elementID);
	elementID = "div";
	filename = "deletePreacher.php";
	str = "?id="+document.getElementById("id").value;
	post = false ;
	conf = confirm(" هل أنت متأكد");
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
<p>جميع الحقوق محفوظة 2016 &copy;</div>
</div>
</body>
</html>
