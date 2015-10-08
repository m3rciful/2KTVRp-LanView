<?php ob_start() ?>

<div id="page-wrapper">
	<div id="page" class="container">
		<div class="title">
			<h1>Панель управления</h1>
		</div>
		<p>
		Добавить/удалить таблицу <b>pupils</b> из ващей базы.
			<form method="POST">
				<input type="submit" name="create" value="Создать таблицу">
				<input type="submit" name="delete" value="Удалить таблицу">
			</form>
		</p>
	</div>
</div>

<?php $content = ob_get_clean(); ?>

<?php include "view/templates/layout.php";