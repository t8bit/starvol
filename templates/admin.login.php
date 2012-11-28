<!DOCTYPE html>
<html>
<head>

<?php $rand=rand(); ?>

 <?php header("Content-Type: text/html; charset=ISO-8859-1",true) ?>
 <meta charset="utf-8" />

 <title>{nome do site} | Administração - Login</title>

 <link rel="icon" href="../static/img/icon.ico?1" />
 <link rel="shortcut icon" href="../static/img/icon.ico?1" />

 <link rel="stylesheet" href="../static/css/admin.login.css?<?php echo $rand; ?>" type="text/css" media="screen" />

</head>
<body>

         <div id="center">
          <div class="login-i"></div>
           <div class="padding">
             <div class="text">Administração, área restricta!</div>

                  <form method="post" action="">
                      <div style="clear:both; height:0px;"></div>

                      <div class="error"><img src="../static/img/admin/icn_alert_error.png"><span>Mensagem Erro</span></div>
                      <div class="success"><img src="../static/img/admin/icn_alert_success.png"><span>Mensagem Sucesso</span></div>

                      <div style="clear:both;"></div>

                      <label>Username</label>
                      <input type="text" name="user" /> 

                      <div style="clear:both; height:20px;"></div>

                      <label>Password</label>
                      <input type="password" name="password" /> 
 
                      <div style="clear:both; height:20px;"></div>

                      <input type="submit" value="LOGIN" />
                  </form>
           </div>
         </div>

</body>
</html>