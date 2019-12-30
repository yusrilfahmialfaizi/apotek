      <!-- page content -->
      <div class="right_col" role="main">
        <!-- top tiles -->
        <div class="row tile_count">
          <div class="col-md-4 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-user"></i> Jumlah User</span>
            <?php foreach ($jumlah_user as $key) : ?>
              <div class="count"><?php echo number_format($key->jumlah) ?></div>
            <?php endforeach ?>
            <!-- <span class="count_bottom"><i class="green">4% </i> <?php echo $jumlah_user ?></span> -->
          </div>
          <div class="col-md-4 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-money"></i> Pendapatan Hari ini</span>
            <?php foreach ($pendapatan_harian as $key) : ?>
              <div class="count">Rp. <?php echo number_format($key->total_harga) ?></div>
            <?php endforeach ?>
            <!-- <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> From last Week</span> -->
          </div>
          <div class="col-md-4 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-money"></i> Pendapatan Bulan ini</span>
            <?php foreach ($pendapatan_bulanan as $key) : ?>
              <div class="count">Rp. <?php echo number_format($key->total_harga) ?></div>
            <?php endforeach ?>
            <!-- <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span> -->
          </div>
        </div>
        <div class="row tile_count">
          <div class="col-md-4 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-money"></i> Pendapatan Tahun Ini</span>
            <?php foreach ($pendapatan_tahunan as $key) : ?>
              <div class="count">Rp. <?php echo number_format($key->total_harga) ?></div>
            <?php endforeach ?>
            <!-- <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> From last Week</span> -->
          </div>
          <div class="col-md-4 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-credit-card"></i> Transaksi Hari ini</span>
            <?php foreach ($transaksi_harian as $key) : ?>
              <div class="count"><?php echo number_format($key->jumlah) ?></div>
            <?php endforeach ?>
            <!-- <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span> -->
          </div>
          <div class="col-md-4 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-credit-card"></i> Total Transaksi</span>
            <?php foreach ($total_transaksi as $key) : ?>
              <div class="count"><?php echo number_format($key->jumlah) ?></div>
            <?php endforeach ?>
            <!-- <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span> -->
          </div>
        </div>
        <br><br><br><br><br><br><br><br><br><br><br><br><br>
        <!-- /top tiles -->
        <div class="row">
          <marquee scrollamount="10" bgcolor="#D9DEE4">
            <h1>
              <img src="<?php echo base_url("assets\images\LogoPPNI.png") ?>" style="height: 30px; width: 30px" alt="Logo PPNI"> Selamat Datang Di Sistem Informasi <b>Klinik dan Apotek Sa'id Hasan Farma </b>
              <img src="<?php echo base_url("assets\images\LogoPPNI.png") ?>" style="height: 30px; width: 30px" alt="Logo PPNI"> Selamat Datang Di Sistem Informasi <b>Klinik dan Apotek Sa'id Hasan Farma </b>
              <img src="<?php echo base_url("assets\images\LogoPPNI.png") ?>" style="height: 30px; width: 30px" alt="Logo PPNI"> Selamat Datang Di Sistem Informasi <b>Klinik dan Apotek Sa'id Hasan Farma </b>
              <img src="<?php echo base_url("assets\images\LogoPPNI.png") ?>" style="height: 30px; width: 30px" alt="Logo PPNI"> Selamat Datang Di Sistem Informasi <b>Klinik dan Apotek Sa'id Hasan Farma </b>
              <img src="<?php echo base_url("assets\images\LogoPPNI.png") ?>" style="height: 30px; width: 30px" alt="Logo PPNI"> Selamat Datang Di Sistem Informasi <b>Klinik dan Apotek Sa'id Hasan Farma </b>
              <img src="<?php echo base_url("assets\images\LogoPPNI.png") ?>" style="height: 30px; width: 30px" alt="Logo PPNI"> Selamat Datang Di Sistem Informasi <b>Klinik dan Apotek Sa'id Hasan Farma </b>
              <img src="<?php echo base_url("assets\images\LogoPPNI.png") ?>" style="height: 30px; width: 30px" alt="Logo PPNI">
            </h1>
          </marquee>
        </div>

        <div class="row">
        </div>
        <div class="row">
          <div class="col-md-8 col-sm-8 col-xs-12">
            <div class="row">
            </div>
            <div class="row">
            </div>
          </div>
        </div>
      </div>
      <!-- /page content -->
      <?php $this->load->view("partials/main/foot") ?>
    </div>
  </div>
  <?php $this->load->view("partials/main/js/js") ?>