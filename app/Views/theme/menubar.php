<?php foreach($menudata as $item) : ?>
<li class="nav-item <?= $item['active'] ?>"><a class="nav-link text-white" href="<?= $item['link'] ?>"><?= $item['name'] ?></a></li>
<?php endforeach ?>

