<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var app\models\ContactForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;
use yii\captcha\Captcha;

$this->title = 'Бронирование';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>

    <?php if (isset($_REQUEST['idorder'])) : ?>

        <div class="alert alert-success">
            Thank you for contacting us. We will respond to you as soon as possible.
        </div>

        <p>
            Note that if you turn on the Yii debugger, you should be able
            to view the mail message on the mail panel of the debugger.
            <?php if (Yii::$app->mailer->useFileTransport): ?>
                Because the application is in development mode, the email is not sent but saved as
                a file under <code><?= Yii::getAlias(Yii::$app->mailer->fileTransportPath) ?></code>.
                Please configure the <code>useFileTransport</code> property of the <code>mail</code>
                application component to be false to enable email sending.
            <?php endif; ?>
        </p>

    <?php else: ?>

        <p>
            Если у вас есть деловые запросы или другие вопросы, пожалуйста, заполните следующую форму, чтобы связаться с нами. Благодарю вас.
        </p>

        <div class="row">
            <div class="col-lg-5">

               <div class="order-form">

						<?php $form = ActiveForm::begin(); ?>

						<?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

						<?= $form->field($model, 'enail')->textInput(['maxlength' => true]) ?>

						<?= $form->field($model, 'subject')->textInput(['maxlength' => true]) ?>

						<?= $form->field($model, 'body')->textInput(['maxlength' => true]) ?>

						<div class="form-group">
							<?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
						</div>

						<?php ActiveForm::end(); ?>

					</div>

            </div>
        </div>

    <?php endif; ?>
</div>
