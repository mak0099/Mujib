﻿'use strict';
NewsPostController.$inject = ['$scope', '$rootScope', '$http', '$location', '$routeParams', '$cookies', '$cookieStore', '$filter', 'fileReader', '$compile', '$window'];
function NewsPostController($scope, $rootScope, $http, $location, $routeParams, $cookies, $cookieStore, $filter, fileReader, $compile, $window) {
    $scope.title = "News Post";
    $scope.action = 'Save';
    $scope.showEditButton = false;
    $scope.newsPostList = [];
    $scope.newsPostOb = {
        Id: null,
        Title: null,
        PostDetail: null,
        ShortPost:null,
        FileName: null,
        UserId: null,
    }
    $scope.postCategoryList=[];
    $scope.postCategorySelectedList=[];
    $scope.options = {
        height: 150,
        //toolbar: [
        //    ['style', ['bold', 'italic', 'underline']],
        //    ['para', ['ul', 'ol']]
        //]
        toolbar: [
            ['edit', ['undo', 'redo']],
            ['headline', ['style']],
            ['style', ['bold', 'italic', 'underline', 'superscript', 'subscript', 'strikethrough', 'clear']],
            ['fontface', ['fontname']],
            ['textsize', ['fontsize']],
            ['fontclr', ['color']],
            ['alignment', ['ul', 'ol', 'paragraph', 'lineheight']],
            ['height', ['height']],
            //['table', ['table']],
            ['insert', ['link', 'picture', 'video', 'hr']],
            ['view', ['fullscreen']],
            //['help', ['help']]
        ]
    };
    $scope.getPostCategory = function () {
        $http({
            method: 'GET',
            url: 'api/GetPostCategory'
        }).then(function successCallback(response) {
            $scope.postCategoryList = response.data;
        })
    }
    $scope.getPostCategory();
    $scope.PostListSearchParameters = {
        PageSize: 10,
        Total_Count: 0,
        CurrentPage: 1,
        PageNo: 1
    }
    $scope.getAllPersonalnewsPostList = [];
    $scope.getPersonalList = function () {
        $scope.pageChangeHandler = function (num) {
            $scope.PostListSearchParameters.PageNo = num != undefined ? num : 1;
            $http({
                method: 'GET',
                url: '/newsPost/GetnewsPostListWithUserId?pageNo=' + $scope.PostListSearchParameters.PageNo + '&pageSize=' + $scope.PostListSearchParameters.PageSize
            }).then(function successCallback(result) {
                if (result.data.Items.length > 0) {
                    angular.forEach(result.data.Items, function (item) {
                        item.TempSrc = getFileUrl(item.FileId, item.FileName);
                    });
                }
                $scope.getAllPersonalnewsPostList = result.data.Items;
                $scope.PostListSearchParameters.Total_Count = result.data.Pager.TotalItems;
            })
        };
        $scope.pageChangeHandler();
    }
    $scope.getPersonalList();
    $scope.newsPostDetailList = [];
    //**AllnewsPostList**/
    $scope.allnewsPostList = [];
    $scope.allnewsPostListSearchParameters = {
        PageSize: 10,
        Total_Count: 0,
        CurrentPage: 1,
        PageNo: 1
    }
    $scope.getPostList = function () {
        $scope.pageAllnewsPostChangeHandler = function (num) {
            $scope.allnewsPostListSearchParameters.PageNo = num != undefined ? num : 1;
            $http({
                method: 'GET',
                url: '/newsPost/GetnewsPostList?pageNo=' + $scope.allnewsPostListSearchParameters.PageNo + '&pageSize=' + $scope.allnewsPostListSearchParameters.PageSize
            }).then(function successCallback(response) {
                if (response.data.Items.length > 0) {
                    angular.forEach(response.data.Items, function (item) {
                        item.TempSrc = getFileUrl(item.FileId, item.FileName);
                    });
                    $scope.allnewsPostList = response.data.Items;
                }
                $scope.allnewsPostListSearchParameters.Total_Count = response.data.Pager.TotalItems;
            })
        };
        $scope.pageAllnewsPostChangeHandler();
    }
    $scope.getPostList();
    $scope.Save = function () {
        if ($scope.filedata != null) {
            $scope.addnewsPost();
        }
        var formData = new FormData();
        formData.append('newsPostOb', JSON.stringify($scope.newsPostOb));
        formData.append('file', $scope.filedata);
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: "POST",
            url: "/api/SaveNews",
            contentType: false,
            processData: false,
            data: formData,
            success: function (response) {
                console.log(response);
                if(response.error == true){
                    noty({ text: "This file format is not allowed to upload", layout: 'topRight', type: 'error' });
                }else{
                    $scope.newsPostOb.Title=null;
                    $scope.newsPostOb.PostDetail=null;
                    $scope.newsPostOb.ShortPost=null;
                    noty({ text: response.title +" has saved!", layout: 'topRight', type: 'success' });
                    $scope.getUserFileById();
                }
            },
            error: function () {
                noty({ text: "Something went wrong!", layout: 'topRight', type: 'error' });
            }
        });
        // $http({
        //     method: "post",
        //     url: '/newsPost/Save/',
        //     headers: { 'Content-Type': undefined },
        //     transformRequest: function (data) {
        //         formData.append('newsPost', JSON.stringify(data.newsPost));
        //       //  formData.append('postDetailList', JSON.stringify(data.postDetailList));
        //         for (var i = 0; i < data.postFile.length; i++) {
        //             formData.append('postFile[' + i + ']', data.postFile[i]);
        //         }
        //         return formData;
        //     },
        //     data: {
        //         'newsPost': $scope.newsPostOb
        //        // , 'postDetailList': $scope.newsPostDetailList
        //         , 'postFile': $scope.inputFileList
        //     },
        //     dataType: "json"
        // }).then(function successCallback(response) {
        //     if (response.data.Error === true) {
        //         noty({ text: response.data.Message, layout: 'topRight', type: 'error' });
        //     }
        //     else {
        //         noty({ text: response.data.Message, layout: 'topRight', type: 'success' });
        //         $scope.getPersonalList();
        //         $scope.getPostList();
        //         $scope.newsPostOb = {
        //             Id: null,
        //             Title: null,
        //             Active: true,
        //             CategoryId: 1
        //         }
        //         $scope.newsPostDetail = {
        //             Id: null,
        //             Sequence: null,
        //             PostText: null
        //         }
        //     }
        // }), function errorCallBack(response) {
        //     noty({ text: response.data.Message, layout: 'topRight', type: 'error' });
        // }
    }
    $scope.imageSrc = null;
    $scope.filedata = null;
    $("#uploadImage").change(function () {
        $scope.filedata = this.files[0];
    });
    $scope.getFile = function () {
        $scope.progress = 0;
        fileReader.readAsDataUrl($scope.file, $scope)
            .then(function (result) {
                $scope.imageSrc = result;
            });
    };

    $scope.inputFileList = [];
    $scope.addnewsPost = function () {
        var file = $scope.filedata;
        $scope.newsPostOb.FileName = file.name,
            $scope.newsPostOb.FileId = Math.random().toString(36).substr(2, 16),
            $scope.inputFileList.push(file);
        var file = [];
        $scope.fileDoc = [];
        $scope.ClearImage();
    }
    $scope.ClearImage = function () {
        $scope.imageSrc = null;
        document.getElementById("uploadImage").value = '';
        document.getElementsByClassName("file-input-name")[0].innerText = ''
        document.getElementById("uploadImageSrc").setAttribute('src', null);
    };
    $scope.deleteUserFile = function (data) {
        angular.forEach($scope.userVideoLinkList, function (item, i) {
            if (item.FileId == data.FileId) {
                $scope.userVideoLinkList.splice(i, 1);
            }
        })
    }
    $scope.truncString = function (str, max, add) {
        add = add || '...';
        return (typeof str === 'string' && str.length > max ? str.substring(0, max) + add : str);
    };
    $scope.deletePost = function (id) {
        if (id != null || id != undefined) {
            $http({
                method: 'POST',
                url: '/newsPost/DeletePost/' + id,
                dataType: 'JSON'
            }).then(function successCallback(response) {
                if (response.data.Error === true) {
                    noty({ text: response.data.Message, layout: 'topRight', type: 'error' });
                }
                else {
                    noty({ text: response.data.Message, layout: 'topRight', type: 'success' });
                    for (var i = 0; i < $scope.getAllPersonalnewsPostList.length; i++) {
                        var ob = $scope.getAllPersonalnewsPostList[i];
                        if (ob.Id === id) {
                            $scope.getAllPersonalnewsPostList.splice(i, 1)
                        }
                    }
                    for (var i = 0; i < $scope.allnewsPostList.length; i++) {
                        var ob = $scope.allnewsPostList[i];
                        if (ob.Id === id) {
                            $scope.allnewsPostList.splice(i, 1)
                            $scope.allnewsPostListSearchParameters.Total_Count = $scope.allnewsPostListSearchParameters.Total_Count -1;
                        }
                    }
                }
            }, function errorCallback(response) {
                noty({ text: response.data.Message, layout: 'topRight', type: 'error' });
            });
        }
        else {
            noty({ text: "No Post Found to delete", layout: 'topRight', type: 'error' });
        }
        return true;
    };
    $scope.postDetailOb = {};
    $scope.getPostDetail = function (data) {
        $http({
            method: 'GET',
            url: '/newsPost/GetPostDetailWithId?id=' + data.Id
        }).then(function successCallback(response) {
            if (response.data !== '') {
                var elements = [];
                angular.forEach(response.data, function (item, i) {
                    $scope.postDetailOb.Id = item.Id
                    $scope.postDetailOb.Title = item.Title
                    $scope.postDetailOb.UserId = item.UserId
                    $scope.postDetailOb.CategoryId = item.CategoryId
                    $scope.postDetailOb.AddedDate = item.AddedDate
                    $scope.postDetailOb.AuthorName = item.AuthorName
                    $scope.postDetailOb.TempSrc = getFileUrl(item.FileId, item.FileName);
                    elements.push(item.PostText);
                });
                $scope.postDetailOb.PostText = elements.join(' ');
                angular.element(document.querySelector('#modal_basic')).modal('show');
            }
        })
    }
    function getFileUrl(fileId, fileName) {
        if (fileName != null) {
            var str = fileName;
            var extention = str.substr(str.indexOf('.'));
            return '/UploadFiles/UsersFilePhoto/news/' + fileId + extention;
        } else {
            return fileName;
        }
    }
};