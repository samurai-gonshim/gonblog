<!DOCTYPE html>
<html lang="jp" ng-app="myapp">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Angular Test</title>
    {{ HTML::style('assets/css/bootstrap.min.css') }}
    {{ HTML::style('assets/css/style.css') }}
</head>
<body ng-controller="StoreController as store">

    <div class="container">
        <div class="row">

            <h1>Angular Testing</h1>

            <div class="col-md-7">
                <div ng-repeat="product in store.products">
                    <div ng-hide="product.soldOut">
                        <p>[[ product.name ]]</p>
                        <p>[[ product.price | currency ]]</p>
                        <p>[[ product.description ]]</p>
                    </div>
                </div>                
            </div>
        </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.0-beta.13/angular.min.js"></script>
    <script type="text/javascript" src="assets/js/angulartest.js"></script>


</body>
</html>