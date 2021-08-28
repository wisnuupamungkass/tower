<?php
class Tower extends CI_Controller 
{
	public function __construct()
    {
        parent::__construct();
		// Your own constructor code
		$this->load->helper(array('form', 'url','html','file'));
        $this->load->library(array('form_validation','table','template'));
		$this->load->database();
		$this->load->model ('Tower_model');
		$this->simple_login->cek_login();
    }

	function tambah()
	{
		$this->form_validation->set_rules('id_site','ID Site', 'required');
		$this->form_validation->set_rules('tipe_menara','Tipe Menara', 'required');
		$this->form_validation->set_rules('tinggi_menara','Tinggi Menara', 'required');
		$this->form_validation->set_rules('eksisting_antena','Eksisting Antena', 'required');
		$this->form_validation->set_rules('tinggi_antena','Tinggi Antena', 'required');

		$config['upload_path']          = './images/Tower';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = '1024';
        $config['max_width']            = '1024';
        $config['max_height']           = '882';

        $this->load->library('upload', $config); 
        $this->upload->initialize($config);

		if ($this->form_validation->run() == FALSE)
        {
			$this->template->display('Tower/form_input');
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
				$config['new_image']	= 'images/thumbnails/Tower';
				$config['create_thumb'] = TRUE;
				$config['maintain_ratio'] = TRUE;
				$config['width']	= 75;
				$config['height']	= 66; 
				$this->load->library('image_lib', $config); 
				$this->image_lib->resize();
				$img=$datafoto['upload_data']['file_name'];
				$img_thumb=$datafoto['upload_data']['raw_name']."_thumb".$datafoto['upload_data']['file_ext'];

				$id_site = $_POST['id_site'];
				$hasil_idsite = $this->Tower_model->cek_idsite($id_site);

				if(count($hasil_idsite)!= 0)
				{
					echo "<script> alert ('ID Site Sudah Digunakan'); </script>";
					echo "<script> window.location=history.go(-1); </script>";
				}
				else
				{
					$data['id_site']=$id_site;				
					$data['tipe_menara']=$_POST['tipe_menara'];		
					$data['tinggi_menara']=$_POST['tinggi_menara'];
					$data['eksisting_antena']=$_POST['eksisting_antena'];
					$data['tinggi_antena']=$_POST['tinggi_antena'];
					$data['foto_menara'] = $img;
					$data['thumb'] = $img_thumb;
						
					$this->Tower_model->input($data);	
					echo "<script> alert ('Input Data Berhasil');
							location='".site_url('Tower/daftar_tower')."'
						</script>";
				}
			}
		}
	}
	
	public function daftar_tower()
	{
		$cetak['cetak'] = $this->Tower_model->cetak('tower');
		$this->template->display('Tower/data_tower',$cetak);
	}
	
	public function detail_tower($id_site)
	{
		$query['query']= $this->Tower_model->detail_tower($id_site);
		$this->template->display('Tower/detail_tower',$query);		
	}
	
	public function hapus($option,$id_site)
    {
        if ($option=='ya')
		{
			$query1=$this->Tower_model->delete($id_site);
			$data['query1']=$query1;
			$this->daftar_tower();
		}		
		else
		{
			$query=$this->Tower_model->detail($id_site);
			$data['query']=$query;
				
			$this->template->display('Tower/detail_tower',$data);	
		}
	}
	
	public function edit($id_site)
	{
		$this->form_validation->set_rules('tipe_menara','Tipe Menara', 'required');
		$this->form_validation->set_rules('tinggi_menara','Tinggi Menara', 'required');
		$this->form_validation->set_rules('eksisting_antena','Eksisting Antena', 'required');
		$this->form_validation->set_rules('tinggi_antena','Tinggi Antena', 'required');   
		
		$config['upload_path']          = './images/Tower';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = '1024';
        $config['max_width']            = '1024';
        $config['max_height']           = '768';

        $this->load->library('upload', $config); 
        $this->upload->initialize($config);

        if ($this->form_validation->run() == FALSE)
        {
			$query=$this->Tower_model->detail_tower($id_site);
			foreach($query->result_array() as $data)
			{
				$data['id_site'];
				$data['tipe_menara'];
				$data['tinggi_menara'];
				$data['eksisting_antena'];
				$data['tinggi_antena'];
				$data['foto_menara'];
			}	
            $this->template->display('Tower/form_edit',$data);
        }
        else
		{
			if (!$this->upload->do_upload())
			{
				echo "<script> alert ('Upload Foto Gagal'); </script>";
				$this->template->display('Tower/form_edit',$data);
			}
			else
			{
				$datafoto = array('upload_data' => $this->upload->data());
				$config['image_library'] = 'gd2';
				$config['source_image']	= $datafoto['upload_data']['full_path'];
				$config['new_image']	= 'images/thumbnails/Tower';
				$config['create_thumb'] = TRUE;
				$config['maintain_ratio'] = TRUE;
				$config['width']	= 75;
				$config['height']	= 66; 
				$this->load->library('image_lib', $config); 
				$this->image_lib->resize();
				$img=$datafoto['upload_data']['file_name'];
				$img_thumb=$datafoto['upload_data']['raw_name']."_thumb".$datafoto['upload_data']['file_ext'];

				$data['tipe_menara']=$_POST['tipe_menara'];
				$data['tinggi_menara']=$_POST['tinggi_menara'];
				$data['eksisting_antena']=$_POST['eksisting_antena'];
				$data['tinggi_antena']=$_POST['tinggi_antena'];
				$data['foto_menara'] = $img;
				$data['thumb'] = $img_thumb;
						
				$id_site= array('id_site'=> $id_site);
				$this->Tower_model->edit($data, 'tower',$id_site);	
				$this->daftar_tower();
			}
		}
	}
	
	function upload()
	{
		$this->template->display('Tower/form_upload');
	}

    function do_upload()
	{
		$config['upload_path'] = './temp_upload/';
		$config['allowed_types'] = 'xls';
                
		$this->load->library('upload', $config);     

		if ( ! $this->upload->do_upload())
		{
			echo "<script> alert ('Pastikan File Berekstensi XLS !'); </script>";
			$this->template->display('Tower/form_upload');
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
                $dataexcel[$i-1]['id_site'] = $data['cells'][$i][1];
                $dataexcel[$i-1]['tipe_menara'] = $data['cells'][$i][2];
				$dataexcel[$i-1]['tinggi_menara'] = $data['cells'][$i][3];
				$dataexcel[$i-1]['eksisting_antena'] = $data['cells'][$i][4];
				$dataexcel[$i-1]['tinggi_antena'] = $data['cells'][$i][5];
			}
 
            delete_files($upload_data['file_path']);
            $this->load->model('Tower_model');
            $this->Tower_model->tambahTower($dataexcel);
			
			echo "<script> alert ('Upload Success !'); </script>";
            $cetak['cetak'] = $this->Tower_model->cetak('tower');
            $this->template->display('Tower/data_tower',$cetak);
		}
	}
}
?>