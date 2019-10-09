<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\Models\item1CategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Item1 Categories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="item1-category-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Item1 Category', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'jenis',
            'descrisi',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
