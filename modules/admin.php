<?php
require_once('../settings.php');
require_once('../core/notifications.php');
require_once('../core/db.class.php');
require_once('../core/youtube.class.php');

//classes
class grupo extends db
{
	function __construct()
	{
		$this->connect();
	}
	function adiciona($grupo)
	{
		$query="INSERT INTO grupos VALUES (0,'$grupo',0)";
		$resultado=$this->set($query);
		return $resultado;
	}
	function apaga($id)
	{
		$query="DELETE FROM grupos WHERE id='$id'";
		$resultado=$this->set($query);
		return resultado;	
	}
	
	function lista()
	{
		$query="SELECT id,grupo,nr_musicas FROM grupos";
		$resultado=$this->get($query);
		return $resultado;
	}
}

class musica extends db
{
	function __construct()
	{
		$this->connect();
	}
	function adiciona($autor,$tema,$youtube,$letra,$duracao,$grupo)
	{
		global $sucess,$error;
		$query="INSERT INTO musicas VALUES(0,'$autor','$tema','$youtube','$letra','$duracao','$grupo',0,0)";
		$resultado=$this->set($query);
		$query="UPDATE grupos SET nr_musicas = nr_musicas + 1 WHERE id='$grupo'";
		$resultado=$this->set($query);
		return $resultado;
	}
	function apaga($id)
	{
		global $sucess,$error;
		$query="DELETE FROM musicas WHERE id='$id'";
		$resultado=$this->set($query);
		return $resultado;
	}
	function lista($grupo)
	{
		if($grupo!='')
		{
			$query="SELECT * FROM musicas WHERE grupo='$grupo'";
			$resultado=$this->get($query);
			return $resultado;
		}
		return array();
	}
}

//controladores

//create a error type for this file
$database_error=new error('Item $funcao com sucesso','Erro ao $funcao item');
$empty_var_error=new error('Não preencheu os campos obrigatórios');

//filtra variaveis
foreach($_POST as $key=>$post)
{
	$var[$key]=mysql_real_escape_string(htmlentities($post));
}
$id=filter_var($_GET['id'],FILTER_SANITIZE_NUMBER_INT);
	
//inicia classes
$grupoClasse=new grupo();
$musicaClasse=new musica();
$youtube = new youtube;
	
//variaveis auxiliares
$youtube->url=$var['youtube'];
$info=$youtube->info();
$var['duracao']=$info['tempo'];

//executa funcoes e dispara erros
switch($var['funcao'])
{
	case 'add_grupo':
		if($empty_var_error->empty_error(array($var['grupo'])))
		{
			$result=$grupoClasse->adiciona($var['grupo']);
			$database_error->get_error_from_db($result);
		}
	break;
		
	case 'del_grupo':
		if($empty_var_error->empty_error(array($var['id'])))
		{
			$result=$grupoClasse->apaga($var['id']);
			$database_error->get_error_from_db($result);
		}
	break;
		
	case 'add_musica':
		if($empty_var_error->empty_error(array($var['autor'],$var['tema'],$var['youtube'],$var['letra'],$var['duracao'],$var['grupo'])))
		{
			$result=$musicaClasse->adiciona($var['autor'],$var['tema'],$var['youtube'],$var['letra'],$var['duracao'],$var['grupo']);
			$database_error->get_error_from_db($result);
		}
	break;
		
	case 'del_musica':
		if($empty_var_error->empty_error(array($var['id'])))
		{
			$result=$musicaClasse->apaga($var['id']);
			$database_error->get_error_from_db($result);
		}
	break;
}

//procura erros

//manda para valores para a template
$grupos=$grupoClasse->lista();
$musicas=$musicaClasse->lista($id);

//manda erros para a template

/*echo "<pre>";
print_r($database_error);
print_r($empty_var_error);
echo "</pre>";*/

list($sucess,$error)=$database_error->message();
list($sucess,$error)=$empty_var_error->message();
?>
