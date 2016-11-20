<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<h3>Get Social</h3>
<ul class="social-list">
	<?foreach($arResult["ITEMS"] as  $key => $arItem):?>
		<li><a href="<?=$arItem["DISPLAY_PROPERTIES"]["URL"]["VALUE"]?>"class="<?=$arItem["social"]["URL"]["fadeThis"]?>"><span class="hover"><img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>" class="vm"/><?=$arItem["NAME"]?></a></li>

	<?endforeach;?>
</ul>

