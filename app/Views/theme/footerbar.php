<?php foreach ($menudata as $item) : ?>
<li class="nav-item <?= $item['active'] ?>"><a class="nav-link" href="<?= $item['link'] ?>"><?= $item['name'] ?></a></li>
<?php endforeach ?>

