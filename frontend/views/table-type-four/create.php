<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\TableTypeFour */

$this->title = 'Create Table Type Four';
$this->params['breadcrumbs'][] = ['label' => 'Table Type Fours', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="table-type-four-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
