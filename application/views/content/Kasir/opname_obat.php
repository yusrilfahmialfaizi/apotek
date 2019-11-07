<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Data User</h3>
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
                                    <div class="col-md-2 col-sm-9 col-xs-12">
                                    <select class="form-control" id="id_obat" name="id_obat">
                                        <option value="&nbsp"></option>
                                        <?php foreach ($obat as $key): ?>
                                        <option><?php echo $key->id_obat ?></option>

                                        <?php endforeach ?>
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Kelamin  <span class="required">*</span></label>
                                  <div class="col-md-4 col-sm-9 col-xs-12">
                                    <select class="form-control" id="jenis_kelamin_isi" name="jenis_kelamin_isi" required="required">
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
                                    <textarea class="form-control" rows="3" id="alamat_isi" name="alamat_isi" placeholder="Alamat Lengkap" required="required"></textarea>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Jabatan  <span class="required">*</span></label>
                                  <div class="col-md-4 col-sm-9 col-xs-12">
                                    <select class="form-control" id="jabatan_isi" name="jabatan_isi" required="required">
                                      <option>--Pilih--</option>
                                      <option>Owner</option>
                                      <option>Apoteker</option>
                                      <option>Kasir</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Username  <span class="required">*</span></label>
                                  <div class="col-md-4 col-sm-9 col-xs-12">
                                    <input type="text" class="form-control" id="username_isi" name="username_isi" placeholder="Username" required="required">
                                    <p id="pesan"></p>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Password  <span class="required">*</span></label>
                                  <div class="col-md-4 col-sm-9 col-xs-12">
                                    <input type="password" class="form-control" id="password_isi" name="password_isi" placeholder="Password" required="required">
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
                      <?php foreach ($user as $key ): ?>

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
                                    <input type="text" class="form-control" id="id_user" name="id_user" value="<?php echo $key->id_user ?>"  readonly="readonly" required="required">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama <span class="required">*</span></label>
                                  <div class="col-md-4 col-sm-9 col-xs-12">
                                    <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $key->nama_user ?>" placeholder="Nama Lengkap" required="required">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Kelamin  <span class="required">*</span></label>
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
                                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Jabatan  <span class="required">*</span></label>
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
                                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Username  <span class="required">*</span></label>
                                  <div class="col-md-4 col-sm-9 col-xs-12">
                                    <input type="text" class="form-control" id="username" name="username" oninput="check()" value="<?php echo $key->username ?>" placeholder="Username" required="required">
                                    <p id="pesan_edit"></p>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Password  <span class="required">*</span></label>
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
                            <!-- <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              <button type="button" class="btn btn-primary">Save changes</button>
                            </div> -->

                          </div>
                        </div>
                      </div>
                      <?php endforeach ?>
                    </div>
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>ID User</th>
                          <th>Nama Lengkap</th>
                          <th>Jenis Kelamin</th>
                          <th>Alamat</th>
                          <th>Jabatan</th>
                          <th>Username</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach ($user as $key): ?>
                        <tr>
                          <td><?php echo $key->id_user ?></td>
                          <td><?php echo $key->nama_user ?></td>
                          <td><?php echo $key->jenis_kelamin ?></td>
                          <td><?php echo $key->alamat ?></td>
                          <td><?php echo $key->jabatan ?></td>
                          <td><?php echo $key->username ?></td>
                          <td>
                            <div class="form-group">
                              <a href="#" class="btn btn-primary btn-sm glyphicon glyphicon-pencil" data-toggle="modal" data-target=".bs-example-modal-lga<?php echo $key->id_user ?>"></a>

                              <a href="<?php echo base_url("owner/datauser/hapus/$key->id_user") ?>" id="id_user_hapus" name="id_user_hapus" class="btn btn-danger btn-sm glyphicon glyphicon-remove"></a>
                            </div>
                          </td>
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
      $(document).ready(function(){
        $("#id_obat").select2({
            placeholder: "Masukkan no Kode Obat",
            allowClear: true,
            minimumInputLength : 3
        });
        $("#id_obat").on("change", function() {
            var id_obat = $("#id_obat").val();

            $.ajax({
                url: "<?php echo base_url("kasir/Opname_obat/data_obat") ?>",
                type: "POST",
                dataType: "JSON",
                data: { id_obat: id_obat },
                cache: false,
                success: function(data) {
                    $.each(data, function(nama_paten, nama_generic, exp, jumlah_stok) {
                        $("#nama_paten").val(data.nama_paten);
                        $("#nama_generic").val(data.nama_generic);
                    });
                }
            })
        })

      })
    </script>