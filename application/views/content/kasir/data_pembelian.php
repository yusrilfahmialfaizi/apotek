<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Data Pembelian</h3>
      </div>

      <div class="title_right"></div>
    </div>
  </div>

  <div class="clearfix"></div>

  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Data Pembelian</h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
            <li><a class="close-link"><i class="fa fa-close"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">

          <table id="datatable" class="table table-striped table-bordered">

            <thead>
              <tr>
                <th>Kode Pembelian</th>
                <th>ID User</th>
                <th>ID Suppiler</th>
                <th>Tanggal</th>
                <th>Total Harga</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($pembelian as $key) : ?>
                <tr>
                  <td><?php echo $key->id_pembelian ?></td>
                  <td><?php echo $key->id_user ?></td>
                  <td><?php echo $key->id_supplier ?></td>
                  <td><?php echo $key->tanggal ?></td>
                  <td><?php echo $key->total_harga ?></td>
                </tr>
              <?php endforeach ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Detail Pembelian</h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
            <li><a class="close-link"><i class="fa fa-close"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">

          <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th>Kode Pembelian</th>
                <th>ID Obat</th>
                <th>Nama Paten</th>
                <th>Nama Generic</th>
                <th>Nama Pabrik</th>
                <th>Nama Jenis</th>
                <th>Nama Kategori</th>
                <th>Qty</th>
                <th>Expired</th>
                <th>Harga</th>
                <th>Subtotal</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($dp as $key) : ?>
                <tr>
                  <td><?php echo $key->id_pembelian ?></td>
                  <td><?php echo $key->id_obat ?></td>
                  <td><?php echo $key->nama_paten ?></td>
                  <td><?php echo $key->nama_generic ?></td>
                  <td><?php echo $key->nama_pabrik ?></td>
                  <td><?php echo $key->jenis ?></td>
                  <td><?php echo $key->kategori ?></td>
                  <td><?php echo $key->qty ?></td>
                  <td><?php echo $key->exp ?></td>
                  <td><?php echo $key->harga ?></td>
                  <td><?php echo $key->subtotal ?></td>
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