<?php /**
 * @var $data
 */ ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/apps/views/inc/header.php" ?>
	<div class="container" style="margin-bottom: 10px">
		<h3>Добавить студента</h3>
		<?php if (isset($data['errors'])): ?>
			<div class="err-msg">
				<?php foreach ($data['errors'] as $error): ?>
					<strong style="color: red"><?= $error ?></strong><br>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>

		<form action="/students/add" method="post" enctype="multipart/form-data">
			<div class="mb-3">
				<label class="form-label">ФИО</label>
				<input type="text" class="form-control" name="name" value="">
			</div>
			<label class="form-label">Группа</label>
			<select class="form-select" name="idGroup">
				<option selected value="">Выберите группу</option>
				<?php foreach ($data['groups'] as $group): ?>
					<option value="<?= intval($group['id']) ?>"><?= htmlspecialchars($group['name']) ?></option>
				<?php endforeach; ?>
			</select>
			<div class="mb-3">
				<label class="form-label">Фото</label>
				<input type="file" class="form-control" name="pathPhoto">
			</div>
			<div class="mb-3">
				<label class="form-label">Дата рождения</label>
				<input type="date" class="form-control" name="dateBirthday">
			</div>
			<button type="submit" class="btn btn-primary">Добавить</button>
		</form>
	</div>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/apps/views/inc/footer.php" ?>