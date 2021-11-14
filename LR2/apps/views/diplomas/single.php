<?php /**
 * @var $data
 */ ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/apps/views/inc/header.php" ?>
	<div class="container-single">
		<div class="card mb-4 single">
			<div class="row g-0">
				<div class="col-md-4">
					<img src="<?= $data['selected']['path_photo'] ?>" class="img-fluid rounded-start">
				</div>
				<div class="col-md-8">
					<div class="card-body">
						<h5 class="card-title">Диплом ID <?= intval($data['selected']['id']) ?></h5>
						<p class="card-text">
							<strong>Студент получивший
								диплом:</strong><br> <?= htmlspecialchars($data['selected']['name']) ?><br>
							<strong>ID студента:</strong> <?= intval($data['selected']['id']) ?><br>
							<strong>ID Группы:</strong> <?= intval($data['selected']['id_group']) ?><br>
							<strong>Год получения: </strong><?= intval($data['selected']['year_of_receipt']) ?><br><br>
						</p>
						<a class="btn btn-secondary" href="/diplomas/show">Вернуться</a>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/apps/views/inc/footer.php" ?>