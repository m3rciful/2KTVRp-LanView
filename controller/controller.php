<?php

function list_action()
{
	if (!empty($_POST['name']) AND isset($_POST['submit']))
	{
		$name = $_POST['name'];
    	$ip = $_POST['ip'];
    	$path = $_POST['path'];

    	$query = add_new_pupil($name, $ip, $path);
	}
	$pupils = get_all_pupils();
	require "view/templates/list.php";
}
function admin_action()
{
	if (isset($_POST['create']))
	{
    	$query = add_table(); // Добавление таблицы
	}
	if (isset($_POST['delete']))
	{
		$query = delete_table(); // Удаление таблицы
	}
	require "view/templates/admin.php";
}
function show_action($id)
{
	$pupil = get_pupil($id);

	if (isset($_POST['remove']))
	{
    	$query = remove_pupil($id);
    	header("location: ../index.php");
	}
	require "view/templates/show.php";
}
?>