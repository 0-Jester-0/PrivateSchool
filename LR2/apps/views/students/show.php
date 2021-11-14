<?php /**
 * @var $data
 */ ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/apps/views/inc/header.php" ?>
	<div class="main-content" style="margin-bottom: 10px">
		<div class="container">
			<h2 style="text-align: center">Студенты</h2>
			<table class="table table-striped">
				<thead>
				<tr>
					<th>ID</th>
					<th>Фото студента</th>
					<th>ID группы</th>
					<th>ФИО</th>
					<th>Дата рождения</th>
					<th></th>
					<th></th>
					<th></th>
				</tr>
				</thead>
				<tbody>
				<?php foreach ($data as $student): ?>
					<tr>
						<td><?= intval($student['id']) ?></td>
						<td><img src="<?= htmlspecialchars($student['path_photo']) ?>" style="width: 150px; height:
						225px"></td>
						<td><?= intval($student['id_group']) ?></td>
						<td><?= htmlspecialchars($student['name']) ?></td>
						<td><?= htmlspecialchars($student['date_birthday']) ?></td>
						<td>
							<button class="btn btn-success btn-sm">
								<a href="/students/edit/<?= intval($student['id']) ?>">
									Изменить
								</a>
							</button>
						</td>
						<td>
							<a class="btn btn-danger btn-sm delete" href="/students/delete/<?= intval($student['id']) ?>">
								Удалить
							</a>
						</td>
						<td>
							<button class="btn btn-info btn-sm">
								<a href="/students/single/<?= intval($student['id']) ?>">
									Подробнее
								</a>
							</button>
						</td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>
			<div class="btn btn-primary">
				<a class="nav-link" href="/students/add">Добавить студента</a>
			</div>
		</div>
	</div>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/apps/views/inc/footer.php" ?>