<?php


$fp_host = 'localhost';
$fp_dbname = 'kafala';
$fp_username = 'root';
$fp_password = '';

$fp_handle = @mysql_connect($fp_host,$fp_username,$fp_password);

if(!$fp_handle)	die("connection prolem");

$sel = mysql_select_db($fp_dbname);

if(!$sel){
	fp_db_close();
	die("selection prolem");
	}
//die("OK");
//mysql_close($fp_handle);
@mysql_query("SET NAMES 'utf8'");

function fp_db_close(){
	global $fp_handle;
	@mysql_close($fp_handle);
	}

        function fp_get_state($state){
            switch($state){
		case 1 :
                    echo "مكفول";
                    break;
                case 2 :
                    echo "قيد التسويق";
                    break;
		case 3 :
                    echo "متوقف";
        }
        }
       
   function fp_get_sponsored($sponsored){
            switch($sponsored){
		case 1 :
                    echo "الأيتام";
                    break;
                case 2 :
                    echo "الطلاب";
                    break;
		case 3 :
                    echo "الدعاة/المقرئين/المعلمين";
                    break;
                case 4 :
                    echo "الأسر";
        }
        }
 
 
   function fp_get_user_type($user_type){
            switch($user_type){
		case 1 :
                    echo "مدير نظام";
                    break;
                case 2 :
                    echo "موظف في قسم الأيتام";
                    break;
		case 3 :
                    echo "موظف في قسم الحسابات";
                    break;
                case 4 :
                    echo "مستخدم عرض البيانات";
        }
   }
?>