<?php
Class Admin_model extends CI_Model
{
    public function __construct()
	{
        parent::__construct();
		$this->load->database();
    }
		
	public function input($data)
    {
		$this->db->insert('user', $data);
    }
		
	public function cetak($table)
	{
		$cetak = $this->db->get($table);
		return $cetak;
	}
	
	public function detail_admin($id_user)
    {
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('id_user',$id_user);
		$query = $this->db->get();
		return $query;
	}
	
	public function delete($id_user)
	{	
		$this->db->where('id_user', $id_user);
		$this->db->delete('user');
	}
		
	public function edit($data, $table, $id)
	{
		$this->db->update($table, $data, $id);
	}
	
	public function tambahUser($dataarray)
    {
        for($i=0;$i<count($dataarray);$i++)
		{
            $data = array(
                'nama'=>$dataarray[$i]['nama'],
                'email'=>$dataarray[$i]['email'],
				'username'=>$dataarray[$i]['username'],
				'password'=>$dataarray[$i]['password'],
				'foto'=>$dataarray[$i]['foto'],
				'thumb'=>$dataarray[$i]['thumb'],
            );
            $this->db->insert('user', $data);
        }
    }

    function cek_username($username)
    {
        $sql = "select * from user where username='$username'";
        $hasil = $this->db->query($sql);
        return $hasil->result();
    }

    function cek_email($email)
    {
        $sql = "select * from user where email='$email'";
        $hasil = $this->db->query($sql);
        return $hasil->result();
    }
}
