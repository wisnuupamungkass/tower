<?php
class Site extends CI_Controller 
{
	public function __construct()
    {
        parent::__construct();
         // Your own constructor code
		$this->load->helper(array('form', 'url','html','file'));
        $this->load->library(array('form_validation','table','template'));
		$this->load->database();
		$this->load->model (array('Site_model','Tower_model','Provider_model','Kecamatan_model','Kelurahan_model'));
		$this->simple_login->cek_login();
    }
		
	public function tambah()
	{
		$this->form_validation->set_rules('id_site','ID Site', 'required');
		$this->form_validation->set_rules('alamat','Alamat', 'required');
		$this->form_validation->set_rules('latitude','Latitude', 'required');
		$this->form_validation->set_rules('longitude','Longitude', 'required');
		$this->form_validation->set_rules('lahan','Lahan', 'required');
                
		if ($this->form_validation->run() == FALSE)
		{
			$query=$this->Tower_model->getDataTower();
			$data['query']=$query;
			
			$query1=$this->Kecamatan_model->getDataKecamatan();
			$data['query1']=$query1;
			
			$query2=$this->Kelurahan_model->getDataKelurahan();
			$data['query2']=$query2;
			
			$query3=$this->Provider_model->getDataProvider();
			$data['query3']=$query3;
			
			$this->template->display('Site/form_input',$data);
		}
		else
		{
			$data['id_site']=$_POST['id_site'];
			$data['pemilik_menara']=$_POST['pemilik_menara'];
			$data['alamat']=$_POST['alamat'];
			$data['kelurahan']=$_POST['kelurahan'];
			$data['kecamatan']=$_POST['kecamatan'];
			$data['latitude']=$_POST['latitude'];
			$data['longitude']=$_POST['longitude'];
			$data['lahan']=$_POST['lahan'];
			
			$this->Site_model->input($data);	
			echo "
			<script> alert ('Input Data Berhasil');
					location='".site_url('Site/daftar_site')."'
			</script>
			";
		}
    }
	
	public function daftar_site()
	{
		$cetak['cetak'] = $this->Site_model->cetak();
		$this->template->display('Site/data_site',$cetak);
	}
	public function detail_site($id_site)
	{
		$query['query']= $this->Site_model->detail_site($id_site);
		$this->template->display('Site/detail_site',$query);		
	}
		
	public function hapus($option,$id_site)
	{
		if ($option=='ya')
		{
			$query1=$this->Site_model->delete($id_site);
			$data['query1']=$query1;
			$this->daftar_site();
		}		
		else
		{
			$query=$this->Site_model->detail($id_site);
			$data['query']=$query;
			
			$this->template->display('Site/detail_site',$data);	
		}
	}
		
	public function edit($id_site)
	{
		$this->form_validation->set_rules('pemilik_menara','Pemilik Menara', 'required');
		$this->form_validation->set_rules('latitude','Latitude', 'required');
		$this->form_validation->set_rules('longitude','Longitude', 'required');
		$this->form_validation->set_rules('alamat','Alamat', 'required');
		$this->form_validation->set_rules('kelurahan','Kelurahan', 'required');
		$this->form_validation->set_rules('kecamatan','Kecamatan', 'required');
		$this->form_validation->set_rules('lahan','Lahan', 'required');
				
        if ($this->form_validation->run() == FALSE)
        {
			$query=$this->Site_model->detail_site($id_site);
			foreach($query->result_array() as $data)
			{
				$data['id_site'];
				$data['pemilik_menara'];
				$data['latitude'];
				$data['longitude'];
				$data['alamat'];
				$data['kelurahan'];
				$data['kecamatan'];
				$data['lahan'];
			}
			
			$query1=$this->Kecamatan_model->getDataKecamatan();
			$data['query1']=$query1;
			
			$query2=$this->Kelurahan_model->getDataKelurahan();
			$data['query2']=$query2;
			
			$query3=$this->Provider_model->getDataProvider();
			$data['query3']=$query3;
			
            $this->template->display('Site/form_edit',$data);
        }
        else
		{
			$data['pemilik_menara']=$_POST['pemilik_menara'];
			$data['latitude']=$_POST['latitude'];
			$data['longitude']=$_POST['longitude'];
			$data['alamat']=$_POST['alamat'];
			$data['kelurahan']=$_POST['kelurahan'];
			$data['kecamatan']=$_POST['kecamatan'];
			$data['lahan']=$_POST['lahan'];
						
			$id_site= array('id_site'=> $id_site);
			$this->Site_model->edit($data, 'site_informasi',$id_site);	
			$this->daftar_site();
		}
	}
	
		function upload()
	{
		$this->template->display('Site/form_upload');
	}

    function do_upload()
	{
		$config['upload_path'] = './temp_upload/';
		$config['allowed_types'] = 'xls';
                
		$this->load->library('upload', $config);     

		if ( ! $this->upload->do_upload())
		{
			echo "<script> alert ('Pastikan File Berekstensi XLS !'); </script>";
			$this->template->display('Site/form_upload');
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
				$dataexcel[$i-1]['pemilik_menara'] = $data['cells'][$i][2];
				$dataexcel[$i-1]['alamat'] = $data['cells'][$i][3];
				$dataexcel[$i-1]['kelurahan'] = $data['cells'][$i][4];
				$dataexcel[$i-1]['kecamatan'] = $data['cells'][$i][5];
				$dataexcel[$i-1]['latitude'] = $data['cells'][$i][6];
				$dataexcel[$i-1]['longitude'] = $data['cells'][$i][7];
				$dataexcel[$i-1]['lahan'] = $data['cells'][$i][8];
			}
 
            delete_files($upload_data['file_path']);
            $this->load->model('Site_model');
            $this->Site_model->tambahSite($dataexcel);
			
			echo "<script> alert ('Upload Success !'); </script>";
            $cetak['cetak'] = $this->Site_model->cetak('site');
            $this->template->display('Site/data_site',$cetak);
		}
	}
}
?>