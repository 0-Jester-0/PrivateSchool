<?php /**
 * @var $data
 */ ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/apps/views/inc/header.php" ?>
	<div class="container" style="margin-bottom: 10px">
		<h3>Добавить предмет</h3>
		<?php if (isset($data['errors'])): ?>
			<div class="err-msg">
				<?php foreach ($data['errors'] as $error): ?>
					<strong style="color: red"><?= $error ?></strong><br>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>

		<form action="/lessons/add" method="post">
			<label class="form-label">Направление</label>
			<select class="form-select" name="idCourse">
				<option value="">Выберите направление</option>
				<?php foreach ($data['courses'] as $course): ?>
					<option value="<?= intval($course['id']) ?>"><?= htmlspecialchars($course['name']) ?></option>
				<?php endforeach; ?>
			</select>
			<div class="mb-3">
				<label class="form-label">Название предмета</label>
				<input type="text" class="form-control" name="name">
			</div>
			<button type="submit" class="btn btn-primary">Добавить</button>
		</form>
	</div>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/apps/views/inc/footer.php" ?>