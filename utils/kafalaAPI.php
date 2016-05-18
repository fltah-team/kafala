<?php
	// SELSECT ALL

function fp_kafala_get($extra = ''){
	global $fp_handle ;
	$query = sprintf("SELECT * FROM `sponsorship`   %s",$extra);
	$qresult = @mysql_query($query);
	
	if(!$qresult) return -1 ; 
	
	$rcount = mysql_num_rows($qresult);
	if($rcount == 0 )  return 0 ;
	
	$kafala = array();
	
	for($i = 0 ; $i < $rcount ; $i++)
		$kafala[@count($kafala)] = @mysql_fetch_object($qresult);
		
	@mysql_free_result($qresult);
	
	return $kafala ; 
	}
function fp_kafala_get_num_rows(){
	$query = sprintf("SELECT * FROM `sponsorship` ORDER BY `date`");
	$qresult = @mysql_query($query);
	
	if(!$qresult) return -1 ; 
	
        return mysql_num_rows($qresult);
}

	// SELECT BY ID
function fp_kafala_get_by_id($id){
	$oid = (int)$id;
	if($oid == 0) return NULL ;
	$kafalas = fp_kafala_get("WHERE `id` = ".$oid);
	if($kafalas == NULL) return NULL ;
	$kafala = $kafalas[0];
	return $kafala ;
	}	

        

	// INSERT	
function fp_kafala_add( $amount , $saving ,$date ,$sponsor ,$last_date ,$sponsored)
{
	global $fp_handle;
	$n_amount    = (int)$amount ;
	$n_saving    = (int)$saving;
	$n_date    = @mysql_real_escape_string(strip_tags($date),$fp_handle);
	$n_sponsor = (int)$sponsor;
	$n_last_date = @mysql_real_escape_string(strip_tags($last_date),$fp_handle);
	$n_sponsored = (int)$sponsored;
    if(!fp_kafala_check_sponsored($n_sponsored, $n_sponsor))return false;    
	$query = ("INSERT INTO `sponsorship` (`id`,`amount` , `saving` , `date` ,`sponsor`, `last_date` ,`sponsored`) VALUE(NULL, $n_amount, $n_saving, '$n_date' ,$n_sponsor , '$n_last_date' , $n_sponsored)");
        $qresult = mysql_query($query);
        fp_kafala_insert_sponsorships($n_sponsored,$n_saving,$n_date,$n_sponsor);
	if(!$qresult) return false ;
        $name = fp_select_sponsored_type($n_sponsored);
        $sponsor = fp_sponsor_get_by_id($n_sponsor);
        $text =  'تم اضافة كفالة الى '.$name.' التابعين ل'.$sponsor->name;
        $users = fp_users_get();
        $ucount = @count($users);
        if($ucount > 0){
            for($i = 0 ; $i < $ucount ; $i ++){
                $user = $users[$i];
                fp_notify_add($text, "admin", $user->name, 1);
            }
        }
        @mysql_free_result($qresult);
        return true ;
	}

function fp_kafala_get_last_id(){
        global $fp_handle ;
	$kafala = fp_kafala_get("ORDER BY `id` DESC LIMIT 1");
	if($kafala == NULL) return NULL ;
	$kafala = $orphans[0];
	return $kafala->id ;
}

function fp_kafala_check_sponsored($n_sponsored_id,$n_sponsor){
        switch ($n_sponsored_id){
        case 1 : 
                
                $orphans = fp_final_orphan_get("WHERE `warranty_organization`='$n_sponsor' and `state`=1");
                if(!$orphans || @count($orphans) == 0 )
                    return false;
                else return true;
       case 2 : 
                
                $orphans = fp_final_student_get("WHERE `warranty_organization`='$n_sponsor' and `state`=1");
                if(!$orphans || @count($orphans) == 0 )
                    return false;
                else return true;
                } 
    }

function fp_kafala_insert_sponsorships($n_sponsored_id,$n_saving,$n_date,$n_sponsor){
        global $fp_handle;
        $last_id = mysql_insert_id();
        switch ($n_sponsored_id){
        case 1 : 
                $orphans = fp_final_orphan_get("WHERE `warranty_organization`='$n_sponsor' and `state`=1");
                $ocount = @count($orphans);
                for($i = 0 ; $i < $ocount ; $i++){
                $orphan = $orphans[$i];
                $add_kafala_qurey = "INSERT INTO `sponsorships` VALUE($last_id,$orphan->id,1)";
                $res = mysql_query($add_kafala_qurey);
                $com_saving = $orphan->saving + $n_saving;
                fp_final_orphan_update($orphan->id,Null,Null,$com_saving,$n_date);
                }
       case 2 : 
                $orphans = fp_final_student_get("WHERE `warranty_organization`='$n_sponsor' and `state`=1");
                $ocount = @count($orphans);
                for($i = 0 ; $i < $ocount ; $i++){
                $orphan = $orphans[$i];
                $add_kafala_qurey = "INSERT INTO `sponsorships` VALUE($last_id,$orphan->id,2)";
                $res = mysql_query($add_kafala_qurey);
                $com_saving = $orphan->saving + $n_saving;
                fp_final_student_update($orphan->id,Null,Null,$com_saving,$n_date);
                } 
    }
}

function fp_sponsorships_delete($o_id){
        global $fp_handle ;
        $orphan_id = (int)$o_id ;
        if($orphan_id == 0) return false ;
        $query = sprintf("DELETE FROM `sponsorships` WHERE `sponsored` = %d",$orphan_id);
        $qresult = @mysql_query($query);
	if(!$qresult) return false ;
	@mysql_free_result($qresult);
	return true ;        

}
	// DELETE
function fp_kafala_delete($id){
	global $fp_handle ;
	$kid = (int)$id;
	if($kid == 0) return false ;
    $check = fp_kafala_get_by_id($kid);
    if(!$check)return false;
	$query = sprintf("DELETE FROM `sponsorship` WHERE `id` = %d",$kid);
	$qresult = @mysql_query($query);
        mysql_query("DELETE FROM `sponsorship` WHERE `sponsorship` =".$kid);
	if(!$qresult) return false ;
        $name = fp_select_sponsored_type($check->sponsored);
        $sponsor = fp_sponsor_get_by_id($check->sponsor);
        $text =  'تم حذف كفالة من '.$name."التابعين ل ".$sponsor->name;
        $users = fp_users_get();
        $ucount = @count($users);
        if($ucount > 0){
            for($i = 0 ; $i < $ucount ; $i ++){
                $user = $users[$i];
                fp_notify_add($text, "admin", $user->name, 3);
            }
        }
	@mysql_free_result($qresult);
	return true ;
}
	 	
function fp_sposored_get_kafala($id,$t){
	$query = sprintf("SELECT * FROM `sponsorships` WHERE `sponsored`= %d AND `type`=%d",$id,$t);echo $query;
	$qresult = @mysql_query($query);
	
	if(!$qresult) return -1 ; 
	
	$rcount = mysql_num_rows($qresult);
	if($rcount == 0 )  return 0 ;
	
	$kafala = array();
	
	for($i = 0 ; $i < $rcount ; $i++)
		$kafala[@count($kafala)] = @mysql_fetch_object($qresult);
		
	@mysql_free_result($qresult);
	
	return $kafala ;       
       }	
?>