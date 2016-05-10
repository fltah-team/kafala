<?php
	// SELECT BY ID
function fp_sibiling_get_by_id($id){
	$oid = (int)$id;
	if($oid == 0) return NULL ;
	$query = "SELECT * FROM `sibiling` WHERE `id` = ".$oid;
        $siblings = mysql_query($query);
	if($siblings == NULL) return NULL ;
	$sibling = $siblings[0];
        echo serialize($sibling);
	return $sibling ;
	}
				
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
                    return false ;
                }
                @mysql_free_result($qresult);
		return true ;
	}	
	
                
        function fp_sibiling_update($id ,$orphan_id = null , $name= null , $sex = null, $birth_date = null , $state = null ){
                global $fp_handle ;
                $uid = (int)$id;
                if($uid == 0) return false ;	
                $fields = array(); 
                $query = "UPDATE `sibiling` SET ";
                if(!empty($orphan_id)){
                    $n_orphan_id    =(int)$orphan_id;
                    $fields[@count($fields)] = " `orphan_id` = '$n_orphan_id' ";
                 }
                if(!empty($name)){
                    $n_name    = @mysql_real_escape_string(strip_tags($name),$fp_handle);
                    $fields[@count($fields)] = " `name` = '$n_name' ";
                    }
                
                $n_sex   = (int)@mysql_real_escape_string(strip_tags($sex),$fp_handle) ;
                $fields[@count($fields)] = " `sex` = '$n_sex' ";
                        
                if(!empty($birth_date)){
                    $n_birth_date   = @mysql_real_escape_string(strip_tags($birth_date),$fp_handle);
                    $fields[@count($fields)] = " `birth_date` = '$n_birth_date' ";
                        }
                if(!empty($state)){
                    $n_state   = mysql_real_escape_string(strip_tags($state),$fp_handle);
                    $fields[@count($fields)] = " `state` = '$n_state' ";
                        }
                        
                $fcount = @count($fields);
                if($fcount == 1){
                        $query .= $fields[0].' WHERE `id` = '.$uid;
                        $qresult = @mysql_query($query);
                        if(!$qresult) return false ;
                        else return true ;
                        }
                for($i = 0 ; $i < $fcount ; $i++){
                        $query .= $fields[$i];
                        if($i != ($fcount - 1 ))
                        $query .= ' , ';
                        }
                $query .= ' WHERE `id` = '.$uid;
                $qresult = @mysql_query($query);
                        if(!$qresult) return false ;
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
		@mysql_free_result($qresult);
		return true ;
		}

        		// DELETE FOR ORPHAN
	function fp_sibiling_delete_for_orphan($id){
		$uid = (int)$id;
		if($uid == 0) return false ;
		$query = sprintf("DELETE FROM `sibiling` WHERE `orphan_id` = %d",$uid);
		$qresult = @mysql_query($query);
		if(!$qresult) return false ;
		@mysql_free_result($qresult);
		return true ;
		}
                /*include 'db.php';
                $sibilings = fp_sibiling_get(10);
                    $sicount = @count($sibilings);
                    for($i = 0 ; $i < $sicount ; $i++){
                        $sibling = $sibilings[$i];
                        echo $sibling->id;
                        fp_sibiling_update($sibling->id ,10 , null , null, null , null);
                        echo $sibling->id;
                    }*/
?>