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

 <title>Página inicial - Starvol</title>

 <link rel="shortcut icon" href="../static/img/icon.ico?<?=$rand;?>" /> 
 <link rel="icon" href="../static/img/icon.ico?<?=$rand;?>" />

 <link rel="stylesheet" type="text/css" href="../static/css/index.style.css?<?php echo $rand; ?>" />

 <script type="text/javascript" src="../static/js/ajax.1.4.2-jquery.min.js"></script>
 <script type="text/javascript" src="../static/js/tipsy.js"></script>
 <script type="text/javascript" src="../static/js/functions.js"></script>

 <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.js"></script>
 <script type="text/javascript" src="../static/js/slimScroll.js"></script>
 <script>
 $(function(){
    $('.letter').slimScroll({
        height: '300px'
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

                  <nav id="menu">
                     <ul class="menu">
                      <li><a href="#" class="current"><b>I</b>nício</a></li>
                      <li><a href="#"><b>P</b>rogramas</a></li>
                      <li><a href="#"><b>T</b>op musical</a></li>
                      <li><a href="#"><b>T</b>op social</a></li>
                      <li><a href="#"><b>B</b>log</a></li>
 
                      <li style="float:right;"><a href="#" onClick="openRegister(); return false;">Registar-me</a></li>
                      <li style="float:right;"><a href="#" onClick="openLogin(); return false;">Login</a></li>
                     </ul>
                  </nav>


                  <div id="language">
                      <a href="#" title="Português" class="flag"><img src="../static/img/pt.png" alt="pt"></a>
                      <a href="#" title="Inglês" class="flag"><img src="../static/img/uk.png" alt="uk"></a>
                      <a href="#" title="Espanhol" class="flag"><img src="../static/img/es.png" alt="es"></a>
                  </div>

                  <div id="playing">
                    <div><span>A TOCAR:</span></div>
                    <div>“ <span>Artista:</span> David Guetta</div>
                    <div><span>Musica:</span> She Wolf (Falling To Pieces) (feat. Sia) ”</div>
                  </div>

              </div>

           <div class="clear"></div>
         </header>



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