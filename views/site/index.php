<?php

/** @var yii\web\View $this */

$this->title = 'My Yii Application';
?>
   <div class="section-title" id="pizza">
    <h2>Пицца</h2>
</div>

<div class="containerpizza">
    <?php
        $pizzas = array(
            array('id' => 1, 'title' => 'Маргарита', 'description' => 'Сыр, помидоры, базилик', 'price' => 500, 'image' => 'pizza1.png'),
            array('id' => 2, 'title' => 'Пепперони', 'description' => 'Сыр, пепперони, помидоры', 'price' => 600, 'image' => 'pizza2.png'),
            array('id' => 3, 'title' => 'Ветчина и грибы', 'description' => 'Сыр, ветчина, грибы', 'price' => 700, 'image' => 'pizza3.png'),
            array('id' => 4, 'title' => 'Четыре сыра', 'description' => 'Моцарелла, дор блю, пармезан, чеддер', 'price' => 800, 'image' => 'pizza2.png'),
        );

        foreach ($pizzas as $pizza) {
    echo "<div class='pizza-container'>";
    echo "<img class='pizza-image' src='images/{$pizza['image']}' alt=''>";
    echo "<div class='pizza-title'>{$pizza['title']}</div>";
    echo "<div class='pizza-description'>{$pizza['description']}</div>";
    echo "<div class='pizza-price'>{$pizza['price']} руб.</div>";
    echo "<a href='add_to_cart.php?id={$pizza['id']}' class='button'>В корзину</a>";
    echo "</div>";
}
?>
</div>

<div class="section-title"id = "drink">
    <h2>Напитки</h2>
</div>

<div class="containerdrink">
    <?php
        $drinks = array(
            array('id' => 1, 'title' => 'Добрый Кола',  'price' => 150, 'image' => 'drink1.png'),
            array('id' => 2, 'title' => 'Добрый Апельсин', 'price' => 150, 'image' => 'drink2.png'),
            array('id' => 3, 'title' => 'Добрый Лимон-Лайм',  'price' => 150, 'image' => 'drink3.png'),
            array('id' => 4, 'title' => 'Добрый Манго-Маракуйя', 'price' => 100, 'image' => 'drink4.png'),
        );

        foreach ($drinks as $drink) {
            echo "<div class='drink-container'>";
            echo "<img class='drink-image' src='images/{$drink['image']}' alt=''>";
            echo "<div class='drink-title'>{$drink['title']}</div>";
            echo "<div class='drink-description-price-container'>";
            echo "<div class='drink-price'>{$drink['price']} руб.</div>";
            echo "<a href='add_to_cart.php?id={$drink['id']}' class='button'>В корзину</a>";
            echo "</div>";
           
            echo "</div>";
        }
    ?>
	
</div>

</body>
</html>