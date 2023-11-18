<?php
<?php
use yii\helpers\Html;
$this->title = 'Корзина';
?>
 
<h1><?= Html::encode($this->title) ?></h1>
 
<table class="table">
    <tr>
        <th>Наименование</th>
        <th>Количество</th>
        <th>Цена за единицу</th>
        <th>Стоимость</th>
        <th></th>
    </tr>
    <?php foreach($items as $item): ?>
    <tr>
        <td><?= Html::encode($item['name']) ?></td>
        <td><?= $item['quantity'] ?></td>
        <td><?= $item['price'] ?></td>
        <td><?= $item['quantity'] * $item['price'] ?></td>
        <td><?= Html::a('Удалить', ['cart/remove', 'id' => $item['id']], [
            'class' => 'btn btn-danger btn-xs',
            'data' => ['confirm' => 'Вы уверены, что хотите удалить этот товар из корзины?'],
        ]) ?></td>
    </tr>
    <?php endforeach ?>
    <tr>
        <td colspan="3"><strong>Общая стоимость:</strong></td>
        <td><strong><?= $total ?></strong></td>
        <td></td>
    </tr>
</table>
 
<p><?= Html::a('Продолжить покупки', ['catalog/index'], ['class' => 'btn btn-primary']) ?></p>
<p><?= Html::a('Оформить заказ', ['order/create'], ['class' => 'btn btn-success']) ?></p>

