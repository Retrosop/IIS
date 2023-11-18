<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'Меню';
$this->params['breadcrumbs'][] = $this->title;
?>
<script src="2.js"></script>
<ul class="breadcrumb">
  <li><a href="//yii2test.ru/web/index.php">Главная</a></li>
  <li><a href="//yii2test.ru/web/index.php?r=site%2Fmenud">Меню</a></li>
  <li><a href="//yii2test.ru/web/index.php?r=site%2Fpastad">Паста</a></li>
</ul>
<div class="site-about">
<div class="cards">
 <div class="card">
  <!-- Верхняя часть -->
  <div class="card__top">
    <!-- Изображение-ссылка товара -->
    <div class="card__image">
      <img
        src="https://yii2test.ru/web/img/p/1.jpg"
        alt="">
        
  </div>
      </div>
      </div>
    <div class="card__title">
    Алла Болоньезе
    </div>
    <div class="card__main">
                	                <div class="card__description">
	                    <div class="card__label">СОСТАВ:</div>
	                    <p>Говядина, Свинина, Спагетти из твердых сортов, Лук репчатый, Морковь, Томаты в собственном соку, Томатная паста, Сыр пармезан, Масло подсолнечное, Сахар, Соль, Специи<br>
<br>
Срок годности: 5 суток<br>
Готовые блюда быстро охлаждаются до +1/+4 градусов и упаковываются в газомодифицированной среде. Благодаря этому свежесть сохраняется 5 суток.</p>
	                </div>
	            								<div class="product__labels">
																													</div>
				                <div class="card__parameters">
                		                    <div class="card__parameter _main">
	                        <div class="card__parameter-value">365 Ккал</div>
	                        <div class="card__parameter-label">Энергетическая<br> ценность</div>
	                    </div>
	                	                	                    <div class="card__parameter">
	                        <div class="card__parameter-value">15</div>
	                        <div class="card__parameter-label">Белки</div>
	                    </div>
                                        	                    <div class="card__parameter">
	                        <div class="card__parameter-value">10</div>
	                        <div class="card__parameter-label">Жиры</div>
	                    </div>
                                        	                    <div class="card__parameter">
	                        <div class="card__parameter-value">54</div>
	                        <div class="card__parameter-label">Углеводы</div>
	                    </div>
                                    </div>
				                <div class="card__counter">
                    <div class="card__counter-label">Количество</div>
                    <div class="element-price-block">
                        <div class="counter _vertical">
                            <div class="counter _vertical">
                                <input class="counter__input card-page" type="number" value="0" data-product-id="51838" data-ratio="1" autocomplete="off">
                                <div class="counter__buttons">
                                    <a class="counter__button _plus" href="#"></a>
                                    <a class="counter__button _minus" href="#"></a>
                                </div>
                            </div>
                        </div>
<button class="buy-now-button" data-product-id="123">Добавить в корзину</button>
                        
                    </div>
                </div>
                <!-- <div class="card__button">
                	<a class="mini-button" href="#" onclick="//return add2basket(51838);">
                		<i class="icon icon-cart"></i>
                		<span>Добавить в корзину</span>
                	</a>
                </div> -->
            </div>
  </div>
<!-- Ссылка-название товара -->
    
<style>
    .element-price-block{
	display: flex;
}
.element-price-block .mini-button{
	cursor: default;
	margin-left: 5rem;
}
.card__illustration {
	margin-bottom: 20px;
}
.card__illustration iframe {
	width: 100%;
	height: 100%;
}
.card__illustration.video {
	height: 49.5rem;
}
@media (max-width:  520px) {
	.section.card,
	.card__main {
		display: inherit !important;
	}
}
.card {
  width: 400px;
  height: 400px;
  box-shadow: 1px 2px 4px rgba(0, 0, 0, 0.9);
  display: flex;
  border-radius: 4px;
  transition: 0.2s;
  position: relative;
top: 50px;
    left: 50px;
 background: rgba(0, 0, 0, 0.4);

}

/* Контейнер для картинки */
.card__image {
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}

.card__image > img {
  width: 400px;
  height: 400px;
  object-fit: contain; /* Встраиваем картинку в контейнер card__image */
  transition: 0.2s;
}

.card__title {
    position: relative;
    left: 400px;
  display:block;
  margin-bottom: 60px;
text-align: center;
 text-decoration: none;
  font-weight: 500;
  font-size: 40px;
  line-height: 150%;
  color: white;
    white-space: nowrap;
}

.card__add {
  display: block;
  width: 100%;
  font-weight: 400;
  font-size: 17px;
  color: #70c05b;
  padding: 10px;
  text-align: center;
  border: 1px solid #70c05b;
  border-radius: 4px;
  cursor: pointer; /* Меняем курсор при наведении */
  transition: 0.2s;
  margin-top: auto; /* Прижимаем кнопку к низу карточки */
}

.card__add:hover {
  border: 1px solid #ff6633;
  background-color: #ff6633;
  color: #fff;
}
    .cards {
box-shadow: 4px 8px 16px rgba(0, 0, 0, 0.7);
  display: grid;
  /* Автоматически заполняем на всю ширину grid-контейнера */
  grid-template-columns: repeat(auto-fill, 225px);
  width: 100%;
  max-width: 1300px; /* Ширина grid-контейнера */
  height: 670px;
  margin: 0 auto;
}
    /* Стиль списка */
ul.breadcrumb {
  padding: 10px 16px;
  list-style: none;
  background-color: none;
}

/* Отображение элементов списка бок о бок */
ul.breadcrumb li {
  display: inline;
  font-size: 18px;
}

/* Добавить символ косой черты (/) перед/за каждым элементом списка */
ul.breadcrumb li+li:before {
  padding: 8px;
  color: black;
  content: "/\00a0";
}

/* Добавить цвет для всех ссылок внутри списка */
ul.breadcrumb li a {
  color: white;
  text-decoration: none;
}

/* Добавить цвет на наведении курсора мыши */
ul.breadcrumb li a:hover {
  color: #01447e;
  text-decoration: underline;
}
   body, html {
  background-image: url("https://yii2test.ru/web/img/1.jpg");
       
     
@media(max-width: 767px) {
    .cart-button_cartButton__rUH_V {
        position:relative;
        width: 40px!important;
        height: 40px!important
    }
}

}
card {
    margin-top: 6rem;
    margin-bottom: 17.5rem;
    display: grid;
    grid-template-columns: 1fr 39.5rem;
    line-height: 1.45;
    -webkit-box-align: start;
    -ms-flex-align: start;
    align-items: flex-start;
    grid-gap: 3rem 5rem
}

.card__main {
    display: grid;
    grid-gap: 2.7rem
}

.card__illustration {
    width: 100%;
    height: 49.5rem;
    max-width: 66.5rem;
    border-radius: var(--radius);
    -o-object-fit: cover;
    object-fit: cover
}

.card__label {
    font-size: 12px;
    font-weight: 600;
    color:white;
    position: relative;
    left: 100px;
    top: 75px;
    text-transform: uppercase;
    letter-spacing: .2em;
    margin-bottom: 5px
}

.card__label+p {
    margin-top: 0;
    position: relative;
    top: 80px;
    left: 100px;
}

.card__parameter-value {
    margin-bottom: -.1em;
    white-space: nowrap;
    font-size: 40px;
}

.card__parameter {
    margin-right: 17px;
    font-size: 2.4rem
}

.card__parameter._main {
    margin-right: 4.5rem;
    font-size: 3.2rem
}

.card__parameter:last-child {
    margin-right: 0
}

.card__parameters {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-flow: row nowrap;
    flex-flow: row nowrap;
    -webkit-box-pack: start;
    -ms-flex-pack: start;
    justify-content: flex-start;
    -webkit-box-align: baseline;
    -ms-flex-align: baseline;
    align-items: baseline;
    position: relative;
    left: 100px;
    color: azure;
    font-size: 30px;
}

.card__parameter-label {
    font-size: 10px;
    font-weight: 600;
    color: white;
    text-transform: uppercase;
    letter-spacing: .2em
}

.card__counter {
    position: relative;
    left: 100px;
    margin: 5px 0
}

.card__counter-label {
    margin-bottom: 5px;
    color: azure;
}

@media (max-width: 1023px) {
    .card {
        margin-top: 3rem;
        margin-bottom: 3.5rem
    }

    .card__illustration {
        height: auto
    }
}

@media (max-width: 767px) {
    .card {
        grid-template-columns: initial
    }

    .card__main {
        grid-gap: 2rem
    }

    .card__parameter._main {
        margin-right: 2.2rem
    }
}

@media (max-width: 360px) {
    .card__parameter._main {
        margin-right: 17px
    }

    .card__parameter-label {
        font-size: 8px
    }
}

.delivery {
    margin-top: 2rem;
    margin-bottom: 23.5rem
}

.delivery__title {
    margin-bottom: 2.5rem
}

.delivery__info._order {
    margin-bottom: 4.8rem;
    max-width: 66.5rem
}

.delivery__info._delivery {
    margin-right: 8.5rem;
    max-width: 31.5rem
}

.delivery__description {
    margin-top: 10px
}

.delivery__banner {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-flow: row nowrap;
    flex-flow: row nowrap;
    -webkit-box-pack: start;
    -ms-flex-pack: start;
    justify-content: flex-start;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center
}

.delivery__list {
    margin: 8.5rem 0 7.5rem 0
}

.delivery__map {
    margin-bottom: 5.5rem;
    height: 65.5rem;
    max-height: 80vh;
    border-radius: var(--radius)
}

.delivery__row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    grid-gap: 3.5rem 3rem
}

@media (max-width: 1023px) {
    .delivery {
        margin-bottom: 6.5rem
    }

    .delivery__banner {
        display: block
    }

    .delivery__info._delivery, .delivery__info._order {
        margin-bottom: 3.5rem
    }

    .delivery__list {
        margin: 5rem 0 5.5rem 0
    }
}

@media (max-width: 530px) {
    .delivery__row {
        grid-template-columns: initial
    }
}

.contacts {
    margin-top: 2rem;
    margin-bottom: 17rem
}

.contacts__title {
    margin-bottom: 12px
}

.contacts__info {
    margin-bottom: 4rem;
    max-width: 52rem
}

.contacts__form-title {
    margin-bottom: 2.7rem
}

@media (max-width: 767px) {
    .contacts {
        margin-bottom: 8rem
    }
}

.cart {
    margin-top: 7rem;
    margin-bottom: 12rem
}

@media (max-width: 767px) {
    .cart {
        margin-top: 2rem;
        margin-bottom: 17.5rem
    }
}

.orders-page {
    margin-bottom: 16.5rem
}

@media (max-width: 767px) {
    .orders-page {
        margin-bottom: 5rem
    }
}

.header {
    padding: 2.2rem 0;
    background: var(--color1);
    color: #fff;
    font-weight: 600;
    -webkit-box-shadow: 0 100px 80px rgba(0, 0, 0, .07), 0 41.7776px 33.4221px rgba(0, 0, 0, .0503198), 0 22.3363px 17.869px rgba(0, 0, 0, .0417275), 0 12.5216px 10.0172px rgba(0, 0, 0, .035), 0 6.6501px 5.32008px rgba(0, 0, 0, .0282725), 0 2.76726px 2.21381px rgba(0, 0, 0, .0196802);
    box-shadow: 0 100px 80px rgba(0, 0, 0, .07), 0 41.7776px 33.4221px rgba(0, 0, 0, .0503198), 0 22.3363px 17.869px rgba(0, 0, 0, .0417275), 0 12.5216px 10.0172px rgba(0, 0, 0, .035), 0 6.6501px 5.32008px rgba(0, 0, 0, .0282725), 0 2.76726px 2.21381px rgba(0, 0, 0, .0196802);
    position: relative
}

.header__inner {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-flow: row nowrap;
    flex-flow: row nowrap;
    -webkit-box-pack: start;
    -ms-flex-pack: start;
    justify-content: flex-start;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center
}

.header__main {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-flow: row nowrap;
    flex-flow: row nowrap;
    -webkit-box-pack: start;
    -ms-flex-pack: start;
    justify-content: flex-start;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-flex: 1;
    -ms-flex-positive: 1;
    flex-grow: 1
}

.header__menu {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-flow: row nowrap;
    flex-flow: row nowrap;
    -webkit-box-pack: space-evenly;
    -ms-flex-pack: space-evenly;
    justify-content: space-evenly;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    font-size: 2rem;
    -webkit-box-flex: 1;
    -ms-flex-positive: 1;
    flex-grow: 1;
    padding-bottom: 16px
}

.header__links {
    display: grid;
    grid-gap: 15px;
    margin-left: 4rem
}

.header__menu-item {
    border-bottom: 1px solid;
    line-height: 1
}

.header__link {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-flow: row nowrap;
    flex-flow: row nowrap;
    -webkit-box-pack: start;
    -ms-flex-pack: start;
    justify-content: flex-start;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    font-size: 2rem;
    line-height: 1;
    margin-right: 2.3rem
}

.header__link i.icon {
    margin-right: 6px;
    font-size: 16px
}

.header__logo img {
    width: 22rem
}

.header__close, .header__main-logo, .header__menu-activation, .header__menu-open, .header__phone-mobile {
    display: none
}

@media (max-width: 1023px) {
    .header {
        padding: 15px 0;
        height: var(--header-height);
        position: fixed;
        top: 0;
        left: 0;
        z-index: 15;
        width: 100%
    }

    .header__inner {
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between
    }

    .header__main {
        position: fixed;
        top: 0;
        right: -100%;
        height: 100%;
        width: 100%;
        z-index: 15;
        background: var(--color1);
        padding: 4.5rem 4.5rem 3.5rem 4.5rem;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-align: stretch;
        -ms-flex-align: stretch;
        align-items: stretch;
        -webkit-transition: all .5s;
        transition: all .5s
    }

    .header__menu {
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-align: start;
        -ms-flex-align: start;
        align-items: flex-start;
        -webkit-box-pack: start;
        -ms-flex-pack: start;
        justify-content: flex-start;
        padding-bottom: 0
    }

</style>