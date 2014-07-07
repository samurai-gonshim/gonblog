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
      <button ng-click="buttonclicked()"> Test! </button>
      <div ng-include="myFlag && 'test.php'"></div>
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
    });
  </script>
    
</body>
</html>