<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\Models\item1 */

$this->title = 'Create Item1';
$this->params['breadcrumbs'][] = ['label' => 'Item1s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="item1-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
