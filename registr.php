<!DOCTYPE html>
<html lang="en">
<head>
	<title>Регистрация</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="main.css">

</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					Регистрация
				</span>
				<form class="login100-form validate-form p-b-33 p-t-5" action="postData.php" method="POST" target="_self">

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="email" name="login" placeholder="Логин" required>
						<span class="focus-input100" ></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password" required pattern = '[a-zA-Z0-9_.]{3,16}' placeholder="Пароль">
						<span class="focus-input100" ></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Enter password">
						<input class="input100" type="password" name="Password confirmation" required pattern = '[a-zA-Z0-9_.]{3,16}'  placeholder="Повторите пароль">
						<span class="focus-input100" ></span>
					</div>

					<div class="container-login100-form-btn m-t-32">
						<button>
							<input  class="login100-form-btn" type="submit" value="Отправить">
						</button>
					</div>

					 <? 
				    if ($_GET['suc']==true){
				        echo '</br>Успешный вход';
				    } elseif ($_GET['err']=='dup'){
				        echo '</br>Пользователь уже зарегистрирован';}?>
				    </div>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>

</body>
</html>