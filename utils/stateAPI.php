<?php
	// SELSECT ALL state
function fp_states_get($extra = ''){
	global $fp_handle ;
	$query = sprintf("SELECT * FROM `state` %s",$extra);
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
	//include('db.php');
	//$state = fp_states_get_by_id(1); 
					//echo $state->name;
	
		// SELECT BY ID
function fp_states_get_by_id($id){
	global $fp_handle ;
	$oid = (int)$id;
	if($oid == 0) return NULL ;
	$states = fp_states_get("WHERE `id` = ".$oid);
	if($states == NULL) return NULL ;
	$state = $states[0];
	return $state ;
	}

?>	