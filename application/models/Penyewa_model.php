<?php
Class Penyewa_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
		$this->load->database();		
    }
		
	public function input($data)
    {
		$this->db->insert('penyewa', $data);
	}
		
	public function cetak($table)
	{
		$cetak = $this->db->get($table);
		return $cetak;
	}
		
	public function detail_penyewa($id_penyewa)
    {
		$this->db->select('*');
		$this->db->from('penyewa');
		$this->db->where('id_penyewa',$id_penyewa);
		$query = $this->db->get();
		return $query;
	}
	
	public function delete($id_penyewa)
	{	
		$this->db->where('id_penyewa', $id_penyewa);
		$this->db->delete('penyewa');
	}
		
	public function edit($data, $table, $id)
	{
		$this->db->update($table, $data, $id);
	}
	
	public function tambahPenyewa($dataarray)
    {
        for($i=1;$i<count($dataarray);$i++)
		{
            $data = array(
                'id_penyewa'=>$dataarray[$i]['id_penyewa'],
                'id_site'=>$dataarray[$i]['id_site'],
				'penyewa_1'=>$dataarray[$i]['penyewa_1'],
				'penyewa_2'=>$dataarray[$i]['penyewa_2'],
				'penyewa_3'=>$dataarray[$i]['penyewa_3']
            );
            $this->db->insert('penyewa', $data);
        }
    }
}