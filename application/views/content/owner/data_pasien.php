<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Data Pasien</h3>
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

              <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">

                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                      </button>
                      <h4 class="modal-title" id="myModalLabel">Data Pasien</h4>
                    </div>
                    <div class="modal-body">
                      <form action="<?php echo base_url("owner/datapasien/tambah") ?>" method="post" class="form-horizontal form-label-left">
                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">No. RM</label>
                          <div class="col-md-2 col-sm-9 col-xs-12">
                            <input type="text" class="form-control" id="no_rm_isi" name="no_rm_isi" value="<?php echo $kode ?>" readonly="readonly" required="required">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama <span class="required">*</span></label>
                          <div class="col-md-4 col-sm-9 col-xs-12">
                            <input type="text" class="form-control" id="nama_isi" name="nama_isi" placeholder="Nama Lengkap" required="required">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Kelamin <span class="required">*</span></label>
                          <div class="col-md-4 col-sm-9 col-xs-12">
                            <select required class="form-control" id="jenis_kelamin_isi" name="jenis_kelamin_isi">
                              <option>--Pilih--</option>
                              <option>Laki - laki</option>
                              <option>Perempuan</option>
                            </select>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal Lahir <span class="required">*</span></label>
                          <div class="col-md-4 col-sm-9 col-xs-12">
                            <input type="text" class="form-control has-feedback-left" id="single_cal4" placeholder="Tanggal Lahir" aria-describedby="inputSuccess2Status4" name="birthday" onchange="usia();" required="required">
                            <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                            <span id="inputSuccess2Status4" class="sr-only">(success)</span>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Usia awal<span class="required">*</span></label>
                          <div class="col-md-4 col-sm-9 col-xs-12">
                            <input type="text" class="form-control" id="usia_isi" name="usia_isi" placeholder="Usia" readonly="readonly" required="required">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Alamat <span class="required">*</span>
                          </label>
                          <div class="col-md-4 col-sm-9 col-xs-12">
                            <textarea class="form-control" rows="3" id="alamat_isi" name="alamat_isi" placeholder="Alamat Lengkap" required="required"></textarea>
                          </div>
                        </div>
                        <div class="ln_solid"></div>
                        <div class="form-group">
                          <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="reset" class="btn btn-primary">Reset</button>
                            <button type="submit" class="btn btn-success">Submit</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <?php foreach ($pasien as $key) : ?>

                <div class="modal fade bs-example-modal-lga<?php echo $key->no_rm ?> " tabindex="-1" role="dialog" aria-hidden="true">
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
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">No. RM</label>
                            <div class="col-md-2 col-sm-9 col-xs-12">
                              <input type="text" class="form-control" id="no_rm" name="no_rm" value="<?php echo $key->no_rm ?>" readonly="readonly" required="required">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama <span class="required">*</span></label>
                            <div class="col-md-4 col-sm-9 col-xs-12">
                              <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $key->nama ?>" placeholder="Nama Lengkap" required="required">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Kelamin <span class="required">*</span></label>
                            <div class="col-md-4 col-sm-9 col-xs-12">
                              <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                                <option>--Pilih--</option>
                                <option <?php if ($key->jenis_kelamin == "Laki - laki") { ?> selected="selected" <?php } ?>>Laki - laki</option>
                                <option <?php if ($key->jenis_kelamin == "Perempuan") { ?> selected="selected" <?php } ?>>Perempuan</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal Lahir <span class="required">*</span></label>
                            <div class="col-md-4 col-sm-9 col-xs-12">
                              <input type="text" class="form-control has-feedback-left" id="single_cal3" placeholder="First Name" aria-describedby="inputSuccess2Status4" name="birthday" onchange="usia();" required="required" value="<?php echo date("m/d/Y", strtotime($key->tgl_lahir)) ?>">
                              <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                              <span id="inputSuccess2Status4" class="sr-only">(success)</span>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Usia awal<span class="required">*</span></label>
                            <div class="col-md-4 col-sm-9 col-xs-12">
                              <input type="text" class="form-control" id="usia_isi" name="usia_isi" placeholder="Usia" readonly="readonly" required="required" value="<?php echo $key->usia ?>">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Alamat <span class="required">*</span>
                            </label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                              <textarea class="form-control" rows="3" placeholder="Alamat Lengkap" id="alamat" name="alamat" required="required"><?php echo $key->alamat ?></textarea>
                            </div>
                          </div>
                          <div class="ln_solid"></div>
                          <div class="form-group">
                            <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              <button type="reset" class="btn btn-primary">Reset</button>
                              <button type="submit" class="btn btn-success">Submit</button>
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
                  <th>No. RM</th>
                  <th>Nama Lengkap</th>
                  <th>Jenis Kelamin</th>
                  <th>Tanggal Lahir</th>
                  <th>Usia awal</th>
                  <th>Alamat</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($pasien as $key) : ?>
                  <tr>
                    <td><?php echo $key->no_rm ?></td>
                    <td><?php echo $key->nama ?></td>
                    <td><?php echo $key->jenis_kelamin ?></td>
                    <td><?php echo $key->tgl_lahir ?></td>
                    <td><?php echo $key->usia ?></td>
                    <td><?php echo $key->alamat ?></td>
                    <td>
                      <div class="form-group">
                        <a href="#" class="btn btn-primary btn-sm glyphicon glyphicon-pencil" data-toggle="modal" data-target=".bs-example-modal-lga<?php echo $key->no_rm ?>"></a>

                        <a id="id_user_hapus" name="id_user_hapus" href="#" data-toggle="modal" data-target="#delete<?php echo $key->no_rm ?>" class="btn btn-danger btn-sm glyphicon glyphicon-remove"></a>
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
<?php $this->load->view("partials/main/js/js_datapasien") ?>
<?php foreach ($pasien as $key) : ?>
  <div class="modal fade" id="delete<?php echo $key->no_rm ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Hapus Data?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">INGAT !!! Data yang sudah terhapus tidak dapat di kembalikan lagi.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="<?php echo base_url("owner/datapasien/hapus/$key->no_rm") ?>">Hapus</a>
        </div>
      </div>
    </div>
  </div>
<?php endforeach ?>