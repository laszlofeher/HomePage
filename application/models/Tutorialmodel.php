<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Description of Tutorialmodel
 *
 * @author feherlaszlo
 */
class Tutorialmodel extends CI_Model{
    function __construct() {
        // Call the Model constructor
        parent::__construct();
    }
       
    public function getAllTutorialEntries(){
        $this->db->select(" 
                            id,
                            title,
                            content,
                            picturepath,
                            publicday,
                            draft,
                            live");
        $this->db->from("tutorial");
        $this->db->where("publicday < now()");
        $this->db->where("deleted",1);
        $query = $this->db->get();
        $data = array();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return $data; 
    }
    
    public function getCountOfTutorialEntries(){
        $this->db->select(" 
                            count(*) as count");
        $this->db->from("tutorial");
        $this->db->where("publicday < now()");
        $this->db->where("deleted",1);
        $query = $this->db->get();
        $data = array();
        if ($query->num_rows() > 0) {
            return $query->row_array()['count'];
        }
    }
    
    public function getFirstTutorialEntry($count=5){
        return $this->getTutorialEntries(0, $count);
    }
    
    public function getTutorialEntries($from, $count=5){
        if((int)$count > 0){
            $this->db->select("
                            id,
                            title,
                            shortcontent,
                            picturepath,
                            publicday,
                            draft,
                            live,
                            deleted");
            $this->db->from("tutorial");
            $this->db->where("publicday < now()");
            $this->db->where("deleted",1);
            $this->db->order_by("publicday", "asc");
            $this->db->limit($count, (int)$from);
            $query = $this->db->get();
            if ($query->num_rows() > 0) {
                return $query->result_array();
            }
            return array();  
        }
    }
    
    public function getTutorialEntryById($id){
        $this->db->select(" id,
                            title,
                            shortcontent,
                            content,
                            picturepath,
                            publicday,
                            draft,
                            live,
                            deleted,
                            type");
        $this->db->from("tutorial");
        $this->db->where("publicday < now()");
        $this->db->where("deleted",1);
        $this->db->where("id",(int)$id);
        $query = $this->db->get();
        $data = array();
        if ($query->num_rows() > 0) {
            return $query->row_array();
        }
        return $data; 
    }
    
    /*
SELECT * FROM `tutorialentry` t1 LEFT JOIN tutorialentry t2 ON(t1.id=t2.tutorialentry_id) 
WHERE t1.tutorialentry_id IS NULL AND tutorial_id = $id
     * order majd kell egy ilyen mező és order by is
     *      */
    public function getTutorialBookEntriesById($id){
        $this->db->select(" t1.id,
                            t1.subtitle as title,
                            t1.content,
                            t1.tutorial_id,
                            t1.tutorialentry_id,
                            t2.id as subid,
                            t2.subtitle,
                            t2.content as subcontent,
                            if(t2.tutorialentry_id IS NOT NULL, 'submenu','menu') as menutype");
        $this->db->from("tutorialentry t1");
        $this->db->join("tutorialentry t2","t1.id = t2.tutorialentry_id", "LEFT");
        $this->db->where("t1.tutorial_id",(int)$id);
        $this->db->where("t1.tutorialentry_id IS NULL", NULL, false);
        $this->db->order_by("t1.torder ASC, t2.torder ASC");
        $query = $this->db->get();
        $data = array();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return $data; 
    }
    
    public function getDateAndCountByTutorialentries(){
        $this->db->select(" 
                            year(publicday) as year,
                            month(publicday) as month,
                            count(*) as count");
        $this->db->from("tutorial");
        $this->db->where("tutorial.deleted",1);
        $this->db->group_by(array('year(publicday)','month(publicday)'));
        $query = $this->db->get();
        $data = array();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return $data; 
    }
    
    public function getComments($blogentryId){
        /*$this->db->select("id, cname, comment, email, website");
        $this->db->from("blogcomment bc");
        $this->db->where("visible", 1);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }*/
        return array();
    }
    
}
