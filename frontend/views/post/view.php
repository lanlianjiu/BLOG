<?php
    $this->title = $data['title'];
    // $this->params['breadcrumbs'][] = ['label'=>'文章','url'=>['post/index']];
    // $this->params['breadcrumbs'][] = $this->title;
?>

<div class="row">
    <div class="col-lg-9" style="background-color: rgba(38, 43, 54, 0.9);border-radius:4px;color:#FFF;">
        <div class="page-title panel-body">
            <h1><?=$data['title']?></h1>
            <span>作者：<?=$data['user_name']?>&nbsp;</span>
            <span>发布时间: <?=date('Y-m-d',$data['created_at'])?>&nbsp;</span>
            <span>浏览：<?=$data['extend']['browser']?:0 ?>次</span>
        </div>
        <div class="page-content panel-body" style="background-color:#FFF;border-radius:4px;">
            <div  style="min-height:300px;color:#000;"> <?=$data['content']?></div>
        </div>
       
        <div class="page-tag panel-body">
        标签：
            <?php foreach ($data['tags'] as $tag):?>
            <span><a href="#"><?=$tag?></a></span>
            <?php endforeach;?>
        </div>
    </div>
    <div class="col-lg-3">
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