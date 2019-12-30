        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Laporan Penjualan Harian</h3>
              </div>

              <div class="title_right"></div>
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
                    <form>
                      <div class="col-md-3 col-md-offset-9">
                        <div class="form-group">
                          <div class="input-group">
                            <input type="text" class="form-control has-feedback-left" id="single_cal2" placeholder="Expired" name="tanggal" aria-describedby="inputSuccess2Status4" required="required">
                            <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                            <span id="inputSuccess2Status4" class="sr-only">(success)</span>
                            <span class="input-group-btn">
                              <button type="button" class="btn btn-primary" id="filter">Filter</button>
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
                    <tbody id="table">
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
            var tanggal = $("#single_cal2").val();

            window.open("<?php echo base_url("kasir/Laporan_harian/print/") ?>" + tanggal, "_blank");
          }
        </script>
        <script type="text/javascript">
          $(document).ready(function() {

            $("#filter").on("click", function() {
              var tanggal = $("#single_cal2").val();

              $.ajax({
                url: "<?php echo base_url("kasir/laporan_harian/show_cart") ?>",
                method: "POST",
                data: {
                  tanggal: tanggal
                },
                success: function(data) {
                  $('#table').html(data);
                }
              })
            });

            $('#table').load("<?php echo base_url('kasir/Laporan_harian/load_cart'); ?>");

          });
        </script>