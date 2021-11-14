<?php /**
 * @var $data
 */ ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/apps/views/inc/header.php" ?>
	<div class="main-content" style="margin-bottom: 10px">
		<div class="container">
			<h2 style="text-align: center">Группы</h2>
			<table class="table table-striped">
				<thead>
				<tr>
					<th>ID</th>
					<th>Фото группы</th>
					<th>ID направления</th>
					<th>Название группы</th>
					<th>Дата основания группы</th>
					<th></th>
					<th></th>
					<th></th>
				</tr>
				</thead>
				<tbody>
				<?php foreach ($data as $group): ?>
					<tr>
						<td><?= intval($group['id']) ?></td>
						<td><img src="<?= $group['path_photo_group'] ?>" style="width: 200px;height: 150px"></td>
						<td><?= intval($group['id_course']) ?></td>
						<td><?= htmlspecialchars($group['name']) ?></td>
						<td><?= htmlspecialchars($group['start_date']) ?></td>
						<td>
							<button class="btn btn-success btn-sm">
								<a href="/groups/edit/<?= intval($group['id']) ?>">
									Изменить
								</a>
							</button>
						</td>
						<td>
							<button class="btn btn-danger btn-sm delete">
								<a href="/groups/delete/<?= intval($group['id']) ?>">
									Удалить
								</a>
							</button>
						</td>
						<td>
							<button class="btn btn-info btn-sm">
								<a href="/groups/single/<?= intval($group['id']) ?>">
									Подробнее
								</a>
							</button>
						</td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>
			<div class="btn btn-primary">
				<a class="nav-link" href="/groups/add">Добавить группу</a>
			</div>
		</div>
	</div>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/apps/views/inc/footer.php" ?>