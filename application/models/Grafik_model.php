<?php
class Grafik_model extends CI_Model 
{
    function  __construct()
	{  
		parent::__construct();  
	}
	
	function ceksite()
    {
        $sql = "SELECT COUNT(*) As jml FROM site_informasi";
        $q = $this->db->query($sql);
        $row = $q->row(); 
        return $row->jml;
    }
	
	function owner()
    {
		$sql = "SELECT * FROM v_grafik";
        $q = $this->db->query($sql);
        return $q;
    }
}
?>