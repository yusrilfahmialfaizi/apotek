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
                    <!-- Default Size -->
                    <div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="modal-title" id="defaultModalLabel">Tambah Data Supplier</h3>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="row clearfix">
                                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                <label for="total_harga">Id Obat</label>
                                            </div>
                                            <div class="col-lg-4 col-md-10 col-sm-8 col-xs-7">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="number" id="id_obat" min="0" class="form-control" placeholder=" " required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                <label for="total_harga">Nama Obat</label>
                                            </div>
                                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" id="nama_obat" min="0" class="form-control" placeholder=" " required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                <label for="total_harga">Nama Supplier</label>
                                            </div>
                                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" id="nama_supplier" min="0" class="form-control" placeholder=" " required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                <label for="total_harga">Harga Beli</label>
                                            </div>
                                            <div class="col-lg-4 col-md-10 col-sm-8 col-xs-7">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="number" id="harga_beli" min="0" class="form-control" placeholder=" " required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                <label for="total_harga">Satuan</label>
                                            </div>
                                            <div class="col-lg-4 col-md-10 col-sm-8 col-xs-7">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" id="satuan" min="0" class="form-control" placeholder=" " required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                <label for="total_harga">Jumlah</label>
                                            </div>
                                            <div class="col-lg-4 col-md-10 col-sm-8 col-xs-7">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="number" id="jumlah" min="0" class="form-control" placeholder=" " required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                <label for="total_harga">Total</label>
                                            </div>
                                            <div class="col-lg-4 col-md-10 col-sm-8 col-xs-7">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="number" id="total" min="0" class="form-control" placeholder=" " required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-link waves-effect">SAVE CHANGES</button>
                                    <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="body">
                        <div class="form-group">
                            <form>
                                <div class="form-group">
                                    <button type="button" class="btn btn-primary waves-effect m-r-20" data-toggle="modal" data-target="#defaultModal">Tambah Supplier</button>
                                </div>
                                <div class="form-group">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                            <thead>
                                                <tr>
                                                    <th>Id Obat</th>
                                                    <th>Nama Obat</th>
                                                    <th>Nama Supplier</th>
                                                    <th>Harga Beli</th>
                                                    <th>Satuan</th>
                                                    <th>Jumlah</th>
                                                    <th>Total</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>Id Obat</th>
                                                    <th>Nama Obat</th>
                                                    <th>Nama Supplier</th>
                                                    <th>Harga Beli</th>
                                                    <th>Satuan</th>
                                                    <th>Jumlah</th>
                                                    <th>Total</th>
                                                    <th>Action</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                <tr>
                                                    <td>008763525</td>
                                                    <td>Mixagrip</td>
                                                    <td>PT. Sehat Media Farma</td>
                                                    <td>5000</td>
                                                    <td>Kaplet</td>
                                                    <td>100</td>
                                                    <td>500000</td>
                                                    <td>
                                                        <div class="form-line">
                                                            <!-- <div class="form-line"> -->
                                                            <button type="button" class="btn bg-yellow waves-effect">
                                                                <i class="material-icons">edit</i>
                                                            </button>
                                                            <!-- </div> -->
                                                            <!-- <div class="form-group"> -->
                                                            <button type="button" class="btn bg-red waves-effect">
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
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>