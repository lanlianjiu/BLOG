+ function ($) {
    var app = angular.module('adminIndex', []);
    app.controller('controller', ['$scope', '$http', function ($scope, $http) {

        $scope.menuList = {};
        $scope.userInfo = {};
        $scope.userInfo.username = $.u.user.username;

        $scope.loadNode = function (data, pid) {

            var result = [],
                temp;

            for (var i = 0; i < data.length; i++) {
                if (data[i].menuPId == pid) {

                    result.push(data[i]);

                    temp = $scope.loadNode(data, data[i].menuId);
                    if (temp.length > 0) data[i].nodes = temp;
                }
            }

            return result;
        };

        //获取菜单
        $scope.getMenus = function () {
            $.post($.cfg.server_ + "InterfaceRequest.php?r=site/index", {},
                function (res) {
                    if (res.status) {
                        $scope.menuList = $scope.loadNode(res.result, 0);
                    };

                    $scope.$apply();
                }, 'json');
        };

        //$scope.getMenus();

        // $scope.menuList = [{
        //     id: 1,
        //     name: "产品管理",
        //     nodes: [{
        //             id: 1,
        //             name: "品牌管理",
        //             url: "product-brand.html"
        //         },
        //         {
        //             id: 2,
        //             name: "分类管理",
        //             url: "product-category.html"
        //         },
        //         {
        //             id: 3,
        //             name: "产品管理",
        //             url: "product-list.html"
        //         }
        //     ]
        // }];

        //退出登录
        $scope.loginOut = function () {
            $.post($.cfg.server_ + "InterfaceRequest.php?r=site/logout", {},
                function (result) {
                    if (result) {
                        $.localCache.remove($.cfg.user);
                        window.location.href = "login.html";
                    } else {
                        $.localCache.remove($.cfg.user);
                        window.location.href = 'login.html';
                    };
                }, 'json');
        };

    }])

}(jQuery);