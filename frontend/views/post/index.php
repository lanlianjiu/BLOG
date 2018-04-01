<?php
   
   use yii\base\Widget;
   use frontend\widgets\post\PostWidget;
   use frontend\widgets\hot\HotWidget;
   use frontend\widgets\tag\TagWidget;
?>

<div class="row">
    <div class="col-lg-9">
        <?=PostWidget::widget()?>
    </div>
    <div class="col-md-3 panel history-img">
        <?=HotWidget::widget()?>
    </div>
    <div class="col-md-3 panel hot-img" style="border-color:#222;">
       
        <?=TagWidget::widget()?>
    </div>
</div>