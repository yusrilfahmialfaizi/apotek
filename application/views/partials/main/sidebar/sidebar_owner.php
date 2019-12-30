            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Menu</h3>
                <ul class="nav side-menu">
                  <li><a href="<?php echo base_url("owner/dashboard") ?>"><i class="fa fa-home"></i> Home</a></li>
                  <li><a><i class="fa fa-book"></i> Data <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url("owner/datauser") ?>">User</a></li>
                      <li><a href="<?php echo base_url("owner/datapasien") ?>"> Pasien</a></li>
                      <li><a> Obat<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                          <li class="sub_menu">
                            <a href="<?php echo base_url("owner/dataobatpraktik") ?>"> Data Obat</a>
                          </li>
                          <li>
                            <a href="<?php echo base_url("owner/stokobat") ?>"> Stok</a>
                          </li>
                          
                        </ul>
                      </li>
                      <li><a> Pembelian <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                          <li class="sub_menu">
                            <a href="<?php echo base_url("owner/pembelianobat") ?>"> Pembelian Obat</a>
                          </li>
                          <li>
                            <a href="<?php echo base_url("owner/datapembelian") ?>"> Data Pembelian</a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-user-md"></i> Kunjungan <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url("owner/kunjungan") ?>">Kunjungan Pasien</a></li>
                      <li><a href="<?php echo base_url("owner/datakunjungan") ?>">Buku Kunjungan</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->