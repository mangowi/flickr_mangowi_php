<?php
require_once("../../includes/initialize.php");

if (!$session->is_logged_in()) { redirect_to("login.php"); }
?>
<html>
  <head>
    <title>Mangowi Flickr Gallery</title>
    <link href="../stylesheets/main.css" media="all" rel="stylesheet" type="text/css" />
  </head>
  <body>
    <div id="header">
      <h1>Photo Gallery</h1>
    </div>
    <div id="main">
    <h2>Menu</h2>
    
    </div>
    
    <div id="footer">Copyright <?php echo date("Y", time()); ?>, Daniel Mangowi</div>
  </body>
</html>
