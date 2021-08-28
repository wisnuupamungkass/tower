<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Admin Template Dishub Sukoharjo">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
	<!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>DINAS PERHUBUNGAN SUKOHARJO </br><hr></title>

    <!-- Bootstrap CSS -->
	<?php echo link_tag('dist/css/bootstrap.min.css'); ?>
    
	<!-- bootstrap theme -->
  <?php echo link_tag('dist/css/bootstrap-theme.css'); ?>
    
	<!----------------------------------------------------------------------------------------------->
	
	<!-- Bootstrap -->
    <?php echo link_tag('vendors/bootstrap/dist/css/bootstrap.min.css'); ?>
	
	<!-- Datatables -->
    <?php echo link_tag('vendors/datatables.net-bs/css/dataTables.bootstrap.min.css'); ?>
    <?php echo link_tag('vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css'); ?>
    <?php echo link_tag('vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css'); ?>
    <?php echo link_tag('vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css'); ?>
    <?php echo link_tag('vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css'); ?>
	
    <?php echo link_tag('build/css/custom.min.css'); ?>
	<!-- Custom Theme Style -->
	
	<!------------------------------------------------------------------------------------------------>
	
	<!-- font icon -->
	<?php echo link_tag('dist/css/elegant-icons-style.css'); ?>
	<?php echo link_tag('dist/css/font-awesome.min.css'); ?>
	
	<?php
	/*
	<!-- full calendar css-->
	<?php echo link_tag('assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css'); ?>
	<?php echo link_tag('assets/fullcalendar/fullcalendar/fullcalendar.css'); ?>
	
	<!-- owl carousel -->
	<?php echo link_tag('dist/css/jquery-jvectormap-1.2.2.css') ?>
	
	<!-- Custom styles -->
	<?php echo link_tag('dist/css/fullcalendar.css'); ?>
	<?php echo link_tag('dist/css/xcharts.min.css'); ?>	
	<?php echo link_tag('dist/css/widgets.css'); ?>
	*/
	?>
	
    <?php echo link_tag('dist/css/style.css'); ?>
    <?php echo link_tag('dist/css/style-responsive.css'); ?>
	<?php echo link_tag('dist/css/jquery-ui-1.10.4.min.css'); ?>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
	
	<!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->
  </head>

  <body>
  <!-- container section start -->
  <section id="container">

      <header class="header dark-heading-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
            </div>

            <!--logo start-->
            <?php
				echo $_header;
			?>
            <!--logo end-->

            <div class="nav search-row" id="top_menu">
                <!--  search form start -->
                <ul class="nav top-menu">                    
                    <li>
                        <form class="navbar-form">
                            <input class="form-control" placeholder="Search" type="text">
                        </form>
                    </li>                    
                </ul>
                <!--  search form end -->                
            </div>

            <div class="top-nav notification-row">                
                <!-- notification dropdown start-->
                <?php
					echo $_menu;
				?>
                <!-- notification dropdown end-->
            </div>
      </header>      
      <!--header end-->

      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <?php
				echo $_sidebar;
			  ?>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">            
              <!--overview start-->
			<?php
				echo $_content;
			?>			
				<div class="widget-foot">
                    <!-- Footer goes here -->
                </div>
              <!-- project team & activity end -->
          </section>
      </section>
      <!--main content end-->
  </section>
  <!-- container section start -->

    <!-- javascripts -->
    <script src="<?php echo base_url(); ?>dist/js/jquery.js"></script>
	<script src="<?php echo base_url(); ?>dist/js/jquery-ui-1.10.4.min.js"></script>
    <script src="<?php echo base_url(); ?>dist/js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>dist/js/jquery-ui-1.9.2.custom.min.js"></script>
    
	<!-- bootstrap -->
    <script src="<?php echo base_url(); ?>dist/js/bootstrap.min.js"></script>
    
	<!-- nice scroll -->
    <script src="<?php echo base_url(); ?>dist/js/jquery.scrollTo.min.js"></script>
    <script src="<?php echo base_url(); ?>dist/js/jquery.nicescroll.js" type="text/javascript"></script>
    
	<!-- custom form validation script for this page-->
    <script src="<?php echo base_url(); ?>dist/js/form-validation-script.js"></script>
    
	<!--custome script for all page-->
    <script src="<?php echo base_url(); ?>dist/js/scripts.js"></script>
	
	<!--------------------------------------------------------------------------------------------------->
	
    <!-- Bootstrap -->
    <script src="<?php echo base_url(); ?>vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Datatables -->
    <script src="<?php echo base_url(); ?>vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url(); ?>vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="<?php echo base_url(); ?>vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="<?php echo base_url(); ?>vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="<?php echo base_url(); ?>vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="<?php echo base_url(); ?>vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="<?php echo base_url(); ?>vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo base_url(); ?>vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="<?php echo base_url(); ?>vendors/datatables.net-scroller/js/datatables.scroller.min.js"></script>
    <script src="<?php echo base_url(); ?>vendors/jszip/dist/jszip.min.js"></script>
    <script src="<?php echo base_url(); ?>vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="<?php echo base_url(); ?>vendors/pdfmake/build/vfs_fonts.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url(); ?>build/js/custom.min.js"></script>
	
	<!-- Fusion Charts -->
	<script src="<?php echo base_url(); ?>dist/js/FusionCharts.js"></script>

    <!-- Datatables -->
    <script>
      $(document).ready(function() {
        var handleDataTableButtons = function() {
          if ($("#datatable-buttons").length) {
            $("#datatable-buttons").DataTable({
              dom: "Bfrtip",
              buttons: [
                {
                  extend: "copy",
                  className: "btn-default"
                },
                {
                  extend: "csv",
                  className: "btn-default"
                },
                {
                  extend: "excel",
                  className: "btn-default"
                },
                {
                  extend: "pdfHtml5",
                  className: "btn-default"
                },
                {
                  extend: "print",
                  className: "btn-default"
                },
              ],
              responsive: true
            });
          }
        };

        TableManageButtons = function() {
          "use strict";
          return {
            init: function() {
              handleDataTableButtons();
            }
          };
        }();

        $('#datatable').dataTable();

        $('#datatable-keytable').DataTable({
          keys: true
        });

        $('#datatable-responsive').DataTable();

        $('#datatable-scroller').DataTable({
          ajax: "js/datatables/json/scroller-demo.json",
          deferRender: true,
          scrollY: 380,
          scrollCollapse: true,
          scroller: true
        });

        $('#datatable-fixed-header').DataTable({
          fixedHeader: true
        });

        var $datatable = $('#datatable-checkbox');

        $datatable.dataTable({
          'order': [[ 1, 'asc' ]],
          'columnDefs': [
            { orderable: false, targets: [0] }
          ]
        });
        $datatable.on('draw.dt', function() {
          $('input').iCheck({
            checkboxClass: 'icheckbox_flat-green'
          });
        });

        TableManageButtons.init();
      });
    </script>
    <!-- /Datatables -->
	
	
	<?php
	/*
	<!-- charts scripts -->
    <script src="<?php echo base_url(); ?>assets/jquery-knob/js/jquery.knob.js"></script>
    <script src="<?php echo base_url(); ?>dist/js/jquery.sparkline.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="<?php echo base_url(); ?>dist/js/owl.carousel.js" ></script>
    
	<!-- jQuery full calendar -->
    <<script src="<?php echo base_url(); ?>dist/js/fullcalendar.min.js"></script> <!-- Full Google Calendar - Calendar -->
	<script src="<?php echo base_url(); ?>assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
	
	<!--script for this page only-->
    <script src="<?php echo base_url(); ?>dist/js/calendar-custom.js"></script>
	<script src="<?php echo base_url(); ?>dist/js/jquery.rateit.min.js"></script>

	<!-- custom select -->
    <script src="<?php echo base_url(); ?>dist/js/jquery.customSelect.min.js" ></script>
	<script src="<?php echo base_url(); ?>assets/chart-master/Chart.js"></script>
	
	<!-- custom script for this page-->
    <script src="<?php echo base_url(); ?>dist/js/sparkline-chart.js"></script>
    <script src="<?php echo base_url(); ?>dist/js/easy-pie-chart.js"></script>
	<script src="<?php echo base_url(); ?>dist/js/jquery-jvectormap-1.2.2.min.js"></script>
	<script src="<?php echo base_url(); ?>dist/js/jquery-jvectormap-world-mill-en.js"></script>
	<script src="<?php echo base_url(); ?>dist/js/xcharts.min.js"></script>
	<script src="<?php echo base_url(); ?>dist/js/jquery.autosize.min.js"></script>
	<script src="<?php echo base_url(); ?>dist/js/jquery.placeholder.min.js"></script>
	<script src="<?php echo base_url(); ?>dist/js/gdp-data.js"></script>	
	<script src="<?php echo base_url(); ?>dist/js/morris.min.js"></script>
	<script src="<?php echo base_url(); ?>dist/js/sparklines.js"></script>	
	<script src="<?php echo base_url(); ?>dist/js/charts.js"></script>
	<script src="<?php echo base_url(); ?>dist/js/jquery.slimscroll.min.js"></script>
	*/
	?>
	
	<script>
	
	/*
      //knob
      $(function() {
        $(".knob").knob({
          'draw' : function () { 
            $(this.i).val(this.cv + '%')
          }
        })
      });
	
      //carousel
      $(document).ready(function() {
          $("#owl-slider").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true

          });
      });
	
      //custom select box
      $(function(){
          $('select.styled').customSelect();
      });
	  
	/* ---------- Map ---------- */
	/*
	$(function(){
	  $('#map').vectorMap({
	    map: 'world_mill_en',
	    series: {
	      regions: [{
	        values: gdpData,
	        scale: ['#000', '#000'],
	        normalizeFunction: 'polynomial'
	      }]
	    },
		backgroundColor: '#eef3f7',
	    onLabelShow: function(e, el, code){
	      el.html(el.html()+' (GDP - '+gdpData[code]+')');
	    }
	  });
	});
	*/
  </script>
  </body>
</html>
