<?= $this->extend('theme/two_column_template') ?>

<?= $this->section('content') ?>

    <?php if (isset($post)) : ?>
        <?= $this->setVar('post', $post)->include('blog/_post') ?>
    <?php endif ?>

<?= $this->endsection() ?>
