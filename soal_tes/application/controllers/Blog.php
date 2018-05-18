<?php

class Blog extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->model('model_blog');
    }
                
    function index(){
        $this->load->helper(array('form', 'url'));
		$data['blogs'] = $this->model_blog->allblog();
        $this->load->view('blog',$data);
    }
}

