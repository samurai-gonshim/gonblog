(function() {
    var app = angular.module('tagapp', [], function($interpolateProvider) {
        $interpolateProvider.startSymbol('[[');
        $interpolateProvider.endSymbol(']]');
    });

    app.controller('TagsController', function($scope, $http){
        $http.get('/tags').success(function(tags)
        {
            $scope.tags = tags;
        });

        // $scope.returnCheckedTagIds = function() {
        //     var ids = [];
        //     angular.forEach($scope.tags, function(tag)
        //     {
        //         if(tag.checked) 
        //     });
        // };

    });




})();