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
<div id="intro-holder">
	<div class="intro-box">
		<div class="roundabout-holder large">
<ul id="myRoundabout">
	<?foreach($arResult["ROWS"][0] as $key => $arItem):?>
	<li>
		<img src="<?=SITE_TEMPLATE_PATH;?>/images/01.gif" alt="image description" width="100%" />
		<div class="image">

		</div>
	</li>

	<li>
		<img src="<?=SITE_TEMPLATE_PATH;?>/images/02.gif" alt="image description" width="100%" />
		<div class="image">

		</div>
	</li>

	<li>
		<img src="<?=SITE_TEMPLATE_PATH;?>/images/03.gif" alt="image description" width="100%" />
		<div class="image">

		</div>
	</li>
	<?endforeach;?>
</ul>
			<div class="controls">
				<a href="#" id="next">Next!</a>
				<a href="#" id="previous">Previous!</a>
			</div>
		</div>
	</div>
</div>