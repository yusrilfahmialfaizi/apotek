<!-- page content -->
<div class="right_col" role="main">
  <!-- top tiles -->
  <div class="row tile_count">
    <!-- /top tiles -->
    <div class="row">
      <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Grafik Penjualan<small>Per Bulan</small></h2>

            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <form action="<?php echo base_url("apoteker/grafikperbulan") ?>" method="post">
              <div class="col-md-offset-8">
                <div class="form-group">
                  <label for="">Tahun</label>
                  <div class="input-group">
                    <select class="form-control" id="tahun" name="tahun" required="required">
                      <?php foreach ($year as $key) : ?>
                        <option value="<?php echo $key->year ?>"><?php echo $key->year ?></option>
                      <?php endforeach; ?>
                    </select>
                    <span class="input-group-btn">
                      <button type="submit" class="btn btn-primary">Filter</button>
                    </span>
                  </div>
                </div>
              </div>
            </form>
            <canvas id="grafikperbulan"></canvas>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Grafik Penjualan<small>Per Tahun</small></h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <canvas id="grafikpertahun"></canvas>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Grafik Penjualan<small>Barang</small></h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <form action="<?php echo base_url("apoteker/grafikperbulan") ?>" method="post">
              <div class="col-md-offset-2">
                <div class="form-group">
                  <label for="">Tahun</label>
                  <!-- <div class="input-group"> -->
                  <select class="form-control" id="tahun_barang" name="tahun_barang" required="required">
                    <?php foreach ($year as $key) : ?>
                      <option value="<?php echo $key->year ?>"><?php echo $key->year ?></option>
                    <?php endforeach; ?>
                  </select>
                  <!-- </div> -->
                  <!-- </div> -->
                  <!-- </div> -->
                  <!-- <div class="col-md-4"> -->
                  <!-- <div class="form-group"> -->
                  <label for="">Nama Obat dan Pabrik</label>
                  <div class="input-group">
                    <select class="form-control" id="id_obat" name="id_obat" required="required">
                      <?php foreach ($obat as $key) : ?>
                        <option value="<?php echo $key->id_obat ?>"><?php echo $key->nama_paten ?> | <?php echo $key->nama_pabrik ?></option>
                      <?php endforeach; ?>
                    </select>
                    <span class="input-group-btn">
                      <button type="submit" class="btn btn-primary">Filter</button>
                    </span>
                  </div>
                </div>
              </div>
            </form>
            <canvas id="grafikbarang"></canvas>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php
  foreach ($data as $data_penjualan) {
    $total_penjualan_pertahun[] = $data_penjualan->total_penjualan;
    $tanggal_pertahun[] = $data_penjualan->tanggal;
  }
  ?>
  <?php
  foreach ($data_barang as $barang) {
    $total_penjualan_barang[] = $barang;
    // $total_penjualan_barang[] = $data_penjualan_barang->total_penjualan_barang;
    //   $merk[] = $data_penjualan_barang->merk;
    // echo $total_penjualan_barang;
  }
  ?>
  <!-- /page content -->
  <?php $this->load->view("partials/main/foot") ?>
</div>
</div>
<?php $this->load->view("partials/main/js/js") ?>
<script>
  if ($("#grafikperbulan").length) {
    var f = document.getElementById("grafikperbulan");
    new Chart(f, {
      type: "line",
      data: {
        labels: ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"],
        datasets: [{
          label: "Grafik penjualan per Bulan",
          backgroundColor: "rgba(38, 185, 154, 0.31)",
          borderColor: "rgba(38, 185, 154, 0.7)",
          pointBorderColor: "rgba(38, 185, 154, 0.7)",
          pointBackgroundColor: "rgba(38, 185, 154, 0.7)",
          pointHoverBackgroundColor: "#fff",
          pointHoverBorderColor: "rgba(220,220,220,1)",
          pointBorderWidth: 1,
          data: <?php echo json_encode($grafik); ?>
        }]
      }
    })
  }
  if ($("#grafikpertahun").length) {
    var f = document.getElementById("grafikpertahun");
    new Chart(f, {
      type: "line",
      data: {
        labels: <?php echo json_encode($tanggal_pertahun) ?>,
        datasets: [{
          label: "Grafik penjualan per Tahun",
          backgroundColor: "rgba(38, 185, 154, 0.31)",
          borderColor: "rgba(38, 185, 154, 0.7)",
          pointBorderColor: "rgba(38, 185, 154, 0.7)",
          pointBackgroundColor: "rgba(38, 185, 154, 0.7)",
          pointHoverBackgroundColor: "#fff",
          pointHoverBorderColor: "rgba(220,220,220,1)",
          pointBorderWidth: 1,
          data: <?php echo json_encode($total_penjualan_pertahun); ?>
        }]
      }
    })
  }
  if ($("#grafikbarang").length) {
    var f = document.getElementById("grafikbarang");
    new Chart(f, {
      type: "line",
      data: {
        labels: ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"],
        datasets: [{
          label: "Grafik penjualan barang",
          backgroundColor: "rgba(38, 185, 154, 0.31)",
          borderColor: "rgba(38, 185, 154, 0.7)",
          pointBorderColor: "rgba(38, 185, 154, 0.7)",
          pointBackgroundColor: "rgba(38, 185, 154, 0.7)",
          pointHoverBackgroundColor: "#fff",
          pointHoverBorderColor: "rgba(220,220,220,1)",
          pointBorderWidth: 1,
          data: <?php echo json_encode($total_penjualan_barang); ?>
        }]
      }
    })
  }
</script>