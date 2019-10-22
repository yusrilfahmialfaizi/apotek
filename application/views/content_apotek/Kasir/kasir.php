<section class="content">
    <div class="container-fluid">
        <!-- Basic Examples -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h1>
                            Kasir
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
                    <!-- Default Size -->
                    <div class="modal fade" id="defaultModal" role="dialog">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="defaultModalLabel">Tambah Keranjang</h4>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="row clearfix">
                                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                <label for="total_harga">ID Barang</label>
                                            </div>
                                            <div class="col-lg-4 col-md-10 col-sm-8 col-xs-7">
                                                <div class="form-group">
                                                    <select class="form-control show-tick" data-live-search="true">
                                                        <option>Hot Dog</option>
                                                        <option>Burger, Shake and a Smile</option>
                                                        <option>Sugar, Spice and all things nice</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                <label for="nama_paten">Nama Paten</label>
                                            </div>
                                            <div class="col-lg-4 col-md-10 col-sm-8 col-xs-7">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="number" id="nama_paten" name="nama_paten" class="form-control" placeholder="Nama Paten" required>
                                                    </div>
                                                </div>
                                            </div>
                                        <!-- </div>
                                        <div class="row clearfix"> -->
                                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                <label for="nama_generic">Nama Generic</label>
                                            </div>
                                            <div class="col-lg-4 col-md-10 col-sm-8 col-xs-7">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" id="nama_generic" name="nama_generic" class="form-control" placeholder="Nama Generic" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                <label for="nama_pabrik">Nama Pabrik</label>
                                            </div>
                                            <div class="col-lg-4 col-md-10 col-sm-8 col-xs-7">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" id="nama_pabrik" name="nama_pabrik" class="form-control" placeholder="Nama Pabrik" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                <label for="expired">Expired</label>
                                            </div>
                                            <div class="col-lg-4 col-md-10 col-sm-8 col-xs-7">
                                                <div class="form-group">
                                                    <select class="form-control show-tick" id="expired" class="expired">
                                                        <option value="">--Pilih--</option>
                                                    </select>
                                                </div>
                                            </div>
                                        <!-- </div>
                                        <div class="row clearfix"> -->
                                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                <label for="per">Per</label>
                                            </div>
                                            <div class="col-lg-4 col-md-10 col-sm-8 col-xs-7" id="per" name="per">
                                                <div class="form-group">
                                                    <select class="form-control show-tick">
                                                        <option value="">--Pilih--</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                <label for="stok">Stok</label>
                                            </div>
                                            <div class="col-lg-4 col-md-10 col-sm-8 col-xs-7">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="number" id="stok" name="stok" min="0" class="form-control" placeholder="Stok " required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                <label for="qty">Qty</label>
                                            </div>
                                            <div class="col-lg-4 col-md-10 col-sm-8 col-xs-7">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="number" id="qty" name="qty" class="form-control" placeholder="Qty" required>
                                                    </div>
                                                </div>
                                            </div>
                                        <!-- </div>
                                        <div class="row clearfix"> -->
                                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                <label for="harga_barang">Harga</label>
                                            </div>
                                            <div class="col-lg-4 col-md-10 col-sm-8 col-xs-7">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="number" id="harga_barang" name="harga_barang" min="0" class="form-control" placeholder="Rp. " required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-link waves-effect">Tambah</button>
                                    <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">Tutup</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="editModal" role="dialog">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="defaultModalLabel">Edit Keranjang</h4>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="row clearfix">
                                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                <label for="total_harga">ID Barang</label>
                                            </div>
                                            <div class="col-lg-4 col-md-10 col-sm-8 col-xs-7">
                                                <div class="form-group">
                                                    <select class="form-control show-tick" data-live-search="true">
                                                        <option>Hot Dog</option>
                                                        <option>Burger, Shake and a Smile</option>
                                                        <option>Sugar, Spice and all things nice</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                <label for="nama_paten">Nama Paten</label>
                                            </div>
                                            <div class="col-lg-4 col-md-10 col-sm-8 col-xs-7">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="number" id="nama_paten" name="nama_paten" class="form-control" placeholder="Nama Paten" required>
                                                    </div>
                                                </div>
                                            </div>
                                        <!-- </div>
                                        <div class="row clearfix"> -->
                                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                <label for="nama_generic">Nama Generic</label>
                                            </div>
                                            <div class="col-lg-4 col-md-10 col-sm-8 col-xs-7">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" id="nama_generic" name="nama_generic" class="form-control" placeholder="Nama Generic" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                <label for="nama_pabrik">Nama Pabrik</label>
                                            </div>
                                            <div class="col-lg-4 col-md-10 col-sm-8 col-xs-7">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" id="nama_pabrik" name="nama_pabrik" class="form-control" placeholder="Nama Pabrik" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                <label for="expired">Expired</label>
                                            </div>
                                            <div class="col-lg-4 col-md-10 col-sm-8 col-xs-7">
                                                <div class="form-group">
                                                    <select class="form-control show-tick" id="expired" class="expired">
                                                        <option value="">--Pilih--</option>
                                                    </select>
                                                </div>
                                            </div>
                                        <!-- </div>
                                        <div class="row clearfix"> -->
                                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                <label for="per">Per</label>
                                            </div>
                                            <div class="col-lg-4 col-md-10 col-sm-8 col-xs-7" id="per" name="per">
                                                <div class="form-group">
                                                    <select class="form-control show-tick">
                                                        <option value="">--Pilih--</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                <label for="stok">Stok</label>
                                            </div>
                                            <div class="col-lg-4 col-md-10 col-sm-8 col-xs-7">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="number" id="stok" name="stok" min="0" class="form-control" placeholder="Stok " required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                <label for="qty">Qty</label>
                                            </div>
                                            <div class="col-lg-4 col-md-10 col-sm-8 col-xs-7">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="number" id="qty" name="qty" class="form-control" placeholder="Qty" required>
                                                    </div>
                                                </div>
                                            </div>
                                        <!-- </div>
                                        <div class="row clearfix"> -->
                                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                <label for="harga_barang">Harga</label>
                                            </div>
                                            <div class="col-lg-4 col-md-10 col-sm-8 col-xs-7">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="number" id="harga_barang" name="harga_barang" min="0" class="form-control" placeholder="Rp. " required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-link waves-effect">Edit</button>
                                    <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">Tutup</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="body">
                        <div class="form-group">
                            <form>
                                <div class="row clearfix">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" class="form-control">
                                                <label class="form-label">No. Invoice</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" class="form-control">
                                                <label class="form-label">Tanggal</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="button" class="btn btn-primary waves-effect m-r-20" data-toggle="modal" data-target="#defaultModal">Tambah Barang</button>
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
                                                    <th>Qty</th>
                                                    <th>Exp</th>
                                                    <th>Per</th>
                                                    <th>Harga</th>
                                                    <th>Subtotal</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>Id Obat</th>
                                                    <th>Nama Paten</th>
                                                    <th>Nama Generic</th>
                                                    <th>Nama Pabrik</th>
                                                    <th>Qty</th>
                                                    <th>Exp</th>
                                                    <th>Per</th>
                                                    <th>Harga</th>
                                                    <th>Subtotal</th>
                                                    <th>Action</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                <tr>
                                                    <td>1234566</td>
                                                    <td>Diapet</td>
                                                    <td>Eroxyanitus Dugomis</td>
                                                    <td>Kimia Farma</td>
                                                    <td>500</td>
                                                    <td>2019-10-22</td>
                                                    <td>Lembar</td>
                                                    <td>5000</td>
                                                    <td>3500</td>
                                                    <td>
                                                        <div class="form-line">
                                                            <!-- <div class="form-line"> -->
                                                            <button type="button" class="btn btn-sm bg-yellow waves-effect" data-toggle="modal" data-target="#editModal">
                                                                <i class="material-icons">edit</i>
                                                            </button>
                                                            <!-- </div> -->
                                                            <!-- <div class="form-group"> -->
                                                            <button type="button" class="btn btn-sm bg-red waves-effect">
                                                                <i class="material-icons">delete</i>
                                                            </button>
                                                            <!-- </div> -->
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row clearfix">
                                        <div class="col-lg-offset-5 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                            <label for="total_harga">Total Harga</label>
                                        </div>
                                        <div class="col-lg-4 col-md-10 col-sm-8 col-xs-7">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="number" id="total_harga" min="0" class="form-control" placeholder="Rp. " required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-lg-offset-5 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                            <label for="total_harga">Discount</label>
                                        </div>
                                        <div class="col-lg-4 col-md-10 col-sm-8 col-xs-7">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="number" id="total_harga" min="0" class="form-control" placeholder="Rp. " required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-lg-offset-5 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                            <label for="total_harga">Bayar</label>
                                        </div>
                                        <div class="col-lg-4 col-md-10 col-sm-8 col-xs-7">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="number" id="total_harga" min="0" class="form-control" placeholder="Rp. " required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-lg-offset-5 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                            <label for="total_harga">Kembali</label>
                                        </div>
                                        <div class="col-lg-4 col-md-10 col-sm-8 col-xs-7">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="number" id="total_harga" min="0" class="form-control" placeholder="Rp. " required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-lg-offset-10 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                            <button type="submit" class="btn btn-lg btn-primary m-t-15 waves-effect">Proses</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>