<?php 
use yii\helpers\Url;
?>
<div class="panel panel-title box-title" style="background-color:#222;">
    <span><strong style="color:#FFF;">只言片语</strong></span>
    <span class="pull-right"><a href="#" class="font-12">更多》</a></span>
</div>
<div  class="panel-body">
    <form id="w0" action="/" method="post">
        <div class="form-group input-group field-feed-content required">
            <textarea style="border-color:#222;" id="feed-content" class="form-control field-feed-content" name="content"></textarea>
            <span class="input-group-btn">
                <button type="button" class="btn btn-primary j-feed" data-url="<?=Url::to(['site/add-feed'])?>">发布</button>
            </span>
        </div>
    </form>

    <?php if(!empty($data['feed'])):?>
        <div class="panel-conect" style="height:160px;background-color: rgba(38, 43, 54, 0.9);overflow-y: auto;border:1px solid #222;border-radius:4px;">
            <ul style="text-align:center;overflow-y: auto;" class="media-list media-feed feed-index ps-container ps-active-y">
                <?php foreach($data['feed'] as $list):?>
                    <li class="media" style="color:#FFF;">
                        <div class="media-left">
                            <a href="#" rel="author" data-original-title="" title="">
                                <img width="30px" src="<?=$list['user']['avator'];?>"/>
                            </a>
                        </div>
                        <div class="media-body" style="font-size: 12px;">
                        <div class="media-content" >
                            <?=$list['user']['username']?>说: <?=$list['content']?>
                        </div>

                            <div class="media-action">
                                <?=date('Y-m-d h:i:s',$list['created_at'])?>
                            </div>
                        </div>
                    </li>
                <?php endforeach;?>
            </ul>
        </div>
    <?php endif;?>
</div>