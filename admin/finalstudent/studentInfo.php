<?php include '../auth.php';?>
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
<h2 align="center">بيانات طالب </h2>
<br />
<?php
        include('../../utils/db.php');
        include('../../utils/finalStudentAPI.php');
        include('../../utils/siblingAPI.php');
        include('../../utils/sponsorAPI.php');
        include('../../utils/kafalaAPI.php');
        include ('../../utils/error_handler.php');
	if(!isset($_GET['id']) || $_GET['id']=="" ){
            fp_err_show_record("اليتيم");
        }
        if((int)$_GET['id']==0){
            header("location:showStudents.php?name=".$_GET['id']);
        }
        
	$id = $_GET['id'];
	$orphan = fp_final_student_get_by_id($id);
	if(!$orphan) fp_err_show_record("الطالب");
        
        $sibilings = fp_sibiling_get($orphan->phone1);
        $siblings_male = fp_sibiling_get_for_gender($id," and sex = 1 ");
        $siblings_female = fp_sibiling_get_for_gender($id," and sex = 0 ");
        $kafalas = fp_sposored_get_kafala($id,2);
        $male_count = @count($siblings_male);
        $female_count = @count($siblings_female);	
	$scount = @count($sibilings);
    include('../../utils/stateAPI.php');
	$states = fp_states_get();
	$scount = count($states);
        $curr_state  = fp_states_get_by_id($orphan->residence_state);
        
        
?>
<br />
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
	<td>
        </td>   
    <td align="right">
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
    </td>
  	<td align="center">الجنس</td>
    
        <td align="right">
            <?php fp_select_date_get_by_id(1990, null, $orphan->birth_date)?>
        
      </td>
    <td align="center">تاريخ الميلاد</td>
  </tr>
  

    <tr>
    
    <td>&nbsp;</td>
  </tr>
    <tr align="center">
  	<td align="right"><input class="textFiels" name="lw" type="text" id="lw" size="10" maxlength="30" value="<?php echo $orphan->father_work?>" /></td>
    <td>عمله السابق</td>
    <td align="right"><input class="textFiels" name="dr" type="text" id="dr" size="10" maxlength="30" value="<?php echo $orphan->father_dead_cause?>" /></td>
    <td align="right">سبب الوفاة</td>
    <td align="right">
        <?php fp_select_date_get_by_id(1940, 'f', $orphan->father_dead_date)?>
    </td>
    <td align="center">تاريخ وفاة والد اليتيم</td>
  </tr>
    <tr>
    
    <td>&nbsp;</td>
  </tr>
      <tr align="center">
  	<td align="right"><input class="textFiels" value="<?php echo $orphan->sisters_no?>" name="lw" type="text" id="sisters_no" size="10" maxlength="30" /></td>
    <td>الاناث</td>
    <td align="right"><input class="textFiels" value="<?php echo $orphan->brothers_no?>" name="dr" type="text" id="brothers_no" size="10" maxlength="30" /></td>
    <td align="right">الذكور</td>
    <td align="right">
        <input class="textFiels" disabled name="lw" value="<?php echo $orphan->sisters_no+$orphan->brothers_no?>" type="text" id="f_mem" size="10" maxlength="30" />
    </td>
    <td align="center">عدد الاخوان</td>
  </tr>  
</table>

<br />
<h2 align="center"> الكفالات </h2>

<br />
     
<table align="center" width="60%" >
    <tr>
        <td><input class="textFiels" id="saving" disabled size="10px" value="<?php echo $orphan->saving ?>" ></input></td>
        <td>اجمالي الادخار</td>
        <td><input class="textFiels" id="saving" disabled size="10px" value="<?php echo $orphan->last_sponsorship_date ?>" ></input></td>
        <td>تاريخ اخر كفالة</td>
    </tr>
</table>

<br />

<div id="db_err" style="display: none" class="alert-box error"><span>خطأ: </span>هناك مشكلة في الاتصال بقاعدة البيانات    </div>

<div id="no_kafala" style="display: none" class="alert-box warning"><span>تنبيه: </span>لا يوجد كفالات لعرضها</div>

<div id="kafalas" style="display: none">
    <?php
        $kcount = @count($kafalas);
        
    ?>
    <table width="60%" border="0" align="center" class="table">
    <tr align="center" class="table_header">
    <td width="10%">الى</td>
    <td width="20%">من</td>
    <td width="5%">الادخار</td>
    <td width="5%">المبلغ</td>
    <td width="5%">الرقم</td>
  </tr>
  <?php 
        
                
  	for($i = 0 ; $i < $kcount ; $i++){
                $kafala = $kafalas[$i];
		$sponsorship = fp_kafala_get_by_id($kafala->sponsorship);                
  ?>
    <tr align="center" class="table_data<?php echo $i%2?>">
    <td><?php echo $sponsorship->last_date?></td>
    <td><?php echo $sponsorship->date?></td>
    <td><?php echo $sponsorship->saving?></td>
    <td><?php echo $sponsorship->amount?></td>
    <td><?php echo $i+1?></td>
  </tr>
  <?php } 
  
	fp_db_close();
        ?>
  </table>

</div>

<?php
        if($kafalas == -1 )echo "<script type='text/javascript'>document.getElementById('db_err').style.display = 'block';</script>";
        else if($kafalas == 0) echo "<script type='text/javascript'>document.getElementById('no_kafala').style.display = 'block';</script>";
        else echo "<script type='text/javascript'>document.getElementById('kafalas').style.display = 'block';</script>";
        
    ?>     
     

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
       <td width="10%" style="height: 29px"><input value="<?php echo $orphan->major?>" class="textFiels" name="class" type="text" id="major" size="10" maxlength="30" /></td>
       <td width="20%" style="height: 29px" id="class_lable">التخصص</td>
       <td width="10%" align="right" style="height: 29px"><input value="<?php echo $orphan->school_name?>" class="textFiels" name="school" type="text" id="school" size="20" maxlength="30" /></td>
       <td width="20%" align="center" style="height: 29px" id="school_lable">اسم المدرسة/الجامعة</td>
       <td width="10%" align="center" style="height: 29px"><input class="textFiels" value="<?php echo $orphan->level?>" name="level" type="text" id="level" size="10" maxlength="30" /></td>
       <td width="20%" style="height: 29px" id="level_lable">المرحلة</td>
        
        
  </tr>
  
  <tr>
    <td>&nbsp;</td>
  </tr>
  
  <tr align="center">
  	<td style="height: 29px"><input class="textFiels" value="<?php echo $orphan->last_result?>"  name="class" type="text" id="last_result" size="10" maxlength="30" /></td>
        <td style="height: 29px" id="class_lable">اخر نتيجة للطالب</td>
  	<td  align="right" style="height: 29px"><input value="<?php echo $orphan->path?>"  class="textFiels" name="school" type="text" id="path" size="20" maxlength="30" /></td>
        <td " align="center" style="height: 29px" id="school_lable">الكلية/المساق</td>
    <td style="height: 29px"><input class="textFiels" value="<?php echo $orphan->year?>"  name="class" type="text" id="class" size="10" maxlength="30" /></td>
        <td style="height: 29px" id="class_lable">الصف</td>    
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
   <tr align="center">
       <td style="height: 29px"><?php fp_select_date_get_by_id(2010, 'g',$orphan->expected_grad)?></td>
        <td style="height: 29px" id="class_lable"> تاريخ التخرج المتوقغ</td>
        <td  align="right" style="height: 29px"><?php fp_select_date_get_by_id(2010, 'ss',$orphan->study_date_start)?></td>
        <td align="center" style="height: 29px" id="school_lable">تاريخ بدية الدراسة</td>
        <td align="right" style="height: 29px"><select class="select" name="yearnum" id="study_year_no">
	    <?php
        echo "<option value='".$orphan->study_year_no."'>$orphan->study_year_no</option>'";
	  for($i=2 ; $i <= 7 ; $i++)
  	  echo "<option value='".$i."'>$i</option>'";
	  ?>
	    </select></td>
        <td style="height: 29px" id="class_lable">عدد سنوات الدراسة</td>    
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
    <tr align="center">
	<td  align="center">&nbsp;</td>
	<td  align="center">&nbsp;</td>
	<td  align="center">&nbsp;</td>
	<td  align="center">&nbsp;</td>
    <td align="right">جزء
	  <select class="select" name="quran" id="quran">
	    <?php
      echo "<option value='".$orphan->quran_parts."'>$orphan->quran_parts</option>'";
	  for($i=0 ; $i <= 30 ; $i++)
  	  echo "<option value='".$i."'>$i</option>'";
	  ?>
	    </select></td>
    <td  align="center">مستوى حفظ القران</td>
        </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  
</table>


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
      
      <td align="center"><input class="textFiels" disabled name="level" type="text" id="user_d" size="10" maxlength="30" value="<?php echo $orphan->data_entery_date?>"/></td>
    <td align="center">التاريخ</td>
    <td align="center"><input class="textFiels" disabled name="level" type="text" id="user" size="10" maxlength="30" value="<?php echo $orphan->data_entery_name?>"/></td>
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
<table align="center" width="40%" >
  <tr>
      <td align="center"><button name="add" class="del_bt"  type="button" onclick="del_ajax()"> حذف <img  align="right" src="../../images/style images/delete_icon.png" style="padding-left:5px" /></button></td>
      <td>&nbsp;</td>
    <td><button name="add" class="info_bt"  type="button" onclick="window.open('print_student_info.php?id=<?php echo $orphan->id?>')"    > طباعة   <img align="right" src="../../images/style images/print_icon.png" style="padding-left:5px" /></button></td>
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
	filename = "deleteStudent.php";
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
