<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Data Obat</h3>
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
                                            <h4 class="modal-title" id="myModalLabel">Data Obat</h4>
                                        </div>
                                        <div class="modal-body">
                                            <form action="<?php echo base_url("kasir/Data_obat/tambah") ?>" method="post" class="form-horizontal form-label-left">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">ID Obat</label>
                                                    <div class="col-md-2 col-sm-9 col-xs-12">
                                                        <input type="text" class="form-control" id="id_obat_isi" name="id_obat_isi" value="<?php echo $kode ?>" readonly="readonly" required="required">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Paten<span class="required">*</span></label>
                                                    <div class="col-md-4 col-sm-9 col-xs-12">
                                                        <input type="text" class="form-control" id="nama_paten_isi" name="nama_paten_isi" placeholder="Nama Paten" required="required">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Generic<span class="required">*</span></label>
                                                    <div class="col-md-4 col-sm-9 col-xs-12">
                                                        <input type="text" class="form-control" id="nama_generic_isi" name="nama_generic_isi" placeholder="Nama Generic" required="required">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Pabrik<span class="required">*</span></label>
                                                    <div class="col-md-4 col-sm-9 col-xs-12">
                                                        <input type="text" class="form-control" id="nama_pabrik_isi" name="nama_pabrik_isi" placeholder="Nama Pabrik" required="required">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis <span class="required">*</span></label>
                                                    <div class="col-md-4 col-sm-9 col-xs-12">
                                                        <select required class="form-control" id="jenis_isi" name="jenis_isi">
                                                            <option>--Pilih--</option>
                                                            <option>Bebas</option>
                                                            <option>Bebas Terbatas</option>
                                                            <option>Narkotik / Psikotropik</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Kategori <span class="required">*</span></label>
                                                    <div class="col-md-4 col-sm-9 col-xs-12">
                                                        <select required class="form-control" id="kategori_isi" name="kategori_isi">
                                                            <option>--Pilih--</option>
                                                            <option>Tablet</option>
                                                            <option>Sirup</option>
                                                            <option>Salep</option>
                                                            <option>Kapsul</option>
                                                            <option>Racikan</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Harga Beli<span class="required">*</span></label>
                                                    <div class="col-md-4 col-sm-9 col-xs-12">
                                                        <input type="number" min="0" class="form-control" id="harga_beli_isi" name="harga_beli_isi" placeholder="Rp." required="required">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Harga / biji<span class="required">*</span></label>
                                                    <div class="col-md-4 col-sm-9 col-xs-12">
                                                        <input type="number" min="0" class="form-control" id="harga_per_biji_isi" name="harga_per_biji_isi" placeholder="Rp." required="required">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Harga / lembar<span class="required">*</span></label>
                                                    <div class="col-md-4 col-sm-9 col-xs-12">
                                                        <input type="number" min="0" class="form-control" id="harga_per_lembar_isi" name="harga_per_lembar_isi" placeholder="Rp." required="required">
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
                            <?php foreach ($obat as $key) : ?>

                                <div class="modal fade bs-example-modal-lga<?php echo $key->id_obat ?> " tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">

                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                                </button>
                                                <h4 class="modal-title" id="myModalLabel">Edit Data User</h4>
                                            </div>
                                            <div class="modal-body">
                                                <form action="<?php echo base_url("kasir/Data_obat/edit") ?>" method="post" class="form-horizontal form-label-left">
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">ID Obat</label>
                                                        <div class="col-md-2 col-sm-9 col-xs-12">
                                                            <input type="text" class="form-control" id="id_obat_edit" name="id_obat_edit" value="<?php echo $key->id_obat ?>" readonly="readonly" required="required">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Paten<span class="required">*</span></label>
                                                        <div class="col-md-4 col-sm-9 col-xs-12">
                                                            <input type="text" class="form-control" id="nama_paten_edit" name="nama_paten_edit" placeholder="Nama Paten" required="required" value="<?php echo $key->nama_paten ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Generic<span class="required">*</span></label>
                                                        <div class="col-md-4 col-sm-9 col-xs-12">
                                                            <input type="text" class="form-control" id="nama_generic_edit" name="nama_generic_edit" placeholder="Nama Generic" required="required" value="<?php echo $key->nama_generic ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Pabrik<span class="required">*</span></label>
                                                        <div class="col-md-4 col-sm-9 col-xs-12">
                                                            <input type="text" class="form-control" id="nama_pabrik_edit" name="nama_pabrik_edit" placeholder="Nama Pabrik" required="required" value="<?php echo $key->nama_pabrik ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis <span class="required">*</span></label>
                                                        <div class="col-md-4 col-sm-9 col-xs-12">
                                                            <select required class="form-control" id="jenis_edit" name="jenis_edit">
                                                                <option>--Pilih--</option>
                                                                <option>Bebas</option>
                                                                <option>Bebas Terbatas</option>
                                                                <option>Narkotik / Psikotropik</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Kategori <span class="required">*</span></label>
                                                        <div class="col-md-4 col-sm-9 col-xs-12">
                                                            <select required class="form-control" id="kategori_edit" name="kategori_edit">
                                                                <option>--Pilih--</option>
                                                                <option>Tablet</option>
                                                                <option>Sirup</option>
                                                                <option>Salep</option>
                                                                <option>Kapsul</option>
                                                                <option>Racikan</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Harga Beli<span class="required">*</span></label>
                                                        <div class="col-md-4 col-sm-9 col-xs-12">
                                                            <input type="number" min="0" class="form-control" id="harga_beli_edit" name="harga_beli_edit" placeholder="Rp." required="required" value="<?php echo $key->harga_beli ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Harga / biji<span class="required">*</span></label>
                                                        <div class="col-md-4 col-sm-9 col-xs-12">
                                                            <input type="number" min="0" class="form-control" id="harga_per_biji_edit" name="harga_per_biji_edit" placeholder="Rp." required="required" value="<?php echo $key->harga_per_biji ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Harga / lembar<span class="required">*</span></label>
                                                        <div class="col-md-4 col-sm-9 col-xs-12">
                                                            <input type="number" min="0" class="form-control" id="harga_per_lembar_edit" name="harga_per_lembar_edit" placeholder="Rp." required="required" value="<?php echo $key->harga_per_lembar ?>">
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
                                    <th>ID Obat</th>
                                    <th>Nama Paten</th>
                                    <th>Nama Generic</th>
                                    <th>Nama Pabrik</th>
                                    <th>Jenis</th>
                                    <th>Kategori</th>
                                    <th>Harga / Biji</th>
                                    <th>Harga / Lembar</th>
                                    <th>Harga Beli</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($obat as $key) : ?>
                                    <tr>
                                        <td><?php echo $key->id_obat ?></td>
                                        <td><?php echo $key->nama_paten ?></td>
                                        <td><?php echo $key->nama_generic ?></td>
                                        <td><?php echo $key->nama_pabrik ?></td>
                                        <td><?php echo $key->jenis ?></td>
                                        <td><?php echo $key->kategori ?></td>
                                        <td><?php echo $key->harga_per_biji ?></td>
                                        <td><?php echo $key->harga_per_lembar ?></td>
                                        <td><?php echo $key->harga_beli ?></td>
                                        <td>
                                            <div class="form-group">
                                                <a href="#" class="btn btn-primary btn-sm glyphicon glyphicon-pencil" data-toggle="modal" data-target=".bs-example-modal-lga<?php echo $key->id_obat ?>"></a>

                                                <a id="id_obat_hapus" name="id_obat_hapus" href="#" data-toggle="modal" data-target="#delete" class="btn btn-danger btn-sm glyphicon glyphicon-remove"></a>
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

<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                <a class="btn btn-primary" href="<?php echo base_url("kasir/data_obat/hapus/$key->id_obat") ?>">Hapus</a>
            </div>
        </div>
    </div>
</div>