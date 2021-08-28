<?php
class Provider extends CI_Controller 
{
	public function __construct()
	{
        parent::__construct();
        // Your own constructor code
		$this->load->helper(array('form', 'url','html','file'));
        $this->load->library(array('form_validation','table','template'));
		$this->load->database();
		$this->load->model ('Provider_model');
		$this->load->model ('Kode_model','id_provider');
		$this->simple_login->cek_login();
    }
	
	public function tambah()
	{
		$this->form_validation->set_rules('nama_provider','Nama Provider', 'required');
		$this->form_validation->set_rules('alias_provider','Alias Provider', 'required');
		$this->form_validation->set_rules('alamat_provider','Alamat Provider', 'required');
		$this->form_validation->set_rules('telepon_provider','Telepon Provider', 'required');
		$this->form_validation->set_rules('fax_provider','Fax Provider', 'required');
		$this->form_validation->set_rules('email_provider','Email Provider', 'required');
                
		if ($this->form_validation->run() == FALSE)
        {	
			$data['id_provider'] = $this->id_provider->kode_provider();
			$this->template->display('Provider/form_input',$data);
        }
        else
        {
			$data['id_provider']=$this->id_provider->kode_provider();
			$data['nama_provider']=$_POST['nama_provider'];
			$data['alias_provider']=$_POST['alias_provider'];
			$data['alamat_provider']=$_POST['alamat_provider'];
			$data['telepon_provider']=$_POST['telepon_provider'];
			$data['fax_provider']=$_POST['fax_provider'];
			$data['email_provider']=$_POST['email_provider'];
					
			$this->Provider_model->input($data);	
			echo "<script> alert ('Input Data Berhasil');
					location='".site_url('Provider/daftar_provider')."'
				</script>";
        }
	}
	
	public function daftar_provider()
	{
		$cetak['cetak'] = $this->Provider_model->cetak('provider');
		$this->template->display('Provider/data_provider',$cetak);
	}
	
	public function detail_provider($id_provider)
	{
		$query['query']= $this->Provider_model->detail_provider($id_provider);
		$this->template->display('Provider/detail_provider',$query);		
	}
		
	public function hapus($option,$id_provider)
    {
        if ($option=='ya')
		{
			$query1=$this->Provider_model->delete($id_provider);
			$data['query1']=$query1;
			$this->daftar_provider();
		}		
		else
		{
			$query=$this->Provider_model->detail($id_provider);
			$data['query']=$query;
			
			$this->template->display('Provider/detail_provider',$data);	
		}
	}
	
	public function edit($id_provider)
	{
		$this->form_validation->set_rules('nama_provider','Nama Provider', 'required');
		$this->form_validation->set_rules('alias_provider','Alias Provider', 'required');
		$this->form_validation->set_rules('alamat_provider','Alamat Provider', 'required');
		$this->form_validation->set_rules('telepon_provider','Telepon Provider', 'required');
		$this->form_validation->set_rules('fax_provider','Fax Provider', 'required');
		$this->form_validation->set_rules('email_provider','Email Provider', 'required');
				
        if ($this->form_validation->run() == FALSE)
        {
			$query=$this->Provider_model->detail_provider($id_provider);
			foreach($query->result_array() as $data)
			{
				$data['id_provider'];
				$data['nama_provider'];
				$data['alias_provider'];
				$data['alamat_provider'];
				$data['telepon_provider'];
				$data['fax_provider'];
				$data['email_provider'];
			}	
            $this->template->display('Provider/form_edit',$data);
        }
        else
		{
			$data['nama_provider']=$_POST['nama_provider'];
			$data['alias_provider']=$_POST['alias_provider'];
			$data['alamat_provider']=$_POST['alamat_provider'];
			$data['telepon_provider']=$_POST['telepon_provider'];
			$data['fax_provider']=$_POST['fax_provider'];
			$data['email_provider']=$_POST['email_provider'];
						
			$id_provider= array('id_provider'=> $id_provider);
			$this->Provider_model->edit($data, 'provider',$id_provider);	
			$this->daftar_provider();
		}
	}
	
	function upload()
	{
		$this->template->display('Provider/form_upload');
	}

    function do_upload()
	{
		$config['upload_path'] = './temp_upload/';
		$config['allowed_types'] = 'xls';
                
		$this->load->library('upload', $config);     

		if ( ! $this->upload->do_upload())
		{
			echo "<script> alert ('Pastikan File Berekstensi XLS !'); </script>";
			$this->template->display('Provider/form_upload');
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
                $dataexcel[$i-1]['id_provider'] = $data['cells'][$i][1];
                $dataexcel[$i-1]['nama_provider'] = $data['cells'][$i][2];
				$dataexcel[$i-1]['alias_provider'] = $data['cells'][$i][3];
				$dataexcel[$i-1]['alamat_provider'] = $data['cells'][$i][4];
				$dataexcel[$i-1]['telepon_provider'] = $data['cells'][$i][5];
				$dataexcel[$i-1]['fax_provider'] = $data['cells'][$i][6];
				$dataexcel[$i-1]['email_provider'] = $data['cells'][$i][7];
			}
 
            delete_files($upload_data['file_path']);
            $this->load->model('Provider_model');
            $this->Provider_model->tambahProvider($dataexcel);
			
			echo "<script> alert ('Upload Success !'); </script>";
            $cetak['cetak'] = $this->Provider_model->cetak('provider');
            $this->template->display('Provider/data_provider',$cetak);
		}
	}
}
?>