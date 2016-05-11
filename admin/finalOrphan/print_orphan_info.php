<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    
<link href="../../style/pageStyle.css" rel="stylesheet" type="text/css" />
    <style >
        *{
            font-family:Droid Arabic Kufi;
        }
        .cont{
            width: 1000px;
            background: #cccccc; 
            margin: 0 auto;
            padding: 50px 0 10px 0;
        }
    </style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>الهيئة الخيرية الاسلامية للرعاية الاجتماعية</title>
</head>

<body>
<?php 
        include('../../utils/db.php');
        include('../../utils/siblingAPI.php');
	include('../../utils/finalOrphanAPI.php');
        include('../../utils/sponsorAPI.php');
        include ('../../utils/kafalaAPI.php');
        include ('../../utils/error_handler.php');
	if(!isset($_GET['id']) || $_GET['id']=="" ){
            fp_err_show_record("اليتيم");
        }
        if((int)$_GET['id']==0){
            header("location:showOrphans.php?name=".$_GET['id']);
        }
        else{
	$id = (int)$_GET['id'];
        } 
	$orphan = fp_final_orphan_get_by_id($id);
        if(!$orphan) fp_err_show_record("اليتيم");
        $sibilings = fp_sibiling_get($id);
        $siblings_male = fp_sibiling_get_for_gender($id," and sex = 1 ");
        $siblings_female = fp_sibiling_get_for_gender($id," and sex = 0 ");
        $kafalas = fp_sposored_get_kafala($id);
	$male_count = @count($siblings_male);
        $female_count = @count($siblings_female);
	if(!$orphan) fp_err_show_record("اليتيم");	
	$scount = @count($sibilings);
        include('../../utils/stateAPI.php');
	$states = fp_states_get();
	$scount = count($states);
        $curr_state  = fp_states_get_by_id($orphan->residence_state);
        
        
?>
<div class="cont" >
    <table width="80%" border="0" align="center">
        <tr>
            <td align="center"><img src="../../images/logo.png" /></td>
            <td align="center"><h2>الهيئة الخيرية الاسلامية للرعاية الاجتماعية</h2></td>
            <td align="center"  ><img src="../../images/logo.png" /></td>
        </tr>
    </table>
<h2 align="center">بيانات يتيم </h2>
<br />
<table width="85%" border="0" align="center">

  <tr align="center">
    <td width="15%" align="right">
        <input size="10" type="text" name="s_gender" value="<?php echo fp_sponsor_get_by_id($orphan->warranty_organization)->name;?>"/> 
    </td>
    <td width="15%">جهة الكفالة</td>
    <td width="15%" align="right">
        <?php fp_select_status_get_by_id($orphan->state); ?>
    </td>
    <td width="15%" align="center">الحالة</td>
     <td width="15%" align="right">
         <input class="textFiels" name="name3" type="text" disabled tabindex="4" id="id" size="10" maxlength="30"  value="<?php echo $orphan->id?>" />
     </td>    
     <td width="35%" align="center">الرقم</td>
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
        <input size="10" type="text" name="s_gender" value="<?php echo "khg".$orphan->sex?>"/>    
    </td>
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
        <?php fp_select_mother_status_get_by_id($orphan->mother_state) ?>
    	</td>
  	<td align="right">حالتها الاجتماعية

  	  </td>
    
    <td align="right">
    <?php fp_select_date_get_by_id(1940, 'm', $orphan->mother_Birth_date)?>
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
    <td align="right">
        <?php fp_select_date_get_by_id(1940, 'f', $orphan->father_dead_date)?>
    </td>
    <td align="center">تاريخ وفاة والد اليتيم</td>
  </tr>
    
</table>

<br />

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
  	<td width="13%" align="right"><input class="textFiels" name="district" type="text" id="district" size="8" maxlength="30" value="<?php echo $orphan->District?>"/></td>
  	<td width="11%" align="right">الحي</td>
    <td width="22%" align="right"><input class="textFiels" name="city" type="text" id="city" size="10" maxlength="30"  value="<?php echo $orphan->city?>" /></td>
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
    <td align="right"><input class="textFiels" name="hno" type="text" id="hno" size="10" maxlength="30"  value="<?php echo $orphan->house_no?>"/></td>
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
<h2 align="center"><b><span dir="RTL" lang="AR-SA">عدد افراد الاسرة </span>
</b></h2>
<table width="60%" border="0" align="center" id=" ">
  <tr align="center">
      <td width="29%" align="right"><h2><?php echo $female_count?></h2></td>
  	<td width="11%" align="right">الاناث </td>
        <td width="16%" align="right"><h2><?php echo $male_count?></h2></td>
    <td width="15%" align="center"> الذكور</td>
    <td width="15%" align="right"><h2><?php echo $male_count+$female_count?></h2></td>
    <td width="14%" align="center">  عدد الاخوان  </td>
  </tr>
  
  
    <table id="sibilings" width="70%" border="3" align="center" style="border-collapse: collapse">
          <script type='text/javascript'>
          if(<?php echo $male_count+$female_count?> == 0)document.getElementById('sibilings').style.display = 'none';
          </script>
   <br />
   <tr >
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
   <tr >
    <td align="center"><?php fp_get_state($one_sibling->state)?></td>
    <td align="center"><?php echo $one_sibling->birth_date ?></td>
    <td align="center"><?php if($one_sibling->sex == 1) echo "ذكر"; else echo "أنثى";?></td>
    <td align="center"><?php echo $one_sibling->name ?></td>
    <td align="center"><?php echo $i+1 ?></td>
  </tr>
   <?php } ?>
   
</table>


</table>

<!--   Learning   -->


<br />
<h2 align="center" class="auto-style1">التعليم</h2>
<br />
<table width="85%" border="0" align="center" id=" ">
  <tr align="center">
  	<td width="11%"></td>
  	<td width="9%" align="right">&nbsp;</td>
  	<td width="41%" align="right"><input name="teachingr" type="text" readonly="readonly"  class="textFiels" id="teachingr" value="<?php echo $orphan->nonstuding_cause?>" size="10" maxlength="30" />
  	  </td>
	<td width="14%" align="center">السبب</td>
        <td width="14%" align="center">
        <select class="select" name="learning" id="learning">
      <option  value="1">يدرس</option>
      <option  value="0">لا يدرس</option>
    </select>
    </td>
        <td width="11%">الحالة الدراسية</td>
        
        
  </tr>
  
  <tr>
    <td>&nbsp;</td>
  </tr>
  
  <tr align="center">
  	<td></td>
    <td></td>
  	
	<td width="41%" align="right"><input class="textFiels" name="illt" type="text" id="school" size="30" maxlength="30" value="<?php echo $orphan->school_name?>"  /></td>
        <td width="14%" align="center">اسم المدرسة</td>
        <td>&nbsp;</td>
  	<td style="height: 29px">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  
  </table>
  
  <table width="85%" border="0" align="center" id=" ">
    <tr align="center">
  	<td width="26%" align="right">جزء <input class="textFiels" name="class" type="text" id="quran" size="10" maxlength="10" value="<?php echo $orphan->quran_parts?>" /></td></td>
  	<td width="23%" align="right">مستوى حفظ القرآن</td>
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

  <table width="80%" border="0" align="center" id=" ">

  <tr align="center">
  	<td width="0%"></td>
  	<td width="0%" align="right"></td>
  	<td width="35%" align="left"><input class="textFiels" name="illt" type="text" id="illt" size="10" maxlength="30" value="<?php echo $orphan->ill_cause?>"  /></td>
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
            echo '<option id="goodill"  value="1">جيدة</option>
            <option id="badill"   value="0">سيئة</option>';
            
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

<table width="70%" border="0" align="center" id=" ">
  <tr>
      <td>&nbsp;</td>
      
      <td><input class="textFiels" disabled name="level" type="text" id="level" size="10" maxlength="30" value="<?php echo $orphan->data_entery_date?>"/</td>
    <td>التاريخ</td>
              <td align="center"><input class="textFiels" disabled name="level" type="text" id="level" size="10" maxlength="30" value="<?php echo $orphan->data_entery_name?>"/</td>
    <td>مدخل البيانات   </td>
  </tr>
   
    <tr>
       <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="center"></td>    
      <tr>
      <td>&nbsp;</td>
      
      <td><input class="textFiels" disabled name="level" type="text" id="level" size="10" maxlength="30" value="<?php echo $orphan->head_dep_date?>"/>   </td>
    <td>التاريخ</td>
              <td align="center"><input class="textFiels" disabled name="level" type="text" id="level" size="10" maxlength="30" value="<?php echo $orphan->head_dep_name?>"/</td>
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
  </form>
</div>
    <script type="text/javascript" >
    window.print();
    </script>
</body>
</html>
