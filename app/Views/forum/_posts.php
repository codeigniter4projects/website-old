<?php foreach($posts as $post) : ?>
<div class="newsitem">
	<div class="date"><?= esc($post['lastpost']) ?></div>
	<p>
		<a href="<?= esc($post['mybb_forum_url'], 'attr') ?>/thread-<?= esc($post['tid'], 'attr') ?>-lastpost.html">
			<?= esc($post['subject']) ?>
		</a>
	</p>
</div>
<?php endforeach ?>
