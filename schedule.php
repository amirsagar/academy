<!DOCTYPE html>
<html>
  <head>
    <title>Academy Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='http://fonts.googleapis.com/css?family=Bree+Serif|Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body id="schedule">

    <section class="container">
        <div class="content row">
           <?php include "assets/php/header.php" ?>
          <section class="main col col-lg-8">
            <h2>Main content</h2>
            <p>Step 6: Setting Up your Live Site
              Now that we have imported the database, and all of our content should be uploaded, it is time to configure WordPress. At this time, your site should be showing an Error Establishing Database Connection error. To fix this, connect to your website using an FTP client and edit wp-config.php file. Provide the database name, user and password you created earlier in Step 3. Save the wp-config.php file and upload it back to your server. Visit your website, and it should be live now.
              Login to your WordPress admin panel, and go to Settings » General. Click save Options. This will ensure that the site url is corrected anywhere else that needs to be.
              Then go to Settings » Permalink and click Save to ensure that all post links are working fine.</p>
          </section>
          <section class="main col col-lg-4">
            
          </section>
        </div>
         <?php include "assets/php/footer.php" ?>
    </section>  
    

   <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/myscript.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>