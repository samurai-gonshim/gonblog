(function() {
    var app = angular.module('myapp', [], function($interpolateProvider) {
        $interpolateProvider.startSymbol('[[');
        $interpolateProvider.endSymbol(']]');
    });

    app.controller('StoreController', function(){
        this.products = gems;
    });

    var gems = [

        {
            name: 'Super Color Diamond',
            price: 10000,
            description: 'Yes this is diamond.'
        },
        {
            name: 'China Diamond',
            price: 40000000,
            description: 'Damn expensive',
            soldOut: false
        }, 
        {
            name: 'Brilliant Rock',
            price: 2,
            description: 'This Rocks.',
            soldOut: true
        },
    ];

})();