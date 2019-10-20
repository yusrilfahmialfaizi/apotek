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
                            <i class="material-icons">face</i>
                            <span>Data</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="<?php echo base_url("#") ?>"> Data Obat</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url("#") ?>"> Stok Obat</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url("#") ?>"> Data Supplier</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">face</i>
                            <span>Pembelian</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="<?php echo base_url("owner/pembelianobat") ?>"> Pembelian Obat</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url("owner/datapembelian") ?>"> Data Pembelian</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href=""><i class="material-icons">list</i><span>Kasir</span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">record_voice_over</i>
                            <span>Laporan</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="<?php echo base_url("kepsek/data_guru") ?>">Data Penjualan Harian</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url("kepsek/absensi_guru") ?>"></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">important_devices</i>
                            <span>Tata Usaha</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="">Data Tata Usaha</a>
                            </li>
                            <li>
                                <a href="">Absensi Tata Usaha</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">payment</i>
                            <span>Keuangan</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="">SPP</a>
                            </li>
                            <li>
                                <a href="">HR / Gaji Karyawan </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="menu-toggle">
                                    <span>KAS Sekolah</span>
                                </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="javascript:void(0);">
                                            <span>Pendapatan</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <span>Pengeluaran </span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="">Tabungan Siswa</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">collections_bookmark</i>
                            <span>Inventaris</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="">Inventaris Perpustakaan Guru</a>
                            </li>
                            <li>
                                <a href="">Inventaris Perpustakaan Anak</a>
                            </li>
                            <li>
                                <a href="">Inventaris Benda </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
            <?php $this->load->view("partial_apotek/main/foot") ?>
        </aside>
        <!-- #END# Left Sidebar -->