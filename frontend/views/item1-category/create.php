<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\Models\item1Category */

$this->title = 'Create Item1 Category';
$this->params['breadcrumbs'][] = ['label' => 'Item1 Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="item1-category-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
