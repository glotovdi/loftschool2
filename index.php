<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=960">
  <title>Главная страница
  </title>
  <link rel="stylesheet" href="css/vendors.min.css">
  <link rel="stylesheet" href="css/main.css">
</head>

<body>
  <div class="wrapper">
    <div class="maincontent">

      <section class="section hero">
        <div class="container">
          <header class="header">
            <div class="container">
              <div class="header__logo">
                <a class="logo" href="#">
                  <img src="img/icons/logo.svg" alt="burgers logo">
                </a>
              </div>
              <div class="header__menu">
                <nav class="nav">
                  <ul class="nav__list">
                    <li class="nav__item"><a class="nav__link" href="1">о нас</a>
                    </li>
                    <li class="nav__item"><a class="nav__link" href="2">бургеры</a>
                    </li>
                    <li class="nav__item"><a class="nav__link" href="3">команда</a>
                    </li>
                    <li class="nav__item"><a class="nav__link" href="4">меню</a>
                    </li>
                    <li class="nav__item"><a class="nav__link" href="5">отзывы</a>
                    </li>
                    <li class="nav__item"><a class="nav__link" href="7">контакты</a>
                    </li>
                  </ul>
                </nav><a class="order-link btn" href="6">Заказать</a>
              </div>
            </div>
          </header>
          <div class="hero__container">
            <div class="container">
              <div class="hero__content">
                <div class="hero__left"><img class="hero__img" src="./img/content/burger.png" alt=""></div>
                <div class="hero__right">
                  <div class="section__title">Мы делаем</div>
                  <div class="hero__desc">Натуральные бургеры</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <a class="down-arrow" href="#">
          <span class="down-arrow__icon-wrapper">
            <svg class="down-arrow__icon">
              <use xlink:href="img/sprite.svg#arrow-scroll"></use>
            </svg>
          </span>
        </a>
      </section>

      <section class="section best">
        <div class="container">
          <div class="section__title section__title_black">Мы лучшие</div>
          <ul class="best__list">
            <li class="best__item">
              <div class="best__icon">
                <div class="best__icon-pic">
                  <svg class="best__icon-image" fill="#e25028">
                    <use xlink:href="img/sprite.svg#meat"></use>
                  </svg>
                </div>
              </div>
              <div class="best__title">100% свежее мясо</div>
              <div class="best__text text-block">
                <p>Драма представляет собой деструктивный цикл. Анапест представляет собой анапест. Ямб неравномерен.</p>
              </div>
            </li>
            <li class="best__item">
              <div class="best__icon">
                <div class="best__icon-pic">
                  <svg class="best__icon-image" fill="#f8b43a">
                    <use xlink:href="img/sprite.svg#hand"></use>
                  </svg>
                </div>
              </div>
              <div class="best__title">Ручная сборка</div>
              <div class="best__text text-block">
                <p>Драма представляет собой деструктивный цикл. Анапест представляет собой анапест. Ямб неравномерен.</p>
              </div>
            </li>
            <li class="best__item">
              <div class="best__icon">
                <div class="best__icon-pic">
                  <svg class="best__icon-image" fill="#8ac03e">
                    <use xlink:href="img/sprite.svg#natural"></use>
                  </svg>
                </div>
              </div>
              <div class="best__title">Натуральные ингредиенты</div>
              <div class="best__text text-block">
                <p>Драма представляет собой деструктивный цикл. Анапест представляет собой анапест. Ямб неравномерен.</p>
              </div>
            </li>
          </ul>
        </div>
      </section>

      <section class="section burgers">
        <div class="burgers__container">
          <div class="container">
            <div class="burger-slider-wrap">
              <div class="burger-slider__controls">
                <a class="burger-slider__btn burger-slider__btn_next" href="#">
                  <svg class="burger-slider__arrow">
                    <use xlink:href="img/sprite.svg#arrow-scroll"></use>
                  </svg>
                </a>
                <a class="burger-slider__btn burger-slider__btn_prev" href="#">
                  <svg class="burger-slider__arrow">
                    <use xlink:href="img/sprite.svg#arrow-scroll"></use>
                  </svg>
                </a>
              </div>
              <ul class="burgers-slider owl-carousel">
                <li class="burgers-slider__item">
                  <div class="ingredients">
                    <div class="ingredients__icon">
                      <div class="ingredients__icon-pic">
                        <svg class="ingredients__burger-icon">
                          <use xlink:href="img/sprite.svg#burger"></use>
                        </svg>
                      </div>
                      <div class="ingredients__icon-text">Состав</div>
                    </div>
                    <div class="ingredients__dropdown">
                      <table class="indredients__table">
                        <tr class="ingredients__table-row">
                          <td class="ingredients__table-cell">
                            <div class="ingredients__table-icon">
                              <img src="img/icons/beef.svg" class="ingredients__table-icon-image" alt="">
                            </div>
                          </td>
                          <td class="ingredients__table-cell">
                            <div class="ingredients__table-icon">Говядина</div>
                          </td>
                          <td class="ingredients__table-cell">
                            <div class="ingredients__table-icon">300г</div>
                          </td>
                        </tr>
                        <tr class="ingredients__table-row">
                          <td class="ingredients__table-cell">
                            <div class="ingredients__table-icon">
                              <img src="img/icons/buns.svg" class="ingredients__table-icon-image" alt="">
                            </div>
                          </td>
                          <td class="ingredients__table-cell">
                            <div class="ingredients__table-icon">Булочки</div>
                          </td>
                          <td class="ingredients__table-cell">
                            <div class="ingredients__table-icon">100г</div>
                          </td>
                        </tr>
                        <tr class="ingredients__table-row">
                          <td class="ingredients__table-cell">
                            <div class="ingredients__table-icon">
                              <img src="img/icons/salad.svg" class="ingredients__table-icon-image" alt="">
                            </div>
                          </td>
                          <td class="ingredients__table-cell">
                            <div class="ingredients__table-icon">Зелень</div>
                          </td>
                          <td class="ingredients__table-cell">
                            <div class="ingredients__table-icon">70г</div>
                          </td>
                        </tr>
                        <tr class="ingredients__table-row">
                          <td class="ingredients__table-cell">
                            <div class="ingredients__table-icon">
                              <img src="img/icons/sauce.svg" class="ingredients__table-icon-image" alt="">
                            </div>
                          </td>
                          <td class="ingredients__table-cell">
                            <div class="ingredients__table-icon">Соус</div>
                          </td>
                          <td class="ingredients__table-cell">
                            <div class="ingredients__table-icon">150г</div>
                          </td>
                        </tr>
                        <tr class="ingredients__table-row">
                          <td class="ingredients__table-cell">
                            <div class="ingredients__table-icon">
                              <img src="img/icons/cucumber.svg" class="ingredients__table-icon-image" alt="">
                            </div>
                          </td>
                          <td class="ingredients__table-cell">
                            <div class="ingredients__table-icon">Овощи</div>
                          </td>
                          <td class="ingredients__table-cell">
                            <div class="ingredients__table-icon">200г</div>
                          </td>
                        </tr>
                        <tr class="ingredients__table-row">
                          <td class="ingredients__table-cell">
                            <div class="ingredients__table-icon">
                              <img src="img/icons/cheese.svg" class="ingredients__table-icon-image" alt="">
                            </div>
                          </td>
                          <td class="ingredients__table-cell">
                            <div class="ingredients__table-icon">Сыр</div>
                          </td>
                          <td class="ingredients__table-cell">
                            <div class="ingredients__table-icon">80г</div>
                          </td>
                        </tr>
                      </table>
                    </div>
                  </div>
                  <div class="burger-weight">
                    <div class="burger-weight__measure">
                      <div class="burger-weight__amount">1200</div>
                    </div>
                    <div class="burger-weight__title">ккал</div>
                  </div>
                  <div class="burgers-slider__left"><img class="burgers-slider__pic" src="./img/content/black-burger.png" alt=""></div>
                  <div class="burgers-slider__right">
                    <div class="section__title section__title_white">Dark Beef Burger</div>
                    <div class="burgers-slider__text text-block">
                      <p>Ваш старый добрый знакомый, с рубленым бифштексом из 100% говядины, тремя кусочками нежнейшего сыра
                        эмменталь, двумя помидорами, луком, салатом и соусом гриль теперь с добавлением экзотического соуса
                        чураско.
                      </p>
                    </div>
                    <div class="burgers-slider__options">
                      <div class="burgers-slider__price">
                        <div class="burgers-slider__price-amount">500</div>
                        <div class="burgers-slider__price-measure">рублей</div>
                      </div><a class="burgers-slider__buy btn" href="6">Заказать</a>
                    </div>
                  </div>
                </li>
                <li class="burgers-slider__item">
                  <div class="ingredients">
                    <div class="ingredients__icon">
                      <div class="ingredients__icon-pic">
                        <svg class="ingredients__burger-icon">
                          <use xlink:href="img/sprite.svg#burger"></use>
                        </svg>
                      </div>
                      <div class="ingredients__icon-text">Состав</div>
                    </div>
                    <div class="ingredients__dropdown">
                      <table class="indredients__table">
                        <tr class="ingredients__table-row">
                          <td class="ingredients__table-cell">
                            <div class="ingredients__table-icon">
                              <img src="img/icons/beef.svg" class="ingredients__table-icon-image" alt="">
                            </div>
                          </td>
                          <td class="ingredients__table-cell">
                            <div class="ingredients__table-icon">Говядина</div>
                          </td>
                          <td class="ingredients__table-cell">
                            <div class="ingredients__table-icon">300г</div>
                          </td>
                        </tr>
                        <tr class="ingredients__table-row">
                          <td class="ingredients__table-cell">
                            <div class="ingredients__table-icon">
                              <img src="img/icons/buns.svg" class="ingredients__table-icon-image" alt="">
                            </div>
                          </td>
                          <td class="ingredients__table-cell">
                            <div class="ingredients__table-icon">Булочки</div>
                          </td>
                          <td class="ingredients__table-cell">
                            <div class="ingredients__table-icon">100г</div>
                          </td>
                        </tr>
                        <tr class="ingredients__table-row">
                          <td class="ingredients__table-cell">
                            <div class="ingredients__table-icon">
                              <img src="img/icons/salad.svg" class="ingredients__table-icon-image" alt="">
                            </div>
                          </td>
                          <td class="ingredients__table-cell">
                            <div class="ingredients__table-icon">Зелень</div>
                          </td>
                          <td class="ingredients__table-cell">
                            <div class="ingredients__table-icon">70г</div>
                          </td>
                        </tr>
                        <tr class="ingredients__table-row">
                          <td class="ingredients__table-cell">
                            <div class="ingredients__table-icon">
                              <img src="img/icons/sauce.svg" class="ingredients__table-icon-image" alt="">
                            </div>
                          </td>
                          <td class="ingredients__table-cell">
                            <div class="ingredients__table-icon">Соус</div>
                          </td>
                          <td class="ingredients__table-cell">
                            <div class="ingredients__table-icon">150г</div>
                          </td>
                        </tr>
                        <tr class="ingredients__table-row">
                          <td class="ingredients__table-cell">
                            <div class="ingredients__table-icon">
                              <img src="img/icons/cucumber.svg" class="ingredients__table-icon-image" alt="">
                            </div>
                          </td>
                          <td class="ingredients__table-cell">
                            <div class="ingredients__table-icon">Овощи</div>
                          </td>
                          <td class="ingredients__table-cell">
                            <div class="ingredients__table-icon">200г</div>
                          </td>
                        </tr>
                        <tr class="ingredients__table-row">
                          <td class="ingredients__table-cell">
                            <div class="ingredients__table-icon">
                              <img src="img/icons/cheese.svg" class="ingredients__table-icon-image" alt="">
                            </div>
                          </td>
                          <td class="ingredients__table-cell">
                            <div class="ingredients__table-icon">Сыр</div>
                          </td>
                          <td class="ingredients__table-cell">
                            <div class="ingredients__table-icon">80г</div>
                          </td>
                        </tr>
                      </table>
                    </div>
                  </div>
                  <div class="burger-weight">
                    <div class="burger-weight__measure">
                      <div class="burger-weight__amount">1200</div>
                    </div>
                    <div class="burger-weight__title">ккал</div>
                  </div>
                  <div class="burgers-slider__left"><img class="burgers-slider__pic" src="./img/content/black-burger.png" alt=""></div>
                  <div class="burgers-slider__right">
                    <div class="section__title section__title_white">Dark Beef Burger</div>
                    <div class="burgers-slider__text text-block">
                      <p>Ваш старый добрый знакомый, с рубленым бифштексом из 100% говядины, тремя кусочками нежнейшего сыра
                        эмменталь, двумя помидорами, луком, салатом и соусом гриль теперь с добавлением экзотического соуса
                        чураско.
                      </p>
                    </div>
                    <div class="burgers-slider__options">
                      <div class="burgers-slider__price">
                        <div class="burgers-slider__price-amount">500</div>
                        <div class="burgers-slider__price-measure">рублей</div>
                      </div><a class="burgers-slider__buy btn" href="6">Заказать</a>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>

      <section class="section team">
        <div class="team__section">
          <div class="section__title">Команда</div>
          <ul class="team-acco">
            <li class="team-acco__item"><a class="team-acco__trigger" href="#">дэниэл редклифф</a>
              <div class="team-acco__content">
                <div class="team-acco__pic">
                  <div class="team-acco__img" style="background-image: url('./img/content/teammate.jpg')"></div>
                </div>
                <div class="team-acco__text">
                  <div class="team-acco__title">Шеф-повар</div>
                  <div class="team-acco__text-content">С радостью поможет подобрать идеальный бургер и оформить заказ.</div>
                </div>
              </div>
            </li>
            <li class="team-acco__item"><a class="team-acco__trigger" href="#">ричард джеймс</a>
              <div class="team-acco__content">
                <div class="team-acco__pic">
                  <div class="team-acco__img" style="background-image: url('./img/content/teammate.jpg')"></div>
                </div>
                <div class="team-acco__text">
                  <div class="team-acco__title">Оператор</div>
                  <div class="team-acco__text-content">С радостью поможет подобрать идеальный бургер и оформить заказ.</div>
                </div>
              </div>
            </li>
            <li class="team-acco__item"><a class="team-acco__trigger" href="#">Джейк Финн</a>
              <div class="team-acco__content">
                <div class="team-acco__pic">
                  <div class="team-acco__img" style="background-image: url('./img/content/teammate.jpg')"></div>
                </div>
                <div class="team-acco__text">
                  <div class="team-acco__title">Менеджер</div>
                  <div class="team-acco__text-content">С радостью поможет подобрать идеальный бургер и оформить заказ.</div>
                </div>
              </div>
            </li>
            <li class="team-acco__item"><a class="team-acco__trigger" href="#">Николай Иванов</a>
              <div class="team-acco__content">
                <div class="team-acco__pic">
                  <div class="team-acco__img" style="background-image: url('./img/content/teammate.jpg')"></div>
                </div>
                <div class="team-acco__text">
                  <div class="team-acco__title">Шоколатье</div>
                  <div class="team-acco__text-content">С радостью поможет подобрать идеальный бургер и оформить заказ.</div>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </section>

      <section class="section menu">
        <div class="section__title section__title_white menu__title">Меню</div>
        <ul class="menu-acco">
          <li class="menu-acco__item">
            <a class="menu-acco__trigger" href="#" style="background-image: url('./img/bg/menu/meats.jpg')">
              <div class="menu-acco__trigger-text">Для мясоедов</div>
            </a>
            <div class="menu-acco__content">
              <div class="menu-acco__text">
                Речевой акт редуцирует диалектический характер. Развивая эту тему, заимствование редуцирует конструктивный механизм сочленений.
                Лирический субъект начинает диссонансный анжамбеман. Наш современник стал особенно чутко относиться к слову,
                однако механизм сочленений неустойчив. Модальность высказывания, как справедливо считает И.Гальперин, пространственно
                выбирает метр. Речевой акт редуцирует диалектический характер. Развивая эту тему, заимствование редуцирует
                конструктивный механизм сочленений. Лирический субъект начинает диссонансный анжамбеман. Наш современник
                стал особенно чутко относиться к слову.
              </div>
            </div>
          </li>
          <li class="menu-acco__item">
            <a class="menu-acco__trigger" href="#" style="background-image: url('./img/bg/menu/vegans.jpg')">
              <div class="menu-acco__trigger-text">Вегетарианское</div>
            </a>
            <div class="menu-acco__content">
              <div class="menu-acco__text">
                Речевой акт редуцирует диалектический характер. Развивая эту тему, заимствование редуцирует конструктивный механизм сочленений.
                Лирический субъект начинает диссонансный анжамбеман. Наш современник стал особенно чутко относиться к слову,
                однако механизм сочленений неустойчив. Модальность высказывания, как справедливо считает И.Гальперин, пространственно
                выбирает метр. Речевой акт редуцирует диалектический характер. Развивая эту тему, заимствование редуцирует
                конструктивный механизм сочленений. Лирический субъект начинает диссонансный анжамбеман. Наш современник
                стал особенно чутко относиться к слову.
              </div>
            </div>
          </li>
          <li class="menu-acco__item">
            <a class="menu-acco__trigger" href="#" style="background-image: url('./img/bg/menu/diets.jpg')">
              <div class="menu-acco__trigger-text">Диетическое</div>
            </a>
            <div class="menu-acco__content">
              <div class="menu-acco__text">
                Речевой акт редуцирует диалектический характер. Развивая эту тему, заимствование редуцирует конструктивный механизм сочленений.
                Лирический субъект начинает диссонансный анжамбеман. Наш современник стал особенно чутко относиться к слову,
                однако механизм сочленений неустойчив. Модальность высказывания, как справедливо считает И.Гальперин, пространственно
                выбирает метр. Речевой акт редуцирует диалектический характер. Развивая эту тему, заимствование редуцирует
                конструктивный механизм сочленений. Лирический субъект начинает диссонансный анжамбеман. Наш современник
                стал особенно чутко относиться к слову.
              </div>
            </div>
          </li>
        </ul>
      </section>

      <section class="section reviews">
        <ul class="reviews__list">
          <li class="reviews__item">
            <div class="review">
              <div class="review__photo" style="background-image: url('./img/content/reviews/1.jpg')"></div>
              <div class="review__hover">
                <div class="review__title">Константин Спилберг</div>
                <div class="review__shorttext">Мысли все о них и о них, о них и о них. Нельзя устоять, невозможно забыть... Никогда не думал, что булочки
                  могут быть такими мягкими, котлетка такой сочной, а сыр таким расплавленным.</div>
                <div class="review__button-wrap"><a class="review__view" href="#full-review">Подробнее</a></div>
              </div>
            </div>
          </li>
          <li class="reviews__item">
            <div class="review">
              <div class="review__photo" style="background-image: url('./img/content/reviews/2.jpg')"></div>
              <div class="review__hover">
                <div class="review__title">Константин Спилберг</div>
                <div class="review__shorttext">Мысли все о них и о них, о них и о них. Нельзя устоять, невозможно забыть... Никогда не думал, что булочки
                  могут быть такими мягкими, котлетка такой сочной, а сыр таким расплавленным.</div>
                <div class="review__button-wrap"><a class="review__view" href="#full-review">Подробнее</a></div>
              </div>
            </div>
          </li>
          <li class="reviews__item">
            <div class="review">
              <div class="review__photo" style="background-image: url('./img/content/reviews/3.jpg')"></div>
              <div class="review__hover">
                <div class="review__title">Константин Спилберг</div>
                <div class="review__shorttext">Мысли все о них и о них, о них и о них. Нельзя устоять, невозможно забыть... Никогда не думал, что булочки
                  могут быть такими мягкими, котлетка такой сочной, а сыр таким расплавленным.</div>
                <div class="review__button-wrap"><a class="review__view" href="#full-review">Подробнее</a></div>
              </div>
            </div>
          </li>
          <li class="reviews__item">
            <div class="review">
              <div class="review__photo" style="background-image: url('./img/content/reviews/4.jpg')"></div>
              <div class="review__hover">
                <div class="review__title">Константин Спилберг</div>
                <div class="review__shorttext">Мысли все о них и о них, о них и о них. Нельзя устоять, невозможно забыть... Никогда не думал, что булочки
                  могут быть такими мягкими, котлетка такой сочной, а сыр таким расплавленным.</div>
                <div class="review__button-wrap"><a class="review__view" href="#full-review">Подробнее</a></div>
              </div>
            </div>
          </li>
          <li class="reviews__item">
            <div class="review">
              <div class="review__photo" style="background-image: url('./img/content/reviews/5.jpg')"></div>
              <div class="review__hover">
                <div class="review__title">Константин Спилберг</div>
                <div class="review__shorttext">Мысли все о них и о них, о них и о них. Нельзя устоять, невозможно забыть... Никогда не думал, что булочки
                  могут быть такими мягкими, котлетка такой сочной, а сыр таким расплавленным.</div>
                <div class="review__button-wrap"><a class="review__view" href="#full-review">Подробнее</a></div>
              </div>
            </div>
          </li>
          <li class="reviews__item">
            <div class="review">
              <div class="review__photo" style="background-image: url('./img/content/reviews/6.jpg')"></div>
              <div class="review__hover">
                <div class="review__title">Константин Спилберг</div>
                <div class="review__shorttext">Мысли все о них и о них, о них и о них. Нельзя устоять, невозможно забыть... Никогда не думал, что булочки
                  могут быть такими мягкими, котлетка такой сочной, а сыр таким расплавленным.</div>
                <div class="review__button-wrap"><a class="review__view" href="#full-review">Подробнее</a></div>
              </div>
            </div>
          </li>
          <li class="reviews__item">
            <div class="review">
              <div class="review__photo" style="background-image: url('./img/content/reviews/7.jpg')"></div>
              <div class="review__hover">
                <div class="review__title">Константин Спилберг</div>
                <div class="review__shorttext">Мысли все о них и о них, о них и о них. Нельзя устоять, невозможно забыть... Никогда не думал, что булочки
                  могут быть такими мягкими, котлетка такой сочной, а сыр таким расплавленным.</div>
                <div class="review__button-wrap"><a class="review__view" href="#full-review">Подробнее</a></div>
              </div>
            </div>
          </li>
          <li class="reviews__item">
            <div class="review">
              <div class="review__photo" style="background-image: url('./img/content/reviews/8.jpg')"></div>
              <div class="review__hover">
                <div class="review__title">Константин Спилберг</div>
                <div class="review__shorttext">Мысли все о них и о них, о них и о них. Нельзя устоять, невозможно забыть... Никогда не думал, что булочки
                  могут быть такими мягкими, котлетка такой сочной, а сыр таким расплавленным.</div>
                <div class="review__button-wrap"><a class="review__view" href="#full-review">Подробнее</a></div>
              </div>
            </div>
          </li>
        </ul>
      </section>

      <section class="section order">
        <div class="container">
          <div class="section__title">Закажите доставку</div>
          <div class="order__form">
            <form class="order__form-tag" id="order-form">
              <div class="order__form-col">
                <div class="order__form-row order__form-row_double">
                  <label class="order__form-block">
                      <div class="order__form-label">Имя</div>
                      <input class="order__form-input" name="name" type="text" placeholder="">
                    </label>
                  <label class="order__form-block">
                      <div class="order__form-label">Телефон</div>
                      <input class="order__form-input phone-mask" name="phone" type="text" placeholder="">
                    </label>
                </div>
                <div class="order__form-row">
                  <label class="order__form-block">
                      <div class="order__form-label">Улица</div>
                      <input class="order__form-input" name="street" type="text" placeholder="">
                    </label>
                </div>
                <div class="order__form-row order__form-row_quatro">
                  <label class="order__form-block">
                      <div class="order__form-label">Дом</div>
                      <input class="order__form-input" name="home" type="text" placeholder="">
                    </label>
                  <label class="order__form-block">
                      <div class="order__form-label">Корпус</div>
                      <input class="order__form-input" name="part" type="text" placeholder="">
                    </label>
                  <label class="order__form-block">
                      <div class="order__form-label">Квартира</div>
                      <input class="order__form-input" name="appt" type="text" placeholder="">
                    </label>
                  <label class="order__form-block">
                      <div class="order__form-label">Этаж</div>
                      <input class="order__form-input" name="floor" type="text" placeholder="">
                    </label>
                </div>
              </div>
              <div class="order__form-col">
                <div class="order__form-row">
                  <label class="order__form-block">
                      <div class="order__form-label">Комментарий</div>
                      <textarea class="order__form-input order__form-input_textarea" name="comment"></textarea>
                    </label>
                </div>
                <div class="order__form-row">
                  <label class="order__radio">
                      <input class="order__radio-elem" name="payment" type="radio">
                      <div class="order__radio-fake"></div>
                      <div class="order__radio-title">Потребуется сдача</div>
                    </label>
                  <label class="order__radio">
                      <input class="order__radio-elem" name="payment" type="radio">
                      <div class="order__radio-fake"></div>
                      <div class="order__radio-title">Оплата по карте</div>
                    </label>
                </div>
                <div class="order__form-row">
                  <label class="order__radio order__radio_checkbox">
                      <input class="order__radio-elem" name="callback" type="checkbox">
                      <div class="order__radio-fake"></div>
                      <div class="order__radio-title">Не перезванивать</div>
                    </label>
                </div>
                <div class="order__form-row">
                  <input class="order__form-button btn" name="" type="submit" value="Заказать">
                  <input class="order__form-button order__form-button_reset" name="" type="reset" value="Очистить">
                </div>
              </div>
            </form>
          </div>
        </div>
      </section>

      <section class="section map">
        <div class="yandex-map" id="map"></div>
        <footer class="footer">
          <div class="container">
            <div class="footer__col">
              <div class="footer__address">Москва, ул.Тверская, д.12/1, 15</div><a class="footer__phone" href="tel:+79999999999">+7 (999) 999-99-99</a>
            </div>
            <div class="footer__col footer__col_right">
              <ul class="socials">
                <li class="socials__item">
                  <a class="socials__link" href="#">
                    <svg class="socials__icon">
                      <use xlink:href="img/sprite.svg#vk"></use>
                    </svg>
                  </a>
                </li>
                <li class="socials__item">
                  <a class="socials__link" href="#">
                    <svg class="socials__icon">
                      <use xlink:href="img/sprite.svg#fb"></use>
                    </svg>
                  </a>
                </li>
                <li class="socials__item">
                  <a class="socials__link" href="#">
                    <svg class="socials__icon">
                      <use xlink:href="img/sprite.svg#inst"></use>
                    </svg>
                  </a>
                </li>
                <li class="socials__item">
                  <a class="socials__link" href="#">
                    <svg class="socials__icon">
                      <use xlink:href="img/sprite.svg#twitter"></use>
                    </svg>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </footer>
      </section>
    </div>
  </div>
  <ul class="fixed-menu">
    <li class="fixed-menu__item">
      <a class="fixed-menu__link" href="0"></a>
    </li>
    <li class="fixed-menu__item">
      <a class="fixed-menu__link" href="1"></a>
    </li>
    <li class="fixed-menu__item">
      <a class="fixed-menu__link" href="2"></a>
    </li>
    <li class="fixed-menu__item">
      <a class="fixed-menu__link" href="3"></a>
    </li>
    <li class="fixed-menu__item">
      <a class="fixed-menu__link" href="4"></a>
    </li>
    <li class="fixed-menu__item">
      <a class="fixed-menu__link" href="5"></a>
    </li>
    <li class="fixed-menu__item">
      <a class="fixed-menu__link" href="6"></a>
    </li>
    <li class="fixed-menu__item">
      <a class="fixed-menu__link" href="7"></a>
    </li>
  </ul>
  <div class="full-review popup" id="full-review">
    <a class="full-review__close" href="#">
      <svg id="icon" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15">
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#E45028" d="M9.831 7.494l4.673-4.673A1.651 1.651 0 1 0 12.167.484L7.494 5.157 2.82.483A1.653 1.653 0 0 0 .483 2.82l4.673 4.673-4.673 4.673a1.653 1.653 0 0 0 2.337 2.337L7.493 9.83l4.673 4.673c.646.646 1.691.646 2.337 0s.646-1.691 0-2.337L9.831 7.494z"
        />
      </svg>
    </a>
    <div class="full-review__inner">
      <div class="full-review__title">Констнтин Спилберг</div>
      <div class="full-review__content">
        Мысли все о них и о них, о них и о них. Нельзя устоять, невозможно забыть... Никогда не думал, что булочки могут быть такими
        мягкими, котлетка такой сочной, а сыр таким расплавленным. Мысли все о них и о них, о них и о них. Нельзя устоять,
        невозможно забыть... Никогда не думал, что булочки могут быть такими мягкими, котлетка такой сочной, а сыр таким
        расплавленным.

      </div>
    </div>
  </div>
  <div class="status-popup popup" id="success">
    <div class="status-popup__inner">
      <div class="status-popup__message">Сообщение отправлено</div><a class="status-popup__close btn" href="#">Закрыть</a>
    </div>
  </div>
  <div class="status-popup popup" id="error">
    <div class="status-popup__inner">
      <div class="status-popup__message error-message">Произошла ошибка</div><a class="status-popup__close btn" href="#">Закрыть</a>
    </div>
  </div>
  <script src="js/vendors.min.js"></script>
  <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
  <script src="js/main.js"></script>
</body>

</html>