<aside id="leftsidebar" class="sidebar">
    <!-- User Info -->
    <div class="user-info">
        <div class="image">
            <img src="<?php echo base_url("assets_apotek/images/user.png") ?>" width="48" height="48" alt="User" />
        </div>
        <div class="info-container">
            <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">John Doe</div>
            <div class="email">john.doe@example.com</div>
            <div class="btn-group user-helper-dropdown">
                <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                <ul class="dropdown-menu pull-right">
                    <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                    <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                    <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="javascript:void(0);"><i class="material-icons">input</i>Sign Out</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- #User Info -->
    <!-- Menu -->
    <div class="menu">
        <ul class="list">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active">
                <a href="<?php echo base_url("kasir/dashboard") ?>">
                    <i class="material-icons">home</i>
                    <span>Home</span>
                </a>
            </li>
            <li>
                <a href="javascript:void(0);" class="menu-toggle">
                    <i class="material-icons">assignment</i>
                    <span>Data</span>
                </a>
                <ul class="ml-menu">
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
            <li>
                <a href="javascript:void(0);" class="menu-toggle">
                    <i class="material-icons">shopping_cart</i>
                    <span>Pembelian</span>
                </a>
                <ul class="ml-menu">
                    <li>
                        <a href="<?php echo base_url("kasir/Pembelian_obat") ?>"> Pembelian Obat</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url("kasir/Data_pembelian") ?>"> Data Pembelian</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="<?php echo base_url("kasir/Opname_obat") ?>"><i class="material-icons">local_hospital</i><span>Opname Obat</span></a>
            </li>
            <li>
                <a href="<?php echo base_url("kasir/Penjualan") ?>"><i class="material-icons">attach_money</i><span>Kasir</span></a>
            </li>
            <li>
                <a href="javascript:void(0);" class="menu-toggle">
                    <i class="material-icons">content_paste</i>
                    <span>Laporan</span>
                </a>
                <ul class="ml-menu">
                    <li>
                        <a href="<?php echo base_url("kasir/datapenjualanharian") ?>">Data Penjualan Harian</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url("kasir/laporanbulanan") ?>">Data Penjualan Bulanan</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url("kasir/grafikperbulan") ?>">Grafik Penjualan </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- #Menu -->
    <?php $this->load->view("partial_apotek/main/foot") ?>
</aside>
<!-- #END# Left Sidebar -->