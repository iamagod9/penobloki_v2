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

		<title>Наши контакты</title>
		<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="style.css">
		<script src="https://www.google.com/recaptcha/api.js" ></script>
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
                        echo "<a class='high-item nav-menu' href='auth.php' class='btn2'><img class='log' src='img/userlog-removebg-preview.png'> Войти или регистрация</a>
<?php</a>";
                    }
                    ?>
			</div>
		</div>

		<section class="contact-section">
			<div class="conteiner">
				<div class="contact">
					<div class="contact-info">
						<div class="contact-item">
							<i class="fa fa-map-marker"></i>
							<p><span>Адрес</span>401000, г.Кемерово, ул Павленко 1А</p>
						</div>

						<div class="contact-item">
							<i class="fa fa-phone"></i>
							<p><span>Телефон</span>+7 (985) 234 53 23</p>
						</div>

						<div class="contact-item">
							<i class="fa fa-envelope"></i>
							<p><span>E-Mail</span>ekopb@mail.ru</p>
						</div>

						<div class="contact-item">
							<i class="fa fa-history" ></i>
							<p><span>Режим работы</span>Пн-Пт: 9.00-18.00, Сб: 9.00-16.00</p>
						</div>
					</div>

					<div class="contact-maps"><img src="img/maps.png"></div>
				</div>

				
				<h2 class="title-feedback">Обратная связь</h2>

				<form class="feedback" method="POST" action="feedback.php">
					<div class="feedback-up">
						<div class="feedback-message">
							<p class="text-feedback">Сообщение</p>
							<textarea class="feedback-message-box" name="message" required></textarea>
						</div>

						<div class="feedback-data">
							<div class="item-feedback-data">
								<p class="text-feedback">Ваше имя</p>
								<input class="feedback-data-box" name="name" required>
							</div>

							<div class="feedback-message">
								<p class="text-feedback">Телефон</p>
								<input class="feedback-data-box" name="phone" required>
							</div>

							<div class="feedback-message">
								<p class="text-feedback">E-Mail</p>
								<input class="feedback-data-box" name="email" required>
							</div>
						</div>
					</div>

					<p class="text-feedback">Подтвердите,что вы не робот</p>
					<div class="g-recaptcha" data-sitekey="6LeC0e8aAAAAABNOfhOVH5rwgDtqrLy1yFb_OP5n"></div>
					
					<p class="text-feedback checkbox-feedback"><input type="checkbox" name=""> Даю согласие на обработку персональных данных</p>

					<button class="feedback-button" type="submit">Отправить</button>
				</form>				
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