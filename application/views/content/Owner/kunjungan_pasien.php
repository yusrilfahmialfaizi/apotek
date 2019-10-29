        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Kunjungan Pasien</h3>
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
                    <div class="modal fade tambah_obat" role="dialog" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">

                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">
                              <span aria-hidden="true">×</span>
                            </button>
                            <h4 class="modal-title" id="myModalLabel">Obat</h4>
                          </div>
                          <div class="modal-body">
                            <!-- <form action="<?php //echo base_url("owner/kunjungan/keranjang_obat") ?>" method="post" class="form-horizontal form-label-left"> -->
                            <form class="form-horizontal form-label-left">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">ID Obat <span class="required">*</span></label>
                                <div class="col-md-4 col-sm-9 col-xs-12">
                                  <select class="form-control" id="obat" name="obat">
                                    <option value="&nbsp"></option>
                                    <?php foreach ($obat as $key): ?>
                                    <option><?php echo $key->id_obat_praktik ?></option>
                                    <?php endforeach ?>
                                  </select>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Paten </label>
                                <div class="col-md-4 col-sm-9 col-xs-12">
                                  <input type="text" class="form-control" id="nama_paten" name="nama_paten"  readonly="readonly" required="required" placeholder="Nama Paten">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Generic <span class="required">*</span></label>
                                <div class="col-md-4 col-sm-9 col-xs-12">
                                  <input type="text" class="form-control" id="nama_generic" name="nama_generic" placeholder="Nama Generic" required="required" readonly="readonly">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Pabrik <span class="required">*</span></label>
                                <div class="col-md-4 col-sm-9 col-xs-12">
                                  <input type="text" class="form-control" id="nama_pabrik" name="nama_pabrik" readonly="readonly" placeholder="Nama Pabrik" required="required">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis <span class="required">*</span></label>
                                <div class="col-md-4 col-sm-9 col-xs-12">
                                  <input type="text" class="form-control" id="jenis_obat" name="jenis_obat" placeholder="Jenis" readonly="readonly" required="required">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Kategori <span class="required">*</span></label>
                                <div class="col-md-4 col-sm-9 col-xs-12">
                                  <input type="text" class="form-control" id="kategori_obat" name="kategori_obat" placeholder="Kategori" required="required" readonly="readonly">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Per <span class="required">*</span></label>
                                <div class="col-md-4 col-sm-9 col-xs-12">
                                  <select class="form-control" id="per" name="per">
                                    <option value="&nbsp">--Pilih--</option>
                                    <option>Biji</option>
                                    <option>Lembar</option>
                                  </select>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Exp<span class="required">*</span></label>
                                <div class="col-md-4 col-sm-9 col-xs-12">
                                  <select class="form-control" id="category_exp" name="category_exp">
                                    <option value="&nbsp">--Pilih--</option>
                                    
                                  </select>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Stok <span class="required">*</span></label>
                                <div class="col-md-4 col-sm-9 col-xs-12">
                                  <input type="number" min="0" class="form-control" id="stok" name="stok" placeholder="Stok" value="0" required="required" readonly="readonly">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Qty <span class="required">*</span></label>
                                <div class="col-md-4 col-sm-9 col-xs-12">
                                  <input type="number" min="0" class="form-control" id="qty" name="qty" placeholder="Qty" value="1" required="required">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Harga Rp. <span class="required">*</span></label>
                                <div class="col-md-4 col-sm-9 col-xs-12">
                                  <input type="number" class="form-control" id="harga" name="harga" readonly="readonly" placeholder="Rp." required="required" readonly="readonly">
                                </div>
                              </div>
                              
                              <div class="ln_solid"></div>
                              <div class="form-group">
                                <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                  <button type="reset" class="btn btn-primary">Reset</button>
                                  <button type="button" data-dismiss="modal" id="add_cart" class="btn btn-success">Submit</button>
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
                    <?php foreach ($this->cart->contents() as $items): ?>
                      
                    <div class="modal fade edit_obat<?php echo $items['rowid'] ?>" role="dialog" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">

                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                            </button>
                            <h4 class="modal-title" id="myModalLabel">Obat</h4>
                          </div>
                          <div class="modal-body">
                            <!-- <form action="<?php //echo base_url("owner/kunjungan/keranjang_obat") ?>" method="post" class="form-horizontal form-label-left"> -->
                            <form class="form-horizontal form-label-left">
                              <?php $cart   = $this->cart->get_item($items['rowid']) ?>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">ID Obat <span class="required">*</span></label>
                                <div class="col-md-4 col-sm-9 col-xs-12">
                                  <input type="text" class="form-control" name="rowid" id="rowid" value="<?php echo $cart['rowid'] ?>" required="required" readonly>
                                  <input type="text" class="form-control" name="id_obat_edit" id="id_obat_edit" value="<?php echo $cart['id'] ?>" required="required" readonly>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Paten </label>
                                <div class="col-md-4 col-sm-9 col-xs-12">
                                  <input type="text" class="form-control" id="nama_paten_edit" name="nama_paten_edit"  readonly="readonly" required="required" placeholder="Nama Paten" value="<?php echo $items['name'] ?>">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Generic <span class="required">*</span></label>
                                <div class="col-md-4 col-sm-9 col-xs-12">
                                  <input type="text" class="form-control" id="nama_generic_edit" name="nama_generic_edit" placeholder="Nama Generic" required="required" readonly="readonly" value="<?php echo $items['nama_generic'] ?>">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Pabrik <span class="required">*</span></label>
                                <div class="col-md-4 col-sm-9 col-xs-12">
                                  <input type="text" class="form-control" id="nama_pabrik_edit" name="nama_pabrik_edit" readonly="readonly" placeholder="Nama Pabrik" required="required" value="<?php echo $items['nama_pabrik'] ?>">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis <span class="required">*</span></label>
                                <div class="col-md-4 col-sm-9 col-xs-12">
                                  <input type="text" class="form-control" id="jenis_obat_edit" name="jenis_obat_edit" placeholder="Jenis" readonly="readonly" required="required" value="<?php echo $items['jenis'] ?>">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Kategori <span class="required">*</span></label>
                                <div class="col-md-4 col-sm-9 col-xs-12">
                                  <input type="text" class="form-control" id="kategori_obat_edit" name="kategori_obat_edit" placeholder="Kategori" required="required" readonly="readonly" value="<?php echo $items['kategori'] ?>">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Qty <span class="required">*</span></label>
                                <div class="col-md-4 col-sm-9 col-xs-12">
                                  <input type="number" min="0" class="form-control" id="qty_edit" name="qty_edit" placeholder="Qty" required="required" value="<?php echo $items['qty'] ?>">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Per <span class="required">*</span></label>
                                <div class="col-md-4 col-sm-9 col-xs-12">
                                  <input type="text" class="form-control" id="per_edit" name="per_edit" value="<?php echo $items['per'] ?>" required readonly>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Harga Rp. <span class="required">*</span></label>
                                <div class="col-md-4 col-sm-9 col-xs-12">
                                  <input type="number" class="form-control" id="harga_edit" name="harga_edit" readonly="readonly" placeholder="Rp." required="required" readonly="readonly" value="<?php echo $items['price'] ?>">
                                </div>
                              </div>
                              
                              <div class="ln_solid"></div>
                              <div class="form-group">
                                <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                  <button type="reset" class="btn btn-primary">Reset</button>
                                  <button type="button" id="edit_cart" data-dismiss="modal" class="btn btn-success edit_cart">Submit</button>
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
                    <form action="<?php echo base_url("owner/kunjungan/proses") ?>" method="post" class="form-horizontal ">
              
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">ID Kunjungan  <span class="required">*</span></label>
                        <div class="col-md-2 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" id="id_kunjungan" name="id_kunjungan" value="<?php echo $kode ?>" placeholder="ID Kunjungan" name="birthday" readonly="readonly" required="required">
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal <span class="required">*</span></label>
                        <div class="col-md-4 col-sm-9 col-xs-12">
                          <input type="text" class="form-control has-feedback-left" id="single_cal4" placeholder="Tanggal Lahir" aria-describedby="inputSuccess2Status4" name="tgl_kunjungan" required="required">
                          <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                          <span id="inputSuccess2Status4" class="sr-only">(success)</span>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">No. RM</label>
                        <div class="col-md-2 col-sm-9 col-xs-12">
                          <select class="form-control" id="no_rm" name="no_rm">
                            <option value="&nbsp"></option>
                            <?php foreach ($pasien as $key): ?>
                            <option><?php echo $key->no_rm ?></option>
                              
                            <?php endforeach ?>
                          </select>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama</label>
                        <div class="col-md-3 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" id="nm" name="nm" readonly="readonly" placeholder="Nama Pasien">
                        </div>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Kelamin</label>
                        <div class="col-md-3 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" id="jk" name="jk" readonly="readonly" placeholder="Jenis Kelamin">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal Lahir</label>
                        <div class="col-md-3 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" id="tl" name="tl" readonly="readonly" placeholder="Tanggal Lahir">
                        </div>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Usia awal</label>
                        <div class="col-md-2 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" id="us" name="us" readonly="readonly" placeholder="Usia">
                        </div><h5>tahun</h5>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Alamat</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" id="al" name="al" readonly="readonly" placeholder="Alamat">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Diagnosa Keperawatan <span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <textarea id="diagnosa" name="diagnosa" class="form-control" rows="3" placeholder="Diagnosa Keperawatan terhadap pasien" required="required"></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Intervensi <span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <textarea id="intervensi" name="intervensi" class="form-control" rows="3" placeholder="Intervensi" required="required"></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <button class="btn btn-primary btn-md" type="button" data-target=".tambah_obat" data-toggle="modal">+ Tambah Obat</button>
                      </div>
                      <br/>
                      <div class="form-group">  
                        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                          <thead>
                            <tr>
                              <th>ID Obat</th>
                              <th>Nama Paten</th>
                              <th>Nama Generic</th>
                              <th>Nama Pabrik</th>
                              <th>Jenis</th>
                              <th>Kategori</th>
                              <th>Qty</th>
                              <th>Per</th>
                              <th>Harga Obat</th>
                              <th>Subtotal</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody id="detail_cart"></tbody>
                        </table>
                      </div>
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Tarif Rp. <span class="required">*</span></label>
                        <div class="col-md-2 col-sm-9 col-xs-12">
                          <input type="number" class="form-control" id="tarif" name="tarif" placeholder="Tarif Rp." name="birthday" required="required">
                        </div>
                      </div>
                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                          <button type="button" class="btn btn-primary">Cancel</button>
                          <button type="reset" class="btn btn-primary">Reset</button>
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
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
    <script type="text/javascript">
        $(document).ready(function(){
          $("#no_rm").select2({
            placeholder: "Masukkan no RM",
              allowClear: true,
              minimumInputLength : 3
          });

          $("#obat").select2({
            placeholder: "Masukkan Kode Obat",
              allowClear: true,
              minimumInputLength : 2
          });

          $("#no_rm").on('change', function(){
            var no_rm   = $("#no_rm").val();

            $.ajax({
              url       : "<?php echo base_url("owner/kunjungan/rm") ?>",
              type      : "POST",
              dataType  : "JSON",
              data      : {no_rm : no_rm},
              cache     : false,
              success   : function(data){
                $.each(data, function(no_rm,nama,jenis_kelamin,tgl_lahir,usia,alamat){
                  $("#nm").val(data.nama);
                  $("#jk").val(data.jenis_kelamin);
                  $("#tl").val(data.tgl_lahir);
                  $("#us").val(data.usia);
                  $("#al").val(data.alamat);
                });
              }
            })
          });

          $("#obat").on('change', function(){
            var id_obat   = $("#obat").val();

            $.ajax({
              url       : "<?php echo base_url("owner/kunjungan/data_obat") ?>",
              type      : "POST",
              dataType  : "JSON",
              data      : {id_obat : id_obat},
              cache     : false,
              success   : function(data){
                $.each(data, function(nama_paten,nama_generic,nama_pabrik,jenis,kategori){
                  $("#nama_paten").val(data.nama_paten);
                  $("#nama_generic").val(data.nama_generic);
                  $("#nama_pabrik").val(data.nama_pabrik);
                  $("#jenis_obat").val(data.jenis);
                  $("#kategori_obat").val(data.kategori);
                });
              }
            })
          });

          $("#per").on('change', function(){
            var per       = $("#per").val();
            var id_obat   = $("#obat").val();

            $.ajax({
              url       : "<?php echo base_url("owner/kunjungan/harga_obat") ?>",
              type      : "POST",
              dataType  : "JSON",
              data      : {per : per, id_obat : id_obat},
              cache     : false,
              success   : function(data){
                $.each(data, function(harga){
                  $("#harga").val(data.harga);
                });
              }
            })
          });

          $('#add_cart').on('click', function(){
            var obat          = $("#obat").val();
            var nama_paten    = $("#nama_paten").val();
            var qty           = $("#qty").val();
            var harga         = $("#harga").val();
            var nama_generic  = $("#nama_generic").val();
            var nama_pabrik   = $("#nama_pabrik").val();
            var jenis_obat    = $("#jenis_obat").val();
            var kategori_obat = $("#kategori_obat").val();
            var per           = $("#per").val();
            var exp           = $("#category_exp").val();
            alert(exp);
            
            $.ajax({
                url     : "<?php echo base_url('owner/kunjungan/keranjang_obat');?>",
                method  : "POST",
                data    : {obat: obat, nama_paten: nama_paten, qty: qty, harga: harga, nama_generic : nama_generic, nama_pabrik : nama_pabrik, jenis_obat : jenis_obat, kategori_obat : kategori_obat, per : per, exp : exp},
                success: function(data){
                    $('#detail_cart').html(data);
                    // window.load();
                    // $("#obat").val("&nbsp");
                    $("#nama_paten").val("");
                    $("#qty").val("1");
                    $("#harga").val("");
                    $("#nama_generic").val("");
                    $("#nama_pabrik").val("");
                    $("#jenis_obat").val("");
                    $("#kategori_obat").val("");
                    $("#stok").val("0");
                    $("#obat").each(function() { this.selectedIndex = 0 });
                    $("#per").each(function() { this.selectedIndex = 0 });
                    $("#category_exp").each(function() { this.selectedIndex = 0 });

                }
            });
          });
          $('#edit_cart').on('click', function(){
            var rowid   = $("#rowid").val();
            var qty     = $("#qty_edit").val();
            
            $.ajax({
                url     : "<?php echo base_url('owner/kunjungan/edit_cart');?>",
                method  : "POST",
                data    : {rowid: rowid, qty: qty},
                success: function(data){
                    $('#detail_cart').html(data);
                }
            });
          });
 
         
          $('#detail_cart').load("<?php echo site_url('owner/kunjungan/load_cart');?>");
 
         
          $(document).on('click','#remove_cart',function(){
            var row_id  = $(this).attr("data-id"); 
            

            $.ajax({
                url : "<?php echo site_url('owner/kunjungan/hapus_cart');?>",
                method : "POST",
                data : {row_id : row_id},
                success :function(data){
                    $('#detail_cart').html(data);
                }
            });
          });
          $('#obat').change(function(){ 
            var id_obat_praktik=$(this).val();
            $.ajax({
                url : "<?php echo base_url('owner/kunjungan/get_exp');?>",
                method : "POST",
                data : {id_obat_praktik: id_obat_praktik},
                async : true,
                dataType : 'json',
                success: function(data){
                     
                    var html = '';
                    var i;
                    html += '<option value="&nbsp">--Pilih--</option>';
                    for(i=0; i<data.length; i++){
                        html +='<option value='+data[i].exp+'>'+data[i].exp+'</option>';
                    }
                    $('#category_exp').html(html);

                }
            });
            return false;
          });
          $("#per").on('change', function(){
            $("#stok").val("0");
          })
          $("#category_exp").on('change', function(){
            var exp   = $("#category_exp").val();
            var per   = $("#per").val();
            var id_obat_praktik = $("#obat").val();
            $.ajax({
              url       : "<?php echo base_url("owner/kunjungan/get_stok") ?>",
              type      : "POST",
              dataType  : "JSON",
              data      : {id_obat_praktik : id_obat_praktik, exp : exp},
              cache     : false,
              success   : function(data){
                $.each(data, function(stok){
                  if (per == "Lembar") {
                    $("#stok").val(data.jumlah_stok);
                  }else if (per = "Biji") {
                    $("#stok").val(data.jumlah_biji);
                    
                  }
                });
              }
            })
          });

        });  
      </script>