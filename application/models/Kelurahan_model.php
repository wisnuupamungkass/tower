<?php
Class Kelurahan_model extends CI_Model
{
    public function __construct()
    {
		parent::__construct();
		$this->load->database();
    }
		
	public function input($data)
    {
		$this->db->insert('kelurahan', $data);
    }
	
	public function cetak()
	{
		$this->db->select('*');
		$this->db->from('kelurahan');
		$this->db->join('kecamatan', 'kecamatan.id_kecamatan = kelurahan.id_kecamatan');
			
		$cetak = $this->db->get();
		return $cetak;
	}
		
	public function detail_kelurahan($id_kelurahan)
    {
		$this->db->select('*');
		$this->db->from('kelurahan');
		$this->db->join('kecamatan', 'kecamatan.id_kecamatan = kelurahan.id_kecamatan');
		$this->db->where('id_kelurahan',$id_kelurahan);
		$query = $this->db->get();
		return $query;
	}
	
	public function delete($id_kelurahan)
	{	
		$this->db->where('id_kelurahan', $id_kelurahan);
		$this->db->delete('kelurahan');
	}
		
	public function edit($data, $table, $id)
	{
		$this->db->update($table, $data, $id);
	}
	
	public function getDataKelurahan()
    {
        $query2 = $this->db->get('kelurahan');
		return $query2;
	}
	
	public function tambahKelurahan($dataarray)
	{
		for($i=0;$i<count($dataarray);$i++)
		{
			$data = array(
				'id_kecamatan'=>$dataarray[$i]['id_kecamatan'],
				'id_kelurahan'=>$dataarray[$i]['id_kelurahan'],
				'nama_kelurahan'=>$dataarray[$i]['nama_kelurahan']
				);
			$this->db->insert('kelurahan', $data);
		}
	}

	function cek_idkelurahan($id_kelurahan)
    {
        $sql = "select * from kelurahan where id_kelurahan='$id_kelurahan'";
        $hasil = $this->db->query($sql);
        return $hasil->result();
    }
}
?>