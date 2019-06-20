﻿'use strict';
var publicpanelApp = angular.module('publicpanelApp', ['ngRoute', 'ngCookies', 'angularUtils.directives.dirPagination'])
    .controller('HomeController', HomeController)
    .controller('AccountController', AccountController)
    .controller('advanceSearchController', AdvanceSearchController)
publicpanelApp.factory('LoginService', function ($http) {
    var fac = {};
    fac.GetUser = function (d) {
        return $http({
            url: '/Login',
            method: 'POST',
            data: JSON.stringify(d),
            headers: { 'content-type': 'application/json' }
        });
    };
    return fac;
});

publicpanelApp.directive('loader', loader)
publicpanelApp.directive('pageLoader', pageLoader)
publicpanelApp.directive('showErrors', showErrors)
publicpanelApp.directive('manualValidation', manualValidation)
publicpanelApp.directive('onlyNumbers', onlyNumbers)
publicpanelApp.directive('nDecimals', nDecimals)
publicpanelApp.directive('ngEnter', function () {
    return function (scope, element, attrs) {
        element.bind("keydown keypress", function (event) {
            if (event.which === 13) {
                scope.$apply(function () {
                    scope.$eval(attrs.ngEnter);
                });

                event.preventDefault();
            }
        });
    };
});
function loader($http) {
    return {
        restrict: 'A',
        link: function (scope, elm, attrs) {
            scope.isLoading = function () {
                return $http.pendingRequests.length > 0;
            };
            scope.$watch(scope.isLoading, function (v) {
                if (v) {
                    elm.show();
                } else {
                    elm.hide();
                }
            });
        }
    }
}
function pageLoader($http) {
    return {
        restrict: 'A',
        link: function (scope, elm, attrs) {
            scope.isLoading = function () {
                return $http.pendingRequests.length > 0;
            };
            scope.$watch(scope.isLoading, function (v) {
                if (v) {
                    elm.show();
                } else {
                    elm.hide();
                    //document.getElementById("pageloading").style.display = "block";
                }
            });
        }
    }
}
showErrors.$inject = ['$rootScope'];
function showErrors($rootScope) {
    return {
        restrict: 'A',
        require: '^form',
        link: function (scope, el, attrs, formCtrl) {
            var inputNgEl = angular.element(el[0].querySelector('[name]'));
            var inputName = inputNgEl.attr('name');
            scope.$on('show-errors-check-validity', function () {
                var isInvalid = false;
                var msg = '';
                if (!angular.isUndefined(inputNgEl.attr('manualInvalid')) && !inputNgEl.attr('manualInvalid')) {
                    isInvalid = true;
                    msg = inputNgEl.attr('manualInvalidMsg');
                }
                else {
                    isInvalid = formCtrl[inputName].$invalid;
                    msg = inputName + ' is required.';
                }
                el.toggleClass('has-error', isInvalid)
                    .toggleClass('help-block', isInvalid)
                    .find('help-block').remove();
                el.find('show-message').append('<p class="help-block">' + msg + '</p>');
            });
            scope.$on('show-errors-reset', function () {
                $timeout(function () {
                    el.removeClass('has-error');
                    el.removeClass('help-block');
                    el.find('show-message').remove('<p class="wrn-text help-block">' + inputName + ' is required.</p>');
                }, 0, false);
            });
            inputNgEl.bind('blur', function () {
                var isInvalid = false;
                if (formCtrl[inputName].$invalid)
                    isInvalid = true;
                else if (!angular.isUndefined(inputNgEl.attr('manualInvalid')) && !inputNgEl.attr('manualInvalid'))
                    isInvalid = true;
                else
                    isInvalid = false;
                el.toggleClass('has-error', isInvalid);
            })
        }
    }
}
function manualValidation(parentDivId, isInvalid, errorMessage) {
    var el = angular.element('#' + parentDivId);
    if (angular.isUndefined(el[0]))
        return false;
    el.toggleClass('has-error', isInvalid)
        .toggleClass('help-block', isInvalid);
    var inputEl = angular.element(el[0].querySelector('[name]'));
    inputEl.attr('manualInvalid', isInvalid)
        .attr('manualInvalidMsg', errorMessage);
    if (isInvalid) {
        el.find('.help-block').remove();
        el.find('.show-message').append('<p class="help-block">' + errorMessage + '</p>');
    }
    else {
        el.find('.help-block').remove();
    }
    return isInvalid;
}
onlyNumbers.$inject = ['$rootScope'];
function onlyNumbers($rootScope) {
    return {
        require: 'ngModel',
        link: function (scope, element, attr, ngModelCtrl) {
            function fromUser(text) {
                if (attr.min !== text.length)
                    $rootScope.lengthCheck = true;
                else
                    $rootScope.lengthCheck = false;
                if (text) {
                    var transformedInput = text.replace(/[^-0-9]/g, '');
                    var negativeCheck = transformedInput.split('-');
                    if (!angular.isUndefined(negativeCheck[1])) {
                        negativeCheck[1] = negativeCheck[1].slice(0, negativeCheck[1].length);
                        transformedInput = negativeCheck[0] + '-' + negativeCheck[1];
                        if (negativeCheck[0].length > 0) {
                            transformedInput = negativeCheck[0];
                        }
                    }
                    if (transformedInput !== text) {
                        ngModelCtrl.$setViewValue(transformedInput);
                        ngModelCtrl.$render();
                    }
                    return transformedInput;
                }
                return undefined;
            }
            ngModelCtrl.$parsers.push(fromUser);
        }
    };
}
function nDecimals() {
    return {
        require: '?ngModel',
        link: function (scope, element, attrs, ngModelCtrl) {
            if (!ngModelCtrl)
                return;
            ngModelCtrl.$parsers.push(function (val) {
                if (angular.isUndefined(val)) {
                    val = '';
                }
                var maxDecimal = Number(element.attr('n-Decimals'));
                var clean = val.replace(/[^-0-9\.]/g, '');
                var negativeCheck = clean.split('-');
                var decimalCheck = clean.split('.');
                if (!angular.isUndefined(negativeCheck[1])) {
                    negativeCheck[1] = negativeCheck[1].slice(0, negativeCheck[1].length);
                    clean = negativeCheck[0] + '-' + negativeCheck[1];
                    if (negativeCheck[0].length > 0) {
                        clean = negativeCheck[0];
                    }
                }
                if (!angular.isUndefined(decimalCheck[1])) {
                    decimalCheck[1] = decimalCheck[1].slice(0, maxDecimal);
                    clean = decimalCheck[0] + '.' + decimalCheck[1];
                }
                if (val !== clean) {
                    ngModelCtrl.$setViewValue(clean);
                    ngModelCtrl.$render();
                }
                return clean;
            });
            element.bind('keypress', function (event) {
                if (event.keyCode === 32) {
                    event.preventDefault();
                }
            });
        }
    };
}
//publicpanelApp.config(['$locationProvider', function ($locationProvider) { $locationProvider.html5Mode({ enabled: true, requireBase: false }); }])
publicpanelApp.config(function ($routeProvider) {
    $routeProvider.when('/Home/Index', {
        templateUrl: '/Index',
        controller: 'homeController'
    })
    $routeProvider.when('/Account/Register', {
        templateUrl: '/Register.cshtml',
        controller: 'accountController'
    })
    $routeProvider.when('/Account/Login', {
        templateUrl: '/Login.cshtml',
        controller: 'accountController'
    })
    $routeProvider.when('/UserDashboard/UserProfile', {
        templateUrl: '/AdminProfile.cshtml',
        controller: 'AdminDashboardController'
    })
})