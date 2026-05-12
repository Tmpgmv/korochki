<?php

use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\App $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="app-form">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'user_id')->textInput(["type" => "hidden", "value" => Yii::$app->user->identity->id])->label(false) ?>

    <?= $form->field($model, 'course_id')->dropDownList($courses)  ?>

    <?= $form->field($model, 'start')->textInput(["type"=>"date", "min"=> date("Y-m-d")]) ?>

    <?= $form->field($model, 'pament_option')->dropDownList($paymentOptions) ?>

    <?= $form->field($model, 'status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'feedback')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Отправить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
