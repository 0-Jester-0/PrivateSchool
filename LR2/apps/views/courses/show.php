<?php /**
 * @var $data
 */ ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/apps/views/inc/header.php" ?>
	<div class="main-content">
		<div class="container">
			<h2 style="text-align: center">Направления</h2>
			<table class="table table-striped">
				<thead>
				<tr>
					<th>ID</th>
					<th>Название направления</th>
					<th></th>
					<th></th>
					<th></th>
				</tr>
				</thead>
				<tbody>
				<?php foreach ($data as $course): ?>
					<tr>
						<td><?= intval($course['id']) ?></td>
						<td><?= htmlspecialchars($course['name']) ?></td>
						<td>
							<button class="btn btn-success btn-sm">
								<a href="/courses/edit/<?= intval($course['id']) ?>">Изменить</a>
							</button>
						</td>
						<td>
							<button class="btn btn-danger btn-sm delete">
								<a href="/courses/delete/<?= intval($course['id']) ?>">
									Удалить
								</a>
							</button>
						</td>
						<td>
							<button class="btn btn-info btn-sm ">
								<a href="/courses/single/<?= intval($course['id']) ?>">
									Подробнее
								</a>
							</button>
						</td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>
			<div class="row" style="margin-bottom: 10px">
				<div class="col-4">
					<div class="btn btn-primary">
						<a class="nav-link" href="/courses/add">Добавить направление</a>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/apps/views/inc/footer.php" ?>