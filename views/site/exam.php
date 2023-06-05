<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'Телекомуникационная компания';
$this->params['breadcrumbs'][] = $this->title;
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
<style>
	body {
	margin: 0;
	padding: 0;
	overflow: auto;
	background-repeat: no-repeat;
	background-size: 100%;
	background-attachment: fixed;
	background-size: cover;
	backdrop-filter: blur(3px);
	background-image: url(https://mto-service.ru/templates/yootheme/cache/telecom-f4d95431.png);
}

::-webkit-scrollbar {
	background-color: rgb(255, 255, 255);
	width: 13px;
}

::-webkit-scrollbar-button {
	background-color: rgb(0, 0, 0);
}

::-webkit-scrollbar-thumb {
	background-color: rgb(10, 145, 255);
}

nav {
	background-color: rgba(255, 255, 255, 0.055);
}

#nav-pc {
	z-index: 1001;
	position: sticky;
	top: 0;
}

#dpopmenu-1:after {
	content: "\f107";
	font-family: "Font Awesome 5 Free";
	font-weight: 900;
	color: rgb(255, 255, 255);
	margin-left: 5px;
}

#dpopmenu-1:hover::after {
	color: red;
	content: "\f106";
	font-family: "Font Awesome 5 Free";
	font-weight: 900;
}

#dpopmenu-2:after {
	content: "\f107";
	font-family: "Font Awesome 5 Free";
	font-weight: 900;
	color: rgb(255, 255, 255);
	margin-left: 5px;
}

#dpopmenu-2:hover::after {
	color: red;
	content: "\f106";
	font-family: "Font Awesome 5 Free";
	font-weight: 900;
}

.ul-margin {
	position: relative;
	margin-left: 100px;
	display: inline-block;
}

nav ul {
	list-style: none;
	z-index: 1001;
	margin: 0;
	padding: 22px;
}

nav>ul>li {
	display: inline-block;
}

nav ul::after {
	content: "";
	display: block;
	clear: both;
}

nav ul li a {
	display: inline-block;
	text-decoration: none;
	color: rgb(255, 255, 255);
	font-family: Verdana, Geneva, Tahoma, sans-serif;
	margin-right: 40px;
	font-size: 25px;
	line-height: 40px;
}

nav ul li a:hover {
	color: red;
	transition: .15s;
}

nav ul ul {
	display: none;
	position: absolute;
	margin-left: -20px;
}

nav ul li:hover ul {
	display: block;
	background-color: rgba(78, 78, 78, 0.781);
	transition: .2s;
	border-radius: 5px;
}

.portfolio-wrap {
	max-width: 1120px;
	margin: 0 auto;
	display: flex;
	justify-content: center;
	flex-wrap: wrap;
}

.portfolio-item {
	padding: 10px;
	margin-top: 10em;
}

.portfolio-item a {
	display: block;
	text-decoration: none;
	color: white;
}

.portfolio-item-wrap {
	position: relative;
	overflow: hidden;
	text-align: center;
	box-shadow: 0 0 5px rgba(0, 0, 0, .2);
	background: black;
	color: white;
}

.portfolio-item img {
	display: block;
	width: 100%;
	opacity: .75;
	transition: .5s ease-in-out;
}

.portfolio-item-inner {
	position: absolute;
	top: 45%;
	left: 7%;
	right: 7%;
	bottom: 45%;
	border: 1px solid white;
	border-width: 0 1px 1px;
	transition: .4s ease-in-out;
}

.portfolio-heading {
	overflow: hidden;
	transform: translateY(-50%);
}

.portfolio-heading h3 {
	font-family: 'Pattaya', sans-serif;
	font-weight: normal;
	display: table;
	margin: 0 auto;
	padding: 0 10px;
	position: relative;
}

.portfolio-heading h3:before,
.portfolio-heading h3:after {
	content: "";
	position: absolute;
	top: 50%;
	width: 50px;
	height: 1px;
	background: white;
}

.portfolio-heading h3:before {
	left: -50px;
}

.portfolio-heading h3:after {
	right: -50px;
}

.portfolio-item-inner ul {
	position: absolute;
	top: 50%;
	width: 100%;
	transform: translateY(-50%);
	padding: 0 0px;
	opacity: 0;
	list-style: none;
	font-family: 'Raleway', sans-serif;
	transition: .4s ease-in-out;
}

.portfolio-item-inner li {
	position: relative;
	font-size: 200%;
	padding: 10px;
}

.portfolio-item-inner li:after {
	content: "";
	position: absolute;
	left: 50%;
	margin-left: -2px;
	bottom: -4px;
	width: 4px;
	height: 4px;
	border-radius: 50%;
	background: white;
	box-shadow: 10px 0 0 white, -10px 0 0 white;
}

.portfolio-item-inner li:last-child:after {
	content: none;
}

.portfolio-item:hover img {
	opacity: 0.45;
	transform: scale(1.1);
}

.portfolio-item:hover .portfolio-item-inner {
	top: 7%;
	bottom: 7%;
}

.portfolio-item:hover ul {
	opacity: 1;
	transition-delay: .5s;
}
.container1{
	margin-top: 40em;
}
.table1 {

	color: #fff;
	font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
	border: rgb(196, 196, 196) solid 1px;
	background-color: rgba(143, 143, 143, 0.199);
	max-width: 1120px;
	margin: 10em auto;
	display: flex;
	justify-content: center;
	flex-wrap: wrap;
	backdrop-filter: blur(2px);
}

.table1 caption {
	width: 100%;
	font-size: 120%;
}
img{
	max-width: 1120px;
	margin: 0 auto;
	display: flex;
	justify-content: center;
	flex-wrap: wrap;
}
.bubble {
	position: absolute;
	width: 50px;
	height: 50px;
	opacity: .1;
	background-color: #ffffff;
	border-radius: 50%;
	transition: left 0.5s ease-out, top 0.5s ease-out;
}
.bubble1 {
	position: absolute;
	width: 50px;
	height: 50px;
	opacity: .1;
	background-color: #ffffff;
	border-radius: 50%;
	transition: left 0.5s ease-out, top 0.5s ease-out;
}
</style>
<div class="site-about">
<nav id="nav-pc">
		<ul class="ul-margin">
			<li><a href="">Главная</a></li>
			<li><a href="" id="dpopmenu-1">Сязь</a>
				<ul>
					<li><a href="">Подключение</a></li>
					<li><a href="">Тарифы</a></li>
					<li><a href="">Оборудование</a></li>
					<li><a href="">Услуги</a></li>
					<li><a href="">Поддержка</a></li>
					<li><a href="">Спутниковое ТВ</a></li>
				</ul>
			</li>
			<li><a href="" id="dpopmenu-2">Сервисы</a>
				<ul>
					<li><a href="">Развлечения</a></li>
					<li><a href="">Киноманам</a></li>
					<li><a href="">Меломанам</a></li>
					<li><a href="">Геймерам</a></li>
				</ul>
			</li>
			<li><a href="">Финансы</a></li>
			<li><a href="">Интернет-магазин</a></li>
		</ul>
	</nav>

	<div class="portfolio-wrap">
		<div class="portfolio-item">
			<div class="portfolio-item-wrap">
				<a href="#t1">
					<img src="https://www.cmswire.com/-/media/925d0422a23a4a7e98ff806c3dcbdfe0.ashx?mw=0&mh=0">
					<div class="portfolio-item-inner">
						<div class="portfolio-heading">
							<h3>Тарифы</h3>
						</div>
						<ul>
							<li>Акционные</li>
							<li>Стоимость</li>
							<li>Условия</li>
						</ul>
					</div>
				</a>
			</div>
		</div>

		<div class="portfolio-item">
			<div class="portfolio-item-wrap">
				<a href="#t2">
					<img src="https://elektrik-market.ru/assets/images/catalog/etm/telekommunikaczionnoe-oborudovanie-i-sks.jpg">
					<div class="portfolio-item-inner">
						<div class="portfolio-heading">
							<h3>Оборудование</h3>
						</div>
						<ul>
							<li>Маршрутизаторы</li>
							<li>Сутниковые тарелки</li>
							<li>Патч-корд</li>
							<li>Роутеры</li>
						</ul>
					</div>
				</a>
			</div>
		</div>

		<div class="portfolio-item">
			<div class="portfolio-item-wrap">
				<a href="#t3">
					<img src="https://etimg.etb2bimg.com/photo/92739779.cms">
					<div class="portfolio-item-inner">
						<div class="portfolio-heading">
							<h3>Сервисы</h3>
						</div>
						<ul>
							<li>Геймерам</li>
							<li>Киноманам</li>
							<li>Меломанам</li>
						</ul>
					</div>
				</a>
			</div>
		</div>
	</div>
	<div class="container1">
	<img src="https://www.cmswire.com/-/media/925d0422a23a4a7e98ff806c3dcbdfe0.ashx?mw=0&mh=0" width="97%">
	<table id="t1" class="table1">
		<caption>Тарифы и их характеристика</caption>
		<tr>
			<th>№ п/п</th>
			<th>Акционный</th>
			<th>Абонентская плата в месяц</th>
			<th>Количество минут</th>
			<th>Количество гигабайт</th>
			<th>Стоимость тарифа</th>
		</tr>
		<tr>
			<td>1.</td>
			<td>Нет</td>
			<td>560</td>
			<td>400</td>
			<td>60</td>
			<td>700</td>
		</tr>
		<tr>
			<td>2.</td>
			<td>Нет</td>
			<td>400</td>
			<td>500</td>
			<td>40</td>
			<td>650</td>
		</tr>
		<tr>
			<td>3.</td>
			<td>Да</td>
			<td>700</td>
			<td>500</td>
			<td>100</td>
			<td>700</td>
		</tr>
		<tr>
			<td>4.</td>
			<td>Нет</td>
			<td>450</td>
			<td>600</td>
			<td>20</td>
			<td>500</td>
		</tr>
		<tr>
			<td>5.</td>
			<td>Да</td>
			<td>300</td>
			<td>400</td>
			<td>160</td>
			<td>500</td>
		</tr>
		<tr>
			<td>6.</td>
			<td>Да</td>
			<td>600</td>
			<td>1000</td>
			<td>Безлемит</td>
			<td>1700</td>
		</tr>
		<tr>
			<td>7.</td>
			<td>Нет</td>
			<td>1000</td>
			<td>Безлемит</td>
			<td>Безлемит</td>
			<td>1700</td>
		</tr>
		<tr>
			<td>8.</td>
			<td>Да</td>
			<td>800</td>
			<td>400</td>
			<td>80</td>
			<td>560</td>
		</tr>
	</table>
	<img id="d1" src="https://elektrik-market.ru/assets/images/catalog/etm/telekommunikaczionnoe-oborudovanie-i-sks.jpg" width="97%">
	<table id="t2" class="table1">
		<caption>Оборудование</caption>
		<tr>
			<th>№ п/п</th>
			<th>Тип Оборудования</th>
			<th>Название оборудования</th>
			<th>Установка</th>
			<th>Абонентская плата</th>
			<th>Стоимость</th>
		</tr>
		<tr>
			<td>1.</td>
			<td>Маршрутизатор</td>
			<td>D-Link 1200</td>
			<td>400</td>
			<td>600</td>
			<td>700</td>
		</tr>
		<tr>
			<td>2.</td>
			<td>Маршрутизатор</td>
			<td>D-link 1000</td>
			<td>500</td>
			<td>400</td>
			<td>650</td>
		</tr>
		<tr>
			<td>3.</td>
			<td>Спутниковая тарелка</td>
			<td>Satellite Dish rk900</td>
			<td>2400</td>
			<td>300</td>
			<td>700</td>
		</tr>
		<tr>
			<td>4.</td>
			<td>Патч-корд</td>
			<td>Patch-kord m20</td>
			<td>Не требуется</td>
			<td>-</td>
			<td>500</td>
		</tr>
		<tr>
			<td>5.</td>
			<td>Роутер</td>
			<td>Huawei 100m</td>
			<td>Бесплатно</td>
			<td>160</td>
			<td>500</td>
		</tr>
		<tr>
			<td>6.</td>
			<td>Облачное хранилище</td>
			<td>Western-Digital 6TB</td>
			<td>Не требуется</td>
			<td>-</td>
			<td>1700</td>
		</tr>
		<tr>
			<td>7.</td>
			<td>Спутниковая тарелка</td>
			<td>Satellite Dish rk800</td>
			<td>2000</td>
			<td>500</td>
			<td>1700</td>
		</tr>
		<tr>
			<td>8.</td>
			<td>ТВ-Приставка</td>
			<td>Hiaomi s20</td>
			<td>Не требуется</td>
			<td>80</td>
			<td>560</td>
		</tr>
	</table>
	<img src="https://etimg.etb2bimg.com/photo/92739779.cms" width="97%">
	<table id="t3" class="table1">
		<caption>Сервисы</caption>
		<tr>
			<th>№ п/п</th>
			<th>Тип сервиса</th>
			<th>Название сервиса</th>
			<th>Абонентская плата</th>

		</tr>
		<tr>
			<td>1.</td>
			<td>Игровой</td>
			<td>Nvidia</td>
			<td>400</td>
		</tr>
		<tr>
			<td>2.</td>
			<td>Игровой</td>
			<td>Gforce</td>
			<td>500</td>
		</tr>
		<tr>
			<td>3.</td>
			<td>Музыкальный</td>
			<td>Spotify</td>
			<td>80</td>
		</tr>
		<tr>
			<td>4.</td>
			<td>Кино</td>
			<td>Netflix</td>
			<td>250</td>
		</tr>
		<tr>
			<td>5.</td>
			<td>IVI</td>
			<td>Huawei 100m</td>
			<td>230</td>
		</tr>
		<tr>
			<td>6.</td>
			<td>Игровой</td>
			<td>Western</td>
			<td>600</td>
		</tr>
		<tr>
			<td>7.</td>
			<td>Музыкальный</td>
			<td>Yandex Music</td>
			<td>200</td>
		</tr>
		<tr>
			<td>8.</td>
			<td>Игровой</td>
			<td>GameRock</td>
			<td>400</td>
		</tr>
	</table>
</div>
<div class="bubble"></div>
<div class="bubble1"></div>
<script src="script.js"></script>
<script src="script1.js"></script>


</div>
