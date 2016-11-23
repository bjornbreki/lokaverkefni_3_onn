<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Lokaverkefni</title>

  <!-- CSS  -->
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
</head>
<body>
    <!--Hérna er header menu-->
    <?php require './includes/Header.php'; ?>
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <div class="row center">
        <h3 class="header col s12 light">Veldu einhvern tónlistarflokk.</h3>
      </div>
      <div class="row center">
        </div>
      <br>
    </div>
  </div>


  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m6">
          <div class="icon-block Mynd">
            <h2 class="center light-blue-text"><i class="material-icons">EDM</i></h2>
            <img src="myndir/edm_minni.jpg">
          </div>
        </div>

        <div class="col s12 m6">
          <div class="icon-block Mynd">
            <h2 class="center light-blue-text"><i class="material-icons">Rock</i></h2>
            <img src="myndir/rock_minni.jpg">
          </div>
        </div>

        <div class="col s12 m6">
          <div class="icon-block Mynd">
            <h2 class="center light-blue-text"><i class="material-icons">Classical</i></h2>
            <img src="myndir/classical_minni.jpg">
          </div>
        </div>
      </div>

    </div>
    <br><br>

    <div class="section">

    </div>
  </div>
<!--Footer-->
    <?php require './includes/Footer.php';?>
<!--Social media buttons-->
    <?php require './includes/SocialMediaButtons.php';?>

  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>
