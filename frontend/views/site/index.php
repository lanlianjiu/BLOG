<?php
use yii\base\Widget;
use frontend\widgets\banner\BannerWidget;
use frontend\widgets\chat\ChatWidget;
use frontend\widgets\post\PostWidget;
use frontend\widgets\hot\HotWidget;
use frontend\widgets\tag\TagWidget;
/* @var $this yii\web\View */

$this->title = '博客-首页';

?>
<div class="row">
    <div class="col-md-9">
        <?=BannerWidget::widget()?>
    </div>
    <div class="col-md-3 panel chat-img" style="height:302px;border-color:#222;padding:0px;">
        <?=ChatWidget::widget()?>
    </div>
    <div class="col-md-9">
        <?=PostWidget::widget()?>
    </div>
    <div class="col-md-3 panel history-img">
        <?=HotWidget::widget()?>
    </div>
    <div class="col-md-3 panel hot-img" style="border-color:#222;">
       
        <?=TagWidget::widget()?>
    </div>
</div>