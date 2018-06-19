<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Scrolling Nav - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url() ?>assets/css/scrolling-nav.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="<?php echo base_url() ?>navbar-brand js-scroll-trigger" href="#page-top">SMK PGRI 3 MALANG</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo base_url() ?>welcome">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo base_url() ?>welcome">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo base_url() ?>blog">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo base_url() ?>category">Kategori</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo base_url() ?>Datatables">Data Table</a>
            </li>
          </ul>
          <?php if(!$this->session->userdata('logged_in')) : ?>

                    <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                      <li class="nav-item">
                        <?php echo anchor('user/register', 'Register', array('class' => 'nav-link js-scroll-trigger')); ?>
                      </li>
                      <li class="nav-item">
                        <?php echo anchor('user/login', 'Login', array('class' => 'nav-link js-scroll-trigger')); ?>
                      </li>
                    </ul>

                    </div>

                <?php endif; ?>

                <?php if($this->session->userdata('logged_in')) : ?>
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                      <li class="nav-item">
                        <?php echo anchor('blog/tambah', 'Artikel Baru', array('class' => 'nav-link js-scroll-trigger')); ?>
                      </li>
                      <li class="nav-item">
                        <?php echo anchor('category/create', 'Kategori Baru', array('class' => 'nav-link js-scroll-trigger')); ?>
                      </li>
                      <li class="nav-item">
                        <?php echo anchor('user/logout', 'Logout', array('class' => 'nav-link js-scroll-trigger')); ?>
                      </li>
                    </ul>
                    </div>
                <?php endif; ?>
        </div>
      </div>
    </nav>

    <?php if($this->session->flashdata('user_registered')): ?>
          <?php echo '<div class="alert alert-success" role="alert">'.$this->session->flashdata('user_registered').'</div>'; ?>
        <?php endif; ?>
        <?php if($this->session->flashdata('login_failed')): ?>
          <?php echo '<div class="alert alert-danger">'.$this->session->flashdata('login_failed').'</div>'; ?>
        <?php endif; ?>

        <?php if($this->session->flashdata('user_loggedin')): ?>
          <?php echo '<div class="alert alert-success">'.$this->session->flashdata('user_loggedin').'</div>'; ?>
        <?php endif; ?>

         <?php if($this->session->flashdata('user_loggedout')): ?>
          <?php echo '<div class="alert alert-success">'.$this->session->flashdata('user_loggedout').'</div>'; ?>
        <?php endif; ?>


<div class="container">
  <?php
            $this->form_validation->set_error_delimiters('<div class="alert alert-warning" role="alert">', '</div>');
          ?>
          <?php echo validation_errors(); ?>
          <?php echo form_open('user/register', array('class' => 'needs-validation', 'novalidate' => '')); ?>
      <table>
        <br>
        <br>
        <br>
<h1><center>Registrasi </center></h1>

        <tr>
          <td>Nama Lengkap</td>
          <td>:</td>
          <td><input type="text" name="nama" ></td>
        </tr>
        <br>
        <tr>
          <td>Alamat</td>
          <td>:</td>
          <td><input type="text" name="alamat" ></td>
        </tr>        <tr>
          <td>Telefon</td>
          <td>:</td>
          <td><input type="text" name="telefon" ></td>
        </tr>
        <tr>
          <td>Email</td>
          <td>:</td>
          <td><input type="email" name="email" ></td>
        </tr>
        <tr>
          <td>Username</td>
          <td>:</td>
          <td><input type="text" name="username" ></td>
        </tr>
        <tr>
          <td>Password</td>
          <td>:</td>
          <td><input type="password" name="password" ></td>
        </tr>
        <tr>
          <td>Konfirmasi Password</td>
          <td>:</td>
          <td><input type="password" name="password2" ></td>
        </tr>
        <div class="form-group">
              <label for="">Pilih Paket Membership</label>
              <div class="form-check">
                  <input class="form-check-input" type="radio" name="membership" id="goldmember" value="2" checked>
                  <label class="form-check-label" for="goldmember">Gold Member</label>
              </div>
              <div class="form-check">
                  <input class="form-check-input" type="radio" name="membership" id="silvermember" value="3">
                  <label class="form-check-label" for="silvermember">Silver Member</label>
              </div>
          </div>
        
        <tr>
          <br>
    <tr>
        <td colspan="3"><input type="submit" name="simpan" value="Simpan"></td>
        </tr>
      </table>
      <?php echo form_close(); ?>
    </div>



    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php echo base_url() ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom JavaScript for this theme -->
    <script src="<?php echo base_url() ?>assets/js/scrolling-nav.js"></script>

  </body>

</html>
