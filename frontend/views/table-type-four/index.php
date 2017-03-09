<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\TableTypeFourSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Table Type Fours';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="table-type-four-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Table Type Four', ['create'], ['class' => 'btn btn-success']) ?>
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
