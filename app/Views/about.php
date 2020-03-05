<?= $this->extend('theme/template') ?>

<?= $this->section('content') ?>

	<h2 class="text-info">Wise Men</h2>

    <p>The CodeIgniter project has the help of a few wise men, to oversee the continued
        development of CodeIgniter 3 and to steer the framework to the next level, CodeIgniter 4.</p>

	<br/>
	<?php foreach ($council as $member) : ?>
	<div class="row">
		<div style="margin-top:0.5em;">
			<img class="pull-left" src="/avatars/<?= esc($member['avatar'], 'attr') ?>>" width="64" height="64"/>
		</div>
		<div style="margin-left:1em;"><strong><?= esc($member['name']) ?></strong> <?= esc($member['from']) ?><br/>
			Roles: <?= esc($member['roles']) ?><br/>
            <?= esc($member['description']) ?>
			<?php foreach($member['badges'] as $badge) : ?>
                <a href="http://<?= esc($badge['badge'], 'attr') ?>.com/<?= esc($badge['handle'], 'attr') ?>"><img src="/assets/icons/<?= esc($badge['badge'], 'attr') ?>.jpg" /></a>
            <?php endforeach ?>
		</div>
	</div>
	<br/>
	<?php endforeach; ?>

</div>

<div class="container">
	<h2 class="text-info">Acknowledgements</h2>

    <p>We are grateful for past contributions from the community.</p>

    <p>Council: Andreas Pfotenhauer (Germany), David Wosnitza (Germany), and
        Johannes Gamperl (Germany).</p>

    <p>Foundation: Albert Leao (USA), Brian Gottier (USA), Dave Friend, Paradinight,
        Pertti Soomann, php_rocs, sv3tli0 (Bulgaria)</p>

    <p>Logo: Philippe Lucidarme (France)</p>

    <p>Security: Debasis Mohanty (New Zealand)</p>

    <p>Website: Lonnie Ezell (USA), Michał Śniatała (Poland) and Raymond King (USA).</p>

    <p>Thank you, as well, to all of the community members who have made constructive
        suggestions to improve the design and usability of the site, or who have reported vulnerabilities!</p>
</div>

<?= $this->endSection() ?>
