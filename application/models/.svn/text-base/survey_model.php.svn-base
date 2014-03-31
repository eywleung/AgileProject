<?php

class Survey_model extends CI_Model {

	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->database();

    }

    function addEntriesPartOne($data){
    	$this->db->insert('survey_entries', $data); 
    	$insert_id = $this->db->insert_id();
    	return $insert_id;
    }

    function getPartOneResults( $field = 'q1_radio'){

        $sql = "
            SELECT 
                `".$field."` as 'column', 
                count(`".$field."`) as 'number' 
            FROM `survey_entries` 
            GROUP BY `".$field."` ";

        switch ($field) {
            case 'q2_radio':
                $sql .= " ORDER BY FIELD('q2_radio','Unstructured','Repeatable','Defined','Managed','Optimizing') ";
                break;

            case 'q3_radio':
                $sql .= " ORDER BY FIELD('q3_radio','100% traditional','75% traditional','50/50','75% agile','100% traditional') ";
                break;

            case 'q4_radio':
                $sql .= " ORDER BY FIELD('q4_radio','Very Dissatisfied','Dissatisfied','Neutral','Satisfied','Very Satisfied') ";
                break;

            case 'q6_radio':
                $sql .= " ORDER BY FIELD('q6_radio','In the last year','2 yrs ago','3 yrs ago','4 yrs ago','5 or more yrs ago','N/A') ";
                break;
        }

    	$query =  $this->db->query($sql);
    	foreach ($query->result() as $row)
		{
		   $data[$row->column] = $row->number;
		}

		return $data;
    }

    function addEntriesQ7($array=NULL,$id){
        if(is_array($array)){
            foreach ($array as $value){
                $data[] = array(
                'entry_id' => $id,
                'column' => 'q7',
                'data' => $value,
                'action' => 'submitted'
                );
            }

            $this->db->insert_batch('survey_subEntries',$data);
        }
    }

    function addEmailForReport($emailAddress, $id){
        $data = array(
            'entry_id' => $id ,
            'column' => 'emailAddress' ,
            'data' => $emailAddress,
            'action' => 'submitted'
        );
        $this->db->set('datetime_modified', 'NOW()', FALSE);
        $this->db->insert('survey_subEntries', $data); 
    }

    function saveEntryFollowUpQuestions($questionId, $response, $action, $id){

        //Search if this ID has already responsed to this questionid...
        $query = $this->db->get_where('survey_subEntries', array('entry_id' => $id, 'column' => $questionId) );

        if( $query->num_rows() > 0 ){ //update
            $data = array(
               'data' => $response,
               'action' => $action
            );
            $this->db->set('datetime_modified', 'NOW()', FALSE);
            $this->db->update('survey_subEntries', $data, array('entry_id' => $id , 'column' => $questionId)); 
            return TRUE;
        }
        else { //insert
            $data = array(
               'entry_id' => $id ,
               'column' => $questionId ,
               'data' => $response,
               'action' => $action
            );
            $this->db->set('datetime_modified', 'NOW()', FALSE);
            $this->db->insert('survey_subEntries', $data); 
            return TRUE;
        }

        return FALSE;
        
    }

    function getEntries(){
        $query = $this->db->get('survey_entries');
        return $query;
    }

    function getEntries_q5($column){

        for($i=1; $i<=7; $i++){
            $data[$i] = '0';
        }

        $query = $this->db->query("SELECT ".$column." as 'column', count(".$column.") as 'count' FROM `survey_entries` GROUP BY ".$column." ");
        if ($query->num_rows() > 0)
        {
            foreach ($query->result() as $row)
            {
                if($row->column == '1'){
                    $data[1] = $row->count;
                } else if($row->column == '2'){
                    $data[2] = $row->count;
                } else if($row->column == '3'){
                    $data[3] = $row->count;
                } else if($row->column == '4'){
                    $data[4] = $row->count;
                } else if($row->column == '5'){
                    $data[5] = $row->count;
                } else if($row->column == '6'){
                    $data[6] = $row->count;
                } else if($row->column == '7'){
                    $data[7] = $row->count;
                }
            }
        }
        return $data;
    }

    function getSubEntries($column){
    	$query = $this->db->get_where('survey_subEntries',array('column' => $column));
		return $query;
    }

    function getSubEntries_q7(){
        $query = $this->db->query("SELECT data as 'Response' FROM `survey_subEntries` WHERE `column` LIKE 'q7' ORDER by data ASC");
        return $query;
    }


    function canAccess(){

		$query = $this->db->get_where('users',array('computing_id' => $this->computing_id), 1);
		$rowcount =  $query->num_rows();
		if( $rowcount > 0 ){
			return TRUE;
		}
		else {
			return FALSE;
		}
    }

}