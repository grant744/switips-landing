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
			<title>Cashback service SWITIPS. Return money for purchases back</title>
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
											<a href="/lang&type=ru"><div class="language_option">Ру</div></a>
											<a href="/lang&type=en"><div class="language_option_active">En</div></a>
									</div>

									<div class="text">
											<p class="headline">Return up to<br>36% of the money<br>for purchases</p>
											<p class="addition">Buy in more than 2200 online stores<br>worldwide and return part of the money for purchases</p>
									</div>

									<div class="next"></div>
							</div>
					</div>

					<div class="connected_stores">
							<p class="headline">More than 2200 stores</p>
							<p class="addition">With cashback on any purchases</p>

							<div class="stores_place">
									<div class="inner_element">
											<div class="store"><div style="background-image: url(/project/source/ui/lending/image/logo_stores/1.png)" class="image"></div><div class="blackout"></div><div class="cashback_percentage">4.32 %</div></div>
											<div class="store"><div style="background-image: url(/project/source/ui/lending/image/logo_stores/2.png)" class="image"></div><div class="blackout"></div><div class="cashback_percentage">7.73 %</div></div>
											<div class="store"><div style="background-image: url(/project/source/ui/lending/image/logo_stores/3.png)" class="image"></div><div class="blackout"></div><div class="cashback_percentage">3 %</div></div>

											<div class="store"><div style="background-image: url(/project/source/ui/lending/image/logo_stores/4.png)" class="image"></div><div class="blackout"></div><div class="cashback_percentage">4 %</div></div>
											<div class="store"><div style="background-image: url(/project/source/ui/lending/image/logo_stores/5.png)" class="image"></div><div class="blackout"></div><div class="cashback_percentage">2 %</div></div>
											
											<div class="show_all"><div class="sign">Show more</div></div>

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

							<a target="_blank" href="/viewer"><div class="button">To learn more</div></a>
					</div>

					<div class="how_it_works">
							<p class="headline">Buy with cashback</p>
							<p class="addition">It is simple and profitable!</p>

							<div class="stages_place">
									<div class="stage">
											<div style="background-image: url(/project/source/ui/lending/image/stage_1.png)" class="image"></div>
											<p class="title">Sign up</p>
											<p class="comment">And go to any of the more than 2200 stores</p>
									</div>

									<div class="stage">
											<div style="background-image: url(/project/source/ui/lending/image/stage_2.png)" class="image"></div>
											<p class="title">Make a purchase</p>
											<p class="comment">Buy goods and services as usual</p>
									</div>

									<div class="stage">
											<div style="background-image: url(/project/source/ui/lending/image/stage_3.png)" class="image"></div>
											<p class="title">Get cashback</p>
											<p class="comment">Get some money back</p>
									</div>
							</div>

							<div class="button_place">
									<a target="_blank" href="/viewer"><div class="button">Сheck in</div></a>
									<div class="arrow"></div>
							</div>
					</div>

					<div class="about_company">
							<p class="headline">Cashback platform SWITIPS</p>
							<p class="addition">We are the largest cashback service that allows you to<br>your shopping is the most profitable and enjoyable</p>

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
											<p class="story">SWITIPS cashback service has been operating since 2013. During this time, the service has become the largest in Ukraine and in the markets of the CIS countries. Service is used by more than 8 million people who have made more than 35 million purchases with cashback</p>
											<a target="_blank" href="/viewer"><div class="button">Read more</div></a>
									</div>
							</div>
					</div>

					<div class="reviews">
							<p class="headline">8 145 158 users</p>
							<p class="addition">They say about us</p>

							<section class="center slider">
									<div><div class="switips_slide">
												<div style="background-image: url(/project/source/ui/lending/image/reviews/1.png)" class="profile"></div>
												<p class="name_profile">Yulia Rodicheva</p>
												<div class="text_profile">I always order myself and my son things with AliExpress. No matter where I am - in Russia or on holiday abroad, I can easily place an order. I go to Switips.com, go to my personal account, from there to the storefront of online stores. Each one immediately indicates the percentage of cashback. Then I go to the store and as usual I make orders. In my personal account, I check how much cashback came into my account. No comments, I recommend to everyone</div>
									</div></div>

									<div><div class="switips_slide">
												<div style="background-image: url(/project/source/ui/lending/image/reviews/2.png)" class="profile"></div>
												<p class="name_profile">Roman Sidorov</p>
												<div class="text_profile">Let me tell you how I spend my vacation with profit thanks to SWITIPS cashback platform. Three clicks and I have a goal: cashback service, booking itself (gives 4.32% cashback), choose a hotel and reserve. All is ready. Thanks to SWITIPS, renting a surfboard for the whole day is free</div>
									</div></div>
									
									<div><div class="switips_slide">
												<div style="background-image: url(/project/source/ui/lending/image/reviews/3.png)" class="profile"></div>
												<p class="name_profile">Roman Sidorov</p>
												<div class="text_profile">My daughter wrote a letter to Santa Claus with a list of toys for the New Year. A letter to Santa Claus, and execute dad. Long puzzled how to buy gifts, if the prices in the shops "bite", albeit New Year's sales. There was a happy idea to save money on the SWITIPS cashback platform. Bought toys and gifts in mnogo.ru. It was nice when I received a cashback of 400 rubles from each (!!!) purchase for discounts. Hope for Santa Claus, but don't do it yourself</div>
									</div></div>

									<div><div class="switips_slide">
												<div style="background-image: url(/project/source/ui/lending/image/reviews/4.png)" class="profile"></div>
												<p class="name_profile">Oksana Shvedkova</p>
												<div class="text_profile">All moms will understand and rejoice. I was looking for where you can buy good baby shoes for your child. On mytoys.ru we found cool children's boots. On the website their price is 3709 r. And the discount on them is 5% (185 r.). Plus a gift from the store. Since we went through SWITIPS, we received 320 p. cashback. It is charged not in percentage, but immediately in a sum of money. So on the boots we saved 505 p. I will still buy through SWITIPS</div>
									</div></div>
									
									<div><div class="switips_slide">
												<div style="background-image: url(/project/source/ui/lending/image/reviews/5.png)" class="profile"></div>
												<p class="name_profile">Natalya Zhukova</p>
												<div class="text_profile">I, Natalya, and my husband Dmitry constantly make purchases with SWITIPS. Through cashback service, go to the windows more than seven hundred stores. Recently we were shopping in M.Video. Found a phone that I liked (iPhone X), added to the basket. You can pick up from 88 stores right tomorrow. And no bank cards are needed. We pay in cash and pick up the purchase! The smartphone was purchased for 91,950 rubles, cashback I was returned to 2575 rubles. Plus bonuses from M.Video</div>
									</div></div>
									
									<div><div class="switips_slide">
												<div style="background-image: url(/project/source/ui/lending/image/reviews/6.png)" class="profile"></div>
												<p class="name_profile">Igor Rodnichev</p>
												<div class="text_profile">I have long dreamed of traveling to Thailand. Friends suggested that booking a hotel through booking.com is more profitable if you enter the site via the SWITIPS cashback service. And indeed, I logged in, switched to booking, chose the hotel. I did everything with a laptop. There is such a regulation. Already in Thailand, I saw that money had "fallen" into my account. From the reservation of 23,400 rubles, I was returned 749 rubles. I understand that going directly to the booking I would not get anything. Fantasy</div>
									</div></div>
							</section>
					</div>

					<div class="join_the_community">
							<p class="headline">Join the SWITIPS community</p>
							<p class="addition">Follow the news and participate in discussions</p>
							
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