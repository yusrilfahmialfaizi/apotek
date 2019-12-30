<body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <?php if ($this->session->flashdata("gagal")): ?>
              <div class="alert alert-danger alert-dismissible fade in" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
                <?php echo $this->session->flashdata("gagal") ?>
              </div>
            <?php endif ?>
            <form action="<?php echo base_url("login/process") ?>" method="post">
              <h1>Login Form</h1>
              <div class="">
                <input type="text" class="form-control" id="username" name="username" placeholder="Username" required="required" />
              </div>
              <div>
                <input type="password" class="form-control" id="password" name="password"  placeholder="Password" required="required" />
              </div>
              <div>
                <div class="col-md-3"></div>
                <div class="col-md-3">
                <!-- <a class="btn btn-default submit" href="">Log in</a> -->
                <input type="submit" name="submit" class="btn btn-default submit" value="Log in">
                </div>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-hospital-o"></i> Klinik & Apotek</h1>
                  <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form>
              <h1>Create Account</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Email" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <a class="btn btn-default submit" href="index.html">Submit</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                  <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
    <?php $this->load->view("partials/main/js/js") ?>
  </body>