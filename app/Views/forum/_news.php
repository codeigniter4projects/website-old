<?php foreach($news as $item) : ?>
<div class="newsitem">
	<div class="date"><?= esc($item['dateline']) ?></div>
	<p>
		<a href="<?= esc($item['mybb_forum_url'], 'attr') ?>/thread-<?= esc($item['tid'], 'attr') ?>.html">
			<?= esc($item['subject']) ?>
		</a>
	</p>
</div>
<?php endforeach ?>
