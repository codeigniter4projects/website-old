<?php foreach($heros as $hero) : ?>
<div class="col-xs-3 col-sm-2 col-md-1">
	<a href="<?= esc($hero['url'], 'attr') ?>" target="_blank">
		<img class="img-responsive img-rounded center-block" src="<?= esc($hero['avatar'], 'attr') ?>" width="64" height="64" title="<?= esc($hero['name'], 'attr') ?>"/>
    </a>
	<p class="text-center"><?= esc($hero['stars']) ?></p>
</div>
<?php endforeach ?>
