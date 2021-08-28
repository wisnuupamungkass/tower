<?php
Class Site_model extends CI_Model {

        public function __construct()
        {
            parent::__construct();
			$this->load->database();	
        }
		
		public function input($data)
        {
			$this->db->insert('site_informasi', $data);
        }
		
		public function cetak()
		{
			$this->db->select('*');
			$this->db->from('site_informasi');
			$this->db->join('provider', 'provider.id_provider = site_informasi.pemilik_menara');
			$cetak = $this->db->get();
			return $cetak;
		}
		
		public function getDataSite()
		{
			$sql = "SELECT site_informasi.id_site FROM site_informasi WHERE site_informasi.id_site NOT IN (SELECT penyewa.id_site FROM penyewa WHERE site_informasi.id_site = penyewa.id_site)";
	        $query = $this->db->query($sql);
	        return $query;
		}
		
		public function detail_site($id_site)
        {
				$this->db->select('*');
				$this->db->from('site_informasi');
				$this->db->join('provider', 'provider.id_provider = site_informasi.pemilik_menara');
				$this->db->where('id_site',$id_site);
				$query = $this->db->get();
				return $query;
		}
		public function delete($id_site)
		{	
			$this->db->where('id_site', $id_site);
			$this->db->delete('site_informasi');
		}
		
		public function edit($data, $table, $id)
		{
		$this->db->update($table, $data, $id);
		}
	
	public function tambahSite($dataarray)
    {
        for($i=1;$i<count($dataarray);$i++)
		{
            $data = array(
                'id_site'=>$dataarray[$i]['id_site'],
                'pemilik_menara'=>$dataarray[$i]['pemilik_menara'],
                'latitude'=>$dataarray[$i]['latitude'],
				'longitude'=>$dataarray[$i]['longitude'],
				'alamat'=>$dataarray[$i]['alamat'],
				'kelurahan'=>$dataarray[$i]['kelurahan'],
				'kecamatan'=>$dataarray[$i]['kecamatan'],
				'lahan'=>$dataarray[$i]['lahan'],
            );
            $this->db->insert('site_informasi', $data);
        }
    }
}