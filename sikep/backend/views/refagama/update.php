<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Refagama */

$this->title = 'Referensi Agama';
$this->params['breadcrumbs'][] = ['label' => 'Refagamas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idAgama, 'url' => ['view', 'id' => $model->idAgama]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="refagama-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
