<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\TableTypeFive */

$this->title = 'Update Table Type Five: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Table Type Fives', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="table-type-five-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
