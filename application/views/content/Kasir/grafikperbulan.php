<!-- page content -->
<div class="right_col" role="main">
  <!-- top tiles -->
  <div class="row tile_count">
    <!-- /top tiles -->
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="dashboard_graph">
          <div class="row x_title">
            <div class="col-md-6">
              <h3>Grafik Penjualan Bulanan</h3>
            </div>
            <div class="col-md-6">
              <div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                <span>December 30, 2014 - January 28, 2015</span> <b class="caret"></b>
              </div>
            </div>
          </div>
          <div class="col-md-9 col-sm-9 col-xs-12">
            <div id="chart_plot_01" class="demo-placeholder"></div>
          </div>
          <div class="col-md-3 col-sm-3 col-xs-12 bg-white">
            <div class="x_title">
              <h2>Grafik Penjualan</h2>
              <div class="clearfix"></div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-6">
              <div>
                <p>Tahunan</p>
                <div class="">
                  <div class="progress progress_sm" style="width: 76%;">
                    <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="80"></div>
                  </div>
                </div>
              </div>
              <div>
                <p>Bulanan</p>
                <div class="">
                  <div class="progress progress_sm" style="width: 76%;">
                    <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="60"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-6">
              <div>
                <p>Harian</p>
                <div class="">
                  <div class="progress progress_sm" style="width: 76%;">
                    <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="40"></div>
                  </div>
                </div>
              </div>
              <div>
              <div class="clearfix"></div>
        </div>
      </div>
    </div>
    <br />
    
  </div>
  <!-- end of weather widget -->
</div>
</div>
</div>
</div>
<!-- /page content -->
<?php $this->load->view("partials/main/foot") ?>
</div>
</div>
<?php $this->load->view("partials/main/js/js") ?>