<?php /**
 * @var $data
 */ ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/apps/views/inc/header.php" ?>
	<div class="container-single">
		<div class="card mb-4 single">
			<div class="card-body">
				<h5 class="card-title">Предмет ID <?= intval($data['selected']['id']) ?></h5>
				<p class="card-text">
					<strong>Название предмета:</strong> "<?= htmlspecialchars($data['selected']['name']) ?>" <br><br>
					<strong>Данный предмет преподается на направлении:</strong>
					"<?= htmlspecialchars($data['selected']['course_name']) ?>"<br><br>
					<strong>ID направления:</strong> <?= intval($data['selected']['id_course']) ?>
				</p>
				<a class="btn btn-secondary" href="/lessons/show">Вернуться</a>
			</div>
		</div>
	</div>

<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/apps/views/inc/footer.php" ?>