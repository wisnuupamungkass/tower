<ul class="sidebar-menu">                
  <li class="active">
      <a class="" href="<?php echo base_url('index.php/Menara') ?>">
          <i class="icon_house_alt"></i>
          <span>Dashboard</span>
      </a>
  </li>
	<li class="sub-menu">
    <a href="#" class="">
      <i class="icon_document_alt"></i>
        <span>Kelola Menara</span>
        <span class="menu-arrow arrow_carrot-right"></span>
    </a>
      <ul class="sub">
          <li><?php echo anchor('Provider/daftar_provider', 'Data Provider')?></li>
          <li><?php echo anchor('Penyewa/daftar_penyewa', 'Data Penyewa')?></li>
          <li><?php echo anchor('Tower/daftar_tower', 'Data Tower')?></li>
          <li><?php echo anchor('Site/daftar_site', 'Detail Site')?></li>
      </ul>
  </li>
  <li>                     
      <a class="" href="<?php echo base_url('index.php/Grafik/view') ?>">
          <i class="icon_piechart"></i>
          <span>Statistik Menara</span>
      </a>                      
  </li>                        
  <li class="sub-menu">
      <a href="#" class="">
          <i class="icon_table"></i>
          <span>Tabel Wilayah</span>
          <span class="menu-arrow arrow_carrot-right"></span>
      </a>
      <ul class="sub">
          <li><?php echo anchor('Kecamatan/daftar_kecamatan', 'Data Kecamatan')?></li>
          <li><?php echo anchor('Kelurahan/daftar_kelurahan', 'Data Kelurahan')?></li>
      </ul>
  </li> 
  <li class="sub-menu">
      <a href="#" class="">
          <i class="icon_documents_alt"></i>
          <span>Kelola Admin</span>
          <span class="menu-arrow arrow_carrot-right"></span>
      </a>
      <ul class="sub">                          
          <li><?php echo anchor('Menara/daftar_admin', 'Data Admin')?></li>
      </ul>
  </li>
</ul>