<?php
function load($directoria)
{
	if ($handle = opendir($directoria)) 
	{
		while (false !== ($entry = readdir($handle))) 
		{
			if ($entry != "." && $entry != ".." )
			{
				require_once($directoria.'/'.$entry);
			}
		}
		closedir($handle);
	}
}
?>
