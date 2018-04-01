<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = '注册';
?>
<div class="site-signup websign-img panel container">
    <h1 style="color:#FFF;text-align:center;"><?= Html::encode($this->title) ?></h1>

    <p style="color:#FFF;">请填写以下字段注册：</p>

    <div class="row">
        <div class="col-lg-12">
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
                <div style="color:#FFF;">
                    <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>
                </div>
                <div style="color:#FFF;">
                    <?= $form->field($model, 'email') ?>
                </div>
                <div style="color:#FFF;">
                    <?= $form->field($model, 'password')->passwordInput() ?>
                </div>
                <div style="color:#FFF;">
                    <?= $form->field($model, 'rePassword')->passwordInput() ?>
                </div>
                <div class="form-inline captcha" style="color:#FFF;">
                    <?= $form->field($model, 'verifyCode')->widget(Captcha::className())?>
                </div>
                <div class="form-group">
                    <?= Html::submitButton(Yii::t('common','Signup'), ['class' => 'btn btn-primary btn-block', 'name' => 'signup-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
