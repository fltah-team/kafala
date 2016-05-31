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
<?php 
        include('../../utils/db.php');
        include('../../utils/sponsorAPI.php');	
        include('../../utils/stateAPI.php');
        include('../../utils/error_handler.php');
	$sponsors = fp_sponsor_get();
	$scount =  @count($sponsors);
        $states = fp_states_get();
        $stcount = @count($states);
?>
<h1 align="center" class="adress" dir="rtl">الطلاب</h1>
<br />
<table dir="rtl" width="50%" border="0" align="center">
    <tr align="center">
        <td>
            <button onclick="window.location.href = '../student/addStudent.php'" >
                <img align="right" src="../../images/style images/add_icon.png" style="padding-left:5px" />
                اضافة طالب جديد
            </button>
        </td>
        <td>
            <input id="s_tf" type="text" size="10px" class="textFiels"  />
        </td>
        <td>
            <button class="bt" onclick="window.location.href = '../finalStudent/studentInfo.php?id='+document.getElementById('s_tf').value" >
                <img align="right" src="../../images/style images/search_icon.png" style="padding-left:5px" />
                بحث
            </button>
        </td>
    </tr>
</table>
<h2 align="center">عرض بيانات الأيتام </h2>	
<table width="500" border="0" align="center">
    <form action="showStudents.php" method="get">
  <tr>
      <td align="center">
        <select class="select" tabindex="1" name="sponsor" id="sponsor">
            <option value="-1">الكل</option>
    <?php for($i = 0 ; $i < $scount ; $i++){
		$sponsor = $sponsors[$i] ; ?>
      <option value="<?php echo $sponsor->id?>"><?php echo $sponsor->name?></option>
	<?php } ?>
    </select>
    </td>
     <td align="center">جهة الكفالة</td>
     <td align="center" >
        <select tabindex="0" class="select" name="status" id="status">
            <option value="-1">الكل</option>
            <option value="1">مكفول</option>
            <option value="2">قيد التسويق</option>
            <option value="3">متوقف</option>
        </select>
    </td>
     <td align="center">الحالة</td>
    </tr>
    
<tr>
    
     <td align="center" >&nbsp;</td>
    </tr>
    
    
  <tr>
     <td align="center" >
         <select class="select" tabindex="1" name="states" id="states">
            <option value="-1">الكل</option>
    <?php for($i = 0 ; $i < $stcount ; $i++){
		$state = $states[$i] ; ?>
      <option value="<?php echo $state->id?>"><?php echo $state->name?></option>
	<?php } ?>
    </select>
     </td>
     <td align="center" >الولاية</td>
     <td align="center" >
         <select tabindex="0" class="select" name="gender" id="gender">
            <option value="-1">الكل</option>
            <option value="1">ذكر</option>
            <option value="0">أنثى</option>
        </select>
     </td>
     <td align="center" >الجنس</td>
    </tr>

        <tr>
       <td align="center" >&nbsp;</td>
    </tr>
        
<tr>
     <td align="center" >
         <select tabindex="0" class="select" name="order" id="order">
            <option value="1">الرقم</option>
            <option value="0">الإسم</option>
        </select></td>
     <td align="center" >ترتيب حسب</td>
     <td align="center" dir="ltr">
         <table >
             <tr>
                 <td>
                     <select tabindex="0" class="select" name="age2" id="age2">
                        <?php 
                        echo '<option value="-1">الكل</option>';
                        for($i = 0 ; $i<= 25 ; $i++ )
                        echo "<option value='$i'>$i</option>";
                        ?>
                    </select>
                 </td>
                 <td>الى</td>
                 <td>
                      <select tabindex="0" class="select" name="age" id="age">
                        <?php 
                        echo '<option value="-1">الكل</option>';
                        for($i = 0 ; $i<= 25 ; $i++ )
                        echo "<option value='$i'>$i</option>";
                        ?>
                    </select>
                 </td>
                 <td>من</td>
            </tr>
         </table>        
     </td>
     <td align="center" >العمر</td>
     <td align="center" >&nbsp;</td>
    </tr>
   
  <tr>
       <td align="center" >&nbsp;</td>
    </tr>
    

    
	    <tr>
     <td align="center" >&nbsp;</td>
     <td align="center" ><input class="bt" type="submit" name="button2" id="" value="عرض" /></td>
     <td align="center" >&nbsp;</td>
     <td align="center" >&nbsp;</td>
    </tr>
    
  </form>
</table>
<div id="footer">
<p>جميع الحقوق محفوظة 2016 &copy;</div>
</div>
</div>
</body>
</html>
