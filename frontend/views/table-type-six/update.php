<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\TableTypeSix */

$this->title = 'Update Table Type Six: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Table Type Sixes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="table-type-six-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>