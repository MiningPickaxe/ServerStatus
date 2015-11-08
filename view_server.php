<?php

include('core/init.inc.php');

if (!isset($_GET['sid']) || empty($config['servers'][$_GET['sid']])){
	header('Location: server_list.php');
	die();
}

$server_ip = $config['servers'][$_GET['sid']][0];
$server_port = $config['servers'][$_GET['sid']][1];

$info = fetch_server_info($server_ip, $server_port);



?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xmthl1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title><?php echo $server_ip; ?></title>
	</head>
	<body>
		<div>
			<h1><?php echo $server_ip; ?></h1>
			<?php
			
			if ($info === false){
				echo '<p>Status: Offline</p>';
			}else{
				echo '<p>Status: Online</p>';
				echo '<p>motd: ', $infop['motd'], '</p>';
				echo '<p>Players: ', $info['players'], ' / ', $info['max_players'], '</p>';
			}
			
			?>
		</div>
	</body>
</html>