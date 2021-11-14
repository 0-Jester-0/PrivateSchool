<?php /**
 * @var $data
 */ ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/apps/views/inc/header.php" ?>
	<div class="container-single">
		<div class="card mb-4 single">
			<div class="row g-0">
				<div class="col-md-12">
					<?php if (isset($data['selected'][0])): ?>
						<div class="card-body">
							<h5 class="card-title">Направление ID <?= intval($data['selected'][0]['id']) ?></h5>
							<p class="card-text">
								<strong>Название:</strong> <?= htmlspecialchars($data['selected'][0]['name']) ?>
								<br>
								<strong>Группы на этом направлении:</strong>
							</p>
							<ol>
								<?php foreach ($data['selected'] as $group): ?>
									<li><?= htmlspecialchars($group['group_name']) ?></li>
								<?php endforeach; ?>
							</ol>
							<a class="btn btn-secondary" href="/courses/show">Вернуться</a>
						</div>
					<?php else: ?>
						<div class="card-body">
							<h5 class="card-title">Направление ID <?= intval($data['selected']['id']) ?></h5>
							<p class="card-text">
								<strong>Название:</strong> <?= htmlspecialchars($data['selected']['name']) ?>
								<br>
								<strong>Группы на этом направлении:</strong>
							</p>
							<ol>
								Отсутствуют
							</ol>
							<a class="btn btn-secondary" href="/courses/show">Вернуться</a>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>

<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/apps/views/inc/footer.php" ?>