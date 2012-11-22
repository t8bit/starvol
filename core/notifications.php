<?php
class error
{
	private $error_message;
	private $sucess_message;
	private $debug;
	private $tipo;
	private $message;
	
	function __construct($error_message,$sucess_message='')
	{
		$this->error_message=$error_message;
		$this->sucess_message=$sucess_message;
	}
	function get_error_from_db($error_function)
	{
		if($error_function==1)
		{
			$this->tipo=1;
			$this->message=$this->error_message;
		}
		else
		{
			$this->tipo=0;
			$this->message=$this->sucess_message;
		}
		
	}
	function empty_error($variaveis)
	{
		foreach($variaveis as $var)
		{
			if($var=='')
			{
				$this->tipo=0;
				break;
			}
			else
			{
				$this->tipo=1;
			}
		}
		if($this->tipo==1)
		{
			$this->message=$this->sucess_message;
			return true;
		}
		else
		{
			$this->message=$this->error_message;
			return false;
		}
	}
	
	function message()
	{
		if($this->tipo==0)
		{
			return array('',$this->message);
		}
		else
		{
			return array($this->message,'');
		}
	}
	
	function tipo()
	{
		return $this->tipo;
	}
}

function notification()
{
	
}
?>
