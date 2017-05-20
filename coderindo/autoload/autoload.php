<?php

function __autoload($cla)
{
	$ite = new RecursiveIteratorIterator(new RecursiveDirectoryIterator("$_SERVER[DOCUMENT_ROOT]"), RecursiveIteratorIterator::SELF_FIRST);

	foreach ($ite as $val) {
		$fil = $val->getRealpath();
		$dat[] = $fil;
	}

	for ($i=0; $i < count($dat); $i++) {
		$fil = $dat[$i]."\\$cla.php";

		if (file_exists($fil)) {
			include_once "$fil";

		}
		else
		{
			continue;
		}
	}


}
