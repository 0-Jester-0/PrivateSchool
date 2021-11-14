<?php /**
 * @var $data
 */ ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/apps/views/inc/header.php" ?>
	<div class="container" style="margin-bottom: 10px; margin-top: 10px">
		<h3>Добавить оценку</h3>
		<?php if (isset($data['errors'])): ?>
			<div class="err-msg">
				<?php foreach ($data['errors'] as $error): ?>
					<strong style="color: red"><?= $error ?></strong><br>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>
		<form action="/marks/add" method="post">

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
				<label class="form-label">Предмет</label>
				<select class="form-select" name="idLesson">
					<option value="">Выберите предмет</option>
					<?php foreach ($data['lessons'] as $lesson): ?>
						<option value="<?= intval($lesson['id']) ?>"><?= htmlspecialchars($lesson['name']) ?></option>
					<?php endforeach; ?>
				</select>
			</div>
			<label class="form-label">Оценка</label>
			<input class="form-check-input" type="radio" name="value" value="" hidden checked>
			<label class="form-check-label"></label>
			<?php for ($i = 1; $i <= 5; $i++): ?>
				<div class="form-check ">
					<input class="form-check-input" type="radio" name="value" value="<?= $i ?>">
					<label class="form-check-label">
						<?= $i ?>
					</label>
				</div>
			<?php endfor; ?>
			<button type="submit" class="btn btn-primary">Добавить</button>
		</form>
	</div>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/apps/views/inc/footer.php" ?>