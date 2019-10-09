<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\Models\castemer */

$this->title = 'Create Castemer';
$this->params['breadcrumbs'][] = ['label' => 'Castemers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="castemer-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
