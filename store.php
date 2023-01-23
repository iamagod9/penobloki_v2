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

		<title>О магазине</title>
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
                        echo "<a class='high-item nav-menu' href='auth.php' class='btn2'><img class='log' src='img/userlog-removebg-preview.png'> Войти или регистрация</a>
<?php</a>";
                    }
                    ?>
			</div>
		</div>

		<div class="conteiner">
			<div class="content">
				<div class="about-the-store">
					<p class="about-the-store-text">Мы рады приветствовать вас на сайте нашей компании.</p><br>
					<p class="about-the-store-text">Мы предлагаем лучший выбор строительных материалов в Кемерово по низкой цене. Сотрудничая с нашей компанией - вы доверяете качеству известных мировых производителей. Мы продаём только оригинальный, сертифицированный товар, соответствующий требованиям качества Российской Федерации и Таможенного Союза. Покупая стройматериалы в наших магазинах - вы защищаете себя от подделок.</p><br>
					<p class="about-the-store-text">Наша фирма практикует индивидуальный подход к каждому клиенту, поэтому наши специалисты помогут выбрать товар, который нужен именно вам. Для постоянных клиентов действует гибкая, прогрессирующая система скидок.</p><br>
					<p class="about-the-store-text">Купив у нас строительные блоки - вы можете заказать их доставку на объект. Наши цены - лучшие в Кемерово, которые вас приятно удивят. Чем больше размер покупки, тем дешевле доставка!</p>

					<h2 class="title-feedback">Наши возможности</h2>

					<ul>
						<li>Быстрая доставка</li>
						<li>Низкие цены</li>
						<li>Широкий ассортимент</li>
						<li>Бонусы и подарки</li>
						<li>Отличное обслуживаение</li>
						<li>Профессиональный менеджеры</li>
						<li>Гарантия на все товары</li>
						<li>Надежные поставщики</li>
						<li>Сезонные скидки</li>
						<li>Карты постоянных клиентов</li>
					</ul><br>

					<p class="about-the-store-text">Мы всегда рады общению с нашими клиентами. Если у вас есть какие-либо пожелания, предложения, замечания, касающиеся работы нашего Интернет-магазина - пишите нам, и мы с благодарностью примем ваше мнение во внимание:</p>
				</div>
			</div>
		</div>

		<div class="footer">
			<div class="conteiner-footer">
				<div class="footer_block">
					<div class="footer_block_content_top">
						<div class="footer_block_one">
							<a class="zag_parametr_footer" href="#">О компании</a>
							<a class="parametr_footer" href="contacts.php">Контакты</a>
							<a class="parametr_footer" href="">О магазине</a>
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