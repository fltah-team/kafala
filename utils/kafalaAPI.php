<?php
	// SELSECT ALL
function fp_kafala_get($extra = ''){
	global $fp_handle ;
	$query = sprintf("SELECT * FROM `sponsorship` %s",$extra);
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
        global $fp_handle ;
	$query = sprintf("SELECT * FROM `sponsorship`");
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
function fp_kafala_add( $amount , $saving ,$date ,$sponsor ,$month_no,$sponsored)
{
	global $fp_handle;
	$n_amount    = (int)$amount ;
	$n_saving    = (int)$saving;
	$n_date    = @mysql_real_escape_string(strip_tags($date),$fp_handle);
	$n_sponsor = (int)$sponsor;
	$n_month_no = (int)$month_no;
	$n_sponsored = (int)$sponsored;
        
	$query = ("INSERT INTO `sponsorship` (`id`,`amount` , `saving` , `date` ,`sponsor`, `month_no` ,`sponsored`) VALUE(NULL, $n_amount, $n_saving, '$n_date' ,$n_sponsor , $month_no , $n_sponsored)");
        $qresult = mysql_query($query);
	if(!$qresult) return false ;
        fp_kafala_insert_sponsorships($n_sponsored,$n_saving,$n_date);

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

function fp_kafala_insert_sponsorships($n_sponsored_id,$n_saving,$n_date){
        global $fp_handle;
        $last_id = mysql_insert_id();
        switch ($n_sponsored_id){
        case 1 : 
                include 'finalOrphanAPI.php';
                $orphans = fp_final_orphan_get();
                $ocount = @count($orphans);
                for($i = 0 ; $i < $ocount ; $i++){
		$orphan = $orphans[$i];
                $add_kafala_qurey = "INSERT INTO `sponsorships` VALUE($last_id,$orphan->id,1)";
                $res = mysql_query($add_kafala_qurey);
                $com_saving = $orphan->saving + $n_saving;
                fp_final_orphan_update($orphan->id,Null,Null,$com_saving,$n_date,Null,Null,Null,Null,Null,Null,Null,Null,Null,Null,Null,Null,Null,Null,Null,Null,Null,Null,Null,Null,Null,Null,Null,Null,Null,Null,Null,Null,Null,Null,Null,Null);
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
	$query = sprintf("DELETE FROM `sponsorship` WHERE `id` = %d",$kid);
	$qresult = @mysql_query($query);
        mysql_query("DELETE FROM `sponsorship` WHERE `sponsorship` =".$kid);
	if(!$qresult) return false ;
	@mysql_free_result($qresult);
	return true ;
}

	 	
function fp_sposored_get_kafala($id){
        global $fp_handle ;
	$query = sprintf("SELECT * FROM `sponsorships` WHERE `sponsored`= ".$id);
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