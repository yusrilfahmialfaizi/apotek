        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Laporan Penjualan Bulanan</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="col-md-2">
                      <div class="form-group">
                        <button type="button" name="print" id="print" onclick="print_d()" class="btn btn-success btn-md glyphicon glyphicon-print"> Print</button>
                      </div>
                    </div>
                    <form action="<?php echo base_url("kasir/Laporan_bulanan") ?>" method="post">

                      <div class="col-md-2 col-md-offset-6">
                        <div class="form-group">
                          <label for="">Bulan</label>
                          <select class="form-control" id="bulan" name="bulan" required="required">
                            <option value="01">Januari</option>
                            <option value="02">Februari</option>
                            <option value="03">Maret</option>
                            <option value="04">April</option>
                            <option value="05">Mei</option>
                            <option value="06">Juni</option>
                            <option value="07">Juli</option>
                            <option value="08">Agustus</option>
                            <option value="09">September</option>
                            <option value="10">Oktober</option>
                            <option value="11">November</option>
                            <option value="12">Desember</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-2">
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
                  </div>

                  <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>ID Penjualan</th>
                        <th>Nama User</th>
                        <th>Jabatan</th>
                        <th>Tanggal</th>
                        <th>Total Harga</th>
                        <th>Bayar</th>
                        <th>Kembalian</th>
                      </tr>
                    </thead>
                    <?php $no = 1;
                    foreach ($all as $key) { ?>
                      <?php
                        $id_penjualan = $key->id_penjualan;
                        ?>
                      <tbody>
                        <tr>
                          <td><?php echo $no++ ?></td>
                          <td><?php echo $key->id_penjualan ?></td>
                          <td><?php echo $key->nama_user ?></td>
                          <td><?php echo $key->jabatan ?></td>
                          <td><?php echo $key->tanggal ?></td>
                          <td><?php echo $key->total_harga ?></td>
                          <td><?php echo $key->bayar ?></td>
                          <td><?php echo $key->kembalian ?></td>
                        </tr>
                      <?php } ?>
                      </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>
        <!-- /page content -->
        <?php $this->load->view("partials/main/foot") ?>
        </div>
        </div>
        <?php $this->load->view("partials/main/js/js") ?>
        <script>
          function print_d() {
            window.open("<?php echo base_url("kasir/Laporan_bulanan/print") ?>", "_blank");
          }
        </script>