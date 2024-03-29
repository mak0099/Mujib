﻿'use strict';
AdminPhotoAlbumController.$inject = ['$scope', '$rootScope', '$http', '$location', '$routeParams', '$cookies', '$cookieStore', '$filter', 'fileReader'];
function AdminPhotoAlbumController($scope, $rootScope, $http, $location, $routeParams, $cookies, $cookieStore, $filter, fileReader) {
    $scope.title = "Photo Album";
    $scope.userPhotoLinkList = [];
    $scope.userFileList = [];
    $scope.adminPhotoOb = {
        Id: null,
        Title: null,
        Link: null,
        UserId: null,
        IsFeature: true,
        ViewFor: 'public'
    }
    $scope.adminUploadFileOb = {
        Id: null,
        Title: null,
        Link:null,
        IsFeature: true,
        ViewFor: 'public',
        FileName: null,
        FileId: null,
        UserId: null
    }
    $scope.allPhotoList = [];
    $scope.AllPhotoListSearchParameters = {
        PageSize: 12,
        Total_Count: 0,
        CurrentPage: 1,
        PageNo: 1
    }
    $scope.getAllPhotoList = function () {
        $scope.pageAllChangeHandler = function (num) {
            $scope.AllPhotoListSearchParameters.PageNo = num != undefined ? num : 1;
            $http({
                method: 'GET',
                url: '/UserPhotoAlbum/GetUserPhotoFileAllList?pageNo=' + $scope.AllPhotoListSearchParameters.PageNo + '&pageSize=' + $scope.AllPhotoListSearchParameters.PageSize
            }).then(function successCallback(response) {
                if (response.data.Items.length > 0) {
                    angular.forEach(response.data.Items, function (item) {
                        item.PhotoPath = getFileUrl(item.FileId, item.FileName);
                    });
                    $scope.allPhotoList = response.data.Items;
                }
                $scope.AllPhotoListSearchParameters.Total_Count = response.data.Pager.TotalItems;
            })
        };
        $scope.pageAllChangeHandler();
    }
    $scope.getAllPhotoList();
    $scope.userFeaturePhotoFileList = [];
    $scope.UserFeaturePhotoFileListSearchParameters = {
        PageSize: 12,
        Total_Count: 0,
        CurrentPage: 1,
        PageNo: 1
    }
    $scope.getUserFeaturePhotoFileListById = function () {
        $scope.pageFeaturePhotoFileChangeHandler = function (num) {
            $scope.UserFeaturePhotoFileListSearchParameters.PageNo = num != undefined ? num : 1;
            $http({
                method: 'GET',
                url: '/UserPhotoAlbum/GetAdminPublicPhotoFeatureFileListById?pageNo=' + $scope.UserFeaturePhotoFileListSearchParameters.PageNo + '&pageSize=' + $scope.UserFeaturePhotoFileListSearchParameters.PageSize
            }).then(function successCallback(response) {
                if (response.data.Items.length > 0) {
                    angular.forEach(response.data.Items, function (item) {
                        item.TempSrc = getFileUrl(item.FileId, item.FileName);
                    });
                    $scope.userFeaturePhotoFileList = response.data.Items;
                }
                $scope.UserFeaturePhotoFileListSearchParameters.Total_Count = response.data.Pager.TotalItems;
            })
        };
        $scope.pageFeaturePhotoFileChangeHandler();
    }
    $scope.getUserFeaturePhotoFileListById();
    $scope.userPublicPhotoLinkAllList = [];
    $scope.UserPublicPhotoLinkSearchParameters = {
        PageSize: 12,
        Total_Count: 0,
        CurrentPage: 1,
        PageNo: 1
    }
    $scope.GetUserPublicPhotoLinkAllList = function () {
        $scope.pageUserPublicPhotoLinkChangeHandler = function (num) {
            $scope.UserPublicPhotoLinkSearchParameters.PageNo = num != undefined ? num : 1;
            $http({
                method: 'GET',
                url: '/UserPhotoAlbum/GetUserPublicPhotoLinkAllList?pageNo=' + $scope.UserPublicPhotoLinkSearchParameters.PageNo + '&pageSize=' + $scope.UserPublicPhotoLinkSearchParameters.PageSize
            }).then(function successCallback(response) {
                    $scope.userPublicPhotoLinkAllList = response.data.Items;
                $scope.UserPublicPhotoLinkSearchParameters.Total_Count = response.data.Pager.TotalItems;
            })
        };
        $scope.pageUserPublicPhotoLinkChangeHandler();
    }
    $scope.GetUserPublicPhotoLinkAllList();
    $scope.photoDetailOb = {};
    $scope.photoDetail = function (data) {
        if (data.FileId != null) {
            data.TempSrc = getFileUrl(data.FileId, data.FileName);
        }
        $scope.photoDetailOb = data;
        angular.element(document.querySelector('#modal_basic')).modal('show');
    }
    $scope.userPhotoSaveLinkList = [];
    $scope.addUserPhotoLink = function () {
        $scope.userPhotoSaveLinkList = [];
        if ($scope.adminPhotoOb.Link != null) {
            $scope.userPhotoSaveLinkList.push($scope.adminPhotoOb);
            $scope.savePhotoLink();
            $scope.adminPhotoOb = {
                Id: null,
                Title: null,
                IsFeature: true,
                ViewFor: 'public',
                Link: null,
                UserId: null
            }
        } else {
            myFunction("Link required");
        }
    }
    //$scope.deleteUserPhotoLink = function (data) {
    //    angular.forEach($scope.userPhotoLinkList, function (item, i) {
    //        if (item.FileId == data.FileId) {
    //            $scope.userPhotoLinkList.splice(i, 1);
    //        }
    //    })
    //}
    $scope.deleteUserPhotoLink = function (data) {
        if (data.Id != null || data.Id != undefined) {
            $http({
                method: 'POST',
                url: '/UserPhotoAlbum/DeletePhotoLink/' + data.Id,
                dataType: 'JSON'
            }).then(function successCallback(response) {
                if (response.data.Error === true) {
                    noty({ text: response.data.Message, layout: 'topRight', type: 'error' });
                }
                else {
                    noty({ text: response.data.Message, layout: 'topRight', type: 'success' });
                    angular.forEach($scope.userPublicPhotoLinkAllList, function (item, i) {
                        if (item.Id == data.Id) {
                            $scope.userPublicPhotoLinkAllList.splice(i, 1);
                        }
                    });
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
    $scope.savePhotoLink = function () {
        if ($scope.userPhotoLink.$valid) {
            $http({
                method: "post",
                url: '/UserPhotoAlbum/SavePhotoLink/',
                data: {
                    'userPhotoLink': $scope.userPhotoSaveLinkList
                },
                dataType: 'JSON'
            }).then(function successCallback(response) {
                if (response.data.Error == true) {
                    noty({ text: response.data.Message, layout: 'topRight', type: 'error' });
                }
                else {
                    noty({ text: response.data.Message, layout: 'topRight', type: 'success' });
                    $scope.getUserPhotoListById();
                    ClearFields();
                }
            }), function errorCallBack(response) {
                showResult(response.data.Message, 'failure');
            }
        }
    }
    $scope.saveAlbum = function () {
        if ($scope.adminPhotoAlbum.$valid) {
            var formData = new FormData();
            $http({
                method: "post",
                url: '/UserPhotoAlbum/AdminCreate/',
                headers: { 'Content-Type': undefined },
                transformRequest: function (data) {
                    formData.append('userFileList', angular.toJson(data.userFileList));
                    for (var i = 0; i < data.userFile.length; i++) {
                        formData.append('userFile[' + i + ']', data.userFile[i]);
                    }
                    return formData;
                },
                data: {
                    'userFileList': $scope.photoSaveFileList
                    , 'userFile': $scope.inputFileList
                },
            }).then(function successCallback(response) {
                if (response.data.Error == true) {
                    noty({ text: response.data.Message, layout: 'topRight', type: 'error' });
                }
                else {
                    noty({ text: response.data.Message, layout: 'topRight', type: 'success' });
                    $scope.getAllPhotoList();
                    $scope.getUserFeaturePhotoFileListById();
                    ClearFields();
                }
            }), function errorCallBack(response) {
                showResult(response.data.Message, 'failure');
            }
        }
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
    $scope.photoSaveFileList = [];
    $scope.addUserFile = function () {
        $scope.inputFileList = [];
        $scope.photoSaveFileList = [];
        var file = $scope.filedata;
        var ob = {
            Id: null,
            Title: $scope.adminUploadFileOb.Title,
            Link: $scope.adminUploadFileOb.Link,
            IsFeature: $scope.adminUploadFileOb.IsFeature,
            ViewFor: $scope.adminUploadFileOb.ViewFor,
            FileName: file != null ? file.name : null,
            FileId: file != null ? Math.random().toString(36).substr(2, 16) : null,
            TempSrc: $scope.imageSrc != null ? $scope.imageSrc : "/Images/default.jpg",
            UserId: null
        }
        $scope.photoSaveFileList.push(ob);
        $scope.inputFileList.push(file);
        $scope.adminUploadFileOb = {
            Id: null,
            Title: null,
            Link:null,
            IsFeature: true,
            ViewFor: 'public',
            FileName: null,
            FileId: null,
            UserId: null
        }
        var file = [];
        $scope.fileDoc = [];
        $scope.ClearImage();
        $scope.saveAlbum();
    }
    $scope.ClearImage = function () {
        $scope.imageSrc = null;
        document.getElementById("uploadImage").value = '';
        if (document.getElementsByClassName("file-input-name").length > 0) {
            document.getElementsByClassName("file-input-name")[0].innerText = ''
        }
        if (document.getElementById("uploadImageSrc") != null) {
            document.getElementById("uploadImageSrc").setAttribute('src', null);
        }
    };
    $scope.deleteUserFile = function (data) {
        if (data.Id != null || data.Id != undefined) {
            $http({
                method: 'POST',
                url: '/UserPhotoAlbum/DeletePost/' + data.Id,
                dataType: 'JSON'
            }).then(function successCallback(response) {
                if (response.data.Error === true) {
                    noty({ text: response.data.Message, layout: 'topRight', type: 'error' });
                }
                else {
                    noty({ text: response.data.Message, layout: 'topRight', type: 'success' });
                    angular.forEach($scope.userFeaturePhotoFileList, function (item, i) {
                        if (item.Id == data.Id) {
                            $scope.userFeaturePhotoFileList.splice(i, 1);
                        }
                    });
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
    $scope.deleteUserFileFromAll = function (data) {
        if (data.Id != null || data.Id != undefined) {
            $http({
                method: 'POST',
                url: '/UserPhotoAlbum/DeletePost/' + data.Id,
                dataType: 'JSON'
            }).then(function successCallback(response) {
                if (response.data.Error === true) {
                    noty({ text: response.data.Message, layout: 'topRight', type: 'error' });
                }
                else {
                    noty({ text: response.data.Message, layout: 'topRight', type: 'success' });
                    angular.forEach($scope.allPhotoList, function (item, i) {
                        if (item.Id == data.Id) {
                            $scope.allPhotoList.splice(i, 1);
                        }
                    });
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
    function myFunction(msg) {
        $scope.msgText = msg
        var x = document.getElementById("snackbar")
        x.className = "show";
        setTimeout(function () { x.className = x.className.replace("show", ""); }, 3000);
    }
    //#gallary**
    $scope.modalTempSrc = null;
    $scope.imgTitle = null;
    $scope.img = function (data) {
        angular.element(document.querySelector('#modal_basic')).modal('show');
        $scope.modalTempSrc = data.TempSrc;
        $scope.imgTitle = data.Title;
    }
    //endgallary
    $scope.FileDownload = function (data) {
        $scope.dwonloadUrl = null;

        $scope.dwonloadUrl = getFileUrl(data.FileId, data.FileName);
    };
    function getFileUrl(fileId, fileName) {
        if (fileId != null) {
            if (fileId != "") {
                var str = fileName;
                var extention = str.substr(str.indexOf('.'));
                return '/UploadFiles/UsersFilePhoto/' + fileId + extention;
            } else {
                return '/Images/default.jpg';
            }
        } else {
            return '/Images/default.jpg';
        }
    }
};