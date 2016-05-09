<?php


	// SELSECT ALL state
function fp_states_get($extra = ''){
	global $fp_handle ;
	$query = sprintf("SELECT * FROM `state` %s",$extra);
	$qresult = @mysql_query($query);
	
	if(!$qresult) return -1 ; 
	
	$rcount = mysql_num_rows($qresult);
	if($rcount == 0 )  return 0 ;
	
	$states = array();
	
	for($i = 0 ; $i < $rcount ; $i++)
		$states[@count($states)] = @mysql_fetch_object($qresult);
		
	@mysql_free_result($qresult);
	
	return $states ; 
	}

	
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
        
        
        
	function fp_states_add( $name ){
		global $fp_handle;
		$n_name    = @mysql_real_escape_string(strip_tags($name),$fp_handle);
		$query = ("INSERT INTO `state`( `id` , `name`) VALUE(NULL,'$n_name'  )");
		$qresult = mysql_query($query);
		if(!$qresult) return false ;
		
		return true ;
		}
  	function fp_states_delete($id){
		$uid = (int)$id;
		if($uid == 0) return false ;
		$query = sprintf("DELETE FROM `state` WHERE `id` = %d",$uid);
		$qresult = @mysql_query($query);
		if(!$qresult) return false ;
		
		return true ;
		}
        
?>	