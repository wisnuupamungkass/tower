<?php
class Kelurahan extends CI_Controller 
{
	public function __construct()
    {
		parent::__construct();
        // Your own constructor code
		$this->load->helper(array('form', 'url','html','file'));
        $this->load->library(array('form_validation','table','template'));
		$this->load->database();
		$this->load->model (array('Kecamatan_model','Kelurahan_model'));
		$this->simple_login->cek_login();
    }
	
	public function tambah()
	{
		$this->form_validation->set_rules('id_kelurahan','ID Kelurahan', 'required');
		$this->form_validation->set_rules('id_kecamatan','ID Kecamatan', 'required');
		$this->form_validation->set_rules('nama_kelurahan','Nama Kelurahan', 'required');
                
		if ($this->form_validation->run() == FALSE)
        {		
			$query1=$this->Kecamatan_model->getDataKecamatan();
			$data['query1']=$query1;
						
			$this->template->display('Kelurahan/form_input',$data);
        }
        else
        {
        	$id_kelurahan = $_POST['id_kelurahan'];
			$hasil_idkelurahan = $this->Kelurahan_model->cek_idkelurahan($id_kelurahan);

			if(count($hasil_idkelurahan)!= 0)
			{
				echo "<script> alert ('ID Kelurahan Sudah Digunakan'); </script>";
				echo "<script> window.location=history.go(-1); </script>";
			}
			else
			{
				$data['id_kelurahan']=$id_kelurahan;
				$data['id_kecamatan']=$_POST['id_kecamatan'];
				$data['nama_kelurahan']=$_POST['nama_kelurahan'];
			}

			$this->Kelurahan_model->input($data);	
			echo "<script> alert ('Input Data Berhasil');
					location='".site_url('Kelurahan/daftar_kelurahan')."'
				</script>";
        }
    }
	
	public function daftar_kelurahan()
	{
		$cetak['cetak'] = $this->Kelurahan_model->cetak();
		$this->template->display('Kelurahan/data_kelurahan',$cetak);
	}
	
	public function detail_kelurahan($id_kelurahan)
	{
		$query['query']= $this->Kelurahan_model->detail_kelurahan($id_kelurahan);
		$this->template->display('Kelurahan/detail_kelurahan',$query);		
	}
		
	public function hapus($option,$id_kelurahan)
    {
        if ($option=='ya')
		{
			$query1=$this->Kelurahan_model->delete($id_kelurahan);
			$data['query1']=$query1;
			$this->daftar_kelurahan();
		}		
		else
		{
			$query=$this->Kelurahan_model->detail($id_kelurahan);
			$data['query']=$query;
			
			$this->template->display('Kelurahan/detail_kelurahan',$data);	
		}
	}
	
	public function edit($id_kelurahan)
	{
		$this->form_validation->set_rules('nama_kelurahan','Nama Kelurahan', 'required'); 
				
        if ($this->form_validation->run() == FALSE)
        {
			$query=$this->Kelurahan_model->detail_kelurahan($id_kelurahan);
			foreach($query->result_array() as $data)
			{
				$data['id_kelurahan'];
				$data['nama_kelurahan'];
			}	
            $this->template->display('Kelurahan/form_edit',$data);
        }
        else
		{
			$data['nama_kelurahan']=$_POST['nama_kelurahan'];
						
			$id_kelurahan= array('id_kelurahan'=> $id_kelurahan);
			$this->Kelurahan_model->edit($data, 'kelurahan',$id_kelurahan);	
			$this->daftar_kelurahan();
		}
	}
	function upload()
	{
		$this->template->display('Kelurahan/form_upload');
	}

    function do_upload()
	{
		$config['upload_path'] = './temp_upload/';
		$config['allowed_types'] = 'xls';
                
		$this->load->library('upload', $config);     

		if ( ! $this->upload->do_upload())
		{
			echo "<script> alert ('Pastikan File Berekstensi XLS !'); </script>";
			$this->template->display('Kecamatan/form_upload');
			
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
                $dataexcel[$i-1]['id_kelurahan'] = $data['cells'][$i][1];
				$dataexcel[$i-1]['id_kecamatan'] = $data['cells'][$i][2];
				$dataexcel[$i-1]['nama_kelurahan'] = $data['cells'][$i][3];
			}
 
            delete_files($upload_data['file_path']);
            $this->load->model('Kelurahan_model');
            $this->Kelurahan_model->tambahKelurahan($dataexcel);
			
			echo "<script> alert ('Upload Success !'); </script>";
            $cetak['cetak'] = $this->Kelurahan_model->cetak('kelurahan');
            $this->template->display('Kelurahan/data_kelurahan',$cetak);
		}
	}
}
?>