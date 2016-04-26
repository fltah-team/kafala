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
     echo '<div id="success_notice"  class="alert-box error">
     <span>خطأ :   </span>لم تتم عملية اضافة '.$name.'</div>';
     die();
 }
 function fp_err_add_succes($name){
 echo '<div id="success_notice"  class="alert-box success"><span>نجاح :   </span>تمت اضافة '.$name.' بنجاح</div>';
 die();
 }
 function fp_err_delete_succes($name){
 echo '<div id="success_notice"  class="alert-box success"><span>نجاح :   </span>تم حذف '.$name.' بنجاح</div>';
 die();   
 }
 function fp_err_delete_fail($name){
     echo '<div id="success_notice"  class="alert-box error">
     <span>خطأ :   </span>لم تتم عملية حذف '.$name.'</div>';
     die();
 }
?>
