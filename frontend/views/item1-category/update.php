<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\Models\item1Category */

$this->title = 'Update Item1 Category: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Item1 Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="item1-category-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
