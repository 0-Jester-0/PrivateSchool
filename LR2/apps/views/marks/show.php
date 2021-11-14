<?php /**
 * @var $data
 */ ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/apps/views/inc/header.php" ?>
	<div class="main-content" style="margin-bottom: 10px">
		<div class="container">
			<h2 style="text-align: center">Оценки</h2>
			<table class="table table-striped">
				<thead>
				<tr>
					<th>ID</th>
					<th>ID студента</th>
					<th>ID предмета</th>
					<th>Оценка</th>
					<th></th>
					<th></th>
					<th></th>
				</tr>
				</thead>
				<tbody>
				<?php foreach ($data as $mark): ?>
					<tr>
						<td><?= intval($mark['id']) ?></td>
						<td><?= intval($mark['id_student']) ?></td>
						<td><?= intval($mark['id_lesson']) ?></td>
						<td><?= intval($mark['value']) ?></td>
						<td>
							<button class="btn btn-success btn-sm">
								<a href="/marks/edit/<?= intval($mark['id']) ?>">
									Изменить
								</a>
							</button>
						</td>
						<td>
							<a class="btn btn-danger btn-sm delete" href="/marks/delete/<?= intval($mark['id']) ?>">
								Удалить
							</a>
						</td>
						<td>
							<button class="btn btn-info btn-sm">
								<a href="/marks/single/<?= intval($mark['id']) ?>">
									Подробнее
								</a>
							</button>
						</td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>
			<div class="btn btn-primary">
				<a class="nav-link" href="/marks/add">Добавить</a>
			</div>
		</div>
	</div>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/apps/views/inc/footer.php" ?><?php
