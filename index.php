<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="main.css">
	<script	  src="https://code.jquery.com/jquery-3.5.1.min.js"
			  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
			  crossorigin="anonymous"></script>
	<title>Таблица работ</title>
</head>
<body>
	<header>
		<div class="nav">
			<a href="" id="table">Таблица <br> Заказов</a>
			<a href="" id="">Исполнители</a>
			<a href="" id="">Заказчики</a>
			<a href="" id="">Отчеты</a>
		</div>
	</header>
	<div class="container">
		<button id="new_worker">Добавить сотрудника</button>
		<button id="new_order">Добавить заказ</button>
		<button id="new_buyer">Добавить Заказчика</button>
	</div>
	<div class="ajax_result"></div>
	<script>
		jQuery(document).ready(function($) {
			$('#new_worker').click(function(event) {
				$.ajax({
					url: '/new_worker.php',
					type: 'POST',
					dataType: 'html',
					data: {param1: 'value1'},
				})
				.done(function(data) {
					$('.ajax_result').html(data);
				});
			});
			$('#table').click(function(event) {
				event.preventDefault();
				$.ajax({
					url: 'table.php',
					type: 'POST',
					dataType: 'html',
					data: {param1: 'value1'},
				})
				.done(function(data) {
					$('.ajax_result').html(data);
				});
			});
			$('#new_order').click(function(event) {
				$.ajax({
					url: '/new_order.php',
					type: 'POST',
					dataType: 'html',
					data: {param1: 'value1'},
				})
				.done(function(data) {
					$('.ajax_result').html(data);
				});
			});
			$('#new_buyer').click(function(event) {
				$.ajax({
					url: '/new_buyer.php',
					type: 'POST',
					dataType: 'html',
					data: {param1: 'value1'},
				})
				.done(function(data) {
					$('.ajax_result').html(data);
				});
			});
		});
	</script>
</body>
</html>