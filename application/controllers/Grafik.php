<?php
class Grafik extends CI_Controller {
 
    function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url','html'));
        $this->load->library(array('table','template'));
		$this->load->database();
		$this->load->model('Grafik_model');
        $this->simple_login->cek_login();
	}
    
    function view() {
        $this->load->helper(array('fusioncharts')) ;
        $ceksite = $this->Grafik_model->ceksite() ;
        
        $graph_swfFile      = base_url().'assets/fusion/MSColumn3D.swf' ;
        $graph_caption      = 'Grafik Menara Telekomunikasi per Pemilik Menara' ;
        $graph_numberPrefix = '' ;
        $graph_title        = '' ;
        $graph_width        = 800 ;
        $graph_height       = 500 ;

        $counted = 0;
        if ($ceksite != 0)
        {
            foreach($this->Grafik_model->owner()->result() as $row){
				$category[$counted] = $row->singkatan;
                $arrData['TOWER'][$counted] = $row->jumlah;
                $counted = $counted+1;
            }
        }
        else
        {
            $category[$counted] = 'Undefined';
            $arrData['TOWER'][$counted] = '0';
        }
        
        $dataset[0] = 'TOWER' ;

        $strXML = "<graph hovercapbg='DEDEBE' hovercapborder='889E6D' rotateNames='0' numdivlines='9' divLineColor='CCCCCC' divLineAlpha='80' decimalPrecision='0' showValues='0' showAlternateHGridColor='1' AlternateHGridAlpha='30' AlternateHGridColor='CCCCCC' labelDisplay='ROTATE' slantLabels='1' caption='".$graph_caption."' numberPrefix='".$graph_numberPrefix."'>" ;

       $i = 0;
		if(! empty($category)){		
		 //Convert category to XML and append
        $strXML .= "<categories font='Trebuchet MS' fontSize='11' fontColor='666666'>" ;
		
			foreach ($category as $c) {
				$strXML .= "<category name='".$c."'/>" ;
				$i++;
				$pemilik[$i] = $c;
			}
		$strXML .= "</categories>" ;
		}
        
		if(! empty ($dataset)){
			foreach ($dataset as $set) {
				$strXML .= "<dataset seriesname='".$set."' color='0099CC'>" ;
				if(! empty($arrData[$set])){
					foreach ($arrData[$set] as $d) 
					{
						$strXML .= "<set value='".$d."' />" ;
					}
				}
				$strXML .= "</dataset>" ;
			}
		}
        $strXML .= "</graph>";
        $data['graph']  = renderChart($graph_swfFile, $graph_title, $strXML, "div" , $graph_width, $graph_height);
		$this->template->display('Admin/grafik',$data);
    }
}