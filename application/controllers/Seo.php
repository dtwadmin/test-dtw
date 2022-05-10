<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seo extends CI_Controller { 
  
    public function __construct(){
	    parent::__construct();
	}
	
	public function sitemap()
    {						
        $data['page'] = "sitemap";
		$this->load->view('site/theme/index',$data);
    }
}