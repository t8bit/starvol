<!DOCTYPE html>
<html>
<head>

<?php $rand=rand(); ?>
 <meta charset="utf-8" />

 <title>{nome do site} | Administração - (+ current page)</title>

 <link rel="icon" href="../static/img/icon.ico?1" />
 <link rel="shortcut icon" href="../static/img/icon.ico?1" />

 <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>

 <link rel="stylesheet" href="../static/css/admin.style.css?<?php echo $rand; ?>" type="text/css" media="screen" />

 <script type="text/javascript" src="../static/js/jquery-1.8.2.min.js?<?php echo $rand; ?>"></script>
 <script type="text/javascript" src="../static/js/jquery.equalHeight.js"></script>
 <script type="text/javascript" src="../static/js/jquery.tablesorter.min.js?<?php echo $rand; ?>"></script>
 <script type="text/javascript">
  $(document).ready(function()  { 
    $(".table").tablesorter(); 
   }
  );
 </script>

</head>
<body>

 <header id="header">
        <hgroup>
                <h1 class="site_title"><a href="/">{nome do site}</a></h1>
                <h2 class="section_title"></h2>
                <div class="btn_view_site"><a href="/" target="_blank" class="button" id="gray">» VER WEBSITE</a></div>
        </hgroup>
 </header>

 <section id="secondary_bar">
        <div class="user">
                <p>Bem vindo/a <u>{user}</u></p>
                <a class="logout_user" href="#" title="Logout">Logout</a>
        </div>

        <div class="breadcrumbs_container">
         <article class="breadcrumbs">
                 <a href="/">Página inicial</a> 
                 <div class="breadcrumb_divider"></div> 
                 <a class="current">{current page} (ex: index)</a>
         </article>
        </div>
 </section>

 <div class="clear"><!--//--></div>

 <section id="left">
        <aside id="sidebar" class="column">
                <div style="height:25px;"></div>
		<ul>
	                <li onclick="location.href='#'" class="icn_folder"><a>Página inicial</a></li>
	                <li onclick="location.href='#'" class="icn_view_users"><a>Gerir Grupos</a></li>
			<li onclick="location.href='#'" class="icn_audio"><a>Gerir Músicas / Vídeos</a></li>
			<li onclick="location.href='#'" class="icn_profile"><a>Gerir Membros</a></li>
			<li onclick="location.href='#'" class="icn_tags"><a>Gerir Banners</a></li>
			<li onclick="location.href='#'" class="icn_settings"><a>Opções do Website</a></li>
                        <li onclick="location.href='#'" class="icn_jump_back"><a>Logout</a></li>
		</ul>
        </aside>
 <div style="height:0; clear:both;"></div>
 </section>

 <section id="right">
         <?php if($error):?><h4 class="alert_error"><?=$error;?></h4><?php endif;?>
		
		
         <?php if($sucess):?><h4 class="alert_success"><?=$sucess;?></h4><?php endif;?>


<?php if(!isset($_GET['id'])): ?>
         <article class="module width_full">
			
          <header><h3>Grupos</h3></header>
				
           <div class="module_content">

                   <header style="width:100%!important; border-radius:30px!important; margin:0 auto; margin-bottom:10px;"><h3>Criar um novo Grupo</h3></header>

                        <fieldset>
	                <form action="" method="post">
		         <label for="grupo">Nome do grupo:</label> 
                         <input type="text" name="grupo" value="" id="grupo">
		          <input name="funcao" value="add_grupo" type="hidden">
		         <div style="clear:both; position:relative; top:8px; left:10px;"><input type="submit" value="Criar Grupo" /></div>
	                </form>
                        </fieldset>

                   <header style="width:100%!important; border-radius:30px!important; margin:0 auto; margin-bottom:15px;"><h3>Gerir Grupos</h3></header>

                   <table class="table" cellspacing="0">
                      <thead>
                        <tr> 
                         <th>ID</th> 
                         <th>Nome do Grupo</th> 
                         <th>Número de Músicas</th> 
                         <th>Link do Grupo</th> 
                         <th>Opções</th>
                        </tr> 
                      </thead>

                     <tbody>
	              <?php 
                       foreach($grupos as $grupo): 
                      ?>
                      <tr>
                       <td><?=$grupo->id;?></td>
                       <td><a href="?id=<?=$grupo->id;?>"><?=$grupo->grupo;?></a></td>
                       <td><?=$grupo->nr_musicas;?></td>
                       <td><a href="?id=<?=$grupo->id;?>">Ver</a></td>
                       <td>
                        <form action="" method="post">
	                 <input type="submit" value="X" title="Apagar" onclick="return confirm('Tens a certeza que queres apagar este grupo?')">
	                  <input name="id" value="<?=$grupo->id;?>" type="hidden">
	                  <input name="funcao" value="del_grupo" type="hidden">
	                </form>
                       </td>
                      </tr>
                      <?php 
                       endforeach; 
                      ?>
                     </tbody>
                   </table>
           </div>
         </article>
<?php endif; ?>

<div style="clear:both;height:20px;"></div>

<?php if(isset($_GET['id'])): ?>
         <article class="module width_full">
			
          <header><h3>Gerir Músicas</h3></header>
				
           <div class="module_content">

                   <header style="width:100%!important; border-radius:30px!important; margin:0 auto; margin-bottom:10px;"><h3>Adicionar música</h3></header>

                        <fieldset>
                        <form action="" method="post">
                  	 <!--$autor,$tema,$youtube,$duracao,$grupo-->
	                 <label>Autor</label>       <input type="text" value="" name="autor">   <div style="clear:both; height:10px;"></div>
	                 <label>Tema</label>        <input type="text" value="" name="tema">    <div style="clear:both; height:10px;"></div>
	                 <label>Youtube</label> <input type="text" value="" name="youtube"> <div style="clear:both; height:10px;"></div>
					<label>Letra</label><textarea name='letra'></textarea><div style="clear:both; height:10px;"></div>
	                  <input value="<?php echo $_GET['id'] ?>" name="grupo" type="hidden">
	                  <input value="add_musica" name="funcao" type="hidden">

	                 <div style="clear:both; position:relative; top:8px; left:10px;"><input type="submit" value="Adicionar música"></div>	
                        </form>
                        </fieldset>

                   <header style="width:100%!important; border-radius:30px!important; margin:0 auto; margin-bottom:15px;"><h3>Gerir Músicas</h3></header>

                   <table class="table" cellspacing="0">
                      <thead>
                        <tr> 
                         <th>ID</th> 
                         <th>Autor</th> 
                         <th>Tema</th> 
                         <th>Youtube</th> 
                         <th>Duração</th>
                         <th>ID Grupo</th>
                         <th>Gostos</th>
                         <th>Não Gostos</th>
                         <th>Acções</th>
                        </tr> 
                      </thead>

                     <tbody>
	              <?php 
                       foreach($musicas as $musica):
                      ?>
                      <tr>
                       <td><?=$musica->id;?></td>
                       <td><?=$musica->autor;?></td>
                       <td><?=$musica->tema;?></td>
                       <td><a href="?id=<?=$musica->youtube;?>">Ver</a></td>
                       <td><?=$musica->duracao;?></td>
                       <td><?=$musica->grupo;?></td>
                       <td><?=$musica->gosto;?></td>
                       <td><?=$musica->n_gosto;?></td>
                       <td>
                        <form action="" method="post">
							<input name="id" value="<?=$musica->id;?>" type="hidden">
							<input name="funcao" value="del_musica" type="hidden">
							<input type="submit" value="X" title="Apagar" onclick="return confirm('Tens a certeza que queres apagar esta música?')">
						</form>
                       </td>
                      </tr>
                      <?php 
                       endforeach; 
                      ?>
                     </tbody>
                   </table>
           </div>
         </article>
<?php endif; ?>
 </section>

<div style="clear:both; height:50px;"></div>

</body>
</html>
