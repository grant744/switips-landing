<?php
	if (@$_SESSION["background_image"] == FALSE) {
			$_SESSION["background_image"] = rand(1, 5);
	}

// Запоминаем текущую страницу
// -------------------------------------------------------------------------------------------------------------------------------------
		$session_array_add = array(
				"current_page" => $_SERVER["REQUEST_URI"]
		);

		$_SESSION = array_merge($_SESSION, $session_array_add);
?>

<!DOCTYPE html>
<html>
	<head>
			<meta name="format-detection" content="telephone=no">
			<meta charset="utf-8">
			<link rel="shortcut icon" href="/project/source/ui/lending/image/favicon.ico" type="image/x-icon">
			<link rel="stylesheet" type="text/css" href="/project/source/ui/lending/style/common.css" >
			<title>Кэшбэк сервис SWITIPS. Возвращай деньги за покупки обратно</title>
			<?php include($unit->jQuery); ?>
			<?php include($unit->slick); ?>
			<?php include($unit->scroll_up); ?>
	</head>

	<body>
			<!-- _BASIS --><div id="_BASIS">

					<div class="welcome_screen">
							<div style="background-image: url(/project/source/ui/lending/image/stock/<?=$_SESSION["background_image"]; ?>.jpg)" class="background">
									<div class="blackout"></div>
							</div>

							<div class="content">
									<div class="logo"></div>

									<div class="language_tool">
											<a href="/lang&type=ru"><div class="language_option_active">Ру</div></a>
											<a href="/lang&type=en"><div class="language_option">En</div></a>
									</div>

									<div class="text">
											<p class="headline">Возвращай до<br>36% денег за<br>покупки</p>
											<p class="addition">Покупай в более чем 2200 интернет-магазинах по<br>всему миру и возвращай часть денег за покупки</p>
									</div>

									<div class="next"></div>
							</div>
					</div>

					<div class="connected_stores">
							<p class="headline">Более 2200 магазинов</p>
							<p class="addition">С кэшбэком на любые покупки</p>

							<div class="stores_place">
									<div class="inner_element">
											<div class="store"><div style="background-image: url(/project/source/ui/lending/image/logo_stores/1.png)" class="image"></div><div class="blackout"></div><div class="cashback_percentage">4.32 %</div></div>
											<div class="store"><div style="background-image: url(/project/source/ui/lending/image/logo_stores/2.png)" class="image"></div><div class="blackout"></div><div class="cashback_percentage">7.73 %</div></div>
											<div class="store"><div style="background-image: url(/project/source/ui/lending/image/logo_stores/3.png)" class="image"></div><div class="blackout"></div><div class="cashback_percentage">3 %</div></div>

											<div class="store"><div style="background-image: url(/project/source/ui/lending/image/logo_stores/4.png)" class="image"></div><div class="blackout"></div><div class="cashback_percentage">4 %</div></div>
											<div class="store"><div style="background-image: url(/project/source/ui/lending/image/logo_stores/5.png)" class="image"></div><div class="blackout"></div><div class="cashback_percentage">2 %</div></div>
											
											<div class="show_all"><div class="sign">Показать еще</div></div>

											<div class="store"><div style="background-image: url(/project/source/ui/lending/image/logo_stores/6.png)" class="image"></div><div class="blackout"></div><div class="cashback_percentage">11.2 %</div></div>
											<div class="store"><div style="background-image: url(/project/source/ui/lending/image/logo_stores/7.png)" class="image"></div><div class="blackout"></div><div class="cashback_percentage">7 %</div></div>
											<div class="store"><div style="background-image: url(/project/source/ui/lending/image/logo_stores/8.png)" class="image"></div><div class="blackout"></div><div class="cashback_percentage">3.2 %</div></div>
											<div class="store"><div style="background-image: url(/project/source/ui/lending/image/logo_stores/9.png)" class="image"></div><div class="blackout"></div><div class="cashback_percentage">0.2 %</div></div>

											<div class="store"><div style="background-image: url(/project/source/ui/lending/image/logo_stores/10.png)" class="image"></div><div class="blackout"></div><div class="cashback_percentage">2.4 %</div></div>
											<div class="store"><div style="background-image: url(/project/source/ui/lending/image/logo_stores/11.png)" class="image"></div><div class="blackout"></div><div class="cashback_percentage">6.4 %</div></div>
											<div class="store"><div style="background-image: url(/project/source/ui/lending/image/logo_stores/12.png)" class="image"></div><div class="blackout"></div><div class="cashback_percentage">4.7 %</div></div>

											<div class="store"><div style="background-image: url(/project/source/ui/lending/image/logo_stores/13.png)" class="image"></div><div class="blackout"></div><div class="cashback_percentage">4 %</div></div>
											<div class="store"><div style="background-image: url(/project/source/ui/lending/image/logo_stores/14.png)" class="image"></div><div class="blackout"></div><div class="cashback_percentage">3.7 %</div></div>
											<div class="store"><div style="background-image: url(/project/source/ui/lending/image/logo_stores/15.png)" class="image"></div><div class="blackout"></div><div class="cashback_percentage">2.4 %</div></div>

											<div class="store"><div style="background-image: url(/project/source/ui/lending/image/logo_stores/16.png)" class="image"></div><div class="blackout"></div><div class="cashback_percentage">10 %</div></div>
											<div class="store"><div style="background-image: url(/project/source/ui/lending/image/logo_stores/17.png)" class="image"></div><div class="blackout"></div><div class="cashback_percentage">5.5 %</div></div>
											<div class="store"><div style="background-image: url(/project/source/ui/lending/image/logo_stores/18.png)" class="image"></div><div class="blackout"></div><div class="cashback_percentage">1.5 %</div></div>

											<div class="store"><div style="background-image: url(/project/source/ui/lending/image/logo_stores/19.png)" class="image"></div><div class="blackout"></div><div class="cashback_percentage">16 %</div></div>
											<div class="store"><div style="background-image: url(/project/source/ui/lending/image/logo_stores/20.png)" class="image"></div><div class="blackout"></div><div class="cashback_percentage">4 %</div></div>
											<div class="store"><div style="background-image: url(/project/source/ui/lending/image/logo_stores/21.png)" class="image"></div><div class="blackout"></div><div class="cashback_percentage">4 %</div></div>

											<div class="store"><div style="background-image: url(/project/source/ui/lending/image/logo_stores/22.png)" class="image"></div><div class="blackout"></div><div class="cashback_percentage">22.4 %</div></div>
											<div class="store"><div style="background-image: url(/project/source/ui/lending/image/logo_stores/23.png)" class="image"></div><div class="blackout"></div><div class="cashback_percentage">5.6 %</div></div>
											
											<div class="hide"><div class="sign">Скрыть</div></div>
									</div>
							</div>

							<a target="_blank" href="/viewer"><div class="button">Узнать больше</div></a>
					</div>

					<div class="how_it_works">
							<p class="headline">Покупать с кэшбэком</p>
							<p class="addition">Это просто и выгодно!</p>

							<div class="stages_place">
									<div class="stage">
											<div style="background-image: url(/project/source/ui/lending/image/stage_1.png)" class="image"></div>
											<p class="title">Зарегистрируйся</p>
											<p class="comment">И переходи в любой из более 2200 магазинов</p>
									</div>

									<div class="stage">
											<div style="background-image: url(/project/source/ui/lending/image/stage_2.png)" class="image"></div>
											<p class="title">Сделай покупку</p>
											<p class="comment">Покупай товары и услуги, как обычно</p>
									</div>

									<div class="stage">
											<div style="background-image: url(/project/source/ui/lending/image/stage_3.png)" class="image"></div>
											<p class="title">Получи кэшбэк</p>
											<p class="comment">Получай часть потраченных денег обратно</p>
									</div>
							</div>

							<div class="button_place">
									<a target="_blank" href="/viewer"><div class="button">Регистрация</div></a>
									<div class="arrow"></div>
							</div>
					</div>

					<div class="about_company">
							<p class="headline">Кэшбэк платформа SWITIPS</p>
							<p class="addition">Мы крупнейший кэшбэк сервис, который позволяет сделать<br>ваш шопинг максимально выгодным и приятным</p>

							<div class="about_place">
									<div class="side_1">
											<div class="laptop">
													<div class="video_place">
															<div class="video">
																		<iframe width="100%" height="100%" src="https://www.youtube.com/embed/fRkALCRcPxQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
															</div>
													</div>
											</div>
									</div>

									<div class="side_2">
											<p class="story">Кэшбэк сервис SWITIPS работает с 2013 года. За это время сервис стал крупнейшим в Украине и на рынках стран СНГ. Сервис используют более 8 млн человек, которые совершили более 35 млн покупок с кэшбэком</p>
											<a target="_blank" href="/viewer"><div class="button">Подробнее</div></a>
									</div>
							</div>
					</div>

					<div class="reviews">
							<p class="headline">8 145 158 пользователей</p>
							<p class="addition">О нас говорят</p>

							<section class="center slider">
									<div><div class="switips_slide">
												<div style="background-image: url(/project/source/ui/lending/image/reviews/1.png)" class="profile"></div>
												<p class="name_profile">Юлия Родичева</p>
												<div class="text_profile">Я постоянно заказываю себе и моему сыночку вещи с AliExpress. Где бы я ни находилась - в России или на отдыхе за границей, я могу легко сделать заказ. Захожу на сайт Switips.com, перехожу в личный кабинет, оттуда к витрине интернет-магазинов. У каждого сразу указан процент кэшбэка. Дальше иду в магазин и как обычно делаю заказы. В моем личном кабинете я проверяю, какие суммы кэшбэка пришли на мой счет</div>
									</div></div>

									<div><div class="switips_slide">
												<div style="background-image: url(/project/source/ui/lending/image/reviews/2.png)" class="profile"></div>
												<p class="name_profile">Яна Белокобылко</p>
												<div class="text_profile">Расскажу вам, как я с выгодой провожу отдых благодаря кэшбэк-платформе SWITIPS. Три клика и я у цели: кэшбэк-сервис, сам booking (дает 4.32 % кэшбэк), выбираю отель и резервирую. Все готово. Благодаря SWITIPS прокат доски для серфинга на целый день получится бесплатным</div>
									</div></div>
									
									<div><div class="switips_slide">
												<div style="background-image: url(/project/source/ui/lending/image/reviews/3.png)" class="profile"></div>
												<p class="name_profile">Роман Сидоров</p>
												<div class="text_profile">Дочка написала письмо Деду Морозу со списком игрушек к Новому Году. Письмо Деду Морозу, а исполнять папе. Долго ломал голову, как купить подарки, если цены в магазинах «кусаются», хоть и новогодние распродажи. Появилась счастливая идея сэкономить на кэшбэк платформе SWITIPS. Накупил игрушек и подарков в mnogo.ru. Приятно было, когда получил к скидкам еще и кэшбэк в 400 рублей с каждой (!!!) покупки</div>
									</div></div>

									<div><div class="switips_slide">
												<div style="background-image: url(/project/source/ui/lending/image/reviews/4.png)" class="profile"></div>
												<p class="name_profile">Оксана Шведкова</p>
												<div class="text_profile">Все мамочки меня поймут и порадуются. Я искала, где можно купить ребенку хорошую детскую обувь. На mytoys.ru мы нашли классные детские сапожки. На сайте их цена 3709 р. И скидка на них 5 % (185 р.). Плюс подарок от магазина. Поскольку мы зашли через SWITIPS, то получили 320 р. кэшбэка. Он начисляется не в процентах, а сразу в денежной сумме. Так что на сапожках мы сэкономили 505 р</div>
									</div></div>
									
									<div><div class="switips_slide">
												<div style="background-image: url(/project/source/ui/lending/image/reviews/5.png)" class="profile"></div>
												<p class="name_profile">Наталья Жукова</p>
												<div class="text_profile">Я, Наталья, и мой муж Дмитрий постоянно делаем покупки с SWITIPS. Через кэшбэк-сервис переходим к витринам более семи сотен магазинов. Недавно мы делали покупки в М.Видео. Нашла телефон, который мне понравился (iPhone X), добавила в корзину. Забирать можно из 88 магазинов прямо завтра. И никаких банковских карт не надо. Платим наличными и забираем покупку! Смартфон был куплен за 91 950 рублей, кэшбэк мне вернули 2575 рублей</div>
									</div></div>
									
									<div><div class="switips_slide">
												<div style="background-image: url(/project/source/ui/lending/image/reviews/6.png)" class="profile"></div>
												<p class="name_profile">Игорь Родничев</p>
												<div class="text_profile">Я давно мечтал о путешествии в Таиланд. Друзья подсказали, что бронировать отель через booking.com выгоднее, если заходить на сайт через кэшбэк-сервис SWITIPS. И действительно, я зашел в систему, перешел на booking, выбрал отель. Делал все с ноутбука. Там такой регламент. Уже в Таиланде увидел, что на мой счет «упали» денежки. С бронирования в 23 400 рублей мне вернули 749 рублей</div>
									</div></div>
							</section>
					</div>

					<div class="join_the_community">
							<p class="headline">Присоединяйтесь к сообществу SWITIPS</p>
							<p class="addition">Следите за новостями и участвуйте в обсуждениях</p>
							
							<div class="social_networks_place">
									<a target="_blank" href="https://www.vk.com/myswitips">
											<div style="margin-left: 0; background-image: url(/project/source/ui/lending/image/vk.jpg)" class="social_networks_button"></div>
									</a>

									<a target="_blank" href="https://www.facebook.com/groups/myswitips/">
											<div style="background-image: url(/project/source/ui/lending/image/facebook.jpg)" class="social_networks_button"></div>
									</a>
							</div>
					</div>

					<div class="footer">
							<div class="level_1">
									<div class="logo"></div>

									<div class="company_name">APIN FORTE LTD</div>
							</div>
					</div>

			</div><!-- _BASIS end -->

			<!-- <script src="/project/source/ui/lending/js/..."></script> -->
			<script src="/project/source/ui/lending/js/slick.conf.js"></script>
			<script src="/project/source/ui/lending/js/toggle.js"></script>
			<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5ca8e19cf8967a75"></script>

			<div class="no_display">
					<script type="text/javascript" >
					   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
					   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
					   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

					   ym(53166256, "init", {
					        clickmap:true,
					        trackLinks:true,
					        accurateTrackBounce:true,
					        webvisor:true
					   });
					</script>

					<noscript><div><img src="https://mc.yandex.ru/watch/53166256" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
			</div>

			<div id="toTop"></div>
	</body>
</html>