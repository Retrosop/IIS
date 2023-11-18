<?php>
// Представление cart.php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
 
<?php $form = ActiveForm::begin(['id' => 'cart-form']); ?>
 
    <?= $form->field($model, 'product_id')->textInput(['autofocus' => true]) ?>
 
    <?= $form->field($model, 'quantity')->textInput() ?>
 
    <div class="form-group">
        <?= Html::submitButton('Добавить в корзину', ['class' => 'btn btn-primary', 'name' => 'cart-button']) ?>
    </div>
 
<?php ActiveForm::end(); ?>
 
<div id="cart-content">
    <?php // Вывод содержимого корзины ?>
</div>
 
<?php
$script = <<< JS
$(document).ready(function() {
    // Обработка AJAX-запроса на добавление товара в корзину
    $("#cart-form").on("beforeSubmit", function(event, jqXHR, settings) {
        var form = $(this);
        if (form.find(".has-error").length) {
            return false;
        }
        $.ajax({
            url: form.attr("action"),
            type: form.attr("method"),
            data: form.serialize(),
            success: function(response) {
                $("#cart-content").html(response);
                form.trigger("reset");
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log("AJAX error: " + textStatus + " - " + errorThrown);
            }
        });
        return false;
    });
     
    // Обработка AJAX-запроса на удаление товара из корзины
    $(document).on("click", ".remove-from-cart", function() {
        var product_id = $(this).data("product-id");
        $.ajax({
            url: "/cart/remove-from-cart",
            type: "post",
            data: {product_id: product_id},
            success: function(response) {
                $("#cart-content").html(response);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log("AJAX error: " + textStatus + " - " + errorThrown);
            }
        });
    });
     
    // Обработка AJAX-запроса на обновление количества товаров в корзине
    $(document).on("change keyup", ".update-quantity", function() {
        var product_id = $(this).data("product-id");
        var quantity = $(this).val();
        $.ajax({
            url: "/cart/update-quantity",
            type: "post",
            data: {product_id: product_id, quantity: quantity},
            success: function(response) {
                $("#cart-content").html(response);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log("AJAX error: " + textStatus + " - " + errorThrown);
            }
        });
    });
});
JS;
 
$this->registerJs($script);