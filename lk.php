<?php
include 'functions.php';
session_start();
if (!$authorized) {
	header('location: /');
}
?>

<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Личный кабинет</title>
	<link rel="shortcut icon" href="./img/spa.ico" type="image/x-icon">
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<div class="wrapper">
		<header class="header">
			<div class="header-logo">
				<a href="./index.php" title="Обновить">
					<div class="header-logo__image">
						<img src="./img/logo-icon.png" alt="logo">
					</div>
				</a>
				<h1 class="header-logo__title title_logo">Relax</h1>
			</div>
			<nav class="header-navigation">
				<ul class="header-links">
					<li class="header-links__link">
						<a href="index.php">На главную</a>
					</li>
					<li class="header-links__link">
						<a href="./index.php">Услуги</a>
					</li>
					<li class="header-links__link">
						<a href="index.php">Акции</a>
					</li>
					<li class="header-links__link">
						<a href="index.php">Галерея</a>
					</li>
					<li class="header-links__link">
						<a href="index.php">Контакты</a>
					</li>
				</ul>
			</nav>
			<div class="header__user-info">
				<?php if (!$authorized) { ?>
					<p><a href="./login.php" title="Войти в личный кабинет">Войти</a>
						<a href="./login.php" title="Войти в личный кабинет"><img src="./img/login-icon.png" alt="in"></a>
					</p>
				<?php } else { ?>
					<p>Здравствуйте, <span>
							<?= getCurrentUser(); ?>
						</span>!</p>
					<p><a href="./lk.php" title="Личный кабинет">Личный кабинет</a> |
						<a href="./logout.php" title="Выйти">Выйти</a>
						<a href="./logout.php" title="Выйти"><img src="./img/Logout-icon.png" alt="out"></a>
					</p>
				<?php } ?>
			</div>
		</header>

		<main class="page-content">
			<article class="user-info">
				<h2 class="user-info__title subtitle">Личный кабинет</h2>
				<section class="about-user">
					<p><?= getCurrentUser() ?>, время действия персонального промокода истекает через: </p>
					<p>
						<?php if ($timeShowCondition) { ?>
							<span class="stocks-list__item_timer"><?= $time; ?> </span>
						<?php	} else { ?>
							<span class="error"><span>К сожалению время истекло :(</span></з>
							<?php } ?>
					</p>
					<?php if ($getBirthDate) { ?>
						<p><?= getCurrentUser() ?>, До Вашего дня рождения: </p>
						<p> <span class="stocks-list__item_timer"><?= "{$dayLeftString} {$message}" ?></span></p>
					<?php } ?>
				</section>
			</article>
		</main>

		<footer class="footer" id="contacts">
			<div class="footer-logo">
				<div class="footer-logo__image">
					<img src="./img/logo-icon.png" alt="logo">
				</div>
				<h2 class="footer-logo__title title_logo">Relax</h2>
			</div>
			<nav class="footer-navigation">
				<ul class="footer-links">
					<li class="footer-links__link">
						<a href="index.php">На главную</a>
					</li>
					<li class="footer-links__link">
						<a href="index.php">Услуги</a>
					</li>
					<li class="footer-links__link">
						<a href="index.php">Акции</a>
					</li>
					<li class="footer-links__link">
						<a href="index.php">Галерея</a>
					</li>
					<li class="footer-links__link">
						<a href="index.php">Контакты</a>
					</li>
				</ul>
			</nav>
			<div class="footer-contacts">
				<nav class="social-networks">
					<ul class="social-networks__list">
						<li class="social-network__item">
							<a class="social-network__link" href="#">
								<img src="./img/whatsapp-icon.png" alt="logo">
							</a>
						</li>
						<li class="social-network__item">
							<a class="social-network__link" href="#">
								<img src="./img/vk-icon.png" alt="logo">
							</a>
						</li>
						<li class="social-network__item">
							<a class="social-network__link" href="#">
								<img src="./img/telegram-icon.png" alt="logo">
							</a>
						</li>
						<li class="social-network__item">
							<a class="social-network__link" href="#">
								<img src="./img/github-icon.png" alt="logo">
							</a>
						</li>
					</ul>
				</nav>
				<div class="contacts">
					<p>Телефон для справок и предварительной записи: <span><a href="tel:+78002000600">+78002000600</a></span></p>
					<p>
					<address>Ждем Вас по адресу: <span>г. Сочи, Набережная/12</span></address>
					</p>
					<p>Электропочта: <span><a href="mailto:sochi-chernye-nochi@mail.ru">sochi-chernye-nochi@mail.ru</a></span></p>
				</div>
			</div>
			<div class="footer-text-block">
				<p>© <span>SPA-салон "Relax"</span>, 2023</p>
			</div>
		</footer>
</body>

</html>