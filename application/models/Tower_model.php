<?php
Class Tower_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
		$this->load->database();	
    }
		
	public function input($data)
    {
		$this->db->insert('tower', $data);
    }
		
	public function cetak($table)
	{
		$cetak = $this->db->get($table);
		return $cetak;
	}
	
	public function getDataTower()
    {
        $sql = "SELECT tower.id_site FROM tower WHERE tower.id_site NOT IN (SELECT site_informasi.id_site FROM site_informasi WHERE tower.id_site = site_informasi.id_site)";
        $query = $this->db->query($sql);
        return $query;
	}
	
	public function detail_tower($id_site)
    {
		$this->db->select('*');
		$this->db->from('tower');
		$this->db->where('id_site',$id_site);
		$query = $this->db->get();
		return $query;
	}
	
	public function delete($id_site)
	{	
		$this->db->where('id_site', $id_site);
		$this->db->delete('tower');
	}
		
	public function edit($data, $table, $id)
	{
		$this->db->update($table, $data, $id);
	}
	
	public function tambahTower($dataarray)
	{
		for($i=1;$i<count($dataarray);$i++)
		{
			$data = array(
				'id_site'=>$dataarray[$i]['id_site'],
				'tipe_menara'=>$dataarray[$i]['tipe_menara'],
				'tinggi_menara'=>$dataarray[$i]['tinggi_menara'],
				'eksisting_antena'=>$dataarray[$i]['eksisting_antena'],
				'tinggi_antena'=>$dataarray[$i]['tinggi_antena'],
			);
			$this->db->insert('tower', $data);
		}
	}

	function cek_idsite($id_site)
    {
        $sql = "select * from tower where id_site='$id_site'";
        $hasil = $this->db->query($sql);
        return $hasil->result();
    }
}
?>