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
	$oid = (int)$id;
	if($oid == 0) return NULL ;
	$sponsors = fp_sponsor_get("WHERE `id` = ".$oid);
	if($sponsors == NULL) return NULL ;
	$sponsor = $sponsors[0];
	return $sponsor ;
	}
        
	function fp_sponsor_add( $name , $numberOFSponsored){
		global $fp_handle;
	

		$n_name    = @mysql_real_escape_string(strip_tags($name),$fp_handle);
		$n_numberOFSponsored = (int)$numberOFSponsored ;
		$query = ("INSERT INTO `sponsor`( `id` , `name` , `numberOFSponsored`) VALUE(NULL,'$n_name' , '$n_numberOFSponsored' )");
		$qresult = mysql_query($query);
		if(!$qresult) return false ;
		
		return true ;
		}
                
                
                ///// ---------------------
                /////--------------- delete is problem here becoz of the realtion with sponsorship table (No Action )
                ///// -------------- change to cascade ????
                
  	function fp_sponsor_delete($id){
		$uid = (int)$id;
		if($uid == 0) return false ;
		$query = sprintf("DELETE FROM `sponsor` WHERE `id` = %d",$uid);echo $query;
		$qresult = @mysql_query($query);
		if(!$qresult) return false ;
		
		return true ;
		}
        
?>	