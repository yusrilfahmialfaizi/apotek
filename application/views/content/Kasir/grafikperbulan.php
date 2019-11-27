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
            <form action="<?php echo base_url("kasir/grafikperbulan") ?>" method="post">
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
            <h2>Line graph<small>Sessions</small></h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Settings 1</a>
                  </li>
                  <li><a href="#">Settings 2</a>
                  </li>
                </ul>
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
  </div>

  <?php
  foreach ($data as $data_penjualan) {
    $total_penjualan_pertahun[] = $data_penjualan->total_penjualan;
    $tanggal_pertahun[] = $data_penjualan->tanggal;
  }
  // foreach ($dataperbulan as $data_penjualan_perbulan) {

  //   // $total_penjualan_perbulan[] = $data_penjualan_perbulan->total_penjualan;
  //   // $tanggal[] = $data_penjualan_perbulan->tanggal;
  // }
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
        labels: ["Januari","Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"],
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
</script>