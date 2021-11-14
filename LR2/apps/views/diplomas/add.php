<?php /**
 * @var $data
 */ ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/apps/views/inc/header.php" ?>
	<div class="container" style="margin-bottom: 10px">
		<h3>Добавить диплом</h3>
		<?php if (isset($data['errors'])): ?>
			<div class="err-msg">
				<?php foreach ($data['errors'] as $error): ?>
					<strong style="color: red"><?= $error ?></strong><br>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>

		<form action="/diplomas/add" method="post">
			<label class="form-label">Студент</label>
			<div class="mb-3">
				<select class="form-select" name="idStudent">
					<option value="">Выберите студента</option>
					<?php foreach ($data['students'] as $student): ?>
						<option value="<?= intval($student['id']) ?>"><?= htmlspecialchars($student['name']) ?></option>
					<?php endforeach; ?>
				</select>
			</div>
			<div class="mb-3">
				<label class="form-label">Дата получения</label>
				<input type="date" class="form-control" name="yearOfReceipt">
			</div>
			<button type="submit" class="btn btn-primary">Добавить</button>
		</form>
	</div>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/apps/views/inc/footer.php" ?>