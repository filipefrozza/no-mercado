angular.module(APP)
    .controller('cadastro', function($scope, $routeParams){
        $scope.tipo = $routeParams.tipo;
    });