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

 <link rel="shortcut icon" href="../static/img/icon.ico?1" /> 
 <link rel="icon" href="../static/img/icon.ico?1" />

 <link rel="stylesheet" type="text/css" href="../static/css/index.style.css?<?php echo $rand; ?>" />

 <script type="text/javascript" src="../static/js/ajax.1.4.2-jquery.min.js"></script>
 <script type="text/javascript" src="../static/js/tipsy.js"></script>
 <script type="text/javascript" src="../static/js/functions.js"></script>

 <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.js"></script>
 <script type="text/javascript" src="../static/js/slimScroll.js"></script>
 <script>
 $(function(){
    $('.letter').slimScroll({
        height: '230px'
    });
 });
 </script>

</head>
<body>

         <header>
              <div class="center">

                  <div id="divlogo">
                      <a href="/" title="Página inicial" class="logo"><div id="logo"></div></a>
                  </div>

                  <div id="language">
                      <a href="#" title="Português" class="flag"><img src="../static/img/pt.png" alt="pt"></a>
                      <a href="#" title="Inglês" class="flag"><img src="../static/img/uk.png" alt="uk"></a>
                      <a href="#" title="Espanhol" class="flag"><img src="../static/img/es.png" alt="es"></a>
                  </div>

              </div>
           <div class="clear"></div>
         </header>

          <div class="clear"><!--//--></div>

         <nav id="menu">
              <ul class="menu">
                 <li><a href="#" class="current"><b>i</b>nício</a></li>
                 <li><a href="#"><b>p</b>rogramas</a></li>
                 <li><a href="#"><b>t</b>op musical</a></li>
                 <li><a href="#"><b>t</b>op social</a></li>
                 <li><a href="#"><b>b</b>log</a></li>

                 <li style="float:right;"><a href="#" onClick="openRegister(); return false;">registar-me</a></li>
                 <li style="float:right;"><a href="#" onClick="openLogin(); return false;">login</a></li>
              </ul>
         </nav>

          <div class="clear"><!--//--></div>

         <div id="bg-popup-register">
           <div class="padding">

                <div id="closebtn" title="Fechar" onClick="closeRegister(); return false;"></div>
                <div class="clear"></div>

                <h1>Registo</h1>

                <div class="clear"></div>

                <form id="register" action="" method="post">
                  <label>Campo 1</label>  <br /> <input type="text">
                   <div class="clear"></div>

                  <label>Campo 2</label> <br /><input type="password">
                   <div class="clear"></div>

                  <label>Campo 3</label> <br /> 
                   <select><option>Opção 1</option> <option>Opção 2</option></select>
                   <div class="clear"></div>

                  <input type="submit" value="Registar-me">
                </form>

           <div class="clear"></div>
           </div>
         </div>

         <div id="bg-popup-login">
           <div class="padding">

                <div id="closebtn" title="Fechar" onClick="closeLogin(); return false;"></div>
                <div class="clear"></div>

                <h1>Login</h1>

                <div class="clear"></div>

                <form id="login" action="" method="post">
                  <label>Email ou Username</label>  <br /> <input type="text">

                   <div class="clear"></div>

                  <label>Password</label> <br /><input type="password">

                  <input id="logincheck" type="checkbox" checked="checked">
                  <label for="logincheck">Manter Ligado?</label>

                   <div class="clear"></div>
        
                  <input type="submit" value="Entrar">
                </form>

           <div class="clear"></div>
           </div>
         </div>

         <div id="overlay"></div>