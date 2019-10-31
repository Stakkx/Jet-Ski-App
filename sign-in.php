<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>SIGN-IN - VOUS CONNECTER</title>
  <!-- PRESENTATION -->
  <?php
  require('inc/head.php');
  require('inc/header.php');


  ?>
  <!-- CONTENU PRINCIPAL -->
  <main class="container box-box">
    <br>
    <br>
    <br>
    <br>
    <div class="row">

      <h1>CONNEXION - SIGN IN</h1>
      <div class="offset-md-4 col-md-4">
        <form>
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
          </div>
          <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>

    <br>
    <br>
    <br>


    <div class="row">

      <div class="col-md-12">
      <p>
        Si vous n'avez pas de compte, merci de vous inscrire pour continuer.
      </p>
          <button type="submit" href="sign-up.php" onclick="location.href='sign-up.php'" class="btn btn-primary">S'enregistrer</button>
      </div>
    </div>



    <div class="row">
      <!-- ROW -->

      <div class="col-md-12">
        <!-- COL -->

        <br>
        <br>
        <br>
        <br>
        <br>
        <br>




      </div> <!-- FIN COL -->

    </div> <!-- FIN ROW -->

  </main>
  <!-- FIN CONTENU PRINCIPAL -->
  <?php
  require('inc/footer.php');
  ?>