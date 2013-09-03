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
  <body id="home">

    <section class="container">
        <div class="content row">
          
            <?php include "assets/php/header.php"; ?>
            <?php include "assets/php/carousel.php"; ?>
            <section class="main col col-lg-8">
               <?php include "assets/php/article-intro.php"; ?>
               <?php include "assets/php/article-about.php"; ?>
               <?php include "assets/php/article_featured.php"; ?>
          </section>
          <section class="main col col-lg-4">
            <?php include "assets/php/aside-register.php"; ?>
            <?php include "assets/php/aside-gallery.php"; ?>
            <?php include "assets/php/aside-accordion.php"; ?>
           <h2>Live Action Films</h2> 
           <ul>
             <li>1940s Serials</li>
               <ul>
                 <li>Batman (1943)</li>
                 <li>Batman and Robin (1949)</li>
             </ul>

             <li>1960s Batman</li>
               <ul>
                 <li>Batman (1966)</li>
               </ul>
             <li>Burton and Schumacher Series</li>
             <ul>
               <li>Batman (1989)</li>
               <li>Batman Returns (1992)</li>
               <li>Batman Forever (1995)</li>
               <li>Batman & Robin (1997)</li>
             </ul>

             <li>Nolan Series</li>
             <ul>
               <li>Batman Begins (2005)</li>
               <li>The Dark Knight (2008)</li>
               <li>The Dark Knight Rises (2012)</li>
             </ul>

           </ul>

         </section>
        </div>
         <?php include "assets/php/footer.php" ?>
    </section>  
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/myscript.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>