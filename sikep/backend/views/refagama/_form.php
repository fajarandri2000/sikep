<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Refagama */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="refagama-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'NamaAgama')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
