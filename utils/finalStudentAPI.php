<?php

	// SELSECT ALL
function fp_final_student_get($extra = ''){
	
	global $fp_handle ;
	$query = sprintf("SELECT * FROM `finalstudent` %s",$extra);

	$qresult = @mysql_query($query);
	
	if(!$qresult) return NULL ; 
	
	$rcount = mysql_num_rows($qresult);
	if($rcount == 0 )  return NULL ;
	
	$studnets = array();
	
	for($i = 0 ; $i < $rcount ; $i++)
		$students[@count($students)] = @mysql_fetch_object($qresult);
		
	@mysql_free_result($qresult);
	
	return $students ; 
	}

    function fp_final_student_get_num_rows(){
            global $fp_handle ;
            $query = sprintf("SELECT * FROM `finalstudent`");
            $qresult = @mysql_query($query);

            if(!$qresult) return -1 ; 

            return mysql_num_rows($qresult);
    }

function fp_final_student_get_last_id(){
        global $fp_handle ;
	$students = fp_final_student_get("ORDER BY `id` DESC LIMIT 1");
	if($students == NULL) return NULL ;
	$student = $students[0];
	return $student->id ;
}
	// SELECT BY ID
	function fp_final_student_get_by_id($id){
		$oid = (int)$id;
		if($oid == 0) return NULL ;
		
		$students = fp_final_student_get("WHERE `id` = ".$oid);
		if($students == NULL) return NULL ;
		$student = $students[0];
		return $student ;
		}

	// INSERT	
	function fp_final_student_add($state , $warranty_organization ,$saving, $first_name , $meddle_name , $last_name , $last_4th_name , $birth_date , $sex , $father_dead_date , $father_dead_cause , 	$father_work,$sisters_no , $brothers_no ,$residence_state , $city , $District , $section,$house_no , $phone1 , $phone2 ,$school_name ,$path ,$major ,  $level , $year , $last_result,$quran_parts ,$study_year_no , $study_date_start , $expected_grad  , $health_state , $ill_cause , $data_entery_name , $data_entery_date ,$head_dep_name,$head_dep_date ){
            global $fp_handle;
            $n_state = @mysql_real_escape_string(strip_tags($state),$fp_handle); 
            $n_warranty_organization = (int)$warranty_organization;
            $n_saving = (int)$saving ;
            $n_first_name  = @mysql_real_escape_string(strip_tags($first_name),$fp_handle);
            $n_meddle_name  = @mysql_real_escape_string(strip_tags($meddle_name),$fp_handle);
            $n_last_name  = @mysql_real_escape_string(strip_tags($last_name),$fp_handle);
            $n_last_4th_name  = @mysql_real_escape_string(strip_tags($last_4th_name),$fp_handle);
            $n_birth_date  = @mysql_real_escape_string(strip_tags($birth_date),$fp_handle);
            $n_sex = @mysql_real_escape_string(strip_tags($sex),$fp_handle);
            $n_father_dead_date = @mysql_real_escape_string(strip_tags($father_dead_date),$fp_handle);
            $n_father_dead_cause = @mysql_real_escape_string(strip_tags($father_dead_cause),$fp_handle);
            $n_father_work = @mysql_real_escape_string(strip_tags($father_work),$fp_handle);
            $n_sisters_no  = (int)$sisters_no;
            $n_brothers_no  = (int)$brothers_no;	
            $n_residence_state = @mysql_real_escape_string(strip_tags($residence_state),$fp_handle);
            $n_city = @mysql_real_escape_string(strip_tags($city),$fp_handle);
            $n_District = @mysql_real_escape_string(strip_tags($District),$fp_handle);
            $n_section  = (int)$section;
            $n_house_no  = @mysql_real_escape_string(strip_tags($house_no),$fp_handle);
            $n_phone1  = @mysql_real_escape_string(strip_tags($phone1),$fp_handle);
            $n_phone2  = @mysql_real_escape_string(strip_tags($phone2),$fp_handle);
            $n_school_name =@mysql_real_escape_string(strip_tags($school_name),$fp_handle);
            $n_path =@mysql_real_escape_string(strip_tags($path),$fp_handle);
            $n_major =@mysql_real_escape_string(strip_tags($major),$fp_handle);
            $n_level  = @mysql_real_escape_string(strip_tags($level),$fp_handle);
            $n_year  =  @mysql_real_escape_string(strip_tags($year),$fp_handle);;
            $n_last_result =@mysql_real_escape_string(strip_tags($last_result),$fp_handle);	
            $n_quran_parts  = (int)$quran_parts;
            $n_study_year_no = $study_year_no ;
            $n_study_date_start = $study_date_start;
            $n_expected_grad = @mysql_real_escape_string(strip_tags($expected_grad),$fp_handle);
            $n_health_state =@mysql_real_escape_string(strip_tags($health_state),$fp_handle);
            $n_ill_cause =@mysql_real_escape_string(strip_tags($ill_cause),$fp_handle);
            $n_data_entery_name =@mysql_real_escape_string( strip_tags($data_entery_name),$fp_handle);
            $n_data_entery_date=@mysql_real_escape_string(strip_tags($data_entery_date),$fp_handle);
            $n_head_dep_name = @mysql_real_escape_string(strip_tags($head_dep_name),$fp_handle);
            $n_head_dep_date = @mysql_real_escape_string(strip_tags($head_dep_date),$fp_handle);


            $query = ("INSERT INTO `finalstudent` (id, `state` , warranty_organization , saving , `first_name` , `meddle_name` , `last_name` , `last_4th_name` , `birth_date` , `sex` , `father_dead_date` , `father_dead_cause` , 	`father_work`,sisters_no , brothers_no ,residence_state , `city` , `District` ,section , house_no , phone1 , phone2 ,`school_name` ,`path` ,`major` , level , year , `last_result`, quran_parts , study_year_no , `study_date_start` , `expected_grad`  , `health_state` , `ill_cause` , `data_entery_name` , `data_entery_date` , `head_dep_name` , `head_dep_date` )
                                    VALUE(0 ,$n_state , $n_warranty_organization, $n_saving , '$n_first_name' , '$n_meddle_name' , '$n_last_name' , '$n_last_4th_name' , '$n_birth_date' , $n_sex , '$n_father_dead_date' , '$n_father_dead_cause' , 	'$n_father_work' ,$n_sisters_no , $n_brothers_no ,$n_residence_state, '$n_city' , '$n_District' , '$n_section','$n_house_no' , '$n_phone1' , '$n_phone2' ,'$n_school_name' ,'$n_path' ,'$n_major', '$n_level' , '$n_year' , '$n_last_result','$n_quran_parts' ,'$n_study_year_no' , '$n_study_date_start' , '$n_expected_grad'  , '$n_health_state' , '$n_ill_cause' , '$n_data_entery_name' , '$n_data_entery_date', '$n_head_dep_name' , '$n_head_dep_date' )");

            echo $query ;

            $qresult = mysql_query($query);echo mysql_error();
            if(!$qresult) return false ;
            @mysql_free_result($qresult);
            return true ;
	}
	
	
	
	// UPDATE
function fp_final_student_update($id , $state = Null , $warranty_organization = Null, $saving = Null  , $last_sponsorship_date = Null, $first_name = Null , $meddle_name = Null , $last_name = Null , $last_4th_name = Null , $birth_date = Null , $sex = Null , $father_dead_date = Null , $father_dead_cause = Null , 	$father_work = Null ,$sisters_no = Null , $brothers_no = Null ,$residence_state = Null , $city = Null , $District = Null , $section = Null ,$house_no = Null , $phone1 = Null , $phone2 = Null ,$school_name = Null ,$path = Null , $major = Null , $year = Null , $last_result = Null ,$quran_parts = Null ,$study_year_no = Null , $study_date_start = Null , $expected_grad  = Null , $health_state = Null , $ill_cause = Null , $data_entery_name = Null , $data_entery_date = Null , $head_dep_name = Null, $head_dep_name = Null  ){

	global $fp_handle ;
	$uid = (int)$id;
	if($uid == 0) return false ;
    
	$student = fp_final_student_get_by_id($uid);
	
	if(!$student)  return false ;
	$fields = array();
	$query = "UPDATE `finalstudent` SET ";
	if(!empty($state)){
		$n_state    = @mysql_real_escape_string(strip_tags($state),$fp_handle);
		$fields[@count($fields)] = " `state` = '$n_state' ";
		}
	if(!empty($warranty_organization)){
		$n_warranty_organization    = @mysql_real_escape_string(strip_tags($warranty_organization),$fp_handle);
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
	//if(!empty($sex)){
		$n_sex   = mysql_real_escape_string(strip_tags($sex),$fp_handle);
		$fields[@count($fields)] = " `sex` = '$n_sex' ";
		//}
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
	if(!empty($sisters_no)){
		$n_sisters_no   = (int)$sisters_no ;
		$fields[@count($fields)] = " `sisters_no` = '$n_sisters_no' ";
		}
	if(!empty($brothers_no)){
		$n_brothers_no   = (int)$brothers_no ;
		$fields[@count($fields)] = " `brothers_no` = '$n_brothers_no' ";
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
		$n_phone1   = mysql_real_escape_string(strip_tags($phone1),$fp_handle);
		$fields[@count($fields)] = " `phone1` = '$n_phone1' ";
		}
	if(!empty($phone2)){
		$n_phone2   = mysql_real_escape_string(strip_tags($phone2),$fp_handle);
		$fields[@count($fields)] = " `phone2` = '$n_phone2' ";
		}

	if(!empty($school_name)){
		$n_school_name   =(int)$school_name ;
		$fields[@count($fields)] = " `school_name` = '$n_school_name' ";

		}
	if(!empty($path)){
		$n_path   = mysql_real_escape_string(strip_tags($path),$fp_handle);
		$fields[@count($fields)] = " `path` = '$n_path' ";
		}
	if(!empty($major)){
		$n_major   = mysql_real_escape_string(strip_tags($major),$fp_handle);
		$fields[@count($fields)] = " `major` = '$n_major' ";
		}
	if(!empty($level)){
		$n_level   = mysql_real_escape_string(strip_tags($level),$fp_handle);
		$fields[@count($fields)] = " `level` = '$n_level' ";
		}
	if(!empty($year)){
		$n_year  = mysql_real_escape_string(strip_tags($year),$fp_handle);
		$fields[@count($fields)] = " `year` = '$n_year' ";
		}			
	if(!empty($last_result)){
		$n_last_result   = mysql_real_escape_string(strip_tags($last_result),$fp_handle);
		$fields[@count($fields)] = " `last_result` = '$n_last_result' ";
		}
	if(!empty($quran_parts)){
		$n_quran_parts   = (int)$quran_parts ;
		$fields[@count($fields)] = " `quran_parts` = '$n_quran_parts' ";
		}		
	if(!empty($study_year_no)){
		$n_study_year_no   = (int)$study_year_no ;
		$fields[@count($fields)] = " `study_year_no` = '$n_study_year_no' ";
		}
	if(!empty($study_date_start)){
		$n_study_date_start   = $study_date_start ;
		$fields[@count($fields)] = " `study_date_start` = '$n_study_date_start' ";
		}
	if(!empty($expected_grad)){
		$n_expected_grad   = $expected_grad ;
		$fields[@count($fields)] = " `expected_grad` = '$n_expected_grad' ";
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
	if(!empty($head_dep_name)){
		$n_head_dep_name   = mysql_real_escape_string(strip_tags($head_dep_name),$fp_handle);
		$fields[@count($fields)] = " `head_dep_name` = '$n_head_dep_name' ";
		}
	if(!empty($head_dep_date)){
		$n_head_dep_date  = mysql_real_escape_string(strip_tags($head_dep_date),$fp_handle);
		$fields[@count($fields)] = " `head_dep_date` = '$n_head_dep_date' ";
		}
	$fields[@count($fields)] = " `id` = '$student->id' ";
	
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
	$qresult = @mysql_query($query);echo $query;
		if(!$qresult) return false ;
                @mysql_free_result($qresult);
		return true ;
	
	}
	
	// DELETE
function fp_final_student_delete($id){
	$uid = (int)$id;
	if($uid == 0) return false ;
	$query = sprintf("DELETE FROM `finalstudent` WHERE `id` = %d",$uid);
	$qresult = @mysql_query($query);
	if(!$qresult) return false ;
	@mysql_free_result($qresult);
	return true ;
	}
	
   
?>