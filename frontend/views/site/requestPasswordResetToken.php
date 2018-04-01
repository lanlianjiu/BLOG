<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\PasswordResetRequestForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = '重置密码';

?>
<div class="site-request-password-reset panel container" style="background-color: rgba(38, 43, 54, 0.9);border-radius:4px;width:400px;">
    <h1 style="color:#FFF;text-align:center;"><?= Html::encode($this->title) ?></h1>

    <p style="color:#FFF;">重置后的密码将会发送到你填写的邮箱中</p>

    <div class="row">
        <div class="col-lg-12">
            <?php $form = ActiveForm::begin(['id' => 'request-password-reset-form']); ?>
                <div style="color:#FFF;">
                    <?= $form->field($model, 'email')->textInput(['autofocus' => true]) ?>
                </div>
                <div class="form-group">
                    <?= Html::submitButton('发送', ['class' => 'btn btn-block btn-primary']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
