<?php /**
 * @var $data
 */ ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/apps/views/inc/header.php" ?>
<div class="container">
	<div class="container" style="margin-bottom: 10px">
		<h2>Изменить направление</h2>
		<?php if (isset($data['errors'])): ?>
			<div class="err-msg">
				<?php foreach ($data['errors'] as $error): ?>
					<strong style="color: red"><?= $error ?></strong>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>

		<form action="/courses/edit/<?= intval($data['selectedItem']['id']) ?>" method="post">
			<div class="mb-3">
				<label class="form-label">Название напрваления</label>
				<input type="text" class="form-control" name="name" value="<?= htmlspecialchars($data['selectedItem']['name']) ?>">
			</div>
			<button type="submit" class="btn btn-primary">Изменить</button>
		</form>
	</div>
</div>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/apps/views/inc/footer.php" ?>
