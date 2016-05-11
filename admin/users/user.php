
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

<div class="login">
    <h2 align="center" class="adress">بيانات مستخدم </h2>
<br />
<?php
	include('../../utils/db.php');
	include('../../utils/usersAPI.php');
        include('../../utils/error_handler.php');
	if(!isset($_GET['id']) || $_GET['id']=="" || (int)$_GET['id']==0){
            fp_err_show_record("المستخدم");
        }

	$id = (int)$_GET['id']; 
	$user = fp_users_get_by_id($id);
	fp_db_close();
	if(!$user)fp_err_show_record("المستخدم");
?>
<form  method="post">
	<table width="60%" border="0" align="center">
  <tr>
      <td align="center" width="58%"><input disabled class="textFiels" name="impt" type="text" id="name" size="30" maxlength="30" value="<?php echo $user->name?>" /></td>
    <td align="center" width="42%">الاسم بالكامل</td>
    </tr>
      <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
      <td align="center"><input class="textFiels" name="un" type="text" disabled="disabled" id="un" size="30" maxlength="30" value="<?php echo $user->username?>" /></td>
    <td align="center">اسم المستخدم</td>
    </tr>
      <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="center"><input name="un" type="text" disabled="disabled" class="textFiels" id="un" value="
      <?php
	  fp_get_user_type($user->type);
	  ?>
    " size="30" maxlength="30" /></td>
    <td align="center">نوع المستخدم</td>
    </tr>
      <tr>
          <td align="center"><h2 style="color: #ff0000">تغيير كلمة المرور</h2></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="center"><input class="textFiels" name="impt" type="password" id="pass1" size="30" maxlength="30" /></td>
    <td align="center">كلمة المرور</td>
  </tr>
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="center"><input class="textFiels" name="impt" type="password" id="pass2" size="30" maxlength="30" /></td>
    <td align="center">تكرار كلمة المرور</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
      <td align="center"><button class="add_bt" name="add" type="button" onclick="IsEmpty()" >تغيير<img align="right" src="../../images/style images/update_icon.png" style="padding-left:5px" />  </button></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
    </table>
</form>
</div>
    <div style="margin: 0 auto; text-align: center ; width: 60%;" id="reponse">
    <span id="res_stattus"></span>
</div>
    <script type="text/javascript" >
        function IsEmpty(){ 
        var text = document.getElementsByName('impt');
        var empty_checker = 0 ;
        for(var i = 0 ; i< text.length ; i++){
           if(text[i].value == ''){
               text.item(i).style.color = "#ff0000" ;
               text.item(i).setAttribute("placeholder","هذا الحقل فارغ");
               empty_checker++;
           }
        }
        if(empty_checker > 0 )alert("هناك حقول يجب تعبئتها");
        else check_pass(document.getElementById("pass1").value,document.getElementById("pass2").value);
}
        
function check_pass(p1,p2){
        if(p1.length < 8|| p2.length < 8)alert("كلمة المرور قصيرة ,, الحد الدنى 8 حروف");
        else if(p1 != p2 ){
            alert("كلمات المرور غير متطابقة .. الرجاء التأكد");
            pass1.value = "";
            pass2.value = "";
        }
        else ajax();
}

function ajax()
{
    var ajax;
	//var d_node = document.getElementById(elementID);
	elementID = "div";
	filename = "updateUser.php";
	str = 'id=<?php echo $user->id?>&';
            text = document.getElementsByName('impt');
            for(var i = 0 ; i< text.length ; i++){
           str += text[i].getAttribute('id')+'='+text[i].value+'&';
        }
	post = true ;
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
			document.getElementById("reponse").innerHTML = ajax.responseText;
			//window.location.href = "showUsers.php";
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

    </script>
<div id="footer">
<p>جميع الحقوق محفوظة 2016 &copy;</p>
</div>
</div>
 
</body>
</html>
