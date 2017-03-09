<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\TableTypeFive */

$this->title = 'Create Table Type Five';
$this->params['breadcrumbs'][] = ['label' => 'Table Type Fives', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="table-type-five-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
