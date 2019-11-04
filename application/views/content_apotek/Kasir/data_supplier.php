<section class="content">
    <div class="container-fluid">
        <!-- Basic Examples -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h1>
                            Data Supplier
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
                    <!-- Tambah Data -->
                    <div class="modal fade" id="TambahData" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="modal-title" id="defaultModalLabel">Tambah Data Supplier</h3>
                                </div>
                                <div class="modal-body">
                                    <form action="<?php echo base_url("kasir/Data_supplier/tambah") ?>" method="post">
                                        <div class="row clearfix">
                                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                <label for="id_supplier_isi">Id Supplier</label>
                                            </div>
                                            <div class="col-lg-4 col-md-10 col-sm-8 col-xs-7">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" id="id_supplier_isi" name="id_supplier_isi" min="0" class="form-control" value="<?php echo $kode ?>" readonly="readonly" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                <label for="nama_isi">Nama Supplier</label>
                                            </div>
                                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" id="nama_isi" name="nama_isi" min="0" class="form-control" placeholder="Nama Supplier" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                <label for="alamat_isi">Alamat Lengkap</label>
                                            </div>
                                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" id="alamat_isi" name="alamat_isi" min="0" class="form-control" placeholder=Alamat Lengkap required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                <label for="no_telepon_isi">Nomor Telepone</label>
                                            </div>
                                            <div class="col-lg-4 col-md-10 col-sm-8 col-xs-7">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="number" id="no_telepon_isi" name="no_telepon_isi" min="0" class="form-control" placeholder="Nomor Telepone " required>
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
                    <?php foreach ($supplier as $key ): ?>

                    <div class="modal fade" id="EditData<?php echo $key->id_supplier ?>"  role="dialog">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="modal-title" id="defaultModalLabel">Edit Data Supplier</h3>
                                </div>
                                <div class="modal-body">
                                    <form action="<?php echo base_url("kasir/Data_supplier/edit") ?>" method="post">
                                        <div class="row clearfix">
                                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                <label for="id_supplier_edit">Id Supplier</label>
                                            </div>
                                            <div class="col-lg-4 col-md-10 col-sm-8 col-xs-7">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" id="id_supplier_edit" name="id_supplier_edit" min="0" class="form-control" value="<?php echo ($key->id_supplier) ?>" readonly="readonly" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                <label for="nama_edit">Nama Supplier</label>
                                            </div>
                                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" id="nama_edit" name="nama_edit" min="0" class="form-control" value="<?php echo($key->nama) ?>" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                <label for="alamat_edit">Alamat Lengkap</label>
                                            </div>
                                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" id="alamat_edit" name="alamat_edit" min="0" class="form-control" value="<?php echo($key->alamat) ?>" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                <label for="no_telepon_edit">Nomor Telepone</label>
                                            </div>
                                            <div class="col-lg-4 col-md-10 col-sm-8 col-xs-7">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="number" id="no_telepon_edit" name="no_telepon_edit" min="0" class="form-control" value="<?php echo($key->no_telepon) ?>" required>
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
                                    <button type="button" class="btn btn-primary waves-effect m-r-20" data-toggle="modal" data-target="#TambahData">Tambah Supplier</button>
                                </div>
                                <div class="form-group">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
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
                                            <tfoot>
                                                <tr>
                                                    <th>Id Supplier</th>
                                                    <th>Nama Supplier</th>
                                                    <th>Alamat</th>
                                                    <th>Nomor Telepon</th>
                                                    <th>Nama Pabrik</th>
                                                    <th>Action</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                            <?php foreach ($supplier as $key): ?>
                                                <tr>
                                                    <td><?php echo $key->id_supplier ?></td>
                                                    <td><?php echo $key->nama ?></td>
                                                    <td><?php echo $key->alamat ?></td>
                                                    <td><?php echo $key->no_telepon ?></td>
                                                    <td><?php echo $key->nama_pabrik ?></td>
                                                    <td>
                                                        <div class="form-line">
                                                            <!-- <div class="form-line"> -->
                                                            <a href="#" data-toggle="modal" data-target="#EditData<?php echo $key->id_supplier ?>" class="btn bg-yellow waves-effect">
                                                                <i class="material-icons">edit</i>
                                                            </a>
                                                            <!-- </div> -->
                                                            <!-- <div class="form-group"> -->
                                                            <a href="<?php echo base_url("kasir/data_supplier/hapus/$key->id_supplier") ?>" id="id_supplier_hapus" name="id_supplier_hapus"  class="btn bg-red waves-effect">
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