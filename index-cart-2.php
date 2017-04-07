<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Site Title</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/slick.css"/>
	<link rel="stylesheet" type="text/css" href="css/slick-theme.css"/>

	<link href="https://fonts.googleapis.com/css?family=Fira+Sans:300,400,400i,500,500i,600,600i,700,700i,800" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="http://allfont.ru/allfont.css?fonts=freeset-bold-cyrillic" rel="stylesheet" type="text/css" />

	<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script type="text/javascript" src="js/slick.min.js"></script>
	<script type="text/javascript" src="js/accordion.js"></script>
	
</head>
<body>
	<div class="wrapper">
		<div class="wrapper-header">
			<div class="container">
				<div class="header-top clearfix">
					<div class="col-3">
						<div class="header-top-logo">
							<a href="#">
								<div class="header-top-logo-img"><img src="images/header-logo.png" alt="Logo"></div>
								<div class="header-top-logo-title">
									<div class="header-top-logo-title-main">DNK<span>analysis</span></div>
									<div class="header-top-descr">Медицинский центр</div>
								</div>
							</a>
						</div>
					</div>
					<div class="col-3">
						<div class="header-top-contact">
							<div class="header-top-contact-icon"><img src="images/header-icon-1.png" alt=""></div>
							<div class="header-top-contact-phone">8 800 600-30-20</div>
							<div class="header-top-descr">Бесплатный многокональный номер</div>
						</div>
					</div>
					<div class="col-3">
						<div class="header-top-language">
							<div class="header-top-language-icon">
								<img src="images/header-icon-2.png" alt="">
							</div>
							<div class="header-top-language-picker"><a href="#">Выбрать язык</a></div>
						</div>
					</div>
					<div class="col-3">
						<div class="header-top-user_panel">
							<a href="#" class="btn btn-medium btn-style-2">Войти</a>
							<a href="#" class="header-top-user_panel-link cart btn btn-medium btn-style-2">Корзина</a>
						</div>
					</div>
				</div>
				<div class="header-bottom clearfix">
					<div class="col-8">
						<ul class="header-bottom-nav">
							<li><a href="index.php">Главная</a></li>
							<li><a href="index-2.php">ДНК-Тест</a></li>
							<li><a href="index-3.php" class="active">Вопросы-Ответы</a></li>
							<li><a href="index-4.php">О компании</a></li>
							<li><a href="index-5.php">Контактные данные</a></li>
						</ul>
					</div>
					<div class="col-4">
						<div class="header-bottom-btn">
							<a href="#" class="btn btn-large btn-style-1">Заказать сейчас</a>
						</div>
					</div>
				</div>
				<section class="top-content">
					<div class="row clearfix">
						<div class="col-2">
							<div class="top-content-page-icon">
								<img src="images/cart-icon-1.png" alt="">
							</div>
						</div>
						<div class="col-10">
							<div class="top-content-info">
								<div class="top-content-breadcrumbs">
									<ul class="clearfix">
										<li><a href="#">Главная</a></li>
										<li><a href="#" class="active">Оформление заказа</a></li>
									</ul>
								</div>
								<h3>Корзина покупок</h3>
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>
		
		<div class="content">
			<div class="container clearfix">
				<div class="col-12">
					<div class="content-main_info content-main_info-cart clearfix">
						<div class="woocommerce">
						    <form name="checkout" method="post" class="checkout woocommerce-checkout clearfix">
						        <div class="col-12" id="customer_details">
						            <div class="col-4">
						                <div class="woocommerce-billing-fields">
						                    <!-- <h3>Billing details</h3> -->
						                    <div class="woocommerce-billing-fields__field-wrapper">
						                    <p class="form-row form-row-wide address-field update_totals_on_change validate-required woocommerce-validated" id="billing_country_field" data-sort="40">
						                            <label for="billing_country" class="">Страна <abbr class="required" title="обязательно">*</abbr></label>
						                            <select name="billing_country" id="billing_country" class="country_to_state country_select  select2-hidden-accessible" autocomplete="country" tabindex="-1" aria-hidden="true">
						                                <option value="">Выберите страну…</option>
						                                <option value="IE">Ireland</option>
						                                <option value="AU">Австралия</option>
						                                <option value="AT">Австрия</option>
						                                <option value="AZ">Азербайджан</option>
						                                <option value="AX">Аландские острова</option>
						                                <option value="AL">Албания</option>
						                                <option value="DZ">Алжир</option>
						                                <option value="AS">Американское Самоа</option>
						                                <option value="AI">Ангилья</option>
						                                <option value="AO">Ангола</option>
						                                <option value="AD">Андорра</option>
						                                <option value="AQ">Антарктика</option>
						                                <option value="AG">Антигуа и Барбуда</option>
						                                <option value="AR">Аргентина</option>
						                                <option value="AM">Армения</option>
						                                <option value="AW">Аруба</option>
						                                <option value="AF">Афганистан</option>
						                                <option value="BS">Багамы</option>
						                                <option value="BD">Бангладеш</option>
						                                <option value="BB">Барбадос</option>
						                                <option value="BH">Бахрейн</option>
						                                <option value="BY">Беларусь</option>
						                                <option value="BZ">Белиз</option>
						                                <option value="BE">Бельгия</option>
						                                <option value="BJ">Бенин</option>
						                                <option value="BM">Бермуды</option>
						                                <option value="BG">Болгария</option>
						                                <option value="BO">Боливия</option>
						                                <option value="BQ">Бонэйр, Синт-Эстатиус и Саба</option>
						                                <option value="BA">Босния и Герцеговина</option>
						                                <option value="BW">Ботсвана</option>
						                                <option value="BR">Бразилия</option>
						                                <option value="IO">Британская территория Индийского океана</option>
						                                <option value="VG">Британские Виргинские острова</option>
						                                <option value="BN">Бруней</option>
						                                <option value="BF">Буркина-Фасо</option>
						                                <option value="BI">Бурунди</option>
						                                <option value="BT">Бутан</option>
						                                <option value="VU">Вануату</option>
						                                <option value="VA">Ватикан</option>
						                                <option value="GB">Великобритания</option>
						                                <option value="HU">Венгрия</option>
						                                <option value="VE">Венесуэла</option>
						                                <option value="VI">Виргинские острова США</option>
						                                <option value="UM">Внешние малые острова США</option>
						                                <option value="TL">Восточный Тимор</option>
						                                <option value="VN">Вьетнам</option>
						                                <option value="GA">Габон</option>
						                                <option value="HT">Гаити</option>
						                                <option value="GY">Гайана</option>
						                                <option value="GM">Гамбия</option>
						                                <option value="GH">Гана</option>
						                                <option value="GP">Гваделупа</option>
						                                <option value="GT">Гватемала</option>
						                                <option value="GN">Гвинея</option>
						                                <option value="GW">Гвинея-Бисау</option>
						                                <option value="DE">Германия</option>
						                                <option value="GG">Гернси</option>
						                                <option value="GI">Гибралтар</option>
						                                <option value="HN">Гондурас</option>
						                                <option value="HK">Гонконг</option>
						                                <option value="GD">Гренада</option>
						                                <option value="GL">Гренландия</option>
						                                <option value="GR">Греция</option>
						                                <option value="GE">Грузия</option>
						                                <option value="GU">Гуам</option>
						                                <option value="DK">Дания</option>
						                                <option value="JE">Джерси</option>
						                                <option value="DJ">Джибути</option>
						                                <option value="DM">Доминика</option>
						                                <option value="DO">Доминиканская Республика</option>
						                                <option value="EG">Египет</option>
						                                <option value="ZM">Замбия</option>
						                                <option value="EH">Западная Сахара</option>
						                                <option value="ZW">Зимбабве</option>
						                                <option value="IL">Израиль</option>
						                                <option value="IN">Индия</option>
						                                <option value="ID">Индонезия</option>
						                                <option value="JO">Иордания</option>
						                                <option value="IQ">Ирак</option>
						                                <option value="IR">Иран</option>
						                                <option value="IS">Исландия</option>
						                                <option value="ES">Испания</option>
						                                <option value="IT">Италия</option>
						                                <option value="YE">Йемен</option>
						                                <option value="CV">Кабо-Верде</option>
						                                <option value="KZ">Казахстан</option>
						                                <option value="KY">Кайманские острова</option>
						                                <option value="KH">Камбоджа</option>
						                                <option value="CM">Камерун</option>
						                                <option value="CA">Канада</option>
						                                <option value="QA">Катар</option>
						                                <option value="KE">Кения</option>
						                                <option value="CY">Кипр</option>
						                                <option value="KI">Кирибати</option>
						                                <option value="CN">Китай</option>
						                                <option value="CC">Кокосовые (Килинг) острова</option>
						                                <option value="CO">Колумбия</option>
						                                <option value="KM">Коморы</option>
						                                <option value="CG">Конго (Браззавиль)</option>
						                                <option value="CD">Конго (Киншаса)</option>
						                                <option value="CR">Коста-Рика</option>
						                                <option value="CI">Кот-д'Ивуар</option>
						                                <option value="CU">Куба</option>
						                                <option value="KW">Кувейт</option>
						                                <option value="KG">Кыргызстан</option>
						                                <option value="CW">Кюрасао</option>
						                                <option value="LA">Лаос</option>
						                                <option value="LV">Латвия</option>
						                                <option value="LS">Лесото</option>
						                                <option value="LR">Либерия</option>
						                                <option value="LB">Ливан</option>
						                                <option value="LY">Ливия</option>
						                                <option value="LT">Литва</option>
						                                <option value="LI">Лихтенштейн</option>
						                                <option value="LU">Люксембург</option>
						                                <option value="MU">Маврикий</option>
						                                <option value="MR">Мавритания</option>
						                                <option value="MG">Мадагаскар</option>
						                                <option value="YT">Майотта</option>
						                                <option value="MO">Макао (САР), Китай</option>
						                                <option value="MK">Македония</option>
						                                <option value="MW">Малави</option>
						                                <option value="MY">Малайзия</option>
						                                <option value="ML">Мали</option>
						                                <option value="MV">Мальдивы</option>
						                                <option value="MT">Мальта</option>
						                                <option value="MA">Марокко</option>
						                                <option value="MQ">Мартиника</option>
						                                <option value="MH">Маршалловы острова</option>
						                                <option value="MX">Мексика</option>
						                                <option value="FM">Микронезия</option>
						                                <option value="MZ">Мозамбик</option>
						                                <option value="MD">Молдова</option>
						                                <option value="MC">Монако</option>
						                                <option value="MN">Монголия</option>
						                                <option value="MS">Монсеррат</option>
						                                <option value="MM">Мьянма</option>
						                                <option value="NA">Намибия</option>
						                                <option value="NR">Науру</option>
						                                <option value="NP">Непал</option>
						                                <option value="NE">Нигер</option>
						                                <option value="NG">Нигерия</option>
						                                <option value="NL">Нидерланды</option>
						                                <option value="NI">Никарагуа</option>
						                                <option value="NU">Ниуэ</option>
						                                <option value="NZ">Новая Зеландия</option>
						                                <option value="NC">Новая Каледония</option>
						                                <option value="NO">Норвегия</option>
						                                <option value="AE">Объединённые Арабские Эмираты</option>
						                                <option value="OM">Оман</option>
						                                <option value="BV">Остров Буве</option>
						                                <option value="IM">Остров Мэн</option>
						                                <option value="NF">Остров Норфолк</option>
						                                <option value="CX">Остров Рождества</option>
						                                <option value="SH">Остров Святой Елены</option>
						                                <option value="HM">Остров Херд и острова Макдональд</option>
						                                <option value="CK">Острова Кука</option>
						                                <option value="PK">Пакистан</option>
						                                <option value="PW">Палау</option>
						                                <option value="PS">Палестинские территории</option>
						                                <option value="PA">Панама</option>
						                                <option value="PG">Папуа — Новая Гвинея</option>
						                                <option value="PY">Парагвай</option>
						                                <option value="PE">Перу</option>
						                                <option value="PN">Питкэрн</option>
						                                <option value="PL">Польша</option>
						                                <option value="PT">Португалия</option>
						                                <option value="PR">Пуэрто-Рико</option>
						                                <option value="RE">Реюньон</option>
						                                <option value="RU">Россия</option>
						                                <option value="RW">Руанда</option>
						                                <option value="RO">Румыния</option>
						                                <option value="SV">Сальвадор</option>
						                                <option value="WS">Самоа</option>
						                                <option value="SM">Сан-Марино</option>
						                                <option value="ST">Сан-Томе и Принсипи</option>
						                                <option value="SA">Саудовская Аравия</option>
						                                <option value="SZ">Свазиленд</option>
						                                <option value="KP">Северная Корея</option>
						                                <option value="MP">Северные Марианские острова</option>
						                                <option value="SC">Сейшельские Острова</option>
						                                <option value="BL">Сен-Бартелеми</option>
						                                <option value="SX">Сен-Мартен (голландская часть)</option>
						                                <option value="MF">Сен-Мартен (французская часть)</option>
						                                <option value="PM">Сен-Пьер и Микелон</option>
						                                <option value="SN">Сенегал</option>
						                                <option value="VC">Сент-Винсент и Гренадины</option>
						                                <option value="KN">Сент-Китс и Невис</option>
						                                <option value="LC">Сент-Люсия</option>
						                                <option value="RS">Сербия</option>
						                                <option value="SG">Сингапур</option>
						                                <option value="SY">Сирия</option>
						                                <option value="SK">Словакия</option>
						                                <option value="SI">Словения</option>
						                                <option value="US">Соединённые Штаты Америки</option>
						                                <option value="SB">Соломоновы Острова</option>
						                                <option value="SO">Сомали</option>
						                                <option value="SD">Судан</option>
						                                <option value="SR">Суринам</option>
						                                <option value="SL">Сьерра-Леоне</option>
						                                <option value="TJ">Таджикистан</option>
						                                <option value="TW">Тайвань</option>
						                                <option value="TH">Тайланд</option>
						                                <option value="TZ">Танзания</option>
						                                <option value="TC">Теркс и Кайкос</option>
						                                <option value="TG">Того</option>
						                                <option value="TK">Токелау</option>
						                                <option value="TO">Тонга</option>
						                                <option value="TT">Тринидад и Тобаго</option>
						                                <option value="TV">Тувалу</option>
						                                <option value="TN">Тунис</option>
						                                <option value="TM">Туркменистан</option>
						                                <option value="TR">Турция</option>
						                                <option value="UG">Уганда</option>
						                                <option value="UZ">Узбекистан</option>
						                                <option value="UA" selected="selected">Украина</option>
						                                <option value="WF">Уоллис и Футуна</option>
						                                <option value="UY">Уругвай</option>
						                                <option value="FO">Фарерские острова</option>
						                                <option value="FJ">Фиджи</option>
						                                <option value="PH">Филиппины</option>
						                                <option value="FI">Финляндия</option>
						                                <option value="FK">Фолклендские острова</option>
						                                <option value="FR">Франция</option>
						                                <option value="GF">Французская Гвиана</option>
						                                <option value="PF">Французская Полинезия</option>
						                                <option value="TF">Французские южные территории</option>
						                                <option value="HR">Хорватия</option>
						                                <option value="CF">Центральная Африканская Республика</option>
						                                <option value="TD">Чад</option>
						                                <option value="ME">Черногория</option>
						                                <option value="CZ">Чешская Республика</option>
						                                <option value="CL">Чили</option>
						                                <option value="CH">Швейцария</option>
						                                <option value="SE">Швеция</option>
						                                <option value="SJ">Шпицберген и Ян-Майен</option>
						                                <option value="LK">Шри-Ланка</option>
						                                <option value="EC">Эквадор</option>
						                                <option value="GQ">Экваториальная Гвинея</option>
						                                <option value="ER">Эритрея</option>
						                                <option value="EE">Эстония</option>
						                                <option value="ET">Эфиопия</option>
						                                <option value="ZA">Южная Африка</option>
						                                <option value="GS">Южная Георгия/Сандвичевы острова</option>
						                                <option value="KR">Южная Корея</option>
						                                <option value="SS">Южный Судан</option>
						                                <option value="JM">Ямайка</option>
						                                <option value="JP">Япония</option>
						                            </select>
						                            <span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-billing_country-container"><span class="select2-selection__rendered" id="select2-billing_country-container" title="Украина">Российская Федерация</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
						                        </p>
						                        <p class="form-row form-row-first validate-required woocommerce-invalid woocommerce-invalid-required-field" id="billing_first_name_field" data-sort="10"><label for="billing_first_name" class="">Имя <abbr class="required" title="обязательно">*</abbr></label><input type="text" class="input-text " name="billing_first_name" id="billing_first_name" placeholder="" value="" autocomplete="given-name" autofocus="autofocus"></p>
						                        <p class="form-row form-row-last validate-required woocommerce-invalid woocommerce-invalid-required-field" id="billing_last_name_field" data-sort="20"><label for="billing_last_name" class="">Фамилия <abbr class="required" title="обязательно">*</abbr></label><input type="text" class="input-text " name="billing_last_name" id="billing_last_name" placeholder="" value="" autocomplete="family-name"></p>
						                        <p class="form-row form-row-wide woocommerce-validated" id="billing_company_field" data-sort="30"><label for="billing_company" class="">Company name</label><input type="text" class="input-text " name="billing_company" id="billing_company" placeholder="" value="" autocomplete="organization"></p>
						                        
						                        <p class="form-row form-row-wide address-field validate-required" id="billing_address_1_field" data-sort="50"><label for="billing_address_1" class="">Адрес <abbr class="required" title="обязательно">*</abbr></label><input type="text" class="input-text " name="billing_address_1" id="billing_address_1" placeholder="Street address" value="" autocomplete="address-line1"></p>
						                        <p class="form-row form-row-wide address-field" id="billing_address_2_field" data-sort="60"><input type="text" class="input-text " name="billing_address_2" id="billing_address_2" placeholder="Apartment, suite, unit etc. (optional)" value="" autocomplete="address-line2"></p>
						                        <p class="form-row form-row-wide address-field validate-required" id="billing_city_field" data-sort="70" data-o_class="form-row form-row-wide address-field validate-required"><label for="billing_city" class="">Населённый пункт <abbr class="required" title="обязательно">*</abbr></label><input type="text" class="input-text " name="billing_city" id="billing_city" placeholder="" value="" autocomplete="address-level2"></p>
						                        <p class="form-row form-row-wide address-field validate-state validate-required" id="billing_state_field" data-sort="80" data-o_class="form-row form-row-wide address-field validate-required validate-state"><label for="billing_state" class="">Область/регион <abbr class="required" title="обязательно">*</abbr></label><input type="text" class="input-text " value="" placeholder="" name="billing_state" id="billing_state" autocomplete="address-level1"></p>
						                        <p class="form-row form-row-wide address-field validate-postcode validate-required" id="billing_postcode_field" data-sort="90" data-o_class="form-row form-row-wide address-field validate-required validate-postcode"><label for="billing_postcode" class="">Почтовый индекс <abbr class="required" title="обязательно">*</abbr></label><input type="text" class="input-text " name="billing_postcode" id="billing_postcode" placeholder="" value="" autocomplete="postal-code"></p>
						                        <p class="form-row form-row-first validate-required validate-phone" id="billing_phone_field" data-sort="100"><label for="billing_phone" class="">Телефон <abbr class="required" title="обязательно">*</abbr></label><input type="tel" class="input-text " name="billing_phone" id="billing_phone" placeholder="" value="" autocomplete="tel"></p>
						                        <p class="form-row form-row-last validate-required validate-email" id="billing_email_field" data-sort="110"><label for="billing_email" class="">Email <abbr class="required" title="обязательно">*</abbr></label><input type="email" class="input-text " name="billing_email" id="billing_email" placeholder="" value="gitawsme@gmail.com" autocomplete="email username"></p>
						                    </div>
						                </div>
						            </div>
						            <div class="col-8">
						                <div class="woocommerce-shipping-fields">
						                </div>
						                <div class="woocommerce-additional-fields">
						                    <h3>Additional information</h3>
						                    <div class="woocommerce-additional-fields__field-wrapper">
						                        <p class="form-row notes" id="order_comments_field" data-sort=""><label for="order_comments" class="">Order notes</label><textarea name="order_comments" class="input-text " id="order_comments" placeholder="Notes about your order, e.g. special notes for delivery." rows="2" cols="5"></textarea></p>
						                    </div>
						                </div>
						            </div>
						        </div>
						        <h3 id="order_review_heading">Ваш заказ</h3>
						        <div id="order_review" class="woocommerce-checkout-review-order">
						            <table class="shop_table woocommerce-checkout-review-order-table">
						                <thead>
						                    <tr>
						                        <th class="product-name">Товар</th>
						                        <th class="product-total">Итого</th>
						                    </tr>
						                </thead>
						                <tbody>
						                    <tr class="cart_item">
						                        <td class="product-name">
						                            Test&nbsp;							 <strong class="product-quantity">× 2350</strong>													
						                        </td>
						                        <td class="product-total">
						                            <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">₴</span>289,050.00</span>						
						                        </td>
						                    </tr>
						                </tbody>
						                <tfoot>
						                    <tr class="cart-subtotal">
						                        <th>Подытог</th>
						                        <td><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">₴</span>289,050.00</span></td>
						                    </tr>
						                    <tr class="order-total">
						                        <th>Итого</th>
						                        <td><strong><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">₴</span>289,050.00</span></strong> </td>
						                    </tr>
						                </tfoot>
						            </table>
						            <div id="payment" class="woocommerce-checkout-payment">
						                <ul class="wc_payment_methods payment_methods methods">
						                    <li class="wc_payment_method payment_method_cheque">
						                        <input id="payment_method_cheque" type="radio" class="input-radio" name="payment_method" value="cheque" checked="checked" data-order_button_text="" style="display: none;">
						                        <label for="payment_method_cheque">
						                        Check payments 	</label>
						                        <div class="payment_box payment_method_cheque">
						                            <p>Пожалуйста, отправьте ваш чек, указав данные магазина: название, улицу, город, область/регион, страну, почтовый индекс.</p>
						                        </div>
						                    </li>
						                </ul>
						                <div class="form-row place-order">
						                    <noscript>
						                        Поскольку ваш браузер не поддерживает JavaScript или в нем он отключен, просим убедиться в том, что вы нажали кнопку &lt;em&gt;Обновить итог&lt;/em&gt; перед регистрацией заказа. Иначе, есть риск неправильного подсчета стоимости.			&lt;br/&gt;&lt;input type="submit" class="button alt" name="woocommerce_checkout_update_totals" value="Обновить итог" /&gt;
						                    </noscript>
						                    <input type="submit" class="button alt" name="woocommerce_checkout_place_order" id="place_order" value="Подтвердить заказ" data-value="Подтвердить заказ">
						                    <input type="hidden" id="_wpnonce" name="_wpnonce" value="d382358d8c"><input type="hidden" name="_wp_http_referer" value="/checkout/?wc-ajax=update_order_review">	
						                </div>
						            </div>
						        </div>
						    </form>
						</div>
					<!-- 
						<h3 class="cart-title">Всего в корзине есть покупки, оформите заказ, это очень просто</h3>
						<p class="cart-descr">Всего <span>2</span> товара в корзине</p>
						<div class="woocommerce">
						    <form name="checkout" method="post" class="checkout woocommerce-checkout clearfix" action="http://woocommerce/checkout/" enctype="multipart/form-data" novalidate="novalidate">
						        <div class="col-4" id="customer_details">
						            <div class="col-12">
						                <div class="woocommerce-billing-fields">
						                    <div class="col-2">
						                        <div class="woocommerce-shipping-fields"></div>
						                        <div class="woocommerce-additional-fields">
						                            <h3>Additional information</h3>
						                            <div class="woocommerce-additional-fields__field-wrapper">
						                                <p class="form-row notes" id="order_comments_field" data-sort=""><label for="order_comments" class="">Order notes</label><textarea name="order_comments" class="input-text " id="order_comments" placeholder="Notes about your order, e.g. special notes for delivery." rows="2" cols="5"></textarea></p>
						                            </div>
						                        </div>
						                    </div>
						                </div>
						                <h3 id="order_review_heading">Заказ</h3>
						                <div id="order_review" class="woocommerce-checkout-review-order">
						                    <table class="shop_table woocommerce-checkout-review-order-table">
						                        <thead>
						                            <tr>
						                                <th class="product-name">Товар</th>
						                                <th class="product-total">Итого</th>
						                            </tr>
						                        </thead>
						                        <tbody>
						                            <tr class="cart_item">
						                                <td class="product-name">
						                                    Test<strong class="product-quantity">× 1 980</strong>													
						                                </td>
						                                <td class="product-total">
						                                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">₴</span>289,050.00</span>						
						                                </td>
						                            </tr>
						                        </tbody>
						                        <tfoot>
						                            <tr class="cart-subtotal">
						                                <th>Подытог</th>
						                                <td><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">₴</span>289,050.00</span></td>
						                            </tr>
						                            <tr class="order-total">
						                                <th>Итого</th>
						                                <td><strong><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">₴</span>289,050.00</span></strong></td>
						                            </tr>
						                        </tfoot>
						                    </table>
						                    <div id="payment" class="woocommerce-checkout-payment">
						                        <ul class="wc_payment_methods payment_methods methods">
						                            <li class="wc_payment_method payment_method_cheque">
						                                <input id="payment_method_cheque" type="radio" class="input-radio" name="payment_method" value="cheque" checked="checked" data-order_button_text="" style="display: none;">
						                                <label for="payment_method_cheque">
						                                Check payments</label>
						                                <div class="payment_box payment_method_cheque">
						                                    <p>Пожалуйста, отправьте ваш чек, указав данные магазина: название, улицу, город, область/регион, страну, почтовый индекс.</p>
						                                </div>
						                            </li>
						                        </ul>
						                    </div>
						                </div>
					                </div>
				                </div>
						    </form>
    					</div> -->
					</div>
				</div>
			</div>
		</div>
		<div class="footer">
			<div class="footer-wrapper">
				<div class="container">
					<div class="footer-top clearfix">
						<div class="col-3">
							<div class="footer-top-logo">
								<a href="#">
									<div class="footer-top-logo-img"><img src="images/footer-logo.png" alt="Logo"></div>
								</a>
							</div>
						</div>
						<div class="col-3">
							<div class="footer-top-contact">
								<div class="footer-top-contact-icon"><img src="images/header-icon-1.png" alt=""></div>
								<div class="footer-top-contact-phone">8 800 600-30-20</div>
								<div class="footer-top-descr">Бесплатный многокональный номер</div>
							</div>
						</div>
						<div class="col-3">
							<div class="footer-top-language">
								<div class="footer-top-language-icon">
									<img src="images/header-icon-2.png" alt="">
								</div>
								<div class="footer-top-language-picker"><a href="#">Выбрать язык</a></div>
							</div>
						</div>
						<div class="col-3">
							<div class="footer-top-user_panel">
								<a href="#" class="footer-top-user_panel-link btn btn-medium btn-style-2">Войти</a>
								<a href="#" class="footer-top-user_panel-link cart btn btn-medium btn-style-2">Корзина</a>
							</div>
						</div>
					</div>
					<div class="footer-bottom clearfix">
						<div class="col-8">
							<ul class="footer-bottom-nav">
								<li><a href="#">Главная</a></li>
								<li><a href="#">ДНК-Тест</a></li>
								<li><a href="#" class="active">Вопросы-Ответы</a></li>
								<li><a href="#">О компании</a></li>
								<li><a href="#">Контактные данные</a></li>
							</ul>
						</div>
						<div class="col-4">
							<div class="footer-bottom-btn">
								<a href="#" class="btn btn-medium btn-style-1">Заказать сейчас</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script>
		$('.content-main_info-carousel').slick({
			centerMode: true,
			centerPadding: '0',
			slidesToShow: 3,
			responsive: [
				{
					breakpoint: 768,
					settings: {
						arrows: false,
						centerMode: true,
						centerPadding: '40px',
						slidesToShow: 3
					}
				},
				{
					breakpoint: 480,
					settings: {
						arrows: false,
						centerMode: true,
						centerPadding: '40px',
						slidesToShow: 1
					}
				}
			]
		});
	</script>
</body>
</html>