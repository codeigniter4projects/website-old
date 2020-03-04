<?= $this->extend('theme/template') ?>

<?= $this->section('content') ?>
<div class="container">
	<div class="row">

		<div class="col-md-12 col-sm-12 text-center title">
			<span class="glyphicon glyphicon-heart big-glyph"></span>
			<p>Contribute to CodeIgniter</p>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12 col-sm-12">
            <p>CodeIgniter is a community driven project and accepts contributions of code and
                documentation from the community. These contributions are made in the form of
                Issues or Pull Requests on the <a href="https://github.com/bcit-ci/CodeIgniter">CodeIgniter repository</a> on
                GitHub.</p>

            <p>Issues are a quick way to point out a bug. If you find a bug or documentation error in CodeIgniter then
                please check a few things first:</p>

            <ul>
                <li>There is not already an open Issue</li>
                <li>The issue has already been fixed (check the develop branch, or look for closed Issues)</li>
                <li>Is it something really obvious that you fix it yourself?</li>
                <a>If you are unsure if you have found a bug, then start a new thread in the
                    CodeIgniter forum, in the <a href="<?= $mybb_forum_url ?>/forum-19.html">Issues section</a>!</li>
            </ul>

            <p>Reporting issues is helpful but an even better approach is to send a Pull Request,
                which is done by “Forking” the main repository and committing to your own copy.
                This will require you to use the version control system called Git.</p>

            <p>*Note: the two GitHub links above are for the CodeIgniter 3 repository. They will be replaced with the
                CodeIgniter 4 ones once it launches.*</p>
            <br/>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12 col-sm-12">
			<div class="bs-component">
				<div class="well download">
					<h3>CodeIgniter 4</h3>

                    <p>CodeIgniter 4 has its own <a href="https://github.com/codeigniter4/CodeIgniter4">Github repository</a>.
                        It deviates enough from CodeIgniter 3 that we want to keep them separate.</p>

                    <p>The CodeIgniter 4 roadmap is explained on <a href="http://forum.codeigniter.com/forum-28.html">our forum</a>,
                        and work to be done is detailed in the <a href="https://github.com/codeigniter4/CodeIgniter4/issues">repository issues</a>.</p>
                </div>
			</div>
		</div>

	</div>

	<div class="row">
		<div class="col-md-12 col-sm-12">
			<div class="alert alert-info" role="alert">
                <p>Security issues should be reported with an email to our security team, rather
                    than being brought up on the forum or raised as a Github issue, thanks!
                    Read more about <a href="/contribute/responsible">responsible disclosure</a>.</p>
            </div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12 col-sm-12">
			<div class="bs-component">
				<div class="well download">
					<h3>Not a Programmer?</h3>
					<div class="list-group">
						<div class="list-group-item">
                            <h4>Testers</h4>

                            <p>We always need feedback on what works and what does not! Most of the development
                                effort is going into Version 3, so that is where the need is greatest.
                                If you find something that is definitely a bug, and you are a Github user,
                                please create a new "issue". If you are not a Github user, or if you are
                                unsure if you have found a bug, then start a new thread in the CodeIgniter
                                forum <a href="https://forum.codeigniter.com/forum-19.html">Issues section</a>!</p>

                            <p><strong>CodeIgniter 4 has its own <a href="https://forum.codeigniter.com/forum-30.html">support subforum</a>.</strong></p>
                        </div>
						<div class="list-group-item">
                            <h4>Writers</h4>

                            <p>Every project needs good documentation! The CodeIgniter user guide is part of the
                                <a href="https://github.com/bcit-ci/CodeIgniter">Github project</a> (mentioned above),
                                and there is always room for more tutorials.</p>

                            <p>CodeIgniter 4's user guide is part of its own <a href="https://github.com/codeigniter4/CodeIgniter4">repository</a>.</p>
                        </div>
						<div class="list-group-item">
                            <h4>Evangelists</h4>

                            <p>The word needs to be spread about good and worthy projects, which we think CodeIgniter
                                is :)
                                You can help by being active in the forums, answering questions, and by
                                spreading the word inside your developer or user community.</p>
                        </div>
						<div class="list-group-item">
                            <h4>Moderators</h4>

                            <p>The forum can always use moderators, to make sure that discussions/threads stay on
                                topic, and to weed out the inappropriate users or comments!</p>
                        </div>
						<div class="list-group-item">
                            <h4>#### Designers</h4>

                            <p>Suggestions and help with our website, User Guide, and forum design are always welcome!
                                We are working on themes for each of these, which will be shared in their own Github
                                repository.</p>
                        </div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12 col-sm-12">
			<div class="bs-component">
				<div class="well download">
					<h3>{coderSection}</h3>
					<div class="list-group">
						<div class="list-group-item">
                            <h4>Coders</h4>

                            <p>If you would like to get involved in helping to build the next version of CodeIgniter,
                                join us on <a href="https://github.com/bcit-ci/CodeIgniter">Github</a>!
                                A detailed <a href="http://cisite.local/userguide3/contributing/index.html">contribution guide</a>
                                is in the User Guide, but the main points are to make sure your code conforms to
                                our <a href="http://cisite.local/userguide3/general/styleguide.html">style guide</a>,
                                that it is properly documented, and that you use the
                                <a href="http://nvie.com/posts/a-successful-git-branching-model/">Git-Flow branching model</a>.</p>

                            <p><strong>CodeIgniter 4 equivalent links: its
                                    <a href="https://github.com/codeigniter4/CodeIgniter4">repository</a>,
                                    its <a href="https://github.com/codeigniter4/CodeIgniter4/tree/develop/contributing">contribution guide</a>,
                                    and its
                                    <a href="https://github.com/codeigniter4/CodeIgniter4/blob/develop/contributing/styleguide.rst">style</a>.</strong>
                            </p>
                        </div>
						<div class="list-group-item">
                            <h4>Reviewers</h4>

                            <p>Every project needs a core group of developers, familiar with the project standards
                                and conventions, to review proposed enhancements and fixes.
                                We have been really fortunate with our group of reviewers so far, and hope to recruit a
                                few more.</p>
                        </div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<!-- Acknowledge contributors -->
		<div class="col-md-12 col-sm-12">
			<div class="bs-component">
				<div class="well download">
					<h3>Acknowledging Our Top Contributors</h3>
					<h4>... CodeIgniter 3</h4><br/>
					<div class="row"><?= $fw_heros ?></div>
					<h4>... CodeIgniter 3 translations</h4><br/>
					<div class="row"><?= $trans_heros ?></div>
					<h4>... CodeIgniter4</h4><br/>
					<div class="row"><?= $ci4_heros ?></div>
					<h4>... CodeIgniter 4 translations</h4><br/>
					<div class="row"><?= $trans4_heros ?></div>
					<h4>... our original Website</h4><br/>
					<div class="row"><?= $web_heros ?></div>
					<h4>... our revised Website (CI4)</h4><br/>
					<div class="row"><?= $new_web_heros ?></div>
				</div>
			</div>
		</div>
	</div>

</div>
<?= $this->endSection() ?>
