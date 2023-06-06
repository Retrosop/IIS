<?php

/** @var yii\web\View $this */

$this->title = 'Сборка Мебели';
?>
<style>
    .myimg {width: 15vw; height: 15vw};
    .col-lg-3 {margin-right: 50px !important};
</style>

<div class="site-index">

    <div class="jumbotron text-center bg-transparent">
        <h1 class="display-4">Обработка заказов на сборку мебели</h1>

        <p class="lead">СБОРКА МЕБЕЛИ ОТ 499 РУБ.</p>

        <p><a class="btn btn-lg btn-success" href="/web/site/contact">Заказать</a></p>
    </div>

    <div class="body-content">
        <div class="row">
		
		<?
		$con = new mysqli("localhost", "root", "", "baza", 3306);
		
		$result = $con->Query("SELECT * FROM `yii2_goods`");
		?>
		<? if($result):
			foreach($result as $row): ?>
				<div class="col-lg-3">
					<center>
						<h3><?=$row["good"]?></h3>
						<img class="myimg" src="<?=$row["image"]?>">
						<p><?=$row["desc"]?></p>
						<strong><?=$row["price"]?> руб.</strong>
						<p><a class="btn btn-outline-secondary" href="/web/site/contact">Заказать &raquo;</a></p>
					</center>
				</div>
			<? endforeach;
		endif; ?>
        </div>

    </div>
</div>