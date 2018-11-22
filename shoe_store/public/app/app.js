
// dùng xuất ra dữ liệu angularjs
var app = angular.module('my-app', [], function ($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
}).constant('API', 'http://localhost:8012/shoe_store/public/');

// lấy dữ liệu kiểu json của đường dẫn
app.controller('productsController', function($scope, $http, API) {
    $scope.name = "mai tuấn anh";
    $http.get(API + 'getAll').then(function (response) {
        console.log(response);
        $scope.Products = response.data;
    });
});

