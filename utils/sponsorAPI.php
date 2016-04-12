<?php
	// SELSECT ALL sponsor
function fp_sponsor_get($extra = ''){
	global $fp_handle ;
	$query = sprintf("SELECT * FROM `sponsor` %s",$extra);
	$qresult = @mysql_query($query);
	
	if(!$qresult) return NULL ; 
	
	$rcount = mysql_num_rows($qresult);
	if($rcount == 0 )  return NULL ;
	
	$sponsors = array();
	
	for($i = 0 ; $i < $rcount ; $i++)
		$sponsors[@count($sponsors)] = @mysql_fetch_object($qresult);
		
	@mysql_free_result($qresult);
	
	return $sponsors ; 
	}

?>	