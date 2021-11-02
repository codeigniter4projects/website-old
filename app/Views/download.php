<?= $this->extend('theme/template') ?>

<?= $this->section('content') ?>
    <div class="row">

        <div class="col-md-12 col-sm-12 text-center title">
            <span class="glyphicon glyphicon-download big-glyph"></span>
            CodeIgniter has two supported versions: CodeIgniter 4 (current) and CodeIgniter 3 (legacy)
        </div>

        <!-- CodeIgniter 4 -->
        <div class="col-md-6 col-sm-6">
            <div class="bs-component">
                <div class="well download">
                    <h3 class="text-center">CodeIgniter 4</h3>

                    <p>CodeIgniter 4 is the current version of the framework, intended for use with PHP 7.3+ (including 8.0).</p>

                    <p>Development is ongoing, and the current version is <?= esc($v4name) ?>.</p>

                    <p>You *could* download this version of the framework using the button below, but we encourage you
                        to check the <a href="https://codeigniter4.github.io/userguide/installation/index.html">Installation section</a>
                        of the User Guide, to choose from several different ways you can install the framework :)</p>

                    <ul class="nav nav-pills justify-content-center">
                        <li class="nav-item" style="margin:0.5em;">
                            <a href="http://github.com/codeigniter4/framework/archive/<?= esc($v4name, 'attr') ?>.zip" class="nav-link btn-success" title="Download the latest version">
                                <i class="glyphicon glyphicon-save"></i> Download
                            </a>
                        </li>
                        <li class="nav-item" style="margin:0.5em;">
                            <a href="http://forum.codeigniter.com/forum-28.html" class="nav-link btn-success" title="Join the discussion on our forum!">
                                <i class="fa fa-comments"></i> Discuss
                            </a>
                        </li>
                        <li class="nav-item" style="margin:0.5em;">
                            <a href="http://github.com/codeigniter4/CodeIgniter4" class="nav-link btn-success" title="View CodeIgniter 4 on Github">
                                <i class="fa fa-github-square"></i> Sources
                            </a>
                        </li>
                        <li class="nav-item" style="margin:0.5em;">
                            <a href="https://github.com/codeigniter4/translations" class="nav-link btn-success" title="System message translations">
                                <i class="fa fa-globe"></i> Translations
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- CodeIgniter 3 -->
        <div class="col-md-6 col-sm-6">
            <div class="bs-component">
                <div class="well download">
                    <h3 class="text-center">CodeIgniter 3</h3>

                    <p>CodeIgniter 3 is the legacy version of the framework, intended for use with PHP 5.6+.</p>

                    <p>This version is in maintenance, receiving mostly just security updates, and the current version is <?= esc($v3name) ?>.</p>

                    <ul class="nav nav-pills justify-content-center">
                        <li class="nav-item" style="margin:0.5em;">
                            <a href="<?= esc($v3link, 'attr') ?>" class="nav-link btn-primary" title="Download CodeIgniter 3">
                                <i class="glyphicon glyphicon-save"></i> Download
                            </a>
                        </li>
                        <li class="nav-item" style="margin:0.5em;">
                            <a href="https://github.com/bcit-ci/codeigniter3-translations/archive/<?= esc($v3trans, 'attr') ?>.zip" class="nav-link btn-primary" title="Download System Message Translations">
                                <i class="glyphicon glyphicon-save"></i> Translations
                            </a>
                        </li>
                        <li class="nav-item" style="margin:0.5em;">
                            <a href="https://github.com/bcit-ci/CodeIgniter" class="nav-link btn-primary" title="View CodeIgniter 3 on Github">
                                <i class="fa fa-github-square"></i> Sources
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- CodeIgniter 2 -->
        <div class="col-lg-3 col-xl-3"></div>
        <div class="col-md-6 col-sm-6">
            <div class="bs-component">
                <div class="well download">
                    <h3 class="text-center">CodeIgniter 2</h3>

                    <p>CodeIgniter 2.2.6 is the legacy version of the framework.</p>

                    <p>The 2.x branch was originally released January 2011, and the last version (2.2.6) came out in October, 2015.</p>

                    <p>CodeIgniter 2 has reached its end-of-life for support and updates, as of October 31, 2015. No further updates are planned.</p>

                    <ul class="nav nav-pills justify-content-center">
                        <li class="nav-item" style="margin:0.5em;">
                            <a href="https://github.com/bcit-ci/CodeIgniter/archive/2.2.6.zip" class="nav-link btn-primary" title="Download CodeIgniter 2">
                                <i class="glyphicon glyphicon-save"></i> Download
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
<?= $this->endSection() ?>

