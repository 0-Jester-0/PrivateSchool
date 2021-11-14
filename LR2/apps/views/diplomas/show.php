<?php /**
 * @var $data
 */ ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/apps/views/inc/header.php" ?>
	<div class="main-content" style="margin-bottom: 10px">
		<div class="container">
			<h2 style="text-align: center">Дипломы</h2>
			<table class="table table-striped">
				<thead>
				<tr>
					<th>ID</th>
					<th>ID студента</th>
					<th>Год получения</th>
					<th></th>
					<th></th>
					<th></th>
				</tr>
				</thead>
				<tbody>
				<?php foreach ($data as $diploma): ?>
					<tr>
						<td><?= intval($diploma['id']) ?></td>
						<td><?= intval($diploma['id_student']) ?></td>
						<td><?= htmlspecialchars($diploma['year_of_receipt']) ?></td>
						<td>
							<button class="btn btn-success btn-sm">
								<a href="/diplomas/edit/<?= intval($diploma['id']) ?>">
									Изменить
								</a>
							</button>
						</td>
						<td>
							<button class="btn btn-danger btn-sm delete">
								<a href="/diplomas/delete/<?= intval($diploma['id']) ?>">
									Удалить
								</a>
							</button>
						</td>
						<td>
							<button class="btn btn-info btn-sm">
								<a href="/diplomas/single/<?= intval($diploma['id']) ?>">
									Подробнее
								</a>
							</button>
						</td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>
			<div class="btn btn-primary">
				<a class="nav-link" href="/diplomas/add">Добавить диплом</a>
			</div>
		</div>
	</div>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/apps/views/inc/footer.php" ?><?php
