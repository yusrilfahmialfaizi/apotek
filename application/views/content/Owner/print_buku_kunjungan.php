    <body class="nav-md">
        <div class="row no-print">
            <div class="col-xs-12">
                <!-- <button class="btn btn-default" onclick="window.print();"><i class="fa fa-print"></i> Print</button> -->
            </div>
        </div>
        <center><h3>Bengkel Online MAN 1 Jember</h3>
        <br>Jl.Imam Bonjol No.50 Kaliwates Kab. Jember</br>
        No. Telp +62858 3915 2974 Email: bengkelonline1@gmail.com</center>
        <hr>
        <br>
        <table class="table table-hovered" border="1" cellpadding="10" width="100%">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>ID Kunjungan</th>
                    <th>No. RM</th>
                    <th>Nama Pasien</th>
                    <th>Tanggal Kunjungan</th>
                    <th>Dignosa Keperawatan</th>
                    <th>Intervensi</th>
                    <th>Tarif</th>
                </tr>
            </thead>
            <?php $no = 1; foreach ($data as $key) { ?>
            <tbody>
                <tr>
                    <td><?php echo $no++?></td>
                    <td><?php echo $key->id_kunjungan?></td>
                    <td><?php echo $key->no_rm?></td>
                    <td><?php echo $key->nama?></td>
                    <td><?php echo $key->tgl_kunjungan?></td>
                    <td><?php echo $key->diagnosa_keperawatan?></td>
                    <td><?php echo $key->intervensi?></td>
                    <td><?php echo $key->tarif?></td>
                </tr>
            </tbody>
            <?php } ?>
        </table>
    <!-- <div class="container body">
      	<div class="main_container">
	      	<div class="col-md-3 left_col">
	            <div class="left_col scroll-view">
	          	<?php //$this->load->view("partials/main/nav_title") ?>
	          	<div class="clearfix"></div>
	          	<?php //$this->load->view("partials/main/profile_menu") ?>
	          	<br />
	          	<?php //$this->load->view("partials/main/sidebar/sidebar_owner") ?>
	          	<?php //$this->load->view("partials/main/footer_buttons") ?>
	            </div>
	        </div>
	        <?php //$this->load->view("partials/main/navigation") ?>
        </div>
    </div> -->
    <?php $this->load->view("partials/main/js/js_print") ?>
    <script>
		window.load = print_d();
		function print_d(){
			window.print();
		}
	</script>
	      