<?php
class Penyewa extends CI_Controller 
{
	public function __construct()
    {
		parent::__construct();
		// Your own constructor code	
		$this->load->helper(array('form', 'url','html','file'));
        $this->load->library(array('form_validation','table','template'));
		$this->load->database();
		$this->load->model (array('Penyewa_model','Tower_model', 'Site_model'));
		$this->load->model ('Kode_model','id_penyewa');
		$this->simple_login->cek_login();
    }
		
	public function tambah()
	{
		$this->form_validation->set_rules('id_site','ID Site', 'required');
		$this->form_validation->set_rules('penyewa_1','Penyewa 1', 'required');
		/*
		$this->form_validation->set_rules('penyewa_2','Penyewa 2', 'required');
		$this->form_validation->set_rules('penyewa_3','Penyewa 3', 'required');
        */     
		if ($this->form_validation->run() == FALSE)
        {
			$data['id_penyewa'] = $this->id_penyewa->kode_penyewa();
			
			$query=$this->Site_model->getDataSite();
			$data['query']=$query;
			
			$this->template->display('Penyewa/form_input',$data);
        }
        else
        {
			$data['id_penyewa']=$this->id_penyewa->kode_penyewa();
			$data['id_site']=$_POST['id_site'];
			$data['penyewa_1']=$_POST['penyewa_1'];
			$data['penyewa_2']=$_POST['penyewa_2'];
			$data['penyewa_3']=$_POST['penyewa_3'];
					
			$this->Penyewa_model->input($data);	
			echo "<script> alert ('Input Data Berhasil');
					location='".site_url('Penyewa/daftar_penyewa')."'
				</script>";
        }
    }
		
	public function daftar_penyewa()
	{
		$cetak['cetak'] = $this->Penyewa_model->cetak('penyewa');
		$this->template->display('Penyewa/data_penyewa',$cetak);
	}
	
	public function detail_penyewa($id_penyewa)
	{
		$query['query']= $this->Penyewa_model->detail_penyewa($id_penyewa);
		$this->template->display('Penyewa/detail_penyewa',$query);		
	}
		
	public function hapus($option,$id_penyewa)
    {
        if ($option=='ya')
		{
			$query1=$this->Penyewa_model->delete($id_penyewa);
			$data['query1']=$query1;
			$this->daftar_penyewa();
		}		
		else
		{
			$query=$this->Penyewa_model->detail($id_penyewa);
			$data['query']=$query;
				
			$this->template->display('Penyewa/detail_penyewa',$data);	
		}
	}
	
	public function edit($id_penyewa)
	{
		$this->form_validation->set_rules('id_site','ID Site', 'required');
		/*
		$this->form_validation->set_rules('penyewa_1','Penyewa 1', 'required');
		$this->form_validation->set_rules('penyewa_2','Penyewa 2', 'required');
		$this->form_validation->set_rules('penyewa_3','Penyewa 3', 'required');
		*/	
        if ($this->form_validation->run() == FALSE)
        {
			$query=$this->Penyewa_model->detail_penyewa($id_penyewa);
			foreach($query->result_array() as $data)
			{
				$data['id_penyewa'];
				$data['id_site'];
				$data['penyewa_1'];
				$data['penyewa_2'];
				$data['penyewa_3'];
			}

			$query=$this->Site_model->getDataSite();
			$data['query']=$query;

            $this->template->display('penyewa/form_edit',$data);
        }
        else
		{
			$data['id_site']=$_POST['id_site'];
			$data['penyewa_1']=$_POST['penyewa_1'];
			$data['penyewa_2']=$_POST['penyewa_2'];
			$data['penyewa_3']=$_POST['penyewa_3'];
						
			$id_penyewa= array('id_penyewa'=> $id_penyewa);
			$this->Penyewa_model->edit($data, 'penyewa',$id_penyewa);	
			$this->daftar_penyewa();
		}
	}
	
	function upload()
	{
		$this->template->display('Penyewa/form_upload');
	}

    function do_upload()
	{
		$config['upload_path'] = './temp_upload/';
		$config['allowed_types'] = 'xls';
                
		$this->load->library('upload', $config);     

		if ( ! $this->upload->do_upload())
		{
			echo "<script> alert ('Pastikan File Berekstensi XLS !'); </script>";
			$this->template->display('Penyewa/form_upload');
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
                $dataexcel[$i-1]['id_penyewa'] = $data['cells'][$i][1];
                $dataexcel[$i-1]['id_site'] = $data['cells'][$i][2];
				$dataexcel[$i-1]['penyewa_1'] = $data['cells'][$i][3];
				$dataexcel[$i-1]['penyewa_2'] = $data['cells'][$i][4];
				$dataexcel[$i-1]['penyewa_3'] = $data['cells'][$i][5];
			}
 
            delete_files($upload_data['file_path']);
            $this->load->model('Penyewa_model');
            $this->Penyewa_model->tambahPenyewa($dataexcel);
			
			echo "<script> alert ('Upload Success !'); </script>";
            $cetak['cetak'] = $this->Penyewa_model->cetak('penyewa');
            $this->template->display('Penyewa/data_penyewa',$cetak);
		}
	}
}
?>