<?php
class song extends db
{
	function __construct()
	{
		$this->connect();
	}
	
	function add($autor,$tema,$data)
	{
		$query="INSERT INTO songs VALUES (0,$autor,$tema,$youtube,$data,$duracao)";
	}
}
?>
