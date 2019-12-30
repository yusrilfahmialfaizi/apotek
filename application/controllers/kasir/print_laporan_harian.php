    <body class="nav-md">
        <div class="row no-print">
            <div class="col-xs-12">
                <!-- <button class="btn btn-default" onclick="window.print();"><i class="fa fa-print"></i> Print</button> -->
            </div>
        </div>
        <table>
            <tr>
                <td style="width:20%; padding:10px" rowspan=" 5"><img src="<?php echo base_url("assets\images\ppni.png") ?>" alt="Logo PPNI"></td>
                <td colspan="2">PRAKTIK MANDIRI</td>
            </tr>
            <tr>
                <td colspan="2">SIPP:440/09/414/2015</td>
            </tr>
            <tr>
                <td colspan="3"></td>
                <td style="text-align:justify">ACHMAD SYA'ID</td>
            </tr>
            <tr>
                <td colspan="3"></td>
                <td>Jl. KH. Abdul Aziz, Dsn Kauman <br>Tempurejo - Jember</td>
            </tr>
            <tr>
                <td colspan="3"></td>
                <td>No. Telp. 081216252415</td>
            </tr>
        </table>
        <hr style="color:black" />
        <br />
        <table border="1" cellpadding="10" width="100%">
            <thead>
                <tr>
                    <th style="text-align :center; padding : 5px">No.</th>
                    <th style="text-align :center; padding : 5px">ID Penjualan</th>
                    <th style="text-align :center; padding : 5px">Nama User</th>
                    <th style="text-align :center; padding : 5px">Jabatan</th>
                    <th style="text-align :center; padding : 5px">Tanggal</th>
                    <th style="text-align :center; padding : 5px">Bayar</th>
                    <th style="text-align :center; padding : 5px">Kembalian</th>
                </tr>
            </thead>
            <?php $no = 1;
            foreach ($data as $key) { ?>
                <tbody>
                    <tr>
                        <td style="text-align :center; padding : 5px"><?php echo $no++ ?></td>
                        <td style="text-align :center; padding : 5px"><?php echo $key->id_penjualan ?></td>
                        <td style="text-align :center; padding : 5px"><?php echo $key->nama_user ?></td>
                        <td style="text-align :center; padding : 5px"><?php echo $key->jabatan ?></td>
                        <td style="text-align :center; padding : 5px"><?php echo $key->tanggal ?></td>
                        <td style="text-align :center; padding : 5px"><?php echo $key->bayar ?></td>
                        <td style="text-align :center; padding : 5px"><?php echo $key->kembalian ?></td>
                    </tr>
                </tbody>
            <?php } ?>
        </table>
        <!-- <div class="container body">
      	<div class="main_container">
	      	<div class="col-md-3 left_col">
	            <div class="left_col scroll-view">
	          	<?php //$this->load->view("partials/main/nav_title")
                    ?>
	          	<div class="clearfix"></div>
	          	<?php //$this->load->view("partials/main/profile_menu")
                    ?>
	          	<br />
	          	<?php //$this->load->view("partials/main/sidebar/sidebar_owner")
                    ?>
	          	<?php //$this->load->view("partials/main/footer_buttons")
                    ?>
	            </div>
	        </div>
	        <?php //$this->load->view("partials/main/navigation")
            ?>
        </div>
    </div> -->
        <?php $this->load->view("partials/main/js/js_print") ?>
        <script>
            window.load = print_d();

            function print_d() {
                window.print();
            }
        </script>