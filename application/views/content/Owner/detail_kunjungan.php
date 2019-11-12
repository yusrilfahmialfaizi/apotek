        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Detail Kunjungan</h3>
              </div>

              <div class="title_right"></div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <a href="<?php echo base_url("owner/datakunjungan") ?>" class="btn btn-link btn-lg fa fa-mail-reply">
                    </a>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content"></div>
                  <button type="button" name="print" id="print" onclick="print_d()" class="btn btn-success btn-sm glyphicon glyphicon-print"> Print</button>
                  <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>ID Kunjungan</th>
                        <th>ID Obat</th>
                        <th>Nama Paten</th>
                        <th>Nama Generic</th>
                        <th>Nama Pabrik</th>
                        <th>Jenis Obat</th>
                        <th>Jenis </th>
                        <th>Qty</th>
                      </tr>
                    </thead>
                    <?php
                    $no = 1;
                    foreach ($data as $key) { ?>
                      <tbody>
                        <tr>
                          <td><?php echo $no++ ?></td>
                          <td><?php echo $key->id_kunjungan ?></td>
                          <td><?php echo $key->id_obat_praktik ?></td>
                          <td><?php echo $key->nama_paten ?></td>
                          <td><?php echo $key->nama_generic ?></td>
                          <td><?php echo $key->nama_pabrik ?></td>
                          <td><?php echo $key->jenis_obat ?></td>
                          <td><?php echo $key->jenis ?></td>
                          <td><?php echo $key->qty ?></td>
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
            var id = <?php echo $this->uri->segment(4); ?>;
            window.open("<?php echo base_url("owner/Detailkunjungan/print/") ?>" + id, "_blank");
          }
        </script>