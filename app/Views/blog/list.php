<?= $this->extend('theme/template') ?>

<?= $this->section('content') ?>

    <?php if (isset($posts) && count($posts)) : ?>
        <?php foreach ($posts as $post) : ?>
            <?= $this->setVar('post', $post)->include('blog/_post') ?>
        <?php endforeach ?>
    <?php else : ?>
        <p class="lead">Nothing to see here just, yet.</p>
    <?php endif ?>

<?= $this->endsection() ?>
