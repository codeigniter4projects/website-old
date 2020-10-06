<?= $this->extend('theme/template') ?>

<?= $this->section('content') ?>
    <!-- Big Links -->
    <div class="row row-md-flex row-md-flex-wrap">
        <?php foreach($biglinks as $link) : ?>
        <div class="col-sm-6 col-md-3 col-lg-3">
            <div class="well text-center">
                <div class="stat-icon">
                    <span class="glyphicon glyphicon-<?= $link['icon'] ?>"></span>
                </div>
                <div class="stat-number">
                    <a href="<?= esc($link['link'], 'attr') ?>"><?= esc($link['label']) ?></a>
                </div>
                <div><?= $link['text'] ?></div>
            </div>
        </div>
        <?php endforeach ?>
    </div>

    <hr/>

    <!-- Recent Community Info -->
    <div class="row">
        <div class="col-md-6">
            <h3><?= esc(lang('Home.recent')) ?></h3>
            <?= view_cell('\App\Libraries\Forums::news', 'limit=5') ?>
        </div>
        <div class="col-md-6">
            <h3><?= esc(lang('Home.threads')) ?></h3>
            <?= view_cell('\App\Libraries\Forums::posts', 'limit=5') ?>
        </div>
    </div>

    <hr/>

        <h2><?= esc(lang('Home.why')) ?></h2>
        <br/>

    <div class="row">
        <div class="col-sm-12 col-md-6 features">
            <?php foreach($features1 as $feature) : ?>
            <div class="feature">
                <div class="feature-icon">
                    <span class="glyphicon glyphicon-<?= $feature['icon'] ?>"></span>
                </div>
                <h5><?= esc($feature['label']) ?></h5>
                <p><?= esc($feature['text']) ?></p>
            </div>
            <?php endforeach ?>
        </div>
        <div class="col-sm-12 col-md-6 features">
            <?php foreach($features2 as $feature) : ?>
            <div class="feature">
                <div class="feature-icon">
                    <span class="glyphicon glyphicon-<?= $feature['icon'] ?>"></span>
                </div>
                <h5><?= esc($feature['label']) ?></h5>
                <p><?= esc($feature['text']) ?></p>
            </div>
            <?php endforeach ?>
        </div>
    </div>

<?= $this->endSection() ?>
