angular.module(APP)
	.controller('nav', function($scope, $cookies){
		$scope.logout = function(){
			$cookies.remove('user');
			window.location.reload();
		};
	});