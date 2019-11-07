        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Buku Kunjungan</h3>
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
                  <button type="button" name="print" id="print" onclick="print_d()" class="btn btn-success btn-sm glyphicon glyphicon-print"> Print</button>
                    <!-- <a href="<?php echo base_url("owner/datakunjungan/print") ?>" class="btn btn-success btn-sm glyphicon glyphicon-print"> Print</a> -->
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">                  
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
                          <th>Action</th>
                        </tr>
                      </thead>
                      <?php $no = 1; foreach ($kunjungan as $key) {?>
                        <?php
                        $id_kunjungan = $key->id_kunjungan;
                        ?>
                      <tbody>
                        <tr>
                          <td><?php echo $no++ ?></td>
                          <td><?php echo $key->id_kunjungan ?></td>
                          <td><?php echo $key->no_rm ?></td>
                          <td><?php echo $key->nama ?></td>
                          <td><?php echo $key->tgl_kunjungan ?></td>
                          <td><?php echo $key->diagnosa_keperawatan ?></td>
                          <td><?php echo $key->intervensi ?></td>
                          <td><?php echo $key->tarif ?></td>
                          <td>
                            <a href="<?php echo base_url("owner/detailKunjungan/index/$id_kunjungan") ?>" class="btn btn-info btn-sm"> Lihat</a>
                          </td>
                        </tr>
                      <?php }?>
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
        function print_d(){
            window.open("<?php echo base_url("owner/datakunjungan/print") ?>","_blank");
        }
    </script>