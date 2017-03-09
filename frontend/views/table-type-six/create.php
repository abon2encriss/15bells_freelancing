<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\TableTypeSix */

$this->title = 'Create Table Type Six';
$this->params['breadcrumbs'][] = ['label' => 'Table Type Sixes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="table-type-six-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
