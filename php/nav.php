<ul class="reset">
<?php foreach ($staticContent as $staticPage): ?>
	<li>
		<a href="<?=$staticPage->permalink()?>"><?=$staticPage->title()?></a>
	</li>
<?php endforeach; ?>
	<li><a href="<?=Theme::rssUrl()?>" target="_blank">RSS</a></li>
</ul>