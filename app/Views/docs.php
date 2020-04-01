<?= $this->extend('theme/template') ?>

<?= $this->section('content') ?>
	<div class="row">

		<div class="col-md-12 col-sm-12 text-center title">
			<span class="glyphicon glyphicon-book big-glyph"></span>
			<p>The primary documentation for CodeIgniter is its User Guide.<br/>
                The User Guide contains an introduction, tutorial, a number of "how to" guides,
                and then reference documentation for the components that make up the framework.
            </p>
		</div>

		<div class="col-md-6 col-sm-6">
			<div class="bs-component">
				<div class="well download">
					<h3 class="text-center">CodeIgniter 4</h3>

                    <p>CodeIgniter 4 is the upcoming version of the framework, licensed under the
                        <a href="https://github.com/codeigniter4/CodeIgniter4/blob/develop/license.txt">MIT License</a>.</p>

                    <ul class="nav nav-pills justify-content-center">
                        <li class="nav-item" style="margin:0.5em;">
                            <a href="/userguide/index.html"
                               class="nav-link btn-success" title="Read it online">
                                <i class="glyphicon glyphicon-book"></i> Online UG
                            </a>
                        </li>
                        <li class="nav-item" style="margin:0.5em;">
                            <a href="https://github.com/codeigniter4/userguide/archive/<?= esc($v4name, 'attr') ?>.zip" class="nav-link btn-primary" title="Download the User Guide">
                                <i class="glyphicon glyphicon-save"></i> Offline UG
                            </a>
                        </li>
                        <li class="nav-item" style="margin:0.5em;">
                            <a href="https://codeigniter4.github.io/api/"
                               class="nav-link btn-success" title="Read them online">
                                <i class="glyphicon glyphicon-book"></i> API Docs
                            </a>
                        </li>
                    </ul>
				</div>
			</div>
		</div>

		<div class="col-md-6 col-sm-6">
			<div class="bs-component">
				<div class="well download">
					<h3 class="text-center">CodeIgniter 3</h3>

                    <p>CodeIgniter 3 is the current version of the framework, licensed under the
                        <a href="http://cisite.local/user_guide/license.html">MIT License</a>.</p>

                    <ul class="nav nav-pills justify-content-center">
                        <li class="nav-item" style="margin:0.5em;">
                            <a href="/userguide3/index.html"
                               class="nav-link btn-primary" title="Read it online">
                                <i class="glyphicon glyphicon-book"></i> Online UG
                            </a>
                        </li>
                        <li class="nav-item" style="margin:0.5em;">
                            <a href="/data/CodeIgniter-<?= esc($v3name, 'attr') ?>-userguide.zip" class="nav-link btn-primary" title="Download the User Guide">
                                <i class="glyphicon glyphicon-save"></i> Offline UG
                            </a>
                        </li>
                        <li class="nav-item" style="margin:0.5em;">
                            <a href="/data/CodeIgniter User Guide <?= esc($v3name, 'attr') ?>.epub"
                               class="nav-link btn-primary" title="Read them online">
                                <i class="glyphicon glyphicon-save"></i> Epub UG
                            </a>
                        </li>
                    </ul>
				</div>
			</div>
		</div>

	</div>
<?= $this->endSection() ?>
