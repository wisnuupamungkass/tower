<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Download extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->helper(array('url','download'));				
	}
 
	public function unduh_nasional(){				
		force_download('dokumen/nasional.pdf',NULL);
	}
	
	public function unduh_daerah(){				
		force_download('dokumen/daerah.pdf',NULL);
	}
 
}