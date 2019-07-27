﻿'use strict';
DetailNewsPostController.$inject = ['$scope', '$rootScope', '$http', '$location', '$routeParams', '$cookies', '$cookieStore', '$filter', '$compile'];
function DetailNewsPostController($scope, $rootScope, $http, $location, $routeParams, $cookies, $cookieStore, $filter, $compile) {
    $scope.title = "Detail Post";
    $scope.action = 'Save';
    $scope.showEditButton = false;
    $scope.newsPostList = [];
    $scope.newsPostOb = {
       Id : null,
       Title :null,
       PostDetail : null,
       UserFullName : null,
       FilePath : null,
       CategoryName : null,
       CreatedAt : null,
    }
    $scope.getPostDetailList = function (id) {
        $http({
            method: 'GET',
            url: '/api/GetNewsPostById/'+id,
        }).then(function successCallback(response) {
            if (response.data !== '') {
                var item = response.data.data;
                $scope.newsPostOb.Id = item.id
                $scope.newsPostOb.Title = item.title
                $scope.newsPostOb.PostDetail = item.post_detail
                $scope.newsPostOb.UserFullName = item.user_full_name
                $scope.newsPostOb.FilePath = "/"+item.file_path
                $scope.newsPostOb.CategoryName = item.post_categories[0].name
                $scope.newsPostOb.CreatedAt = item.created_at
            }
        })
    }
};