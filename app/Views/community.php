<?= $this->extend('theme/template') ?>

<?= $this->section('content') ?>
<div class="container">
    <div class="row">

		<div class="col-md-12 col-sm-12 text-center title">
			<span class="glyphicon glyphicon-user big-glyph"></span>
            <p>CodeIgniter is a community-developed open source project, with several venues
                for the community members to gather and exchange ideas.</p>
		</div>

		<div class="col-md-12 col-sm-12">
			<div class="alert alert-info" role="alert">
                <p>Security issues should be reported with an email to our
                    <a href="mailto:security@codeigniter.com">security team</a>, rather
                    than being brought up on the forum or raised as a Github issue, thanks!</p>
            </div>
		</div>

		<div class="col-md-12 col-sm-12">
			<div class="bs-component">
				<div class="well download">
					<h3>Forum</h3>

                    <p>Our forum has been setup using MyBB, with five main categories:</p>

                    <ul>
                        <li>General (news & discussion, lounge, events, and regional user groups)</li>
                        <li>Using CodeIgniter (choosing CodeIgniter, installation & setup, model-view-controller, libraries & helpers, best practices, and general help)</li>
                        <li>CodeIgniter 4 (Roadmap, Development, feature requests, support, discussion)</li>
                        <li>Development (CodeIgniter 3.x, CodeIgniter 2.x, and issues)</li>
                        <li>External Resources (addins, jobs, learn more, and spotlight)</li>
                    </ul>

                    <p><strong>The forum is where you can ask for help or discuss issues you are having with framework.</strong></p>

                    <ul class="nav nav-pills justify-content-center">
                        <li class="nav-item" style="margin:0.5em;">
                            <a class="nav-link btn-primary" href="<?= esc($mybb_forum_url, 'attr') ?>"><i class="glyphicon glyphicon-share"></i> Visit the forum</a>
                        </li>
                    </ul>
				</div>
			</div>
		</div>

		<div class="col-md-6 col-sm-6">
			<div class="bs-component">
				<div class="well download">
					<h3>Slack</h3>
                    <p>CodeIgniter has a Slack channel, where you can engage with other members of the community.
                        Anyone can <a href="http://codeignitersignup.ciblox.com/">signup</a> for it :)</p>

                    <ul class="nav nav-pills justify-content-center">
                        <li class="nav-item" style="margin:0.5em;">
                            <a class="nav-link btn-info" href="https://codeigniterchat.slack.com/" target="_blank">
                                <i class="glyphicon glyphicon-share"></i> Slack</a>
                        </li>
                    </ul>
				</div>
			</div>
		</div>

		<div class="col-md-6 col-sm-6">
			<div class="bs-component">
				<div class="well download">
					<h3>GitHub</h3>

                    <p> The development action takes place on Github. See the contribute page for more details.</p>

                    <p><strong>The Github repository is where you can file bug reports (github issues), or
                            where you can submit pull requests for enhancements to or fixes for framework.
                            Github is *not* for support or help ... use the forum instead.</strong></p>

                    <p>Github issues are also used for tracking planned and approved enhancements,
                        often tied in to specific releases.</p>

                    <ul class="nav nav-pills justify-content-center">
                        <li class="nav-item" style="margin:0.5em;">
                            <a class="nav-link btn-info" href="https://github.com/codeigniter4/codeigniter4/" target="_blank">
                                <i class="glyphicon glyphicon-share"></i> CodeIgniter 4</a>
                        </li>
                        <li class="nav-item" style="margin:0.5em;">
                            <a class="nav-link btn-info" href="https://github.com/bcit-ci/CodeIgniter/" target="_blank">
                                <i class="glyphicon glyphicon-share"></i> CodeIgniter 3</a>
                        </li>
                    </ul>
				</div>
			</div>
		</div>

    </div>
</div>
<?= $this->endSection() ?>
