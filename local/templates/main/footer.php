<?php
/**
 * Created by PhpStorm.
 * User: Таня
 * Date: 28.10.2016
 * Time: 1:27
 */
?>
<?if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die(); ?>

</div>
</div>
<!-- end main -->
<!-- start footer -->
<div id="footer">
    <div class="footer-wrap">
        <div class="footer-holder">
            <div class="threecolumns">
                <div class="column">
                    <h3>Twittroll</h3>
                    <div class="tweet-box">
                        <p><a href="#">@chitlesh</a> Go to the page for the category you want and tack /feed/ on the end of the URL. </p>
                        <span class="date">5:28 PM Nov 17th via HootSuite</span>
                    </div>
                    <div class="tweet-box">
                        <p>Happy birthday to WordPress core UI contributor <a href="#">@johnonolan</a> May the coming year bring you better tabs for the Themes screen. :) </p>
                        <span class="date">11:51 PM Nov 8th via CoTweet</span>
                    </div>
                    <div class="tweet-box">
                        <p><a href="#">@spork_ethan</a> That is not put out by WordPress.</p>
                        <span class="date">9:00 AM Nov 8th via CoTweet in reply to spork_ethan</span>
                    </div>
                </div>
                <div class="column">
                    <h3>Newsteller</h3>
                    <p>Duis vitae facilisis sapien. Sed vel porta erat. Quisque libero libero.</p>
                    <form action="#" class="subscribe-form">
                        <fieldset>
                            <span class="text-wrap"><input type="text" class="text" value="E-mail Address" /></span>
                            <input type="submit" class="submit" value="Subscribe now!" />
                        </fieldset>
                    </form>
                    <?$APPLICATION->IncludeComponent("bitrix:news.list", "template2", Array(
	"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
		"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
		"AJAX_MODE" => "N",	// Включить режим AJAX
		"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
		"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
		"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
		"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
		"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
		"CACHE_GROUPS" => "Y",	// Учитывать права доступа
		"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
		"CACHE_TYPE" => "A",	// Тип кеширования
		"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
		"DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
		"DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
		"DISPLAY_DATE" => "Y",	// Выводить дату элемента
		"DISPLAY_NAME" => "Y",	// Выводить название элемента
		"DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
		"DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
		"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
		"FIELD_CODE" => array(	// Поля
			0 => "ID",
			1 => "NAME",
			2 => "SORT",
			3 => "PREVIEW_PICTURE",
			4 => "",
		),
		"FILTER_NAME" => "",	// Фильтр
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
		"IBLOCK_ID" => "11",	// Код информационного блока
		"IBLOCK_TYPE" => "content",	// Тип информационного блока (используется только для проверки)
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
		"INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
		"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
		"NEWS_COUNT" => "20",	// Количество новостей на странице
		"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
		"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
		"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
		"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
		"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
		"PAGER_TITLE" => "Социальные сети",	// Название категорий
		"PARENT_SECTION" => "",	// ID раздела
		"PARENT_SECTION_CODE" => "",	// Код раздела
		"PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
		"PROPERTY_CODE" => array(	// Свойства
			0 => "URL",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
		"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
		"SET_META_DESCRIPTION" => "Y",	// Устанавливать описание страницы
		"SET_META_KEYWORDS" => "Y",	// Устанавливать ключевые слова страницы
		"SET_STATUS_404" => "N",	// Устанавливать статус 404
		"SET_TITLE" => "N",	// Устанавливать заголовок страницы
		"SHOW_404" => "N",	// Показ специальной страницы
		"SORT_BY1" => "SORT",	// Поле для первой сортировки новостей
		"SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
		"SORT_ORDER1" => "ASC",	// Направление для первой сортировки новостей
		"SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
	),
	false
);?>
                </div>
                <div class="column">
                    <h3>Contact Us</h3>
                    <dl class="contact-list">
                        <dt>Address:</dt>
                        <dd>221B BakerStreet</dd>
                        <dt>Phone:</dt>
                        <dd>+44 20 7224 3688</dd>
                        <dt>Fax:</dt>
                        <dd>+44 20 7224 3688</dd>
                        <dt>E-mail:</dt>
                        <dd><a href="mailto:&#108;&#111;&#110;&#100;&#111;&#110;&#108;&#105;&#110;&#107;&#115;&#064;&#098;&#116;&#099;&#111;&#110;&#110;&#101;&#099;&#116;&#046;&#099;&#111;&#109;">&#108;&#111;&#110;&#100;&#111;&#110;&#108;&#105;&#110;&#107;&#115;&#064;&#098;&#116;&#099;&#111;&#110;&#110;&#101;&#099;&#116;&#046;&#099;&#111;&#109;</a></dd>
                    </dl>
                    <div class="map-holder">
                        <a href="#"><img class="large" src="<?=SITE_TEMPLATE_PATH;?>/images/map.jpg" alt="image description" width="262" height="109" /></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copy-wrap">
        <div class="copy-holder">
            <span class="copy">Copyright &copy; Chadao 2016. All Rights Reserved</span>
            <a href="#" class="design">made by Tanya C: </a>
        </div>
    </div>
</div>
<!-- end footer -->
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>
