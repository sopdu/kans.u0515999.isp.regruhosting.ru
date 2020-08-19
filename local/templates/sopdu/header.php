<?
	if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
		die();
?>
<!DOCTYPE html>
<html>
<head>
	<?$APPLICATION->ShowHead();?>
	<title><?$APPLICATION->ShowTitle();?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="shortcut icon" type="image/png" href="favicon.png"/>
	<script
			src="https://code.jquery.com/jquery-3.5.1.js"
			integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
			crossorigin="anonymous">
	</script>
	<?
		use Bitrix\Main\Page\Asset;
		Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/bootstrap.bundle.js");
		Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/bootstrap.js");
		Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/css/normalize.css");
		Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/css/bootstrap.css");
		Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/css/bootstrap-grid.css");
		Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/css/bootstrap-reboot.css");
		Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/css/main.css");
		Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/css/media2.css");
	?>
</head>
<body>
	<div id="panel">
		<?$APPLICATION->ShowPanel();?>
	</div>
	<header class="adaptation_none_header">
		<div class="topheader_bg">
			<div class="container d-flex justify-content-between h-100 align-items-center">
				<?$APPLICATION->IncludeComponent("bitrix:menu", "top", Array(
					"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
					"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
					"DELAY" => "N",	// Откладывать выполнение шаблона меню
					"MAX_LEVEL" => "1",	// Уровень вложенности меню
					"MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
						0 => "",
					),
					"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
					"MENU_CACHE_TYPE" => "N",	// Тип кеширования
					"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
					"ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
					"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
				),
					false
				);?>
				<ul class="row flex-nowrap" style="margin:0; padding: 0; ">
					<li class="mailbefore">
						<a href="mailto:<?$_SERVER["DOCUMENT_ROOT"].SITE_TEMPLATE_PATH.'/include/email.php'?>">
							<?$APPLICATION->IncludeComponent(
								"bitrix:main.include",
								".default",
								array(
									"COMPONENT_TEMPLATE" => ".default",
									"AREA_FILE_SHOW" => "file",
									"PATH" => SITE_TEMPLATE_PATH.'/include/email.php',
									"EDIT_TEMPLATE" => "standard.php"
								),
								false
							);?>
						</a>
					</li>
					<?#='<pre>'; print_r($sopdu->phone($_SERVER["DOCUMENT_ROOT"].SITE_TEMPLATE_PATH.'/include/phone.php')); '</pre>';?>
					<li class="ml-5 phonebefore">
						<a href="<?#=sopdu::phone($_SERVER["DOCUMENT_ROOT"].SITE_TEMPLATE_PATH.'/include/phone.php')?>">
							<?$APPLICATION->IncludeComponent(
								"bitrix:main.include",
								".default",
								array(
									"COMPONENT_TEMPLATE" => ".default",
									"AREA_FILE_SHOW" => "file",
									"PATH" => SITE_TEMPLATE_PATH.'/include/phone.php',
									"EDIT_TEMPLATE" => "standard.php"
								),
								false
							);?>
						</a>
					</li>
					<li class="ml-4 mt-1 langpick"><span>RU</span><span class="ml-2">EN</span></li>
				</ul>
			</div>
		</div>
		<div class="container mt-4">
			<div class="centerheader row flex-nowrap">
				<div class="col-9 row">
					<a href="/" class="col-4">
						<img src="<?=SITE_TEMPLATE_PATH?>/img/logo.svg" />
					</a>
					<?$APPLICATION->IncludeComponent(
							"bitrix:catalog.search", "header", Array(
					
					),
						false
					);?>
				</div>
				<div class="col row flex-nowrap mt-2 d-flex" style="justify-content: flex-end;">
					<button style="border:none; background: #fff;" type="button" data-toggle="modal" data-target="#exampleModal">
						<a href="/personal/" class="user adaptation_none_header">
							<img src="<?=SITE_TEMPLATE_PATH?>/img/user.svg" alt="">
						</a>
					</button>
					<span class="basket_num"><img src="<?=SITE_TEMPLATE_PATH?>/img/basket.svg"></span>
					<span class=" mr-3 bal" >20 020 070 <span id="simvolfix">₽</span></span>
				</div>
			</div>
		</div>
		<hr class="mt-3">
	</header>

