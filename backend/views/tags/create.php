<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\TagsModel */

$this->title = '创建标签';
$this->params['breadcrumbs'][] = ['label' => '标签管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tags-model-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
