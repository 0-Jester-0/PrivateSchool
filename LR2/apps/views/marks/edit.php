<?php /**
 * @var $data
 */ ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/apps/views/inc/header.php" ?>
	<div class="container" style="margin-bottom: 10px">
		<h3>Изменить оценку</h3>
		<?php if (isset($data['errors'])): ?>
			<div class="err-msg">
				<?php foreach ($data['errors'] as $error): ?>
					<strong style="color: red"><?= $error ?></strong>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>

		<form action="/marks/edit/<?= $data['selectedItem']['id'] ?>" method="post">
			<label class="form-label">Студент</label>
			<select class="form-select" name="idStudent">
				<option value="">Выберите студента</option>
				<?php foreach ($data['students'] as $student): ?>
					<?php if ($data['selectedItem']['id_student'] == $student['id']): ?>
						<option selected value="<?= $data['selectedItem']['id_student'] ?>">
							<?= $student['name'] ?>
						</option>
					<?php else: ?>
						<option value="<?= $student['id'] ?>"><?= $student['name'] ?></option>
					<?php endif; ?>
				<?php endforeach; ?>
			</select>

			<label class="form-label">Предмет</label>
			<select class="form-select" name="idLesson">
				<option value="">Выберите предмет</option>
				<?php foreach ($data['lessons'] as $lesson): ?>
					<?php if ($data['selectedItem']['id_lesson'] == $lesson['id']): ?>
						<option selected value="<?= intval($data['selectedItem']['id_lesson']) ?>">
							<?= htmlspecialchars($lesson['name']) ?>
						</option>
					<?php else: ?>
						<option value="<?= intval($lesson['id']) ?>"><?= htmlspecialchars($lesson['name']) ?></option>
					<?php endif; ?>
				<?php endforeach; ?>
			</select>

			<label class="form-label">Оценка</label>
			<?php for ($i = 1; $i <= 5; $i++): ?>
				<div class="form-check ">
					<?php if ($data['selectedItem']['value'] == $i): ?>
						<input class="form-check-input" type="radio" name="value"
						       value="<?= intval($data['selectedItem']['value']) ?>" checked>
						<label class="form-check-label">
							<?= $i ?>
						</label>
					<?php else: ?>
						<input class="form-check-input" type="radio" name="value" value="<?= $i ?>">
						<label class="form-check-label">
							<?= $i ?>
						</label>
					<?php endif; ?>
				</div>
			<?php endfor; ?>

			<button type="submit" class="btn btn-primary">Изменить</button>
		</form>
	</div>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/apps/views/inc/footer.php" ?>