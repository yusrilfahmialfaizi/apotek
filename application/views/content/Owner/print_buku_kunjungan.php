    <body class="nav-md">
        <div class="row no-print">
            <div class="col-xs-12">
                <!-- <button class="btn btn-default" onclick="window.print();"><i class="fa fa-print"></i> Print</button> -->
            </div>
        </div>
        <table border="1">
            <tr>
                <td style="width:40%" rowspan="5"><img src="<?php echo base_url("assets\images\PPNI.png") ?>" alt="Logo PPNI"></td>
                <td colspan="2">PRAKTIK MANDIRI</td>
            </tr>
            <tr>
                <td colspan="2">SIPP:440/09/414/2015</td>
            </tr>
            <tr>
                <td colspan="3"></td>
                <td style="text-align:center">ACHMAD SYA'ID</td>
            </tr>
            <tr>
                <td colspan="3"></td>
                <td>Jl. KH. Abdul Aziz, Dsn Kauman Tempurejo</td>
            </tr>
            <tr>
                <td colspan="3"></td>
                <td>No. Telp. 081216252415</td>
            </tr>
        </table>
        <!-- <div class="row">
            <div class="form-group">
                <div class="col-md-6">
                    <div class="col-md-4"></div>
                    <div class="col-md-8">
                        <p>PRAKTIK MANDIRI</p><br>
                        <p>SIPP:440/09/414/2015</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <p>ACHMAD SYA'ID</p><br>
                    <p>Jl. KH. Abdul Aziz, Dsn Kauman Tempurejo</p><br>
                    <p>No. Telp. 081216252415</p>
                </div>
            </div>
        </div> -->
        <!-- <center>
            <h3>Bengkel Online MAN 1 Jember</h3>
            <br>Jl.Imam Bonjol No.50 Kaliwates Kab. Jember</br>
            No. Telp +62858 3915 2974 Email: bengkelonline1@gmail.com
        </center> -->
        <hr style="color:black">
        <br>
        <table border="1" cellpadding="10" width="100%">
            <thead>
                <tr>
                    <th style="text-align :center; padding : 5px">No.</th>
                    <th style="text-align :center; padding : 5px">ID Kunjungan</th>
                    <th style="text-align :center; padding : 5px">No. RM</th>
                    <th style="text-align :center; padding : 5px">Nama Pasien</th>
                    <th style="text-align :center; padding : 5px">Tanggal Kunjungan</th>
                    <th style="text-align :center; padding : 5px">Dignosa Keperawatan</th>
                    <th style="text-align :center; padding : 5px">Intervensi</th>
                    <th style="text-align :center; padding : 5px">Tarif</th>
                </tr>
            </thead>
            <?php $no = 1;
            foreach ($data as $key) { ?>
                <tbody>
                    <tr>
                        <td style="text-align :center; padding : 5px"><?php echo $no++ ?></td>
                        <td style="text-align :center; padding : 5px"><?php echo $key->id_kunjungan ?></td>
                        <td style="text-align :center; padding : 5px"><?php echo $key->no_rm ?></td>
                        <td style="text-align :center; padding : 5px"><?php echo $key->nama ?></td>
                        <td style="text-align :center; padding : 5px"><?php echo $key->tgl_kunjungan ?></td>
                        <td style="text-align :center; padding : 5px"><?php echo $key->diagnosa_keperawatan ?></td>
                        <td style="text-align :center; padding : 5px"><?php echo $key->intervensi ?></td>
                        <td style="text-align :center; padding : 5px"><?php echo $key->tarif ?></td>
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