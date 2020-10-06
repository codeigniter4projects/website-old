<span class="github-btn github-btn-large">
	<a class="gh-btn" href="<?= esc($html_url, 'attr') ?>" target="_blank">
		<i class="fa fa-github"></i>
		<span class="gh-text">Star</span>
	</a>
	<a class="gh-count" href="<?= esc($html_url, 'attr') ?>/stargazers" target="_blank">
		<?= $stargazers_count ?>
	</a>
</span>
<span class="github-btn github-btn-large">
	<a class="gh-btn" href="<?= esc($html_url, 'attr') ?>" target="_blank">
		<i class="fa fa-code-fork"></i>
		<span class="gh-text">Fork</span>
	</a>
	<a class="gh-count" href="<?= esc($html_url, 'attr') ?>/network" target="_blank">
		<?= $forks_count ?>
	</a>
</span>
