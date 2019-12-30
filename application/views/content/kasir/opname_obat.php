<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Data User</h3>
      </div>

      <div class="title_right"></div>
    </div>

    <div class="clearfix"></div>

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
            <div class="row">
              <!-- Large modal -->
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg"> + Tambah Data</button>

              <div class="modal fade bs-example-modal-lg" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">

                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                      </button>
                      <h4 class="modal-title" id="myModalLabel">Data Opname Obat</h4>
                    </div>
                    <div class="modal-body">
                      <form action="<?php echo base_url("kasir/Opname_obat/tambah") ?>" method="post" class="form-horizontal form-label-left">
                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">ID Opname</label>
                          <div class="col-md-2 col-sm-9 col-xs-12">
                            <input type="text" class="form-control" id="id_opname" name="id_opname" value="<?php echo $id ?>" readonly="readonly" required="required">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">ID Obat</label>
                          <div class="col-md-6 col-sm-9 col-xs-12">
                            <select class="form-control" id="id_obat" name="id_obat">
                              <option value="&nbsp"></option>
                              <?php foreach ($obat as $key) : ?>
                                <option value="<?php echo $key->id_obat ?>"><?php echo $key->id_obat ?> | <?php echo $key->nama_generic ?></option>

                              <?php endforeach ?>
                            </select>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Paten <span class="required">*</span></label>
                          <div class="col-md-4 col-sm-9 col-xs-12">
                            <input type="text" id="nama_paten" name="nama_paten" class="form-control" placeholder=" " required readonly="readonly"> </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Generic <span class="required">*</span></label>
                          <div class="col-md-4 col-sm-9 col-xs-12">
                            <input type="text" id="nama_generic" name="nama_generic" class="form-control" placeholder=" " required readonly="readonly">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Expired <span class="required">*</span></label>
                          <div class="col-md-4 col-sm-9 col-xs-12">
                            <select class="form-control" id="expired" name="expired" required="required" disabled>
                              <option value="">-- Pilih --</option>
                              <!-- <?php //foreach ($detail as $key) {
                                    ?>
                                        <option id="expired" class="<?php echo $key->id_obat ?>" value="<?php echo $key->exp ?>"><?php echo $key->exp ?></option>
                                        <?php //}
                                        ?> -->
                            </select>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Stok Asli <span class="required">*</span></label>
                          <div class="col-md-4 col-sm-9 col-xs-12">
                            <input type="number" id="stok_asli" name="stok_asli" min="0" class="form-control" placeholder=" " required readonly="readonly">
                            <i>
                              <p>* dalam lembar</p>
                            </i>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Stok Nyata <span class="required">*</span></label>
                          <div class="col-md-4 col-sm-9 col-xs-12">
                            <input type="number" id="stok_nyata" name="stok_nyata" min="0" class="form-control" placeholder=" " required>
                            <i>
                              <p>* dalam lembar</p>
                            </i>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Selisih <span class="required">*</span></label>
                          <div class="col-md-4 col-sm-9 col-xs-12">
                            <input type="number" id="selisih" name="selisih" class="form-control" placeholder=" " required readonly="readonly">
                            <i>
                              <p>* dalam lembar</p>
                            </i>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Keterangan <span class="required">*</span></label>
                          <div class="col-md-4 col-sm-9 col-xs-12">
                            <textarea id="ket" required="required" name="ket" class="form-control col-md-7 col-xs-12"></textarea>
                          </div>
                        </div>
                        <div class="ln_solid"></div>
                        <div class="form-group">
                          <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="reset" class="btn btn-primary">Reset</button>
                            <button type="submit" id="submit" class="btn btn-success">Submit</button>
                          </div>
                        </div>
                      </form>
                    </div>
                    <!-- <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              <button type="button" class="btn btn-primary">Save changes</button>
                            </div> -->

                  </div>
                </div>
              </div>
              <?php foreach ($opname as $key) : ?>

                <div class="modal fade bs-example-modal-lga<?php echo $key->id_user ?> " tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">

                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel">Edit Data User</h4>
                      </div>
                      <div class="modal-body">
                        <form action="<?php echo base_url("owner/datauser/edit") ?>" method="post" class="form-horizontal form-label-left">
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">ID User</label>
                            <div class="col-md-2 col-sm-9 col-xs-12">
                              <input type="text" class="form-control" id="id_user" name="id_user" value="<?php echo $key->id_user ?>" readonly="readonly" required="required">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama <span class="required">*</span></label>
                            <div class="col-md-4 col-sm-9 col-xs-12">
                              <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $key->nama_user ?>" placeholder="Nama Lengkap" required="required">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Kelamin <span class="required">*</span></label>
                            <div class="col-md-4 col-sm-9 col-xs-12">
                              <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                                <option>--Pilih--</option>
                                <option>Laki - laki</option>
                                <option>Perempuan</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Alamat <span class="required">*</span>
                            </label>
                            <div class="col-md-4 col-sm-9 col-xs-12">
                              <textarea class="form-control" rows="3" placeholder="Alamat Lengkap" id="alamat" name="alamat" required="required"><?php echo $key->alamat ?></textarea>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Jabatan <span class="required">*</span></label>
                            <div class="col-md-4 col-sm-9 col-xs-12">
                              <select class="form-control" id="jabatan" name="jabatan" required="required">
                                <option>--Pilih--</option>
                                <option>Owner</option>
                                <option>Apoteker</option>
                                <option>Kasir</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Username <span class="required">*</span></label>
                            <div class="col-md-4 col-sm-9 col-xs-12">
                              <input type="text" class="form-control" id="username" name="username" oninput="check()" value="<?php echo $key->username ?>" placeholder="Username" required="required">
                              <p id="pesan_edit"></p>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Password <span class="required">*</span></label>
                            <div class="col-md-4 col-sm-9 col-xs-12">
                              <input type="password" id="password" name="password" class="form-control" placeholder="Password" required="required">
                            </div>
                          </div>
                          <div class="ln_solid"></div>
                          <div class="form-group">
                            <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              <button type="reset" class="btn btn-primary">Reset</button>
                              <button type="submit" id="submit_edit" class="btn btn-success">Submit</button>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              <?php endforeach ?>
            </div>
            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>ID Opname</th>
                  <th>Nama </th>
                  <th>Jabatan</th>
                  <th>Nama Paten</th>
                  <th>Nama Generic</th>
                  <th>Expired</th>
                  <th>Stok Asli</th>
                  <th>Stok Nyata</th>
                  <th>Selisih</th>
                  <th>Keterangan</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($opname as $op) : ?>
                  <tr>
                    <td><?php echo $op->id_opname ?></td>
                    <td><?php echo $op->nama_user ?></td>
                    <td><?php echo $op->jabatan ?></td>
                    <td><?php echo $op->nama_paten ?></td>
                    <td><?php echo $op->nama_generic ?></td>
                    <td><?php echo $op->exp ?></td>
                    <td><?php echo $op->stok ?></td>
                    <td><?php echo $op->stok_nyata ?></td>
                    <td><?php echo $op->selisih ?></td>
                    <td><?php echo $op->ket ?></td>
                  </tr>
                <?php endforeach ?>
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
<script type="text/javascript">
  $(document).ready(function() {
    // $("#expired").chained("#id_obat");

    $("#id_obat").select2({
      placeholder: "Masukkan no Kode Obat",
      allowClear: true,
      minimumInputLength: 1
    });

    $("#id_obat").on("change", function() {
      var id_obat = $("#id_obat").val();

      $.ajax({
        url: "<?php echo base_url("kasir/Opname_obat/data_obat") ?>",
        type: "POST",
        dataType: "JSON",
        data: {
          id_obat: id_obat
        },
        cache: false,
        success: function(data) {
          $.each(data, function(nama_paten, nama_generic, exp, jumlah_stok) {
            $("#nama_paten").val(data.nama_paten);
            $("#nama_generic").val(data.nama_generic);
          });
        }
      })
    });

    $('#id_obat').change(function() {
      var id_obat = $(this).val();
      $.ajax({
        url: "<?php echo base_url('kasir/Opname_obat/exp_obat'); ?>",
        method: "POST",
        data: {
          id_obat: id_obat
        },
        async: true,
        dataType: 'json',
        success: function(data) {

          var html = '';
          var i;

          html += '<option value="&nbsp"> -- Pilih -- </option>';
          for (i = 0; i < data.length; i++) {
            html += '<option value=' + data[i].exp + '>' + data[i].exp + '</option>';
          }
          document.getElementById("expired").disabled = false;
          $('#expired').html(html);

        }
      });
      return false;
    });

    $("#expired").on("change", function() {
      var id_obat = $("#id_obat").val();
      var exp = $("#expired").val();

      $.ajax({
        url: "<?php echo base_url("kasir/Opname_obat/stok_obat") ?>",
        type: "POST",
        dataType: "JSON",
        data: {
          id_obat: id_obat,
          exp: exp
        },
        cache: false,
        success: function(data) {
          $.each(data, function(jumlah_stok) {
            $("#stok_asli").val(data.jumlah_stok);
          });
        }
      })
    });

    $("#stok_nyata").on("input", function() {
      var nyata = $(this).val();
      var asli = $("#stok_asli").val();
      var selisih = asli - nyata;
      $("#selisih").val(selisih);
    })
  })
</script>