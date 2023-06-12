<?php

/** @var yii\web\View  */
/** @var string $content */

?>
<?php

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="en">
<head>
	
    <meta charset="UTF-8">
    <link rel='stylesheet' href='stil.css'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
</head>
<body>
<?php $this->beginBody() ?>
    <div class='container'>
        <div class='header-line'>
            <div class='header-logo'>
                <img src="logo.png" alt="">
            </div>

            <div class='nav'>
   <a href="<?= Yii::$app->homeUrl ?>#pizza" class="nav-item">Пицца</a>
    <a href="<?= Yii::$app->homeUrl ?>#drink" class="nav-item">Напитки</a>
   <a class='nav-item' href="<?= Yii::$app->urlManager->createUrl(['site/onas']) ?>">О нас</a>
    <a class='nav-item' href="#">Контакты</a>
    <div class='cart'>
        <a href="<?= Yii::$app->urlManager->createUrl(['site/cart']) ?>" class="num">Корзина </a>
        <?php if(isset($_SESSION['cart'])) { ?>
            <a href='cart.php' class='num'><?php echo array_sum(array_column($_SESSION['cart'], 'quantity')); ?></a>
            <img class='cart-img' src='cart.png' alt=''>
        <?php } ?>
    </div>
</div>
            

        </div>
    </div>

 <?= $content ?>
 <?php $this->endBody() ?>
 </body>
</html>
 <?php $this->endPage() ?>