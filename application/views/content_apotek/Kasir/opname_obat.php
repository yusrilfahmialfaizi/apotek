<section class="content">
    <div class="container-fluid">
        <!-- Basic Examples -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h1>
                            Data Opname Obat
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
                    <div class="modal fade" id="TambahModal" role="dialog">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="modal-title" id="TambahModalLabel">Tambah Opname Obat</h3>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="row clearfix">
                                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                <label for="total_harga">Id Opname</label>
                                            </div>
                                            <div class="col-lg-4 col-md-10 col-sm-8 col-xs-7">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" id="id_opname" name="id_opaname" min="0" class="form-control" value="<?php echo $id ?>" placeholder=" " required disabled>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                <label for="total_harga">Id Obat</label>
                                            </div>
                                            <div class="col-lg-4 col-md-10 col-sm-8 col-xs-7">
                                                <div class="form-group">
                                                    <select class="form-control show-tick" name="id_obat" id="id_obat" data-live-search="true">
                                                        <option value="&nbsp">-- Pilih --</option>
                                                        <?php foreach ($obat as $key) { ?>
                                                            <option><?php echo $key->id_obat ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row clearfix">
                                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                <label for="total_harga">Nama Paten</label>
                                            </div>
                                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" id="nama_paten" name="nama_paten" class="form-control" placeholder=" " required disabled>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                <label for="total_harga">Nama Generic</label>
                                            </div>
                                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" id="nama_generic" name="nama_generic" class="form-control" placeholder=" " required disabled>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix" id="exp">
                                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                <label for="total_harga">Expired</label>
                                            </div>
                                            <div class="col-lg-4 col-md-10 col-sm-8 col-xs-7">
                                                <div class="form-group">
                                                    <select class="expired form-control" name="expired" id="expired">
                                                        <option value="">-- Pilih --</option>
                                                        <?php foreach ($detail as $key) {?>
                                                        <option id="expired" class="<?php echo $key->id_obat ?>" value="<?php echo $key->exp ?>"><?php echo $key->exp ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                <label for="total_harga">Stok Asli</label>
                                            </div>
                                            <div class="col-lg-4 col-md-10 col-sm-8 col-xs-7">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="number" id="stok_asli" name="stok_asli" min="0" class="form-control" placeholder=" " required disabled>
                                                    </div>
                                                    <i>
                                                        <p>* dalam lembar</p>
                                                    </i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                <label for="total_harga">Stok Nyata</label>
                                            </div>
                                            <div class="col-lg-4 col-md-10 col-sm-8 col-xs-7">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="number" id="stok_nyata" name="stok_nyata" min="0" class="form-control" placeholder=" " required>
                                                    </div>
                                                </div>
                                                <i>
                                                    <p>* dalam lembar</p>
                                                </i>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                <label for="total_harga">Selisih</label>
                                            </div>
                                            <div class="col-lg-4 col-md-10 col-sm-8 col-xs-7">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="number" id="selisih" name="selisih" min="0" class="form-control" placeholder=" " required disabled>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                <label for="total_harga">Keterangan</label>
                                            </div>
                                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <textarea rows="4" class="form-control no-resize" id="ket" name="ket" placeholder="Keterangan"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-link waves-effect">SAVE CHANGES</button>
                                            <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="body">
                        <div class="form-group">
                            <form>
                                <div class="form-group">
                                    <button type="button" class="btn btn-primary waves-effect m-r-20" data-toggle="modal" data-target="#TambahModal">Tambah Opname Obat</button>
                                    <!-- <button onclick="cok()"></button> -->
                                </div>
                                <div class="form-group">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                            <thead>
                                                <tr>
                                                    <th>Id Opname</th>
                                                    <th>Nama Kasir</th>
                                                    <th>Id Obat</th>
                                                    <th>Nama Paten</th>
                                                    <th>Nama Generic</th>
                                                    <th>Stok Sisa</th>
                                                    <th>Stok Nyata</th>
                                                    <th>Selisih</th>
                                                    <th>Keterangan</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>Id Opname</th>
                                                    <th>Nama Kasir</th>
                                                    <th>Id Obat</th>
                                                    <th>Nama Paten</th>
                                                    <th>Nama Generic</th>
                                                    <th>Stok Sisa</th>
                                                    <th>Stok Nyata</th>
                                                    <th>Selisih</th>
                                                    <th>Keterangan</th>
                                                    <th>Action</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                <?php foreach ($opname as $key) { ?>
                                                    <tr>
                                                        <td><?php echo $key->id_opname ?></td>
                                                        <td><?php echo $key->nama ?></td>
                                                        <td><?php echo $key->nama_paten ?></td>
                                                        <td><?php echo $key->nama_generic ?></td>
                                                        <td><?php echo $key->stok ?></td>
                                                        <td><?php echo $key->stok_nyata ?></td>
                                                        <td><?php echo $key->selisih ?></td>
                                                        <td><?php echo $key->ket ?></td>
                                                        <td>Masih Kurang</td>
                                                        <td>
                                                            <div class="form-line">
                                                                <!-- <div class="form-line"> -->
                                                                <button type="button" onclick="cok()" class="btn bg-yellow waves-effect" data-toggle="modal" data-target="#EditModal">
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
                                                <?php } ?>
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
<script type="text/javascript" src="http://code.jquery.com/jquery-2.2.4.min.js"></script> // harus ditambah loo
<script>
    $(document).ready(function() {
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
                        //   $("#stok_asli").val(data.jumlah_stok);
                        // var html = '';
                        // var i;
                        // html += '<option value="&nbsp">--Pilih--</option>';
                        // for(i=0; i<data.length; i++){
                        //     html +='<option value='+data[i].nama_generic+'>'+data[i].nama_generic+'</option>';
                        // }
                        // $('#exp').html(html);
                    });
                }
            })
        })
        // $('#id_obat').change(function() {
        //     var id_obat = $(this).val();
        //     $.ajax({
        //         url: "<?php echo base_url('kasir/Opname_obat/exp_obat'); ?>",
        //         method: "POST",
        //         data: {
        //             id_obat: id_obat
        //         },
        //         async: true,
        //         dataType: 'json',
        //         success: function(data) {
        //             var html = '';
        //             var i;
        //             // html += '<div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">';
        //             // html += '<label for="total_harga">Expired</label>';
        //             // html += '</div>';
        //             // html += '<div class="col-lg-4 col-md-10 col-sm-8 col-xs-7">';
        //             // html += '<div class="form-group ">';
        //             // html += '<select class="form-control show-tick">';

        //             html += '<option value="&nbsp"> -- Pilih -- </option>';
        //             for (i = 0; i < data.length; i++) {
        //                 html += '<option value=' + data[i].exp + '>' + data[i].exp + '</option>';
        //             }
        //             // html += '</select></div></div>';
        //             // alert(html);
        //             $('.expired').html(html);
        //             // $('#exp').html(html);

        //         }
        //     });
        //     return false;
        // });
        // $("#expired").chained("#id_obat");
    });
</script>
<?php $this->load->view("partial_apotek/main/js/js_table") ?>