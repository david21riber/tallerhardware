/**
 * Created by micky on 07-12-16.
 */

var app = angular.module('tallerApp', ['ngStorage']);
app.controller('stylerMainCrtl', function($scope, $localStorage) {
$scope.hi = 'hello word';

  //$localStorage['param'] = {"a":1,"b":2};

  $scope.setButton = function(led, state){
    var objSave = {"label":led,"state":state, "time": new Date()};
    console.log('ty', objSave);
    var localStorange =  $localStorage['report'];
    if(localStorange && localStorange.length>0){
    localStorange.push(objSave);
    $localStorage['report'] =  localStorange;
    }else{
      $localStorage['report'] = [objSave];

    }


  }

});


