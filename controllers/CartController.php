<?php>
// Контроллер CartController
namespace app\controllers;
 
use Yii;
use yii\web\Controller;
use app\models\Cart;
 
class CartController extends Controller
{
    // Добавление товара в корзину
    public function actionAddToCart()
    {
        $user_id = Yii::$app->user->id;
        $product_id = Yii::$app->request->post('product_id');
        $quantity = Yii::$app->request->post('quantity');
         
        $cart = new Cart();
        $result = $cart->addToCart($user_id, $product_id, $quantity);
         
        if ($result) {
            return 'Товар успешно добавлен в корзину';
        }
        return 'Ошибка при добавлении товара в корзину';
    }
     
    // Удаление товара из корзины
    public function actionRemoveFromCart()
    {
        $user_id = Yii::$app->user->id;
        $product_id = Yii::$app->request->post('product_id');
         
        $cart = new Cart();
        $result = $cart->removeFromCart($user_id, $product_id);
         
        if ($result) {
            return 'Товар успешно удален из корзины';
        }
        return 'Ошибка при удалении товара из корзины';
    }
     
    // Обновление количества товаров в корзине
    public function actionUpdateQuantity()
    {
        $user_id = Yii::$app->user->id;
        $product_id = Yii::$app->request->post('product_id');
        $quantity = Yii::$app->request->post('quantity');
         
        $cart = new Cart();
        $result = $cart->updateQuantity($user_id, $product_id, $quantity);
         
        if ($result) {
            return 'Количество товаров успешно обновлено';
        }
        return 'Ошибка при обновлении количества товаров';
    }