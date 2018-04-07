<!DOCTYPE HTML>
<html ng-app="postList" ng-controller="controller">

<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <!--[if lt IE 9]>
<script type="text/javascript" src="lib/html5shiv.js"></script>
<script type="text/javascript" src="lib/respond.min.js"></script>
<![endif]-->
    <link rel="stylesheet" type="text/css" href="../../web/static/h-ui/css/H-ui.min.css" />
    <link rel="stylesheet" type="text/css" href="../../web/static/h-ui.admin/css/H-ui.admin.css" />
    <link rel="stylesheet" type="text/css" href="../../web/lib/Hui-iconfont/1.0.8/iconfont.css" />
    <link rel="stylesheet" type="text/css" href="../../web/static/h-ui.admin/skin/default/skin.css" id="skin" />
    <link rel="stylesheet" type="text/css" href="../../web/static/h-ui.admin/css/style.css" />
    <!--[if IE 6]>
<script type="text/javascript" src="lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
    <title>文章列表</title>
</head>

<body>
    <nav class="breadcrumb">
        <i class="Hui-iconfont">&#xe67f;</i> 首页
        <span class="c-gray en">&gt;</span> 资讯管理
        <span class="c-gray en">&gt;</span> 资讯列表
        <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);"
            title="刷新">
            <i class="Hui-iconfont">&#xe68f;</i>
        </a>
    </nav>
    <div class="page-container">
        <div class="text-c">
            <button onclick="removeIframe()" class="btn btn-primary radius">关闭选项卡</button>
            <span class="select-box inline">
                <select name="" class="select">
                    <option value="0">全部分类</option>
                    <option value="1">分类一</option>
                    <option value="2">分类二</option>
                </select>
            </span> 日期范围：
            <input type="text" onfocus="WdatePicker({ maxDate:'#F{$dp.$D(\'logmax\')||\'%y-%M-%d\'}' })" id="logmin" class="input-text Wdate"
                style="width:120px;"> -
            <input type="text" onfocus="WdatePicker({ minDate:'#F{$dp.$D(\'logmin\')}',maxDate:'%y-%M-%d' })" id="logmax" class="input-text Wdate"
                style="width:120px;">
            <input type="text" name="" id="" placeholder=" 资讯名称" style="width:250px" class="input-text">
            <button name="" id="" class="btn btn-success" type="submit">
                <i class="Hui-iconfont">&#xe665;</i> 搜资讯</button>
        </div>
        <div class="cl pd-5 bg-1 bk-gray mt-20">
            <span class="l">
                <a href="javascript:;" onclick="datadel()" class="btn btn-danger radius">
                    <i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a>
                <a class="btn btn-primary radius" data-title="添加资讯" data-href="article-add.html" onclick="Hui_admin_tab(this)" href="javascript:;">
                    <i class="Hui-iconfont">&#xe600;</i> 添加资讯</a>
            </span>
            <span class="r">共有数据：
                <strong>54</strong> 条</span>
        </div>
        <div class="mt-20">
            <table class="table table-border table-bordered table-bg table-hover table-sort table-responsive">
                <thead>
                    <tr class="text-c">
                        <th width="25">
                            <input type="checkbox" name="" value="">
                        </th>
                        <th width="80">ID</th>
                        <th>标题</th>
                        <th width="80">分类</th>
                        <th width="80">来源</th>
                        <th width="120">更新时间</th>
                        <th width="75">浏览次数</th>
                        <th width="60">发布状态</th>
                        <th width="120">操作</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="text-c" ng-repeat="item in articleList">
                        <td>
                            <input type="checkbox" value="" name="">
                        </td>
                        <td>{{item.id}}</td>
                        <td class="text-l">
                            <u style="cursor:pointer" class="text-primary" onClick="article_edit('查看','article-zhang.html','10001')" title="查看">{{item.title}}</u>
                        </td>
                        <td>{{item.type}}</td>
                        <td>{{item.h}}</td>
                        <td>{{item.time}}</td>
                        <td>{{item.mome}}</td>
                        <td class="td-status">
                            <span class="label label-success radius">{{item.status}}</span>
                        </td>
                        <td class="f-14 td-manage">
                            <a style="text-decoration:none" ng-if="item.status_id == 1" onClick="article_stop(this,'10001')" href="javascript:;" title="下架">
                                <i class="Hui-iconfont">&#xe6de;</i>
                            </a>
                            <a style="text-decoration:none" ng-if="item.status_id == 0 " onClick="article_shenhe(this,'10001')" href="javascript:;" title="审核">审核</a>
                            <a style="text-decoration:none" class="ml-5" onClick="article_edit('资讯编辑','article-add.html','10001')" href="javascript:;"
                                title="编辑">
                                <i class="Hui-iconfont">&#xe6df;</i>
                            </a>
                            <a style="text-decoration:none" class="ml-5" onClick="article_del(this,'10001')" href="javascript:;" title="删除">
                                <i class="Hui-iconfont">&#xe6e2;</i>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!--_footer 作为公共模版分离出去-->
    <script type="text/javascript" src="../../web/lib/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="../../web/lib/angular/angular-1.4.8.min.js"></script>
    <script type="text/javascript" src="../../web/lib/layer/2.4/layer.js"></script>
    <script type="text/javascript" src="../../web/static/h-ui/js/H-ui.min.js"></script>
    <script type="text/javascript" src="../../web/static/h-ui.admin/js/H-ui.admin.js"></script>
    <!--/_footer 作为公共模版分离出去-->

    <!--请在下方写此页面业务相关的脚本-->
    <script type="text/javascript" src="../../web/lib/My97DatePicker/4.8/WdatePicker.js"></script>
    <script type="text/javascript" src="../../web/lib/datatables/1.10.0/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="../../web/lib/laypage/1.2/laypage.js"></script>
    <script type="text/javascript" src="../../web/js/iov.min.js"></script>
    <script type="text/javascript" src="tplHtml/js/postList.js"></script>
</body>

</html>