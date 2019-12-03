<body class="nav-sm">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <?php $this->load->view("partials/main/nav_title") ?>
                    <div class="clearfix"></div>
                    <?php $this->load->view("partials/main/profile_menu") ?>
                    <br />
                    <?php $this->load->view("partials/main/sidebar/sidebar_kasir") ?>
                    <?php $this->load->view("partials/main/footer_buttons") ?>
                </div>
            </div>
            <?php $this->load->view("partials/main/navigation") ?>