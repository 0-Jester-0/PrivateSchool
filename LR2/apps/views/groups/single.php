<?php /**
 * @var $data
 */ ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/apps/views/inc/header.php" ?>
<div class="container-single">
	<div class="card mb-4 single">
		<img src="<?= $data['selected']['path_photo_group'] ?>" class="card-img-top">
		<div class="card-body">
			<h5 class="card-title">Группа ID <?= intval($data['selected']['id']) ?></h5>
			<p class="card-text">
				<strong>Название:</strong> <?= htmlspecialchars($data['selected']['name']) ?> <br>
				<strong>ID направления:</strong> <?= intval($data['selected']['id_course']) ?><br>
				<strong>Название направления:</strong> <?= htmlspecialchars($data['selected']['course_name']) ?><br>
				<strong>Дата образования:</strong> <?= htmlspecialchars($data['selected']['start_date']) ?><br>
			</p>
			<a class="btn btn-secondary" href="/groups/show">Вернуться</a>
		</div>
	</div>
</div>
</div>

<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/apps/views/inc/footer.php" ?>
