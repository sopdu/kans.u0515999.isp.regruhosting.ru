<?
	if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
		die();
?>
<footer>
	<div class="footer_inner">
		<div class="wm_wrapper position-absolute">
			<img src="<?=SITE_TEMPLATE_PATH?>/img/footer_wm.svg" class="adaptation_none">
		</div>
		<div class="container">
			<div class="row">
				<div class="foot_item col fixmorefooter">
					<div class="footitem_title">Еще</div>
					<div class="footitem_text"><a href="#">О компании</a></div>
					<div class="footitem_text"><a href="#">Новости</a></div>
					<div class="footitem_text"><a href="#">Технологии</a></div>
					<div class="footitem_text"><a href="#">Партнеры</a></div>
					<div class="footitem_text"><a href="#">Контакты</a></div>
				</div>
				<div class="foot_item col">
					<div class="footitem_title">Каталог</div>
					<div class="footitem_text"><a href="#">Чертежные принадлежности</a></div>
					<div class="footitem_text"><a href="#">Офисные принадлежности</a></div>
					<div class="footitem_text"><a href="#">Школные принадлежности</a></div>
					<div class="footitem_text"><a href="#">Школные принадлежности</a></div>
				</div>
				<div class="foot_item_search col">
					<div class="footitem_title">Ищешь товар?</div>
					<form class="footer_search" action="#">
						<input type="text" placeholder="Поиск" name="search" class="footer_input">
						<button type="submit" class="footer_btn">Найти</button>
					</form>
					<br>
					<div class="footitem_title mt-2"><?=GetMessage("sopduFooterSocialNetwork")?></div>
					<ul class="row p-0 w-75 social_icons">
						<li class="col"><a href="#"><img src="<?=SITE_TEMPLATE_PATH?>/img/social/insta.svg" alt=""></a></li>
						<li class="col"><a href="#"><img src="<?=SITE_TEMPLATE_PATH?>/img/social/yt.svg" alt=""></a></li>
						<li class="col"><a href="#"><img src="<?=SITE_TEMPLATE_PATH?>/img/social/vk.svg" alt=""></a></li>
						<li class="col"><a href="#"><img src="<?=SITE_TEMPLATE_PATH?>/img/social/fb.svg" alt=""></a></li>
						<li class="col"><a href="#"><img src="<?=SITE_TEMPLATE_PATH?>/img/social/wa.svg" alt=""></a></li>
					</ul>
				</div>
				<div class="foot_item col adapt_our">
					<div class="footitem_title"><?=GetMessage("sopduFooterOurContact")?></div>
					<div class="our_cont">
						<div class="mailphone">
							<div class="footitem_text mail">
								<span class="fixfootericon mr-2">
									<img src="<?=SITE_TEMPLATE_PATH?>/img/mail_footer.svg">
								</span>
								<a href="info@ao-globus.ru">
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
							</div>
							<div class="footitem_text phone">
								<span class="fixfootericon mr-2">
									<img src="<?=SITE_TEMPLATE_PATH?>/img/phone_footer.svg">
								</span>
								<a href="8 800 555-55-55">
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
							</div>
						</div>
						<span class="d-flex">
							<span class="fixfootericon mr-2"><img src="<?=SITE_TEMPLATE_PATH?>/img/mappin.svg"></span>
							<div class="footitem_text footitem_text_sp footer_fixloc">
								<a href="https://yandex.ru/maps/10707/rilsk/house/ulitsa_volodarskogo_136/Z00YcABkTUcFQFtrfXl3dHpnZg==/?ll=34.674422%2C51.565643&source=wizgeo&utm_medium=maps-desktop&utm_source=serp&z=16" target="_blank">
									<?$APPLICATION->IncludeComponent(
										"bitrix:main.include",
										".default",
										array(
											"COMPONENT_TEMPLATE" => ".default",
											"AREA_FILE_SHOW" => "file",
											"PATH" => SITE_TEMPLATE_PATH.'/include/address.php',
											"EDIT_TEMPLATE" => "standard.php"
										),
										false
									);?>
								</a>
							</div>
						</span>
					</div>
				</div>
			</div>
		</div>
		<hr class="container mt65 w-100" style="border: none; max-width: 1100px !important;">
		<div class="container pt-2">
			<div class="bottomfooter d-flex justify-content-between">
				<div class="bottomfootertext">
					<?$APPLICATION->IncludeComponent(
						"sopdu:copyright",
						".default",
						array(
							"COMPONENT_TEMPLATE" => ".default",
							"ChoiceYeare" => "2010",
							"ChoiceText" => "Все права защищены ОАО Глобус"
						),
						false
					);?>
				</div>
				<img src="<?=SITE_TEMPLATE_PATH?>/img/footer_lh.svg" alt="">
			</div>
		</div>
	</div>
</footer>


</div>
</div>
<script>
    document.querySelector('#openbmenu').addEventListener('click', function(){
        document.querySelector('#openbmenu').style.display = "none";
        document.querySelector('#phoneheader').style.display = "none";
        document.querySelector('#closebmenu').style.display = "block";
        document.querySelector('#headerlangs').style.display = "block";
        document.querySelector('#adaptview').style.display = "block";
        document.querySelector('#adapt_none_head').style.display = "none";
        document.querySelector('#adapt_none_header_news').style.display = "none";

    });
    document.querySelector('#closebmenu').addEventListener('click', function(){
        document.querySelector('#closebmenu').style.display = "none";
        document.querySelector('#headerlangs').style.display = "none";
        document.querySelector('#openbmenu').style.display = "block";
        document.querySelector('#phoneheader').style.display = "block";
        document.querySelector('#adaptview').style.display = "none";
        document.querySelector('#adapt_none_head').style.display = "block";
        document.querySelector('#adapt_none_header_news').style.display = "block";
    });
</script>

<script src="<?=SITE_TEMPLATE_PATH?>/js/main.js"></script>
</div>
</body>
</html>