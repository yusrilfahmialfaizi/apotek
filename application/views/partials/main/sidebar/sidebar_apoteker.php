<!-- sidebar menu -->
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
  <div class="menu_section">
    <h3>Menu</h3>
    <ul class="nav side-menu">
      <li><a href="<?php echo base_url("apoteker/dashboard") ?>"><i class="fa fa-home"></i> Home</a></li>
      <li><a><i class="fa fa-archive"></i> Laporan <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li>
            <a href="<?php echo base_url("apoteker/Laporan_harian") ?>">Data Penjualan Harian</a>
          </li>
          <li>
            <a href="<?php echo base_url("apoteker/Laporan_bulanan") ?>">Data Penjualan Bulanan</a>
          </li>
          <li>
            <a href="<?php echo base_url("apoteker/Grafikperbulan") ?>">Grafik Penjualan </a>
          </li>
        </ul>
      </li>
    </ul>
  </div>
</div>
<!-- /sidebar menu -->