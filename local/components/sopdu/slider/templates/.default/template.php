<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>
<div class="bd-example mb-4">
	<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<?$num = 0?>
			<?foreach ($arResult as $resNum):?>
				<li data-target="#carouselExampleCaptions" data-slide-to="<?=$num?>" <?if($num == 0):?>class="active"<?endif;?>></li>
				<?$num++?>
			<?endforeach;?>
		</ol>
		<div class="carousel-inner">
			<?$numItem = 0?>
			<?foreach ($arResult as $item):?>
				<div class="carousel-item <?if($numItem == 0):?>active<?endif;?>">
					<img src="<?=$item["PICTURE"]?>" class="d-block w-100" alt="<?=$item["NAME"]?>" />
					<div class="carousel-caption  d-md-block">
						<div class="preview_title"><?=$item["NAME"]?></div>
						<div class="preview_text"><?=$item["TEXT"]?></div>
						<a href="<?=$item["LINK"]?>">
							<div class="preview_btn">Подробнее</div>
						</a>
					</div>
				</div>
				<?$numItem++?>
			<?endforeach;?>
		</div>
	</div>
</div>