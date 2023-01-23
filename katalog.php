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

		<title>Пенобетонные блоки купить</title>
		<link rel="stylesheet" href="style.css">
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
				
					<!-- <a class="nav-menu" href=""><img class="log" src="img/userlog-removebg-preview.png"> Войти или регистрация</a> -->
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

		<div class="main">	
			<div class="conteiner">
				<div class="content">
					<div class="title-content-block">
						<h2 class="title-content">Пенобетонные блоки</h2>
					</div>

					<div class="penoblocks-block">
						<div class="penoblocks">
							<img class="penoblocks-img" src="img/penoblock1.png">
							<p class="penoblocks-name">Пенобетонный блок ВКБЛОК D500 625*80*250</p>
							<p class="penoblocks-name"><b>Цена: 3 800 руб./м3</b></p>
							
							<form action="basket-add.php" method="POST">
								<input class="penoblocks-name" type="hidden" name="penoblock-name" value="Пенобетонный блок ВКБЛОК D500 625*80*250">
								<input class="penoblocks-name" type="hidden" name="penoblock-price" value="3800">

								<p>Количество: <input class="count-basket" type="text" name="penoblock-count" max="5000" maxlength="4" min="1" value="1"></p>

								<button class="penoblocks-button" type="submit">В корзину</button>
							</form>
						</div>

						<div class="penoblocks">
							<img class="penoblocks-img" src="img/penoblock1.png">
							<p class="penoblocks-name">Пенобетонный блок NOVOBLOCK D500 625*80*250</p>
							<p class="penoblocks-name"><b>Цена: 3 800 руб./м3</b></p>
							
							<form action="basket-add.php" method="POST">
								<input class="penoblocks-name" type="hidden" name="penoblock-name" value="Пенобетонный блок NOVOBLOCK D500 625*80*250">
								<input class="penoblocks-name" type="hidden" name="penoblock-price" value="3800">

								<p>Количество: <input class="count-basket" type="text" name="penoblock-count" max="5000" maxlength="4" min="1" value="1"></p>

								<button class="penoblocks-button" type="submit">В корзину</button>
							</form>
						</div>

						<div class="penoblocks">
							<img class="penoblocks-img" src="img/penoblock1.png">
							<p class="penoblocks-name">Пенобетонный блок ВКБЛОК D500 625*150*250</p>
							<p class="penoblocks-name"><b>Цена: 3 800 руб./м3</b></p>
							
							<form action="basket-add.php" method="POST">
								<input class="penoblocks-name" type="hidden" name="penoblock-name" value="Пенобетонный блок ВКБЛОК D500 625*150*250">
								<input class="penoblocks-name" type="hidden" name="penoblock-price" value="3800">

								<p>Количество: <input class="count-basket" type="text" name="penoblock-count" max="5000" maxlength="4" min="1" value="1"></p>

								<button class="penoblocks-button" type="submit">В корзину</button>
							</form>
						</div>

						<div class="penoblocks">
							<img class="penoblocks-img" src="img/penoblock1.png">
							<p class="penoblocks-name">Пенобетонный блок NOVOBLOCK D500 625*75*250</p>
							<p class="penoblocks-name"><b>Цена: 3 800 руб./м3</b></p>
							
							<form action="basket-add.php" method="POST">
								<input class="penoblocks-name" type="hidden" name="penoblock-name" value="Пенобетонный блок NOVOBLOCK D500 625*75*250">
								<input class="penoblocks-name" type="hidden" name="penoblock-price" value="3800">

								<p>Количество: <input class="count-basket" type="text" name="penoblock-count" max="5000" maxlength="4" min="1" value="1"></p>

								<button class="penoblocks-button" type="submit">В корзину</button>
							</form>
						</div>

						<div class="penoblocks">
							<img class="penoblocks-img" src="img/penoblock1.png">
							<p class="penoblocks-name">Пенобетонный блок ВКБЛОК D500 625*75*250</p>
							<p class="penoblocks-name"><b>Цена: 3 800 руб./м3</b></p>
							
							<form action="basket-add.php" method="POST">
								<input class="penoblocks-name" type="hidden" name="penoblock-name" value="Пенобетонный блок ВКБЛОК D500 625*75*250">
								<input class="penoblocks-name" type="hidden" name="penoblock-price" value="3800">

								<p>Количество: <input class="count-basket" type="text" name="penoblock-count" max="5000" maxlength="4" min="1" value="1"></p>

								<button class="penoblocks-button" type="submit">В корзину</button>
							</form>
						</div>

						<div class="penoblocks">
							<img class="penoblocks-img" src="img/penoblock1.png">
							<p class="penoblocks-name">Пенобетонный блок NOVOBLOCK D500 625*150*250</p>
							<p class="penoblocks-name"><b>Цена: 3 800 руб./м3</b></p>
							
							<form action="basket-add.php" method="POST">
								<input class="penoblocks-name" type="hidden" name="penoblock-name" value="Пенобетонный блок NOVOBLOCK D500 625*150*250">
								<input class="penoblocks-name" type="hidden" name="penoblock-price" value="3800">

								<p>Количество: <input class="count-basket" type="text" name="penoblock-count" max="5000" maxlength="4" min="1" value="1"></p>

								<button class="penoblocks-button" type="submit">В корзину</button>
							</form>
						</div>

						<div class="penoblocks">
							<img class="penoblocks-img" src="img/penoblock1.png">
							<p class="penoblocks-name">Пенобетонный блок NOVOBLOCK D500 625*75*250</p>
							<p class="penoblocks-name"><b>Цена: 3 800 руб./м3</b></p>
							
							<form action="basket-add.php" method="POST">
								<input class="penoblocks-name" type="hidden" name="penoblock-name" value="Пенобетонный блок NOVOBLOCK D500 625*75*250">
								<input class="penoblocks-name" type="hidden" name="penoblock-price" value="3800">

								<p>Количество: <input class="count-basket" type="text" name="penoblock-count" max="5000" maxlength="4" min="1" value="1"></p>

								<button class="penoblocks-button" type="submit">В корзину</button>
							</form>
						</div>

						<div class="penoblocks">
							<img class="penoblocks-img" src="img/penoblock1.png">
							<p class="penoblocks-name">Пенобетонный блок ВКБЛОК D500 625*75*250</p>
							<p class="penoblocks-name"><b>Цена: 3 800 руб./м3</b></p>
							
							<form action="basket-add.php" method="POST">
								<input class="penoblocks-name" type="hidden" name="penoblock-name" value="Пенобетонный блок ВКБЛОК D500 625*75*250">
								<input class="penoblocks-name" type="hidden" name="penoblock-price" value="3800">

								<p>Количество: <input class="count-basket" type="text" name="penoblock-count" max="5000" maxlength="4" min="1" value="1"></p>

								<button class="penoblocks-button" type="submit">В корзину</button>
							</form>
						</div>

						<div class="penoblocks">
							<img class="penoblocks-img" src="img/penoblock1.png">
							<p class="penoblocks-name">Пенобетонный блок NOVOBLOCK D500 625*150*250</p>
							<p class="penoblocks-name"><b>Цена: 3 800 руб./м3</b></p>
							
							<form action="basket-add.php" method="POST">
								<input class="penoblocks-name" type="hidden" name="penoblock-name" value="Пенобетонный блок NOVOBLOCK D500 625*150*250">
								<input class="penoblocks-name" type="hidden" name="penoblock-price" value="3800">

								<p>Количество: <input class="count-basket" type="text" name="penoblock-count" max="5000" maxlength="4" min="1" value="1"></p>

								<button class="penoblocks-button" type="submit">В корзину</button>
							</form>
						</div>

						<div class="penoblocks">
							<img class="penoblocks-img" src="img/penoblock1.png">
							<p class="penoblocks-name">Пенобетонный блок NOVOBLOCK D500 625*75*250</p>
							<p class="penoblocks-name"><b>Цена: 3 800 руб./м3</b></p>
							
							<form action="basket-add.php" method="POST">
								<input class="penoblocks-name" type="hidden" name="penoblock-name" value="Пенобетонный блок NOVOBLOCK D500 625*75*250">
								<input class="penoblocks-name" type="hidden" name="penoblock-price" value="3800">

								<p>Количество: <input class="count-basket" type="text" name="penoblock-count" max="5000" maxlength="4" min="1" value="1"></p>

								<button class="penoblocks-button" type="submit">В корзину</button>
							</form>
						</div>

						<div class="penoblocks">
							<img class="penoblocks-img" src="img/penoblock1.png">
							<p class="penoblocks-name">Пенобетонный блок ВКБЛОК D500 625*75*250</p>
							<p class="penoblocks-name"><b>Цена: 3 800 руб./м3</b></p>
							
							<form action="basket-add.php" method="POST">
								<input class="penoblocks-name" type="hidden" name="penoblock-name" value="Пенобетонный блок ВКБЛОК D500 625*75*250">
								<input class="penoblocks-name" type="hidden" name="penoblock-price" value="3800">

								<p>Количество: <input class="count-basket" type="text" name="penoblock-count" max="5000" maxlength="4" min="1" value="1"></p>

								<button class="penoblocks-button" type="submit">В корзину</button>
							</form>
						</div>

						<div class="penoblocks">
							<img class="penoblocks-img" src="img/penoblock1.png">
							<p class="penoblocks-name">Пенобетонный блок NOVOBLOCK D500 625*150*250</p>
							<p class="penoblocks-name"><b>Цена: 3 800 руб./м3</b></p>
							
							<form action="basket-add.php" method="POST">
								<input class="penoblocks-name" type="hidden" name="penoblock-name" value="Пенобетонный блок NOVOBLOCK D500 625*150*250">
								<input class="penoblocks-name" type="hidden" name="penoblock-price" value="3800">

								<p>Количество: <input class="count-basket" type="text" name="penoblock-count" max="5000" maxlength="4" min="1" value="1"></p>

								<button class="penoblocks-button" type="submit">В корзину</button>
							</form>
						</div>

						<!-- <div class="penoblocks">
							<img class="penoblocks-img" src="img/penoblock1.png">
						</div> -->
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
		</div>

		<script src="script.js"></script>
	</body>
</html>