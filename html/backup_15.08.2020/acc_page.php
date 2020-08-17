<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>GLOBUS Home</title>

	<script
	src="https://code.jquery.com/jquery-3.5.1.js"
	integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
	crossorigin="anonymous"></script>
	<script src="js/bootstrap.bundle.js"></script>
	<script src="js/bootstrap.js"></script>
	<link rel="shortcut icon" type="image/png" href="favicon.png"/>
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap-grid.css">
	<link rel="stylesheet" href="css/bootstrap-reboot.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/media2.css">
</head>
<body>
	<?php require_once('html/navigation_DEV.html'); ?>

	<!-- header -->
	<?php require_once('html/header.html'); ?>
	

	<!-- acc page -->

	<div class="container accpage">
		<div class="l_tegs mt-2 mb-4">
			<span><a href="index.html">Главная</a></span>
			<span class="ml-1 mr-1">></span>
			<span><a href="#">Личный кабинет</a></span>		
		</div>
		<div class="about_title text-body mb-4 mt-3 mb-1">Личный кабинет</div>


		<div class="row accpageblock">
			<div class="col-3 adaptation_none">
				<div class="your_manager text-left mt-3 mb-5 w-100">
					<div class="row">
						<div class="col-4"><img class="mt-5 ml-3" src="img/face.png"></div>
						<div class="col-8 info">
							<div class="title mt-3 mb-3">Ваш менеджер</div>
							<div class="name mb-3">Шилова Наталья <br>Натальевна</div>
							<span><img class="mr-2 " src="img/mail.svg"></span><span class=" mb-2">info@ao-globus.ru</span><br>
							<span><img class="mr-2" src="img/phone.svg"></span><span>8 800 555-55-55</span>
						</div>
					</div>
				</div>
				<div class="pickaccorhist">
					<div class="active_paoh pick_acc">Профиль организации</div>
					<div class="pick_history">История заказов</div>
				</div>
			</div>
			<div class="pickaccorhist m0-auto adaptation_block">
				<div class="active_paoh pick_prof_a">Профиль организации</div>
				<div class="pick_hist_a">История заказов</div>
			</div>
			<div class="col">
				<div class="accpage_style">
					<div>Название организации<span>*</span></div>
					<input type="text" placeholder="ООО “Мега”" name="nameorg" class="footer_input">
					<div>ИНН<span>*</span></div>
					<input type="text" placeholder="123-545-5452-54" name="inn" class="footer_input">
					<div>ОГРН<span>*</span></div>
					<input type="text" placeholder="58488-5-254-7575-54" name="ogrn" class="footer_input">
					<div>БИК<span>*</span></div>
					<input type="text" placeholder="58489-55865-58-54-54" name="bik" class="footer_input">
					<div>Расчетный счет<span>*</span></div>
					<input type="text" placeholder="58489-55865-58-54-54" name="checker" class="footer_input">
				</div>
			</div>
			<div class="col">
				<div class="accpage_style del_prof">
					<div>Менеджер огранизации</div>
					<input type="text" placeholder="Мария Варизя" name="managerorg" class="footer_input">
					<div>Телефон менеджера</div>
					<input type="text" placeholder="+7 981 973-00-47" name="phonemanager" class="footer_input">

				</div>
			</div>
		</div>


		<div class="your_manager text-left mt-3 mb-5 w-100 adaptation_block" style="display: none;">
			<div class="row">
				<div class="col-4"><img class="mt-5 ml-3" src="img/face.png"></div>
				<div class="col-8 info">
					<div class="title mt-3 mb-3">Ваш менеджер</div>
					<div class="name mb-3">Шилова Наталья <br>Натальевна</div>
					<span><img class="mr-2 " src="img/mail.svg"></span><span class=" mb-2">info@ao-globus.ru</span><br>
					<span><img class="mr-2" src="img/phone.svg"></span><span>8 800 555-55-55</span>
				</div>
			</div>
		</div>
	</div>


	<div class="historypageblock container" style="display: none;">

		
		<div class="row accpageblock">
			<div class="col-3 adaptation_none">
				<div class="your_manager text-left mt-3 mb-5 w-100">
					<div class="row">
						<div class="col-4"><img class="mt-5 ml-3" src="img/face.png"></div>
						<div class="col-8 info">
							<div class="title mt-3 mb-3">Ваш менеджер</div>
							<div class="name mb-3">Шилова Наталья <br>Натальевна</div>
							<span><img class="mr-2 " src="img/mail.svg"></span><span class=" mb-2">info@ao-globus.ru</span><br>
							<span><img class="mr-2" src="img/phone.svg"></span><span>8 800 555-55-55</span>
						</div>
					</div>
				</div>
				<div class="pickaccorhist">
					<div class="pick_acc2">Профиль организации</div>
					<div class="active_paoh pick_history">История заказов</div>
				</div>
			</div>

			<div class="pickaccorhist m0-auto adaptation_block">
				<div class="pick_acc_a">Профиль организации</div>
				<div class="pick_history_a active_paoh">История заказов</div>
			</div>
			


			<div class="col">
				<div class="d-flex justify-content-between order_inf">
					<div class="mt-2 mb-3 gren_send">Заказ 26.04.2020 - <span>Доставлен</span></div>
					<div>
						<span class="dwnld_after">Скачать в Excel</span>
						<span class="ml-4 print_after">Печать</span>
					</div>
				</div>
				<div class="history_items adaptation_none">
					<div class="history_item row">
						<img class="col-2 " src="img/product/product1.png" width="77px">
						<span class="history_item_title col-6">Скрепки канцелярские гладкие 22 мм. по 100 шт.</span>
						<span class="history_item_colvo col-2">2 уп</span>
						<span class="history_item_price col-2">320₽/уп</span>
					</div>
				</div>
				<div class="order_again m0auto mt-3 mb-5">Заказать повторно</div>
				<div class="d-flex justify-content-between order_inf">
					<div class="mt-2 mb-3 gren_send">Заказ 26.04.2020 - <span>Доставлен</span></div>
					<div>
						<span class="dwnld_after">Скачать в Excel</span>
						<span class="ml-4 print_after">Печать</span>
					</div>
				</div>

				<div class="history_items adaptation_none">
					<div class="history_item row">
						<img class="col-2 " src="img/product/product1.png" width="77px">
						<span class="history_item_title col-6">Скрепки канцелярские гладкие 22 мм. по 100 шт.</span>
						<span class="history_item_colvo col-2">2 уп</span>
						<span class="history_item_price col-2">320₽/уп</span>
					</div>
				</div>
				<div class="order_again m0auto mt-3 mb-5">Заказать повторно</div>

			</div>

		</div>


		<div class="your_manager text-left mt-3 mb-5 w-100 adaptation_block" style="display: none;">
			<div class="row">
				<div class="col-4"><img class="mt-5 ml-3" src="img/face.png"></div>
				<div class="col-8 info">
					<div class="title mt-3 mb-3">Ваш менеджер</div>
					<div class="name mb-3">Шилова Наталья <br>Натальевна</div>
					<span><img class="mr-2 " src="img/mail.svg"></span><span class=" mb-2">info@ao-globus.ru</span><br>
					<span><img class="mr-2" src="img/phone.svg"></span><span>8 800 555-55-55</span>
				</div>
			</div>
		</div>
	</div>



</div>


<script>
	document.querySelector('.pick_acc2').addEventListener('click', function(){
		document.querySelector('.accpageblock').style.display = "flex";
		document.querySelector('.historypageblock').style.display = "none";
	});

	document.querySelector('.pick_history').addEventListener('click', function(){
		document.querySelector('.accpageblock').style.display = "none";
		document.querySelector('.historypageblock').style.display = "block";
	});	


	document.querySelector('.pick_prof_a').addEventListener('click', function(){
		document.querySelector('.accpageblock').style.display = "block";
		document.querySelector('.accpage_style').style.display = "block";		
		document.querySelector('.del_prof').style.display = "block";
	});

	document.querySelector('.pick_hist_a').addEventListener('click', function(){
		document.querySelector('.accpageblock').style.display = "none";
		document.querySelector('.accpage_style').style.display = "none";		
		document.querySelector('.del_prof').style.display = "none";
		document.querySelector('.history_items').style.display = "flex";
	});
</script>

<!-- footer -->
<?php require_once('html/footer.html') ?>
<script src="js/main.js"></script>
<script src="js/clone.js"></script>



</div>

</body>
</html>