<?
    session_start();
    include ("connect.php");
    if(isset($_GET['exit']) and $_GET['exit'] == 1) {
        unset($_SESSION['auth']);
        session_destroy();
    }

    if (is_null($_SESSION['isAdmin'])) {
    	header('Location: index.php');
    }
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>Админка</title>
		<link rel="stylesheet" href="style.css">
	</head>

	<body>
		<div class="header">
				<div class="logo-block">
					<img class="logo" src="img/logo-block.png">
					<img class="logo" src="img/unnamed-removebg-preview.png">
				</div>

				<div class="nav-menu-header">
					<a class="nav-menu" href="index.php">Главная</a>
					<a class="nav-menu" href="katalog.php">Каталог товаров</a>
					<a class="nav-menu" href="stocks.php">Акции</a>
					<a class="nav-menu" href="contacts.php">Контакты</a>
				</div>

				<div class="serch_header">
					<input class="search_block" type="search" name="text" placeholder="Поиск" size="20" maxlength="50" autocomplete="off">
				</div>

				<div class="userlog-block">
					<a class="nav-menu" href=""><img class="log" src="img/basket-removebg-preview.png"> Корзина</a>
				</div>

				<div class="userlog-block">
					<!-- <a class="nav-menu" href=""><img class="log" src="img/userlog-removebg-preview.png"> Войти или регистрация</a> -->
					<?php
                        if (isset($_SESSION['login'])){ 
                            echo "<a class='nav-menu' href='?exit=1'>Выйти"." ".$_SESSION['login']."</a>";
                        }
                        else {
                            echo "<a class='nav-menu' href='auth.php' class='btn2'><img class='log' src='img/userlog-removebg-preview.png'> Войти или регистрация</a>
	<?php</a>";
                        }
                        ?>
				</div>
			</div>

			<section class="accordion-section">
				<div class="conteiner">
					<div class="content">
						<div class="section-title">
							<h1>Обратная связь</h1>
						</div>

						<div class="accordion">
							<?
							$result = mysqli_query($link, "SELECT * FROM `feedback`");
							while ($row = mysqli_fetch_assoc($result)) { ?>
								<div class="accordion__item">
									<div class="accordion__toggle">
										<div class="accordion__name"><? echo $row['name'] ?></div>
										<div class="accordion__phone"><? echo $row['phone'] ?></div>
										<div class="accordion__email"><? echo $row['email'] ?></div>
									</div>

									<div class="accordion__content">
							  			<p><? echo $row['message'] ?></p>

							  			<form method="POST" action="feedback-remove.php?remove=<? echo $row['id'] ?>">
							  				<button class="remove-btn">Удалить отзыв</button>
							  			</form>
									</div>
								</div>

							<? } mysqli_free_result($result); ?>
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
		</div>

		<script src="script.js"></script>
	</body>
</html>