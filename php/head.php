<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="<?=$site->title()?>">

<!-- Dynamic title tag -->
<?php echo Theme::metaTags('title'); ?>

<!-- Dynamic description tag -->
<?php echo Theme::metaTags('description'); ?>

<!-- Include Favicon -->
<?php
	if ($site->logo() == "") {
		echo Theme::favicon('img/favicon.png');
	}
	else {
		echo '<link rel="shortcut icon" href="' . $site->logo() . '" type="image/png">';
	}
?>

<!-- Include CSS Styles from this theme -->
<?php echo Theme::css('css/normalize.css'); ?>
<?php echo Theme::css('css/style.css'); ?>

<!-- Load Bludit Plugins: Site head -->
<?php Theme::plugins('siteHead'); ?>

<?php
//Relative Date Function
function relative_date($time)
{
	$today = strtotime(date('M j, Y'));
	$reldays = ($time - $today) / 86400;
	if ($reldays >= 0 && $reldays < 1) {
		return 'Today';
	}
	else
	if ($reldays >= 1 && $reldays < 2) {
		return 'Tomorrow';
	}
	else
	if ($reldays >= - 1 && $reldays < 0) {
		return 'Yesterday';
	}

	if (abs($reldays) < 7) {
		if ($reldays > 0) {
			$reldays = floor($reldays);
			return 'In ' . $reldays . ' day' . ($reldays != 1 ? 's' : '');
		}
		else {
			$reldays = abs(floor($reldays));
			return $reldays . ' day' . ($reldays != 1 ? 's' : '') . ' ago';
		}
	}

	if (abs($reldays) < 182) {
		return date('l, j F', $time ? $time : time());
	}
	else {
		return date('j F, Y', $time ? $time : time());
	}
}
?>