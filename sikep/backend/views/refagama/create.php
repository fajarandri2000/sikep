<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Refagama */

$this->title = 'Referensi Agama';
$this->params['breadcrumbs'][] = ['label' => 'Referensi Agama', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="refagama-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
