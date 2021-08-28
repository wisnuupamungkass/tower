<?php
Class Kecamatan_model extends CI_Model 
{
    public function __construct()
	{
        parent::__construct();
		$this->load->database();
    }
	
	public function input($data)
    {
		$this->db->insert('kecamatan', $data);
    }
	
	public function cetak($table)
	{
		$cetak = $this->db->get($table);
		return $cetak;
	}
		
	public function detail_kecamatan($id_kecamatan)
    {
		$this->db->select('*');
		$this->db->from('kecamatan');
		$this->db->where('id_kecamatan',$id_kecamatan);
		$query = $this->db->get();
		return $query;
	}
		
	public function delete($id_kecamatan)
	{	
		$this->db->where('id_kecamatan', $id_kecamatan);
		$this->db->delete('kecamatan');
	}
		
	public function edit($data, $table, $id)
	{
		$this->db->update($table, $data, $id);
	}
		
	public function getDataKecamatan()
    {
        $query1 = $this->db->get('kecamatan');
		return $query1;
	}
		
	public function tambahKecamatan($dataarray)
	{
		for($i=0;$i<count($dataarray);$i++)
		{
			$data = array(
				'id_kecamatan'=>$dataarray[$i]['id_kecamatan'],
				'nama_kecamatan'=>$dataarray[$i]['nama_kecamatan']
			);
			$this->db->insert('kecamatan', $data);
		}
	}	
}
?>