<?php

//include("db.php");
            


		// SELSECT ALL
	function fp_family_get($extra = ''){
		
		global $fp_handle ;
		$query = sprintf("SELECT * FROM `family` %s",$extra);
		$qresult = @mysql_query($query);
		
		if(!$qresult) return -1 ; 
		
		$rcount = mysql_num_rows($qresult);
		if($rcount == 0 )  return 0 ;
		
		$families = array();
		
		for($i = 0 ; $i < $rcount ; $i++)
			$families[@count($families)] = @mysql_fetch_object($qresult);
		
                @mysql_free_result($qresult);
		
		return $families ; 
	}
	
        function fp_family_get_num_rows(){
                global $fp_handle ;
                $query = sprintf("SELECT * FROM `family`");
                $qresult = @mysql_query($query);

                if(!$qresult) return -1 ; 

                return mysql_num_rows($qresult);
        }	
	function fp_family_get_by_id($id){
		$oid = (int)$id;
		if($oid == 0) return NULL ;
		
		$families = fp_family_get("WHERE `family_id` = ".$oid);
		if($families == NULL) return NULL ;
		$family = $families[0];
		return $family ;
		}

		// INSERT	
	function fp_family_add($state , $warranty_organization , $saving , $father_first_name , $father_middle_name , $father_last_name , $father_4th_name , $birth_date , $sex ,$social_state ,$father_dead_date , $father_dead_cause , $father_work ,  $supporter_first_name , $supporter_meddle_name , $supporter_last_name , $supporter_4th_name , $supporter_birth_date , $supporter_sex , $supporter_state , $supporter_relation  , $supporter_work  , $residence_state , $city , $District , $section,$house_no , $phone1 , $phone2 , $data_entery_name , $data_entery_date ){
		global $fp_handle;
		
		$n_state = @mysql_real_escape_string(strip_tags($state),$fp_handle); 
		$n_warranty_organization = (int)$warranty_organization;
                $n_saving  = (int)$saving ;
		$n_father_first_name  = @mysql_real_escape_string(strip_tags($father_first_name),$fp_handle);
		$n_father_middle_name  = @mysql_real_escape_string(strip_tags($father_middle_name),$fp_handle);
		$n_father_last_name  = @mysql_real_escape_string(strip_tags($father_last_name ),$fp_handle);
		$n_father_4th_name  = @mysql_real_escape_string(strip_tags($father_4th_name),$fp_handle);
		$n_birth_date  = @mysql_real_escape_string(strip_tags($birth_date),$fp_handle);
		$n_sex = @mysql_real_escape_string(strip_tags($sex),$fp_handle);
		$n_social_state  = @mysql_real_escape_string(strip_tags($social_state),$fp_handle);
		$n_father_dead_date = @mysql_real_escape_string(strip_tags($father_dead_date),$fp_handle);
		$n_father_dead_cause = @mysql_real_escape_string(strip_tags($father_dead_cause),$fp_handle);
		$n_father_work = @mysql_real_escape_string(strip_tags($father_work),$fp_handle);
		$n_supporter_first_name = @mysql_real_escape_string(strip_tags($supporter_first_name),$fp_handle);
		$n_supporter_meddle_name = @mysql_real_escape_string(strip_tags($supporter_meddle_name),$fp_handle);
		$n_supporter_last_name =@mysql_real_escape_string(strip_tags($supporter_last_name),$fp_handle);
		$n_supporter_4th_name =@mysql_real_escape_string(strip_tags($supporter_4th_name),$fp_handle);
		$n_supporter_birth_date = @mysql_real_escape_string(strip_tags($supporter_birth_date),$fp_handle);
		$n_supporter_sex =@mysql_real_escape_string(strip_tags($supporter_sex),$fp_handle);
		$n_supporter_state = @mysql_real_escape_string(strip_tags($supporter_state),$fp_handle);
		$n_supporter_relation =@mysql_real_escape_string(strip_tags($supporter_relation),$fp_handle);
		$n_supporter_work  =@mysql_real_escape_string(strip_tags($supporter_work),$fp_handle);
		$n_residence_state = @mysql_real_escape_string(strip_tags($residence_state),$fp_handle);
		$n_city = @mysql_real_escape_string(strip_tags($city),$fp_handle);
		$n_District = @mysql_real_escape_string(strip_tags($District),$fp_handle);
		$n_section  = (int)$section;
		$n_house_no  = @mysql_real_escape_string(strip_tags($house_no),$fp_handle);
		$n_phone1  = @mysql_real_escape_string(strip_tags($phone1),$fp_handle);
		$n_phone2  = @mysql_real_escape_string(strip_tags($phone2),$fp_handle);
		$n_data_entery_name =@mysql_real_escape_string(strip_tags($data_entery_name),$fp_handle);
		$n_data_entery_date=@mysql_real_escape_string(strip_tags($data_entery_date),$fp_handle);

	 
		$query = ("INSERT INTO  `family`  ( `family_id` ,`state` , `warranty_organization` , saving , `father_first_name` , `father_middle_name` , `father_last_name` , `father_4th_name` , `birth_date` , `sex` ,`social_state` ,`father_dead_date` , `father_dead_cause` , `father_work` ,  `supporter_first_name` , `supporter_meddle_name` , `supporter_last_name` , `supporter_4th_name` , `supporter_birth_date` , `supporter_sex` , `supporter_state` , `supporter_relation`  , `supporter_work`  , `residence_state` , `city` , `District` , `section`,`house_no` , `phone1` , `phone2`   , `data_entery_name` , `data_entery_date`)
					VALUE(NULL ,'$n_state' , '$n_warranty_organization' ,'$n_saving', '$n_father_first_name' , '$n_father_middle_name' , '$n_father_last_name' , '$n_father_4th_name' , '$n_birth_date' , '$n_sex' ,'$n_social_state' ,'$n_father_dead_date' , '$n_father_dead_cause' , '$n_father_work' ,  '$n_supporter_first_name' , '$n_supporter_meddle_name' , '$n_supporter_last_name' , '$n_supporter_4th_name' , '$n_supporter_birth_date' , '$n_supporter_sex' , '$n_supporter_state' , '$n_supporter_relation'  , '$n_supporter_work'  , '$n_residence_state' , '$n_city' , '$n_District' , '$n_section','$n_house_no' , '$n_phone1' , '$n_phone2' , '$n_data_entery_name' , '$n_data_entery_date')");
		
		
		$qresult = mysql_query($query);
		if(!$qresult) return false ;
		@mysql_free_result($qresult);
		return true ;
	}
		
		// UPDATE
	function fp_family_update($family_id ,$state = Null  , $warranty_organization = Null , $saving = Null , $last_sponsorship_date = Null  , $father_first_name = Null  , $father_middle_name = Null  , $father_last_name = Null  , $father_4th_name = Null  , $birth_date = Null  , $sex = Null  ,$social_state = Null  ,$father_dead_date = Null  , $father_dead_cause = Null  , $father_work = Null  ,  $supporter_first_name = Null  , $supporter_meddle_name = Null  , $supporter_last_name = Null  , $supporter_4th_name = Null  , $supporter_birth_date = Null  , $supporter_sex  = Null , $supporter_state = Null  , $supporter_relation = Null   , $supporter_work  = Null  , $residence_state = Null  , $city = Null  , $District = Null  , $section = Null ,$house_no = Null  , $phone1  = Null , $phone2  = Null   , $data_entery_name  = Null , $data_entery_date = Null  ){
		global $fp_handle ;
		$uid = (int)$family_id ;
		if($uid == 0) return false ;
		$family = fp_family_get_by_id($uid);
		
		if(!$family)  return false ;
		
		
		$fields = array();
		$query = "UPDATE `family` SET ";
		if(!empty($family_id)){
			$n_family_id    = (int)$family_id;
			$fields[@count($fields)] = " `family_id` = '$n_family_id' ";
			}		
		if(!empty($state)){
			$n_state    = @mysql_real_escape_string(strip_tags($state),$fp_handle);
			$fields[@count($fields)] = " `state` = '$n_state' ";
			}
		if(!empty($warranty_organization)){
			$n_warranty_organization    = (int)$warranty_organization;
			$fields[@count($fields)] = " `warranty_organization` = '$n_warranty_organization' ";
			}
		if(!empty($saving)){
			$n_saving    = (int)$saving;
			$fields[@count($fields)] = " `saving` = '$n_saving' ";
			}                        
                if(!empty($last_sponsorship_date)){
                        $n_saving   = @mysql_real_escape_string(strip_tags($last_sponsorship_date),$fp_handle);
                        $fields[@count($fields)] = " `last_sponsorship_date` = '$last_sponsorship_date' ";
                        }                        
		if(!empty($father_first_name)){
			$n_father_first_name   = mysql_real_escape_string(strip_tags($father_first_name),$fp_handle);
			$fields[@count($fields)] = " `father_first_name` = '$n_father_first_name' ";
			}	
		if(!empty($father_middle_name)){
			$n_father_middle_name   = mysql_real_escape_string(strip_tags($father_middle_name),$fp_handle);
			$fields[@count($fields)] = " `father_middle_name` = '$n_father_middle_name' ";
			}
		if(!empty($father_last_name)){
			$n_father_last_name  = mysql_real_escape_string(strip_tags($father_last_name),$fp_handle);
			$fields[@count($fields)] = " `father_last_name` = '$n_father_last_name' ";
			}
		if(!empty($father_4th_name)){
			$n_father_4th_name  = mysql_real_escape_string(strip_tags($father_4th_name),$fp_handle);
			$fields[@count($fields)] = " `father_4th_name` = '$n_father_4th_name' ";
			}
		if(!empty($birth_date)){
			$n_birth_date  = mysql_real_escape_string(strip_tags($birth_date),$fp_handle);
			$fields[@count($fields)] = " `birth_date` = '$n_birth_date' ";
			}
		if(!empty($sex)){
			$n_sex   = mysql_real_escape_string(strip_tags($sex),$fp_handle);
			$fields[@count($fields)] = " `sex` = '$n_sex' ";
			}
		if(!empty($social_state)){
			$n_social_state   = mysql_real_escape_string(strip_tags($social_state),$fp_handle);
			$fields[@count($fields)] = " `social_state` = '$n_social_state' ";
			}
		if(!empty($father_dead_date)){
			$n_father_dead_date   = mysql_real_escape_string(strip_tags($father_dead_date),$fp_handle);
			$fields[@count($fields)] = " `father_dead_date` = '$n_father_dead_date' ";
			}
		if(!empty($father_dead_cause)){
			$n_father_dead_cause   = mysql_real_escape_string(strip_tags($father_dead_cause),$fp_handle);
			$fields[@count($fields)] = " `father_dead_cause` = '$n_father_dead_cause' ";
			}
		if(!empty($father_work)){
			$n_father_work   = mysql_real_escape_string(strip_tags($father_work),$fp_handle);
			$fields[@count($fields)] = " `father_work` = '$n_father_work' ";
			}
		if(!empty($supporter_first_name)){
			$n_supporter_first_name   = mysql_real_escape_string(strip_tags($supporter_first_name),$fp_handle);
			$fields[@count($fields)] = " `supporter_first_name` = '$n_supporter_first_name' ";
			}
		if(!empty($supporter_meddle_name)){
			$n_supporter_meddle_name  = mysql_real_escape_string(strip_tags($supporter_meddle_name),$fp_handle);
			$fields[@count($fields)] = " `supporter_meddle_name` = '$n_supporter_meddle_name' ";
			}
		if(!empty($supporter_last_name)){
			$n_supporter_last_name   = mysql_real_escape_string(strip_tags($supporter_last_name),$fp_handle);
			$fields[@count($fields)] = " `supporter_last_name` = '$n_supporter_last_name' ";
			}
		if(!empty($supporter_4th_name)){
			$n_supporter_4th_name   = mysql_real_escape_string(strip_tags($supporter_4th_name),$fp_handle);
			$fields[@count($fields)] = " `supporter_4th_name` = '$n_supporter_4th_name' ";
			}
		if(!empty($supporter_birth_date)){
			$n_supporter_birth_date   = mysql_real_escape_string(strip_tags($supporter_birth_date),$fp_handle);
			$fields[@count($fields)] = " `supporter_birth_date` = '$n_supporter_birth_date' ";
			}			
		if(!empty($supporter_sex)){
			$n_supporter_sex  = mysql_real_escape_string(strip_tags($supporter_sex),$fp_handle);
			$fields[@count($fields)] = " `supporter_sex` = '$n_supporter_sex' ";
			}		
		if(!empty($supporter_state)){
			$n_supporter_state   = mysql_real_escape_string(strip_tags($supporter_state),$fp_handle);
			$fields[@count($fields)] = " `supporter_state` = '$n_supporter_state' ";
			}
		if(!empty($supporter_relation)){
			$n_supporter_relation   = mysql_real_escape_string(strip_tags($supporter_relation),$fp_handle);
			$fields[@count($fields)] = " `supporter_relation` = '$n_supporter_relation' ";
			}
		if(!empty($supporter_work)){
			$n_supporter_work  = mysql_real_escape_string(strip_tags($supporter_work),$fp_handle);
			$fields[@count($fields)] = " `supporter_work` = '$n_supporter_work' ";
			}			
		if(!empty($residence_state)){
			$n_residence_state   = mysql_real_escape_string(strip_tags($residence_state),$fp_handle);
			$fields[@count($fields)] = " `residence_state` = '$n_residence_state' ";
			}
		if(!empty($city)){
			$n_city  = mysql_real_escape_string(strip_tags($city),$fp_handle);
			$fields[@count($fields)] = " `city` = '$n_city' ";
			}
		if(!empty($District)){
			$n_District   = mysql_real_escape_string(strip_tags($District),$fp_handle);
			$fields[@count($fields)] = " `District` = '$n_District' ";
			}
		if(!empty($section)){
			$n_section   = (int)$section ;
			$fields[@count($fields)] = " `section` = '$n_section' ";
			}
		if(!empty($house_no)){
                        $n_house_no  = @mysql_real_escape_string(strip_tags($house_no),$fp_handle);
			$fields[@count($fields)] = " `house_no` = '$n_house_no' ";
			}
		if(!empty($phone1)){
			$n_phone1   = mysql_real_escape_string(strip_tags($phone1),$fp_handle) ;
			$fields[@count($fields)] = " `phone1` = '$n_phone1' ";
			}
		if(!empty($phone2)){
			$n_phone2   = mysql_real_escape_string(strip_tags($phone2),$fp_handle);
			$fields[@count($fields)] = " `phone2` = '$n_phone2' ";
			}
			
		if(!empty($data_entery_name)){
			$n_data_entery_name   = mysql_real_escape_string(strip_tags($data_entery_name),$fp_handle);
			$fields[@count($fields)] = " `data_entery_name` = '$n_data_entery_name' ";
			}
		if(!empty($data_entery_date)){
			$n_data_entery_date   = mysql_real_escape_string(strip_tags($data_entery_date),$fp_handle);
			$fields[@count($fields)] = " `data_entery_date` = '$n_data_entery_date' ";
			}
			
		$fields[@count($fields)] = " `family_id` = '$family->family_id' ";
		
		$fcount = @count($fields);
		
		if($fcount == 1){
			$query .= $fields[0].' WHERE `family_id` = '.$uid;
			$qresult = @mysql_query($query);
			if(!$qresult) return false ;
			else return true ;
			}
		for($i = 0 ; $i < $fcount ; $i++){
			$query .= $fields[$i];
			if($i != ($fcount - 1 ))
			$query .= ' , ';
			}
		$query .= ' WHERE `family_id` = '.$uid;
		
		$qresult = @mysql_query($query);
			if(!$qresult) return false ;
                        @mysql_free_result($qresult);
			return true ;
		
		}

	// DELETE
	function fp_family_delete($id){
		$uid = (int)$id;
		if($uid == 0) return false ;
		$query = sprintf("DELETE FROM `family` WHERE `family_id` = %d",$uid);
		$qresult = @mysql_query($query);
		if(!$qresult) return false ;
		@mysql_free_result($qresult);
		return true ;
	}	


	//------------------------family members -------------------------------
	
	function fp_member_add( $member_id , $name , $sex , $birth_date , $relation ,$study_level , $health_state  , $familyID){
		global $fp_handle;
	
		$n_member_id = (int)$member_id ;
		$n_name    = @mysql_real_escape_string(strip_tags($name),$fp_handle);
		$n_sex    = @mysql_real_escape_string(strip_tags($sex),$fp_handle);
		$n_birth_date  = @mysql_real_escape_string(strip_tags($birth_date),$fp_handle);
		$n_relation = @mysql_real_escape_string(strip_tags($relation),$fp_handle);
		$study_level = @mysql_real_escape_string(strip_tags($study_level),$fp_handle);
		$health_state  = @mysql_real_escape_string(strip_tags($health_state),$fp_handle);
		$familyID = (int)$familyID ;
		$query = ("INSERT INTO `f_member`( `member_id` , `name` , `sex` , `birth_date` , `relation` ,`study_level` , `health_state`  , `familyID`) VALUE(NULL,'$n_member_id' , '$n_name' , '$n_sex' , '$n_birth_date' , '$n_relation' ,'$n_study_level' , '$n_health_state'  , '$n_familyID')");
		echo $query ;
		
		$qresult = mysql_query($query);
		if(!$qresult) return false ;
		@mysql_free_result($qresult);
		return true ;
		}	
                
		function fp_member_get($extra = ''){
			global $fp_handle ;
			$query = sprintf("SELECT * FROM `f_member` %s ",$extra);
		
			$qresult = @mysql_query($query);
			
			if(!$qresult) return NULL ; 
			
			$rcount = mysql_num_rows($qresult);
			if($rcount == 0 )  return NULL ;
			
			$member = array();
			
			for($i = 0 ; $i < $rcount ; $i++)
				$member[@count($member)] = @mysql_fetch_object($qresult);
				
			@mysql_free_result($qresult);
			
			return $member ; 
		}
                
	
		// DELETE
	function fp_member_delete($id){
		$uid = (int)$id;
		if($uid == 0) return false ;
		$query = sprintf("DELETE FROM `f_member` WHERE `id` = %d",$uid);
		$qresult = @mysql_query($query);
		if(!$qresult) return false ;
		@mysql_free_result($qresult);
		return true ;
		}	
?>
