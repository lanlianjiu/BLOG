+ function ($) {
    var app = angular.module('adminLogin', []);
    app.controller('controller', ['$scope', '$http', function ($scope, $http) {
        $scope.data = {
            rememberMe: 1
        };

        $scope.loginSubmit = false;
        //登录
        $scope.login = function () {

            $scope.loginSubmit = true;

            var data = {
                username: $scope.data.userName,
                password: $scope.data.password,
                rememberMe: Number($scope.data.rememberMe)
            };

            $.post($.cfg.server_ + "InterfaceRequest.php?r=site/login", data,
                function (result) {
                    $scope.loginSubmit = false;
                    if (result.status) {
                        $.localCache.remove($.cfg.user);
                        $.localCache.set($.cfg.user, result.result);

                        $.sessionCache.set('isLogin', true);

                        if ($scope.data.rememberMe) {
                            $.localCache.set('login', {
                                username: $scope.data.userName,
                            })
                        } else {
                            $.localCache.remove('login');
                        }

                        window.location.href = 'index.html';
                    } else {
                        alert('登录失败!');
                    }
                }, 'json');

        };

    }])

}(jQuery);