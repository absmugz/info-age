<?php $this->load->view('admin/components/page_head'); ?>
<body>
    <nav class="navbar navbar-inverse" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo site_url('admin/dashboard'); ?>"><?php echo $meta_title; ?></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="<?php echo site_url('admin/dashboard'); ?>">Dashboard</a></li>
                <li><?php echo anchor('admin/page', 'pages'); ?></li>
                <li><?php echo anchor('admin/user', 'users'); ?></li>

            </ul>


        </div><!-- /.navbar-collapse -->
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-8"><section>
                    <h2>Page name</h2>
                </section></div>
            <div class="col-md-4"><section>
                    <?php echo mailto('absmugz09@gmail.com', '<span class="glyphicon glyphicon-user"></span> absmugz09@gmail.com'); ?><br>
                    <?php echo anchor('admin/user/logout', '<span class="glyphicon glyphicon-off"></span> logout'); ?>

                    <span ></span>
                </section></div>
        </div>
    </div>
    <?php $this->load->view('admin/components/page_tail'); ?>

