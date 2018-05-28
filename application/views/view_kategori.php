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

<br>
<br>
<br>
    <br>
    <h1 class="black-text">TAMPIL KATEGORI</h1>
    <br>
    <td><a href='category/create' class='btn btn-sm btn-info'>Tambah</a></td>
    <br>
    <br>


    <div class="card-content table-responsive">
    	<div  class="col-sm-12 col-md-12">
    		<table class="table">
    			<thead class="text-primary">
    				<th>Id Kategori</th>
    				<th>Nama Kategori</th>
    				<th>Deskripsi Kategori</th>
    				<th>Aksi</th>
    			</thead>

    			<tbody>
    				<?php 
    					foreach ($category as $key)  : 
    				?>
    				<tr>
    				<td><?php echo $key->id_kategori ?></td>
    				<td><?php echo $key->cat_name ?></td>
    				<td><?php echo $key->cat_description ?></td>
    				<td><a href="category/edit/<?php echo $key->id_kategori ?>" class='btn btn-info'>edit</a>
                	<a href='category/delete/<?php echo $key->id_kategori ?>' class='btn btn-sm btn-danger'>Hapus</a></td>
    				</tr>
    			</tbody>
    		<?php endforeach;?>
    	</table>
    </div>
</div>
</body>
</html>