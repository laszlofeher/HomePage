<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class About extends CI_Model {

    function __construct() {
        // Call the Model constructor
        parent::__construct();
    }
       
    
    public function getAbout(){
        $this->db->select("icon, title, content, skype, phone, email, website, address, firstname, lastname, other, profession");
        $this->db->from("about");
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->row_array();
        }
        return array();
    }
}

?>