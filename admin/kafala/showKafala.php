<?php
	include('../../utils/db.php');
	include('../../utils/kafalaAPI.php');
        include('../../utils/sponsorAPI.php');
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
        
        $sponsorships = fp_kafala_get(" ORDER BY `date` LIMIT $start, $limit");
        

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

    <tr align="center" class="table_header">
    <td width="5%">عرض </td>
    <td width="10%">الى</td>
    <td width="20%">من</td>
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
    <td  onclick="window.location.href='kafala.php?id='+<?php echo $sponsorship->id?>"><img alt="عرض" align="middle" width="22px"  src="../../images/style images/show_icon.png" style="padding-left:5px" /></td>
    <td><?php echo $sponsorship->last_date?></td>
    <td><?php echo $sponsorship->date?></td>
    <td><?php echo $sponsorship->saving?></td>
    <td><?php echo $sponsorship->amount?></td>
    <td><?php fp_get_sponsored($sponsorship->sponsored)?></td>
    <td><?php echo fp_sponsor_get_by_id($sponsorship->sponsor)->name?></td>
    <td><?php echo $sponsorship->id?></td>
  </tr>
  <?php } 
        fp_db_close();	?>
    <tr align="center" > 
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td><button name="add" class="info_bt" style="padding: 0 10px;" type="button" onclick="window.location.href = 'print_kafalas.php'"    > طباعة   <img align="right" src="../../images/style images/print_icon.png" style="padding-left:5px" /></button></td>
    <td></td>
  </tr>
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
