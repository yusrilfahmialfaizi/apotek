<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Data Stok Obat</h3>
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
                      <!-- <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li> -->
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                              
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>ID Obat</th>
                          <th>Nama Paten</th>
                          <th>Nama Generic</th>
                          <th>Nama Pabrik</th>
                          <th>Jenis</th>
                          <th>Kategori</th>
                          <th>Exp</th>
                          <th>Stok</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach ($obat as $key): ?>
                        <tr>
                          <td><?php echo $key->id_obat_praktik ?></td>
                          <td><?php echo $key->nama_paten ?></td>
                          <td><?php echo $key->nama_generic ?></td>
                          <td><?php echo $key->nama_pabrik ?></td>
                          <td><?php echo $key->jenis ?></td>
                          <td><?php echo $key->kategori ?></td>
                          <td><?php echo $key->exp ?></td>
                          <td><?php echo $key->jumlah_stok ?></td>
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
    
