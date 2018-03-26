angular.module(APP)
    .directive('appHeader', function(){
        return {
            restrict: 'AE',
            scope: true,
            templateUrl: 'app/modulo/header/template.html'
        }
    });