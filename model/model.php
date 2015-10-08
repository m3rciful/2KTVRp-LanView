<?php
function open_database_connection () 
{
	$db_host = 'localhost';
	$db_user = 'pupil';
	$db_pass = '123';
	$db_name = 'sergei_db';

	$link = mysql_connect($db_host, $db_user, $db_pass);
	mysql_select_db ($db_name, $link);
	mysql_query('SET NAMES utf8');
	return $link;
}
function close_database_connection($link)
{
	mysql_close($link);
}
// Выташить всех пользователей
function get_all_pupils() 
{
	$link = open_database_connection();
	$sql = "SELECT * FROM pupils";
	$result = mysql_query($sql, $link);
	$pupils = array();
	if ($result)
	{
		while($row = mysql_fetch_assoc($result))
		{
			$pupils[] = $row;
		}
		close_database_connection($link);
	}
	return $pupils;
}
// Профиль пользователя
function get_pupil($id) 
{
	$link = open_database_connection();
	$sql = "SELECT * FROM pupils WHERE id='$id'";
	$result = mysql_query($sql, $link);
	$pupil = mysql_fetch_assoc($result);
	close_database_connection($link);
	return $pupil;
}
// Доблавение человека вручную
function add_new_pupil($name, $ip, $path)
{
	$link = open_database_connection();

	$query = "INSERT INTO `pupils` (`id`, `name`, `ip`, `path`, `time`) 
			  VALUES (NULL, '$name', '$ip', '$path', CURRENT_TIMESTAMP);";

	mysql_query($query, $link);

	close_database_connection($link);
}
// Удаление человека из списка по ID
function remove_pupil($id)
{
	$link = open_database_connection();

	$query = "DELETE FROM `pupils` WHERE `pupils`.`id` = $id";

	mysql_query($query, $link);

	close_database_connection($link);
}
// Добавление таблицы pupils
function add_table()
{
	$link = open_database_connection();
	$query = "CREATE TABLE IF NOT EXISTS `pupils` ( `id` INT(11) NOT NULL AUTO_INCREMENT , `name` TEXT NOT NULL , `ip` VARCHAR(15) NOT NULL , `path` TEXT NOT NULL , `time` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`id`)) ENGINE = InnoDB CHARACTER SET utf8 COLLATE utf8_general_ci;";

	mysql_query($query, $link);

	close_database_connection($link);
}
// Удаление таблицы pupils
function delete_table()
{
	$link = open_database_connection();
	$query = "DROP TABLE pupils;";

	mysql_query($query, $link);

	close_database_connection($link);
}
?>