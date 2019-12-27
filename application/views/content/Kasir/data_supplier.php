<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Data Supplier</h3>
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
                                            <h4 class="modal-title" id="myModalLabel">Data User</h4>
                                        </div>
                                        <div class="modal-body">
                                            <form action="<?php echo base_url("kasir/Data_supplier/tambah") ?>" method="post" class="form-horizontal form-label-left">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">ID Supplier</label>
                                                    <div class="col-md-2 col-sm-9 col-xs-12">
                                                        <input type="text" id="id_supplier_isi" name="id_supplier_isi" min="0" class="form-control" value="<?php echo $kode ?>" readonly="readonly" required>
                                                        <!-- <input type="text" class="form-control" id="id_user_isi" name="id_user_isi" value="<?php echo $kode ?>" readonly="readonly" required="required"> -->
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama <span class="required">*</span></label>
                                                    <div class="col-md-4 col-sm-9 col-xs-12">
                                                        <!-- <input type="text" class="form-control" id="nama_isi" name="nama_isi" placeholder="Nama Lengkap" required="required"> -->
                                                        <input type="text" id="nama_isi" name="nama_isi" min="0" class="form-control" placeholder="Nama Supplier" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Alamat Lengkap <span class="required">*</span></label>
                                                    <div class="col-md-4 col-sm-9 col-xs-12">
                                                        <textarea class="form-control" rows="3" id="alamat_isi" name="alamat_isi" placeholder="Alamat Lengkap" required="required"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">No. Telepon <span class="required">*</span></label>
                                                    <div class="col-md-4 col-sm-9 col-xs-12">
                                                        <input type="number" id="no_telepon_isi" name="no_telepon_isi" min="0" class="form-control" placeholder="Nomor Telepone " required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Pabrik<span class="required">*</span></label>
                                                    <div class="col-md-4 col-sm-9 col-xs-12">
                                                        <input type="text" id="nama_pabrik_isi" name="nama_pabrik_isi" min="0" class="form-control" placeholder="Nama Pabrik" required>
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
                                    </div>
                                </div>
                            </div>
                            <?php foreach ($supplier as $key) : ?>
                                <div class="modal Edit<?php echo $key->id_supplier ?>" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">

                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                                </button>
                                                <h4 class="modal-title" id="myModalLabel">Data User</h4>
                                            </div>
                                            <div class="modal-body">
                                                <form action="<?php echo base_url("kasir/Data_supplier/edit") ?>" method="post" class="form-horizontal form-label-left">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">ID Supplier</label>
                                                        <div class="col-md-2 col-sm-9 col-xs-12">
                                                            <input type="text" id="id_supplier_edit" name="id_supplier_edit" min="0" class="form-control" value="<?php echo $key->id_supplier ?>" readonly="readonly" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama <span class="required">*</span></label>
                                                        <div class="col-md-4 col-sm-9 col-xs-12">
                                                            <input type="text" id="nama_edit" name="nama_edit" min="0" class="form-control" value="<?php echo $key->nama ?>" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Alamat Lengkap <span class="required">*</span></label>
                                                        <div class="col-md-4 col-sm-9 col-xs-12">
                                                            <textarea class="form-control" rows="3" id="alamat_edit" name="alamat_edit" placeholder="Alamat Lengkap" required="required"><?php echo $key->alamat ?></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">No. Telepon <span class="required">*</span></label>
                                                        <div class="col-md-4 col-sm-9 col-xs-12">
                                                            <input type="number" id="no_telepon_edit" name="no_telepon_edit" min="0" class="form-control" value="<?php echo ($key->no_telepon) ?>" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Pabrik<span class="required">*</span></label>
                                                        <div class="col-md-4 col-sm-9 col-xs-12">
                                                            <input type="text" id="nama_pabrik_edit" name="nama_pabrik_edit" min="0" class="form-control" value="<?php echo ($key->nama_pabrik) ?>" required>
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
                                        </div>
                                    </div>
                                </div>

                            <?php endforeach ?>
                        </div>
                        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Id Supplier</th>
                                    <th>Nama Supplier</th>
                                    <th>Alamat</th>
                                    <th>Nomor Telepon</th>
                                    <th>Nama Pabrik</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($supplier as $key) : ?>
                                    <tr>
                                        <td><?php echo $key->id_supplier ?></td>
                                        <td><?php echo $key->nama ?></td>
                                        <td><?php echo $key->alamat ?></td>
                                        <td><?php echo $key->no_telepon ?></td>
                                        <td><?php echo $key->nama_pabrik ?></td>
                                        <td>
                                            <div class="form-group">
                                                <a href="#" class="btn btn-primary btn-sm glyphicon glyphicon-pencil" data-toggle="modal" data-target=".Edit<?php echo $key->id_supplier ?>"></a>

                                                <a id="id_supplier_hapus" name="id_supplier_hapus" href="#" data-toggle="modal" data-target="#delete<?php echo $key->id_supplier ?>" class="btn btn-danger btn-sm glyphicon glyphicon-remove"></a>
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
<?php foreach ($supplier as $key) : ?>

    <div class="modal fade" id="delete<?php echo $key->id_supplier ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                    <a class="btn btn-primary" href="<?php echo base_url("kasir/data_supplier/hapus/$key->id_supplier") ?>">Hapus</a>
                </div>
            </div>
        </div>
    </div>
<?php endforeach ?>