<?php
Class Provider_model extends CI_Model 
{
	public function __construct()
    {
        parent::__construct();
		$this->load->database();
    }
	
	public function input($data)
    {
		$this->db->insert('provider', $data);
    }
		
	public function cetak($table)
	{
		$cetak = $this->db->get($table);
		return $cetak;
	}
		
	public function detail_provider($id_provider)
    {
		$this->db->select('*');
		$this->db->from('provider');
		$this->db->where('id_provider',$id_provider);
		$query = $this->db->get();
		return $query;
	}
	public function delete($id_provider)
	{	
		$this->db->where('id_provider', $id_provider);
		$this->db->delete('provider');
	}
		
	public function edit($data, $table, $id)
	{
		$this->db->update($table, $data, $id);
	}
	
	public function getDataProvider()
    {
        $query3 = $this->db->get('provider');
		return $query3;
	}
	
	public function tambahProvider($dataarray)
	{
		for($i=1;$i<count($dataarray);$i++)
		{
			$data = array(
				'id_provider'=>$dataarray[$i]['id_provider'],
				'nama_provider'=>$dataarray[$i]['nama_provider'],
				'alias_provider'=>$dataarray[$i]['alias_provider'],
				'alamat_provider'=>$dataarray[$i]['alamat_provider'],
				'telepon_provider'=>$dataarray[$i]['telepon_provider'],
				'fax_provider'=>$dataarray[$i]['fax_provider'],
				'email_provider'=>$dataarray[$i]['email_provider'],
			);
			$this->db->insert('provider', $data);
		}
	}
	
}		
?>