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
?>