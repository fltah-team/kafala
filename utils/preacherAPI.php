<?php
 
     //   include("db.php");
		// SELSECT ALL
	function fp_preacher_get($extra = ''){
		
		global $fp_handle ;
		$query = sprintf("SELECT * FROM `preacher` %s",$extra);
		$qresult = @mysql_query($query);
		
		if(!$qresult) return NULL ; 
		
		$rcount = mysql_num_rows($qresult);
		if($rcount == 0 )  return NULL ;
		
		$preachers = array();
		
		for($i = 0 ; $i < $rcount ; $i++)
			$preachers[@count($preachers)] = @mysql_fetch_object($qresult);
			
		@mysql_free_result($qresult);
		
		return $preachers ; 
		}

	function fp_preacher_get_by_id($id){
		$oid = (int)$id;
		if($oid == 0) return NULL ;
		
		$preachers = fp_preacher_get("WHERE `id` = ".$oid);
		if($preachers == NULL) return NULL ;
		$preacher = $preachers[0];
		return $preacher ;
		}
	// INSERT	
	function fp_preacher_add($type, $state ,  $warranty_organization , $first_name , $meddle_name , $last_name , $last_4th_name , $birth_date , $sex , $male_members_no , $female_members_no , $residence_state , $city , $District , $section,$house_no , $phone1 , $phone2 , $qualify_name , $qualify_date , $qualify_rating , $quran_parts , $Issuer , $current_work , $Joining_Date , $health_state , $ill_cause , $data_entery_name , $data_entery_date ){
		global $fp_handle;
		
		$n_state = @mysql_real_escape_string(strip_tags($state),$fp_handle); 
		$n_type = (int)$type ;
		$n_warranty_organization = (int)$warranty_organization;
		$n_first_name  = @mysql_real_escape_string(strip_tags($first_name),$fp_handle);
		$n_meddle_name  = @mysql_real_escape_string(strip_tags($meddle_name),$fp_handle);
		$n_last_name  = @mysql_real_escape_string(strip_tags($last_name),$fp_handle);
		$n_last_4th_name  = @mysql_real_escape_string(strip_tags($last_4th_name),$fp_handle);
		$n_birth_date  = @mysql_real_escape_string(strip_tags($birth_date),$fp_handle);
		$n_sex = @mysql_real_escape_string(strip_tags($sex),$fp_handle);
		$n_male_members_no = (int)$male_members_no;
		$n_female_members_no =(int)$female_members_no ;
		$n_residence_state = @mysql_real_escape_string(strip_tags($residence_state),$fp_handle);
		$n_city = @mysql_real_escape_string(strip_tags($city),$fp_handle);
		$n_District = @mysql_real_escape_string(strip_tags($District),$fp_handle);
		$n_section  = (int)$section;
		$n_house_no  = (int)$house_no;
		$n_phone1  = (int)$phone1;
		$n_phone2  = (int)$phone2;	
		$n_qualify_name = mysql_real_escape_string (strip_tags($qualify_name),$fp_handle);
		$n_qualify_date = mysql_real_escape_string (strip_tags($qualify_date),$fp_handle);
		$n_qualify_rating  = mysql_real_escape_string (strip_tags($qualify_rating),$fp_handle);
		$n_quran_parts = @mysql_real_escape_string (strip_tags($quran_parts),$fp_handle);
		$n_Issuer = @mysql_real_escape_string (strip_tags($Issuer),$fp_handle);
		$n_current_work = @mysql_real_escape_string (strip_tags($current_work),$fp_handle);
		$n_Joining_Date = mysql_real_escape_string (strip_tags($Joining_Date),$fp_handle);			
		$n_health_state =@mysql_real_escape_string(strip_tags($health_state),$fp_handle);
		$n_ill_cause =@mysql_real_escape_string(strip_tags($ill_cause),$fp_handle);
		$n_data_entery_name =@mysql_real_escape_string(strip_tags($data_entery_name),$fp_handle);
		$n_data_entery_date=@mysql_real_escape_string(strip_tags($data_entery_date),$fp_handle);

	 
		$query = ("INSERT INTO `preacher` (id, `state` ,`type` ,  `warranty_organization` , `first_name` , `meddle_name` , `last_name` , `last_4th_name` , `birth_date` , `sex` , `male_members_no` , `female_members_no` , `residence_state` , `city` , `District` , `section`,`house_no` , `phone1` , `phone2` , `qualify_name` , `qualify_date` , `qualify_rating` , `quran_parts` , `Issuer` , `current_work` , `Joining_Date` , `health_state` , `ill_cause` , `data_entery_name` , `data_entery_date`  )
					VALUE(NULL  , '$n_state' ,'$n_type' ,  '$n_warranty_organization' , '$n_first_name' , '$n_meddle_name' , '$n_last_name' , '$n_last_4th_name' , '$n_birth_date' , '$n_sex' , '$n_male_members_no' , '$n_female_members_no' , '$n_residence_state' , '$n_city' , '$n_District' , '$n_section','$house_no' , '$n_phone1' , '$n_phone2' , '$n_qualify_name', '$n_qualify_date' , '$n_qualify_rating' , '$n_quran_parts' , '$n_Issuer' , '$n_current_work' , '$n_Joining_Date' , '$n_health_state' , '$n_ill_cause' , '$n_data_entery_name' , '$n_data_entery_date'  )");
		
		echo $query;
		$qresult = mysql_query($query);
		if(!$qresult) return false ;
		
		return true ;
		}
		

		// UPDATE
	function fp_preacher_update( $id ,$type  = null ,$state = null  ,  $warranty_organization = null  , $first_name = null  , $meddle_name = null  , $last_name = null  , $last_4th_name = null  , $birth_date = null  , $sex = null  , $male_members_no = null  , $female_members_no = null  , $residence_state = null  , $city = null  , $Distrit = null  , $section = null ,$house_no = null  , $phone1 = null  , $phone2 = null  , $qualify_name = null  , $qualify_date = null  , $qualify_rating = null  , $quran_parts = null  , $Issuer = null  , $current_work = null  , $Joining_Date = null  , $health_state = null  , $ill_cause = null  , $data_entery_name = null  , $data_entery_date = null  ){
		global $fp_handle ;
		$uid = (int)$id;
		if($uid == 0) return false ;
		$preacher = fp_preacher_get_by_id($uid);
		
		if(!$preacher)  return false ;
		
		
		$fields = array();
		$query = "UPDATE `preacher` SET ";
	
		if(!empty($type)){
			$n_type    = (int)$type;
			$fields[@count($fields)] = " `type` = '$n_type' ";
			}		
		
		if(!empty($state)){
			$n_state    = @mysql_real_escape_string(strip_tags($state),$fp_handle);
			$fields[@count($fields)] = " `state` = '$n_state' ";
			}
		if(!empty($warranty_organization)){
			$n_warranty_organization    = @mysql_real_escape_string(strip_tags($warranty_organization),$fp_handle);
			$fields[@count($fields)] = " `warranty_organization` = '$n_warranty_organization' ";
			}
		if(!empty($first_name)){
			$n_first_name   = mysql_real_escape_string(strip_tags($first_name),$fp_handle);
			$fields[@count($fields)] = " `first_name` = '$n_first_name' ";
			}	
		if(!empty($meddle_name)){
			$n_meddle_name   = mysql_real_escape_string(strip_tags($meddle_name),$fp_handle);
			$fields[@count($fields)] = " `meddle_name` = '$n_meddle_name' ";
			}
		
		if(!empty($last_name)){
			$n_last_name  = mysql_real_escape_string(strip_tags($last_name),$fp_handle);
			$fields[@count($fields)] = " `last_name` = '$n_last_name' ";
			}
		if(!empty($last_4th_name)){
			$n_last_4th_name  = mysql_real_escape_string(strip_tags($last_4th_name),$fp_handle);
			$fields[@count($fields)] = " `last_4th_name` = '$n_last_4th_name' ";
			}
		if(!empty($birth_date)){
			$n_birth_date  = mysql_real_escape_string(strip_tags($birth_date),$fp_handle);
			$fields[@count($fields)] = " `birth_date` = '$n_birth_date' ";
			}
		if(!empty($sex)){
			$n_sex   = mysql_real_escape_string(strip_tags($sex),$fp_handle);
			$fields[@count($fields)] = " `sex` = '$n_sex' ";
			}
			
		if(!empty($male_members_no)){
			$n_male_members_no   = mysql_real_escape_string(strip_tags($male_members_no),$fp_handle);
			$fields[@count($fields)] = " `male_members_no` = '$n_male_members_no' ";
			}
		if(!empty($female_members_no)){
			$n_female_members_no   = mysql_real_escape_string(strip_tags($female_members_no),$fp_handle);
			$fields[@count($fields)] = " `female_members_no` = '$n_female_members_no' ";
			}
		if(!empty($mother_last_name)){
			$n_mother_last_name   = mysql_real_escape_string(strip_tags($mother_last_name),$fp_handle);
			$fields[@count($fields)] = " `mother_last_name` = '$n_mother_last_name' ";
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
			$n_house_no   = (int)$house_no ;
			$fields[@count($fields)] = " `house_no` = '$n_house_no' ";
			}
		if(!empty($phone1)){
			$n_phone1   = (int)$phone1 ;
			$fields[@count($fields)] = " `phone1` = '$n_phone1' ";
			}
		if(!empty($phone2)){
			$n_phone2   = (int)$phone2 ;
			$fields[@count($fields)] = " `phone2` = '$n_phone2' ";
			}

		if(!empty($qualify_name)){
			$n_qualify_name = mysql_real_escape_string(strip_tags($qualify_name),$fp_handle);
			$fields[@count($fields)] = " `qualify_name` = '$n_qualify_name' ";
			}
		if(!empty($qualify_date)){
			$n_qualify_date   = mysql_real_escape_string(strip_tags($qualify_date),$fp_handle);
			$fields[@count($fields)] = " `qualify_date` = '$n_qualify_date' ";
			}
		if(!empty($qualify_rating)){
			$n_qualify_rating   = mysql_real_escape_string(strip_tags($qualify_rating),$fp_handle);
			$fields[@count($fields)] = " `qualify_rating` = '$n_qualify_rating' ";
			}
		if(!empty($quran_parts)){
			$n_quran_parts   = (int)$quran_parts;
			$fields[@count($fields)] = " `quran_parts` = '$n_quran_parts' ";
			}
		if(!empty($Issuer)){
			$n_Issuer  = (int)$Issuer;
			$fields[@count($fields)] = " `Issuer` = '$n_Issuer' ";
			}
		if(!empty($current_work)){
			$n_current_work   = (int)$current_work ;
			$fields[@count($fields)] = " `current_work` = '$n_current_work' ";
			}
		if(!empty($Joining_Date)){
			$n_Joining_Date   = mysql_real_escape_string(strip_tags($Joining_Date),$fp_handle);
			$fields[@count($fields)] = " `Joining_Date` = '$n_Joining_Date' ";
			}			
		if(!empty($health_state)){
			$n_health_state   = mysql_real_escape_string(strip_tags($health_state),$fp_handle);
			$fields[@count($fields)] = " `health_state` = '$n_health_state' ";
			}
		if(!empty($ill_cause)){
			$n_ill_cause  = mysql_real_escape_string(strip_tags($ill_cause),$fp_handle);
			$fields[@count($fields)] = " `ill_cause` = '$n_ill_cause' ";
			}
		if(!empty($data_entery_name)){
			$n_data_entery_name   = mysql_real_escape_string(strip_tags($data_entery_name),$fp_handle);
			$fields[@count($fields)] = " `data_entery_name` = '$n_data_entery_name' ";
			}
		if(!empty($data_entery_date)){
			$n_data_entery_date   = mysql_real_escape_string(strip_tags($data_entery_date),$fp_handle);
			$fields[@count($fields)] = " `data_entery_date` = '$n_data_entery_date' ";
			}
			
		$fields[@count($fields)] = " `id` = '$preacher->id' ";
		
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
                echo $query;
		$qresult = @mysql_query($query);
			if(!$qresult) return false ;
			else return true ;
		
		}
		
		// DELETE
	function fp_preacher_delete($id){
		$uid = (int)$id;
		if($uid == 0) return false ;
		$query = sprintf("DELETE FROM `preacher` WHERE `id` = %d",$uid);
		$qresult = @mysql_query($query);
		if(!$qresult) return false ;
		
		return true ;
		}
		
		//--------------------------------experience -------------------
                
		
	// INSERT	
	function fp_experience_add(  $qualifier_name , $organizaton , $date , $preacherID){
		global $fp_handle;
	
		$n_qualifier_name = (int)$qualifier_name ;
		$n_organizaton    = @mysql_real_escape_string(strip_tags($organizaton),$fp_handle);
		$n_date    = @mysql_real_escape_string(strip_tags($date),$fp_handle);
		$n_birth_date  = @mysql_real_escape_string(strip_tags($birth_date),$fp_handle);
		$n_preacherID = (int)$preacherID ;
                
		$query = ("INSERT INTO `experience`(`id` , `qualifier_name` , `organizaton` , `date` , `preacherID`) VALUE(NULL , '$n_qualifier_name' , '$n_organizaton' , '$n_date' , '$n_preacherID')");
		echo $query ;
		
		$qresult = mysql_query($query);
		if(!$qresult) return false ;
		
		return true ;
	}	

		// show all
	function fp_experience_get($extra = ''){
		global $fp_handle ;
		$query = sprintf("SELECT * FROM `experience` %s",$extra);
	
		$qresult = @mysql_query($query);
		
		if(!$qresult) return NULL ; 
		
		$rcount = mysql_num_rows($qresult);
		if($rcount == 0 )  return NULL ;
		
		$experience = array();
		
		for($i = 0 ; $i < $rcount ; $i++)
			$experience[@count($experience)] = @mysql_fetch_object($qresult);
			
		@mysql_free_result($qresult);
		
		return $experience ; 
		}
                
    	function fp_experience_get_by_preacherID($preacherID){
            
		global $fp_handle ;
		$query = sprintf("SELECT * FROM `experience` WHERE `preacherID` = %d ",$preacherID);
	
		$qresult = @mysql_query($query);
		
		if(!$qresult) return NULL ; 
		
		$rcount = mysql_num_rows($qresult);
		if($rcount == 0 )  return NULL ;
		
		$experience = array();
		
		for($i = 0 ; $i < $rcount ; $i++)
			$experience[@count($experience)] = @mysql_fetch_object($qresult);
			
		@mysql_free_result($qresult);
		
		return $experience ; 
		}
		
		// DELETE
	function fp_experience_delete($id){
		$uid = (int)$id;
		if($uid == 0) return false ;
		$query = sprintf("DELETE FROM `experience` WHERE `id` = %d",$uid);
		$qresult = @mysql_query($query);
		if(!$qresult) return false ;
		
		return true ;
		}
               
                
               
?>