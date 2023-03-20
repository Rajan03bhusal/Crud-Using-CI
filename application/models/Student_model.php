<?php
class Student_model extends CI_Model{

    function create($Student_list){

        $this->db->insert('students',$Student_list);
        // insert values into database table


    }

    function all(){
        return $students= $this->db->get('students')->result_array();
    }

    function getStudent($stu_id){
        $this->db->where('id',$stu_id);
        return $students= $this->db->get('students')->row_array();

        
    }
    function UpdateStudent($stu_id,$students){
        $this->db->where('id',$stu_id);
        $this->db->update('students',$students);
    
    }

}

?>