<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = '登录';

?>
<div class="site-login panel weblogin-img container">
    <h1 style="text-align:center;color:#FFF;"><?= Html::encode($this->title) ?></h1>

    <div class="row">
        <div class="col-lg-12" >
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
                <div style="color:#FFF;" class="">
                    <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>
                </div>
                <div style="color:#FFF;" class="">
                    <?= $form->field($model, 'password')->passwordInput() ?>
                </div>

                <div class="form-inline">
                <div style="color:#FFF;" class="form-group">
                    <?= $form->field($model, 'rememberMe')->checkbox() ?>
                </div>
                <div class="form-group" style="margin-left:10px;margin-top:-10px;">
                     <?= Html::a('重置密码', ['site/request-password-reset']) ?>
                </div>
                </div>
                <div class="form-group" style="text-align:center;">
                    <?= Html::submitButton('登录', ['class' => 'btn btn-block btn-primary', 'name' => 'login-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
