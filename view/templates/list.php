<?php ob_start() ?>

<div id="page-wrapper">
	<div id="page">
			<form method="POST">
				Имя: <input type="text" name="name">&nbsp;&nbsp;
				IP: <input type="text" name="ip" value="192.168.0.">&nbsp;&nbsp;
				Путь: <input type="text" name="path" value="/2KTVRp/">&nbsp;&nbsp;
				<input type="submit" name="submit" value="Добавить">&nbsp;
			</form>
	</div>
</div>
<div class="wrapper">
	<div id="three-column" class="container">
		<div><span class="arrow-down"></span></div>
		<?php if (empty($pupils) )  echo "<br><p>Pupils not found</p>"; else { ?>
		<?php foreach ($pupils as $pupil): ?>
		<div id="tbox1">
			<div class="title">
				<h2><a href="index.php/show?id=<?php echo $pupil['id']; ?>"><?php echo $pupil['name']; ?></a></h2>
			</div>
			<p>
				IP: <a href="http://<?php echo $pupil['ip']; ?>"><?php echo $pupil['ip']; ?></a> (<a href="http://<?php echo $pupil['ip']; ?>/phpmyadmin/">phpMyAdmin</a>)<br>
				Путь: <b><?php echo $pupil['path']; ?></b>
			</p>

			<a href="http://<?php echo $pupil['ip'] . $pupil['path'];?>" class="button">Перейти</a> </div>
			<?php endforeach; }?>
	</div>
</div>

<?php $content = ob_get_clean(); ?>

<?php include "view/templates/layout.php";