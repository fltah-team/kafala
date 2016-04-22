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
        fp_kafala_insert_sponsorships($n_sponsored,$saving);

        return true ;
	}

function fp_kafala_insert_sponsorships($sponsored_id){
        global $fp_handle;
        $last_id = mysql_insert_id();
        switch ($sponsored_id){
        case 1 : 
                include 'orphanAPI.php';
                $orphans = fp_orphan_get();
                $ocount = @count($orphans);
                for($i = 0 ; $i < $ocount ; $i++){
		$orphan = $orphans[$i];
                $add_kafala_qurey = "INSERT INTO `sponsorships` VALUE($last_id,$orphan->id)";
                $res = mysql_query($add_kafala_qurey);
                
                }
            break;
        case 2 : 
                include 'studentAPI.php';
                $orphans = fp_student_get();
                $ocount = @count($orphans);
                for($i = 0 ; $i < $ocount ; $i++){
		$orphan = $orphans[$i];
                $add_kafala_qurey = "INSERT INTO `sponsorships` VALUE($last_id,$orphan->id)";
                $res = mysql_query($add_kafala_qurey);
                if(!$res)die("err");
                else echo "kafala";
                }
                break;
           case 3 : 
                include 'preacherAPI.php';
                $orphans = fp_preacher_get();
                $ocount = @count($orphans);
                for($i = 0 ; $i < $ocount ; $i++){
		$orphan = $orphans[$i];
                $add_kafala_qurey = "INSERT INTO `sponsorships` VALUE($last_id,$orphan->id)";
                $res = mysql_query($add_kafala_qurey);
                if(!$res)die("err");
                else echo "kafala";
                }
                break;
                
           case 4 : 
                include 'familyAPI.php';
                $orphans = fp_family_get();
                $ocount = @count($orphans);
                for($i = 0 ; $i < $ocount ; $i++){
		$orphan = $orphans[$i];
                $add_kafala_qurey = "INSERT INTO `sponsorships` VALUE($last_id,$orphan->id)";
                $res = mysql_query($add_kafala_qurey);
                if(!$res)die("err");
                else echo "kafala";
                }
        
        
    }
}

	
	// DELETE
function fp_kafala_delete($id){
	global $fp_handle ;
	$kid = (int)$id;
	if($kid == 0) return false ;
	$query = sprintf("DELETE FROM `sponsorship` WHERE `id` = %d",$kid);
	$qresult = @mysql_query($query);
	if(!$qresult) return false ;
	
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