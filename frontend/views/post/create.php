<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
$this->title = '创建';
// $this->params['breadcrumbs'][] = ['label' => '文章','url' => ['post/index']];
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col-lg-9" style="background-color: rgba(38, 43, 54, 0.9);border-radius:4px;">
        <div panel-title box-title>
            <span style="color:#FFF;">创建文章</span>
        </div>
        <div class="panel-body">
            <?php $form = ActiveForm::begin() ?>
            <div style="color:#FFF;">
                <?= $form->field($model,'title')->textinput(['maxlength'=>true])?>
            </div>
            <div style="color:#FFF;">
                <?= $form->field($model,'cat_id')->dropDownList($cat)?>
            </div>
            <div style="color:#FFF;">
                <?= $form->field($model,'label_img')->widget('common\widgets\file_upload\FileUpload',['config'=>[]])?>
            </div>
            <div style="color:#FFF;">
                <?= $form->field($model,'content')->widget('common\widgets\ueditor\Ueditor',['options'=>['initialFrameHeight'=>400]])?>
            </div>
            <div class="tags-label">
                <?= $form->field($model,'tags')->widget('common\widgets\tags\TagWidget')?>
            </div>
            <div class="from-group paenl-body">
                <?= Html::submitButton("发布",['class'=>'btn btn-block btn-success send-btn'])?>
            </div>
            <?php $form = ActiveForm::end() ?>
        </div>
    </div>
    <div class="col-lg-3" >
        <div class="panel-title box-title" style="background-color: rgba(38, 43, 54, 0.9);border-radius:4px;padding-left:10px;">
            <span  style="color:#FFF;">注意事项</span>
            <div class="panel-body" style="color:#FFF;height:100%">
                <p>(1)标题鲜明（做个有态度的标题党）</p>
                <p>(2)封面图符合主题</p>
                <p>(3)内容以故事为主（这年头内容大爆炸，用户注意力明显不够用，靠故事吸引顾客不失为好办法）</p>
                <p>(4)不得发表有关违法、反动、色情、暴力、以及血腥等违反和谐社会的内容与图片</p>
            </div>
        </div>
    </div>
</div>