<?php
 function fp_err_show_record($name){
     echo '
                <div style="text-align:center;color:#fff;">
                <div class="alert-box warning"><span>تنبيه: </span> تعذر العثور على '.$name.'
                </div>
                 </div>
                <div id="footer">
                <p>جميع الحقوق محفوظة 2016 &copy;</p>
               </div>';
     die();
 }
 function fp_err_show_records($name){
 
 echo '
             <div style="text-align:center;color:#fff;">
                <div class="alert-box warning"><span>تنبيه: </span>لا يوجد '.$name.' لعرضها
                </div>    
                
                </div>
                <div id="footer">
                <p>جميع الحقوق محفوظة 2016 &copy;</p>
               </div>';
            die() ;
}
 function fp_err_add_fail($name){
     echo '<div id="success_notice"   class="alert-box error">
     <span>خطأ :   </span>لم تتم عملية اضافة '.$name.'</div>';
     die();
 }
 function fp_err_add_succes($name,$id=null){
 echo '<div id="success_notice" name="'.$id.'"  class="alert-box success"><span >نجاح :   </span>تمت اضافة '.$name.' بنجاح</div>';
 die();
 }
 
 function fp_err_orphan_add_succes($name,$id=null){
 echo '<div id="success_notice" name="'.$id.'"  class="alert-box success"><span >نجاح :   </span>تمت اضافة '.$name.' بنجاح
      <br />
      <a href="../orphan/orphanInfo.php?id='.$id.'" >اضافة افراد الاسرة</a>
      </div>';
 die();
 }
  function fp_err_preacher_add_succes($name,$id=null){
 echo '<div id="success_notice" name="'.$id.'"  class="alert-box success"><span >نجاح :   </span>تمت اضافة '.$name.' بنجاح
      <br />
      <a href="../preacher/preacherInfo.php?id='.$id.'" >اضافة الخبرات والمؤهلات</a>
      </div>';
 die();
 }
 function fp_err_upadte_fail($name){
     echo '<div id="success_notice"   class="alert-box error">
     <span>خطأ :   </span>لم تتم عملية تعديل بيانات '.$name.'</div>';
     die();
 }
 function fp_err_update_succes($name,$id=null){
 echo '<div id="success_notice" name="'.$id.'"  class="alert-box success"><span >نجاح :   </span>تم تعديل بيانات '.$name.' بنجاح</div>';
 die();
 }
 
 function fp_err_delete_succes($name){
 echo '<div id="success_notice"  class="alert-box success"><span>نجاح :   </span>تم حذف '.$name.' بنجاح</div>';
 die();   
 }
 function fp_err_delete_fail($name){
     echo '<div id="success_notice"   class="alert-box error" >
     <span>خطأ :   </span>لم تتم عملية حذف '.$name.'</div>';
     die();
 }
 function fp_select_status_get() {
     echo '<select tabindex="0" class="select" name="status" id="status">
      <option value="1">مكفول</option>
      <option value="2">قيد التسويق</option>
      <option value="3">متوقف</option>
    </select>';
 }
  function fp_select_get_preacher_type() {
     echo '<select tabindex="0" class="select"  id="typ">
      <option value="1">داعية</option>
      <option value="2">معلم</option>
      <option value="3">امام</option>
        <option value="4">مقرء</option>
    </select>';
 }
 function fp_select_preacher_type_get_by_id($id){
     echo '<select tabindex="0" class="select" name="status" id="typ">';
           switch($id){
                case 1 :
                    echo 
                    '<option value="1">داعية</option>
                    <option value="2">معلم</option>
                    <option value="3">امام</option>
                    <option value="4">مقرء</option>';
                    break;
                case 2 :
                    echo 
                    '<option value="2">معلم</option>
                     <option value="1">داعية</option>
                    <option value="3">امام</option>
                    <option value="4">مقرء</option>';
                    break;
                case 3 :
                    echo 
                    '<option value="3">امام</option>
                    <option value="1">داعية</option>
                    <option value="2">معلم</option>
                    <option value="4">مقرء</option>';
                    break;
                case 4 :
                    echo 
                    '<option value="4">مقرء</option>
                    <option value="3">امام</option>
                    <option value="1">داعية</option>
                    <option value="2">معلم</option>';
                    break;
            } 
    echo '</select>';
 }
  function fp_one_type_get_by_id($id){
           switch($id){
                case 1 :
                    echo 'داعية';
                    break;
                case 2 :
                    echo 'معلم';
                    break;
                case 3 :
                    echo 'امام';
                    break;
                case 3 :
                    echo 'مقرء';
                    break;
            } 
 }
 
 function fp_select_status_get_by_id($id){
     echo '<select tabindex="0" class="select" name="status" id="status">';
           switch($id){
                case 1 :
                    echo 
                    '<option value="1">مكفول</option>
                    <option value="2">قيد التسويق</option>
                    <option value="3">متوقف</option>';
                    break;
                case 2 :
                    echo 
                    '<option value="2">قيد التسويق</option>
                    <option value="1">مكفول</option>
                    <option value="3">متوقف</option>';
                    break;
                case 3 :
                    echo 
                    '<option value="3">متوقف</option>
                    <option value="1">مكفول</option>
                    <option value="2">قيد التسويق</option>';
                    break;
            } 
    echo '</select>';
 }
 function fp_one_status_get_by_id($id){
           switch($id){
                case 1 :
                    echo 'مكفول';
                    break;
                case 2 :
                    echo 'قيد التسويق';
                    break;
                case 3 :
                    echo 'متوقف';
                    break;
            } 
 }
 
 function fp_select_mother_status_get() {
     echo '<select tabindex="0" class="select"  id="mstatus">
      <option value="1">متزوجة</option>
      <option value="2">غير متزوجة</option>
      <option value="3">أخرى</option>
    </select>';
 }
 function fp_select_mother_status_get_by_id($id){
     echo '<select tabindex="0" class="select" id="mstatus">';
           switch($id){
                case 1 :
                    echo 
                    '<option value="1">متزوجة</option>
                    <option value="2">غير متزوجة</option>
                    <option value="3">أخرى</option>';
                    break;
                case 2 :
                    echo 
                    '<option value="2">غير متزوجة</option>
                    <option value="1">متزوجة</option>
                    <option value="3">أخرى</option>';
                    break;
                case 3 :
                    echo 
                    '<option value="3">أخرى</option>
                    <option value="1">متزوجة</option>
                    <option value="2">غير متزوجة</option>';
                    break;
            } 
    echo '</select>';
 }
 
  function fp_select_date_get($start,$name) {
      $d = $name."d";
      $m = $name."m";
      $y = $name."y";
 echo
      "<table width='$80%'border='0'>
      <tr>
        <td><select name='y' class='select' id='$y'>";
	  for($i=$start ; $i <= date("Y") ; $i++)
  	  echo "<option value='$i'>$i</option>";
        echo "</select></td>
        <td><select class='select' name='m' id='$m'>";
	  for($i=1 ; $i <= 12 ; $i++)
  	  echo "<option value='$i'>$i</option>";
        echo "</select></td>
        <td><select class='select' name='m' id='$d'>";
	  for($i=1 ; $i <= 31 ; $i++)
  	  echo "<option value='$i'>$i</option>";
       echo '</select></td>
      </tr>
      </table>';
      }

function fp_select_date_get_by_id($start,$name,$date) {
        $string = $date;
        $date = DateTime::createFromFormat("Y-m-d", $string);
        $bd_d = $date->format("d");
        $bd_m = $date->format("m");
        $bd_y = $date->format("Y");
      $d = $name."d";
      $m = $name."m";
      $y = $name."y";
 echo
      "<table width='$80%'border='0'>
      <tr>
        <td><select name='y' class='select' id='$y'>
            <option value='$bd_y'>$bd_y</option>";
	  for($i=date("Y") ; $i >= $start ;  $i--)
  	  echo "<option value='$i'>$i</option>";
        echo "</select></td>
        <td><select class='select' name='m' id='$m'>
            <option value='$bd_m'>$bd_m</option>";
	  for($i=1 ; $i <= 12 ; $i++)
  	  echo "<option value='$i'>$i</option>";
        echo "</select></td>
        <td><select class='select' name='m' id='$d'>
            <option value='$bd_d'>$bd_d</option>";
	  for($i=1 ; $i <= 31 ; $i++)
  	  echo "<option value='$i'>$i</option>";
       echo '</select></td>
      </tr>
      </table>';
      }
function fp_notify($text,$type){
    switch ($type){
        case 1 : 
            echo '<div align = "center" style="width: 88%" id="success_notice"   class="alert-box success">'.$text.'</div>';
            break;
        case 2 :
            echo '<div align = "center" style="width: 88%" id="success_notice"   class="alert-box warning">'.$text.'</div>';
            break;
        case 3 :
            echo '<div align = "center" style="width: 88%" id="success_notice"   class="alert-box error">'.$text.'</div>';
            break;
    }
}

function fp_select_sponsored_type($t){
    switch ($t){
        case 1 : return "أيتام";
            break;
        case 2 : return "طلاب";
            break;
        case 3 : return "الدعاة/المقرئين/المعلمين";
            break;
        case 4 : return "أسر";
            break;
    }
}
?>
