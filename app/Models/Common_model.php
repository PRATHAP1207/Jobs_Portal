<?php
 namespace App\Models;
 use CodeIgniter\Model;
 use CodeIgniter\Database\ConnectionInterface;
 

 class Common_model extends Model{
    function getRecord(){
    $query=$this->db->query('SELECT jobs.job_id, categories.category, jobs.title, jobs.description,jobs.city,jobs.country,jobs.type,jobs.date_posted,jobs.closing_date,
    requirement_details.education_details
    FROM jobs
    INNER JOIN categories
    ON jobs.category=categories.id
    INNER JOIN requirement_details
    ON jobs.education = requirement_details.id where jobs.status=1');
    return $query->getResult();
    }

    function get_Records($table, $fields = '*', $where = ''){
        $builder = $this->db->table($table);
        if ($fields)
            $builder->select($fields);
        if (!empty($where))
            $builder->where($where);
        return $builder->get()->getResult();

    }

	function getEducation($details,$mode){
	
		$query=$this->db->query("SELECT * FROM `requirement_details` WHERE id IN ($details) and mode='$mode'");
        return $query->getResult();
	}

	 function ApplicationData($table,$data){
		$builder = $this->db->table($table);
		$builder->insert($data);
		return $this->db->insertID();
		
	 }


}