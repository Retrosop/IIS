<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'Меню';
$this->params['breadcrumbs'][] = $this->title;
?>
<ul class="breadcrumb">
  <li><a href="/web/index.php">Главная</a></li>
  <li><a href="/web/index.php?r=site%2Fmenud">Меню</a></li>
  <li><a href="/web/index.php?r=site%2Fpastad">Пицца</a></li>
</ul>
<div class="site-about">
<div class="cards">
 <div class="card">
  <!-- Верхняя часть -->
  <div class="card__top">
    <!-- Изображение-ссылка товара -->
    <a href="/web/index.php?r=site%2Fpastad" class="card__image">
      <img
        src="/web/img/pi/1.jpg"
        alt=""
      />
    </a>
  </div>
  <!-- Нижняя часть -->
  <div class="card__bottom">
    </div>
    <!-- Ссылка-название товара -->
    <a href="/web/index.php?r=site%2Fpastad" class="card__title">
      Mix Пицца
    </a>
  </div>
 <div class="card">
  <!-- Верхняя часть -->
  <div class="card__top">
    <!-- Изображение-ссылка товара -->
    <a href="/web/index.php?r=site%2Fpizzad" class="card__image">
      <img
        src="/web/img/pi/2.jpg"
        alt=""
      />
    </a>
  </div>
  <!-- Нижняя часть -->
  <div class="card__bottom">
    </div>
    <!-- Ссылка-название товара -->
    <a href="/web/index.php?r=site%2Fpizzad" class="card__title">
      Болоньезе
    </a>
  </div>
 <div class="card">
  <!-- Верхняя часть -->
  <div class="card__top">
    <!-- Изображение-ссылка товара -->
    <a href="/web/index.php?r=site%2Fdishesd" class="card__image">
      <img
        src="/web/img/pi/3.jpg"
        alt=""
      />
    </a>
  </div>
  <!-- Нижняя часть -->
  <div class="card__bottom">
    </div>
    <!-- Ссылка-название товара -->
    <a href="/web/index.php?r=site%2Fdishesd" class="card__title">
      Деревенская
    </a>
  </div>
 <div class="card">
  <!-- Верхняя часть -->
  <div class="card__top">
    <!-- Изображение-ссылка товара -->
    <a href="/web/index.php?r=site%2Fhotd" class="card__image">
      <img
        src="/web/img/pi/4.jpg"
        alt=""
      />
    </a>
  </div>
  <!-- Нижняя часть -->
  <div class="card__bottom">
    </div>
    <!-- Ссылка-название товара -->
    <a href="/web/index.php?r=site%2Fhotd" class="card__title">
      Кальцоне
    </a>
  </div>
<div class="card">
  <!-- Верхняя часть -->
  <div class="card__top">
    <!-- Изображение-ссылка товара -->
    <a href="/web/index.php?r=site%2Fsoupsd" class="card__image">
      <img
        src="/web/img/pi/5.jpg"
        alt=""
      />
    </a>
  </div>
  <!-- Нижняя часть -->
  <div class="card__bottom">
    </div>
    <!-- Ссылка-название товара -->
    <a href="/web/index.php?r=site%2Fsoupsd" class="card__title">
      Алла Дьявола
    </a>
  </div>
  <div class="card">
  <!-- Верхняя часть -->
  <div class="card__top">
    <!-- Изображение-ссылка товара -->
    <a href="/web/index.php?r=site%2Fbreakfastd" class="card__image">
      <img
        src="/web/img/pi/6.jpg"
        alt=""
      />
    </a>
  </div>
  <!-- Нижняя часть -->
  <div class="card__bottom">
    </div>
    <!-- Ссылка-название товара -->
    <a href="/web/index.php?r=site%2Fbreakfastd" class="card__title">
      Кватро Формаджи
    </a>
  </div>
 <div class="card">
  <!-- Верхняя часть -->
  <div class="card__top">
    <!-- Изображение-ссылка товара -->
    <a href="/web/index.php?r=site%2Fdessertsd" class="card__image">
      <img
        src="/web/img/pi/7.jpg"
        alt=""
      />
    </a>
  </div>
  <!-- Нижняя часть -->
  <div class="card__bottom">
    </div>
    <!-- Ссылка-название товара -->
    <a href="/web/index.php?r=site%2Fdessertsd" class="card__title">
      Де Феличита
    </a>
  </div>
<div class="card">
  <!-- Верхняя часть -->
  <div class="card__top">
    <!-- Изображение-ссылка товара -->
    <a href="/web/index.php?r=site%2Fdrinksd" class="card__image">
      <img
        src="/web/img/pi/8.jpg"
        alt=""
      />
    </a>
  </div>
  <!-- Нижняя часть -->
  <div class="card__bottom">
    </div>
    <!-- Ссылка-название товара -->
    <a href="/web/index.php?r=site%2Fdrinksd" class="card__title">
      Компанья
    </a>
  </div>
</div>
</div>
<style>
.card {
  width: 225px;
  min-height: 350px;
  box-shadow: 1px 2px 4px rgba(0, 0, 0, 0.9);
  display: flex;
  flex-direction: column; /* Размещаем элементы в колонку */
  border-radius: 4px;
  transition: 0.2s;
  position: relative;
 background: rgba(0, 0, 0, 0.4);

}

/* При наведении на карточку - меняем цвет тени */
.card:hover {
  box-shadow: 4px 8px 16px rgba(0, 0, 0, 0.8);
}

.card__top {
  flex: 0 0 220px; /* Задаем высоту 220px, запрещаем расширение и сужение по высоте */
  position: relative;
  overflow: hidden; /* Скрываем, что выходит за пределы */
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
  width: 100%;
  height: 100%;
  object-fit: contain; /* Встраиваем картинку в контейнер card__image */
  transition: 0.2s;
}

/* При наведении - увеличиваем картинку */
.card__image:hover > img {
  transform: scale(1.1);
}

/* Размещаем скидку на товар относительно изображения */
.card__label {
  padding: 4px 8px;
  position: absolute;
  bottom: 10px;
  left: 10px;
  background: #ff6633;
  border-radius: 4px;
  font-weight: 400;
  font-size: 16px;
  color: #fff;
}

.card__bottom {
  display: flex;
  flex-direction: column;
  flex: 1 0 auto; /* Занимаем всю оставшуюся высоту карточки */
  padding: 10px;
}

.card__prices {
  display: flex;
  margin-bottom: 10px;
  flex: 0 0 50%; /* Размещаем цены равномерно в две колонки */
}
.card__price--discount {
  font-weight: 700;
  font-size: 19px;
  color: #414141;
  display: flex;
  flex-wrap: wrap-reverse;
}

.card__price--common {
  font-weight: 400;
  font-size: 17px;
  color: white;
  display: flex;
  flex-wrap: wrap-reverse;
  justify-content: flex-end;
}

.card__price--common {
  font-weight: 400;
  font-size: 25px;
  color: white;
}

.card__title {
  display: block;
  margin-bottom: 60px;
text-align: center;
    text-decoration: none;
  font-weight: 400;
  font-size: 25px;
  line-height: 150%;
  color: white;
}

.card__title:hover {
  color: #ff6633;
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
  justify-content: center;
  justify-items: center; /* Размещаем карточку по центру */
  column-gap: 50px; /* Отступ между колонками */
  grid-row-gap: 70px; /* Отступ между рядами */
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
</style>


