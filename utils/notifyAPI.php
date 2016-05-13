

<?php

        
	// SELSECT ALL state
function fp_notify_get($extra = ''){
	global $fp_handle ;
	$query = sprintf("SELECT * FROM `notify` %s",$extra);
	$qresult = @mysql_query($query);
	
	if(!$qresult) return -1 ; 
	
	$rcount = mysql_num_rows($qresult);
	if($rcount == 0 )  return 0 ;
	
	$notify = array();
	
	for($i = 0 ; $i < $rcount ; $i++)
		$notify[@count($notify)] = @mysql_fetch_object($qresult);
		
	@mysql_free_result($qresult);
	
	return $notify ; 
	}

	
		// SELECT BY ID
function fp_notify_get_by_id($id){
	global $fp_handle ;
	$oid = (int)$id;
	if($oid == 0) return NULL ;
	$notifies = fp_notify_get("WHERE `id` = ".$oid);
	if($notifies == NULL) return NULL ;
	$notify = $notifies[0];
	return $notify ;
	}
        
        
        
	function fp_notify_add( $text , $ufrom , $uto , $type ){
		global $fp_handle;
		$n_name    = 
                $n_text = @mysql_real_escape_string($text,$fp_handle);
                $n_ufrom = @mysql_real_escape_string(strip_tags($ufrom),$fp_handle);
                $n_uto= @mysql_real_escape_string(strip_tags($uto),$fp_handle);
                $n_type = (int)$type ;
                        
		$query = ("INSERT INTO `notify`( `id`, `text` , `ufrom` , `uto` , `type`) VALUE(NULL,'$n_text' , '$n_ufrom' , '$n_uto' , '$n_type' )");
		$qresult = mysql_query($query); 
		if(!$qresult) return false ;
		@mysql_free_result($qresult);
		return true ;
	}
        
  	function fp_notify_delete($id){
		$uid = (int)$id;
		if($uid == 0) return false ;
		$query = sprintf("DELETE FROM `notify` WHERE `id` = %d",$uid);
		$qresult = @mysql_query($query);
		if(!$qresult) return false ;
		@mysql_free_result($qresult);
		return true ;
		}
                
                ///dosnt work 
   	function fp_notify_delete_by_username($uto){
		$uto = @mysql_real_escape_string(strip_tags($uto),$fp_handle);
		if($uto == 0) return false ;
		$query = sprintf("DELETE FROM `notify` WHERE `uto` = %s",$uto);
		$qresult = @mysql_query($query);
		if(!$qresult) return false ;
		@mysql_free_result($qresult);
		return true ;
		} 

?>	