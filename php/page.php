<article class="page">
	<?php if($page->coverImage()): ?>
		<img class="hero" src="<?php echo $page->coverImage() ?>" alt="<?php echo $page->slug() ?>">
	<?php endif ?>

	<header><?php echo $page->title() ?></header>

	<?php echo $page->content() ?>
	<footer>
		<time datetime="<?=$page->dateRaw()?>">
		<?= relative_date(strtotime($page->dateRaw()))?>
		</time>
	</footer>
</article>
<hr />
