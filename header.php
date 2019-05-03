<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
	<script src = "http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
	<title><?php bloginfo('name') ?></title>
	<?php wp_head(); ?>
</head>
<body>
<header>
<!--<nav class = "nav-top">
			<div class="top-container">
				<div class="items-container">
					<?php wp_nav_menu(array('theme_location'=>'topmenu', 'menu_class'=>'topmenu', 'container'=>''));?>
				</div>
				<div class="languages-container">
					<p class="languages">Укр.</p>
					<p class="languages">Рус.</p>
				</div>
			</div>
		</nav> -->
	<script>
		$(document).ready(function (){	
			$('.mob-menu-el').on('click', function(){
				$(".menu").slideToggle();
			});
			$('.mob-search').on('click', function(){
				$('.search').fadeToggle();
			})
			if ($('.menu>li').childElementCount > 1){
				$(this).css('background','#000');
			}
			$('.menu>li').on('click', function(){
				var x = this.childElementCount;
				if (x > 1){
				$(this).find('ul').slideToggle();
				$(this).toggleClass('li-clicked')
				}
			});
		})
	</script>
	<script>
$(document).ready(function(){
$('a[href*=#]').bind("click", function(e){
var anchor = $(this);
$('html, body').stop().animate({
scrollTop: $(anchor.attr('href')).offset().top
}, 10000);
e.preventDefault();
});
return false;
});
</script>
		<div class="container">
			<div class="hat">
				<div class="left">
					<a href="<?php echo home_url(); ?>" id = "top"><div class="logo"></div></a>
					<div class="text">
						<p>Спеціалізована школа №124 м. Києва<br><span>з поглибленим вивченням інформаційних технологій</span></p>
					</div>
				</div>
				<div class="right">
					<div class="langs">
						<p>Мови сайту:</p>
						<div class="lang-el" id="Ukr">
							<a href="#"><img src="http://www.sch124.kiev.ua/wp-content/uploads/2017/12/ukr-img.png" alt="Укр"></a>
						</div>
						<div class="lang-el" id="Rus">
							<a href="#"><img src="http://www.sch124.kiev.ua/wp-content/uploads/2017/12/rus-img.png" alt="Рус"></a>
							</div>
					</div>

					<div class="search">
						<form role="search" method="get" id="searchform" class="search" action="http://www.sch124.kiev.ua/"> 
							     <input type="text" value="" name="s" class = "input" placeholder="Поиск по сайту: " id="s" /> 
							     <input type="submit" value="" class = "submit" id = "searchsubmit">
					    </form>
					    
					    
					</div>
				</div>
			<div class="mobile-menu">
				<div class="mob-menu-el">
					<p>МЕНЮ</p>
				</div>
				<div class="mob-search">
				</div>
				
			</div>
				</div>
		</div>

		<nav class="menu-container"><?php wp_nav_menu(array('theme_location'=>'hatmenu', 'menu_class'=>'menu', 'container'=>''));?></nav>

	</header>