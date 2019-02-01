<!DOCTYPE html>
<html>
	<head><?php include(THEME_DIR_PHP.'head.php') ?></head>
	<body>
	<?php Theme::plugins('siteBodyBegin') ?>
		<div class="container">
		<header>
			<h1>
				<a href="<?=$site->url()?>"><?=$site->title()?></a>
			</h1>
		</header>
		<nav>
			<?php include(THEME_DIR_PHP.'nav.php') ?>
		</nav>
		<hr class="section" />
		<section>
		<?php
			if ($WHERE_AM_I=='page') {
				include(THEME_DIR_PHP.'page.php');
			}
			else {
				if ($WHERE_AM_I == "search") {
					$s_uri = $url->slug();
					$s_arr = explode("/", $s_uri);
					$s_term = end(array_values($s_arr));
					echo "<h3>Search results for <em>". $s_term ."</em></h3>";
				}
				else if ($WHERE_AM_I == "category") {
					$categoryKey = $url->slug();
					$category = new Category($categoryKey);
					echo "<h3>Posts filed under <em>". $category->name() ."</em></h3><hr />";
				}

				include(THEME_DIR_PHP.'home.php');

			}
		?>
		</section>
		<aside><?php Theme::plugins('siteSidebar'); ?></aside>
		<footer>
			<?php echo $site->footer() ?>
		</footer>
		</div>
	<?=Theme::css('css/sanfrancisco.css')?>
	<?php Theme::plugins('siteBodyEnd') ?>
	</body>
</html>