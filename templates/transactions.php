<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <?php include 'navbar.php';
     include 'footer.html';
    include '../classes/dbconnect.class.php';
    include '../classes/compte.class.php';
  ?>
  <style type="text/css">
		section {
			margin-top: 100px;
		}
	</style>
</head>
<body>
  <div class="container">
		<section class="col-lg-12 text-center">
			<a href="crediter.php"><button class="btn btn-danger">Crediter</button></a>
				<a href="debiter.php"><button class="btn btn-danger">Debiter</button></a>
				<a href="versement.php"><button class="btn btn-danger">Versement</button></a>
	    </section>
	</div>

  </body>
</html>
