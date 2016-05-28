<?php

    //--------------------------------experience -------------------


    // INSERT	
    function fp_experience_add(  $preacherID , $qualifier_name , $organizaton , $date ){
            global $fp_handle;

            $n_preacherID =  @mysql_real_escape_string(strip_tags($preacherID),$fp_handle);
            $n_qualifier_name = @mysql_real_escape_string(strip_tags($qualifier_name),$fp_handle);
            $n_organizaton    = @mysql_real_escape_string(strip_tags($organizaton),$fp_handle);
            $n_date    = @mysql_real_escape_string(strip_tags($date),$fp_handle);


            $query = ("INSERT INTO `experience`(`id` , `preacherID`, `qualifier_name` , `organizaton` , `date` ) VALUE(NULL , '$n_preacherID', '$n_qualifier_name' , '$n_organizaton' , '$n_date' )");
            $qresult = mysql_query($query);
            if(!$qresult) return false ;
            @mysql_free_result($qresult);
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
            $query = sprintf("SELECT * FROM `experience` WHERE `preacherID` = %s",$preacherID);
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
            @mysql_free_result($qresult);
            return true ;
            }


    function fp_experience_update($id, $preacherID = NULL , $qualifier_name = NULL , $organizaton = NULL , $date = NULL){
            global $fp_handle ;
            $uid = (int)$id;
            if($uid == 0) return false ;	
            $fields = array(); 
            $query = "UPDATE `experience` SET ";
            
            if(!empty($preacherID)){
                $n_preacherID   = mysql_real_escape_string(strip_tags($preacherID),$fp_handle);
                $fields[@count($fields)] = " `preacherID` = '$n_preacherID' ";
                    }          
            if(!empty($qualifier_name)){
                $n_qualifier_name    =(int)$qualifier_name;
                $fields[@count($fields)] = " `qualifier_name` = '$n_qualifier_name' ";
             }
            if(!empty($organizaton)){
                $n_organizaton    = @mysql_real_escape_string(strip_tags($organizaton),$fp_handle);
                $fields[@count($fields)] = " `organizaton` = '$n_organizaton' ";
                }
            if(!empty($date)){
                $n_date   = @mysql_real_escape_string(strip_tags($date),$fp_handle);
                $fields[@count($fields)] = " `date` = '$n_date' ";
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
            $query .= ' WHERE `id` = '.$uid;echo $query;
            $qresult = @mysql_query($query);
                    if(!$qresult) return false ;
                    @mysql_free_result($qresult);
                    return true ;
    }     
    ?>

