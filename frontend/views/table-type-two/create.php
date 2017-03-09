<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\TableTypeTwo */

$this->title = 'Create Table Type Two';
$this->params['breadcrumbs'][] = ['label' => 'Table Type Twos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="table-type-two-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
