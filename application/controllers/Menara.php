<?php
class Menara extends CI_Controller 
{
	public function __construct()
	{
        parent::__construct();
        // Your own constructor code
		$this->load->helper(array('form', 'url','html','file'));
        $this->load->library(array('form_validation','table','template'));
		$this->load->database();
		$this->load->model ('Admin_model');
		$this->simple_login->cek_login();
	}
	
	public function index()
    {
		$this->template->display('Admin/home');
    }
	
	function tambah()
	{
		$this->form_validation->set_rules('nama','Nama', 'required');
		$this->form_validation->set_rules('email','Email', 'required');
		$this->form_validation->set_rules('username','Username', 'required');
		$this->form_validation->set_rules('password','Password', 'required');
                
		$config['upload_path']          = './images/Admin';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = '1024';
        $config['max_width']            = '1024';
        $config['max_height']           = '882';

        $this->load->library('upload', $config); 
        $this->upload->initialize($config);
				
		if ($this->form_validation->run() == FALSE)
        {		
			$this->template->display('Admin/form_input');
        }
		else
        {
			if (!$this->upload->do_upload())
			{
				echo "<script> alert ('Upload Foto Gagal'); </script>";
				echo "<script> window.location=history.go(-1); </script>";
			}
			else
			{
				$datafoto = array('upload_data' => $this->upload->data());
				$config['image_library'] = 'gd2';
				$config['source_image']	= $datafoto['upload_data']['full_path'];
				$config['new_image']	= 'images/thumbnails/Admin';
				$config['create_thumb'] = TRUE;
				$config['maintain_ratio'] = TRUE;
				$config['width']	= 100;
				$config['height']	= 100; 
				$this->load->library('image_lib', $config); 
				$this->image_lib->resize();
				$img=$datafoto['upload_data']['file_name'];
				$img_thumb=$datafoto['upload_data']['raw_name']."_thumb".$datafoto['upload_data']['file_ext'];

				$email = $_POST['email'];
				$hasil_email = $this->Admin_model->cek_email($email);

				$username = $_POST['username'];
				$hasil_username = $this->Admin_model->cek_username($username);

				if(count($hasil_email)!= 0)
				{
					echo "<script> alert ('Email Sudah Digunakan'); </script>";
					echo "<script> window.location=history.go(-1); </script>";
				}
				else if(count($hasil_username)!= 0)
				{
					echo "<script> alert ('Username Sudah Digunakan'); </script>";
					echo "<script> window.location=history.go(-1); </script>";
				}
				else
				{	
					$data['nama']=$_POST['nama'];
					$data['email']=$email;
					$data['username']=$username;
					$data['password']=$_POST['password'];
					$data['foto'] = $img;
					$data['thumb'] = $img_thumb;
					$this->Admin_model->input($data);	
					echo "<script> alert ('Input Data Berhasil');
						location='".site_url('Menara/daftar_admin')."'
					</script>";
				}
			}
		}
	}

	public function daftar_admin()
	{
		$cetak['cetak'] = $this->Admin_model->cetak('user');
		$this->template->display('Admin/data_admin',$cetak);
	}
		
	public function detail_admin($id_user)
	{
		$query['query']= $this->Admin_model->detail_admin($id_user);
		$this->template->display('Admin/detail_admin',$query);		
	}
		
	public function hapus($option,$id_user)
    {
        if ($option=='ya')
		{
			$query1=$this->Admin_model->delete($id_user);
			$data['query1']=$query1;
			$this->daftar_admin();
		}		
		else
		{
			$query=$this->Admin_model->detail($id_user);
			$data['query']=$query;
				
			$this->template->display('Admin/detail_admin',$data);	
		}
	}
		
	public function edit($id_user)
	{
		$this->form_validation->set_rules('nama','Nama', 'required');
		$this->form_validation->set_rules('email','Email', 'required');
		$this->form_validation->set_rules('username','Username', 'required');
		$this->form_validation->set_rules('password','Password', 'required');
		
		$config['upload_path']          = './images/Admin';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = '1024';
        $config['max_width']            = '1024';
        $config['max_height']           = '882';
        $config['overwrite']			= TRUE;

        $this->load->library('upload', $config); 
        $this->upload->initialize($config);
		//$this->upload->do_upload('userfile');
				
        if ($this->form_validation->run() == FALSE)
        {
			$query=$this->Admin_model->detail_admin($id_user);
			foreach($query->result_array() as $data)
			{
				$data['id_user'];
				$data['nama'];
				$data['email'];
				$data['username'];
				$data['password'];
				$data['foto'];
			}
            $this->template->display('Admin/form_edit',$data);
        }
        else
		{
			if (!$this->upload->do_upload())
			{
				echo "<script> alert ('Upload Foto Gagal'); </script>";
				$query=$this->Admin_model->detail_admin($id_user);
				foreach($query->result_array() as $data)
				{
					$data['id_user'];
					$data['nama'];
					$data['email'];
					$data['username'];
					$data['password'];
					$data['foto'];
				}
				$this->template->display('Admin/form_edit',$data);
			}
			else
			{
				$datafoto = array('upload_data' => $this->upload->data());
				$config['image_library'] 	= 'gd2';
				$config['source_image']		= $datafoto['upload_data']['full_path'];
				$config['new_image']		= 'images/thumbnails/Admin';
				$config['create_thumb'] 	= TRUE;
				$config['maintain_ratio'] 	= TRUE;
				$config['width']			= 100;
				$config['height']			= 100;
				$config['overwrite']		= TRUE;
				$this->load->library('image_lib', $config); 
				$this->image_lib->resize();
				$img=$datafoto['upload_data']['file_name'];
				$img_thumb=$datafoto['upload_data']['raw_name']."_thumb".$datafoto['upload_data']['file_ext'];
				
				$data['nama']=$_POST['nama'];
				$data['email']=$_POST['email'];
				$data['username']=$_POST['username'];
				$data['password']=$_POST['password'];
				$data['foto'] = $img;
				$data['thumb'] = $img_thumb;
						
				$id_user= array('id_user'=> $id_user);
				$this->Admin_model->edit($data, 'user',$id_user);	
				$this->daftar_admin();
			}
		}
	}
	
	function upload()
	{
		$this->template->display('Admin/form_upload');
	}

    function do_upload()
	{
		$config['upload_path'] = './temp_upload/';
		$config['allowed_types'] = 'xls';
                
		$this->load->library('upload', $config);     

		if ( ! $this->upload->do_upload())
		{
			echo "<script> alert ('Pastikan File Berekstensi XLS !'); </script>";
			$this->template->display('Admin/form_upload');
		}
		else
		{
            $data = array('error' => false);
			$upload_data = $this->upload->data();

            $this->load->library('excel_reader');
			$this->excel_reader->setOutputEncoding('CP1251');

			$file =  $upload_data['full_path'];
			$this->excel_reader->read($file);
			error_reporting(E_ALL ^ E_NOTICE);

			// Sheet 1
			$data = $this->excel_reader->sheets[0] ;
            $dataexcel = Array();
			for ($i = 1; $i <= $data['numRows']; $i++)
			{
				//if($data['cells'][$i][1] == '') break;
                $dataexcel[$i-1]['nama'] = $data['cells'][$i][1];
                $dataexcel[$i-1]['email'] = $data['cells'][$i][2];
				$dataexcel[$i-1]['username'] = $data['cells'][$i][3];
				$dataexcel[$i-1]['password'] = $data['cells'][$i][4];
				$dataexcel[$i-1]['foto'] = $data['cells'][$i][5];
				$dataexcel[$i-1]['thumb'] = $data['cells'][$i][6];
			}
			
            delete_files($upload_data['file_path']);
            $this->load->model('Admin_model');
            $this->Admin_model->tambahUser($dataexcel);
            
			echo "<script> alert ('Upload Success !'); </script>";
			$cetak['cetak'] = $this->Admin_model->cetak('user');
			$this->template->display('Admin/data_admin',$cetak);
		}
	}
}