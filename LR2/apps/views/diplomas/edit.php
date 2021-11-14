<?php /**
 * @var $data
 */ ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/apps/views/inc/header.php" ?>
	<div class="container" style="margin-bottom: 10px">
		<h3>Изменить диплом</h3>
		<?php if (isset($data['errors'])): ?>
			<div class="err-msg">
				<?php foreach ($data['errors'] as $error): ?>
					<strong style="color: red"><?= $error ?></strong>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>

		<form action="/diplomas/edit/<?= intval($data['selectedItem']['id']) ?>" method="post">
			<label class="form-label">Направление</label>
			<div class="mb-3">
				<select class="form-select" name="idStudent">
					<option value="">Выберите студента</option>
					<?php foreach ($data['students'] as $diploma): ?>
						<?php if ($data['selectedItem']['id_student'] == $diploma['id']): ?>
							<option selected value="<?= intval($data['selectedItem']['id_student']) ?>">
								<?= $diploma['name'] ?>
							</option>
						<?php else: ?>
							<option value="<?= intval($diploma['id']) ?>">
								<?= htmlspecialchars($diploma['name']) ?>
							</option>
						<?php endif; ?>
					<?php endforeach; ?>
				</select>
			</div>
			<div class="mb-3">
				<label class="form-label">Дата получения</label>
				<input type="date" class="form-control" name="yearOfReceipt" value="<?= htmlspecialchars($data['selectedItem']['year_of_receipt']) ?>">
			</div>
			<button type="submit" class="btn btn-primary">Изменить</button>
		</form>
	</div>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/apps/views/inc/footer.php" ?>