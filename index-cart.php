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
							<a href="#" class="header-top-user_panel-link cart cart-active btn btn-medium btn-style-2">Корзина</a>
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
						<form class="woocommerce-cart-form" action="http://woocommerce/cart/" method="post">					
							<table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents" cellspacing="0">
								<tr>													
									<th class="product-thumbnail">&nbsp;</th>
									<th class="product-name">Товар</th>
									<th class="product-price">Цена</th>
									<th class="product-quantity">Кол-во</th>
									<th class="product-subtotal">Итого</th>
									<th class="product-remove">&nbsp;</th>
								</tr>
								<tr class="woocommerce-cart-form__cart-item cart_item">													
									<td class="product-thumbnail">
										<a href="#"><img src="images/cart-product-1.png" alt="Заполнитель" width="107" class="woocommerce-placeholder wp-post-image" height="80"></a>
									</td>
									<td class="product-name" data-title="Товар">
										<a href="#">DNS test интересные вопросы</a>
									</td>
									<td class="product-price" data-title="Цена">
										<span class="woocommerce-Price-amount amount">
											1 980<span class="woocommerce-Price-currencySymbol"> Р</span>
										</span>
									</td>
									<td class="product-quantity" data-title="Количество">
										<div class="quantity">
											<input type="number" class="input-text qty text" step="1" min="0" max="" name="" value="2350" title="Кол-во" size="4" pattern="[0-9]*" inputmode="numeric">
										</div>
									</td>
									<td class="product-subtotal" data-title="Итого">
										<span class="woocommerce-Price-amount amount">
											2 980
											<span class="woocommerce-Price-currencySymbol">₴</span>													
										</span>
									</td>
									<td class="product-remove">
										<a href="#" class="remove" aria-label="Удалить эту позицию" data-product_id="8" data-product_sku="">×</a>
									</td>
								</tr>
								<tr class="woocommerce-cart-form__cart-item cart_item">													
									<td class="product-thumbnail">
										<a href="#"><img src="images/cart-product-1.png" alt="Заполнитель" width="107" class="woocommerce-placeholder wp-post-image" height="80"></a>
									</td>
									<td class="product-name" data-title="Товар">
										<a href="#">DNS test интересные вопросы</a>
									</td>
									<td class="product-price" data-title="Цена">
										<span class="woocommerce-Price-amount amount">
											1 980<span class="woocommerce-Price-currencySymbol"> Р</span>
										</span>
									</td>
									<td class="product-quantity" data-title="Количество">
										<div class="quantity">
											<input type="number" class="input-text qty text" step="1" min="0" max="" name="" value="2350" title="Кол-во" size="4" pattern="[0-9]*" inputmode="numeric">
										</div>
									</td>
									<td class="product-subtotal" data-title="Итого">
										<span class="woocommerce-Price-amount amount">
											2 980
											<span class="woocommerce-Price-currencySymbol">₴</span>													
										</span>
									</td>
									<td class="product-remove">
										<a href="#" class="remove" aria-label="Удалить эту позицию" data-product_id="8" data-product_sku="">×</a>
									</td>
								</tr>
								<tr class="woocommerce-cart-form__cart-item cart_item">													
									<td class="product-thumbnail">
										<a href="#"><img src="images/cart-product-1.png" alt="Заполнитель" width="107" class="woocommerce-placeholder wp-post-image" height="80"></a>
									</td>
									<td class="product-name" data-title="Товар">
										<a href="#">DNS test интересные вопросы</a>
									</td>
									<td class="product-price" data-title="Цена">
										<span class="woocommerce-Price-amount amount">
											1 980<span class="woocommerce-Price-currencySymbol"> Р</span>
										</span>
									</td>
									<td class="product-quantity" data-title="Количество">
										<div class="quantity">
											<input type="number" class="input-text qty text" step="1" min="0" max="" name="" value="2350" title="Кол-во" size="4" pattern="[0-9]*" inputmode="numeric">
										</div>
									</td>
									<td class="product-subtotal" data-title="Итого">
										<span class="woocommerce-Price-amount amount">
											2 980
											<span class="woocommerce-Price-currencySymbol">₴</span>													
										</span>
									</td>
									<td class="product-remove">
										<a href="#" class="remove" aria-label="Удалить эту позицию" data-product_id="8" data-product_sku="">×</a>
									</td>
								</tr>
								<tr class="woocommerce-cart-form__cart-item cart_item">													
									<td class="product-thumbnail">
										<a href="#"><img src="images/cart-product-1.png" alt="Заполнитель" width="107" class="woocommerce-placeholder wp-post-image" height="80"></a>
									</td>
									<td class="product-name" data-title="Товар">
										<a href="#">DNS test интересные вопросы</a>
									</td>
									<td class="product-price" data-title="Цена">
										<span class="woocommerce-Price-amount amount">
											1 980<span class="woocommerce-Price-currencySymbol"> Р</span>
										</span>
									</td>
									<td class="product-quantity" data-title="Количество">
										<div class="quantity">
											<input type="number" class="input-text qty text" step="1" min="0" max="" name="" value="2350" title="Кол-во" size="4" pattern="[0-9]*" inputmode="numeric">
										</div>
									</td>
									<td class="product-subtotal" data-title="Итого">
										<span class="woocommerce-Price-amount amount">
											2 980
											<span class="woocommerce-Price-currencySymbol">₴</span>													
										</span>
									</td>
									<td class="product-remove">
										<a href="#" class="remove" aria-label="Удалить эту позицию" data-product_id="8" data-product_sku="">×</a>
									</td>
								</tr>
							</table>
						</form>
						<div class="cart-collaterals">
							<div class="cart_totals calculated_shipping">
								<table cellspacing="0" class="shop_table shop_table_responsive">
									<tbody>
										<tr class="order-total">
											<th>Итого к оплате</th>
											<td data-title="Итого">
												<strong>
													<span class="woocommerce-Price-amount amount">
														289,050.00
														<span class="woocommerce-Price-currencySymbol">₴</span>														
													</span>
												</strong>
											</td>
										</tr>
									</tbody>
								</table>
								<div class="wc-proceed-to-checkout">
									<a href="http://woocommerce/checkout/" class="checkout-button button alt wc-forward btn btn-large btn-style-1">Оформить заказ</a>
								</div>
							</div>
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