<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div class="main-sidebar sidebar-style-2">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="<?php echo base_url(); ?>dist/index">Outsourcing</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="<?php echo base_url(); ?>Dashboard"></a>
    </div>
    <ul class="sidebar-menu">
      <li class="menu-header">Pengadaan Alih Daya</li>
      <li class=" <?php echo $this->uri->segment(1) == 'Dashboard'  ? 'active' : ''; ?>">
        <a href="<?php echo base_url(); ?>Dashboard/" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
      </li>
      <li class=" <?php echo $this->uri->segment(1) == 'Outsourcing'  ? 'active' : ''; ?>">
        <a href="<?php echo base_url(); ?>Outsourcing/" class="nav-link"><i class="fas fa-file"></i><span>Data Outsotcing</span></a>
      </li>
      <li class=" <?php echo $this->uri->segment(1) == 'Vendor'  ? 'active' : ''; ?>">
        <a href="<?php echo base_url(); ?>Vendor/" class="nav-link"><i class="fas fa-file"></i><span>Data Vendor</span></a>
      </li>

      <li class="dropdown <?php echo $this->uri->segment(2) == 'direktorat' || $this->uri->segment(2) == 'kompartemen' || $this->uri->segment(2) == 'departemen' || $this->uri->segment(2) == 'data_kontrak' || $this->uri->segment(2) == 'Kualifikasi_kerja' || $this->uri->segment(2) == 'kontrak_perjanjian' ? 'active' : ''; ?>">
        <a href="<?php echo base_url(); ?>Master_Data/" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Master Data</span></a>
        <ul class="dropdown-menu">
          <li class="<?php echo $this->uri->segment(2) == 'direktorat' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>direktorat/">Direktorat</a></li>
          <li class="<?php echo $this->uri->segment(2) == 'kompartemen' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>kompartemen">Kompartemen</a></li>
          <li class="<?php echo $this->uri->segment(2) == 'departemen' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>departemen">Departemen</a></li>
          <li class="<?php echo $this->uri->segment(2) == 'data_kontrak' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>data_kontrak">Data Kontrak</a></li>
          <li class="<?php echo $this->uri->segment(2) == 'kualifikasi_kerja' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>kualifikasi_kerja">Kualifikasi Kerja</a></li>
          <li class="<?php echo $this->uri->segment(2) == 'kontrak_perjanjian' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>kontrak_perjanjian">Kontrak Perjanjian</a></li>
        </ul>
      </li>

      <li class=" <?php echo $this->uri->segment(2) == 'Diagram'  ? 'active' : ''; ?>">
        <a href="<?php echo base_url(); ?>Diagram/" class="nav-link"><i class="fas fa-file"></i><span>Diagram</span></a>
      </li>
      <li class="menu-header">Lembur Alih Daya</li>
      <li class="dropdown <?php echo $this->uri->segment(2) == '' || $this->uri->segment(2) == 'index' || $this->uri->segment(2) == 'index_0' ? 'active' : ''; ?>">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Pengajuan Lembur</span></a>
        <ul class="dropdown-menu">
          <li class="<?php echo $this->uri->segment(2) == 'index_0' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>dist/index_0">Panding Lembur</a></li>
          <li class="<?php echo $this->uri->segment(2) == 'index_0' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>dist/index_0">Unapproval Lembur</a></li>
          <li class="<?php echo $this->uri->segment(2) == 'index_0' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>dist/index_0">Approval Lembur</a></li>
        </ul>
      </li>

      <li class=" <?php echo $this->uri->segment(2) == ''  ? 'active' : ''; ?>">
        <a href="#" class="nav-link"><i class="fas fa-file"></i><span>Verifikasi Lembur</span></a>
      </li>
      <li class=" <?php echo $this->uri->segment(2) == ''  ? 'active' : ''; ?>">
        <a href="#" class="nav-link"><i class="fas fa-file"></i><span>Cetak Surat Perintah</span></a>
      </li>
    </ul>


  </aside>
</div>