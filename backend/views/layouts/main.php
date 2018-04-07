<!DOCTYPE HTML>
<html ng-app="adminIndex" ng-controller="controller">

<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="Bookmark" href="/favicon.ico">
    <link rel="Shortcut Icon" href="/favicon.ico" />
    <!--[if lt IE 9]>
<script type="text/javascript" src="lib/html5shiv.js"></script>
<script type="text/javascript" src="lib/respond.min.js"></script>
<![endif]-->
    <link rel="stylesheet" type="text/css" href="static/h-ui/css/H-ui.min.css" />
    <link rel="stylesheet" type="text/css" href="static/h-ui.admin/css/H-ui.admin.css" />
    <link rel="stylesheet" type="text/css" href="lib/Hui-iconfont/1.0.8/iconfont.css" />
    <link rel="stylesheet" type="text/css" href="static/h-ui.admin/skin/default/skin.css" id="skin" />
    <link rel="stylesheet" type="text/css" href="static/h-ui.admin/css/style.css" />
    <!--[if IE 6]>
<script type="text/javascript" src="lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
    <title>BLOG后台登录系统</title>
</head>

<body>
    <header class="navbar-wrapper">
        <div class="navbar navbar-fixed-top">
            <div class="container-fluid cl">
                <a class="logo navbar-logo f-l mr-10 hidden-xs" href="#">BLOG</a>
                <a aria-hidden="false" class="nav-toggle Hui-iconfont visible-xs" href="javascript:;">&#xe667;</a>
                <nav class="nav navbar-nav">
                    <ul class="cl">
                        <li class="dropDown dropDown_hover">
                            <a href="javascript:;" class="dropDown_A">
                                <i class="Hui-iconfont">&#xe600;</i> 新增
                                <i class="Hui-iconfont">&#xe6d5;</i>
                            </a>
                            <ul class="dropDown-menu menu radius box-shadow">
                                <li>
                                    <a href="javascript:;" onclick="article_add('添加资讯','article-add.html')">
                                        <i class="Hui-iconfont">&#xe616;</i> 资讯</a>
                                </li>
                                <li>
                                    <a href="javascript:;" onclick="picture_add('添加资讯','picture-add.html')">
                                        <i class="Hui-iconfont">&#xe613;</i> 图片</a>
                                </li>
                                <li>
                                    <a href="javascript:;" onclick="product_add('添加资讯','product-add.html')">
                                        <i class="Hui-iconfont">&#xe620;</i> 产品</a>
                                </li>
                                <li>
                                    <a href="javascript:;" onclick="member_add('添加用户','member-add.html','','510')">
                                        <i class="Hui-iconfont">&#xe60d;</i> 用户</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <nav id="Hui-userbar" class="nav navbar-nav navbar-userbar hidden-xs">
                    <ul class="cl">
                        <li>用户角色</li>
                        <li class="dropDown dropDown_hover">
                            <a href="#" class="dropDown_A" ng-bind="userInfo.username">
                                <i class="Hui-iconfont">&#xe6d5;</i>
                            </a>
                            <ul class="dropDown-menu menu radius box-shadow">
                                <li>
                                    <a href="javascript:;" onClick="myselfinfo()">个人信息</a>
                                </li>
                                <li>
                                    <a href="#" ng-click="loginOut()">退出</a>
                                </li>
                            </ul>
                        </li>
                        <li id="Hui-msg">
                            <a href="#" title="消息">
                                <span class="badge badge-danger">1</span>
                                <i class="Hui-iconfont" style="font-size:18px">&#xe68a;</i>
                            </a>
                        </li>
                        <li id="Hui-skin" class="dropDown right dropDown_hover">
                            <a href="javascript:;" class="dropDown_A" title="换肤">
                                <i class="Hui-iconfont" style="font-size:18px">&#xe62a;</i>
                            </a>
                            <ul class="dropDown-menu menu radius box-shadow">
                                <li>
                                    <a href="javascript:;" data-val="default" title="默认（黑色）">默认（黑色）</a>
                                </li>
                                <li>
                                    <a href="javascript:;" data-val="blue" title="蓝色">蓝色</a>
                                </li>
                                <li>
                                    <a href="javascript:;" data-val="green" title="绿色">绿色</a>
                                </li>
                                <li>
                                    <a href="javascript:;" data-val="red" title="红色">红色</a>
                                </li>
                                <li>
                                    <a href="javascript:;" data-val="yellow" title="黄色">黄色</a>
                                </li>
                                <li>
                                    <a href="javascript:;" data-val="orange" title="橙色">橙色</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <aside class="Hui-aside">
        <div class="menu_dropdown bk_2">
            <dl id="menu-actice">
                <dt>
                    <i class="Hui-iconfont">&#xe616;</i>
                    <span>文章管理</span>
                    <i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i>
                </dt>
                <dd>
                    <ul>
                        <li>
                            <a data-href="../views/post/index.php" data-title="文章列表" href="javascript:void(0)">文章列表</a>
                        </li>
                    </ul>
                </dd>
            </dl>
            <dl id="menu-carycter">
                <dt>
                    <i class="Hui-iconfont">&#xe620;</i>
                    <span>分类管理</span>
                    <i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i>
                </dt>
                <dd>
                    <ul>
                        <li>
                            <a data-href="catsList.html" data-title="分类列表" href="javascript:void(0)">分类列表</a>
                        </li>
                    </ul>
                </dd>
            </dl>
            <dl id="menu-carycter">
                <dt>
                    <i class="Hui-iconfont">&#xe62e;
                    </i> <span>标签管理</span>
                    <i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i>
                </dt>
                <dd>
                    <ul>
                        <li>
                            <a data-href="tagsList.html" data-title="标签列表" href="javascript:void(0)">标签列表</a>
                        </li>
                    </ul>
                </dd>
            </dl>
            <dl id="menu-carycter">
                <dt>
                    <i class="Hui-iconfont">&#xe60d;</i>
                    <span>会员管理</span>
                    <i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i>
                </dt>
                <dd>
                    <ul>
                        <li>
                            <a data-href="userList.html" data-title="分类列表" href="javascript:void(0)">会员列表</a>
                        </li>
                    </ul>
                </dd>
            </dl>
        </div>
    </aside>
    <div class="dislpayArrow hidden-xs">
        <a class="pngfix" href="javascript:void(0);" onClick="displaynavbar(this)"></a>
    </div>
    <section class="Hui-article-box">
        <div id="Hui-tabNav" class="Hui-tabNav hidden-xs">
            <div class="Hui-tabNav-wp">
                <ul id="min_title_list" class="acrossTab cl">
                    <li class="active">
                        <span title="首页" data-href="./main.html">首页</span>
                        <em></em>
                    </li>
                </ul>
            </div>
            <div class="Hui-tabNav-more btn-group">
                <a id="js-tabNav-prev" class="btn radius btn-default size-S" href="javascript:;">
                    <i class="Hui-iconfont">&#xe6d4;</i>
                </a>
                <a id="js-tabNav-next" class="btn radius btn-default size-S" href="javascript:;">
                    <i class="Hui-iconfont">&#xe6d7;</i>
                </a>
            </div>
        </div>
        <div id="iframe_box" class="Hui-article">
            <div class="show_iframe">
                <div style="display:none" class="loading"></div>
                <iframe scrolling="yes" frameborder="0" src="../views/layouts/tplHtml/main.html"></iframe>
            </div>
        </div>
    </section>

    <div class="contextMenu" id="Huiadminmenu">
        <ul>
            <li id="closethis">关闭当前 </li>
            <li id="closeall">关闭全部 </li>
        </ul>
    </div>
    <!--_footer 作为公共模版分离出去-->
    <script type="text/javascript" src="lib/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="lib/angular/angular-1.4.8.min.js"></script>
    <script type="text/javascript" src="lib/layer/2.4/layer.js"></script>
    <script type="text/javascript" src="static/h-ui/js/H-ui.min.js"></script>
    <script type="text/javascript" src="static/h-ui.admin/js/H-ui.admin.js"></script>
    <!--/_footer 作为公共模版分离出去-->

    <!--请在下方写此页面业务相关的脚本-->
    <script type="text/javascript" src="lib/jquery.contextmenu/jquery.contextmenu.r2.js"></script>
    <script src="js/iov.min.js"></script>
    <script src="../views/layouts/tplHtml/js/index.js"></script>
</body>

</html>