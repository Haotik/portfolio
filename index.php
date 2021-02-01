<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="main.css">
	<title>Таблица работ</title>
</head>
<body>
	<header>
		<div class="nav">
			<a href="">Таблица <br> Заказов</a>
			<a href="">Исполнители</a>
			<a href="">Заказчики</a>
			<a href="">Отчеты</a>
		</div>
	</header>
	<div class="container">
		<table>
			<thead>
				<tr>
					<td>№</td>
					<td class="date">Дата начала</td>
					<td class="date">Дата окончания</td>
					<td class="fio">Заказчик</td>
					<td>Телефон</td>
					<td>Адрес</td>
					<td class="desc">Описание заказа</td>
					<td>Общая сумма</td>
					<td>30/70</td>
					<td class="fio">исполнитель</td>
					<td>мой процент</td>
					<td>сумма исполнителя</td>
					<td>Расходы</td>
					<td class="change">изменить</td>
					<td class="delete">удалить</td>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>№</td>
					<td class="date">Дата начала</td>
					<td class="date">Дата окончания</td>
					<td class="fio">Заказчик</td>
					<td>Телефон</td>
					<td>Адрес</td>
					<td class="desc">Описание заказа</td>
					<td>Общая сумма</td>
					<td>30/70</td>
					<td class="fio">исполнитель</td>
					<td>мой процент</td>
					<td>сумма исполнителя</td>
					<td>Расходы</td>
					<td class="change">изменить</td>
					<td class="delete">удалить</td>
				</tr>
				<tr>
					<td>№</td>
					<td class="date">Дата начала</td>
					<td class="date">Дата окончания</td>
					<td class="fio">Заказчик</td>
					<td>Телефон</td>
					<td>Адрес</td>
					<td class="desc">Описание заказа</td>
					<td>Общая сумма</td>
					<td>30/70</td>
					<td class="fio">исполнитель</td>
					<td>мой процент</td>
					<td>сумма исполнителя</td>
					<td>Расходы</td>
					<td class="change">изменить</td>
					<td class="delete">удалить</td>
				</tr>
			</tbody>
		</table>
		<div class="itog">Итого: деньги</div>
		<form action="" id="new" class="new_order">
			<h3>Новый заказ</h3>
			<input type="text" placeholder="Начало">
			<input type="text" placeholder="Заказчик">
			<input type="text" placeholder="Адрес объекта">
			<input type="text" placeholder="Сумма">
			<input type="text" placeholder="Исполнитель">
			<textarea placeholder="Описание заказа"></textarea>
			<input type="submit" value="Создать">
		</form>
		<form action="" id="new_worker">
			<h3>Новый исполнитель</h3>
			<input type="text" placeholder="ФИО">
			<input type="text" placeholder="Телефон">
			<input type="submit" value="Создать">
		</form>
		<form action="" id="new_worker">
			<h3>Новый заказчик</h3>
			<input type="text" placeholder="ФИО">
			<input type="text" placeholder="Телефон">
			<input type="submit" value="Создать">
		</form>
		<div class="ajax_result"></div>
	</div>
</body>
</html>