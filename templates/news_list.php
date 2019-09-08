<section class="news">
    <h2 class="news__title">Новости</h2>
    <p class="news__text"></p>
    <ul class="news__list">
        <?php foreach ($news as $key => $value): ?>

        <li class="news__item">
            <a class="news__link" href="news_article.php?key=<?=$key; ?>"><?=$value?></a>
        </li>
        <?php endforeach?>
    </ul>
</section>