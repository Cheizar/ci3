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
    <link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

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
              <a class="nav-link js-scroll-trigger" href="../../welcome">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="../../welcome">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="../../blog">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="../../category">Kategori</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="../../Datatables">Data Table</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header class="bg-primary text-white">
      <div class="container text-center">
        <h1>Welcome to SMK PGRI 3 MALANG</h1>
      </div>
    </header>

    <?php foreach ($detail as $key): ?>
	    <div class="container">
	    	<table>
	    		<tr class="text-center">
	    			<td>
	    				<h3><b><?php echo $key->judul_blog; ?></b><h3>
	    				</td>
	    		</tr>
	    		<tr>
	    			<td class="text-center">
	    				<img src="../../img/<?php echo $key->image;?>" alt="Image" width="500" height="400">
	    			</td>
	    		</tr>
	    		<tr>
	    			<td class="text-justify">
	    				<?php echo $key->content; ?>
	    			</td>
	    		</tr>
	    	</table>
	    </div>
	    <?php endforeach ?>

    

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom JavaScript for this theme -->
    <script src="assets/js/scrolling-nav.js"></script>

  </body>

</html>
