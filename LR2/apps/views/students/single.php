<?php /**
 * @var $data
 */ ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/apps/views/inc/header.php" ?>
	<div class="container-single">
		<div class="card mb-4 single">
			<div class="row g-0">
				<div class="col-md-4">
					<img src="<?= $data['selected']['path_photo'] ?>" class="img-fluid rounded-start" alt="...">
				</div>
				<div class="col-md-8">
					<div class="card-body">
						<h5 class="card-title">Студент ID <?= intval($data['selected']['id']) ?></h5>
						<p class="card-text">
							<strong>ФИО:</strong> <?= htmlspecialchars($data['selected']['name']) ?> <br>
							<strong>ID Группы:</strong> <?= intval($data['selected']['id_group']) ?><br>
							<strong>Название группы:</strong> <?= htmlspecialchars($data['selected']['group_name']) ?>
							<br>
							<strong>Дата рождения:</strong> <?= htmlspecialchars($data['selected']['date_birthday']) ?>
							<br><br>
							<a class="btn btn-secondary" href="/students/show">Вернуться</a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/apps/views/inc/footer.php" ?>