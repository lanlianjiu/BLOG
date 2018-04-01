<?php
use yii\helpers\Url;
?>
<?php if(!empty($data)):?>
<div>
    <div class="panel-title box-title">
        <span><strong style="color:#FFF;"><?=$data['title']?></strong></span>
    </div>
    <div class="panel-body hot-body">
        <?php foreach ($data['body'] as $list):?>
        <div class="clearfix hot-list">
            <div class="pull-left media-left">
                <a href="#">浏览(<em><?=$list['browser']?></em>)次</a>
            </div>
            <div class="media-right">
                <a href="<?=Url::to(['post/view','id'=>$list['id']])?>"><?=$list['title']?></a>
            </div>
        </div>
        <?php endforeach;?>
    </div>
</div>
<?php endif;?>
