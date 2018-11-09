<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <?php include 'navbar.php'?>
    <?php include 'footer.html'?>
  </head>
  <body>
  <div class="container">


    <div >  <h1>Crediter</h1></div>

      <form  method="post" class="form-group" action="creditermain.php" >

        <hr>

        <label>Titulaire:</label>
        <input type="text" name="tit" placeholder="Titulaire " class="form-control" ><br>
        <label>Montant:</label>
        <input type="text" name="mont" placeholder="Montant " class="form-control" ><br>
        <input type="submit" name="envoyer" value="envoyer" class="btn btn-info" >


      </form>




</div>

  </body>
</html>
