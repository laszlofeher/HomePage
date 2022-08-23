<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cv extends CI_Model {

    function __construct() {
        // Call the Model constructor
        parent::__construct();
    }
    
    public function getCvDetails(){
        $this->db->select(" id,
                            birthdate,
                            birthcity,
                            title,
                            skillstitle,
                            skillstext");
        $this->db->from("cv");
        $this->db->where("deleted",1);
        $query = $this->db->get();
        
        if ($query->num_rows() > 0) {
            return $query->row_array();
        }
        return array();
    }
    
    public function getEmployment(){
        $this->db->select(" name,
                            assignament,
                            dfrom,
                            year(dfrom) as yfrom,
                            dto,
                            year(dto) as yto,
                            memo,
                            if(employer_visible = 1, employer, '-') as employer,
                            if(link_visible = 1, link, '-') as link, 
                            if(position_visible = 1, position, '-') as position,
                            deleted,
                            employer_visible,
                            link_visible,
                            position_visible");
        $this->db->from("cv_work");
        $this->db->where("deleted",1);
        $this->db->order_by("dfrom","DESC");
        $query = $this->db->get();
        $data = array();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return $data;
    }
    
    public function getEducation(){
        $this->db->select(" name,
                            faculty,
                            dfrom,
                            year(dfrom) as yfrom,
                            dto,
                            year(dto) as yto,
                            memo,
                            school,
                            link,
                            position,
                            deleted,
                            school_visible,
                            link_visible,
                            position_visible");
        $this->db->from("cv_education");
        $this->db->where("deleted",1);
        $this->db->order_by("dfrom","DESC");
        $query = $this->db->get();
        $data = array();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return $data;
    }
    
    public function getSkills(){
        $this->db->select(" name,
                            percent,
                            order");
        $this->db->from("cv_skills");
        $this->db->where("deleted",1);
        $this->db->where("group",'skill');
        $this->db->order_by("order","ASC");
        $query = $this->db->get();
        $data = array();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return $data;
    }

    public function getSkillsCount(){
        $this->db->select(" count(*) as count");
        $this->db->from("cv_skills");
        $this->db->where("deleted",1);
        $this->db->where("group",'skill');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->row_array()['count'];
        }
        return -1;
    }
    
    
    public function getMoreSkills(){
        $this->db->select(" name,
                            percent,
                            order");
        $this->db->from("cv_skills");
        $this->db->where("deleted",1);
        $this->db->where("group",'moreskills');
        $this->db->order_by("order","ASC");
        $query = $this->db->get();
        $data = array();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return $data;
    }
    
    public function getMoreSkillsCount(){
        $this->db->select(" count(*) as count");
        $this->db->from("cv_skills");
        $this->db->where("deleted",1);
        $this->db->where("group",'moreskills');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array()[0]["count"];
        }
        return 0;
    }
    
    public function getPortfolio(){
        $this->db->select(" picture,
                            url,
                            title");
        $this->db->from("cv_portfolio");
        $this->db->where("deleted",1);
        $this->db->order_by("order","ASC");
        $query = $this->db->get();
        $data = array();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return $data;
    }
}
?>
