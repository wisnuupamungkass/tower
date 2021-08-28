<html>
<head>
<title>Pencarian Letak Menara</title>
<link href="assets/css/bootstrap.css" rel="stylesheet">
<link rel="shortcut icon" href="../login/images/favicon.png">
<link rel="stylesheet" type="text/css" href="../peta/src/style.css">

<style>
  body {
	padding-top: 60px;
  }
  #map_canvas img {
  	max-width: none;
	}

   #map_canvas label {
    width: auto; display:inline;
</style>

<link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
<!--<script type="text/javascript" src="assets/js/markerclusterer_packed.js"></script>-->
<script src="assets/js/jquery.js"></script>
<!-- load googlemaps api dulu -->
<script src="http://maps.google.com/maps/api/js?key=AIzaSyCf-58o3AVav_yTbUQnCn5TSpvLWd8NGlA"></script>
<script type="text/javascript">
var peta;
var peta2;
var gambar_tanda;

function set_icon(jenisnya){
    switch(jenisnya){
        case "AXIS":
            gambar_tanda = 'assets/img/menara axis.png';
            break;
        case  "MITRATEL":
            gambar_tanda = 'assets/img/menara mitratel.png';
            break;
        case  "H3INDOENSIA":
            gambar_tanda = 'assets/img/menara h3indonesia.png';
            break;
        case  "INDOSAT":
            gambar_tanda = 'assets/img/menara indosat.png';
            break;
        case  "PROTELINDO":
            gambar_tanda = 'assets/img/menara protelindo.png';
            break;
        case  "SMARTFREN":
            gambar_tanda = 'assets/img/menara smartfren.png';
            break;
        case "TELKOMSEL":
            gambar_tanda = 'assets/img/menara telkomsel.png';
            break;
        case  "XL":
            gambar_tanda = 'assets/img/menara xl.png';
            break;
        case  "TBG":
            gambar_tanda = 'assets/img/menara tbg.png';
            break;
        case  "SMI":
            gambar_tanda = 'assets/img/menara.png';
            break;
	 	case  "SKP":
            gambar_tanda = 'assets/img/menara.png';
            break;
        case  "STP":
            gambar_tanda = 'assets/img/menara.png';
            break;
        case  "IBS":
            gambar_tanda = 'assets/img/menara.png';
            break;
        case  "RETOWER":
            gambar_tanda = 'assets/img/menara.png';
            break;
	   	case  "CMI":
            gambar_tanda = 'assets/img/menara.png';
            break;
	   	case  "LINGGARJATI":
            gambar_tanda = 'assets/img/menara.png';
            break;
        case  "STI":
            gambar_tanda = 'assets/img/menara sti.png';
            break;
	  	case  "IMPRAYSPERSADA":
            gambar_tanda = 'assets/img/menara.png';
            break;
	 	case  "NARAGITA":
            gambar_tanda = 'assets/img/menara.png';
            break;
	  	case  "ISP":
            gambar_tanda = 'assets/img/menara.png';
            break;
	  	
    }
}
<?php
	require ('config.php');
?>
var x = new Array();
var y = new Array();
function peta_awal(){
	// posisi default peta saat diload
	<?php
	$sql_lokasi="SELECT * FROM fokus_peta";
	$result=mysql_query($sql_lokasi);
	while($data=mysql_fetch_object($result)){
	?>
		var mapCenter = new google.maps.LatLng(<?php echo $data->latitude;?>, <?php echo $data->longitude;?>);
		var zooming = <?php echo $data->zoom;?>;
	<?php
	}
	?>
	var petaoption = {
		zoom: zooming,
		center: mapCenter,
		panControl: true,
		zoomControl: true,
		zoomControlOptions: {
			style: google.maps.ZoomControlStyle.SMALL
		},
		scaleControl: true,
		mapTypeId: google.maps.MapTypeId.ROADMAP
	};
	peta = new google.maps.Map(document.getElementById("map_canvas"),petaoption);
	
	// memanggil function ambilpeta() untuk menampilkan koordinat
	ambilpeta();
	  var flightPlanCoordinates = [
		<?php
			$sql_kota="SELECT * FROM batas_kota";
			$res_kota=mysql_query($sql_kota);
			$total_rows = mysql_num_rows($res_kota);
			$counter = 0;
			while($data=mysql_fetch_object($res_kota)){
				if(++$counter == $total_rows) {
			?>
				new google.maps.LatLng(<?php echo $data->latitude;?>, <?php echo $data->longitude;?>)
			<?php
				} else {
			?>
				new google.maps.LatLng(<?php echo $data->latitude;?>, <?php echo $data->longitude;?>),
			<?php
				}
			}
		?>
		];
	
  var flightPath = new google.maps.Polyline({
    path: flightPlanCoordinates,
    strokeColor: '#FF0000',
    strokeOpacity: 1.0,
    strokeWeight: 2
  });

  flightPath.setMap(peta);
  
}

function ambilpeta(){
    url = "json.php";
    $.ajax({
        url: url,
        dataType: 'json',
        cache: false,
        success: function(msg) {
	
var infowindow = new google.maps.InfoWindow();
		var markers, i;
		for (i = 0; i < msg.warteg.cabang.length;i++) {
		  x[i] = msg.warteg.cabang[i].x;
		  y[i] = msg.warteg.cabang[i].y;
		  
		set_icon(msg.warteg.cabang[i].singkatan);
		markers = new google.maps.Marker({
			position: new google.maps.LatLng(msg.warteg.cabang[i].x, msg.warteg.cabang[i].y),
			map: peta,
			icon: gambar_tanda,
		  });
		google.maps.event.addListener(markers, 'click', (function(markers, i) {
				return function() {
				var content = '<table class="tabel-common"><tr><th>Label</th><th>Keterangan</th></tr><tr><td>ID Site</td><td>'
				+ msg.warteg.cabang[i].idsite +
				'</td></tr><tr><td>Latitude</td><td>'
				+ msg.warteg.cabang[i].x +
				'</td></tr><tr><td>Longitude</td><td>'
				+ msg.warteg.cabang[i].y +
				'</td></tr><tr><td>Kecamatan</td><td>'
				+ msg.warteg.cabang[i].kecamatan +
				'</td></tr><tr><td>Kelurahan</td><td>'
				+ msg.warteg.cabang[i].kelurahan +
				'</td></tr><tr><td>Pemilik Menara</td><td>'
				+ msg.warteg.cabang[i].pemilik +
				'</td></tr><tr><td>Penyewa 1</td><td>'
				+ msg.warteg.cabang[i].penyewa1 +
				'</td></tr><tr><td>Penyewa 2</td><td>'
				+ msg.warteg.cabang[i].penyewa2 +
				'</td></tr><tr><td>Penyewa 3</td><td>'
				+ msg.warteg.cabang[i].penyewa3 +
				'</td></tr> <tr><td colspan="2"><a class="fancybox-buttons" title="'
				+msg.warteg.cabang[i].idsite+
				'" data-fancybox-group="button" href="../images/Tower/'+msg.warteg.cabang[i].foto+'"><img style="width:100px; margin:2px 3px 2px 0px; height:90px;" src="../images/Tower/'+msg.warteg.cabang[i].foto+'" alt="" /></a><a class="fancybox-buttons" title="'
				+msg.warteg.cabang[i].idsite+
				'" data-fancybox-group="button" href="../images/Tower/'+msg.warteg.cabang[i].foto+'"><img style="width:100px; margin:2px 3px 2px 0px; height:90px;" src="../images/Tower/'+msg.warteg.cabang[i].foto+'" alt="" /></a></td></tr> </table>';
				infowindow.setContent(content);
				infowindow.open(peta, markers);
					infowindow.setContent(content);
					infowindow.open(peta, markers);
				}
		  })(markers, i));
		}

        }
    });
}

// ketika button caripeta ditekan, maka script ini akan berjalan
$(document).ready(function() {
	
    $("#caripeta").click(function(){
        var kab 	= $("#kab").val();
	$.ajax({
        url: "json.php",
        data: "kab="+kab,
        dataType: 'json',
        cache: false,

        success: 
		function(msg){

		<?php
		$sql_lokasi="SELECT * FROM fokus_peta";
		$result=mysql_query($sql_lokasi);
		while($data=mysql_fetch_object($result)){
		?>
			var mapCenter = new google.maps.LatLng(<?php echo $data->latitude;?>, <?php echo $data->longitude;?>);
			var zooming = <?php echo $data->zoom;?>;
		<?php
		}
		?>
		var petaoption2 = {
			zoom: zooming,
			center: mapCenter,
			panControl: true,
			zoomControl: true,
			zoomControlOptions: {
				style: google.maps.ZoomControlStyle.SMALL
			},
			scaleControl: true,
			mapTypeId: google.maps.MapTypeId.ROADMAP
			};

			var peta2 = new google.maps.Map(document.getElementById("map_canvas"),petaoption2);
			
			var flightPlanCoordinates = [
			<?php
				$sql_kota="SELECT * FROM batas_kota";
				$res_kota=mysql_query($sql_kota);
				$total_rows = mysql_num_rows($res_kota);
				$counter = 0;
				while($data=mysql_fetch_object($res_kota)){
					if(++$counter == $total_rows) {
				?>
					new google.maps.LatLng(<?php echo $data->latitude;?>, <?php echo $data->longitude;?>)
				<?php
					} else {
				?>
					new google.maps.LatLng(<?php echo $data->latitude;?>, <?php echo $data->longitude;?>),
				<?php
					}
				}
			?>
			];
  var flightPath = new google.maps.Polyline({
    path: flightPlanCoordinates,
    strokeColor: '#FF0000',
    strokeOpacity: 1.0,
    strokeWeight: 2
  });

  flightPath.setMap(peta2);
			
	google.maps.event.addListener(peta2,'click',function(event){
		kasihtanda(event.latLng);
	});
	
	if(msg.status=='kosong')
	{
		alert('Data yang anda cari tidak ada dalam DATABASE Kami .!');
	}
	else
	{					
		var infowindow = new google.maps.InfoWindow();
		var markers, i;
		for (i = 0; i < msg.warteg.cabang.length;i++) {
			x[i] = msg.warteg.cabang[i].x;
			y[i] = msg.warteg.cabang[i].y;
				
			set_icon(msg.warteg.cabang[i].singkatan);		 
			markers = new google.maps.Marker({
				position: new google.maps.LatLng(msg.warteg.cabang[i].x, msg.warteg.cabang[i].y),
				map: peta2,	
				icon: gambar_tanda,
			});
			google.maps.event.addListener(markers, 'click', (function(markers, i) {
				return function() {
				var content = '<table class="tabel-common"><tr><th>Label</th><th>Keterangan</th></tr><tr><td>ID Site</td><td>'
				+ msg.warteg.cabang[i].idsite +
				'</td></tr><tr><td>Latitude</td><td>'
				+ msg.warteg.cabang[i].x +
				'</td></tr><tr><td>Longitude</td><td>'
				+ msg.warteg.cabang[i].y +
				'</td></tr><tr><td>Kecamatan</td><td>'
				+ msg.warteg.cabang[i].kecamatan +
				'</td></tr><tr><td>Kelurahan</td><td>'
				+ msg.warteg.cabang[i].kelurahan +
				'</td></tr><tr><td>Pemilik Menara</td><td>'
				+ msg.warteg.cabang[i].pemilik +
				'</td></tr><tr><td>Penyewa 1</td><td>'
				+ msg.warteg.cabang[i].penyewa1 +
				'</td></tr><tr><td>Penyewa 2</td><td>'
				+ msg.warteg.cabang[i].penyewa2 +
				'</td></tr><tr><td>Penyewa 3</td><td>'
				+ msg.warteg.cabang[i].penyewa3 +
				'</td></tr> <tr><td colspan="2"><a class="fancybox-buttons" title="'
				+ msg.warteg.cabang[i].idsite +
				'" data-fancybox-group="button" href="../images/Tower/'+msg.warteg.cabang[i].foto+'"><img style="width:100px; margin:2px 3px 2px 0px; height:90px;" src="../images/Tower/'+msg.warteg.cabang[i].foto+'" alt="" /></a><a class="fancybox-buttons" title="'
				+ msg.warteg.cabang[i].idsite +
				'" data-fancybox-group="button" href="../images/Tower/'+msg.warteg.cabang[i].foto+'"><img style="width:100px; margin:2px 3px 2px 0px; height:90px;" src="../images/Tower/'+msg.warteg.cabang[i].foto+'" alt="" /></a></td></tr> </table>';
				infowindow.setContent(content);
				infowindow.open(peta, markers);
					infowindow.setContent(content);
					infowindow.open(peta2, markers);
				}
			})(markers, i));
		}  
	}
}
});
});
});

</script> 
</head>
<body onload="peta_awal()">
	<div class="container">
		<div class="navbar navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container">
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"></a>
				 
				<div class="btn-group pull-right"></div>
				<a class="brand" href="#"><marquee> SUKOHARJO 2016 | Dinas Perhubungan, Informatika, dan Komunikasi Kabupaten Sukoharjo</marquee></a>
				</div>
			</div>
		</div>
		<form id="formpeta" class="form-inline">
			<table width="50%">
				<tr>
					<td><h3> Masukkan Kata Kunci :</h3></td>
					<td><input type=text id=kab name="key"  style="height:25px; width:200px"/>
						<br><article><font size="2" ><p>* nama site/kecamatan/kelurahan</p></font></article>
					</td>
					<td><button type="button" id="caripeta" class="btn">TAMPIL PETA</button></td>
				</tr>
			</table>
		</form>
		<div class="border">
			<div id="map_canvas" style="height:500px"></div>
		</div>
		<br>
		<h3>Legenda : </h3>
		<table class="tabel-common" width="25%" height="50%">
			<tr bgcolor=#00bfff>
			<font size="2" >
				<td align="center"><font size="3" ><b>Gambar</b></td>
				<td align="center"><font size="3" ><b>Keterangan</b></td>
			</font>
			</tr>
			<tr>
				<td align="center"><img src="assets/img/menara telkomsel.png" ></td>
				<td><font size="2" >Menara Telkomsel</td>
			</tr>
			<tr>
				<td align="center"><img src="assets/img/menara xl.png" ></td>
				<td><font size="2" >Menara XL</td>
			</tr>
			<tr>
				<td align="center"><img src="assets/img/menara indosat.png" ></td>
				<td><font size="2" >Menara Indosat</td>
			</tr>
			<tr>
				<td align="center"><img src="assets/img/menara axis.png" ></td>
				<td><font size="2" >Menara Axis</td>
			</tr>
			<tr>
				<td align="center"><img src="assets/img/menara h3indonesia.png" ></td>
				<td><font size="2" >Menara H3indoensia</td>
			</tr>
			<tr>
				<td align="center"><img src="assets/img/menara mitratel.png" ></td>
				<td><font size="2" >Menara Mitratel</td>
			</tr>
			<tr>
				<td align="center"><img src="assets/img/menara smartfren.png" ></td>
				<td><font size="2" >Menara Smartfren</td>
			</tr>
			<tr>
				<td align="center"><img src="assets/img/menara protelindo.png" ></td>
				<td><font size="2" >Menara Potelindo</td>
			</tr>
			<tr>
				<td align="center"><img src="assets/img/menara sti.png" ></td>
				<td><font size="2" >Menara Sti</td>
			</tr>
			<tr>
				<td align="center"><img src="assets/img/menara tbg.png" ></td>
				<td><font size="2" >Menara Tbg</td>
			</tr>
		</table>
		<hr>
		<footer>
	    	<marquee><font size="2" ><p>&copy; SUKOHARJO 2016 | Dinas Perhubungan, Informatika, dan Komunikasi Kabupaten Sukoharjo</p></font></marquee>
	    </footer>
	</div>
	</body>
</html>