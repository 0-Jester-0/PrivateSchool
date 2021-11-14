<?php /**
 * @var $data
 */ ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/apps/views/inc/header.php" ?>
	<div class="main-content" style="margin-bottom: 10px">
		<div class="container">
			<h2 style="text-align: center">Предметы</h2>
			<table class="table table-striped">
				<thead>
				<tr>
					<th>ID</th>
					<th>Название предмета</th>
					<th>ID направления</th>
					<th></th>
					<th></th>
					<th></th>
				</tr>
				</thead>
				<tbody>
				<?php foreach ($data as $lesson): ?>
					<tr>
						<td><?= intval($lesson['id']) ?></td>
						<td><?= htmlspecialchars($lesson['name']) ?></td>
						<td><?= intval($lesson['id_course']) ?></td>
						<td>
							<button class="btn btn-success btn-sm">
								<a href="/lessons/edit/<?= intval($lesson['id']) ?>">
									Изменить
								</a>
							</button>
						</td>
						<td>
							<a class="btn btn-danger btn-sm delete" href="/lessons/delete/<?= intval($lesson['id']) ?>">
								Удалить
							</a>
						</td>
						<td>
							<button class="btn btn-info btn-sm">
								<a href="/lessons/single/<?= intval($lesson['id']) ?>">
									Подробнее
								</a>
							</button>
						</td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>
			<div class="btn btn-primary">
				<a class="nav-link" href="/lessons/add">Добавить предмет</a>
			</div>
		</div>
	</div>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/apps/views/inc/footer.php" ?>