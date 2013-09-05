<!DOCTYPE html>
<html>
<head>
  <title>Academy Batman</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href='http://fonts.googleapis.com/css?family=Bree+Serif|Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>

  <!-- Bootstrap -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" media="screen">

</head>
<body id="register">

  <section class="container">
    <div class="content row">
     <?php include "assets/php/header.php" ?>
     <section class="main col col-lg-8">
       
       <?php include "assets/php/article-register.php" ?>
       
     </section>
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