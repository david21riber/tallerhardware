/**
 * Created by micky on 07-12-16.
 */

var app = angular.module('tallerApp', ['ngStorage']);
app.controller('stylerMainCrtl', function($scope, $localStorage) {
$scope.hi = 'hello word';

  $localStorage['param'] = {"a":1,"b":2};

});


