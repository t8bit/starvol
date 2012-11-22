<?php
/*
 TEMPLATE NAME: main.header.php
*/
$rand=rand();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>

<?php 
 header ('Content-type: text/html; charset=ISO-8859-1'); 
?>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

 <meta name="description" content="{descrição do site}" />
 <meta name="keywords" content="{keywords}" />

 <meta property="og:title" content="{titulo}" />
 <meta property="og:type" content="website" />
 <meta property="og:url" content="{url actual}" />
 <meta property="og:image" content="{url}/static/img/fb_share.png" />
 <meta property="og:site_name" content="{nome do site}" />
 <meta property="og:description" content="{descrição}" />

 <title>{nome do site}</title>

 <link rel="shortcut icon" href="icon.ico" /> 
 <link rel="icon" href="icon.ico" /> 

 <link rel="stylesheet" type="text/css" href="static/css/style.css?<?php echo $rand; ?>" />

 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>

</head>
<body>

 <div id="pattern"></div>

 <header>

 </header>

 <nav id="menu">
  <ul class="menu">
   <li><a href="#">Inicio</a></li>
  </ul>
 </nav>