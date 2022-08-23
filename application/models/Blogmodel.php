<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Blogmodel extends CI_Model {

    function __construct() {
        // Call the Model constructor
        parent::__construct();
    }
       
    public function getAllBlogEntries(){
        $this->db->select(" 
                            id,
                            title,
                            blogsmallcontent,
                            blogcontent,
                            picturepath,
                            facebookcontent,
                            twitter,
                            publicday,
                            draft,
                            live,
                            deleted,
                            link");
        $this->db->from("blogentry");
        $this->db->where("publicday < now()");
        $this->db->where("deleted",1);
        $this->db->order_by('publicday', 'DESC');
        $query = $this->db->get();
        $data = array();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return $data; 
    }
    
    public function getCountOfBlogEntries(){
        $this->db->select(" 
                            count(*) as count");
        $this->db->from("blogentry");
        $this->db->where("publicday < now()");
        $this->db->where("deleted",1);
        $query = $this->db->get();
        $data = array();
        if ($query->num_rows() > 0) {
            return $query->row_array()['count'];
        }
    }
    
    public function getFirstBlogEntry($count=5){
        return $this->getBlogEntries(0, $count);
    }
    
    public function getBlogEntries($from, $count=5){
        if((int)$count > 0){
            $this->db->select("
                            id,
                            title,
                            blogsmallcontent,
                            blogcontent,
                            picturepath,
                            facebookcontent,
                            twitter,
                            publicday,
                            draft,
                            live,
                            deleted,
                            link");
            $this->db->from("blogentry");
            $this->db->where("publicday < now()");
            $this->db->where("deleted",1);
            $this->db->order_by("publicday", "DESC");
            $this->db->limit($count, (int)$from);
            $query = $this->db->get();
            if ($query->num_rows() > 0) {
                return $query->result_array();
            }
            return array();  
        }
    }
    
    public function getBlogEntryById($id){
        $this->db->select(" 
                            id,
                            title,
                            blogsmallcontent,
                            blogcontent,
                            picturepath,
                            facebookcontent,
                            twitter,
                            publicday,
                            draft,
                            live,
                            deleted,
                            link");
        $this->db->from("blogentry");
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
    
    public function getCountOfBlogEntriesbyCategoryId($id){
        $this->db->select(" 
                            count(*) as count");
        $this->db->from("blogentry");
        $this->db->where("publicday < now()");
        $this->db->where("blogcategory_id",(int)$id);
        $this->db->where("deleted",1);
        $query = $this->db->get();
        $data = array();
        if ($query->num_rows() > 0) {
            return $query->row_array()['count'];
        }
    }
    
    public function getFirstBlogEntriesbyCategoryId($id, $count = 5){
        return $this->getBlogEntriesbyCategoryId($id, 0, $count);
    }
    
    public function getBlogEntriesbyCategoryId($id, $from, $count=5){
        if((int)$count > 0){
            $this->db->select("
                            id,
                            title,
                            blogsmallcontent,
                            blogcontent,
                            picturepath,
                            facebookcontent,
                            twitter,
                            publicday,
                            draft,
                            live,
                            deleted,
                            link");
            $this->db->from("blogentry");
            $this->db->where("publicday < now()");
            $this->db->where("deleted",1);
            $this->db->where("blogcategory_id",(int)$id);
            $this->db->order_by("publicday", "asc");
            $this->db->limit((int)$count, (int)$from);
            $query = $this->db->get();
            if ($query->num_rows() > 0) {
                return $query->result_array();
            }
            return array();  
        }
    }
    
    public function getBlogCategoryWithBlogentryCount(){
        $this->db->select(" 
                            blogcategory.id as id,
                            categoryname,
                            count(*) as count");
        $this->db->from("blogcategory");
        $this->db->join('blogentry','blogcategory.id = blogentry.blogcategory_id','LEFT');
        $this->db->where("blogcategory.deleted",1);
        $this->db->where("blogentry.deleted",1);
        $this->db->group_by('blogcategory.id');
        $query = $this->db->get();
        $data = array();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return $data; 
    }
    
    public function getDateAndCountByBlogentries(){
        $this->db->select(" 
                            year(publicday) as year,
                            month(publicday) as month,
                            count(*) as count");
        $this->db->from("blogentry");
        $this->db->where("blogentry.deleted",1);
        $this->db->group_by(array('year(publicday)','month(publicday)'));
        $query = $this->db->get();
        $data = array();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return $data; 
    }
    
    public function getCountOfBlogEntriesbyYearMonth($year, $month){
        $this->db->select(" 
                            count(*) as count");
        $this->db->from("blogentry");
        $this->db->where("publicday < now()");
        $this->db->where("year(publicday)",(int)$year);
        $this->db->where("month(publicday)",(int)$month);
        $this->db->where("deleted",1);
        $query = $this->db->get();
        $data = array();
        if ($query->num_rows() > 0) {
            return $query->row_array()['count'];
        }
    }
    
    public function getFirstBlogEntriesbyYearMonth($year, $month, $count = 5){
        return $this->getBlogEntriesbyYearMonth($year, $month, 0, $count);
    }
    
    public function getBlogEntriesbyYearMonth($year, $month, $from, $count=5){
        if((int)$count > 0){
            $this->db->select("
                            id,
                            title,
                            blogsmallcontent,
                            blogcontent,
                            picturepath,
                            facebookcontent,
                            twitter,
                            publicday,
                            draft,
                            live,
                            deleted,
                            link");
            $this->db->from("blogentry");
            $this->db->where("publicday < now()");
            $this->db->where("deleted",1);
            $this->db->where("year(publicday)",(int)$year);
            $this->db->where("month(publicday)",(int)$month);
            $this->db->order_by("publicday", "asc");
            $this->db->limit((int)$count, (int)$from);
            $query = $this->db->get();
            if ($query->num_rows() > 0) {
                return $query->result_array();
            }
            return array();  
        }
    }
    /**
     * SELECT bt.tagname, count(*) as count 
     * FROM blogentry be 
     * JOIN blogentrytag bet ON(be.id = bet.blogentry_id)
     * LEFT JOIN blogtag bt ON(bet.blogtag_id = bt.id) 
     * group by bt.id 
     * order by count desc
     */
    
    public function getPopularTagList($count = 5){
        $this->db->select(" bt.id,
                            bt.tagname,
                            bt.normalizedtagname,
                            count(*) as count");
        $this->db->from("blogentry be");
        $this->db->join('blogentrytag bet','be.id = bet.blogentry_id');
        $this->db->join('blogtag bt','bet.blogtag_id = bt.id', 'left');
        $this->db->where("publicday < now()");
        $this->db->where("deleted",1);
        $this->db->group_by('bt.id');
        $this->db->order_by("count", "desc");
        $this->db->limit((int)$count, 0);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return array();  
    }
    
    public function tagNameCheck($tagname){
        $this->db->select("bt.normalizedtagname");
        $this->db->from("blogtag bt");
        $this->db->where("normalizedtagname", $tagname);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return array(); 
    }
    
    public function getComments($blogentryId){
        $this->db->select("id, cname, comment, email, website");
        $this->db->from("blogcomment bc");
        $this->db->where("visible", 1);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return array();
    }
    
    public function saveComment($blogentryId, $name, $email, $website, $message){
        $data = array(
            'cname'         => $name,
            'email'         => $email,
            'website'       => $website,
            'comment'       => $message,
            'visible'       => 0,
            'blogentry_id'  => $blogentryId
        );
        $this->db->insert('blogcomment', $data);
        return $this->db->insert_id();
    }
}

?>