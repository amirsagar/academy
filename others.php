<!DOCTYPE html>
<html>
<head>
  <title>Academy Template</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href='http://fonts.googleapis.com/css?family=Bree+Serif|Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>

  <!-- Bootstrap -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" media="screen">

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
      <![endif]-->
    </head>
    <body id="others">

     <section class="container">
      <div class="content row">

        <?php include "assets/php/header.php"; ?>

        <?php include "assets/php/article-others.php"; ?>           
        <section class="main col col-lg-4">
          <?php include "assets/php/aside-register.php"; ?>
          <?php include "assets/php/aside-gallery.php"; ?>
          <?php include "assets/php/aside-accordion.php"; ?>
          

        </section>
      </div>
      <?php include "assets/php/footer.php" ?>
    </section>  
    


  </body>
  </html>