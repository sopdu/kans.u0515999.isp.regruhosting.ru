<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>

<?
foreach($arResult as $arItem):
	if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
		continue;
?>
	<div class="footitem_text"><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></div>
<?endforeach?>

<?endif?>