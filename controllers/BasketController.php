<?php
namespace app\controllers;
use Yii;
use yii\web\Controller;
use app\models\Cart; // подключаем модель корзины
 
class CartController extends Controller
{
    public function actionIndex()
    {
        $cart = new Cart(); // создаем экземпляр модели корзины
        $items = $cart->getItems(); // получаем товары, находящиеся в корзине
        $total = $cart->getTotal(); // получаем общую стоимость покупки
        return $this->render('index', [
            'items' => $items,
            'total' => $total,
        ]);
    }
 
    public function actionAdd($id)
    {
        $cart = new Cart();
        $cart->add($id); // добавляем товар в корзину
        return $this->redirect(['cart/index']); // перенаправляем пользователя на страницу корзины
    }
 
    public function actionRemove($id)
    {
        $cart = new Cart();
        $cart->remove($id); // удаляем товар из корзины
        return $this->redirect(['cart/index']); // перенаправляем пользователя на страницу корзины
    }
 
    public function actionUpdate($id, $quantity)
    {
        $cart = new Cart();
        $cart->update($id, $quantity); // изменяем количество товара в корзине
        return $this->redirect(['cart/index']); // перенаправляем пользователя на страницу корзины
    }
}
public function actionBasketd()
    {
        return $this->render('basket');
    }