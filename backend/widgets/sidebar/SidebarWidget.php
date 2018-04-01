<?php
namespace backend\widgets\sidebar;

/**
 * 后台siderbar插件
 */
use Yii;
use yii\base\Widget;
use yii\widgets\Menu;

class SidebarWidget extends Menu
{    
    public $submenuTemplate = "\n<ul class=\"children\">\n{items}\n</ul>\n";
    
    public $options = ['class'=>'nav nav-pills nav-stacked nav-quirk'];
    
    public $activateParents = true;
    
    public function init()
    {
        $this->items = [
            ['label' =>'<i class="fa fa-dashboard"></i><span>仪表盘</span>','url'=>['site/index']],
            ['label' =>'<a href=""><i class="fa fa-th-list"></i><span>内容管理</span></a>','options'=>['class'=>'nav-parent'],'items'=>[
                    ['label'=>'文章管理','url'=>['post/index'],'items'=>[
                        ['label'=>'创建文章','url'=>['post/create'],'visible'=>false],
                        ['label'=>'更新文章','url'=>['post/update'],'visible'=>false],
                        ]                       
                    ],
                    ['label'=>'分类管理','url'=>['cats/index'],'items'=>[
                        ['label'=>'创建文章','url'=>['cats/create'],'visible'=>false],
                        ['label'=>'更新文章','url'=>['cats/update'],'visible'=>false],
                        ]                        
                    ],
                    ['label'=>'标签管理','url'=>['tags/index']],
                ]
            ],
            ['label' =>'<a href=""><i class="fa fa-user"></i><span>会员管理</span></a>','options'=>['class'=>'nav-parent'],'items'=>[
                    ['label'=>'会员信息','url'=>['user/index']],
                ]
            ],
        ];
    }
}