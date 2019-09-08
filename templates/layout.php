<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=$title?> в Москве - Автосервис «Роверсити»</title>
    <meta name="description" content="<?=$title?> в Москве. Бесплатная диагностика. Гарантия качества. Записаться - 8(495)150-70-69">
	<meta name="keywords" content="<?=$title?> ">
    <link href="css/normalize.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="lib/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="lib/slick/slick-theme.css" />
    <link href="css/style.min.css" rel="stylesheet">
</head>
<body>
<header class="header">
    <div class="header__top logo container">
      <div class="logo__container">
        <a class="logo__link"><img src="img/logo.png" width="273" height="100" alt="Логотип компании"></a>
      </div>
      <div class="header__contacts">
        <ul class="header__contacts-list">
          <li class="header__contacts-item"><a href="tel:+7(499)7777777">+7(499) 777-77-77</a></li>
          <li class="header__contacts-item"><a href="tel:+7(499)7777777">+7(499) 777-77-77</a></li>
        </ul>
        <a class="header__feedback" href="#">Обратная связь</a>
      </div>
    </div>
    <nav class="main-nav">
      <div class="container">
        <ul class="main-nav__list">
          <li class="main-nav__list-item"><a href="#">Главная</a></li>
          <li class="main-nav__list-item main-nav__list-item--active"><a href="#">Каталог</a></li>
          <li class="main-nav__list-item"><a href="#">Доставка и оплата</a></li>
          <li class="main-nav__list-item"><a href="#">Прайс-лист</a></li>
          <li class="main-nav__list-item"><a href="#">Контакты</a></li>
        </ul>
      </div>
    </nav>
    <div class="slider">
      <ul class="slider__slides">
        <li class="slider__slide"><img src="img/slide-1.jpg" alt="Слайд 1"></li>
        <li class="slider__slide"><img src="img/slide-2.jpg" alt="Слайд 2"></li>
      </ul>
      <button class="slider__btn slider__btn--left" aria-label="Предыдущий слайд"></button>
      <button class="slider__btn slider__btn--right" aria-label="Следующий слайд"></button>
    </div>
  </header>

  <main class="catalog container">
    <h1 class="catalog__title visually-hidden">Раздел каталога - бытовая техника: микроволновки</h1>
    <ul class="catalog__menu breadcrumbs">
      <li class="breadcrumbs__item"><a href="#">Главная</a></li>
      <li class="breadcrumbs__item">/</li>
      <li class="breadcrumbs__item"><a href="#">Каталог</a></li>
      <li class="breadcrumbs__item">/</li>
      <li class="breadcrumbs__item breadcrumbs__item--active"><a>Бытовая техника</a></li>
    </ul>
    <div class="catalog__blocks content">
      <aside class="catalog__leftblock">
        <ul class="catalog__list">
          <li class="catalog__list-item"><a href="#">Автомобили</a></li>
          <li class="catalog__list-item category category--active"><a href="#">Бытовая техника</a>
            <ul class="category__list">
              <li class="category__item category__item--active"><a>Микроволновки</a></li>
              <li class="category__item"><a href="#">Холодильники</a></li>
              <li class="category__item"><a href="#">Посудомоечные машины</a></li>
              <li class="category__item"><a href="#">Чайники</a></li>
            </ul>
          </li>
          <li class="catalog__list-item"><a href="#">Мобильная техника</a></li>
          <li class="catalog__list-item"><a href="#">Компьютеры</a></li>
          <li class="catalog__list-item"><a href="#">Одежда</a></li>
          <li class="catalog__list-item"><a href="#">Недвижимость</a></li>
        </ul>
        <div class="catalog__price">
          <a href="" download=""><img src="img/exel.png" alt="логотип MS-Exel" width="97" height="111" title="Скачать прайс-лист"></a>
          <p class="catalog__price-text">Прайс-лист</p>
        </div>
      </aside>
      <div class="catalog__centerblock">
        <?=$content?>
        <ul class="catalog__company-info features">
          <li class="features__item">Компания &laquo;Пиксель Плюс&raquo; существует более 6&nbsp;лет, за&nbsp;это время
            мы&nbsp;принимали участие в&nbsp;разработке более чем 700&nbsp;сайтов, поэтому можем уверенно называть себя
            профессионалами. На&nbsp;данный момент наш коллектив состоит из&nbsp;более чем 30&nbsp;сотрудников
            работающих в&nbsp;двух офисах в&nbsp;Москве и&nbsp;Зеленограде.характерные для этого жанра мотивы:
            неразделённой любви, ухода молодости, угасания души.</li>
          <li class="features__item">Одним из&nbsp;основных направлений работ нашей компании является поисковое
            продвижение сайтов, на&nbsp;данной момент мы&nbsp;работаем с&nbsp;более чем 150 постоянными клиентами
            по&nbsp;более чем 11&nbsp;000 поисковым запросам. При этом в&nbsp;работе основной акцент мы&nbsp;делаем
            на&nbsp;качестве работ, а&nbsp;так&nbsp;же применяем собственные уникальные разработки в&nbsp;области SEO
            продвижения. На&nbsp;данный момент отдел SEO состоит из&nbsp;9&nbsp;человек под руководством ведущего
            специалиста, преимущественно работающих в&nbsp;нашем московском офисе.</li>
        </ul>
      </div>
    </div>
  </main>
  <footer class="footer">
    <div class="footer__wrapper container">
      <div class="footer__copyright">
        <p class="footer__copyright-text">© 2012–2013 ЗАО «Компания»</p>
        <p class="footer__email"><a href="mailto:info@name.ru">info@name.ru</a></p>
      </div>
      <div class="footer__nav">
        <ul class="footer__nav-list">
          <li class="footer__nav-item"><a href="#">Главная</a></li>
          <li class="footer__nav-item"><a href="#">Каталог</a></li>
          <li class="footer__nav-item"><a href="#">Доставка и оплата</a></li>
          <li class="footer__nav-item"><a href="#">Прайс-лист</a></li>
          <li class="footer__nav-item"><a href="#">Контакты</a></li>
        </ul>
      </div>
    </div>
  </footer>

  <div class="modal">
    <button class="modal__close" aria-label="Закрыть модальное окно"></button>
    <h2 class="modal__title">Обратная связь</h2>
    <form class="modal__form" action="send.php" method="post">
      <label class="modal__label">Ваше имя *<input type="text" class="modal__input modal__input--name" name="name" id="name-field"
          required autofocus aria-required="true" minlength="2" placeholder="" title="Имя должно содержать не менее 2 символов"></label>
      <label class="modal__label">Телефон *<input type="tel" class="modal__input modal__input--phone" name="phone" id="phone-field"
          required aria-required="true" title="Номер телефона в формате 8-xxx-xxx-xxxx" placeholder=""></label>
      <label class="modal__label">Email *<input type="email" class="modal__input modal__input--email" name="email" id="email-field"
          required aria-required="true" title="Пример ввода email: someone@nowhere.com" pattern="\S+@[a-z]+.[a-z]+" placeholder=""></label>
      <label class="modal__label">Сообщение<textarea class="modal__message" name="message" id="message-field" cols="30"
          rows="8"></textarea></label>
      <input class="modal__submit" type="submit" name="submit" value="Отправить">
    </form>
  </div>
  <div class="overlay"></div>

  <script src="//code.jquery.com/jquery-1.12.3.min.js"></script>
  <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/additional-methods.js"></script>
  <script src="lib/validation/messages_ru.min.js"></script>
  <script src="lib/validation/jquery.mask.js"></script>
  <script src="lib/slick/slick.min.js"></script>
  <script src="js/evtKeyPress.min.js"></script>
  <script src="js/overlay.min.js"></script>
  <script src="js/modal.min.js"></script>
  <script src="js/slider.min.js"></script>
  <script src="js/validation.min.js"></script>
<div class="page-wrapper">

</body>
</html>
