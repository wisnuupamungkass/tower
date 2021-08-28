<?php
class Kode_model extends CI_Model
{  
	function __construct()  
	{
		parent::__construct();   
	}
	
	public function kode_provider()
	{
		$this->db->select('RIGHT(provider.id_provider,2) as id_provider', FALSE);
		$this->db->order_by('id_provider','DESC');
		$this->db->limit(1);  
		$query = $this->db->get('provider');  
		//cek dulu apakah ada sudah ada kode di tabel.   
		if($query->num_rows() <> 0)
		{  
			//jika kode ternyata sudah ada.    
			$data = $query->row();
			$id_provider = intval($data->id_provider) + 1;  
		}
		else
		{  
			//jika kode belum ada    
			$id_provider = 1;  
		}
		$kodemax = str_pad($id_provider, 2, "0", STR_PAD_LEFT);
		$kodejadi = "PRO".$kodemax;  
		return $kodejadi;
	}
	
	public function kode_penyewa()
	{
		$this->db->select('RIGHT(penyewa.id_penyewa,4) as id_penyewa', FALSE);
		$this->db->order_by('id_penyewa','DESC');
		$this->db->limit(1);  
		$query = $this->db->get('penyewa');  
		//cek dulu apakah ada sudah ada kode di tabel.   
		if($query->num_rows() <> 0)
		{  
			//jika kode ternyata sudah ada.    
			$data = $query->row();
			$id_penyewa = intval($data->id_penyewa) + 1;  
		}
		else
		{  
			//jika kode belum ada    
			$id_penyewa = 1;
		}
		$kode_max = str_pad($id_penyewa, 4, "0", STR_PAD_LEFT);
		$kodefinal = "SEWA".$kode_max;  
		return $kodefinal;
	}

	public function kode_kecamatan()
	{
		$this->db->select('RIGHT(kecamatan.id_kecamatan,3) as id_kecamatan', FALSE);
		$this->db->order_by('id_kecamatan','DESC');
		$this->db->limit(1);  
		$query = $this->db->get('kecamatan');  
		//cek dulu apakah ada sudah ada kode di tabel.   
		if($query->num_rows() <> 0)
		{  
			//jika kode ternyata sudah ada.    
			$data = $query->row();
			$id_kecamatan = intval($data->id_kecamatan) + 1;  
		}
		else
		{  
			//jika kode belum ada    
			$id_kecamatan = 1;
		}
		$kode_max = str_pad($id_kecamatan, 3, "0", STR_PAD_LEFT);
		$kodefinal = "33.11.".$kode_max;  
		return $kodefinal;
	}
}
?>