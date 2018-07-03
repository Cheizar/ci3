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
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/scrolling-nav.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">SMK PGRI 3 MALANG</a>
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

<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<main role="main">

	<section class="jumbotron text-center">
		<div class="container">
			<h1 class="jumbotron-heading">Data Table Artikel</h1>
			
		</div>
    </section>
    
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <table id="dt-ajax" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tanggal</th>
                            <th>Judul</th>
                            <th>Gambar</th>
                            <th>Kategori</th>
                            <th>Penerbit</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data as $d) : ?>
                            <tr>
                                <td><?php echo $d->id_blog ?></td>
                                <td><?php echo $d->tanggal_blog ?></td>
                                <td><?php echo $d->judul_blog ?></td>
                                <td><?php echo $d->image ?></td>
                                <td><?php echo $d->cat_name ?></td>
                                <td><?php echo $d->penerbit ?></td>
                                <td>
                                    <a href="<?php echo base_url('/blog/edit/') . $d->id_blog ?>" class="btn btn-sm btn-outline-primary">Edit</a>
                                    <a href="<?php echo base_url('/blog/delete/') . $d->id_blog ?>" class="btn btn-sm btn-outline-danger">Delete</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
	
</main>
<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/jquery.dataTables.min.css">
<script src="<?php echo base_url() ?>assets/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/jquery.dataTables.bootstrap4.min.js"></script>

</body>
</html>
