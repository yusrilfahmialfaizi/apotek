      <!-- page content -->
      <div class="right_col" role="main">
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>Data Pembelian Obat</h3>
            </div>
          </div>

          <div class="clearfix"></div>
          <div class="modal fade bs-example-modal-lg" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">

                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                  </button>
                  <h4 class="modal-title" id="myModalLabel">Data Obat</h4>
                </div>
                <div class="modal-body">
                  <form action="#" method="post" class="form-horizontal form-label-left">

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">ID Obat</label>
                      <div class="col-md-2 col-sm-9 col-xs-12">
                        <select class="form-control" id="id_obat_isi" name="id_obat_isi">
                          <option value="&nbsp"></option>
                          <?php foreach ($id as $key) : ?>
                            <option><?php echo $key->id_obat ?></option>

                          <?php endforeach ?>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Paten<span class="required">*</span></label>
                      <div class="col-md-4 col-sm-9 col-xs-12">
                        <input type="text" class="form-control" id="nama_paten_isi" name="nama_paten_isi" placeholder="Nama Paten" required="required" readonly="readonly">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Generic<span class="required">*</span></label>
                      <div class="col-md-4 col-sm-9 col-xs-12">
                        <input type="text" class="form-control" id="nama_generic_isi" name="nama_generic_isi" placeholder="Nama Generic" required="required" readonly="readonly">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Pabrik<span class="required">*</span></label>
                      <div class="col-md-4 col-sm-9 col-xs-12">
                        <input type="text" class="form-control" id="nama_pabrik_isi" name="nama_pabrik_isi" placeholder="Nama Pabrik" required="required" readonly="readonly">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis <span class="required">*</span></label>
                      <div class="col-md-4 col-sm-9 col-xs-12">
                        <input type="text" class="form-control" id="jenis_obat_isi" name="jenis_obat_isi" placeholder="Jenis Obat" required="required" readonly="readonly">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Kategori <span class="required">*</span></label>
                      <div class="col-md-4 col-sm-9 col-xs-1">
                        <input type=" text" class="form-control" id="kategori_obat_isi" name="kategori_obat_isi" placeholder="Kategori Obat" required="required" readonly="readonly">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Harga Beli Rp.<span class="required">*</span></label>
                      <div class="col-md-4 col-sm-9 col-xs-12">
                        <input type="number" min="0" class="form-control" id="harga_beli_isi" name="harga_beli_isi" placeholder="Rp." required="required">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Expired<span class="required">*</span></label>
                      <div class="col-md-4 col-sm-9 col-xs-12">
                        <input type="text" class="form-control has-feedback-left" id="single_cal4" placeholder="Expired" name="exp" aria-describedby="inputSuccess2Status4" required="required">
                        <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                        <span id="inputSuccess2Status4" class="sr-only">(success)</span>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Jumlah <span class="required">*</span></label>
                      <div class="col-md-4 col-sm-9 col-xs-12">
                        <input type="number" min="0" class="form-control" id="jumlah_stok_isi" name="jumlah_stok_isi" placeholder="Rp." required="required">
                      </div>
                    </div>

                    <div class="ln_solid"></div>
                    <div class="form-group">
                      <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="reset" class="btn btn-primary">Reset</button>
                        <button type="button" data-dismiss="modal" id="add_cart" class="btn btn-success">Submit</button>
                      </div>
                    </div>
                  </form>
                </div>

              </div>
            </div>
          </div>

          <div class="modal fade edit_obat" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">

                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                  </button>
                  <h4 class="modal-title" id="myModalLabel">Obat</h4>
                </div>
                <div class="modal-body">
                  <form class="form-horizontal form-label-left">
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">ID Obat <span class="required">*</span></label>
                      <div class="col-md-4 col-sm-9 col-xs-12">
                        <input type="text" class="form-control" name="rowid" id="rowid" required="required" hidden readonly>
                        <input type="text" class="form-control" name="id_obat_edit" id="id_obat_edit" required="required" readonly>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Paten </label>
                      <div class="col-md-4 col-sm-9 col-xs-12">
                        <input type="text" class="form-control" id="nama_paten_edit" name="nama_paten_edit" readonly="readonly" required="required" placeholder="Nama Paten">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Generic <span class="required">*</span></label>
                      <div class="col-md-4 col-sm-9 col-xs-12">
                        <input type="text" class="form-control" id="nama_generic_edit" name="nama_generic_edit" placeholder="Nama Generic" required="required" readonly="readonly">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Pabrik <span class="required">*</span></label>
                      <div class="col-md-4 col-sm-9 col-xs-12">
                        <input type="text" class="form-control" id="nama_pabrik_edit" name="nama_pabrik_edit" readonly="readonly" placeholder="Nama Pabrik" required="required">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis <span class="required">*</span></label>
                      <div class="col-md-4 col-sm-9 col-xs-12">
                        <input type="text" class="form-control" id="jenis_obat_edit" name="jenis_obat_edit" placeholder="Jenis" readonly="readonly" required="required">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Kategori <span class="required">*</span></label>
                      <div class="col-md-4 col-sm-9 col-xs-12">
                        <input type="text" class="form-control" id="kategori_obat_edit" name="kategori_obat_edit" placeholder="Kategori" required="required" readonly="readonly">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Harga Beli Rp. <span class="required">*</span></label>
                      <div class="col-md-4 col-sm-9 col-xs-12">
                        <input type="number" class="form-control" id="harga_edit" name="harga_edit" readonly="readonly" placeholder="Rp." required="required" readonly="readonly">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Expired <span class="required">*</span></label>
                      <div class="col-md-4 col-sm-9 col-xs-12">
                        <input type="text" class="form-control has-feedback-left" id="single_cal3" placeholder="Expired" name="exp" aria-describedby="inputSuccess2Status4" required="required">
                        <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                        <span id="inputSuccess2Status4" class="sr-only">(success)</span>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Jumlah <span class="required">*</span></label>
                      <div class="col-md-4 col-sm-9 col-xs-12">
                        <input type="number" min="0" class="form-control" id="qty_edit" name="qty_edit" placeholder="Qty" required="required">
                      </div>
                    </div>

                    <div class="ln_solid"></div>
                    <div class="form-group">
                      <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="reset" class="btn btn-primary">Reset</button>
                        <button type="submit" id="edit_cart" class="btn btn-success">Submit</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2></h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <form action="#" method="post">
                    <div class="row">
                      <!-- Large modal -->
                      <div class="form-group">
                        <div class="col-md-9">
                          <label class="control-label col-md-2 col-sm-3 col-xs-12">ID Pembelian <span class="required">*</span></label>
                          <div class="col-md-4 col-sm-9 col-xs-12">
                            <input type="text" class="form-control" id="id_pembelian" name="id_pembelian" placeholder="Kode Pembelian" required="required">
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <input type="text" class="form-control has-feedback-left" id="single_cal2" placeholder="Expired" name="tanggal" aria-describedby="inputSuccess2Status4" required="required">
                            <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                            <span id="inputSuccess2Status4" class="sr-only">(success)</span>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <!-- <div class="col-md-10"></div> -->
                        <div class="col-md-12">
                          <div class="form-group">
                            <button type="button" class="btn btn-primary btn-round" data-toggle="modal" data-target=".bs-example-modal-lg"> + Tambah Data</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                        <thead>
                          <tr>
                            <th>ID Obat</th>
                            <th>Nama Paten</th>
                            <th>Nama Generic</th>
                            <th>Nama Pabrik</th>
                            <th>Jenis</th>
                            <th>Kategori</th>
                            <th>Harga Beli</th>
                            <th>Exp</th>
                            <th>Jumlah</th>
                            <th>Subtotal</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody id="pembelian">
                          <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="form-group">
                      <div class="col-md-9 col-sm-9 col-xs-12 ">
                        <button type="submit" id="submit" name="submit" class="btn btn-success">Submit</button>
                      </div>
                    </div>
                  </form>
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
        $(document).ready(function() {
          $("#id_obat_isi").select2({
            placeholder: "Masukkan no Kode Obat",
            allowClear: true,
            minimumInputLength: 3
          });
          $("#id_obat_isi").on("change", function() {
            var id_obat = $("#id_obat_isi").val();

            $.ajax({
              url: "<?php echo base_url("kasir/pembelian_obat/data_obat") ?>",
              type: "POST",
              dataType: "JSON",
              data: {
                id_obat: id_obat
              },
              cache: false,
              success: function(data) {
                $("#nama_generic_isi").val(data.nama_generic);
                $("#nama_paten_isi").val(data.nama_paten);
                $("#nama_pabrik_isi").val(data.nama_pabrik);
                $("#jenis_obat_isi").val(data.jenis);
                $("#kategori_obat_isi").val(data.kategori);
                // $("#").val(data.);
              }
            })
          })
        });
      </script>