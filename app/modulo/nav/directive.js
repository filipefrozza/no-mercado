angular.module(APP)
	.directive('appNav', function(){
		return {
			restrict: 'AE',
			templateUrl: 'app/modulo/nav/template.html',
			controller: 'nav',
			replace: true
		}
	});