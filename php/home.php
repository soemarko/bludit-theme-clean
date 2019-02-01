<?php foreach ($content as $page): ?>
	<article>
	<?php if ($page->coverImage()): ?>
		<img class="hero" src="<?=$page->thumbCoverImage()?>" alt="<?=$page->title()?>">
	<?php endif ?>

	<?php if($page->title()): ?>
		<header>
			<a href="<?=$page->permalink()?>"><?=$page->title()?></a>
		</header>
	<?php endif ?>

		<p><?php echo $page->contentBreak() ?></p>

		<!-- Read more button -->
		<?php if($page->readMore()): ?>
		<p class="read-more"><a href="<?=$page->permalink()?>" class="button">Read more&hellip;</a></p>
		<?php endif; ?>

		<footer>
			<time datetime="<?=$page->dateRaw()?>">
			<?= relative_date(strtotime($page->dateRaw()))?>
			</time>
		</footer>
	</article>
	<hr />
<?php endforeach; ?>

<!-- Pagination -->
<ul class="reset pagination">
<?php
	if (Paginator::showPrev()) {
		echo '<li class="float-left"><a href="'.Paginator::previousPageUrl().'">'.$L->get('Previous page').'</a></li>';
	}

	if (Paginator::showNext()) {
		echo '<li class="float-right"><a href="'.Paginator::nextPageUrl().'">'.$L->get('Next page').'</a></li>';
	}
?>
</ul>