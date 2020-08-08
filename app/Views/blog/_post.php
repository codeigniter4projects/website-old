<article>
    <h1>
        <a href="<?= $post->link() ?>"><?= esc($post->title) ?></a>
    </h1>
    <p class="meta">
        <?= ! empty($post->author) ? 'by '. esc($post->author) : '' ?>

        <ul class="tags">
        <?php foreach($post->tags as $tag) : ?>
            <li><a href="/news/c/<?= $tag ?>"><?= esc($tag) ?></a></li>
        <?php endforeach ?>
        </>
    </p>

    <?= $post->html ?>
</article>
