<section class="content">
    <div class="container-fluid">
        <!-- Basic Examples -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h1>
                            Data Obat
                        </h1>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!--  -->
                    <!-- Tambah Data -->
                   <div class="modal fade" id="TambahDataObat" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="modal-title" id="TambahDataObat">Tambah Data Obat</h3>
                                </div>
                                <div class="modal-body">
                                    <form action="<?php echo base_url("kasir/Data_obat/tambah") ?>" method="post">
                                        <div class="row clearfix">
                                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                <label for="id_obat_isi">Id Obat</label>
                                            </div>
                                            <div class="col-lg-4 col-md-10 col-sm-8 col-xs-7">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" id="id_obat_isi" name="id_obat_isi" min="0" class="form-control" value="<?php echo $kode ?>" readonly="readonly" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                <label for="nama_paten_isi">Nama Paten</label>
                                            </div>
                                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" id="nama_paten_isi" name="nama_paten_isi" min="0" class="form-control" placeholder="Nama Paten" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                <label for="nama_generic_isi">Nama Generic</label>
                                            </div>
                                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" id="nama_generic_isi" name="nama_generic_isi" min="0" class="form-control" placeholder="Nama Generic" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                <label for="nama_pabrik_isi">Nama Pabrik</label>
                                            </div>
                                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" id="nama_pabrik_isi" name="nama_pabrik_isi" min="0" class="form-control" placeholder="Nama Pabrik" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                        <label class="control-label col-md-2 col-sm-4 col-xs-5">Jenis <span class="required">*</span></label>
                                        <div class="col-lg-10 col-md-2 col-sm-4 col-xs-5">
                                            <select required class="form-control" id="jenis_isi" name="jenis_isi">
                                            <option>--Pilih--</option>
                                            <option>Bebas</option>
                                            <option>Bebas Terbatas</option>
                                            <option>Narkotik / Psikotropik</option>
                                            </select>
                                        </div>
                                        </div>
                                        <div class="form-group">
                                        <label class="control-label col-md-2 col-sm-4 col-xs-5">Kategori <span class="required">*</span></label>
                                        <div class="col-lg-10 col-md-2 col-sm-4 col-xs-5">
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
                                        <div class="row clearfix">
                                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                <label for="harga_per_biji_isi">Harga Per Biji</label>
                                            </div>
                                            <div class="col-lg-4 col-md-10 col-sm-8 col-xs-7">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="number" id="harga_per_biji_isi" name="harga_per_biji_isi" min="0" class="form-control" placeholder="Harga Per Biji" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                <label for="harga_per_lembar_isi">Harga Per Lembar</label>
                                            </div>
                                            <div class="col-lg-4 col-md-10 col-sm-8 col-xs-7">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="number" id="harga_per_lembar_isi" name="harga_per_lembar_isi" min="0" class="form-control" placeholder="Harga Per Lembar" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                <label for="harga_beli_isi">Harga Beli</label>
                                            </div>
                                            <div class="col-lg-4 col-md-10 col-sm-8 col-xs-7">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="number" id="harga_beli_isi" name="harga_beli_isi" min="0" class="form-control" placeholder="Harga Beli" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" id="submit" class="btn btn-link waves-effect">SAVE CHANGES</button>
                                            <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                     <!-- Edit Data-->
                    <?php foreach ($obat as $key ): ?>

                    <div class="modal fade" id="EditData<?php echo $key->id_obat ?>"  role="dialog">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="modal-title" id="defaultModalLabel">Edit Data Obat</h3>
                                </div>
                                <div class="modal-body">
                                    <form action="<?php echo base_url("kasir/Data_obat/edit") ?>" method="post">
                                        <div class="row clearfix">
                                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                <label for="id_obat_edit">Id Obat</label>
                                            </div>
                                            <div class="col-lg-4 col-md-10 col-sm-8 col-xs-7">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" id="id_obat_edit" name="id_obat_edit" min="0" class="form-control" value="<?php echo ($key->id_obat) ?>" readonly="readonly" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                <label for="nama_paten_edit">Nama Paten</label>
                                            </div>
                                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" id="nama_paten_edit" name="nama_paten_edit" min="0" class="form-control" value="<?php echo($key->nama_paten) ?>" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                <label for="nama_generic_edit">Nama Generic</label>
                                            </div>
                                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" id="nama_generic_edit" name="nama_generic_edit" min="0" class="form-control" value="<?php echo($key->nama_generic) ?>" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                <label for="nama_pabrik_edit">Nama Pabrik</label>
                                            </div>
                                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" id="nama_pabrik_edit" name="nama_pabrik_edit" min="0" class="form-control" value="<?php echo($key->nama_pabrik) ?>" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                <label for="jenis_edit">Jenis</label>
                                            </div>
                                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" id="jenis_edit" name="jenis_edit" min="0" class="form-control" value="<?php echo($key->jenis) ?>" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                <label for="kategori_edit">Kategori</label>
                                            </div>
                                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" id="kategori_edit" name="kategori_edit" min="0" class="form-control" value="<?php echo($key->kategori) ?>" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                <label for="harga_per_biji_edit">Harga Per Biji</label>
                                            </div>
                                            <div class="col-lg-4 col-md-10 col-sm-8 col-xs-7">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="number" id="harga_per_biji_edit" name="harga_per_biji_edit" min="0" class="form-control" value="<?php echo($key->harga_per_biji) ?>" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                <label for="harga_per_lembar_edit">Harga Per Lembar</label>
                                            </div>
                                            <div class="col-lg-4 col-md-10 col-sm-8 col-xs-7">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="number" id="harga_per_lembar_edit" name="harga_per_lembar_edit" min="0" class="form-control" value="<?php echo($key->harga_per_lembar) ?>" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                <label for="harga_beli_edit">Harga Beli</label>
                                            </div>
                                            <div class="col-lg-4 col-md-10 col-sm-8 col-xs-7">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="number" id="harga_beli_edit" name="harga_beli_edit" min="0" class="form-control" value="<?php echo($key->harga_beli) ?>" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" id="submit" class="btn btn-link waves-effect">SAVE CHANGES</button>
                                            <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach ?>

                    <div class="body">
                        <div class="form-group">
                            <form>
                                <div class="form-group">
                                    <button type="button" class="btn btn-primary waves-effect m-r-20" data-toggle="modal" data-target="#TambahDataObat">Tambah Obat</button>
                                </div>
                                <div class="form-group">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                            <thead>
                                                <tr>
                                                    <th>Id Obat</th>
                                                    <th>Nama Paten</th>
                                                    <th>Nama Generic</th>
                                                    <th>Nama Pabrik</th>
                                                    <th>Jenis</th>
                                                    <th>Kategori</th>
                                                    <th>Harga Per Biji</th>
                                                    <th>Harga Per Lembar</th>
                                                    <th>Harga Beli</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>Id Obat</th>
                                                    <th>Nama Paten</th>
                                                    <th>Nama Generic</th>
                                                    <th>Nama Pabrik</th>
                                                    <th>Jenis</th>
                                                    <th>Kategori</th>
                                                    <th>Harga Per Biji</th>
                                                    <th>Harga Per Lembar</th>
                                                    <th>Harga Beli</th>
                                                    <th>Action</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                <?php foreach ($obat as $key): ?>
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
                                                        <div class="form-line">
                                                            <!-- <div class="form-line"> -->
                                                            <a href="#" data-toggle="modal" data-target="#EditData<?php echo $key->id_obat ?>" class="btn bg-yellow waves-effect">
                                                                <i class="material-icons">edit</i>
                                                            </a>
                                                            <!-- </div> -->
                                                            <!-- <div class="form-group"> -->
                                                            <a href="<?php echo base_url("kasir/data_obat/hapus/$key->id_obat") ?>" id="id_obat_hapus" name="id_obat_hapus"  class="btn bg-red waves-effect">
                                                                <i class="material-icons">delete</i>
                                                            </a>
                                                            <!-- </div> -->
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php endforeach ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>