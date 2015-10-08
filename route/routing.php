<?php

/* echo  $_SERVER['REQUEST_URI']; */
$uri = $_SERVER['REQUEST_URI'];
$u = explode('?', $uri);
$uri=$u[0];

$base_dir = '/debian/';

if ($uri == $base_dir OR $uri == ($base_dir . 'index.php')) 
{
	list_action();
}
elseif ($uri == ($base_dir . 'index.php/admin'))
{
	admin_action();
}
elseif ($uri == ($base_dir . 'index.php/show'))
{
	show_action($_REQUEST['id']);
}
?>