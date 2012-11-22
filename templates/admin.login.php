<!DOCTYPE html>
<html>
<head>

<?php $rand=rand(); ?>
 <meta charset="utf-8" />

 <title>{nome do site} | Administração - Login</title>

 <link rel="icon" href="../static/img/icon.ico?1" />
 <link rel="shortcut icon" href="../static/img/icon.ico?1" />

<style>
* {
 outline:none;
}
body, html {
 margin:0; padding:0;
}
body {
 background-color:#f9f9f9; font-family:'Arial', Verdana; font-size:12px;
}
#center {
 box-shadow:1px 4px 20px #d0d0d0; width:400px; height:auto; margin:0 auto; text-align:center; margin-top:10%; background-color:#fff;
}
#center .login-i {
 width:426px; height:70px; position:absolute; margin-top:-15px; margin-left:-26px; background-image:url('../static/img/admin/login-ribbon-admin.png'); background-repeat:no-repeat;
}
#center .padding {
 padding:20px;
}
#center form label {
 float:left; color:#8f8f8f; font-family:'Arial', Verdana; position:relative; left:20px; margin-bottom:5px; font-size:14px;
}
#center form input {
 color:#838383; font-size:15px; font-family:'Arial', verdana;
}
#center form input[type="text"] {
 background-color:#fff; width:290px; border:1px solid #dfdede; border-radius:4px; padding:10px; margin-left:-9px;
}
#center form input[type="text"]:focus {
 border:1px solid #bababa;
}
#center form input[type="password"] {
 background-color:#fff; width:290px; border:1px solid #dfdede; border-radius:4px; padding:10px; margin-left:-9px;
}
#center form input[type="password"]:focus {
 border:1px solid #bababa;
}
#center form input[type="submit"] {
 font-family: Arial, Helvetica, sans-serif; font-size: 12px; color: #ffffff; padding: 10px 10px; width:55%; cursor:pointer;
 background: -moz-linear-gradient(top, #03bafc 0%, #005aa8);
 background: -webkit-gradient(linear, left top, left bottom, from(#03bafc),to(#005aa8));
 -moz-border-radius: 71px;
 -webkit-border-radius: 71px;
 border-radius: 71px;
 border: 0px solid #ffffff;
 -moz-box-shadow:
  0px -5px 0px rgba(255,255,255,0),
  inset 0px 0px 0px rgba(255,255,255,0);
 -webkit-box-shadow:
  0px -5px 0px rgba(255,255,255,0),
  inset 0px 0px 0px rgba(255,255,255,0);
 box-shadow:
  0px -5px 0px rgba(255,255,255,0),
  inset 0px 0px 0px rgba(255,255,255,0);
 text-shadow:
  0px -1px 0px rgba(000,000,000,0.4),
  0px 1px 0px rgba(255,255,255,0.3);
}
#center form input[type="submit"]:hover {
 -moz-box-shadow:
  0px 0px 0px rgba(0,0,0,0),
  inset 0px 0px 10px rgba(18,0,16,0.9);
 -webkit-box-shadow:
  0px 0px 0px rgba(0,0,0,0),
  inset 0px 0px 10px rgba(18,0,16,0.9);
 box-shadow:
  0px 0px 0px rgba(0,0,0,0), 
  inset 0px 0px 10px rgba(18,0,16,0.9);
 text-shadow:
  0px -1px 0px rgba(000,000,000,0.2),
  0px 1px 0px rgba(255,255,255,0.3);
}
#center form input[type="submit"]:focus {
 -moz-box-shadow:
  0px 0px 0px rgba(0,0,0,0),
  inset 0px 0px 14px rgba(18,0,16,0.9);
 -webkit-box-shadow:
  0px 0px 0px rgba(0,0,0,0),
  inset 0px 0px 14px rgba(18,0,16,0.9);
 box-shadow:
  0px 0px 0px rgba(0,0,0,0), 
  inset 0px 0px 14px rgba(18,0,16,0.9);
 text-shadow:
  0px -1px 0px rgba(000,000,000,0.2),
  0px 1px 0px rgba(255,255,255,0.3);
}
#center .padding form div.error {
 color:#e11313; margin-bottom:5px; font-weight:bold; clear:both;
}
#center .padding form div.error span {
 position:relative; top:-4px; left:5px;
}
#center .padding form div.success {
 color:#469a0e; margin-bottom:5px; font-weight:bold; clear:both;
}
#center .padding form div.success span {
 position:relative; top:-4px; left:5px;
}
</style>

</head>
<body>

         <div id="center">
          <div class="login-i"></div>
           <div class="padding">
                  <form method="post" action="">
                      <div style="clear:both; height:25px;"></div>

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