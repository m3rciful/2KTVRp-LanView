

<?php ob_start() ?>

<div id="page-wrapper">
	<div id="page" class="container">
		<div class="title">
			<h2><?php echo $pupil['name']; ?></h2>
		</div>
		<form method="POST">
				<input type="submit" name="edit" value="Изменить">&nbsp;
				<input type="submit" name="remove" value="Удалить">
		</form>
	</div>
</div>

<div class="wrapper">
	<div id="three-column" class="container">
		<div><span class="arrow-down"></span></div>
		<div id="tbox4">
			<p><br>
				Добавлен: <b><?php echo $pupil['time']; ?></b><br>
				IP: <a href="http://<?php echo $pupil['ip']; ?>"><?php echo $pupil['ip']; ?></a> (<a href="http://<?php echo $pupil['ip']; ?>/phpmyadmin/">phpMyAdmin</a>)<br>
				Путь: <b><?php echo $pupil['path']; ?></b>
			</p>

			<a href="http://<?php echo $pupil['ip'] . $pupil['path'];?>" class="button">Перейти</a> </div>
		</div>
	</div>
</div>

<?php $content = ob_get_clean(); ?>

<?php include "view/templates/layout.php";