<?php
/**
 * Created by PhpStorm.
 * User: Таня
 * Date: 28.10.2016
 * Time: 1:27
 */
?>
<?if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die(); ?>
<?use Bitrix\Main\Localization\Loc; use Bitrix\Main\Page\Asset;Loc::loadMessages(__FILE__);?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?=LANGUAGE_ID?>">
<head>
    <title><?$APPLICATION->ShowTitle();?></title>
    <?$APPLICATION->ShowHead();?>
    <?Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."templates_styles.css");?>
    <?Asset::getInstance()-> addJs(SITE_TEMPLATE_PATH."/_include/js/jquery-1.4.2.min.js", true);?>
    <?Asset::getInstance()-> addJs(SITE_TEMPLATE_PATH."/_include/js/slideBlock.js", true);?>
    <?Asset::getInstance()-> addJs(SITE_TEMPLATE_PATH."/_include/js/latte.js", true);?>
    <?Asset::getInstance()-> addJs(SITE_TEMPLATE_PATH."/_include/js/loopedslider.js", true);?>
    <?Asset::getInstance()-> addJs(SITE_TEMPLATE_PATH."/_include/js/looped-options.js", true);?>
    <?Asset::getInstance()-> addJs(SITE_TEMPLATE_PATH."/_include/js/jquery.roundabout.min.js", true);?>
    <?Asset::getInstance()-> addJs(SITE_TEMPLATE_PATH."/_include/js/loader.js", true);?>
    <?Asset::getInstance()-> addJs(SITE_TEMPLATE_PATH."/_include/js/ddsmoothmenu.js", true);?>
    <?Asset::getInstance()-> addJs(SITE_TEMPLATE_PATH."/_include/js/cufon.js", true);?>
    <?Asset::getInstance()-> addJs(SITE_TEMPLATE_PATH."/_include/js/cufon-fonts.js", true);?>
    <?Asset::getInstance()-> addJs(SITE_TEMPLATE_PATH."/_include/js/cufon-settings.js", true);?>
    <?Asset::getInstance()-> addJs(SITE_TEMPLATE_PATH."/_include/js/input.js", true);?>
    <?Asset::getInstance()-> addJs(SITE_TEMPLATE_PATH."/_include/js/main.js", true);?>
    <?Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/_include/css/ie.css");?>
    <!--[if lt IE 8]><![endif]-->
</head>
<body>
<?$APPLICATION->ShowPanel();?>
<!-- start header -->
<div class="header-wrap">
    <div id="header">
        <div class="header-holder">
            <div class="wrap">
                <h1 class="logo"><a href="index.html">Synoptic</a></h1>
                <?$APPLICATION->IncludeComponent( "bitrix:main.include", "", Array(
                    "COMPONENT_TEMPLATE" => ".default",
                    "AREA_FILE_SHOW" => "file",
                    "AREA_FILE_SUFFIX" => "inc",
                    "EDIT_TEMPLATE" => "",
                    "PATH" => SITE_TEMPLATE_PATH."/include_areas/logo.php"
                ) );?>
                <ul id="nav" class="ddsmoothmenu">
                    <li class="active"><a href="index.html" class="home">Home</a></li>
                    <li><a href="about.html"><span><em>About</em></span></a></li>
                    <li><a href="blog.html"><span><em>Blog</em></span></a></li>
                    <li><a href="portfolio.html"><span><em>Portfolio</em></span></a></li>
                    <li><a href="market.html"><span><em>Market</em></span></a></li>
                    <li><a href="contacts.html"><span><em>Contacts</em></span></a></li>
                </ul>
            </div>
            <div class="form-wrap">
                <form action="#" class="search-form">
                    <fieldset>
                        <span class="text-wrap"><input type="text" class="text" value="Start searching..." /></span>
                        <input type="submit" class="submit" value="Start searching..." />
                    </fieldset>
                </form>
                <form action="#" class="login-form">
                    <fieldset>
                        <input type="button" class="button sign-up" value="Sign up" />
                        <input type="button" class="button sign-in" value="Sign in" />
                        <span class="text-wrap"><input type="text" class="text" value="Password..." /></span>
                        <span class="text-wrap"><input type="text" class="text" value="Login..." /></span>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- end header -->
<!-- start intro-holder -->
<div id="intro-holder">
    <div class="intro-box">
        <div class="roundabout-holder large">
            <ul id="myRoundabout">
                <li>
                    <img src="<?=SITE_TEMPLATE_PATH;?>/images/1.gif" alt="image description" width="100%" />
                    <div class="image">

                    </div>
                </li>
                <li>
                    <img src="<?=SITE_TEMPLATE_PATH;?>/images/2.gif" alt="image description" width="100%" />
                    <div class="image">

                    </div>
                </li>
                <li>
                    <img src="<?=SITE_TEMPLATE_PATH;?>/images/3.gif" alt="image description" width="100%" />
                    <div class="image">

                    </div>
                </li>
            </ul>
            <div class="controls">
                <a href="#" id="next">Next!</a>
                <a href="#" id="previous">Previous!</a>
            </div>
        </div>
    </div>
</div>
<!-- end intro-holder -->
<!-- start promo-box -->
<div class="promo-wrap">
    <div class="promo-box">
        <div class="promo-holder">
            <strong class="promo-text">Hihao &amp; Здравствуйте! Не знаете с чего начать?</strong>
            <a href="#steps-slider" class="btn-take ancLinks">Take a tour right now!</a>
        </div>
    </div>
</div>
<!-- end promo-box -->
<div id="steps-slider">
    <div class="steps-holder">
        <ul class="pagination">
            <li class="active">
                <a href="#">
                    <strong class="title title01">Старт</strong>
                    <span> Какие бывают сорта китайского чая?</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <strong class="title title02">Шаг 2</strong>
                    <span>Как и какой выбрать китайский чай?</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <strong class="title title03">Шаг 3</strong>
                    <span>Как правильно заваривать чай?</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <strong class="title title04">Финиш</strong>
                    <span>Чайные наборы для новичков.</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="controls">
        <a href="#" class="previous">previous</a>
        <a href="#" class="next">next</a>
    </div>
    <div class="slide-holder">
        <div class="container">
            <ul class="slides">
                <li>
                    <div class="image">
                        <img class="large" src="<?=SITE_TEMPLATE_PATH;?>/images/bg-image021.png" alt="image description" width="371" height="570" />
                    </div>
                    <div class="text-box">
                        <h2>The diversity of Chinese teas. выфвфы</h2>
                        <p align="justify"><b>Белый или бай ча 白茶</b><br>
                            лучший чай для летней жары и активного образа жизни – освежающий и легкий.</p>
                        <p align="justify"><b>Желтый или хуан ча 黄茶</b><br>
                            изысканный и томный, с дымной ноткой и привкусом парного молока.</p>
                        <p align="justify"><b>Зеленый или люй ча 绿茶</b><br>
                            драгоценный продукт, обладающий «четырьмя совершенствами»: безупречной формой, прозрачным настоем, густым ароматом и свежим вкусом.</p>
                        <p align="justify"><b>Улун ча  烏龍茶 (сильно-ферментированный улун)</b><br>
                            его аромат чист и прекрасен, вкус крепок и глубок, раскрывается постепенно.</p>
                        <p align="justify"><b>Бирюзовый или цин ча 青茶 (слабо-ферментированный улун)</b><br>
                            чай-праздник – яркий, переливающийся игрой множества великолепных оттенков вкуса и аромата.</p>
                        <p align="justify"><b>Красный или хун ча 红茶</b><br>
                            чай для сырой и холодной погоды, минорных состояний и душевного разлада. </p>
                        <p align="justify"><b>Черный или хэй ча黑茶</b><br>
                            простой и крепкий, немного брутальный, с мягким вкусом и выдержанным, глубоким ароматом.</p>
                        <p align="justify"><b>Пуэр ча 普洱茶</b><br>
                            мощный природный энергетик с ярким, сочным вкусом и тонизирующим воздействием.</p>
                        <a href="#" class="more">Read more…</a>
                    </div>
                </li>
                <li>
                    <div class="text-box">
                        <h2>Acquaintance to the Chinese teas.</h2>
                        <p align="justify">Для тех, кто только начинает знакомство с коллекционными сортами, мы рекомендуем взять на пробу несколько позиций из ценовой категории 100-900 рублей за 100 гр., которые большинство интернет-магазинов, занимающихся продажей китайского чая, позиционируют как "элитный китайский чай". Мы не пользуемся такой терминологией ввиду ее сомнительной рекламной специфики, хотя в сравнении с чаем из супермаркета он действительно представляет качественно более высокий уровень. Это по-настоящему хороший чай, собранный и приготовленный вручную, из хорошего сырья, купленный непосредственно у производителя и бережно доставленный в наш чайный магазин. Кроме того, наши бюджетные чаи просты в заваривании и не требуют особых навыков чайного мастерства, для первого знакомства с китайской чайной традицией они идеально подходят. </p>
                        <p align="justify">Тому, кто уже получил представление о видах и сортах настоящего китайского чая и набрался необходимого опыта во взаимодействии с ним, открывается широчайший простор для совершенствования своих познаний и гастрономических пристрастий в ценовой категории 900-2900 рублей за 100 гр. Дорогой чай из Китая стоимостью 2900 рублей за 100 и выше предполагает развитые навыки «чайного мастерства», чтобы оценить его по достоинству.  </p>
                        <p align="justify">Ввиду довольно необычного воздействия высокосортного китайского чая и его способности объединять людей не только физически, но и духовно, вокруг чайного дела сформировался некий ареол "эзотеризма". Люди, пропагандирующие такой подход, смещают акценты в область тонких материй, зачастую теряя при этом здравый смысл и прагматичную сторону  чаепития.</p>
                        <a href="#" class="more">Read more…</a>
                    </div>
                </li>
                <li>
                    <div class="image-left">
                        <img class="large" src="<?=SITE_TEMPLATE_PATH;?>/images/bg-image023.png" alt="image description" width="275" height="307" />
                    </div>
                    <div class="text-box">
                        <h2>Taste depends on trifles!</h2>
                        <p align="justify">Как правильно заваривать чай, написано много. Но чайная процедура сложна, а хочется выпить чашечку хорошего чая, затратив на приготовление несколько минут.</p>
                        <p align="justify">Конечно, заваренный по всем канонам чайных церемоний с использованием специальной посуды и соблюдением различных правил,  чай получается очень вкусным. Если есть возможность, стоит иногда посещать места, где можно попробовать настоящий изумительный напиток.</p>
                        <p align="justify">Но у большинства из нас нет ни условий, ни времени повторить подобную процедуру дома, а побаловать себя любимым напитком хотелось бы.</p>
                        <p align="justify">Знатоков прошу особо не придираться. Нас ведь много таких, живущих в местах, где нет чайных клубов, чай мы покупаем в небольших магазинах или через интернет, набор посуды тоже в дефиците, разве что привезешь из отпуска. Но если мы знаем, как правильно заваривать чай, то можем максимально соблюсти необходимые условия.</p>
                        <p align="justify">Попробуем упростить процесс приготовления без особых потерь в качестве и постараемся правильно заваривать чай.</p>
                        <p align="justify">Итак, вкус полученного напитка будет зависеть от качества воды, ее температуры, используемой посуды, дозировки сухого чая и собственно самого заваривания.</p>
                        <a href="#" class="more">Read more…</a>
                    </div>
                </li>
                <li>
                    <div class="image">
                        <img class="large" src="<?=SITE_TEMPLATE_PATH;?>/images/bg-image024.png" alt="image description" width="275" height="307" />
                    </div>
                    <div class="text-box">
                        <h2>Tea sets</h2>
                        <p align="justify">Чайные наборы - незаменимая вещь для чаепития. Древние традиции чайных церемоний со временем далеко распространились за пределы Китая и Японии – откуда они пошли изначально. Чаепитие в разных странах мира приобрело свою национальную окраску. Неизменной осталась только суть церемонии: создание атмосферы взаимного уважения, гармоничных отношений между людьми. Это способствует спокойному общению между ними и установлению доверительных отношений. Незаменимой вещью при этом является чайный набор. </p>
                        <p align="justify">Как подобрать чайный набор? Набор чайной посуды должен отвечать событию, количество предметов задавать стиль чаепития. Чайные наборы, имеющие яркие тона, вызовут симпатии у большой компании, они будут приковывать пристальные взгляды ваших гостей. </p>
                        <p align="justify">Естественно, количество предметов в наборах должно быть равным или превышать численность членов семьи. Лучше купить большой чайный набор, чтобы гости, родственники, которые время от времени посещают ваш дом, смогли вместе с вами за приятной беседой почувствовать аромат и вкус чая.</p>
                        <a href="#" class="more">Read more…</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- start main -->
<div id="main">
    <div class="popular-holder">