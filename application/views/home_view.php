<?php if (!$this->session->userdata('logged_in')) {
  redirect('user/login');
} ?>

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
              <a class="nav-link js-scroll-trigger" href="welcome">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="welcome">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="blog">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="category">Kategori</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="Datatables">Data Table</a>
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

    <header class="bg-primary text-white">
      <div class="container text-center">
        <h1>Welcome to SMK PGRI 3 MALANG</h1>
      </div>
    </header>

    <div class="container text-center">
			<?php foreach ($artikel as $key): ?>
				<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
					<table style="margin-bottom: 30px;">
						<tr>
							<td>
								<a href="<?php echo base_url() ?>blog/detail/<?php echo $key->id_blog ?>" style="color: black;">
									<img src="<?php echo base_url() ?>img/<?php echo $key->image;?>" alt="Image" width="500" height="400">
									<br>
									<?php echo $key->judul_blog ?>
								</a>
                <br></br>
                <a href="<?php echo base_url() ?>blog/edit/<?php echo $key->id_blog ?>">edit</a>
                <a href='<?php echo base_url() ?>blog/delete/<?php echo $key->id_blog ?>' class='btn btn-sm btn-danger'>Hapus</a>
							</td>
						</tr>
					</table>
				</div>
			<?php endforeach ?>
		</div>





    <!-- <div class="container">
      <?php
        // echo form_open('blog/tambah', array('enctype'=>'multipart/form-data')); 
       ?>
      <table>
        <tr>
          <td>Judul</td>
          <td>:</td>
          <td><input type="text" name="input_judul" value="<?php echo set_value('input_judul'); ?>"></td>
        </tr>
        <tr>
          <td>Content</td>
          <td>:</td>
          <td><input type="text" name="input_content" value=""></td>
        </tr>
        <tr>
          <td>Tanggal </td>
          <td>:</td>
          <td><input type="text" name="input_tanggal" value=""></td>
        </tr>
        <tr>
          <td>Gambar</td>
          <td>:</td>
          <td><input type="file" name="input_gambar"></td>
        </tr>
        <tr>
          <td colspan="3"><input type="submit" name="simpan" value="simpan"></td>
        </tr>
      </table>
    </div> -->

    <div class="="col-md-6">
      <ul class="footer-nav">
        <li><a href="<?php echo base_url() ?>blog/tambah">Tambah</a></li>
      </ul>
    </div>

    <?php 
    // $links ini berasal dari fungsi pagination 
    // Jika $links ada (data melebihi jumlah max per page), maka tampilkan
    if (isset($links)) {
      echo $links;
    } 
    ?>
    

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
