+ function ($) {
    var app = angular.module('postList', []);
    app.controller('controller', ['$scope', '$http', function ($scope, $http) {

        $scope.getArticle = function () {
            $.post($.cfg.server_ + "index.php?r=post/index", {},
                function (res) {
                    if (res.status) {

                    };

                    $scope.$apply();
                }, 'json');
        };

        $scope.getArticle();

        $scope.articleList = [{
            id: 10001,
            title: "资讯标题",
            type: "行业动态",
            h: "H-ui",
            time: "2014-6-11 11:11:42",
            mome: "21212",
            status: "草稿",
            status_id: 0,
        }, {
            id: 10002,
            title: "资讯标题",
            type: "行业动态",
            h: "H-ui",
            time: "2014-6-11 11:11:42",
            mome: "21212",
            status: "已发布",
            status_id: 1,
        }, {
            id: 10002,
            title: "资讯标题",
            type: "行业动态",
            h: "H-ui",
            time: "2014-6-11 11:11:42",
            mome: "21212",
            status: "已发布",
            status_id: 1,
        }, {
            id: 10003,
            title: "资讯标题",
            type: "行业动态",
            h: "H-ui",
            time: "2014-6-11 11:11:42",
            mome: "21212",
            status: "已发布",
            status_id: 1,
        }, {
            id: 10004,
            title: "资讯标题",
            type: "行业动态",
            h: "H-ui",
            time: "2014-6-11 11:11:42",
            mome: "21212",
            status: "已发布",
            status_id: 1,
        }, {
            id: 10006,
            title: "资讯标题",
            type: "行业动态",
            h: "H-ui",
            time: "2014-6-11 11:11:42",
            mome: "21212",
            status: "已发布",
            status_id: 1,
        }, {
            id: 10007,
            title: "资讯标题",
            type: "行业动态",
            h: "H-ui",
            time: "2014-6-11 11:11:42",
            mome: "21212",
            status: "已发布",
            status_id: 1,
        }, {
            id: 10008,
            title: "资讯标题",
            type: "行业动态",
            h: "H-ui",
            time: "2014-6-11 11:11:42",
            mome: "21212",
            status: "已发布",
            status_id: 1,
        }, {
            id: 10009,
            title: "资讯标题",
            type: "行业动态",
            h: "H-ui",
            time: "2014-6-11 11:11:42",
            mome: "21212",
            status: "已发布",
            status_id: 1,
        }, {
            id: 10022,
            title: "资讯标题",
            type: "行业动态",
            h: "H-ui",
            time: "2014-6-11 11:11:42",
            mome: "21212",
            status: "已发布",
            status_id: 1,
        }, {
            id: 10012,
            title: "资讯标题",
            type: "行业动态",
            h: "H-ui",
            time: "2014-6-11 11:11:42",
            mome: "21212",
            status: "已发布",
            status_id: 1,
        }, {
            id: 10016,
            title: "资讯标题",
            type: "行业动态",
            h: "H-ui",
            time: "2014-6-11 11:11:42",
            mome: "21212",
            status: "已发布",
            status_id: 1,
        }, {
            id: 10042,
            title: "资讯标题",
            type: "行业动态",
            h: "H-ui",
            time: "2014-6-11 11:11:42",
            mome: "21212",
            status: "已发布",
            status_id: 1,
        }, {
            id: 10052,
            title: "资讯标题",
            type: "行业动态",
            h: "H-ui",
            time: "2014-6-11 11:11:42",
            mome: "21212",
            status: "已发布",
            status_id: 1,
        }, {
            id: 10062,
            title: "资讯标题",
            type: "行业动态",
            h: "H-ui",
            time: "2014-6-11 11:11:42",
            mome: "21212",
            status: "已发布",
            status_id: 1,
        }, {
            id: 10072,
            title: "资讯标题",
            type: "行业动态",
            h: "H-ui",
            time: "2014-6-11 11:11:42",
            mome: "21212",
            status: "已发布",
            status_id: 1,
        }, {
            id: 10082,
            title: "资讯标题",
            type: "行业动态",
            h: "H-ui",
            time: "2014-6-11 11:11:42",
            mome: "21212",
            status: "已发布",
            status_id: 1,
        }, {
            id: 10092,
            title: "资讯标题",
            type: "行业动态",
            h: "H-ui",
            time: "2014-6-11 11:11:42",
            mome: "21212",
            status: "已发布",
            status_id: 1,
        }]
    }])

}(jQuery);

$('.table-sort').dataTable({
    "aaSorting": [
        [1, "desc"]
    ], //默认第几个排序
    "bStateSave": true, //状态保存
    "pading": false,
    "aoColumnDefs": [
        //{"bVisible": false, "aTargets": [ 3 ]} //控制列的隐藏显示
        {
            "orderable": false,
            "aTargets": [0, 8]
        } // 不参与排序的列
    ]
});

/*资讯-添加*/
function article_add(title, url, w, h) {
    var index = layer.open({
        type: 2,
        title: title,
        content: url
    });
    layer.full(index);
}
/*资讯-编辑*/
function article_edit(title, url, id, w, h) {
    var index = layer.open({
        type: 2,
        title: title,
        content: url
    });
    layer.full(index);
}
/*资讯-删除*/
function article_del(obj, id) {
    layer.confirm('确认要删除吗？', function (index) {
        $.ajax({
            type: 'POST',
            url: '',
            dataType: 'json',
            success: function (data) {
                $(obj).parents("tr").remove();
                layer.msg('已删除!', {
                    icon: 1,
                    time: 1000
                });
            },
            error: function (data) {
                console.log(data.msg);
            },
        });
    });
}

/*资讯-审核*/
function article_shenhe(obj, id) {
    layer.confirm('审核文章？', {
        btn: ['通过', '不通过', '取消'],
        shade: false,
        closeBtn: 0
    },
        function () {
            $(obj).parents("tr").find(".td-manage").prepend(
                '<a class="c-primary" onClick="article_start(this,id)" href="javascript:;" title="申请上线">申请上线</a>'
            );
            $(obj).parents("tr").find(".td-status").html(
                '<span class="label label-success radius">已发布</span>');
            $(obj).remove();
            layer.msg('已发布', {
                icon: 6,
                time: 1000
            });
        },
        function () {
            $(obj).parents("tr").find(".td-manage").prepend(
                '<a class="c-primary" onClick="article_shenqing(this,id)" href="javascript:;" title="申请上线">申请上线</a>'
            );
            $(obj).parents("tr").find(".td-status").html(
                '<span class="label label-danger radius">未通过</span>');
            $(obj).remove();
            layer.msg('未通过', {
                icon: 5,
                time: 1000
            });
        });
}
/*资讯-下架*/
function article_stop(obj, id) {
    layer.confirm('确认要下架吗？', function (index) {
        $(obj).parents("tr").find(".td-manage").prepend(
            '<a style="text-decoration:none" onClick="article_start(this,id)" href="javascript:;" title="发布"><i class="Hui-iconfont">&#xe603;</i></a>'
        );
        $(obj).parents("tr").find(".td-status").html(
            '<span class="label label-defaunt radius">已下架</span>');
        $(obj).remove();
        layer.msg('已下架!', {
            icon: 5,
            time: 1000
        });
    });
}

/*资讯-发布*/
function article_start(obj, id) {
    layer.confirm('确认要发布吗？', function (index) {
        $(obj).parents("tr").find(".td-manage").prepend(
            '<a style="text-decoration:none" onClick="article_stop(this,id)" href="javascript:;" title="下架"><i class="Hui-iconfont">&#xe6de;</i></a>'
        );
        $(obj).parents("tr").find(".td-status").html(
            '<span class="label label-success radius">已发布</span>');
        $(obj).remove();
        layer.msg('已发布!', {
            icon: 6,
            time: 1000
        });
    });
}
/*资讯-申请上线*/
function article_shenqing(obj, id) {
    $(obj).parents("tr").find(".td-status").html('<span class="label label-default radius">待审核</span>');
    $(obj).parents("tr").find(".td-manage").html("");
    layer.msg('已提交申请，耐心等待审核!', {
        icon: 1,
        time: 2000
    });
}