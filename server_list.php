<?php

include('core/init.inc.php');

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xmthl1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Multidemonhunters Serverliste</title>
	</head>
	<body>
		<div>
			<?php
			
			foreach ($config['servers'] as $id => $server){
				echo '<p><a href="view_server.php?sid=', $id, '">', $server[0], '</a></p>';
			}
			
			?>
		</div>
	</body>
	
</html>