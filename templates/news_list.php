<ul class="catalog__products-list">
    <?php foreach ($news as $key => $value): ?>

    <li class="catalog__products-item product">
        <a class="news__link" href="news_article.php?key=<?=$key; ?>">
            <p class="product__name"><?=preg_replace('/(\d)+(\.|\)|\s)+([\s]?)+(.*)/', '\\4', $value); ?></p>
            <img class="product__image" src="img/nophoto.jpg" alt="Фото товара" width="210" height="209">
        </a>
    </li>
    <?php endforeach?>
</ul>
