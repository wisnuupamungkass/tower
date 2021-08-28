$(document).ready(function(){
	
	var base_url = $('#hiddenBaseUrl').val();
	var controller;
	jQuery(".select-1#klasifikasi").select_skin('- - - - - - - - - - - - - - - - - - - - - - - - -');
	
	$( "#site_form" ).dialog({
			autoOpen: false,
			height: 520,
			width: 1000,
			modal: false,
			hide: 'Slide',
			async: false,
			buttons: {
				Save: function() {
					var form_data = {
						id_site: $('#id_site').val(),
						nama_site: $('#nama_site').val(),
						longitude: $('#longitude').val(),
						latitude: $('#latitude').val(),
						pemilik_menara: $('#pemilik_menara').val(),
						kategori: $('#kategori').val(),
						alamat: $('#alamat').val(),
						kelurahan: $('#kelurahan').val(),
						kecamatan: $('#kecamatan').val(),
						plat: $('#plat').val(),
						lahan: $('#lahan').val(),
						inspeksi: $('#inspeksi').val(),
						utara: $('#utara').val(),
						timur: $('#timur').val(),
						selatan: $('#selatan').val(),
						barat: $('#barat').val()
					};

				  $.ajax({
					url : controller,
					type : 'POST',
					data : form_data,
					success: function(msg){
					$('#id_site').val(''),
					$('#nama_site').val(''),
					$('#longitude').val(''),
					$('#latitude').val(''),
					$('#pemilik_menara').val(''),
					$('#kategori').val(''),
					$('#alamat').val(''),
					$('#kelurahan').val(''),
					$('#kecamatan').val(''),
					$('#plat').val(''),
					$('#lahan').val(''),
					$('#inspeksi').val(''),
					$('#utara').val(''),
					$('#timur').val(''),
					$('#selatan').val(''),
					$('#barat').val(''),
					$( '#form_input' ).dialog( "close" );
					location.reload();
					}
				  });
			},
				Cancel: function() {
					$('#id_site').val(''),
					$('#nama_site').val(''),
					$('#longitude').val(''),
					$('#latitude').val(''),
					$('#pemilik_menara').val(''),
					$('#kategori').val(''),
					$('#alamat').val(''),
					$('#kelurahan').val(''),
					$('#kecamatan').val(''),
					$('#plat').val(''),
					$('#lahan').val(''),
					$('#inspeksi').val(''),
					$('#utara').val(''),
					$('#timur').val(''),
					$('#selatan').val(''),
					$('#barat').val(''),
					$( this ).dialog( "close" );
					location.reload();
				}
			},
			close: function() {
				$('#id_site').val(''),
				$('#nama_site').val(''),
				$('#longitude').val(''),
				$('#latitude').val(''),
				$('#pemilik_menara').val(''),
				$('#kategori').val(''),
				$('#alamat').val(''),
				$('#kelurahan').val(''),
				$('#kecamatan').val(''),
				$('#plat').val(''),
				$('#lahan').val(''),
				$('#inspeksi').val(''),
				$('#utara').val(''),
				$('#timur').val(''),
				$('#selatan').val(''),
				$('#barat').val(''),
				location.reload();
			}
		});

	$( "#site_create" )
    		.button()
    		.click(function() {
				controller = base_url + 'index.php/site/save/';
    		    jQuery(".select-1#pemilik_menara").select_skin('- - - - - - - - - - - - - - - - - - -');
				jQuery(".select-1#kategori").select_skin('BTS');
                jQuery(".select-1#plat").select_skin('Ada');
                jQuery(".select-1#lahan").select_skin('Pemukiman');
                jQuery(".select-1#inspeksi").select_skin('Belum'); 
				jQuery(".select-1#kelurahan").select_skin('- - - - - - - - - - - - - - - - - - -');
				jQuery(".select-1#kecamatan").select_skin('- - - - - - - - - - - - - - - - - - -');
                $( "#site_form" ).dialog( "open" );
    		});
	
	$(".site_edit").live("click",function(){
		controller = base_url + 'index.php/site/update/';
		var id_site = $(this).attr("id_site");
		var nama_site = $(this).attr("nama_site");
		var longitude = $(this).attr("longitude");
		var latitude = $(this).attr("latitude");
		var pemilik_menara = $(this).attr("pemilik_menara");
		var kategori = $(this).attr("kategori");
		var alamat = $(this).attr("alamat");
		var kelurahan = $(this).attr("kelurahan");
		var kecamatan = $(this).attr("kecamatan");
		var plat = $(this).attr("plat");
		var lahan = $(this).attr("lahan");
		var inspeksi = $(this).attr("inspeksi");
		var utara = $(this).attr("utara");
		var timur = $(this).attr("timur");
		var selatan = $(this).attr("selatan");
		var barat = $(this).attr("barat");
		
		if (inspeksi=='1')
		{
			var inspeksi = 'Sudah';
		}else 
		{
			var inspeksi = 'Belum';
		}
		
		$('#id_site').val(id_site);
		$('#nama_site').val(nama_site);
		$('#longitude').val(longitude);
		$('#latitude').val(latitude);
		$('#pemilik_menara').val(pemilik_menara);
		$('#kategori').val(kategori);
		$('#alamat').val(alamat);
		$('#kelurahan').val(kelurahan);
		$('#kecamatan').val(kecamatan);
		$('#plat').val(plat);
		$('#lahan').val(lahan);
		$('#inspeksi').val(inspeksi);
		$('#utara').val(utara);
		$('#timur').val(timur);
		$('#selatan').val(selatan);
		$('#barat').val(barat);
		
		jQuery(".select-1#pemilik_menara").select_skin(pemilik_menara);
		jQuery(".select-1#kategori").select_skin(kategori);
		jQuery(".select-1#plat").select_skin(plat);
		jQuery(".select-1#lahan").select_skin(lahan);
		jQuery(".select-1#inspeksi").select_skin(inspeksi);
		jQuery(".select-1#kelurahan").select_skin(kelurahan);
		jQuery(".select-1#kecamatan").select_skin(kecamatan);
		
		$( "#site_form" ).dialog( "open" );
		
		return false;
	});
	
	$(".site_del").live("click",function(){
		var element = $(this);
		var del_id = element.attr("id_site2");
		
		$( "#dialog-delete" ).dialog({
			autoOpen: false,
			resizable: false,
			async: false,
			height:180,
			modal: true,
			hide: 'Slide',
			buttons: {
				"Delete": function() {
					var del_id_ = {id_site : del_id};
					$.ajax({
						type: "POST",
						url : base_url + 'index.php/site/delete/',
						data: del_id_,
						success: function(msg){
							$('#show').html(msg);
							$('#dialog-delete' ).dialog( "close" );
							location.reload();
						}
					});
					},
				Cancel: function() {
					$( this ).dialog( "close" );
				}
			}
		});
		
		$( "#dialog-delete" ).dialog( "open" );
		
		return false;
	});
	
	$( "#tower_form_insert" ).dialog({
		autoOpen: false,
		height: 420,
		width: 1000,
		modal: false,
		hide: 'Slide',
		buttons: {
			Save: function() {
                var form_data = {
					id_site: $('#id_site').val(),
					tipe_menara: $('#tipe_menara').val(),
					tinggi_menara: $('#tinggi_menara').val(),
					struktur_menara: $('#struktur_menara').val(),
					eksisting_antena: $('#eksisting_antena').val(),
					tinggi_antena: $('#tinggi_antena').val(),
					beban_berjalan: $('#beban_berjalan').val(),
					beban_maksimum: $('#beban_maksimum').val()
			  	};

			  $.ajax({
				url : controller,
				type : 'POST',
				data : form_data,
				success: function(msg){
				$( '#form_input' ).dialog( "close" ),
                $('#id_site').val(''),
				$('#tipe_menara').val(''),
				$('#tinggi_menara').val(''),
				$('#struktur_menara').val(''),
				$('#eksisting_antena').val(''),
				$('#tinggi_antena').val(''),
				$('#beban_berjalan').val(''),
				$('#beban_maksimum').val(''),
                location.reload();
				}
			  });
			
		},
			Cancel: function() {
				$('#id_site').val(''),
    			$('#tipe_menara').val(''),
				$('#tinggi_menara').val(''),
				$('#struktur_menara').val(''),
				$('#eksisting_antena').val(''),
				$('#tinggi_antena').val(''),
				$('#beban_berjalan').val(''),
				$('#beban_maksimum').val(''),
				$( this ).dialog( "close" );
                location.reload();
			}
		},
		close: function() {
			$('#id_site').val(''),
			$('#tipe_menara').val(''),
			$('#tinggi_menara').val(''),
			$('#struktur_menara').val(''),
			$('#eksisting_antena').val(''),
			$('#tinggi_antena').val(''),
			$('#beban_berjalan').val(''),
			$('#beban_maksimum').val(''),
            location.reload();
		}
	});
	
	$( "#tower_create" )
    		.button()
    		.click(function() {
				controller = base_url + 'index.php/tower/save/';
    		    jQuery(".select-1#id_site").select_skin('- - - - - - - - - - - - - - - - - - -');  
    		    jQuery(".select-1#tipe_menara").select_skin('- - - - - - - - - - - - - - - - - - -');
                jQuery(".select-1#eksisting_antena").select_skin('- - - - - - - - - - - - - - - - - - -');
                jQuery(".select-1#struktur_menara").select_skin('- - - - - - - - - - - - - - - - - - -'); 
                $( "#tower_form_insert" ).dialog( "open" );
    		});
	
	$(".tower_edit").live("click",function(){
		controller = base_url + 'index.php/tower/update/';
		var id_site = $(this).attr("id_site2");
		var tipe_menara = $(this).attr("tipe_menara2");
		var tinggi_menara = $(this).attr("tinggi_menara2");
		var struktur_menara = $(this).attr("struktur_menara2");
		var eksisting_antena = $(this).attr("eksisting_antena2");
		var tinggi_antena = $(this).attr("tinggi_antena2");
		var beban_berjalan = $(this).attr("beban_berjalan2");
		var beban_maksimum = $(this).attr("beban_maksimum2");
		
		$('#id_site2').val(id_site);
		$('#tipe_menara2').val(tipe_menara);
		$('#tinggi_menara2').val(tinggi_menara);
		$('#struktur_menara2').val(struktur_menara);
		$('#eksisting_antena2').val(eksisting_antena);
		$('#tinggi_antena2').val(tinggi_antena);
		$('#beban_berjalan2').val(beban_berjalan);
		$('#beban_maksimum2').val(beban_maksimum);
		
		jQuery(".select-1#tipe_menara2").select_skin(tipe_menara);
		jQuery(".select-1#eksisting_antena2").select_skin(eksisting_antena + ' Antena');
		jQuery(".select-1#struktur_menara2").select_skin(struktur_menara);
		
		$( "#tower_form_update" ).dialog({
			autoOpen: false,
			height: 420,
			width: 1000,
			modal: false,
			hide: 'Slide',
			buttons: {
				Save: function() {
					var form_data = {
						id_site: $('#id_site2').val(),
						tipe_menara: $('#tipe_menara2').val(),
						tinggi_menara: $('#tinggi_menara2').val(),
						struktur_menara: $('#struktur_menara2').val(),
						eksisting_antena: $('#eksisting_antena2').val(),
						tinggi_antena: $('#tinggi_antena2').val(),
						beban_berjalan: $('#beban_berjalan2').val(),
						beban_maksimum: $('#beban_maksimum2').val()
					};

				  $.ajax({
					url : controller,
					type : 'POST',
					data : form_data,
					success: function(msg){
					$( '#tower_form_update' ).dialog( "close" ),
					$('#id_site2').val(''),
					$('#tipe_menara2').val(''),
					$('#tinggi_menara2').val(''),
					$('#struktur_menara2').val(''),
					$('#eksisting_antena2').val(''),
					$('#tinggi_antena2').val(''),
					$('#beban_berjalan2').val(''),
					$('#beban_maksimum2').val(''),
					location.reload();
					}
				  });
				
			},
				Cancel: function() {
					$('#id_site2').val(''),
					$('#tipe_menara2').val(''),
					$('#tinggi_menara2').val(''),
					$('#struktur_menara2').val(''),
					$('#eksisting_antena2').val(''),
					$('#tinggi_antena2').val(''),
					$('#beban_berjalan2').val(''),
					$('#beban_maksimum2').val(''),
					$( this ).dialog( "close" );
					location.reload();
				}
			},
			close: function() {
				$('#id_site2').val(''),
				$('#tipe_menara2').val(''),
				$('#tinggi_menara2').val(''),
				$('#struktur_menara2').val(''),
				$('#eksisting_antena2').val(''),
				$('#tinggi_antena2').val(''),
				$('#beban_berjalan2').val(''),
				$('#beban_maksimum2').val(''),
				location.reload();
			}
		});
		
		$( "#tower_form_update" ).dialog( "open" );
		
		return false;
	});

	$(".tower_del").live("click",function(){
		var element = $(this);
		var del_id = element.attr("id_site2");
		
		$( "#dialog-delete" ).dialog({
			autoOpen: false,
			resizable: false,
			async: false,
			height:180,
			modal: true,
			hide: 'Slide',
			buttons: {
				"Delete": function() {
					var del_id_ = {id_site : del_id};
					$.ajax({
						type: "POST",
						url : base_url + 'index.php/tower/delete/',
						data: del_id_,
						success: function(msg){
							$('#show').html(msg);
							$('#dialog-delete' ).dialog( "close" );
							location.reload();
						}
					});
					},
				Cancel: function() {
					$( this ).dialog( "close" );
				}
			}
		});
		
		$( "#dialog-delete" ).dialog( "open" );
		
		return false;
	});
	
	$( "#ground_create" )
    		.button()
    		.click(function() {
				controller = base_url + 'index.php/ground/save/';
    		    jQuery(".select-1#id_site").select_skin('- - - - - - - - - - - - - - - - - - -');  
    		    jQuery(".select-1#grounding_system").select_skin('- - - - - - - - - - - - - - - - - - -');
				jQuery(".select-1#penangkal_petir").select_skin('- - - - - - - - - - - - - - - - - - -');
                jQuery(".select-1#proteksi_kebakaran").select_skin('- - - - - - - - - - - - - - - - - - -');
				jQuery(".select-1#air_conditioner").select_skin('- - - - - - - - - - - - - - - - - - -');
				jQuery(".select-1#penerangan").select_skin('- - - - - - - - - - - - - - - - - - -');
				jQuery(".select-1#penerbangan").select_skin('- - - - - - - - - - - - - - - - - - -');
                jQuery(".select-1#halaman_pagar").select_skin('- - - - - - - - - - - - - - - - - - -');
				jQuery(".select-1#kelistrikan").select_skin('- - - - - - - - - - - - - - - - - - -');

				$( "#ground_form_insert" ).dialog({
					autoOpen: false,
					height: 400,
					width: 1000,
					modal: false,
					hide: 'Slide',
					buttons: {
						Save: function() {
							var form_data = {
								id_site: $('#id_site').val(),
								grounding_system: $('#grounding_system').val(),
								penangkal_petir: $('#penangkal_petir').val(),
								proteksi_kebakaran: $('#proteksi_kebakaran').val(),
								air_conditioner: $('#air_conditioner').val(),
								penerangan: $('#penerangan').val(),
								penerbangan: $('#penerbangan').val(),
								halaman_pagar: $('#halaman_pagar').val(),
								kelistrikan: $('#kelistrikan').val(),
								ajax:1
							};
							
							$('#id_site').attr("disabled",false);
							$('#grounding_system').attr("disabled",false);
							$('#penangkal_petir').attr("disabled",false);
							$('#proteksi_kebakaran').attr("disabled",false);
							$('#air_conditioner').attr("disabled",false);
							$('#penerangan').attr("disabled",false);
							$('#penerbangan').attr("disabled",false);
							$('#halaman_pagar').attr("disabled",false);
							$('#kelistrikan').attr("disabled",false);

						  $.ajax({
							url : controller,
							type : 'POST',
							data : form_data,
							success: function(msg){
							$( '#form_input' ).dialog( "close" ),
							$('#id_site').val(''),
							$('#grounding_system').val(''),
							$('#penangkal_petir').val(''),
							$('#proteksi_kebakaran').val(''),
							$('#air_conditioner').val(''),
							$('#penerangan').val(''),
							$('#penerbangan').val(''),
							$('#halaman_pagar').val(''),
							$('#kelistrikan').val(''),
							location.reload();
							}
						  });
						
					},
						Cancel: function() {
							$('#id_site').val(''),
							$('#grounding_system').val(''),
							$('#penangkal_petir').val(''),
							$('#proteksi_kebakaran').val(''),
							$('#air_conditioner').val(''),
							$('#penerangan').val(''),
							$('#penerbangan').val(''),
							$('#halaman_pagar').val(''),
							$('#kelistrikan').val(''),
							$( this ).dialog( "close" );
							location.reload();
						}
					},
					close: function() {
						$('#id_site').val(''),
						$('#grounding_system').val(''),
						$('#penangkal_petir').val(''),
						$('#proteksi_kebakaran').val(''),
						$('#air_conditioner').val(''),
						$('#penerangan').val(''),
						$('#penerbangan').val(''),
						$('#halaman_pagar').val(''),
						$('#kelistrikan').val(''),
						location.reload();
					}
				});

                $( "#ground_form_insert" ).dialog( "open" );
    		});
	
	$(".ground_edit").live("click",function(){
		controller = base_url + 'index.php/ground/update/';
		var id_site = $(this).attr("id_site2");
		var grounding_system = $(this).attr("grounding_system2");
		var penangkal_petir = $(this).attr("penangkal_petir2");
		var proteksi_kebakaran = $(this).attr("proteksi_kebakaran2");
		var air_conditioner = $(this).attr("air_conditioner2");
		var penerangan = $(this).attr("penerangan2");
		var penerbangan = $(this).attr("penerbangan2");
		var halaman_pagar = $(this).attr("halaman_pagar2");
		var kelistrikan = $(this).attr("kelistrikan2");
		
		$('#id_site2').val(id_site);
		$('#grounding_system2').val(grounding_system);
		$('#penangkal_petir2').val(penangkal_petir);
		$('#proteksi_kebakaran2').val(proteksi_kebakaran);
		$('#air_conditioner2').val(air_conditioner);
		$('#penerangan2').val(penerangan);
		$('#penerbangan2').val(penerbangan);
		$('#halaman_pagar2').val(halaman_pagar);
		$('#kelistrikan2').val(kelistrikan);
		
		jQuery(".select-1#grounding_system2").select_skin(grounding_system);
		jQuery(".select-1#penangkal_petir2").select_skin(penangkal_petir);
		jQuery(".select-1#proteksi_kebakaran2").select_skin(proteksi_kebakaran);
		jQuery(".select-1#air_conditioner2").select_skin(air_conditioner);
		jQuery(".select-1#penerangan2").select_skin(penerangan);
		jQuery(".select-1#penerbangan2").select_skin(penerbangan);
		jQuery(".select-1#halaman_pagar2").select_skin(halaman_pagar);
		jQuery(".select-1#kelistrikan2").select_skin(kelistrikan);
		
		$( "#ground_form_update" ).dialog({
			autoOpen: false,
			height: 400,
			width: 1000,
			modal: false,
			hide: 'Slide',
			buttons: {
				Save: function() {
					var form_data = {
						id_site: $('#id_site2').val(),
						grounding_system: $('#grounding_system2').val(),
						penangkal_petir: $('#penangkal_petir2').val(),
						proteksi_kebakaran: $('#proteksi_kebakaran2').val(),
						air_conditioner: $('#air_conditioner2').val(),
						penerangan: $('#penerangan2').val(),
						penerbangan: $('#penerbangan2').val(),
						halaman_pagar: $('#halaman_pagar2').val(),
						kelistrikan: $('#kelistrikan2').val(),
						ajax:1
					};
					
					$('#id_site2').attr("disabled",false);
					$('#grounding_system2').attr("disabled",false);
					$('#penangkal_petir2').attr("disabled",false);
					$('#proteksi_kebakaran2').attr("disabled",false);
					$('#air_conditioner2').attr("disabled",false);
					$('#penerangan2').attr("disabled",false);
					$('#penerbangan2').attr("disabled",false);
					$('#halaman_pagar2').attr("disabled",false);
					$('#kelistrikan2').attr("disabled",false);

				  $.ajax({
					url : controller,
					type : 'POST',
					data : form_data,
					success: function(msg){
					$( '#ground_form_update' ).dialog( "close" ),
					location.reload();
					}
				  });
				
			},
				Cancel: function() {
					$('#id_site2').val(''),
					$('#grounding_system2').val(''),
					$('#penangkal_petir2').val(''),
					$('#proteksi_kebakaran2').val(''),
					$('#air_conditioner2').val(''),
					$('#penerangan2').val(''),
					$('#penerbangan2').val(''),
					$('#halaman_pagar2').val(''),
					$('#kelistrikan2').val(''),
					$( this ).dialog( "close" );
					location.reload();
				}
			},
			close: function() {
				$('#id_site2').val(''),
				$('#grounding_system2').val(''),
				$('#penangkal_petir2').val(''),
				$('#proteksi_kebakaran2').val(''),
				$('#air_conditioner2').val(''),
				$('#penerangan2').val(''),
				$('#penerbangan2').val(''),
				$('#halaman_pagar2').val(''),
				$('#kelistrikan2').val(''),
				location.reload();
			}
		});
		
		$( "#ground_form_update" ).dialog( "open" );
		
		return false;
	});
	
	$(".ground_del").live("click",function(){
		var element = $(this);
		var del_id = element.attr("id_site2");
		
		$( "#dialog-delete" ).dialog({
			autoOpen: false,
			resizable: false,
			async: false,
			height:180,
			modal: true,
			hide: 'Slide',
			buttons: {
				"Delete": function() {
					var del_id_ = {id_site : del_id};
					$.ajax({
						type: "POST",
						url : base_url + 'index.php/ground/delete/',
						data: del_id_,
						success: function(msg){
							$('#show').html(msg);
							$('#dialog-delete' ).dialog( "close" );
							location.reload();
						}
					});
					},
				Cancel: function() {
					$( this ).dialog( "close" );
				}
			}
		});
		
		$( "#dialog-delete" ).dialog( "open" );
		
		return false;
	});
	
	$( "#shelter_create" )
    		.button()
    		.click(function() {
				controller = base_url + 'index.php/shelter/save/';
    		    jQuery(".select-1#id_site").select_skin('- - - - - - - - - - - - - - - - - - -');  
    		    jQuery(".select-1#shelters").select_skin('- - - - - - - - - - - - - - - - - - -');
				jQuery(".select-1#tipe_shelter_1").select_skin('- - - - - - - - - - - - - - - - - - -');
                jQuery(".select-1#tipe_shelter_2").select_skin('- - - - - - - - - - - - - - - - - - -');
                jQuery(".select-1#tipe_shelter_3").select_skin('- - - - - - - - - - - - - - - - - - -');
				jQuery(".select-1#tipe_shelter_4").select_skin('- - - - - - - - - - - - - - - - - - -');
                jQuery(".select-1#tipe_shelter_5").select_skin('- - - - - - - - - - - - - - - - - - -');
                jQuery(".select-1#tipe_shelter_6").select_skin('- - - - - - - - - - - - - - - - - - -');

				$( "#shelter_form_insert" ).dialog({
					autoOpen: false,
					height: 400,
					width: 1000,
					modal: false,
					hide: 'Slide',
					buttons: {
						Save: function() {
							var form_data = {
								id_site: $('#id_site').val(),
								shelter: $('#shelters').val(),
								tipe_shelter_1: $('#tipe_shelter_1').val(),
								tipe_shelter_2: $('#tipe_shelter_2').val(),
								tipe_shelter_3: $('#tipe_shelter_3').val(),
								tipe_shelter_4: $('#tipe_shelter_4').val(),
								tipe_shelter_5: $('#tipe_shelter_5').val(),
								tipe_shelter_6: $('#tipe_shelter_6').val(),
								ajax:1
							};
											
							$('#id_site').attr("disabled",false);
							$('#shelters').attr("disabled",false);
							$('#tipe_shelter_1').attr("disabled",false);
							$('#tipe_shelter_2').attr("disabled",false);
							$('#tipe_shelter_3').attr("disabled",false);
							$('#tipe_shelter_4').attr("disabled",false);
							$('#tipe_shelter_5').attr("disabled",false);
							$('#tipe_shelter_6').attr("disabled",false);

						  $.ajax({
							url : controller,
							type : 'POST',
							data : form_data,
							success: function(msg){
							$( '#form_input' ).dialog( "close" ),
							location.reload();
							}
						  });
						
					},
						Cancel: function() {
							$('#id_site').val(''),
							$('#shelters').val(''),
							$('#tipe_shelter_1').val(''),
							$('#tipe_shelter_2').val(''),
							$('#tipe_shelter_3').val(''),
							$('#tipe_shelter_4').val(''),
							$('#tipe_shelter_5').val(''),
							$('#tipe_shelter_6').val(''),
							$( this ).dialog( "close" );
							location.reload();
						}
					},
					close: function() {
						$('#id_site').val(''),
						$('#shelters').val(''),
						$('#tipe_shelter_1').val(''),
						$('#tipe_shelter_2').val(''),
						$('#tipe_shelter_3').val(''),
						$('#tipe_shelter_4').val(''),
						$('#tipe_shelter_5').val(''),
						$('#tipe_shelter_6').val(''),
						location.reload();
					}
				});

                $( "#shelter_form_insert" ).dialog( "open" );
    		});
	
	$(".shelter_edit").live("click",function(){
		controller = base_url + 'index.php/shelter/update/';
		var id_site = $(this).attr("id_site2");
		var shelter = $(this).attr("shelters2");
		var tipe_shelter_1 = $(this).attr("tipe_shelter2_1");
		var tipe_shelter_2 = $(this).attr("tipe_shelter2_2");
		var tipe_shelter_3 = $(this).attr("tipe_shelter2_3");
		var tipe_shelter_4 = $(this).attr("tipe_shelter2_4");
		var tipe_shelter_5 = $(this).attr("tipe_shelter2_5");
		var tipe_shelter_6 = $(this).attr("tipe_shelter2_6");
		
		$('#id_site2').val(id_site);
		$('#shelters2').val(shelter);
		$('#tipe_shelter2_1').val(tipe_shelter_1);
		$('#tipe_shelter2_2').val(tipe_shelter_2);
		$('#tipe_shelter2_3').val(tipe_shelter_3);
		$('#tipe_shelter2_4').val(tipe_shelter_4);
		$('#tipe_shelter2_5').val(tipe_shelter_5);
		$('#tipe_shelter2_6').val(tipe_shelter_6);
		
		jQuery(".select-1#shelters2").select_skin(shelter);
		jQuery(".select-1#tipe_shelter2_1").select_skin(tipe_shelter_1);
		jQuery(".select-1#tipe_shelter2_2").select_skin(tipe_shelter_2);
		jQuery(".select-1#tipe_shelter2_3").select_skin(tipe_shelter_3);
		jQuery(".select-1#tipe_shelter2_4").select_skin(tipe_shelter_4);
		jQuery(".select-1#tipe_shelter2_5").select_skin(tipe_shelter_5);
		jQuery(".select-1#tipe_shelter2_6").select_skin(tipe_shelter_6);
		
		$( "#shelter_form_update" ).dialog({
			autoOpen: false,
			height: 400,
			width: 1000,
			modal: false,
			hide: 'Slide',
			buttons: {
				Save: function() {
					var form_data = {
						id_site: $('#id_site2').val(),
						shelter: $('#shelters2').val(),
						tipe_shelter_1: $('#tipe_shelter2_1').val(),
						tipe_shelter_2: $('#tipe_shelter2_2').val(),
						tipe_shelter_3: $('#tipe_shelter2_3').val(),
						tipe_shelter_4: $('#tipe_shelter2_4').val(),
						tipe_shelter_5: $('#tipe_shelter2_5').val(),
						tipe_shelter_6: $('#tipe_shelter2_6').val(),
						ajax:1
					};
					
					$('#id_site2').attr("disabled",false);
					$('#shelters2').attr("disabled",false);
					$('#tipe_shelter2_1').attr("disabled",false);
					$('#tipe_shelter2_2').attr("disabled",false);
					$('#tipe_shelter2_3').attr("disabled",false);
					$('#tipe_shelter2_4').attr("disabled",false);
					$('#tipe_shelter2_5').attr("disabled",false);
					$('#tipe_shelter2_6').attr("disabled",false);

				  $.ajax({
					url : controller,
					type : 'POST',
					data : form_data,
					success: function(msg){
					$( '#form_input' ).dialog( "close" ),
					location.reload();
					}
				  });
				
			},
				Cancel: function() {
					$('#id_site2').val(''),
					$('#shelters2').val(''),
					$('#tipe_shelter2_1').val(''),
					$('#tipe_shelter2_2').val(''),
					$('#tipe_shelter2_3').val(''),
					$('#tipe_shelter2_4').val(''),
					$('#tipe_shelter2_5').val(''),
					$('#tipe_shelter2_6').val(''),
					$( this ).dialog( "close" );
					location.reload();
				}
			},
			close: function() {
				$('#id_site2').val(''),
				$('#shelters2').val(''),
				$('#tipe_shelter2_1').val(''),
				$('#tipe_shelter2_2').val(''),
				$('#tipe_shelter2_3').val(''),
				$('#tipe_shelter2_4').val(''),
				$('#tipe_shelter2_5').val(''),
				$('#tipe_shelter2_6').val(''),
				location.reload();
			}
		});
		
		$( "#shelter_form_update" ).dialog( "open" );
		
		return false;
	});
	
	$(".shelter_del").live("click",function(){
		var element = $(this);
		var del_id = element.attr("id_site2");
		
		$( "#dialog-delete" ).dialog({
			autoOpen: false,
			resizable: false,
			async: false,
			height:180,
			modal: true,
			hide: 'Slide',
			buttons: {
				"Delete": function() {
					var del_id_ = {id_site : del_id};
					$.ajax({
						type: "POST",
						url : base_url + 'index.php/shelter/delete/',
						data: del_id_,
						success: function(msg){
							$('#show').html(msg);
							$('#dialog-delete' ).dialog( "close" );
							location.reload();
						}
					});
					},
				Cancel: function() {
					$( this ).dialog( "close" );
				}
			}
		});
		
		$( "#dialog-delete" ).dialog( "open" );
		
		return false;
	});
	
	$( "#air_create" )
    		.button()
    		.click(function() {
				controller = base_url + 'index.php/air/save/';
    		    jQuery(".select-1#id_site").select_skin('- - - - - - - - - - - - - - - - - - -');  
    		    jQuery(".select-1#status").select_skin('- - - - - - - - - - - - - - - - - - -');
				jQuery(".select-1#merk").select_skin('- - - - - - - - - - - - - - - - - - -');
                jQuery(".select-1#jumlah").select_skin('- - - - - - - - - - - - - - - - - - -');
                jQuery(".select-1#suhu_ruangan").select_skin('- - - - - - - - - - - - - - - - - - -');

				$( "#air_form_insert" ).dialog({
					autoOpen: false,
					height: 400,
					width: 1000,
					modal: false,
					hide: 'Slide',
					buttons: {
						Save: function() {
							var form_data = {
								id_site: $('#id_site').val(),
								status: $('#status').val(),
								merk: $('#merk').val(),
								jumlah: $('#jumlah').val(),
								suhu_ruangan: $('#suhu_ruangan').val(),
								ajax:1
							};
							
							$('#id_site').attr("disabled",false);
							$('#status').attr("disabled",false);
							$('#merk').attr("disabled",false);
							$('#jumlah').attr("disabled",false);
							$('#suhu_ruangan').attr("disabled",false);

						  $.ajax({
							url : controller,
							type : 'POST',
							data : form_data,
							success: function(msg){
							$( this ).dialog( "close" ),
							location.reload();
							}
						  });
						
					},
						Cancel: function() {
							$('#id_site').val(''),
							$('#status').val(''),
							$('#merk').val(''),
							$('#jumlah').val(''),
							$('#suhu_ruangan').val(''),
							$( this ).dialog( "close" );
							location.reload();
						}
					},
					close: function() {
						$('#id_site').val(''),
						$('#status').val(''),
						$('#merk').val(''),
						$('#jumlah').val(''),
						$('#suhu_ruangan').val(''),
						location.reload();
					}
				});
    
                $( "#air_form_insert" ).dialog( "open" );
    		});
	
	$(".air_edit").live("click",function(){
		controller = base_url + 'index.php/air/update/';
		var id_site = $(this).attr("id_site2");
		var status = $(this).attr("status2");
		var merk = $(this).attr("merk2");
		var jumlah = $(this).attr("jumlah2");
		var suhu_ruangan = $(this).attr("suhu_ruangan2");
		
		$('#id_site2').val(id_site);
		$('#status2').val(status);
		$('#merk2').val(merk);
		$('#jumlah2').val(jumlah);
		$('#suhu_ruangan2').val(suhu_ruangan);
		
		jQuery(".select-1#status2").select_skin(status);
		jQuery(".select-1#merk2").select_skin(merk);
		jQuery(".select-1#jumlah2").select_skin(jumlah);
		jQuery(".select-1#suhu_ruangan2").select_skin(suhu_ruangan);
		
		$( "#air_form_update" ).dialog({
			autoOpen: false,
			height: 400,
			width: 1000,
			modal: false,
			hide: 'Slide',
			buttons: {
				Save: function() {
					var form_data = {
						id_site: $('#id_site2').val(),
						status: $('#status2').val(),
						merk: $('#merk2').val(),
						jumlah: $('#jumlah2').val(),
						suhu_ruangan: $('#suhu_ruangan2').val(),
						ajax:1
					};
					
					$('#id_site2').attr("disabled",false);
					$('#status2').attr("disabled",false);
					$('#merk2').attr("disabled",false);
					$('#jumlah2').attr("disabled",false);
					$('#suhu_ruangan2').attr("disabled",false);

				  $.ajax({
					url : controller,
					type : 'POST',
					data : form_data,
					success: function(msg){
					$( this ).dialog( "close" ),
					location.reload();
					}
				  });
				
			},
				Cancel: function() {
					$('#id_site2').val(''),
					$('#status2').val(''),
					$('#merk2').val(''),
					$('#jumlah2').val(''),
					$('#suhu_ruangan2').val(''),
					$( this ).dialog( "close" );
					location.reload();
				}
			},
			close: function() {
				$('#id_site2').val(''),
				$('#status2').val(''),
				$('#merk2').val(''),
				$('#jumlah2').val(''),
				$('#suhu_ruangan2').val(''),
				location.reload();
			}
		});
		
		$( "#air_form_update" ).dialog( "open" );
		
		return false;
	});
	
	$(".air_del").live("click",function(){
		var element = $(this);
		var del_id = element.attr("id_site2");
		
		$( "#dialog-delete" ).dialog({
			autoOpen: false,
			resizable: false,
			async: false,
			height:180,
			modal: true,
			hide: 'Slide',
			buttons: {
				"Delete": function() {
					var del_id_ = {id_site : del_id};
					$.ajax({
						type: "POST",
						url : base_url + 'index.php/air/delete/',
						data: del_id_,
						success: function(msg){
							$('#show').html(msg);
							$('#dialog-delete' ).dialog( "close" );
							location.reload();
						}
					});
					},
				Cancel: function() {
					$( this ).dialog( "close" );
				}
			}
		});
		
		$( "#dialog-delete" ).dialog( "open" );
		
		return false;
	});
	
	$( "#elec_create" )
    		.button()
    		.click(function() {
    		    controller = base_url + 'index.php/electric/save/';
				jQuery(".select-1#id_site").select_skin('- - - - - - - - - - - - - - - - - - -');  
    		    jQuery(".select-1#catudaya_utama").select_skin('- - - - - - - - - - - - - - - - - - -');
				jQuery(".select-1#catudaya_penunjang").select_skin('- - - - - - - - - - - - - - - - - - -');
                
				$( "#elec_form_insert" ).dialog({
					autoOpen: false,
					height: 400,
					width: 1000,
					modal: false,
					hide: 'Slide',
					buttons: {
						Save: function() {
							var form_data = {
								id_site: $('#id_site').val(),
								catudaya_utama: $('#catudaya_utama').val(),
								catudaya_penunjang: $('#catudaya_penunjang').val(),
								kapasitas_utama: $('#kapasitas_utama').val(),
								kapasitas_penunjang: $('#kapasitas_penunjang').val(),
								kva: $('#kva').val(),
								ajax:1
							};
							
							$('#id_site').attr("disabled",false);
							$('#catudaya_utama').attr("disabled",false);
							$('#catudaya_penunjang').attr("disabled",false);
							$('#kapasitas_utama').attr("disabled",false);
							$('#kapasitas_penunjang').attr("disabled",false);
							$('#kva').attr("disabled",false);

						  $.ajax({
							url : controller,
							type : 'POST',
							data : form_data,
							success: function(msg){
							$( this ).dialog( "close" ),
							$('#id_site').val(''),
							$('#catudaya_utama').val(''),
							$('#catudaya_penunjang').val(''),
							$('#kapasitas_utama2').val(''),
							$('#kapasitas_penunjang2').val(''),
							location.reload();
							}
						  });
						
					},
						Cancel: function() {
							$('#id_site').val(''),
							$('#catudaya_utama').val(''),
							$('#catudaya_penunjang').val(''),
							$('#kapasitas_utama2').val(''),
							$('#kapasitas_penunjang2').val(''),
							$( this ).dialog( "close" );
							location.reload();
						}
					},
					close: function() {
						$('#id_site').val(''),
						$('#catudaya_utama').val(''),
						$('#catudaya_penunjang').val(''),
						$('#kapasitas_utama2').val(''),
						$('#kapasitas_penunjang2').val(''),
						location.reload();
					}
				});
				
				$( "#elec_form_insert" ).dialog( "open" );
    		});
	
	$(".elec_edit").live("click",function(){
		controller = base_url + 'index.php/electric/update/';
		var id_site = $(this).attr("id_site2");
		var catudaya_utama = $(this).attr("catudaya_utama2");
		var catudaya_penunjang = $(this).attr("catudaya_penunjang2");
		var kapasitas_utama = $(this).attr("kapasitas_utama2");
		var kapasitas_penunjang = $(this).attr("kapasitas_penunjang2");
		
		$('#id_site2').val(id_site);
		$('#catudaya_utama2').val(catudaya_utama);
		$('#catudaya_penunjang2').val(catudaya_penunjang);
		$('#kapasitas_utama2').val(kapasitas_utama);
		$('#kapasitas_penunjang2').val(kapasitas_penunjang);
		
		jQuery(".select-1#catudaya_utama2").select_skin(catudaya_utama);
		jQuery(".select-1#catudaya_penunjang2").select_skin(catudaya_penunjang);
		
		$( "#elec_form_update" ).dialog({
			autoOpen: false,
			height: 400,
			width: 1000,
			modal: false,
			hide: 'Slide',
			buttons: {
				Save: function() {
					var form_data = {
						id_site: $('#id_site2').val(),
						catudaya_utama: $('#catudaya_utama2').val(),
						catudaya_penunjang: $('#catudaya_penunjang2').val(),
						kapasitas_utama: $('#kapasitas_utama2').val(),
						kapasitas_penunjang: $('#kapasitas_penunjang2').val(),
						ajax:1
					};
					
					$('#id_site2').attr("disabled",false);
					$('#catudaya_utama2').attr("disabled",false);
					$('#catudaya_penunjang2').attr("disabled",false);
					$('#kapasitas_utama2').attr("disabled",false);
					$('#kapasitas_penunjang2').attr("disabled",false);

				  $.ajax({
					url : controller,
					type : 'POST',
					data : form_data,
					success: function(msg){
					$( this ).dialog( "close" ),
					location.reload();
					}
				  });
				
			},
				Cancel: function() {
					$('#id_site2').val(''),
					$('#catudaya_utama2').val(''),
					$('#catudaya_penunjang2').val(''),
					$('#kapasitas_utama2').val(''),
					$('#kapasitas_penunjang2').val(''),
					$( this ).dialog( "close" );
					location.reload();
				}
			},
			close: function() {
				$('#id_site2').val(''),
				$('#catudaya_utama2').val(''),
				$('#catudaya_penunjang2').val(''),
				$('#kapasitas_utama2').val(''),
				$('#kapasitas_penunjang2').val(''),
				location.reload();
			}
		});
		
		$( "#elec_form_update" ).dialog( "open" );
		
		return false;
	});
	
	$(".elec_del").live("click",function(){
		var element = $(this);
		var del_id = element.attr("id_site2");
		
		$( "#dialog-delete" ).dialog({
			autoOpen: false,
			resizable: false,
			async: false,
			height:180,
			modal: true,
			hide: 'Slide',
			buttons: {
				"Delete": function() {
					var del_id_ = {id_site : del_id};
					$.ajax({
						type: "POST",
						url : base_url + 'index.php/electric/delete/',
						data: del_id_,
						success: function(msg){
							$('#show').html(msg);
							$('#dialog-delete' ).dialog( "close" );
							location.reload();
						}
					});
					},
				Cancel: function() {
					$( this ).dialog( "close" );
				}
			}
		});
		
		$( "#dialog-delete" ).dialog( "open" );
		
		return false;
	});
	
	$( "#document_create" )
    		.button()
    		.click(function() {
    		    controller = base_url + 'index.php/document/save/';
				jQuery(".select-1#id_site").select_skin('- - - - - - - - - - - - - - - - - - -');  
    		    jQuery(".select-1#pemilik_menara").select_skin('- - - - - - - - - - - - - - - - - - -');
				jQuery(".select-1#penyewa_1").select_skin('- - - - - - - - - - - - - - - - - - -');
				jQuery(".select-1#penyewa_2").select_skin('- - - - - - - - - - - - - - - - - - -');
				jQuery(".select-1#penyewa_3").select_skin('- - - - - - - - - - - - - - - - - - -');
				jQuery(".select-1#penyewa_4").select_skin('- - - - - - - - - - - - - - - - - - -');
				jQuery(".select-1#penyewa_5").select_skin('- - - - - - - - - - - - - - - - - - -');
				jQuery(".select-1#penyewa_6").select_skin('- - - - - - - - - - - - - - - - - - -');
                jQuery(".select-1#status_lahan").select_skin('- - - - - - - - - - - - - - - - - - -'); 
                
				$( "#form_input" ).dialog({
					autoOpen: false,
					height: 610,
					width: 1000,
					modal: false,
					hide: 'Slide',
					buttons: {
						Save: function() {
							var form_data = {
								id_site: $('#id_site').val(),
								pemilik_menara: $('#pemilik_menara').val(),
								penyewa_1: $('#penyewa_1').val(),
								penyewa_2: $('#penyewa_2').val(),
								penyewa_3: $('#penyewa_3').val(),
								penyewa_4: $('#penyewa_4').val(),
								penyewa_5: $('#penyewa_5').val(),
								penyewa_6: $('#penyewa_6').val(),
								pemilik_lahan: $('#pemilik_lahan').val(),
								alamat_lahan: $('#alamat_lahan').val(),
								telepon_lahan: $('#telepon_lahan').val(),
								fax_lahan: $('#fax_lahan').val(),
								email_lahan: $('#email_lahan').val(),
								status_lahan: $('#status_lahan').val(),
								no_imb: $('#no_imb').val(),
								tahun_imb: $('#tahun_imb').val(),
								no_ho: $('#no_ho').val(),
								tahun_ho: $('#tahun_ho').val(),
								no_skrd: $('#no_skrd').val(),
								tahun_skrd: $('#tahun_skrd').val(),
								pendirian_menara: $('#pendirian_menara').val(),
								ajax:1
							};

						  $.ajax({
							url : controller,
							type : 'POST',
							data : form_data,
							success: function(msg){
							$( this ).dialog( "close" ),
							location.reload();
							}
						  });
						
						}
					
					},
					close: function() {
						$('#id_site').val(''),
						$('#pemilik_menara').val(''),
						$('#penyewa_1').val(''),
						$('#penyewa_2').val(''),
						$('#penyewa_3').val(''),
						$('#penyewa_4').val(''),
						$('#penyewa_5').val(''),
						$('#penyewa_6').val(''),
						$('#pemilik_lahan').val(''),
						$('#alamat_lahan').val(''),
						$('#telepon_lahan').val(''),
						$('#fax_lahan').val(''),
						$('#email_lahan').val(''),
						$('#status_lahan').val(''),
						$('#no_imb').val(''),
						$('#tahun_imb').val(''),
						$('#no_ho').val(''),
						$('#tahun_ho').val(''),
						$('#no_skrd').val(''),
						$('#tahun_skrd').val(''),
						$('#pendirian_menara').val(''),
						location.reload();
					}
				});
				
				$( "#form_input" ).dialog( "open" );
				
				// $('<div>').dialog({
					// modal: true,
					// open: function ()
					// {
						// $(this).load(base_url + 'index.php/document/pop_insert/');
					// },         
					// height: 610,
					// width: 1000,
					// title: 'Dynamically Loaded Page',
					// buttons: {
						// Save: function() {
							// alert($('#id_site').val());
							// alert($('#status_lahan').val());
							// var form_data = {
								// id_site: $('#id_site').val(),
								// pemilik_menara: $('#pemilik_menara').val(),
								// penyewa_1: $('#penyewa_1').val(),
								// penyewa_2: $('#penyewa_2').val(),
								// penyewa_3: $('#penyewa_3').val(),
								// penyewa_4: $('#penyewa_4').val(),
								// penyewa_5: $('#penyewa_5').val(),
								// penyewa_6: $('#penyewa_6').val(),
								// pemilik_lahan: $('#pemilik_lahan').val(),
								// alamat_lahan: $('#alamat_lahan').val(),
								// telepon_lahan: $('#telepon_lahan').val(),
								// fax_lahan: $('#fax_lahan').val(),
								// email_lahan: $('#email_lahan').val(),
								// status_lahan: $('#status_lahan').val(),
								// no_imb: $('#no_imb').val(),
								// tahun_imb: $('#tahun_imb').val(),
								// no_ho: $('#no_ho').val(),
								// tahun_ho: $('#tahun_ho').val(),
								// no_skrd: $('#no_skrd').val(),
								// tahun_skrd: $('#tahun_skrd').val(),
								// pendirian_menara: $('#pendirian_menara').val(),
								// ajax:1
							// };

						  // $.ajax({
							// url : controller,
							// type : 'POST',
							// data : form_data,
							// success: function(msg){
							// $( this ).dialog( "close" ),
							// location.reload();
							// }
						  // });
						
						// }
					
					// },
					// close: function() {
						// $('#id_site').val(''),
						// $('#pemilik_menara').val(''),
						// $('#penyewa_1').val(''),
						// $('#penyewa_2').val(''),
						// $('#penyewa_3').val(''),
						// $('#penyewa_4').val(''),
						// $('#penyewa_5').val(''),
						// $('#penyewa_6').val(''),
						// $('#pemilik_lahan').val(''),
						// $('#alamat_lahan').val(''),
						// $('#telepon_lahan').val(''),
						// $('#fax_lahan').val(''),
						// $('#email_lahan').val(''),
						// $('#status_lahan').val(''),
						// $('#no_imb').val(''),
						// $('#tahun_imb').val(''),
						// $('#no_ho').val(''),
						// $('#tahun_ho').val(''),
						// $('#no_skrd').val(''),
						// $('#tahun_skrd').val(''),
						// $('#pendirian_menara').val(''),
						// location.reload();
					// }
				
				// });
				
    		});
	
	$(".document_edit").live("click",function(){
		controller = base_url + 'index.php/document/update/';
		var id_site = $(this).attr("id_site2");
		var pemilik_menara = $(this).attr("pemilik_menara2");
		var penyewa_1 = $(this).attr("penyewa2_1");
		var penyewa_2 = $(this).attr("penyewa2_2");
		var penyewa_3 = $(this).attr("penyewa2_3");
		var penyewa_4 = $(this).attr("penyewa2_4");
		var penyewa_5 = $(this).attr("penyewa2_5");
		var penyewa_6 = $(this).attr("penyewa2_6");
		var pemilik_lahan = $(this).attr("pemilik_lahan2");
		var alamat_lahan = $(this).attr("alamat_lahan2");
		var telepon_lahan = $(this).attr("telepon_lahan2");
		var email_lahan = $(this).attr("email_lahan2");
		var status_lahan = $(this).attr("status_lahan2");
		var pendirian_menara = $(this).attr("pendirian_menara2");
		var no_imb = $(this).attr("no_imb2");
		var tahun_imb = $(this).attr("tahun_imb2");
		var no_ho = $(this).attr("no_ho2");
		var tahun_ho = $(this).attr("tahun_ho2");
		var no_skrd = $(this).attr("no_skrd2");
		var tahun_skrd = $(this).attr("tahun_skrd2");
		
		if (penyewa_1=='')
		{
			var penyewa_1 = '- - - - - - - - - - - - - - - - - - -';
		}
		if (penyewa_2=='')
		{
			var penyewa_2 = '- - - - - - - - - - - - - - - - - - -';
		}
		if (penyewa_3=='')
		{
			var penyewa_3 = '- - - - - - - - - - - - - - - - - - -';
		}
		if (penyewa_4=='')
		{
			var penyewa_4 = '- - - - - - - - - - - - - - - - - - -';
		}
		if (penyewa_5=='')
		{
			var penyewa_5 = '- - - - - - - - - - - - - - - - - - -';
		}
		if (penyewa_6=='')
		{
			var penyewa_6 = '- - - - - - - - - - - - - - - - - - -';
		}
		
		$('#id_site2').val(id_site);
		$('#pemilik_menara2').val(pemilik_menara);
		$('#penyewa2_1').val(penyewa_1);
		$('#penyewa2_2').val(penyewa_2);
		$('#penyewa2_3').val(penyewa_3);
		$('#penyewa2_4').val(penyewa_4);
		$('#penyewa2_5').val(penyewa_5);
		$('#penyewa2_6').val(penyewa_6);
		$('#pemilik_lahan2').val(pemilik_lahan);
		$('#alamat_lahan2').val(alamat_lahan);
		$('#telepon_lahan2').val(telepon_lahan);
		$('#email_lahan2').val(email_lahan);
		$('#status_lahan2').val(status_lahan);
		$('#pendirian_menara2').val(pendirian_menara);
		$('#no_imb2').val(no_imb);
		$('#tahun_imb2').val(tahun_imb);
		$('#no_ho2').val(no_ho);
		$('#tahun_ho2').val(tahun_ho);
		$('#no_skrd2').val(no_skrd);
		$('#tahun_skrd2').val(tahun_skrd);
		
		jQuery(".select-1#pemilik_menara2").select_skin(pemilik_menara);
		jQuery(".select-1#penyewa2_1").select_skin(penyewa_1);
		jQuery(".select-1#penyewa2_2").select_skin(penyewa_2);
		jQuery(".select-1#penyewa2_3").select_skin(penyewa_3);
		jQuery(".select-1#penyewa2_4").select_skin(penyewa_4);
		jQuery(".select-1#penyewa2_5").select_skin(penyewa_5);
		jQuery(".select-1#penyewa2_6").select_skin(penyewa_6);
		jQuery(".select-1#status_lahan2").select_skin(status_lahan);
		
		$( "#form_detail" ).dialog({
			autoOpen: false,
			height: 610,
			width: 1000,
			modal: false,
			hide: 'Slide',
			buttons: {
				Save: function() {
					var form_data = {
						id_site: $('#id_site2').val(),
						pemilik_menara: $('#pemilik_menara2').val(),
						penyewa_1: $('#penyewa2_1').val(),
						penyewa_2: $('#penyewa2_2').val(),
						penyewa_3: $('#penyewa2_3').val(),
						penyewa_4: $('#penyewa2_4').val(),
						penyewa_5: $('#penyewa2_5').val(),
						penyewa_6: $('#penyewa2_6').val(),
						pemilik_lahan: $('#pemilik_lahan2').val(),
						alamat_lahan: $('#alamat_lahan2').val(),
						telepon_lahan: $('#telepon_lahan2').val(),
						fax_lahan: $('#fax_lahan2').val(),
						email_lahan: $('#email_lahan2').val(),
						status_lahan: $('#status_lahan2').val(),
						no_imb: $('#no_imb2').val(),
						tahun_imb: $('#tahun_imb2').val(),
						no_ho: $('#no_ho2').val(),
						tahun_ho: $('#tahun_ho2').val(),
						no_skrd: $('#no_skrd2').val(),
						tahun_skrd: $('#tahun_skrd2').val(),
						pendirian_menara: $('#pendirian_menara2').val(),
						ajax:1
					};
					
					$('#id_site2').attr("disabled",false);
					$('#pemilik_menara2').attr("disabled",false);
					$('#penyewa2_1').attr("disabled",false);
					$('#penyewa2_2').attr("disabled",false);
					$('#penyewa2_3').attr("disabled",false);
					$('#penyewa2_4').attr("disabled",false);
					$('#penyewa2_5').attr("disabled",false);
					$('#penyewa2_6').attr("disabled",false);
					$('#pemilik_lahan2').attr("disabled",false);
					$('#telepon_lahan2').attr("disabled",false);
					$('#fax_lahan2').attr("disabled",false);
					$('#email_lahan2').attr("disabled",false);
					$('#status_lahan2').attr("disabled",false);
					$('#no_imb2').attr("disabled",false);
					$('#tahun_imb2').attr("disabled",false);
					$('#no_ho2').attr("disabled",false);
					$('#tahun_ho2').attr("disabled",false);
					$('#no_skrd2').attr("disabled",false);
					$('#tahun_skrd2').attr("disabled",false);
					$('#pendirian_menara2').attr("disabled",false);

				  $.ajax({
					url : controller,
					type : 'POST',
					data : form_data,
					success: function(msg){
					$( '#form_input' ).dialog( "close" ),
					location.reload();
					}
				  });
				
			},
				Cancel: function() {
					$('#id_site2').val(''),
					$('#pemilik_menara2').val(''),
					$('#penyewa2_1').val(''),
					$('#penyewa2_2').val(''),
					$('#penyewa2_3').val(''),
					$('#penyewa2_4').val(''),
					$('#penyewa2_5').val(''),
					$('#penyewa2_6').val(''),
					$('#pemilik_lahan2').val(''),
					$('#alamat_lahan2').val(''),
					$('#telepon_lahan2').val(''),
					$('#fax_lahan2').val(''),
					$('#email_lahan2').val(''),
					$('#status_lahan2').val(''),
					$('#no_imb2').val(''),
					$('#tahun_imb2').val(''),
					$('#no_ho2').val(''),
					$('#tahun_ho2').val(''),
					$('#no_skrd2').val(''),
					$('#tahun_skrd2').val(''),
					$('#pendirian_menara2').val(''),
					$( this ).dialog( "close" );
					location.reload();
				}
			},
			close: function() {
				$('#id_site2').val(''),
				$('#pemilik_menara2').val(''),
				$('#penyewa2_1').val(''),
				$('#penyewa2_2').val(''),
				$('#penyewa2_3').val(''),
				$('#penyewa2_4').val(''),
				$('#penyewa2_5').val(''),
				$('#penyewa2_6').val(''),
				$('#pemilik_lahan2').val(''),
				$('#alamat_lahan2').val(''),
				$('#telepon_lahan2').val(''),
				$('#fax_lahan2').val(''),
				$('#email_lahan2').val(''),
				$('#status_lahan2').val(''),
				$('#no_imb2').val(''),
				$('#tahun_imb2').val(''),
				$('#no_ho2').val(''),
				$('#tahun_ho2').val(''),
				$('#no_skrd2').val(''),
				$('#tahun_skrd2').val(''),
				$('#pendirian_menara2').val(''),
				location.reload();
			}
		});
		
		$( "#form_detail" ).dialog( "open" );
		
		return false;
	});
	
	$(".document_del").live("click",function(){
		var element = $(this);
		var del_id = element.attr("id_site2");
		
		$( "#dialog-delete" ).dialog({
			autoOpen: false,
			resizable: false,
			async: false,
			height:180,
			modal: true,
			hide: 'Slide',
			buttons: {
				"Delete": function() {
					var del_id_ = {id_site : del_id};
					$.ajax({
						type: "POST",
						url : base_url + 'index.php/document/delete/',
						data: del_id_,
						success: function(msg){
							$('#show').html(msg);
							$('#dialog-delete' ).dialog( "close" );
							location.reload();
						}
					});
					},
				Cancel: function() {
					$( this ).dialog( "close" );
				}
			}
		});
		
		$( "#dialog-delete" ).dialog( "open" );
		
		return false;
	});
	
	jQuery(".select-1#site").select_skin('- - - - - - - - - - - - - - - - - - - - - - - - -');
	
});

function changepic(img_src, obj, nama) {
	document["img_tag"].src = img_src;
	document["img_tag"].title = nama;
	document.getElementById("img_nama").innerHTML= nama;
	var thumbs = document.getElementsByName("thumb");
	for (var i = 0; i < thumbs.length; i++) {
		var tmp_id = "thumb_" + i;
		document.getElementById(tmp_id).setAttribute("class", "thumb");
	}
	document.getElementById(obj).setAttribute("class", "thumbclick");
	var ori_img = img_src.replace("thumb_", "");
	document.getElementById("detimglink").setAttribute("href", ori_img);
}

$(function() {

	$("input[type='submit']").click(function(){
        var $fileUpload = $("input[type='file']");
        if (parseInt($fileUpload.get(0).files.length)>5){
			alert("Maksimum Jumlah File Upload Sebanyak 5 File");
        }
    });
	
	$('input:file[multiple]').change(function(e){
		document.getElementById("output").innerHTML = "";
        console.log(e.currentTarget.files);
        var numFiles = e.currentTarget.files.length;
            for (i=0;i<numFiles;i++){
                fileSize = parseInt(e.currentTarget.files[i].size, 10)/1024;
                filesize = Math.round(fileSize);
                $('<li />').text(e.currentTarget.files[i].name).appendTo($('#output'));
                $('<span />').addClass('filesize').text('(' + filesize + 'kb)').appendTo($('#output li:last'));
            }
    });

});

