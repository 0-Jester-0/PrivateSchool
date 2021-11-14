<?php /**
 * @var $data
 */ ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/apps/views/inc/header.php" ?>
<div class="container-single">
	<div class="card mb-4 single">
		<div class="card-body">
			<h5 class="card-title">Оценка ID <?= intval($data['selected']['id']) ?></h5>
			<p class="card-text">
				<strong>Студент получивший оценку:</strong> ID <?= intval($data['selected']['id_student']) ?>
				"<?= htmlspecialchars($data['selected']['student_name']) ?>"<br><br>
				<strong>Предмет:</strong> ID <?= intval($data['selected']['id_lesson']) ?>
				"<?= htmlspecialchars($data['selected']['lesson_name']) ?>" <br><br>
				<strong>Оценка:</strong> <?= intval($data['selected']['value']) ?>
			</p>
			<a class="btn btn-secondary" href="/marks/show">Вернуться</a>
		</div>
	</div>
</div>

<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/apps/views/inc/footer.php" ?>
