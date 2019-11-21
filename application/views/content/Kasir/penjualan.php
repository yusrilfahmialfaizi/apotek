<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <!-- <h3>Form Elements</h3> -->
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    <div class="input-group">
                        <!-- <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn"> -->
                        <!-- <button class="btn btn-default" type="button">Go!</button> -->
                        <!-- </span> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-3 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />
                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                            <label for="id_obat_isi">ID Obat</label>
                            <select class="form-control" id="id_obat_isi" name="id_obat_isi">
                                <option value="&nbsp"></option>
                                <?php foreach ($id_obat as $key) : ?>
                                    <option><?php echo $key->id_obat ?></option>
                                <?php endforeach ?>
                            </select>

                            <label for="nama_paten_isi">Nama Paten</label>
                            <input type="text" id="nama_paten_isi" class="form-control" name="nama_paten_isi" readonly required />
                            <label for="nama_generic_isi">Nama Generic</label>
                            <input type="text" id="nama_generic_isi" class="form-control" name="nama_generic_isi" readonly required />
                            <label for="nama_pabrik_isi">Nama Pabrik</label>
                            <input type="text" id="nama_pabrik_isi" class="form-control" name="nama_pabrik_isi" readonly required />
                            <label for="jenis_obat">Jenis</label>
                            <input type="text" id="jenis_obat" class="form-control" name="jenis_obat" required readonly />
                            <label for="harga_per_lembar">Harga *Lembar</label>
                            <input type="text" id="harga_per_lembar" class="form-control" name="harga_per_lembar" required readonly />
                            <label for="exp">Expired</label>
                            <select class="form-control" id="exp" name="exp">
                                <option value="&nbsp"></option>
                            </select>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="jumlah_stok">Jumlah Stok</label>
                                    <input type="text" id="jumlah_stok" class="form-control" name="jumlah_stok" readonly required />
                                </div>
                                <div class="col-md-6">
                                    <label for="qty">Qty</label>
                                    <input type="number" id="qty" class="form-control" name="qty" min="0" value="1" required />
                                </div>
                            </div>

                            <div class="ln_solid"></div>
                            <button class="btn btn-primary" type="reset">Reset</button>
                            <button type="button" class="btn btn-success" id="submit" disabled>Tambah</button>
                        </form>
                    </div>
                </div>
            </div>


            <div class="col-md-9 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />
                        <form action="#" method="post" data-parsley-validate class="form-horizontal form-label-left">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="no_invoice">No. Invoice</label>
                                    <input type="text" id="no_invoice" class="form-control" name="no_invoice" value="<?php echo $kode; ?>" readonly required />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="operator">Operator</label>
                                    <input type="text" id="operator" class="form-control" name="operator" readonly required value="<?php echo $this->session->userdata("nama"); ?>" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tgl">Tanggal & Waktu</label>
                                    <input type="text" id="tgl" class="form-control" name="tgl" readonly required />
                                </div>
                            </div>
                            <div class="form-group">
                                <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>ID Obat</th>
                                            <th>Nama Paten</th>
                                            <th>Nama Generic</th>
                                            <th>Pabrik</th>
                                            <th>Jenis</th>
                                            <th>Harga</th>
                                            <th>Exp</th>
                                            <th>Jumlah</th>
                                            <th>Subtotal</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody id="penjualan"></tbody>
                                </table>
                            </div>

                            <div class="form-group" id="total_harga"></div>

                            <div class="form-group">
                                <label class="control-label col-md-8 col-sm-3 col-xs-12">Bayar Rp. <span class="required">*</span></label>
                                <div class="col-md-4 col-sm-9 col-xs-12">
                                    <input type="number" class="form-control" min="0" id="bayar" name="bayar" placeholder="Bayar Rp." required="required">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-8 col-sm-3 col-xs-12">Kembali Rp. <span class="required">*</span></label>
                                <div class="col-md-4 col-sm-9 col-xs-12">
                                    <input type="number" class="form-control" min="0" id="kembali" name="kembali" placeholder="Kembali Rp." required="required">
                                </div>
                            </div>

                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-2 col-sm-9 col-xs-12 col-md-offset-8">
                                    <button class="btn btn-primary" type="reset">Reset</button>
                                </div>
                                <button type="button" id="selesai" class="btn btn-success">
                                    <i class="fa fa-print"></i> Selesai</button>
                            </div>
                        </form>
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
<script>
    window.setTimeout("waktu()", 1000);

    function waktu() {
        var waktu = new Date();
        setTimeout("waktu()", 1000);
        $("#tgl").val(waktu);
    }
</script>
<script>
    $(document).ready(function() {

        $("#total").val("<?php echo $this->cart->total() ?>");


        $("#id_obat_isi").select2({
            placeholder: "Masukkan no Kode Obat",
            allowClear: true,
            minimumInputLength: 3
        });

        $("#id_obat_isi").on("change", function() {
            var id_obat = $("#id_obat_isi").val();

            $.ajax({
                url: "<?php echo base_url("Kasir/Penjualan/data_obat") ?>",
                type: "POST",
                dataType: "JSON",
                data: {
                    id_obat: id_obat
                },
                cache: false,
                success: function(data) {
                    $.each(data, function(id_obat, nama_paten, nama_generic, nama_pabrik, jenis, harga_per_lembar,
                        exp, jumlah_stok) {
                        $("#nama_paten_isi").val(data.nama_paten);
                        $("#nama_generic_isi").val(data.nama_generic);
                        $("#nama_pabrik_isi").val(data.nama_pabrik);
                        $("#jenis_obat").val(data.jenis);
                        $("#harga_per_lembar").val(data.harga_per_lembar);
                    });
                }
            });
        });

        $('#id_obat_isi').change(function() {
            var id_obat = $(this).val();
            $.ajax({
                url: "<?php echo base_url('Kasir/penjualan/get_exp'); ?>",
                method: "POST",
                data: {
                    id_obat: id_obat
                },
                async: true,
                dataType: 'json',
                success: function(data) {

                    var html = '';
                    var i;
                    html += '<option value="&nbsp">--Pilih--</option>';
                    for (i = 0; i < data.length; i++) {
                        html += '<option value=' + data[i].exp + '>' + data[i].exp + '</option>';
                    }
                    document.getElementById("submit").disabled = false;
                    $('#exp').html(html);

                }
            });
            return false;
        });

        $("#exp").on("change", function() {
            var id_obat = $("#id_obat_isi").val();
            var exp = $("#exp").val();

            $.ajax({
                url: "<?php echo base_url("Kasir/Penjualan/data_stok") ?>",
                type: "POST",
                dataType: "JSON",
                data: {
                    id_obat: id_obat,
                    exp: exp
                },
                cache: false,
                success: function(data) {
                    $.each(data, function(jumlah_stok) {

                        $("#jumlah_stok").val(data.jumlah_stok);
                    });
                }
            });
        });

        $('#submit').on('click', function() {
            var id_obat = $("#id_obat_isi").val();
            var nama_paten = $("#nama_paten_isi").val();
            var nama_generic = $("#nama_generic_isi").val();
            var nama_pabrik = $("#nama_pabrik_isi").val();
            var jenis_obat = $("#jenis_obat").val();
            var harga = $("#harga_per_lembar").val();
            var exp = $("#exp").val();
            var qty = $("#qty").val();

            $.ajax({
                url: "<?php echo base_url('kasir/penjualan/keranjang_belanja'); ?>",
                method: "POST",
                data: {
                    id_obat: id_obat,
                    nama_paten: nama_paten,
                    nama_generic: nama_generic,
                    nama_pabrik: nama_pabrik,
                    harga: harga,
                    jenis_obat: jenis_obat,
                    qty: qty,
                    exp: exp
                },
                success: function(data) {
                    $('#penjualan').html(data);
                    // window.load();
                    $("#id_obat_isi").val();
                    $("#nama_paten_isi").val("");
                    $("#nama_generic_isi").val("");
                    $("#nama_pabrik_isi").val("");
                    $("#jenis_obat").val("");
                    $("#harga_per_lembar").val("");
                    $("#exp").val("");
                    $("#jumlah_stok").val("");

                    document.getElementById("submit").disabled = true;
                }
            });
        });

        $('#edit_cart').on('click', function() {
            var rowid = $("#rowid").val();
            var qty = $("#qty_edit").val();
            var exp = $("#single_cal3").val();

            $.ajax({
                url: "<?php echo base_url('owner/pembelianobat/updatekeranjang'); ?>",
                method: "POST",
                data: {
                    rowid: rowid,
                    qty: qty,
                    exp: exp
                },
                success: function(data) {
                    $('#pembelian').html(data);
                    $('#total_harga').html(data);
                    // window.load();
                    $("#id_obat_edit").val(null);
                    $("#nama_paten_edit").val("");
                    $("#jumlah_stok_edit").val("");
                    $("#harga_beli_edit").val("");
                    $("#nama_generic_edit").val("");
                    $("#nama_pabrik_edit").val("");
                    $("#jenis_obat_edit").val("");
                    $("#kategori_obat_edit").val("");
                }
            });
        });


        $('#penjualan').load("<?php echo base_url('kasir/penjualan/load_cart'); ?>");


        $(document).on('click', '#remove_cart', function() {
            var row_id = $(this).attr("data-id");


            $.ajax({
                url: "<?php echo site_url('kasir/penjualan/hapus_cart'); ?>",
                method: "POST",
                data: {
                    row_id: row_id
                },
                success: function(data) {
                    $('#penjualan').html(data);
                    $('#total_harga').html(data);
                }
            });
        });

        $("#bayar").on("input", function() {
            var total = $("#total").val();
            var bayar = $('#bayar').val();
            var bayar_default = 0;
            var hasil = (bayar_default + bayar) - total;
            // var hasil = (bayar_default + bayar) - total;
            $('#kembali').val(hasil);
        });

        $("#selesai").on('click', function() {
            var id_penjualan = $("#no_invoice").val();
            var total = $("#total").val();
            var bayar = $("#bayar").val();
            var kembali = $("#kembali").val();

            $.ajax({
                url: "<?php echo base_url("kasir/penjualan/save") ?>",
                type: "POST",
                data: {
                    id_penjualan: id_penjualan,
                    total: total,
                    bayar: bayar,
                    kembali: kembali
                },
                dataType: "JSON",
                cache: false,
                success: function(data) {
                    if (data.msg == "success") {
                        window.open("<?php echo base_url("owner/datakunjungan/print") ?>", "_blank");
                        location.reload(true);
                    }
                }
            })
        })

    });
</script>