<?php
	include('../../utils/db.php');
	include('../../utils/kafalaAPI.php');
        include('../../utils/sponsorAPI.php');
        include('../../utils/error_handler.php');       
        $sponsorships = fp_kafala_get();
        

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>الهيئة الخيرية الاسلامية للرعاية الاجتماعية</title>
</head>

<body>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style >
        *{
            font-family:Droid Arabic Kufi;
        }
        body{
            background: #cccccc;
        }
        .cont{
            width: 1000px; 
            margin: 0 auto;
            padding: 50px 0 10px 0;
            background-color: white;
        }
    </style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>الهيئة الخيرية الاسلامية للرعاية الاجتماعية</title>
</head>

<body>
<div class="cont" >
    <table width="80%" border="0" align="center">
        <tr>
            <td align="center"><img src="../../images/logo.png" /></td>
            <td align="center"><h2>الهيئة الخيرية الاسلامية للرعاية الاجتماعية</h2></td>
            <td align="center"  ><img src="../../images/logo.png" /></td>
        </tr>
    </table>
<h1 align="center" class="adress"> عرض الكفالات </h1>
<br />
<?php
    //if($users[0] == NULL ) die($users[1]) ;
        
        if($sponsorships == 0 ||$sponsorships == -1 ) {
            fp_err_show_records("كفالات");
        }
        $scount = @count($sponsorships);
        ?>

<table width="90%" border="1" style="border-collapse: collapse  ; border: 2px solid; " align="center" >
    <tr align="center" style="border: 3px solid;">
    <td width="15%">الى</td>
    <td width="15%">من</td>
    <td width="5%">الادخار</td>
    <td width="10%">المبلغ</td>
    <td width="20%">المكفولين</td>
    <td width="30%">جهة الكفالة</td>
    <td width="5%">الرقم</td>
  </tr>
  <?php 
        
  	for($i = 0 ; $i < $scount ; $i++){
		$sponsorship = $sponsorships[$i];
  ?>
    <tr align="center" class="table_data<?php echo $i%2?>">
    <td><?php echo $sponsorship->month_no?></td>
    <td><?php echo $sponsorship->date?></td>
    <td><?php echo $sponsorship->saving?></td>
    <td><?php echo $sponsorship->amount?></td>
    <td><?php fp_get_sponsored($sponsorship->sponsored)?></td>
    <td><?php echo fp_sponsor_get_by_id($sponsorship->sponsor)->name?></td>
    <td><?php echo $sponsorship->id?></td>
  </tr>
  <?php } 
        fp_db_close();	?>
  
  </table>

<br />

</div> 
</body>
</html>
