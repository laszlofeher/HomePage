<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {
    function __construct(){
        parent::__construct();
        //$this->load->helper(array('url', 'form'));
        //$this->load->library(array(''));
        $this->load->model(array('blogmodel','cv','about'));
        $this->load->library(array('pagination','recaptcha', 'form_validation'));
        $this->load->helper(array('datehelper','generate','form','url'));
    }
    
    public function index(){
        $this->list();
    }
    
    public function list($from=0){
        $output = array();
        $config = $this->pagerSettings(base_url('blog/list'), $this->blogmodel->getCountOfBlogEntries());
        $this->pagination->initialize($config);
        if(!isset($from))
        {
            $output["blog"]         = $this->blogmodel->getFirstBlogEntry();
        }
        else 
        {
            $output["blog"]         = $this->blogmodel->getBlogEntries((int)$from);
        }
        $output['pagelinks']    = $this->pagination->create_links();
        $this->load->view('bloglist', $output);
    }
    
    public function detail($id=0){
        if($id > 0){
            $output = array();
            $output['categoryandcount'] = $this->blogmodel->getBlogCategoryWithBlogentryCount();
            $output['dateandcount']     = $this->blogmodel->getDateAndCountByBlogentries();
            $output['blogtags']         = $this->blogmodel->getPopularTagList();
            $output['blogdetail']       = $this->blogmodel->getBlogEntryById((int)$id);
            $output['recaptcha']        = $this->recaptcha->create_box();
            $output['comments']         = $this->blogmodel->getComments((int)$id);
            $output['blogentryid']      = $id;
            $this->form_validation->set_rules('fullname', 'Teljes név', 'alpha_numeric|trim|required');
            $this->form_validation->set_rules('email', 'Email cím', 'required|valid_email');
            $this->form_validation->set_rules('website', 'Web oldal', 'valid_url');
            $this->form_validation->set_rules('message', 'Üzenet', 'required');

            if ($this->form_validation->run() == FALSE)
            {
                $this->load->view('blogdetail', $output);
            }
            else
            {
                $reCaptchaIsValid = $this->recaptcha->is_valid();
                if($reCaptchaIsValid['success']){
                    $blogentryId    = $this->input->post('blogentryid');
                    $name           = $this->input->post('fullname');
                    $email          = $this->input->post('email');
                    $website        = $this->input->post('website');
                    $message        = $this->input->post('message');

                    $this->blogmodel->saveComment($blogentryId, $name, $email, $website, $message);
                    redirect('/blog/detail/'.(int)$id, 'refresh');
                }else{
                    $output['reCaptchaNotValid']   = 'A Google reCaptcha nem megfelelő!';
                    $this->load->view('blogdetail', $output);
                } 
            }
        }
        else
        {
            redirect('blog/list');
        }
    }
    
    public function onlyblogdetail($id=0){
        if($id > 0){
            $output = array();
            $output['categoryandcount'] = $this->blogmodel->getBlogCategoryWithBlogentryCount();
            $output['dateandcount']     = $this->blogmodel->getDateAndCountByBlogentries();
            $output['blogtags']         = $this->blogmodel->getPopularTagList();
            $output['blogdetail']       = $this->blogmodel->getBlogEntryById((int)$id);
            $output['recaptcha']        = $this->recaptcha->create_box();
            $output['comments']         = $this->blogmodel->getComments((int)$id);
            $output['blogentryid']      = $id;
            
            $this->load->view('blog-only-detail', $output);
        } else {
            redirect('blog/list');
        }
    }
    
    public function bloglistbycategory($id = 0, $from = 0, $count = 5){
        if($id > 0){
            $output = array();
            $config = $this->pagerSettings(base_url('blog/bloglistbycategory/'.$id.'/'), $this->blogmodel->getCountOfBlogEntriesbyCategoryId((int)$id));
            $this->pagination->initialize($config);
            if(!isset($from))
            {
                $output["blog"]         = $this->blogmodel->getFirstBlogEntriesbyCategoryId((int)$id);
            }
            else 
            {
                $output["blog"]         = $this->blogmodel->getBlogEntriesbyCategoryId((int)$id, (int)$from);
            }
            $output['pagelinks']    = $this->pagination->create_links();
            $this->load->view('bloglist', $output);
        }
        else
        {
            redirect('blog/list');
        }
    }
    
    public function bloglistbyyearmonth($year, $month, $from = 0, $count = 5){
        if(strlen($year) > 0 && strlen($from) > 0){
            $output = array();
            $year = (int)str_replace('y', '', $year);
            $month = (int)str_replace('m', '', $month);
            if($year > 0 && $month > 0 && $month < 13)
            {
                $config = $this->pagerSettings(base_url('blog/bloglistbyyearmonth/y'.$year.'/m'.$month.'/'), $this->blogmodel->getCountOfBlogEntriesbyYearMonth((int)$year, (int)$month));
                $this->pagination->initialize($config);
                if(!isset($from))
                {
                    $output["blog"]         = $this->blogmodel->getFirstBlogEntriesbyYearMonth((int)$year, (int)$month);
                }
                else 
                {
                    $output["blog"]         = $this->blogmodel->getBlogEntriesbyYearMonth((int)$year, (int)$month, $from);
                }
                $output['pagelinks']    = $this->pagination->create_links();
                $this->load->view('bloglist', $output);
            }
            else
            {
                redirect('blog/list');
            }
        }
        else
        {
            redirect('blog/list');
        }
    }
    
    public function bloglistbyPopularTag($populartag, $from = 0, $count = 5){
        $output = array();
        $populartag = filter_var($populartag, FILTER_SANITIZE_STRING);
        $normalizedpopulartag = $this->blogmodel->tagNameCheck($populartag);
        
        
        
        $config = $this->pagerSettings(base_url('blog/bloglistbypopulartag/'.$normalizedpopulartag), $this->blogmodel->getCountOfBlogEntriesbyYearMonth((int)$year, (int)$month));
        $this->pagination->initialize($config);
        if(!isset($from))
        {
            $output["blog"]         = $this->blogmodel->getFirstBlogEntriesbyYearMonth((int)$year, (int)$month);
        }
        else 
        {
            $output["blog"]         = $this->blogmodel->getBlogEntriesbyYearMonth((int)$year, (int)$month, $from);
        }
        $output['pagelinks']    = $this->pagination->create_links();
        $this->load->view('bloglist', $output);
    }
    
    private function pagerSettings($baseurl, $countofentries, $perpage = 5){
        $config = array();
        $config['full_tag_open']    = '<ul class="pagination   flat-pagination ">';
        $config['full_tag_close']   = '</ul>';
        $config['cur_tag_open']     = '<li class="active"><span>';
        $config['cur_tag_close']    = '</span></li>';
        $config['num_tag_open']     = '<li>';
        $config['num_tag_close']    = '</li>';
        $config['first_tag_open']   = '<li>';
        $config['first_tag_close']  = '</li>';
        $config['last_tag_open']    = '<li>';
        $config['last_tag_open']    = '</li>';
        $config['prev_link']        = 'Első';
        $config['next_link']        = 'Utolsó';
        $config['prev_tag_open']    = '<li>';
        $config['prev_tag_close']   = '</li>';
        $config['next_tag_open']    = '<li>';
        $config['next_tag_close']   = '</li>';
        $config['base_url']         = $baseurl;
        $config['total_rows']       = $countofentries;
        $config['per_page']         = $perpage;
        return $config;
        
    }
    
}

?>