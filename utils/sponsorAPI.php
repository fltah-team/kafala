<?php
    
	// SELSECT ALL sponsor
function fp_sponsor_get($extra = ''){
	global $fp_handle ;
	$query = sprintf("SELECT * FROM `sponsor` %s",$extra);
	$qresult = @mysql_query($query);
	
	if(!$qresult) return -1 ; 
	
	$rcount = mysql_num_rows($qresult);
	if($rcount == 0 )  return 0 ;
	
	$sponsors = array();
	
	for($i = 0 ; $i < $rcount ; $i++)
		$sponsors[@count($sponsors)] = @mysql_fetch_object($qresult);
		
	@mysql_free_result($qresult);
	
	return $sponsors ; 
	}

			// SELECT BY ID
function fp_sponsor_get_by_id($id){
	global $fp_handle ;
	$oid = (int)$id;
	if($oid == 0) return NULL ;
	$sponsors = fp_sponsor_get("WHERE `id` = ".$oid);
	if($sponsors == NULL) return NULL ;
	$sponsor = $sponsors[0];
	return $sponsors ;
	}
        
?>	