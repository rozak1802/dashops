<div class="container">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Dash Ops MyPertamina</a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
            <li><a href="<?php echo base_url('index.php/page/home'); ?>">Home</a></li>
            <li><a href="<?php echo base_url('index.php/page/listcase'); ?>">List Case</a></li>
            <li><a href="<?php echo base_url('index.php/page/poin'); ?>">Inject Poin</a></li>
            <?php
            // Cek role user
            if($this->session->userdata('role') == 'admin'){ // Jika role-nya admin
                ?>
                <li><a href="<?php echo base_url('index.php/page/pengguna'); ?>">Pengguna</a></li>
                <?php
            }
            ?>
            <li><a href="<?php echo base_url('index.php/page/kontak'); ?>">Kontak</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="<?php echo base_url('index.php/auth/logout'); ?>">Logout</a></li>
        </ul>
    </div><!--/.nav-collapse -->
</div>