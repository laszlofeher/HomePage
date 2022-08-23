<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mportfolio extends CI_Model {

    function __construct() {
        // Call the Model constructor
        parent::__construct();
    }

    public function getPortfolio($limit=6, $from=1){
        $this->db->select(" id,
                            picture,
                            description,
                            url,
                            title");
        $this->db->from("cv_portfolio");
        $this->db->where("deleted",1);
        $this->db->order_by("order","ASC");
        $this->db->limit($limit, $from);
        $query = $this->db->get();
        $data = array();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return $data;
    }

    public function getPortfolioWithDetails($id){
        $id = (int)$id;
        $this->db->select(" cv_portfolio.id,
                            cv_portfolio.picture,
                            cv_portfolio.description,
                            cv_portfolio.url,
                            cv_portfolio.title,
                            cv_portfolio.title2,
                            cv_portfolio.curiosity,
                            cv_portfolio.curiositydescription");
        $this->db->from("cv_portfolio");
        $this->db->where("cv_portfolio.deleted",1);
        $this->db->where("cv_portfolio.id",$id);
        $this->db->order_by("cv_portfolio.order","ASC");
        
        $data = array();
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $data = $query->row_array();
            $this->db->select(" picture,
                                picturedescription
                                ");
            $this->db->from("cv_portfolio_detail");
            $this->db->where("deleted",1);
            $this->db->where("cv_portfolio_id",$id);
            $query2 = $this->db->get();
            if ($query2->num_rows() > 0) {
                $data["detailspicture"] = $query2->result_array();
            }
            return $data;
        }
        return $data;
    }
    
    public function getPortfolioCount(){
        $this->db->select("count(*) as count");
        $this->db->from("cv_portfolio");
        $this->db->where("deleted",1);
        $query = $this->db->get();
        $data = array();
        return $query->row_array()['count'];
    }
    
}
?>
