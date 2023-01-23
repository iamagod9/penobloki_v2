<?
    session_start();
    include ("connect.php");
    if(isset($_GET['exit']) and $_GET['exit'] == 1){
        unset($_SESSION['auth']);
        session_destroy();

        header('Location: index.php');
    }
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>Акции</title>
		<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>

	<body>
		<div class="header">
			<div class="logo-block">
				<img class="logo" src="img/unnamed-removebg-preview.png">
			</div>

			<div class="nav-menu-header">
				<a class="nav-menu" href="index.php">Главная</a>
					<a class="nav-menu" href="katalog.php">Каталог</a>
					<a class="nav-menu" href="stocks.php">Акции</a>
					<a class="nav-menu" href="contacts.php">Контакты</a>
			</div>

			<div class="serch_header">
					<input class="search_block" type="search" name="text" placeholder="Поиск" size="20" maxlength="50" autocomplete="off">
			</div>

			<div class="userlog-block">
				<a class="high-items nav-menu" href="basket.php"><img class="log" src="img/basket-removebg-preview.png"> Корзина</a>
			
				<?php
                    if (isset($_SESSION['login'])){ 
                        echo "<a class='high-item nav-menu' href='?exit=1'>Выйти"." ".$_SESSION['login']."</a>";
                    }
                    else {
                        echo "<a class='high-item high-item nav-menu' href='auth.php' class='btn2'><img class='log' src='img/userlog-removebg-preview.png'> Войти или регистрация</a>
<?php</a>";
                    }
                    ?>
			</div>
		</div>

		<section class="blog-section">
			<div class="conteiner">
				<div class="blog">
					<div class="blog-width">
						<div class="blog-item">
							<div class="blog-img"><img class="img-blog" src="img/sale/1.jpg"></div>
							<div class="blog-content">
								<h4>Скидка 5% на покупку кирпича RECKE BRICKEREI</h4>

								<div class="blog-meta">
									<span><i class="fa fa-calendar-o"></i> 15 ноября 2020</span>
								</div> 

								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
								<!-- <a href="" class="blog-readmore">Подробнее <i class="fas fa-angle-double-right"></i></a> -->
							</div>
						</div>
					</div>

					<div class="blog-width">
						<div class="blog-item">
							<div class="blog-img"><img class="img-blog" src="img/sale/1.jpg"></div>
							<div class="blog-content">
								<h4>Скидка 5% на покупку кирпича RECKE BRICKEREI</h4>

								<div class="blog-meta">
									<span><i class="fa fa-calendar-o"></i> 23 декабря 2020</span>
								</div>

								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
								<!-- <a href="" class="blog-readmore">Подробнее <i class="fas fa-angle-double-right"></i></a> -->
							</div>
						</div>
					</div>

					<div class="blog-width">
						<div class="blog-item">
							<div class="blog-img"><img class="img-blog" src="img/sale/1.jpg"></div>
							<div class="blog-content">
								<h4>Скидка 5% на покупку кирпича RECKE BRICKEREI</h4>

								<div class="blog-meta">
									<span><i class="fa fa-calendar-o"></i> 17 января 2021</span>
								</div>

								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
								<!-- <a href="" class="blog-readmore">Подробнее <i class="fas fa-angle-double-right"></i></a> -->
							</div>
						</div>
					</div>

					<div class="blog-width">
						<div class="blog-item">
							<div class="blog-img"><img class="img-blog" src="img/sale/1.jpg"></div>
							<div class="blog-content">
								<h4>Скидка 5% на покупку кирпича RECKE BRICKEREI</h4>

								<div class="blog-meta">
									<span><i class="fa fa-calendar-o"></i> 9 мая 2021</span>
								</div>

								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
								<!-- <a href="" class="blog-readmore">Подробнее <i class="fas fa-angle-double-right"></i></a> -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<div class="footer">
			<div class="conteiner-footer">
				<div class="footer_block">
					<div class="footer_block_content_top">
						<div class="footer_block_one">
							<a class="zag_parametr_footer" href="#">О компании</a>
							<a class="parametr_footer" href="contacts.php">Контакты</a>
							<a class="parametr_footer" href="store.php">О магазине</a>
						</div>

						<div class="footer_block_one">
							<a class="zag_parametr_footer" href="#">Каталог</a>
							<a class="parametr_footer" href="katalog.php">Каталог товаров</a>
							<a class="parametr_footer" href="stocks.php">Акции</a>
						</div>

						<div class="footer_block_one">
							<a class="zag_parametr_footer" href="">Помощь</a>
							<a class="parametr_footer" href="#">Оплата</a>
							<a class="parametr_footer" href="#">Политика</a>
						</div>

						<div class="footer_block_contact">
							<p class="ours_contact">Наши контакты</p>
							<a class="block_contact" href="#"><img class="icons_footer" src="img/icons_telephone.png"> +7 (985) 234 53 23</a>
							<a class="block_contact" href="#"><img class="icons_footer" src="img/mail.png"> ekopb@mail.ru</a>
							<p class="block_contact"><img class="icons_footer" src="img/geo.png">401000, г.Кемерово, ул Павленко 1А</p>
						</div>
					</div>

					<div class="footer_block_content_bottom">
						<p class="copyright">2020 © Интернет-магазин «ЭКОблок»</p>
						<p class="text_footer_bottom">SHELE - продвижение сайта по трафику.</p>
						<p class="text_footer_bottom"> Разработка интернет-магазина - Студия Varlasha</p>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>