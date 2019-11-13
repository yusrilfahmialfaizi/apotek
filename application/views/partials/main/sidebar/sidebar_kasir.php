            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Menu</h3>
                <ul class="nav side-menu">
                  <li><a href="<?php echo base_url("dashboard") ?>"><i class="fa fa-home"></i> Home</a></li>
                  <li><a><i class="fa fa-book"></i> Data <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li>
                        <a href="<?php echo base_url("kasir/Data_obat") ?>"> Data Obat</a>
                      </li>
                      <li>
                        <a href="<?php echo base_url("kasir/Stock_obat") ?>"> Stok Obat</a>
                      </li>
                      <li>
                        <a href="<?php echo base_url("kasir/Data_supplier") ?>"> Data Supplier</a>
                      </li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-truck"></i> Pembelian <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li>
                        <a href="<?php echo base_url("kasir/Pembelian_obat") ?>"> Pembelian Obat</a>
                      </li>
                      <li>
                        <a href="<?php echo base_url("kasir/Data_pembelian") ?>"> Data Pembelian</a>
                      </li>
                    </ul>
                  </li>
                  <li><a href="<?php echo base_url("kasir/Opname_obat") ?>"><i class="fa fa-edit"></i> Stok Opname</a></li>
                  <li><a href="<?php echo base_url("dashboard") ?>"><i class="fa fa-shopping-cart"></i> Kasir</a></li>
                  <li><a><i class="fa fa-archive"></i> Laporan <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li>
                        <a href="<?php echo base_url("kasir/datapenjualanharian") ?>">Data Penjualan Harian</a>
                      </li>
                      <li>
                        <a href="<?php echo base_url("kasir/LaporanBulanan") ?>">Data Penjualan Bulanan</a>
                      </li>
                      <li>
                        <a href="<?php echo base_url("kasir/absensi_guru") ?>">Grafik Penjualan </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->