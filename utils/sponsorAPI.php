	// SELSECT ALL sponsor
function fp_users_get($extra = ''){
	global $fp_handle ;
	$query = sprintf("SELECT * FROM `employee` %s",$extra);
	$qresult = @mysql_query($query);
	
	if(!$qresult) return NULL ; 
	
	$rcount = mysql_num_rows($qresult);
	if($rcount == 0 )  return NULL ;
	
	$users = array();
	
	for($i = 0 ; $i < $rcount ; $i++)
		$users[@count($users)] = @mysql_fetch_object($qresult);
		
	@mysql_free_result($qresult);
	
	return $users ; 
	}
		