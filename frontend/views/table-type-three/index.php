<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\TableTypeThreeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Table Type Threes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="table-type-three-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Table Type Three', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'fname',
            'lname',
            'salary',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
