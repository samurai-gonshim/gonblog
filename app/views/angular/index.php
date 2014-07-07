<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Angular Testing</title>

    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.5/angular.min.js"></script>
</head>

<body ng-app="myapp">

  <div ng-controller="MyController" >
      <span>{{ myData }}</span>

      <ol>
        <li ng-repeat-start="(name, value) in myObject">{{name}}</li>
        <li ng-repeat-end>{{value}}</li>
      </ol>

      <button ng-click="buttonclicked()"> Test! </button>
      <!-- <div ng-include="myFlag && 'test.php'"></div> -->
      <div ng-show="myFlag"> 
      <div> Comment: </div>
      <div>
      <textarea name="comment" id="comment" cols="40" rows="10"></textarea>
      </div>      
      <button>Submit!</button>
      </div>

  </div>

  <script>
    angular.module("myapp", [])
    .controller("MyController", function($scope) {
      //empty controller function
      $scope.myData = "this is angular testing";
      $scope.myFlag = false;

      $scope.buttonclicked = function() {
        $scope.myFlag = true;
      };

      $scope.myObject = { var1 : "val1", var2 : "val3", var3 : "val3"};

    });
  </script>
    
</body>
</html>