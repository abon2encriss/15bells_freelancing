<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\TableTypeThree */

$this->title = 'Create Table Type Three';
$this->params['breadcrumbs'][] = ['label' => 'Table Type Threes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="table-type-three-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
