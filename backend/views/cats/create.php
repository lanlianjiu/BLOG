<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\CatsModel */
$this->params['breadcrumbs'][] = ['label' => '创建分类', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cats-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
