<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="<?php echo base_url(); ?>dist/index">Outsourcing</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="<?php echo base_url(); ?>Dashboard">St</a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Pengadaan Alih Daya</li>
            <li class=" <?php echo $this->uri->segment(1) == 'Dashboard'  ? 'active' : ''; ?>">
              <a href="<?php echo base_url(); ?>Dashboard/" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            <li class=" <?php echo $this->uri->segment(1) == 'Outsourcing'  ? 'active' : ''; ?>">
              <a href="<?php echo base_url(); ?>Outsourcing/" class="nav-link"><i class="fas fa-file"></i><span>Data Outsotcing</span></a>
            </li>
            <li class=" <?php echo $this->uri->segment(2) == ''  ? 'active' : ''; ?>">
              <a href="#" class="nav-link"><i class="fas fa-file"></i><span>Data Vendor</span></a>
            </li>
            <li class="dropdown <?php echo $this->uri->segment(2) == '' || $this->uri->segment(2) == 'index' || $this->uri->segment(2) == 'index_0' ? 'active' : ''; ?>">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Master Data</span></a>
              <ul class="dropdown-menu">
                <li class="<?php echo $this->uri->segment(2) == 'index_0' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>dist/index_0">Direktorat</a></li>
                <li class="<?php echo $this->uri->segment(2) == 'index_0' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>dist/index_0">Kompartemen</a></li>
                <li class="<?php echo $this->uri->segment(2) == 'index_0' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>dist/index_0">Departemen</a></li>
              </ul>
            </li>
            <li class=" <?php echo $this->uri->segment(2) == ''  ? 'active' : ''; ?>">
              <a href="#" class="nav-link"><i class="fas fa-file"></i><span>Data Kontrak</span></a>
            </li>
            <li class=" <?php echo $this->uri->segment(2) == ''  ? 'active' : ''; ?>">
              <a href="#" class="nav-link"><i class="fas fa-file"></i><span>Kualifikasi kerja</span></a>
            </li>
            <li class=" <?php echo $this->uri->segment(2) == ''  ? 'active' : ''; ?>">
              <a href="#" class="nav-link"><i class="fas fa-file"></i><span>Diagram</span></a>
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
