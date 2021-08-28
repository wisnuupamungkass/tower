<?php
class Kecamatan extends CI_Controller 
{
	public function __construct()
    {
		parent::__construct();
        // Your own constructor code	
		$this->load->helper(array('form', 'url','html','file'));
        $this->load->library(array('form_validation','table','template'));
		$this->load->database();
		$this->load->model (array('Kecamatan_model'));
		$this->load->model ('Kode_model','id_kecamatan');
		$this->simple_login->cek_login();
    }

	public function tambah()
	{
		$this->form_validation->set_rules('nama_kecamatan','Nama Kecamatan', 'required');
                
		if ($this->form_validation->run() == FALSE)
        {
        	$data['id_kecamatan'] = $this->id_kecamatan->kode_kecamatan();		
			$this->template->display('Kecamatan/form_input',$data);
        }
        else
        {
			$data['id_kecamatan']=$this->id_kecamatan->kode_kecamatan();
			$data['nama_kecamatan']=$_POST['nama_kecamatan'];

			$this->Kecamatan_model->input($data);	
			echo "<script> alert ('Input Data Berhasil');
					location='".site_url('Kecamatan/daftar_kecamatan')."'
				</script>";
        }
    }
	
	public function daftar_kecamatan()
	{
		$cetak['cetak'] = $this->Kecamatan_model->cetak('kecamatan');
		$this->template->display('Kecamatan/data_kecamatan',$cetak);
	}
	
	public function detail_kecamatan($id_kecamatan)
	{
		$query['query']= $this->Kecamatan_model->detail_kecamatan($id_kecamatan);
		$this->template->display('Kecamatan/detail_kecamatan',$query);		
	}
		
	public function hapus($option,$id_kecamatan)
    {
        if ($option=='ya')
		{
			$query1=$this->Kecamatan_model->delete($id_kecamatan);
			$data['query1']=$query1;
			$this->daftar_kecamatan();
		}
		else
		{
			$query=$this->Kecamatan_model->detail($id_kecamatan);
			$data['query']=$query;
				
			$this->template->display('Kecamatan/detail_kecamatan',$data);	
		}
	}
	
	public function edit($id_kecamatan)
	{
		$this->form_validation->set_rules('nama_kecamatan','Nama Kecamatan', 'required'); 
				
        if ($this->form_validation->run() == FALSE)
        {
			$query=$this->Kecamatan_model->detail_kecamatan($id_kecamatan);
			foreach($query->result_array() as $data)
			{
				$data['id_kecamatan'];
				$data['nama_kecamatan'];
			}	
            $this->template->display('Kecamatan/form_edit',$data);
        }
        else
		{
			$data['nama_kecamatan']=$_POST['nama_kecamatan'];
						
			$id_kecamatan= array('id_kecamatan'=> $id_kecamatan);
			$this->Kecamatan_model->edit($data, 'kecamatan',$id_kecamatan);	
			$this->daftar_kecamatan();
		}
	}

	function upload()
	{
		$this->template->display('Kecamatan/form_upload');
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
                $dataexcel[$i-1]['id_kecamatan'] = $data['cells'][$i][1];
                $dataexcel[$i-1]['nama_kecamatan'] = $data['cells'][$i][2];
			}
 
            delete_files($upload_data['file_path']);
            $this->load->model('Kecamatan_model');
            $this->Kecamatan_model->tambahKecamatan($dataexcel);
			
			echo "<script> alert ('Upload Success !'); </script>";
            $cetak['cetak'] = $this->Kecamatan_model->cetak('kecamatan');
            $this->template->display('Kecamatan/data_kecamatan',$cetak);
		}
	}
}
?>