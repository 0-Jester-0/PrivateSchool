<?php /**
 * @var $data
 */ ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/apps/views/inc/header.php" ?>
	<div class="container" style="margin-bottom: 10px">
		<h3>Добавить группу</h3>
		<?php if (isset($data['errors'])): ?>
			<div class="err-msg">
				<?php foreach ($data['errors'] as $error): ?>
					<strong style="color: red"><?= $error ?></strong>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>

		<form action="/students/edit/<?= intval($data['selectedItem']['id']) ?>" method="post"
		      enctype="multipart/form-data">
			<div class="mb-3">
				<label class="form-label">ФИО</label>
				<input type="text" class="form-control" name="name" value="<?= htmlspecialchars($data['selectedItem']['name']) ?>">
			</div>
			<label class="form-label">Группа</label>
			<select class="form-select" name="idGroup">
				<option value="">Выберите группу</option>
				<?php foreach ($data['groups'] as $group): ?>
					<?php if ($data['selectedItem']['id_group'] == $group['id']): ?>
						<option selected value="<?= intval($data['selectedItem']['id_group']) ?>">
							<?= htmlspecialchars($group['name']) ?>
						</option>
					<?php else: ?>
						<option value="<?= intval($group['id']) ?>"><?= htmlspecialchars($group['name']) ?></option>
					<?php endif; ?>
				<?php endforeach; ?>
			</select>
			<div class="mb-3">
				<label class="form-label">Фото группы</label>
				<input type="file" class="form-control" name="pathPhoto" disabled>
			</div>
			<div class="mb-3">
				<label class="form-label">Дата рождения</label>
				<input type="date" class="form-control" name="dateBirthday"
				       value="<?= htmlspecialchars($data['selectedItem']['date_birthday']) ?>">
			</div>
			<button type="submit" class="btn btn-primary">Изменить</button>
		</form>
	</div>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/apps/views/inc/footer.php" ?>