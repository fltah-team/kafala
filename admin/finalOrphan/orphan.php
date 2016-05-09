
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
<table align="center">
    <tr>
        <td>
            <div class="container" id="main" role="main" align="center" >
            <ul class="menu" >
                <li><a href="#">الأيتام</a>    
                    <ul class="submenu">
                        <li><a href="showOrphans.php">عرض الكل  </a></li>
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
                        <li><a href="../kafala/showKafala.php">اضافة كفالة جديدة</a></li>
                        
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
            </ul>
            
            
            </div>
        </td>
    </tr>
</table>
<!-- main -->
<div class="main">

<div class="login">
<h2 align="center">بيانات يتيم </h2>
<br />
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
<br />
<table width="400" border="0" align="center">
<form action="orphanInfo.htm" method="post">
  <tr>
     <td align="center"width="98" align="center"><input class="bt" type="submit" name="button" id="button" value="بحث طالب" /></td>
     <td align="center"width="101" align="center"><label for="textfield"></label>
      <input class="textFiels" name="textfield" type="text" id="textfield" size="10" />
      </form></td>
     <td align="center"width="187" align="center" >
    <form action="addOrphan.htm" method="post">
    <input class="bt" type="submit" name="button" id="button" value="اضافة طالبجديد" />
    </form>
    </td>
  </tr>
  
</table>
<br />
<h2 align="center">عرض بيانات الطلاب </h2>	
<table width="500" border="0" align="center">
    <form action="showOrphans.php" method="get">
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
         
     </td>
     <td align="center" ></td>
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
