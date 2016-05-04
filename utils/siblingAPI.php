<?php
//-------------------------------------sibilingAPI----------------------------------------------
	
	
		
		
				
		// INSERT	
	function fp_sibiling_add( $orphan_id , $name , $sex , $birth_date , $state){
		global $fp_handle;
	
		$n_orphan_id = (int)$orphan_id ;
		$n_name    = @mysql_real_escape_string(strip_tags($name),$fp_handle);
		$n_sex    = @mysql_real_escape_string(strip_tags($sex),$fp_handle);
		$n_birth_date  = @mysql_real_escape_string(strip_tags($birth_date),$fp_handle);
		$n_state = @mysql_real_escape_string(strip_tags($state),$fp_handle);
		
		$query = ("INSERT INTO `sibiling`( `id` ,`orphan_id` , `name` , `sex` , `birth_date` , `state`) VALUE(NULL,'$n_orphan_id' ,'$n_name','$n_sex','$n_birth_date','$n_state')");
		
		$qresult = mysql_query($query);
                
		if(!$qresult){
                    @mysql_free_result($qresult);
                    return false ;
                }
                @mysql_free_result($qresult);
		return true ;
		}	
	
	        
	
		// show all
	function fp_sibiling_get($orphan_id ){
		global $fp_handle ;
		$query = sprintf("SELECT * FROM `sibiling` WHERE `orphan_id`= %d",$orphan_id);
                //echo $query ;
                
		$qresult = @mysql_query($query);
		
		if(!$qresult) return NULL ; 
		
		$rcount = mysql_num_rows($qresult);
		if($rcount == 0 )  return NULL ;
		
		$sibiling = array();
		
		for($i = 0 ; $i < $rcount ; $i++)
			$sibiling[@count($sibiling)] = @mysql_fetch_object($qresult);
			
		@mysql_free_result($qresult);
		
		return $sibiling ; 
		}
    
       	// get with extra 
	function fp_sibiling_get_for_gender($orphan_id,$extra ){
		global $fp_handle ;
		$query = sprintf("SELECT * FROM `sibiling` WHERE `orphan_id`= %d  %s",$orphan_id ,$extra);
                
                
		$qresult = @mysql_query($query);
		
		if(!$qresult) return NULL ; 
		
		$rcount = mysql_num_rows($qresult);
		if($rcount == 0 )  return NULL ;
		
		$sibiling = array();
		
		for($i = 0 ; $i < $rcount ; $i++)
			$sibiling[@count($sibiling)] = @mysql_fetch_object($qresult);
			
		@mysql_free_result($qresult);
		
		return $sibiling ; 
		}
			
		// DELETE
	function fp_sibiling_delete($id){
		$uid = (int)$id;
		if($uid == 0) return false ;
		$query = sprintf("DELETE FROM `sibiling` WHERE `id` = %d",$uid);
		$qresult = @mysql_query($query);
		if(!$qresult) return false ;
		
		return true ;
		}
             
 
?>
