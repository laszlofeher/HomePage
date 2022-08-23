<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    function __construct(){
        parent::__construct();
        //$this->load->helper(array('url', 'form'));
        //$this->load->library(array(''));
        $this->load->model(array('blogmodel','cv','about','mportfolio'));
    }
    
    public function index(){
        $output = array();
        $output["skills"]           = $this->cv->getSkills();
        $output["moreskills"]       = $this->cv->getMoreSkills();
        $output["moreskillscount"]  = $this->cv->getMoreSkillsCount();
        $output["portfolio"]        = $this->mportfolio->getPortfolio();
        $output["employement"]      = $this->cv->getEmployment();
        $output["education"]        = $this->cv->getEducation();
        $output["about"]            = $this->about->getAbout();
        $output["blog"]             = $this->blogmodel->getFirstBlogEntry();
        //$output["ajax"]           = is_ajax() ? "ajax" : "noajax";
        $this->load->view('home', $output);
    }
}

?>
