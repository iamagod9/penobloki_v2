<?
    session_start();
    include ("connect.php");
    if(isset($_GET['exit']) and $_GET['exit'] == 1) {
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

		<title>Пенобетонные блоки</title>
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

					<div class="share-content">
						<img class="characteristics-pb" src="img/images_zz.jpg">
						<div class="main-text">
							<h1>Что такое пеноблок?</h2><br>
							<p> Пеноблок – пористый стройматериал, изготавливаемый из смеси цемента, воды с песком и пенообразователя. Это одна из разновидностей ячеистого бетона (пенобетона). Но в отличие от схожего по структуре газобетона пустоты в нем формируется не за счет химических реакций внутри блока в процессе застывания, а благодаря смешиванию бетонной смеси с заранее подготовленной пеной.</p><br>
							<p>Пенообразователь используется органический либо синтетический. Первый вариант на белковой основе дороже, но блок с ним получается более прочным и экологически чистым. Синтетика дешева, однако имеет 4-й класс опасности. Сами пеноблоки из нее получаются безопасными, но работать с исходной смесью при замешивании раствора приходится с большей осторожностью.</p>
						</div>
					</div>

					<h2 class="title-content">Преимущества пенобетонных блоков</h2>

					<div class="advantage-of-penoblocks">
						<ul type="none">
							<li><p class="adventage-items">Низкая плотность. Конструкции из облегченного материала оказывают минимально возможное давление на фундамент (плотность в 4 раза меньше, чем у керамзитобетона).</p></li><br>
							<li><p class="adventage-items">Прочность. Позволяет возводить несущие стены (в зданиях до 3 этажей из марок от D900 и выше).</p></li><br>
							<li><p class="adventage-items">Теплопроводность. Ниже, чем у обычного кирпича в 3-4 раза. Низкая теплопроводность обеспечивает комфортные условия проживания в любом климате, сохраняя в помещении прохладу летом, а тепло зимой. Следствие – энергосбережение.</p></li><br>
							<li><p class="adventage-items">Звукоизоляция. Важный фактор в городских условиях.</p></li><br>
							<li><p class="adventage-items">Пожароопасность. Пенобетон относится к негорючим материалам. Способен удерживать огонь прямого воздействия 5-7часов.</p></li><br>
							<li><p class="adventage-items">Влагостойкость. Блоки, изготовленные по ГОСТу, почти не имеют открытых пор и способны сутками держаться на поверхности воды, не впитывая ее.</p></li><br>
							<li><p class="adventage-items">Экологичность. Пеноблок с органическими пенообразователями не выделяет токсичных веществ.</p></li><br>
						</ul>
						<img class="antifire-img" src="img/antifire.jpg">
					</div>

					<h2 class="title-content">Виды и размеры пеноблоков</h2>

					<div class="type-and-size-of-penoblocks">
						<div class="main-text">
							<p>Одна из основных характеристик пенобетонного блока в его маркировке обозначается буквой «В» и цифрой от 0,5 до 60. Это показатель прочности, т.е. нагрузки в кг/см2, которую данный пеноблок в состоянии выдержать при сжатии. Чем выше этот индекс, тем больший вес способен удержать рассматриваемый стройматериал на себе без разрушения целостности. Если дом строится двухэтажный, то лучше всего для первого этажа взять блоки с максимально высокой прочностью, а для второго с более низкой.</p><br>
							<p>С первым параметром напрямую связана марка пенобетона «М» в той же маркировке. Цифра в ее обозначении вычисляется по формуле «значение прочности В»*10/0,7 с округлением до целого числа. Второй критерий в классификации – это их средняя плотность (МПа), которая выражена в наименовании изделия буквой «D» и величиной от 300 до 1200.</p><br>
							<p>По плотности и предназначению они делятся на три группы:</p><br>
							<ol>
								<li>Теплоизоляционные – D300 (В0,35 или В0,75), D400 (В0,75; В1 или В2) и D500 (В1,5; В2; В2,5 или В3,5).</li>
								<li>Конструкционно-теплоизоляционные – D600 (В2; В2,5; В3,5 или В5), D700 (В2; В2,5; В3,5 или В5), D800 (В2,5, В3,5, В5 или В7,5) и D900 (В2,5; В3,5; В5 или В7,5).</li>
								<li>Конструкционные– D1000 (В5 или В7,5), D1100 (В7,5 или В10) и D1200 (В10 или В12,5).</li>
							</ol><br>
							<p>Морозостойкость пеноблока обозначается от F15 до F75. Изделия с маркировкой F15–F25 предназначены для возведения внутренних перегородок дома, а от F25 и выше уже рекомендованы для строительства наружных стен.</p><br>
							<p>В зависимости от средней плотности и размеров пенобетонные блоки делятся на 10 типов с обозначением в маркировке от I до X. Например, у пеноблока типа «I» следующие габариты: высота 188 мм, ширина 300 мм и длина 588 мм. По плотности он может быть выполнен с маркой D500, D600 либо D700. Для блока типа «V» ГОСТом установлены размеры 288х250х288 мм и любой класс D от 300 до 1200. А пенобетонное изделие «X» имеет габаритные величины 88х200х398 мм и плотность только D1200.</p><br>
						</div>

						<div>
							<img class="size-of-penoblocks" src="img/size-of-penoblocks.jpg">
						</div>
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
							<p class="text_footer_bottom">Разработка интернет-магазина - Студия Varlasha</p>
						</div>
					</div>
				</div>
			</div>
		</div>	
	</body>
</html>