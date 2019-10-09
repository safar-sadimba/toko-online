<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\matakuliah */

$this->title = 'Update Matakuliah: ' . $model->id_matakulia;
$this->params['breadcrumbs'][] = ['label' => 'Matakuliahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_matakulia, 'url' => ['view', 'id' => $model->id_matakulia]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="matakuliah-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
