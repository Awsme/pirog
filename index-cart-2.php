<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
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
						<h3 class="cart-title">Всего в корзине есть покупки, оформите заказ, это очень просто</h3>
						<p class="cart-descr">Всего <span>2</span> товара в корзине</p>
						<div class="woocommerce">
						    <form name="checkout" method="post" class="checkout woocommerce-checkout clearfix">
						        <div class="col-12 clearfix" id="customer_details">
						            <div class="col-4">
						                <div class="woocommerce-billing-fields">
						                    <!-- <h3>Billing details</h3> -->
						                    <div class="woocommerce-billing-fields__field-wrapper">
						                    <p class="form-row form-row-wide address-field update_totals_on_change validate-required woocommerce-validated" id="billing_country_field" data-sort="40">
						                            <label for="billing_country" class="">Страна <abbr class="required" title="обязательно">*</abbr></label>
						                            <span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-billing_country-container"><span class="select2-selection__rendered" id="select2-billing_country-container" title="Украина">Российская Федерация</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
						                        </p>
						                        <p class="form-row form-row-first validate-required woocommerce-invalid woocommerce-invalid-required-field" id="billing_first_name_field" data-sort="10"><label for="billing_first_name" class="">Фамилия Имя Отчество<abbr class="required" title="обязательно">*</abbr></label><input type="text" class="input-text " name="billing_first_name" id="billing_first_name" placeholder="" value="" autocomplete="given-name" autofocus="autofocus"></p>
						                        <p class="form-row form-row-wide address-field validate-state validate-required" id="billing_state_field" data-sort="80" data-o_class="form-row form-row-wide address-field validate-required validate-state"><label for="billing_state" class="">Область/регион <abbr class="required" title="обязательно">*</abbr></label><input type="text" class="input-text " value="" placeholder="" name="billing_state" id="billing_state" autocomplete="address-level1"></p>
						                        <p class="form-row form-row-wide address-field validate-postcode validate-required" id="billing_postcode_field" data-sort="90" data-o_class="form-row form-row-wide address-field validate-required validate-postcode"><label for="billing_postcode" class="">Почтовый индекс <abbr class="required" title="обязательно">*</abbr></label><input type="text" class="input-text " name="billing_postcode" id="billing_postcode" placeholder="" value="" autocomplete="postal-code"></p>
						                        <p class="form-row form-row-wide address-field validate-required" id="billing_address_1_field" data-sort="50"><label for="billing_address_1" class="">Адрес <abbr class="required" title="обязательно">*</abbr></label><input type="text" class="input-text " name="billing_address_1" id="billing_address_1" placeholder="Street address" value="" autocomplete="address-line1"></p>
						                        <p class="form-row form-row-first validate-required validate-phone" id="billing_phone_field" data-sort="100"><label for="billing_phone" class="">Телефон <abbr class="required" title="обязательно">*</abbr></label><input type="tel" class="input-text " name="billing_phone" id="billing_phone" placeholder="" value="" autocomplete="tel"></p>
						                        <p class="form-row form-row-last validate-required validate-email" id="billing_email_field" data-sort="110"><label for="billing_email" class="">Email <abbr class="required" title="обязательно">*</abbr></label><input type="email" class="input-text " name="billing_email" id="billing_email" placeholder="" value="gitawsme@gmail.com" autocomplete="email username"></p>
						                        <p class="form-row form-row-wide woocommerce-validated" id="billing_company_field" data-sort="30"><label for="billing_company" class="">Company name</label><input type="text" class="input-text " name="billing_company" id="billing_company" placeholder="" value="" autocomplete="organization"></p>
						                        
						                        
						                        <p class="form-row form-row-wide address-field" id="billing_address_2_field" data-sort="60"><input type="text" class="input-text " name="billing_address_2" id="billing_address_2" placeholder="Apartment, suite, unit etc. (optional)" value="" autocomplete="address-line2"></p>
						                        <p class="form-row form-row-wide address-field validate-required" id="billing_city_field" data-sort="70" data-o_class="form-row form-row-wide address-field validate-required"><label for="billing_city" class="">Населённый пункт <abbr class="required" title="обязательно">*</abbr></label><input type="text" class="input-text " name="billing_city" id="billing_city" placeholder="" value="" autocomplete="address-level2"></p>
						                        <div class="woocommerce-additional-fields__field-wrapper">
							                        <p class="form-row notes" id="order_comments_field" data-sort=""><label for="order_comments" class="">Order notes</label><textarea name="order_comments" class="input-text " id="order_comments" placeholder="Notes about your order, e.g. special notes for delivery." rows="2" cols="5"></textarea></p>
							                    </div>
							                   </div>
						                </div>
						            </div>
						            <div class="col-1">&nbsp;</div>
						            <div class="col-7">
						            	<div class="woocommerce-checkout-block block-info">
						            		<h3 id="order_review_heading">Заказ</h3>
						            		<table class="shop_table woocommerce-checkout-review-order-table">
								                <tbody>
								                    <tr class="cart_item">
								                        <td class="product-name">
								                            1  Тест ДНК elegance самое интересное
								                        </td>
								                    </tr>
								                    <tr class="cart_item">
								                        <td class="product-name">
								                        	2  Еlegance самое интересное									
								                        </td>
								                    </tr>
								                </tbody>
								                <tfoot>
								                    <tr class="order-total">
								                        <td>Итого товаров на сумму:</td>
								                        <td>
							                        		<span class="woocommerce-Price-amount amount">1 980
							                        		<span class="woocommerce-Price-currencySymbol">P</span></span>
								                        </td>
								                    </tr>
								                </tfoot>
								            </table>
						            	</div>
								        <div id="order_review" class="woocommerce-checkout-review-order woocommerce-checkout-block">
								            <div id="payment" class="woocommerce-checkout-payment">
								                <ul class="wc_payment_methods payment_methods methods">
								                    <li class="wc_payment_method payment_method_cheque">
								                        <input id="payment_method_cheque" type="radio" class="input-radio" name="payment_method" value="cheque" checked="checked" data-order_button_text="">
								                        <label for="payment_method_cheque">
								                        Варианты оплаты</label>
								                        <div class="payment_box payment_method_cheque">
								                            <p>Пожалуйста, отправьте ваш чек, указав данные магазина: название, улицу, город, область/регион, страну, почтовый индекс.</p>
								                        </div>
								                    </li>
								                </ul>
								                <div class="form-row place-order">
								                    <input type="submit" class="button alt btn btn-input btn-large btn-style-1" name="woocommerce_checkout_place_order" id="place_order" value="Подтвердить заказ" data-value="Подтвердить заказ">
								                    <input type="hidden" id="_wpnonce" name="_wpnonce" value="d382358d8c"><input type="hidden" name="_wp_http_referer" value="/checkout/?wc-ajax=update_order_review">	
								                </div>
								            </div>
								        </div>
						            </div>
						        </div>
						    </form>
						</div>
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