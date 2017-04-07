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
						<h3 class="cart-title">Всего в корзине есть покупки, оформите заказ, это очень просто</h3>
						<p class="cart-descr">Всего <span>2</span> товара в корзине</p>
						<div class="woocommerce">
						    <form name="checkout" method="post" class="checkout woocommerce-checkout clearfix" action="http://woocommerce/checkout/" enctype="multipart/form-data" novalidate="novalidate">
						        <div class="col2-set" id="customer_details">
						            <div class="col-1">
						                <div class="woocommerce-billing-fields">
						                    <h3>Выбрать способы доставки *</h3>
						                    <div class="woocommerce-billing-fields__field-wrapper">
						                    </div>
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
						                                    Test&nbsp;<strong class="product-quantity">× 2350</strong>													
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