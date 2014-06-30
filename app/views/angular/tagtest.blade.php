<!DOCTYPE html>
<html lang="jp" ng-app="tagapp">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tag Test</title>
    {{ HTML::style('assets/css/bootstrap.min.css') }}
    {{ HTML::style('assets/css/style.css') }}
</head>
<body ng-controller="TagsController as ts">

    <div class="container">
        <div class="row">

            <h1>
                Tags 
<!--                 <small ng-if="remaining()">[[ remaining() ]] tags</small> 
 -->            </h1>

            <input type="text" placeholder="Filter Tags" ng-model="search">

            <ul class="list-inline">
                <li ng-repeat="tag in tags | filter:search">
                <input type="checkbox" ng-model="tag.checked">
                     [[ tag.tag ]] checked: [[ tag.checked ]]
                </li>
            </ul>
            
            <pre> [[ tags | json ]] </pre>

    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.0-beta.13/angular.min.js"></script>
    <script type="text/javascript" src="assets/js/angulartag.js"></script>


</body>
</html>