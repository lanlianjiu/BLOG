<?php
use yii\helpers\Url;
use yii\widgets\LinkPager;
?>
<div class="panel conect-img">
    <div class="panel panel-title box-title" style="background-color:#222;">
        <span style="color:#FFF;" class="glyphicon glyphicon-align-justify"></span>
        <span style="color:#FFF;"><?=$data['title']?></span>
        <?php if($this->context->more):?>
        <span class="pull-right"><a href="<?=$data['more']?>" class="font-12">更多》</a></span>
        <?php endif;?>
    </div>
    <div class="new-list">
    <?php foreach ($data['body'] as $list):?>
        <div class="panel-body border-bottom">      
            <div class=" panel-body row">
                <div class="col-md-3 label-img-size img-head">
                    <a href="#" class="post-label">
                        <img style="border-radius:50%;border:1px solid blue;" height="100" width="100" src="<?=($list['label_img']?\Yii::$app->params['upload_url'].$list['label_img']:\Yii::$app->params['default_label_img'])?>" alt="<?=$list['title']?>">
                    </a>
                </div>
                <div class="col-md-9 btn-group">
                    <h2><span class="glyphicon glyphicon-th" style="padding-right:5px;"></span><a href="<?=Url::to(['post/view','id'=>$list['id']])?>"><?=$list['title']?></a></h2>
                    <span class="post-tags">
                        <span class="label-box">
                            <span class="glyphicon glyphicon-user"></span>&nbsp;<a href="<?=Url::to(['member/index','id'=>$list['user_id']])?>"><?=$list['user_name']?></a>&nbsp;
                        </span>
                        <span class="label-box">
                            <span class="glyphicon glyphicon-time"></span>&nbsp;<?=date('Y-m-d',$list['created_at'])?>&nbsp;
                        </span>
                        <span class="label-box">
                            <span class="glyphicon glyphicon-eye-open"></span>&nbsp;<?=isset($list['extend']['browser'])?$list['extend']['browser']:0?>&nbsp;
                        </span>
                        <span class="label-box">
                        <span class="glyphicon glyphicon-comment"></span>&nbsp;<a href="<?=Url::to(['post/view','id'=>$list['id']])?>"><?=isset($list['extend']['comment'])?$list['extend']['comment']:0?>&nbsp;</a>
                        </span>
                        <span class="tags">
                            <?php if(!empty($list['tags'])):?>
                            <span class="fa fa-tags"></span>
                                <?php foreach ($list['tags'] as $lt):?>
                                <a href="#"><?=$lt?></a>，
                                <?php endforeach;?>
                            <?php endif;?>
                        </span>
                    </span>
                    <div class="panel-body">
                        <textarea readOnly="true" class="post-content form-control"><?=$list['summary']?></textarea>
                    </div>
                    <a href="<?=Url::to(['post/view','id'=>$list['id']])?>"><button class="btn btn-primary no-radius btn-sm pull-right">阅读全文</button></a>
                </div>
            </div>
           
        </div>
        <?php endforeach;?>            
    </div>
    <?php if($this->context->page):?>
    <div class="page"><?=LinkPager::widget(['pagination' => $data['page']]);?></div>
    <?php endif;?>
</div>