<?php
	include('../../utils/db.php');
	include('../../utils/kafalaAPI.php');
        include('../../utils/orphanAPI.php');
        include('../../utils/error_handler.php');
        $start=0;
    $limit=20;
    $total_results = fp_kafala_get_num_rows();
        $total=ceil($total_results/$limit);
    if(!isset($_GET['page']) || $_GET['page'] == '' || (int)$_GET['page'] == 0 || $_GET['page']>$total)
    {
    $page=1;
    }
    else{
    $page=$_GET['page'];
    $start=($page-1)*$limit;
    }
        
        $sponsorships = fp_kafala_get("LIMIT $start, $limit");
        fp_db_close();	
        

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
                            <form method="get" action="../finalOrphan/orphanInfo.php" >
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
                        <li><a href="../states/showState.php">عرض الولايات  </a></li>
                        <li><a href="../states/addState.php">اضافة ولاية جديدة</a></li>
                        
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
<h1 align="center" class="adress"> عرض الكفالات </h1>
<br />
<?php
    //if($users[0] == NULL ) die($users[1]) ;
        
        if($sponsorships == 0 ||$sponsorships == -1 ) {
            fp_err_show_records("كفالات");
        }
        $scount = @count($sponsorships);
        ?>

<table width="85%" border="0" align="center" class="table">
        <tr align="center" >
 <td > </td>
    <td ></td>    
    <td></td>
    <td ></td>
    <td ></td>
    <td ><button name="add" class="bt"  type="button" onclick="window.print('footer')"    > طباعة   <img align="right" src="../../images/style images/print_icon.png" style="padding-left:5px" /></button></td>
    
    <td ></td>
        <td ></td>
  </tr>
    <tr align="center" class="table_header">
    <td width="5%">عرض </td>
    <td width="10%">عدد الشهور</td>
    <td width="20%">التاريخ</td>
    <td width="5%">الادخار</td>
    <td width="5%">المبلغ</td>
    <td width="20%">المكفولين</td>
    <td width="30%">جهة الكفالة</td>
    <td width="5%">الرقم</td>
  </tr>
  <?php 
        
  	for($i = 0 ; $i < $scount ; $i++){
		$sponsorship = $sponsorships[$i];
  ?>
    <tr align="center" class="table_data<?php echo $i%2?>">
    <td  onclick="window.location.href='kafala.php?id='+<?php echo $sponsorship   ->id?>"><img alt="عرض" align="middle" width="22px"  src="../../images/style images/show_icon.png" style="padding-left:5px" /></td>
    <td><?php echo $sponsorship->month_no?></td>
    <td><?php echo $sponsorship->date?></td>
    <td><?php echo $sponsorship->saving?></td>
    <td><?php echo $sponsorship->amount?></td>
    <td><?php fp_get_sponsored($sponsorship->sponsored)?></td>
    <td><?php echo $sponsorship->sponsor?></td>
    <td><?php echo $sponsorship->id?></td>
  </tr>
  <?php } ?>
  </table>

<br />
<div class="pagination">
    <ul class='page'>
  <?php
    
if($page>1)
{
    //Go to previous page to show previous 10 items. If its in page 1 then it is inactive
    echo "<a href='?page=".($page-1)."' class='button'>السابق</a>";
}

//show all the page link with page number. When click on these numbers go to particular page.
        for($i=1;$i<=$total;$i++)
        {
            if($i==$page) { echo "<li class='current'>".$i."</li>"; }
             
            else { echo "<li><a href='?page=".$i."'>".$i."</a></li>"; }
        }
   if($page!=$total)
{
    ////Go to previous page to show next 10 items.
    echo "<a href='?page=".($page+1)."' class='button'>التالي</a>";
} 

?>
</ul>
</div> 
<div id="footer">
  <p>جميع الحقوق محفوظة 2016 &copy;</p>
</div>
</div>
</body>
</html>
