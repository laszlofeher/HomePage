<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portfolio extends CI_Controller {
    function __construct(){
        parent::__construct();
        //$this->load->helper(array('url', 'form'));
        //$this->load->library(array(''));
        $this->load->model(array('mportfolio','about'));
    }

    public function index(){
        $this->portfoliolist();
    }
    
    
    public function portfoliolist($from = 1){
        $output = array();
        $this->load->library('pagination');
        $config['base_url']     = base_url("Portfolio/portfoliolist");
        $config['total_rows']   = $this->mportfolio->getPortfolioCount();
        $config['per_page']     = 6;
        
        $config['full_tag_open'] = '<div class="text-center"><ul class="pagination flat-pagination">';
        $config['full_tag_close'] = '</ul></div>';
        
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';    
        
        $config['cur_tag_open'] = '<li><span>';
        $config['cur_tag_close'] = '</span></li>';
        
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

        $config['first_link'] = 'Első';
        $config['last_link'] = 'Utolsó';
        
        
        $this->pagination->initialize($config);
        
        $output["portfolio"]        = $this->mportfolio->getPortfolio(6, (int)$from);
        $output["pagerLink"]        = $this->pagination->create_links();
        //$output["ajax"]           = is_ajax() ? "ajax" : "noajax";
        $this->load->view('portfolio-list', $output);
    }
    
    public function portfoliodetail($id){
        $id = (int)$id;
        $output = array();
        $output["portfoliowithdetail"] = $this->mportfolio->getPortfolioWithDetails($id);
        $this->load->view('portfolio-detail', $output);
    }
    
    public function onlyportfoliodetail($id){
        $id = (int)$id;
        $output = array();
        $output["portfoliowithdetail"] = $this->mportfolio->getPortfolioWithDetails($id);
        $this->load->view('portfolio-only-detail', $output);
    }
}

?>
